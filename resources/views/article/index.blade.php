@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Article</div>
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
                                    <th>ประเภทการนำเสนอ</th>
                                    <th>กลุ่มสาขา</th>
                                    <th>ชื่อบทความ (ไทย)</th>
                                    <th>ชื่อบทความ (อังกฤษ)</th>
                                    <th>ผู้รับผิดชอบบทความ/ นักวิจัยหลัก</th>
                                    <th>อีเมลผู้รับผิดชอบหลัก</th>
                                    <th>ชื่อผู้ที่จะนำเสนอผลงาน</th>
                                    <th>ชื่ออาจารย์ที่ปรึกษา</th>
                                    <th>เบอร์โทรศัพท์อาจารย์ที่ปรึกษา</th>
                                    <th>User</th>
                                    <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($article as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->prapet }}</td>
                                        <td>{{ $item->group }}</td>
                                        <td>{{ $item->name_th }}</td>
                                        <td>{{ $item->name_en }}</td>
                                        <td>{{ $item->purubpitshop }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->name_present }}</td>
                                        <td>{{ $item->name_aj }}</td>
                                        <td>{{ $item->tel_aj }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
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
