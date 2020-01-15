@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
         

            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        <a href="{{ url('/profile/create') }}" class="btn btn-success btn-sm d-none" title="Add New Profile">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/profile') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ชื่อ-นามสกุล</th>
                                       
                                        <th>สถานะการชำระเงิน</th>
                                        <th>ยอดที่ต้องชำระ</th>
                                        <th class="d-none">สถานภาพอื่นๆ โปรดระบุ</th>
                                        <th class="d-none">อาหารกลางวัน</th>
                                        <th class="">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @php 
                                    //$profiles = request('role')? $profile->where('role',  request('role')) : $profile;
                                    
                                    //$profiles = $profile->whereNotIn('role', ['guest'] );
                                @endphp
                                
                                @foreach($profile as $item)
                                    <tr>
                                        <td>{{ $loop->iteration+ (request('page','1')-1) *  25 }}</td>
                                        <td>
                                            @if (Auth::user()->profile->role == "academic-admin")    
                                                <div><a href="{{ url('/profile/' . $item->id) }}" title="View Profile"> {{ $item->title }} {{ $item->name }} {{ $item->lastname }}</a></div>
                                            @else
                                                <div>{{ $item->title }} {{ $item->name }} {{ $item->lastname }}</div>
                                            @endif
                                            <div>วันที่ลงทะเบียน {{ $item->created_at }} </div>
                                            
                                            @switch( $item->role )
                                                @case("author")
                                                    <div><span class="badge badge-success">ผู้ส่งบทความ</span> จำนวน {{ $item->articles->count('title') }} เรื่อง</div>
                                                    @break                                                         
                                                @case("audience")
                                                    <div><span class="badge badge-primary">ผู้เข้าร่วม</span></div>
                                                    @break
                                                @case("guest")
                                                    <div><span class="badge badge-danger">pending</span></div>
                                                    @break
                                                @default
                                                    <div><span class="badge badge-warning">{{ $item->role }}</span></div>
                                                                                        
                                            @endswitch  
                                            
                           
                                        </td>
                                        <td>
                                            
                                            @switch( $item->payment_status )
                                                @case("unpaid")
                                                    <div><span class="badge badge-primary">ยังไม่ได้ชำระ</span></div>
                                                    <div>{{ $item->unpaid_at }}</div>
                                                @break
                                                         
                                                @case("chackpayment")
                                                    <div><span class="badge badge-warning">กำลังตรวจสอบ</span></div>
                                                    <div>{{ $item->chackpayment_at }}</div>
                                                @break

                                                @case("paid")
                                                    <div><span class="badge badge-success">ชำระเงินครบ</span></div>
                                                    <div>{{ $item->paid_at }}</div>
                                                @break

                                                @case("notpaid")
                                                    <div><span class="badge badge-danger">ชำระเงินไม่ครบ</span></div>
                                                    <div>{{ $item->notpaid_at }}</div>
                                                @break


                                        
                                            @endswitch  

                                        </td>
                                        <td>{{ $item->articles->sum('total_debt') }}</td>    
                                        <td>
                                            <form method="POST" action="{{ url('/profile' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}

                                            @switch($item->payment_status)
                                                
                                                @case("unpaid")
                                                    @if (Auth::user()->profile->role == "academic-admin")    
                                                        <input type="hidden" name="payment_status" value="chackpayment">  </input>
                                                        <button type="submit" class="btn btn-warning btn-sm"> กำลังตรวจสอบ</button>
                                                    @endif
                                                    @break

                                                @case("chackpayment")
                                                    @if (Auth::user()->profile->role == "academic-admin")    
                                                        <select name="payment_status" onchange="">
                                                            <option value="paid">ชำระเงินครบ </option>
                                                            <option value="notpaid">ชำระเงินไม่ครบ </option>
                                                        </select>
                                                            <button type="submit" class="btn btn-warning btn-sm"> submit</button>
                                                    @endif
                                                    @break
                                                
                                                @case("paid")
                                                    @break
                                                
                                                @case("notpaid")
                                                    @if (Auth::user()->profile->role == "academic-admin")
                                                    <select name="payment_status" onchange="">
                                                        <option value="chackpayment">กำลังตรวจสอบ </option>
                                                        <option value="paid">ชำระเงินให้ครบ </option>
                                                    </select>
                                                    <button type="submit" class="btn btn-warning btn-sm"> submit</button>
                                                    @endif

                                                @break
                                          

                                            @endswitch
                                    </form>
                                        </td>
                                        
                                        <td class="d-none">
                                            <a href="{{ url('/profile/' . $item->id) }}" title="View Profile"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/profile/' . $item->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/profile' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $profile->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">สัดส่วนผู้เข้าร่วมงาน</div>
                    <div class="card-body">
                        แสดง Pie Chart ของระบบ ...

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
