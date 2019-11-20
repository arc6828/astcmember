@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
     

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Evaluation {{ $evaluation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/evaluation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/evaluation/' . $evaluation->id . '/edit') }}" title="Edit Evaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('evaluation' . '/' . $evaluation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Evaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $evaluation->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ครั้งที่แจ้ง </th>
                                        <td> {{ $evaluation->around }} </td>
                                    </tr>
                                    <tr>
                                        <th> วันที่แจ้ง </th>
                                        <td> {{ $evaluation->date }} </td>
                                    </tr>
                                    <tr>
                                        <th> ผลที่แจ้ง </th>
                                        <td> {{ $evaluation->results_evaluation }} </td>
                                    </tr>
                                    <tr>
                                        <th> ความคิดเห็นเพิ่มเติมจากกองบรรณาธิการ </th>
                                        <td> {{ $evaluation->comment }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อบทความ</th>
                                        <td> {{ $evaluation->article->name_en }} </td>
                                    </tr>
                                    <tr>
                                        <th> User</th>
                                        <td> {{ $evaluation->user->name }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
