@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Article {{ $article->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/article') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/article/' . $article->id . '/edit') }}" title="Edit Article"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('article' . '/' . $article->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Article" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $article->id }}</td>
                                    </tr>
                                    <tr><th> Prapet </th><td> {{ $article->prapet }} </td></tr><tr><th> Group </th><td> {{ $article->group }} </td></tr><tr><th> Name Th </th><td> {{ $article->name_th }} </td></tr><tr><th> Name En </th><td> {{ $article->name_en }} </td></tr><tr><th> Purubpitshop </th><td> {{ $article->purubpitshop }} </td></tr><tr><th> Email </th><td> {{ $article->email }} </td></tr><tr><th> Name Present </th><td> {{ $article->name_present }} </td></tr><tr><th> Name Aj </th><td> {{ $article->name_aj }} </td></tr><tr><th> Tel Aj </th><td> {{ $article->tel_aj }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
