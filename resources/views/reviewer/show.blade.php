@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Reviewer {{ $reviewer->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/reviewer') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/reviewer/' . $reviewer->id . '/edit') }}" title="Edit Reviewer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('reviewer' . '/' . $reviewer->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Reviewer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $reviewer->id }}</td>
                                    </tr>
                                    <tr><th> Email </th><td> {{ $reviewer->email }} </td></tr><tr><th> Title </th><td> {{ $reviewer->title }} </td></tr><tr><th> Name </th><td> {{ $reviewer->name }} </td></tr><tr><th> Lastname </th><td> {{ $reviewer->lastname }} </td></tr><tr><th> Group </th><td> {{ $reviewer->group }} </td></tr><tr><th> Expert </th><td> {{ $reviewer->expert }} </td></tr><tr><th> School </th><td> {{ $reviewer->school }} </td></tr><tr><th> Major </th><td> {{ $reviewer->major }} </td></tr><tr><th> Address </th><td> {{ $reviewer->address }} </td></tr><tr><th> District </th><td> {{ $reviewer->district }} </td></tr><tr><th> Amphoe </th><td> {{ $reviewer->amphoe }} </td></tr><tr><th> Province </th><td> {{ $reviewer->province }} </td></tr><tr><th> Postnumber </th><td> {{ $reviewer->postnumber }} </td></tr><tr><th> Tel </th><td> {{ $reviewer->tel }} </td></tr><tr><th> Fax </th><td> {{ $reviewer->fax }} </td></tr><tr><th> Type </th><td> {{ $reviewer->type }} </td></tr><tr><th> Remark </th><td> {{ $reviewer->remark }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <a href="{{ url('/reviewer' . '/thank-you') }}" title="Accept"><button class="btn btn-success btn-sm"> Accept</button></a>
                            <a href="" title="Reject"><button class="btn btn-danger btn-sm"> Reject</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
