@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Document {{ $document->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/document') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/document/' . $document->id . '/edit') }}" title="Edit Document"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('document' . '/' . $document->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Document" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $document->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Title </th>
                                        <td> {{ $document->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> User </th>
                                        <td> {{ $document->user->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Article </th>
                                        <td> {{ $document->article->name_en }} </td>
                                    </tr>
                                    <tr>
                                        <th> Filename </th>
                                        <td> {{ $document->filename }} </td>
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
