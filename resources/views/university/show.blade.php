@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">university {{ $university->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/university') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/university/' . $university->id . '/edit') }}" title="Edit university"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('university' . '/' . $university->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete university" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $university->id }}</td>
                                    </tr>
                                    <tr><th> University </th><td> {{ $university->university }} </td></tr><tr><th> Faculty </th><td> {{ $university->faculty }} </td></tr><tr><th> Address </th><td> {{ $university->address }} </td></tr><tr><th> District </th><td> {{ $university->district }} </td></tr><tr><th> Subdistrict </th><td> {{ $university->subdistrict }} </td></tr><tr><th> Province </th><td> {{ $university->province }} </td></tr><tr><th> Postcode </th><td> {{ $university->postcode }} </td></tr><tr><th> Tel </th><td> {{ $university->tel }} </td></tr><tr><th> Email </th><td> {{ $university->email }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
