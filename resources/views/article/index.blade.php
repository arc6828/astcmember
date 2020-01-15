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
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    
                                    <th>ชื่อบทความ</th>
                                    <th>ค่าลงทะเบียน</th>
                                    <th>สถานะบทความ</th>
                                    <th>Actions</th>
                                    <th class="d-none">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($article as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div>
                                                <a href="{{ url('/article/' . $item->id) }}" title="View Article">{{ $item->name_th }}
                                                </a>
                                            </div>
                                            <div>
                                                {{ $item->name_en }}
                                            </div>

                                            <div><b>ประเภท : </b>{{ $item->prapet }} <b class="ml-4">กลุ่มสาขา : </b>{{ $item->group }}
                                            </div>

                                            <div></div>

                                            <div><b>ชื่อ : </b>{{ $item->purubpitshop }} <b  class="ml-4">ชื่อผู้นำเสนอ : </b>{{ $item->name_present }}
                                            </div>

                                            <div><b>อีเมล : </b>{{ $item->email }}</div>

                                            <div>
                                                @php
                                                    $document = ($item->latest_word_documents)? $item->latest_word_documents->first() : null;
                                                @endphp
                                                @if($document)
                                                    <a href="{{ url('storage') }}/{{$document->filename }}" class="btn btn-primary btn-sm mr-5">ดาวโหลด Docx</a> <a href="" class="d-none">PDF</a>
                                                @endif
                                            </div>
                                            
                                        </td>
                                        <td>
                                            <div>{{ $item->price }}</div>
                                            <div>
                                                @if( $item->total_debt == 0 )
                                                    <span class="badge badge-success">ส่งหลักฐานชำระเงินแล้ว</span>
                                                @endif
                                            </div>
                                        </td>
                                        


                                        <td>
                                            @switch($item->status)
                                            @case("Create")                                                     
                                                <div><span class="badge badge-primary">ได้รับบทความแล้ว</span></div>
                                                <div>{{ $item->created_at}}</div>
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
                                                        
                                                        <input type="hidden" name="status" value="checkformat">
                                                        <button type="submit" class="btn btn-warning btn-sm"> กำลังตรวจสอบรูปแบบ</button>
                                                        @endif
                                                        @break

                                                    @case("checkformat")
                                                    @if(Auth::user()->profile->role == "academic-admin")                                                  
                                                        
                                                       <select name="status" onchange="">
                                                          <option value="waitmodifyformat">แก้ไขรูปแบบ </option>
                                                          <option value="consider">รูปแบบถูกต้อง</option>
                                                          
                                                          
                                                        </select>
                                                        <button type="submit" class="btn btn-warning btn-sm"> submit</button>
                                                        @endif
                                                        @break

                                                    @case("waitmodifyformat")
                                                    @if(Auth::user()->profile->role == "academic-admin")                                                  
                                                        
                                                        <select name="status" onchange="">
                                                          <option value="waitmodifyformat">แก้ไขรูปแบบ </option>
                                                          <option value="consider">รูปแบบถูกต้อง</option>
                                                          
                                                          
                                                        </select>
                                                        <button type="submit" class="btn btn-warning btn-sm"> submit</button>
                                                        @endif
                                                        @break

                                                        @case("consider")
                                                    @if(Auth::user()->profile->role == "academic-admin")                                                  
                                                        
                                                        <select name="status" onchange="">
                                                          
                                                          <option value="pass">ผ่าน </option>
                                                          <option value="pass_modify">ผ่าน (มีการแก้ไข)</option>
                                                          <option value="notpass">ไม่ผ่าน</option>
                                                          
                                                        </select>
                                                        <button type="submit" class="btn btn-warning btn-sm"> submit</button>
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
