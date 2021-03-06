@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           

            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-header">บทความที่ {{ $article->id }}   </div>

                    <div class="card-body">

                        <a href="{{ url('/article') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/article/' . $article->id . '/edit') }}" title="Edit Article"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>
                        
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#createDocumentModal">
                        <i class="fa fa-plus" aria-hidden="true"></i> อัพโหลดไฟล์ใหม่
                        </button>
                        <div class="text-danger">*ขอความกรุณาผู้ส่งบความอัพโหลดบทความในรูปแบบไฟล์ WORD และ PDF </div>
                        

                        <form method="POST" action="{{ url('article' . '/' . $article->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete Article" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr class="d-none">
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
                                        <th> ชื่อบทความ (ไทย) </th>
                                        <td> {{ $article->name_th }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อบทความ (อังกฤษ) </th>
                                        <td> {{ $article->name_en }} </td>
                                    </tr>
                                    <tr>
                                        <th> รายชื่อทุกคนในบทความ </th>
                                        <td> {{ $article->name_aj }} </td>
                                    </tr>
                                    <tr>
                                        <th> ผู้รับผิดชอบบทความ/ นักวิจัยหลัก </th>
                                        <td> {{ $article->purubpitshop }} </td>
                                    </tr>
                                    <tr>
                                        <th> อีเมลผู้รับผิดชอบบทความ </th>
                                        <td> {{ $article->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อผู้ที่จะนำเสนอผลงาน </th>
                                        <td> {{ $article->name_present }} </td>
                                    </tr>
                                    
                                    <tr class="">
                                        <th> เบอร์โทรศัพท์ผู้รับผิดชอบหลัก </th>
                                        <td> {{ $article->tel_aj }} </td>
                                    </tr>
                                    <tr class="d-none">
                                        <th> Username</th>
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

                @include('article/modal_create_document')
                


                <div class="card mb-4" >
                    <div class="card-header">เอกสารบทความ</div>
                    <div class="card-body">
                        <a href="{{ url('/document/create') }}?article_id={{$article->id}}" class="btn btn-success btn-sm d-none" title="Add New Document">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#createDocumentModal">
                        <i class="fa fa-plus" aria-hidden="true"></i> อัพโหลดไฟล์ใหม่
                        </button>
                        <div class="text-danger">*ขอความกรุณาผู้ส่งบความอัพโหลดบทความในรูปแบบไฟล์ WORD และ PDF </div>
                    
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ประเภทเอกสาร</th>
                                        <th>ชื่อผู้อัพโหลด</th>
                                        <th>วันที่ส่งไฟล์</th>
                                        <th>ไฟล์</th>
                                        <th>หมายเหตุ</th>
                                        <th class="d-none">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($document as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->article->created_at }}</td>
                                        <td>
                                            <a href="{{ url('/storage') }}/{{ $item->filename }}">
                                                <i class="fa fa-arrow-down"></i> Download
                                            </a>
                                        </td>
                                        <td>{{ $item->remark }}</td>
                                        <td class="d-none">
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
                    //ประกาศตัวแปร $summary_evaluatio ด้วยค่า Array ที่มาจาก relationship

                    $summary_evaluation = $article->summary_evaluations;
                @endphp

                
                <div class="card mb-4">
                    <div class="card-header">สรุปผลการประเมิน</div>
                    <div class="card-body">
                        @if(Auth::user()->profile->role == "academic-admin")
                        <a href="{{ url('/summary_evaluation/create') }}?article_id={{$article->id}}" class="btn btn-success btn-sm" title="Add New Summary_evaluation">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มสรุปผลการประเมิน
                        </a>
                        @endif
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
                                <tbody>
                                    @foreach($summary_evaluation as $item)
                                    <tr class="d-none">
                                        <th>ID</th><td>{{ $item->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อบทความ </th>
                                        <td> {{ $article->name_th }} </td>
                                    </tr>
                                    <tr>
                                        <th> คะแนนเฉลี่ยรวม </th>
                                        <td> {{ $item->summary_average_score }} </td>
                                    </tr>
                                    <tr>
                                        <th> comment ชื่อ </th>
                                        <td> {{ $item->nwecomment_name }} </td>
                                    </tr>
                                    <tr>
                                        <th> comment บทคัดย่อ </th>
                                        <td> {{ $item->nwecomment_abstract }} </td>
                                    </tr>
                                    <tr>
                                        <th> comment บทนำ </th>
                                        <td> {{ $item->nwecomment_introduction }} </td>
                                    </tr>
                                    <tr>
                                        <th> comment วิธีดำเนินการวิจัย </th>
                                        <td> {{ $item->nwecomment_methodology }} </td>
                                    </tr>
                                    <tr>
                                        <th> comment ผลการวิจัย </th>
                                        <td> {{ $item->nwecomment_result }} </td>
                                    </tr>
                                    <tr>
                                        <th> comment สรุปผลการวิจัย </th>
                                        <td> {{ $item->nwecomment_conclusion }} </td>
                                    </tr>
                                    <tr>
                                        <th> comment เอกสารอ้างอิง </th>
                                        <td> {{ $item->nwecomment_reference }} </td>
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

                

                <div class="card mb-4 d-none">
                    <div class="card-header">รายละเอียดผลประเมิน</div>
                    <div class="card-body">
                         <a href="{{ url('/evaluation/create') }}?article_id={{$article->id}}" class="btn btn-success btn-sm d-none" title="Add New Evaluation">
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
                                           <!-- {{ url('/evaluation/create') }}?article_id={{$article->id}} -->

                <form method="POST" action="{{ url('/article') .'/' . $article->id }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    @if(Auth::user()->profile->role == "author") 
                        <input type="hidden" name="status" value="Cancel">
                        <button type="submit" class="btn btn-danger btn-sm " title="ยกเลิกบทความ" onclick="return confirm(&quot;ยืนยันการยกเลิกบทความ ?&quot;)"> ยกเลิกบทความ</button>
                    @endif
                </form>
                 
            </div>
        </div>
    </div>



<br>



@endsection