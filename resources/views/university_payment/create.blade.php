@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New university_payment</div>
                    <div class="card-body">
                        <a href="{{ url('/university_payment') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/university_payment') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('university_payment.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
                <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                        <th>ลำดับ</th>
                                        <th>ราคาบทความ</th>
                                        <th>หมายเหตุ</th>
                                        <th>ใบเสร็จ</th>
                                        <th>รหัส</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($article as $item)
                                <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->total }}</td>
                                        <td>{{ $item->remark }}</td>
                                        <td><img src="{{ url('storage')}}/{{ $item->receipt }}" width="100" /></td>
                                        <td>{{ $item->user_id }}</td>
                                     <td>
                                            <a href="{{ url('/university_payment/' . $item->id) }}" title="View university_payment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/university_payment/' . $item->id . '/edit') }}" title="Edit university_payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/university_payment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete university_payment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
@endsection
