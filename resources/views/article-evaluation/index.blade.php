@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Articleevaluation</div>
                    <div class="card-body">
                        <a href="{{ url('/article-evaluation/create') }}" class="btn btn-success btn-sm" title="Add New ArticleEvaluation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/article-evaluation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Article Id</th><th>Evaluation Name</th><th>Evaluation Abstract</th><th>Evaluation Introduction</th><th>Evaluation Methodology</th><th>Evaluation Result</th><th>Evaluation Conclusion</th><th>Evaluation Reference</th><th>Evaluation Total Score</th><th>Assessment</th><th>Evaluation Summary</th><th>Comment Name</th><th>Comment Abstract</th><th>Comment Introduction</th><th>Comment Methodology</th><th>Comment Result</th><th>Comment Conclusion</th><th>Comment Reference</th><th>User Id</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($articleevaluation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->article_id }}</td><td>{{ $item->evaluation_name }}</td><td>{{ $item->evaluation_abstract }}</td><td>{{ $item->evaluation_introduction }}</td><td>{{ $item->evaluation_methodology }}</td><td>{{ $item->evaluation_result }}</td><td>{{ $item->evaluation_conclusion }}</td><td>{{ $item->evaluation_reference }}</td><td>{{ $item->evaluation_total_score }}</td><td>{{ $item->assessment }}</td><td>{{ $item->evaluation_summary }}</td><td>{{ $item->comment_name }}</td><td>{{ $item->comment_abstract }}</td><td>{{ $item->comment_introduction }}</td><td>{{ $item->comment_methodology }}</td><td>{{ $item->comment_result }}</td><td>{{ $item->comment_conclusion }}</td><td>{{ $item->comment_reference }}</td><td>{{ $item->user_id }}</td>
                                        <td>
                                            <a href="{{ url('/article-evaluation/' . $item->id) }}" title="View ArticleEvaluation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/article-evaluation/' . $item->id . '/edit') }}" title="Edit ArticleEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/article-evaluation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete ArticleEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $articleevaluation->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
