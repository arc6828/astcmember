@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">university_payment {{ $university_payment->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/university_payment') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/university_payment/' . $university_payment->id . '/edit') }}" title="Edit university_payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('university_payment' . '/' . $university_payment->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete university_payment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $university_payment->id }}</td>
                                    </tr>
                                    <tr><th> Total </th><td> {{ $university_payment->total }} </td></tr><tr><th> Remark </th><td> {{ $university_payment->remark }} </td></tr><tr><th> Receipt </th><td> {{ $university_payment->receipt }} </td></tr><tr><th> User Id </th><td> {{ $university_payment->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
