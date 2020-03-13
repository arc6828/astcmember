@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Accept {{ $accept->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/accept') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/accept/' . $accept->id . '/edit') }}" title="Edit Accept"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                        <form method="POST" action="{{ url('accept' . '/' . $accept->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete Accept" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $accept->id }}</td>
                                    </tr>
                                    <tr><th> Email </th><td> {{ $accept->email }} </td></tr><tr><th> Article Id </th><td> {{ $accept->article_id }} </td></tr><tr><th> Reviwer Id </th><td> {{ $accept->reviewer_id }} </td></tr><tr><th> Feedback </th><td> {{ $accept->feedback }} </td></tr><tr><th> Remark </th><td> {{ $accept->remark }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
