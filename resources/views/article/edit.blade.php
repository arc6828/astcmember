@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">แก้ไขบทความที่ {{ $article->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/article/' . $article->id) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> บทความของฉัน</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/article/' . $article->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('article.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
