@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Profile {{ $profile->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/profile') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/profile/' . $profile->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('profile' . '/' . $profile->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $profile->id }}</td>
                                    </tr>
                                    <tr><th> Sex </th><td> {{ $profile->sex }} </td></tr><tr><th> Title </th><td> {{ $profile->title }} </td></tr><tr><th> Name </th><td> {{ $profile->name }} </td></tr><tr><th> Lastname </th><td> {{ $profile->lastname }} </td></tr><tr><th> Email </th><td> {{ $profile->email }} </td></tr><tr><th> Status </th><td> {{ $profile->status }} </td></tr><tr><th> Statusothers </th><td> {{ $profile->statusothers }} </td></tr><tr><th> Food </th><td> {{ $profile->food }} </td></tr><tr><th> School </th><td> {{ $profile->school }} </td></tr><tr><th> Major </th><td> {{ $profile->major }} </td></tr><tr><th> Address </th><td> {{ $profile->address }} </td></tr><tr><th> District </th><td> {{ $profile->district }} </td></tr><tr><th> Subdistrict </th><td> {{ $profile->subdistrict }} </td></tr><tr><th> Postnumber </th><td> {{ $profile->postnumber }} </td></tr><tr><th> Tel </th><td> {{ $profile->tel }} </td></tr><tr><th> Fax </th><td> {{ $profile->fax }} </td></tr><tr><th> Fileregister </th><td> {{ $profile->fileregister }} </td></tr><tr><th> Bill School </th><td> {{ $profile->bill_school }} </td></tr><tr><th> Bill Major </th><td> {{ $profile->bill_major }} </td></tr><tr><th> Bill Address </th><td> {{ $profile->bill_address }} </td></tr><tr><th> Bill District </th><td> {{ $profile->bill_district }} </td></tr><tr><th> Bill Subdistrict </th><td> {{ $profile->bill_subdistrict }} </td></tr><tr><th> Bill Postnumber </th><td> {{ $profile->bill_postnumber }} </td></tr><tr><th> Bill Tel </th><td> {{ $profile->bill_tel }} </td></tr><tr><th> Bill Fax </th><td> {{ $profile->bill_fax }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
