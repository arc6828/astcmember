@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">สรุปผลการประเมิน</div>
                    <div class="card-body">
                        <a href="{{ url('/summary_evaluation/create') }}" class="btn btn-success btn-sm" title="Add New Summary_evaluation">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มสรุปผลการประเมิน
                        </a>

                        <form method="GET" action="{{ url('/summary_evaluation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th>
                                        <th>Article Id</th>
                                        <th>Summary Average Score</th>
                                        <th>Summary Total Score</th>
                                        <th>Nwecomment Name</th>
                                        <th>Nwecomment Abstract</th>
                                        <th>Nwecomment Introduction</th>
                                        <th>Nwecomment Methodology</th>
                                        <th>Nwecomment Result</th>
                                        <th>Nwecomment Conclusion</th>
                                        <th>Nwecomment Reference</th>
                                        <th>Evaluation Summary</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($summary_evaluation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->article_id }}</td>
                                        <td>{{ $item->summary_average_score }}</td>
                                        <td>{{ $item->summary_total_score }}</td>
                                        <td>{{ $item->nwecomment_name }}</td>
                                        <td>{{ $item->nwecomment_abstract }}</td>
                                        <td>{{ $item->nwecomment_introduction }}</td>
                                        <td>{{ $item->nwecomment_methodology }}</td>
                                        <td>{{ $item->nwecomment_result }}</td>
                                        <td>{{ $item->nwecomment_conclusion }}</td>
                                        <td>{{ $item->nwecomment_reference }}</td>
                                        <td>{{ $item->evaluation_summary }}</td>
                                        <td>
                                            <a href="{{ url('/summary_evaluation/' . $item->id) }}" title="View Summary_evaluation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/summary_evaluation/' . $item->id . '/edit') }}" title="Edit Summary_evaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/summary_evaluation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Summary_evaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $summary_evaluation->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
