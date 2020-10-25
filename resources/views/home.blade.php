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
                                <tr><th> อีเมล </th><td> {{ $user->email }} </td></tr>
                                <tr><th> สมัครเมื่อ </th><td> {{ $user->created_at }} </td></tr>
                                <tr><th> สถานะ </th>
                                    <td><div>
                                            @switch( Auth::user()->profile->role)
                                                @case("guest")
                                                    <div><a href="{{ url('/profile/' . $profile->id . '/edit') }}" title="Edit Profile"> กรุณากรอกข้อมูลการเข้าร่วมงาน</a></div>
                                                @break
                                                @case("author")
                                                    <div>ผู้ส่งบทความ <br><br>
                                                            <button class="btn btn-success btn-sm" >
                                                                    <a class="text-white" style="text-decoration: none" href="{{ url('/article/create') }}" >
                                                                      <i class="fas fa-fw fa-paper-plane"></i> <span>เริ่มต้นส่งบทความของคุณ</span>
                                                                    </a>
                                                            </button>
                                                    </div>
                                                @break
                                                @case("audience")
                                                    <div>ผู้เข้าชมงาน</div>
                                                @break
                                                @case("academic-admin")
                                                    <div>กรรมการวิชาการ <br><br>
                                                            <button class="btn btn-success btn-sm" >
                                                                    <a class="text-white" style="text-decoration: none" href="{{ url('/article') }}" >
                                                                      <i class="fas fa-file-alt"></i> <span>ดูบทความทั้งหมด</span>
                                                                    </a>
                                                            </button>
                                                    </div>
                                                @break
                                                @case("admin")
                                                    <div>ผู้ดูแลระบบ</div>
                                                @break
                                            @endswitch
                                        </div>
                                    </td>
                                </tr>
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

                    <a class="d-none" href="{{ url('/profile') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                    <a href="{{ url('/profile/' . $profile->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <i class="fas fa-user-edit"></i> แก้ไข</button></a>

                    <form  class="d-none" method="POST" action="{{ url('profile' . '/' . $profile->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
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


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary  d-none" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button> -->

<!-- Modal -->
<!-- div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div>
                    <img src="{{ url('/img/banner-11-3-63-3-resize.jpg') }}" width="100%">
                </div>
            </div>
        
        </div>
    </div>
</div>
<script>

$( document ).ready(function() {
    console.log( "ready!" );
    $('#exampleModal').modal('show');
});
</script> -->


@endsection
