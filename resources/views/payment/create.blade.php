@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Payment</div>
                    <div class="card-body">
                        <a href="{{ url('/payment') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/payment') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('payment.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
        @if( $user  )
            <div class="card mt-4">
                <div class="card-header">Your Completed Article  Baht</div>
                     <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>บทความ</th>
                                        <th>ราคาบทความ</th> 
                                        <th>คงเหลือ</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach( $user->articles as $item)
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
                                            <div><b>ประเภท : </b>{{ $item->prapet }} <b class="ml-4">กลุ่มสาขา : </b>{{ $item->group }}</div>
                                            <div></div>
                                            <div><b>ชื่อ : </b>{{ $item->purubpitshop }} <b  class="ml-4">ชื่อผู้นำเสนอ : </b>{{ $item->name_present }}</div>
                                            <div><b>อีเมล : </b>{{ $item->email }}</div>
                                            
                                        </td>
                                        <td>{{$item->price}}</td> 
                                        <td>{{$item->total_debt}}</td>
                                        <td>{{$item->status}}</td>   
                                       
                                        
                                    
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
            </div>  
            </div>
        </div>
        @endif
    </div>
@endsection
