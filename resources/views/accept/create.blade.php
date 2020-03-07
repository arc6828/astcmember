@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">เลือกผู้ประเมิน</div>
                    <div class="card-body">
                        <a href="{{ url('/accept') }}" title="Back"><button class="btn btn-warning btn-sm d-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        
                        

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/accept') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}

                            @include ('accept.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
