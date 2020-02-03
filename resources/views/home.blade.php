@extends('layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-9">
            @php
                $user = Auth::user();
            @endphp
            <div class="card">
                <div class="card-header">ยินดีต้อนรับ, คุณ {{ $user->name }} </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr class="d-none"><th>ID</th><td>{{ $user->id }}</td></tr>
                                <tr class="d-none"><th> ชื่อ-นามสกุล </th><td> {{ $user->name }} </td></tr>
                                <tr><th> อีเมล์ </th><td> {{ $user->email }} </td></tr>
                                <tr><th> สมัครเมื่อ </th><td> {{ $user->created_at }} </td></tr>
                                <tr><th> สถานะ </th><td> {{ $user->profile->role }} </td></tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @php
                $profile = Auth::user()->profile;
            @endphp

            <div class="card mt-4">
                <div class="card-header">โปรไฟล์ของคุณ</div>
                <div class="card-body">

                    <a class="d-none" href="{{ url('/profile') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/profile/' . $profile->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <form  class="d-none" method="POST" action="{{ url('profile' . '/' . $profile->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br/>
                    <br/>

                    @include('profile/show-item')

                </div>
            </div>            

            @if( Auth::user()->profile->role == "author")
            <div class="card mt-4 d-none">
                <div class="card-header">บทความของคุณ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
            @endif

            

        </div>
    </div>
</div>
@endsection
