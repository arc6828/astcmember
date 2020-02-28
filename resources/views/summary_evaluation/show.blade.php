@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Summary_evaluation {{ $summary_evaluation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/summary_evaluation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/summary_evaluation/' . $summary_evaluation->id . '/edit') }}" title="Edit Summary_evaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('summary_evaluation' . '/' . $summary_evaluation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Summary_evaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $summary_evaluation->id }}</td>
                                    </tr>
                                    <tr><th> Article Id </th><td> {{ $summary_evaluation->article_id }} </td></tr><tr><th> Article Evaluation Id </th><td> {{ $summary_evaluation->article_evaluation_id }} </td></tr><tr><th> Summary Average Score </th><td> {{ $summary_evaluation->summary_average_score }} </td></tr><tr><th> Summary Total Score </th><td> {{ $summary_evaluation->summary_total_score }} </td></tr><tr><th> Nwecomment Name </th><td> {{ $summary_evaluation->nwecomment_name }} </td></tr><tr><th> Nwecomment Abstract </th><td> {{ $summary_evaluation->nwecomment_abstract }} </td></tr><tr><th> Nwecomment Introduction </th><td> {{ $summary_evaluation->nwecomment_introduction }} </td></tr><tr><th> Nwecomment Methodology </th><td> {{ $summary_evaluation->nwecomment_methodology }} </td></tr><tr><th> Nwecomment Result </th><td> {{ $summary_evaluation->nwecomment_result }} </td></tr><tr><th> Nwecomment Conclusion </th><td> {{ $summary_evaluation->nwecomment_conclusion }} </td></tr><tr><th> Nwecomment Reference </th><td> {{ $summary_evaluation->nwecomment_reference }} </td></tr><tr><th> Evaluation Summary </th><td> {{ $summary_evaluation->evaluation_summary }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
