<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use App\Summary_evaluation;
use App\Mail\TestMail;
use App\Mail\ArticleReceiveMail;
use App\Mail\ArticleWaitModifyFormatMail;
use Illuminate\Support\Facades\Mail;


use App\Evaluation;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        switch(Auth::user()->profile->role){
            case "admin" : //FOR ADMIN SEE ALL
            case "academic-admin" : //FOR ACADEMIC-ADMIN SEE ALL
            if (!empty($keyword)) {
                $article = Article::whereHas('profile', function ($query) {
                            $query->where('role',  'author');
                        })
                        ->where(function($query) use ($keyword){
                            $query->where('prapet', 'LIKE', "%$keyword%")
                            //->orWhere('total_dept', 'LIKE', "%$keyword%")
                            ->orWhere('group', 'LIKE', "%$keyword%")
                            ->orWhere('name_th', 'LIKE', "%$keyword%")
                            ->orWhere('name_en', 'LIKE', "%$keyword%")
                            ->orWhere('purubpitshop', 'LIKE', "%$keyword%")
                            ->orWhere('email', 'LIKE', "%$keyword%")
                            ->orWhere('name_present', 'LIKE', "%$keyword%")
                            ->orWhere('name_aj', 'LIKE', "%$keyword%")
                            ->orWhere('tel_aj', 'LIKE', "%$keyword%");
                            
                        })
                        ->latest('updated_at')->paginate($perPage);
                } else {
                    $article = Article::whereHas('profile', function ($query) {
                            $query->where('role',  'author');
                        })->latest('updated_at')->paginate($perPage);
                }                
                break;
            default : //FOR NON ADMIN SEE ONLY SELF
                if (!empty($keyword)) {
                    $article = Article::where('user_id' , Auth::user()->id)
                        ->where(function($query) use ($keyword){
                            $query->where('prapet', 'LIKE', "%$keyword%")
                            ->orWhere('total_dept', 'LIKE', "%$keyword%")
                            ->orWhere('group', 'LIKE', "%$keyword%")
                            ->orWhere('name_th', 'LIKE', "%$keyword%")
                            ->orWhere('name_en', 'LIKE', "%$keyword%")
                            ->orWhere('purubpitshop', 'LIKE', "%$keyword%")
                            ->orWhere('email', 'LIKE', "%$keyword%")
                            ->orWhere('name_present', 'LIKE', "%$keyword%")
                            ->orWhere('name_aj', 'LIKE', "%$keyword%")
                            ->orWhere('tel_aj', 'LIKE', "%$keyword%");
                            
                        })
                        ->latest('updated_at')->paginate($perPage);
                } else {
                    $article = Article::where('user_id' , Auth::user()->id)->latest('updated_at')->paginate($perPage);
                }
                break; 
        }

        

        return view('article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('article.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $groups = [
            "HS" => "กลุ่มวิทยาศาสตร์สุขภาพ",
            "AS" => "กลุ่มวิทยาศาสตร์ประยุกต์",
            "BS" => "กลุ่มวิทยาศาสตร์พื้นฐาน",
            "IT" => "กลุ่มคอมพิวเตอร์และเทคโนโลยีสารสนเทศ",
            "INNO" => "กลุ่มนวัตกรรม"
        ];
        $requestData = $request->all();
        $group = $requestData['group'];
        $requestData['group_name'] = $groups[$group];
        
        $requestData['status'] = "Create";
        $requestData['code'] = $this->getNewCode($requestData['group'],$requestData['prapet']);
        if(Auth::user()->profile->status == "กำลังศึกษาปริญญาตรีหรือต่ำกว่า"){
            $requestData['price'] = 600;
            $requestData['total_debt'] = 600;
        }else{
            $requestData['price'] = 1500;
            $requestData['total_debt'] = 1500;
        }
        Article::create($requestData);

        return redirect('article')->with('flash_message', 'Article added!');
    }

    public function getNewCode($group , $prapet){
        
        $prapet_codes = [            
            "Oral Presentation" => "O",
            "Poster" => "P",
        ];
        $number = Article::where('group', $group)->where('prapet',$prapet)->count();
        $count =  $number + 1;
        //$year = (date("Y") + 543) % 100;
        //$year = date("y");
        //$month = date("m");
        $number = sprintf('%03d', $count);
        $prapet_code = $prapet_codes[$prapet];
        $order_code = "{$group}-{$prapet_code}-{$number}";
        return $order_code;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Request $request,$id)
    {
        $article = Article::findOrFail($id);
        //$summary_evaluation = Summary_evaluation::where('article_id',$id)->get();

        return view('article.show', compact('article' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $article = Article::findOrFail($id);
        if(!empty($requestData['status'])){
            switch($requestData['status']){
                case "Create" : 
                    $requestData['created_at'] = date('Y-m-d H:i:s');
                    break;
                case "receive" : 
                    $requestData['received_at'] = date('Y-m-d H:i:s');
                    break;
    
                case "checkformat" : 
                    $requestData['checkformat_at'] = date('Y-m-d H:i:s');
                    break;
    
                case "waitmodifyformat" : 
                    $requestData['waitmodifyformat_at'] = date('Y-m-d H:i:s');
                    break;
    
                case "consider" : 
                    $requestData['consider_at'] = date('Y-m-d H:i:s');
                    break;
    
                case "pass_modify" : 
                    $requestData['pass_modify_at'] = date('Y-m-d H:i:s');
                    break;
    
                case "waitmodify" : 
                    $requestData['waitmodify_at'] = date('Y-m-d H:i:s');
                    break;
    
                case "pass_modify" : 
                    $requestData['pass_at'] = date('Y-m-d H:i:s');
                    break;
    
                case "notpass" : 
                    $requestData['notpass_at'] = date('Y-m-d H:i:s');
                    break;
    
                case "pass" : 
                    $requestData['pass_at'] = date('Y-m-d H:i:s');
                    break;
            }
        }
                                                        
        
        $article->update($requestData);

        //IF HAS SEND MAIL
        if(!empty($requestData['status'])){
            switch($requestData['status']){
                case "waitmodifyformat" : 
                    $email = $article->email;
                    Mail::to($email)->send(new ArticleWaitModifyFormatMail($article));
                    break;
                
            }
        }

        return redirect('article')->with('flash_message', 'Article updated!');
    }

    public function testmail($id)
    {
        $article = Article::findOrFail($id);
        $email = $article->user->email;
        echo $article->user_id ;
        echo $email;
        Mail::to($email)->send(new TestMail($article));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Article::destroy($id);

        return redirect('article')->with('flash_message', 'Article deleted!');
    }
}
