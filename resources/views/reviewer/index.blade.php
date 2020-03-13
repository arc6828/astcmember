@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ผู้ประเมินบทความ</div>
                    <div class="card-body">
                        <a href="{{ url('/reviewer/create') }}" class="btn btn-success btn-sm d-none" title="Add New Reviewer">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มผู้ประเมินบทความ
                        </a>

                        <form method="GET" action="{{ url('/reviewer') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>เมล์</th>
                                        <th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th>
                                        <th>กลุ่ม</th>
                                        <th>ผู้เชี่ยวชาญ</th>
                                        <!--th>School</th>
                                        <th>Major</th>
                                        <th>Address</th><th>District</th><th>Amphoe</th><th>Province</th><th>Postnumber</th><th>Tel</th><th>Fax</th>
                                        <th>Type</th><th>Remark</th-->
                                        <th>สถานะ</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reviewer as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->title }}</td><td>{{ $item->name }}</td><td>{{ $item->lastname }}</td>
                                        <td>{{ $item->group }}</td>
                                        <td>{{ $item->expert }}</td>
                                        <!--td>{{ $item->school }}</td><td>{{ $item->major }}</td><td>{{ $item->address }}</td><td>{{ $item->district }}</td><td>{{ $item->amphoe }}</td><td>{{ $item->province }}</td><td>{{ $item->postnumber }}</td><td>{{ $item->tel }}</td><td>{{ $item->fax }}</td><td>{{ $item->type }}</td><td>{{ $item->remark }}</td-->
                                        <th>{{ $item->status }}</th>
                                        <td>
                                            <a href="{{ url('/reviewer/' . $item->id) }}" title="View Reviewer"><button class="btn btn-info btn-sm d-none"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/reviewer/' . $item->id . '/edit') }}" title="Edit Reviewer"><button class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/reviewer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete Reviewer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>


                                            <form method="POST" action="{{ url('/reviewer' . '/' . $item->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                {{ method_field('POST') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="status" value="Waiting">
                                             
                                            @switch($item->status)
                                            @case("Waiting")                                                     
                                                <button type="submit" class="btn btn-success btn-sm d-none" title="Invite Reviewer"> เชิญ</button>
                                                @break
                                            @case("Accept")                                                     
                                                <button type="submit" class="btn btn-success btn-sm d-none" title="Invite Reviewer"> เชิญ</button>
                                                @break
                                            @case("Reject")                                                     
                                                <button type="submit" class="btn btn-success btn-sm d-none" title="Invite Reviewer"> เชิญ</button>
                                                @break
                                             @case("")
                                                <button type="submit" class="btn btn-success btn-sm" title="Invite Reviewer"> เชิญ</button>
                                                @break
                                            @endswitch
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $reviewer->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
