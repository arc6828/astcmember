@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">เอกสารบทความ</div>
                    <div class="card-body">
                        <a href="{{ url('/document/create') }}" class="btn btn-success btn-sm" title="Add New Document">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มเอกสารบทความ
                        </a>

                        <form method="GET" action="{{ url('/document') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>Filename</th>
                                        <th>Remark</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($document as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            <a href="{{ url('/storage') }}/{{ $item->filename }}">
                                                <i class="fa fa-arrow-down"></i> Download
                                            </a>
                                        </td>
                                        <td>{{ $item->remark }}</td>
                                        <td>
                                            <a href="{{ url('/document/' . $item->id) }}" title="View Document"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/document/' . $item->id . '/edit') }}" title="Edit Document"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/document' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Document" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $document->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
