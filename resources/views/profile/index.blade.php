@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        <a href="{{ url('/profile/create') }}" class="btn btn-success btn-sm" title="Add New Profile">
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
                                        <th>เพศ</th>
                                        <th>คำนำหน้าชื่อ</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>อีเมล</th>
                                        <th>สถานภาพ</th>
                                        <th>สถานภาพอื่นๆ โปรดระบุ</th>
                                        <th>อาหารกลางวัน</th>
                                        <th>สถาบัน</th>
                                        <th>คณะ/ภาควิชา</th>
                                        <th>เลขที่ ซอย ถนน ตำบล</th>
                                        <th>อำเภอ</th>
                                        <th>จังหวัด</th>
                                        <th>รหัสไปรษณีย์</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>เบอร์โทรสาร</th>
                                        <th>ไฟล์หลักฐานการชำระเงินค่าลงทะเบียน</th>
                                        <th>สถาบัน</th>
                                        <th>คณะ/ภาควิชา</th>
                                        <th>เลขที่ ซอย ถนน ตำบล</th>
                                        <th>อำเภอ</th>
                                        <th>จังหวัด</th>
                                        <th>รหัสไปรษณีย์</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>เบอร์โทรสาร</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($profile as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->sex }}</td><td>{{ $item->title }}</td><td>{{ $item->name }}</td><td>{{ $item->lastname }}</td><td>{{ $item->email }}</td><td>{{ $item->status }}</td><td>{{ $item->statusothers }}</td><td>{{ $item->food }}</td><td>{{ $item->school }}</td><td>{{ $item->major }}</td><td>{{ $item->address }}</td><td>{{ $item->district }}</td><td>{{ $item->subdistrict }}</td><td>{{ $item->postnumber }}</td><td>{{ $item->tel }}</td><td>{{ $item->fax }}</td><td>{{ $item->fileregister }}</td><td>{{ $item->bill_school }}</td><td>{{ $item->bill_major }}</td><td>{{ $item->bill_address }}</td><td>{{ $item->bill_district }}</td><td>{{ $item->bill_subdistrict }}</td><td>{{ $item->bill_postnumber }}</td><td>{{ $item->bill_tel }}</td><td>{{ $item->bill_fax }}</td>
                                        <td>
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
            </div>
        </div>
    </div>
@endsection
