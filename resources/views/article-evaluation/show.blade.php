@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ArticleEvaluation {{ $articleevaluation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/article-evaluation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/article-evaluation/' . $articleevaluation->id . '/edit') }}" title="Edit ArticleEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('articleevaluation' . '/' . $articleevaluation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete ArticleEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $articleevaluation->id }}</td>
                                    </tr>
                                    <tr><th> Article Id </th><td> {{ $articleevaluation->article_id }} </td></tr><tr><th> Evaluation Name </th><td> {{ $articleevaluation->evaluation_name }} </td></tr><tr><th> Evaluation Abstract </th><td> {{ $articleevaluation->evaluation_abstract }} </td></tr><tr><th> Evaluation Introduction </th><td> {{ $articleevaluation->evaluation_introduction }} </td></tr><tr><th> Evaluation Methodology </th><td> {{ $articleevaluation->evaluation_methodology }} </td></tr><tr><th> Evaluation Result </th><td> {{ $articleevaluation->evaluation_result }} </td></tr><tr><th> Evaluation Conclusion </th><td> {{ $articleevaluation->evaluation_conclusion }} </td></tr><tr><th> Evaluation Reference </th><td> {{ $articleevaluation->evaluation_reference }} </td></tr><tr><th> Evaluation Total Score </th><td> {{ $articleevaluation->evaluation_total_score }} </td></tr><tr><th> Assessment </th><td> {{ $articleevaluation->assessment }} </td></tr><tr><th> Evaluation Summary </th><td> {{ $articleevaluation->evaluation_summary }} </td></tr><tr><th> Comment Name </th><td> {{ $articleevaluation->comment_name }} </td></tr><tr><th> Comment Abstract </th><td> {{ $articleevaluation->comment_abstract }} </td></tr><tr><th> Comment Introduction </th><td> {{ $articleevaluation->comment_introduction }} </td></tr><tr><th> Comment Methodology </th><td> {{ $articleevaluation->comment_methodology }} </td></tr><tr><th> Comment Result </th><td> {{ $articleevaluation->comment_result }} </td></tr><tr><th> Comment Conclusion </th><td> {{ $articleevaluation->comment_conclusion }} </td></tr><tr><th> Comment Reference </th><td> {{ $articleevaluation->comment_reference }} </td></tr><tr><th> User Id </th><td> {{ $articleevaluation->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
