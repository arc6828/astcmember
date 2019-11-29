@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           

            <div class="col-md-9">
                <div class="card mb-4">
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
                                        <th>ID</th>
                                        <td>{{ $article->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ประเภทการนำเสนอ </th>
                                        <td> {{ $article->prapet }} </td>
                                    </tr>
                                    <tr>
                                        <th> กลุ่มสาขา </th>
                                        <td> {{ $article->group }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อภาษาไทย </th>
                                        <td> {{ $article->name_th }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อภาษาอังกฤษ </th>
                                        <td> {{ $article->name_en }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อผู้รับผิดชอบบทความ </th>
                                        <td> {{ $article->purubpitshop }} </td>
                                    </tr>
                                    <tr>
                                        <th> อีเมลผู้รับผิดชอบบทความ </th>
                                        <td> {{ $article->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อผู้นำเสนอ </th>
                                        <td> {{ $article->name_present }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่ออาจารย์ที่ปรึกษา </th>
                                        <td> {{ $article->name_aj }} </td>
                                    </tr>
                                    <tr>
                                        <th> เบอร์โทรศัพท์อาจารย์ </th>
                                        <td> {{ $article->tel_aj }} </td>
                                    </tr>
                                    <tr>
                                        <th> User</th>
                                        <td> {{ $article->user->name }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                

                @php
                    //ประกาศตัวแปร $document ด้วยค่า Array ที่มาจาก relationship

                    $document = $article->documents;
                @endphp

                <div class="card mb-4">
                    <div class="card-header">Document</div>
                    <div class="card-body">
                        <a href="{{ url('/document/create') }}?article_id={{$article->id}}" class="btn btn-success btn-sm" title="Add New Document">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                       

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>Article</th>
                                        <th>Filename</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($document as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->article->name_en }}</td>
                                        <td>
                                            <a href="{{ url('/storage') }}/{{ $item->filename }}">
                                                <i class="fa fa-arrow-down"></i> Download
                                            </a>
                                        </td>
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
                        </div>
                    </div>
                </div>

                @php
                    //ประกาศตัวแปร $evaluation ด้วยค่า Array ที่มาจาก relationship

                    $evaluation = $article->evaluations;
                @endphp

                <div class="card mb-4">
                    <div class="card-header">รายละเอียดผลประเมิน</div>
                    <div class="card-body">
                         <a href="{{ url('/evaluation/create') }}?article_id={{$article->id}}" class="btn btn-success btn-sm" title="Add New Evaluation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
          
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="d-none">#</th>
                                        <th>ครั้งที่แจ้ง</th>
                                        <th>วันที่แจ้ง</th>
                                        <th>ผลที่แจ้ง</th>
                                        <th>ความคิดเห็นเพิ่มเติมจากกองบรรณาธิการ</th>
                                        <th>Article</th>
                                        <th>User</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($evaluation as $item)
                                    <tr>
                                        <td class="d-none">{{ $item->id }}</td>
                                        <td>{{ $item->around }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->results_evaluation }}</td>
                                        <td>{{ $item->comment }}</td>
                                        <td>{{ $item->article->name_en }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            <a href="{{ url('/evaluation/' . $item->id) }}" title="View Evaluation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/evaluation/' . $item->id . '/edit') }}" title="Edit Evaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/evaluation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Evaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>
                 
            </div>
        </div>
    </div>



    

<br>



@endsection