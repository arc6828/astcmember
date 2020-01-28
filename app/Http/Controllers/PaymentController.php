<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Payment;
use App\Profile;
use App\User;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PaymentController extends Controller
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
                    $payment = Payment::where('total', 'LIKE', "%$keyword%")
                        ->orWhere('remark', 'LIKE', "%$keyword%")
                        ->orWhere('receipt', 'LIKE', "%$keyword%")
                        ->orWhere('user_id', 'LIKE', "%$keyword%")
                        ->latest()->paginate($perPage);
                } else {
                    $payment = Payment::latest()->paginate($perPage);
                }
                break;
            default : //FOR NON ADMIN SEE ONLY SELF
            
                if (!empty($keyword)) {
                    $payment = Payment::where('user_id' , Auth::user()->id)
                        ->where(function($query) use ($keyword){
                            $query->where('total', 'LIKE', "%$keyword%")
                            ->orWhere('remark', 'LIKE', "%$keyword%")
                            ->orWhere('receipt', 'LIKE', "%$keyword%")
                            ->orWhere('user_id', 'LIKE', "%$keyword%");
                        })
                        ->latest()->paginate($perPage);
                } else {
                    $payment = Payment::where('user_id' , Auth::user()->id)->latest()->paginate($perPage);
                }
        }

        

        return view('payment.index', compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $payment = null;
        //$user_id = $request->get('user_id');
        
        //ดึงค่า user_id ของผู้ที่ Login
        $user_id = Auth::id(); //
        $user = User::find($user_id);
        if($user) {

            $payment = new Payment;
            $payment->total = $user->articles->sum('price');
            $payment->user_name = $user->name;
            $payment->user_id = $user->id;
        }
        return view('payment.create',compact('user','payment'));
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
    
        $requestData = $request->all();
                if ($request->hasFile('receipt')) {
        $requestData['receipt'] = $request->file('receipt')
                ->store('uploads', 'public');
        }
        $payment = Payment::create($requestData); // สร้าง create ใน 1 คอลั้ม

        //อัพเดท article

        $user_id = $requestData['user_id']; 
        /*
        if( ($user_id) == 1500 ){  //จ่ายครบ 1500 บาท
            $data = [
                'payment_id' => $payment->id ,
                //'status' => "completed" ,
                'paid_at' => date("Y-m-d H:i:s") ,
            ];
        }else if (($user_id) < 1500){ // จ่ายไม่ครบ 1500
            $data = [
                'payment_id' => $payment->id ,
                //'status' => "notcompleted" ,
                //'total_debt'=>"ยังจ่ายไม่ครบ",      //หนี้ที่เหลืออยู่
                'paid_at' => date("Y-m-d H:i:s") ,
            ];
        }*/
        $data = [
            'payment_id' => $payment->id ,
            'total_debt'=> 0 ,      //หนี้ที่เหลืออยู่  //คำนวณ Total Debt
            'paid_at' => date("Y-m-d H:i:s") ,
        ];
       
        //อัพเดท Article บางส่วน 
        Article::where('user_id',$user_id) // หาบทความใน user_id
            //   ->where('status','completed') // อัพเดทสถานะของบทความ
            ->update( $data ); // อัพเดทข้อมูล

        $data2 = [
            'payment_status' => "chackpayment",
        ];//สร้างข้อมูลในการอัพเดท จะทำให้อัพได้หลายคอลั่ม
            
        Profile::where('user_id',$user_id)
            ->where('payment_status', 'unpaid')//ดึงข้อมูลเฉพาะ unpaid
            ->update($data2);//อัพเดทข้อมูลในอาเรย์ data 2
        return redirect('payment')->with('flash_message', 'Payment added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $payment = Payment::findOrFail($id);

        return view('payment.show', compact('payment'));
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
        $payment = Payment::findOrFail($id);

        return view('payment.edit', compact('payment'));
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
                if ($request->hasFile('receipt')) {
            $requestData['receipt'] = $request->file('receipt')
                ->store('uploads', 'public');
        }

        $payment = Payment::findOrFail($id);
        $payment->update($requestData);

        return redirect('payment')->with('flash_message', 'Payment updated!');
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
        Payment::destroy($id);

        return redirect('payment')->with('flash_message', 'Payment deleted!');
    }
}
