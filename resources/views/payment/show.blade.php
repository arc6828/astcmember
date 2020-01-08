@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Payment {{ $payment->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/payment') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/payment/' . $payment->id . '/edit') }}" title="Edit Payment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('payment' . '/' . $payment->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ลำดับ</th> 
                                            <td>{{ $payment->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ราคารวม </th>
                                            <td> {{ $payment->total }} </td>
                                    </tr>
                                    <tr>
                                        <th> หมายเหตุ </th>
                                            <td> {{ $payment->remark }} </td>
                                    </tr>
                                    <tr>
                                        <th> ใบเสร็จ </th>
                                            <td> {{ $payment->receipt }} </td>
                                    </tr>
                                    <tr>
                                        <th> เล่มที่ </th>
                                            <td> {{ $payment->user_id }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
