@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">บทความทั้งหมด</div>
                    <div class="card-body">
                        <a href="{{ url('/article/create') }}" class="btn btn-success btn-sm" title="Add New Article">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        


                        <form method="GET" action="{{ url('/article') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <style>
                            .article-title{
                                max-width : 500px;
                            }
                        </style>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    
                                    <th>ชื่อบทความ</th>
                                    <th>สถานะบทความ</th>
                                    @if(Auth::user()->profile->role == "academic-admin")
                                    <th>Next Actions</th>
                                    @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($article as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="article-title"  >
                                            <div>
                                                <a href="{{ url('/article/' . $item->id) }}" title="View Article">{{ $item->name_th }}
                                                </a>
                                            </div>
                                            <div>
                                                {{ $item->name_en }}
                                            </div>

                                            <div>
                                                <b>ประเภท : </b>{{ $item->prapet }} 
                                                <b class="ml-4">กลุ่มสาขา : </b>{{ $item->group }}
                                                <b class="ml-4">รหัส : </b>{{ $item->code }}
                                            </div>

                                            <div></div>

                                            <div><b>ชื่อ : </b>{{ $item->purubpitshop }} <b  class="ml-4">ชื่อผู้นำเสนอ : </b>{{ $item->name_present }}
                                            </div>

                                            <div><b>อีเมล : </b>{{ $item->email }}</div>
                                            <div>
                                                <b>ค่าลงทะเบียน : </b>{{ $item->price }}
                                            
                                                @if( $item->total_debt == 0 )
                                                    <span class="badge badge-success">ส่งหลักฐานชำระเงินแล้ว</span>
                                                @endif
                                            </div>
                                            <div>
                                                @php
                                                    $document_word = ($item->latest_word_documents)? $item->latest_word_documents->first() : null;
                                                    $document_pdf = ($item->latest_pdf_documents)? $item->latest_pdf_documents->first() : null;
                                                @endphp
                                                @if($document_word)
                                                    <a href="{{ url('storage') }}/{{$document_word->filename }}" class="btn btn-primary btn-sm mr-5">ดาวโหลด Docx</a> 
                                                @endif
                                                @if($document_pdf)
                                                    <a href="{{ url('storage') }}/{{$document_pdf->filename }}" class="btn btn-danger btn-sm mr-5">ดาวโหลด PDF</a>
                                                @endif
                                            </div>
                                            
                                        </td>
                                        


                                        <td>
                                            @switch($item->status)
                                            @case("Create")                                                     
                                                <div><span class="badge badge-warning">รอการอัพโหลดบทความ</span></div>
                                                <div>{{ $item->created_at}}</div>
                                                @break
                                            @case("receive")                                                     
                                                <div><span class="badge badge-primary">ได้รับบทความแล้ว</span></div>
                                                <div>{{ $item->received_at}}</div>
                                                @break
                                            @case("checkformat")                                                 
                                                <div><span class="badge badge-warning">กำลังตรวจสอบรูปแบบ</span></div>
                                                <div>{{ $item->checkformat_at }}</div>
                                                @break
                                            @case("waitmodifyformat")                                                    
                                                <div ><span class="badge badge-warning">รอการแก้ไขรูปแบบ</span></div>
                                                <div>{{ $item->waitmodifyformat_at }}</div>
                                                @break
                                            @case("consider")                                                     
                                                <div><span class="badge badge-warning">รอการพิจารณา</span></div>
                                                <div>{{ $item->consider_at }}</div>
                                                @break
                                            @case("pass_modify")                                                     
                                                <div><span class="badge badge-warning">ผ่าน (มีการแก้ไข)</span></div>
                                                <div>{{ $item->pass_modify_at }}</div>
                                                @break
                                            @case("waitmodify")                                                     
                                                <div><span class="badge badge-warning">รอการแก้ไข</span></div>
                                                <div>{{ $item->waitmodify_at }}</div>
                                                @break
                                            @case("pass")                                                     
                                                <div><span class="badge badge-success">ผ่าน</span></div>
                                                <div>{{ $item->pass_at }}</div>
                                                @break
                                            @case("notpass")                                                     
                                                <div><span class="badge badge-danger">ไม่ผ่าน</span></div>
                                                <div>{{ $item->notpass_at }}</div>
                                                @break
                                            @endswitch   
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ url('/article' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                @switch($item->status)

                                                    @case("Create")
                                                        @if(Auth::user()->profile->role == "academic-admin")    
                                                            <input type="hidden" name="status" value="receive">
                                                            <button type="submit" class="btn btn-warning btn-sm d-none"> ได้รับบทความแล้ว</button>
                                                        @endif
                                                        @break

                                                    @case("receive")
                                                        @if(Auth::user()->profile->role == "academic-admin")     
                                                            <input type="hidden" name="status" value="checkformat">
                                                            <button type="submit" class="btn btn-warning btn-sm"> กำลังตรวจสอบรูปแบบ</button>
                                                        @endif
                                                        @break

                                                    @case("checkformat")
                                                        @if(Auth::user()->profile->role == "academic-admin")                                                  
                                                        
                                                       <select name="status" onchange="if(this.value == 'consider') document.querySelector('#comment').classList.add('d-none'); else  document.querySelector('#comment').classList.remove('d-none'); ">
                                                          <option value="waitmodifyformat">แก้ไขรูปแบบ </option>
                                                          <option value="consider">รูปแบบถูกต้อง</option>
                                                          
                                                          
                                                        </select>
                                                        <div id="comment">
                                                            <div><input name="check_abstract" id="check_abstract" type="checkbox"> บทคัดย่อเกิน 250 คำ / ภาษา</div>
                                                            <div><input name="check_keyword" id="check_keyword" type="checkbox"> คำสำคัญเกิน 5 คำ</div>
                                                            <div><input name="check_page" id="check_page" type="checkbox"> จำนวนหน้าน้อยกว่า 8 หรือมากกว่า  10 หน้า</div>
                                                        </div>
                                                        <button type="submit" class="btn btn-warning btn-sm"> submit</button>
                                                        @endif
                                                        @break

                                                    @case("waitmodifyformat")
                                                    @if(Auth::user()->profile->role == "academic-admin")                                                  
                                                        
                                                        <select name="status" onchange="">                                                          
                                                          <option value="consider">รูปแบบถูกต้อง</option> 
                                                        </select>                                                        
                                                        
                                                        <button type="submit" class="btn btn-warning btn-sm"> submit</button>
                                                        @endif
                                                        @break

                                                        @case("consider")
                                                            @if(Auth::user()->profile->role == "academic-admin")                                                  
                                                            
                                                            <select name="status" onchange="" class="d-none">
                                                            
                                                            <option value="pass">ผ่าน </option>
                                                            <option value="pass_modify">ผ่าน (มีการแก้ไข)</option>
                                                            <option value="notpass">ไม่ผ่าน</option>
                                                            
                                                            </select>
                                                            <button type="submit" class="btn btn-warning btn-sm d-none"> submit</button>
                                                            @endif

                                                            @if(Auth::user()->profile->role == "academic-admin")
                                                                <ol style="padding-left: 15px;">
                                                                @foreach($item->accepts as $accept)
                                                                    <li>
                                                                        {{ $accept->reviewer->title }}{{ $accept->reviewer->name }}  {{$accept->reviewer->lastname}} 
                                                                    </li>
                                                                @endforeach
                                                                </ol>
                                                                <a href="{{ url('/accept/create?article_id=' . $item->id) }}" title=""><button type="button" class="btn btn-primary btn-sm mr-5"> เพิ่มผู้ประเมิน</button></a>
                                                                
                                                             
                                                            @endif
                                                            @break

                                                        @case("pass_modify")
                                                            @if(Auth::user()->profile->role == "academic-admin") 
                                                            <input type="hidden" name="status" value="waitmodify">
                                                            <button type="submit" class="btn btn-warning btn-sm"> รอการพิจารณา</button>                                                 
                                                            
                                                            @endif
                                                            @break

                                                        @case("waitmodify")
                                                             @if(Auth::user()->profile->role == "academic-admin")    
                                                            <select name="status" onchange="">
                                                            <option value="pass">ผ่าน </option>
                                                            <option value="pass_modify">ผ่าน (มีการแก้ไข)</option>
                                                            <option value="notpass">ไม่ผ่าน</option>
                                                            
                                                            </select>
                                                            <button type="submit" class="btn btn-warning btn-sm"> submit</button>   
                                                            
                                                            @endif
                                                            @break

                                                        @case("pass")
                                                            <input type="hidden" name="status" value="pass">
                                                            @break

                                                         @case("notpass")
                                                            <input type="hidden" name="status" value="notpass">
                                                            @break

                                                @endswitch
                                            </form>
                                            
                                        </td>
                                        
                                    
                                        <td class="d-none">
                                            <a href="{{ url('/article/' . $item->id) }}" title="View Article"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/article/' . $item->id . '/edit') }}" title="Edit Article"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/article' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Article" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $article->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
