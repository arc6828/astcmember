@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ผลการประเมินบทความ {{ $articleevaluation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/article-evaluation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/article-evaluation/' . $articleevaluation->id . '/edit') }}" title="Edit ArticleEvaluation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                        <form method="POST" action="{{ url('articleevaluation' . '/' . $articleevaluation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete ArticleEvaluation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $articleevaluation->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> หมายเลขบทความ </th>
                                        <td> {{ $articleevaluation->article_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อเรื่อง ภาษาไทยและภาษาอังกฤษ </th>
                                        <td> {{ $articleevaluation->evaluation_name }} </td>
                                    </tr>
                                    <tr>
                                        <th> บทคัดย่อ ภาษาไทยและภาษาอังกฤษ </th>
                                        <td> {{ $articleevaluation->evaluation_abstract }} </td>
                                    </tr>
                                    <tr>
                                        <th> บทนำ(วัตถุประสงค์ และความสำคัญของปัญหาวิจัย) </th>
                                        <td> {{ $articleevaluation->evaluation_introduction }} </td>
                                    </tr>
                                    <tr>
                                        <th> วิธีดำเนินการวิจัย(ระเบียบวิธีวิจัยและขั้นตอนวิธีดำเนินการวิจัย) </th>
                                        <td> {{ $articleevaluation->evaluation_methodology }} </td>
                                    </tr>
                                    <tr>
                                        <th> ผลการวิจัยและการอภิปรายผล </th>
                                        <td> {{ $articleevaluation->evaluation_result }} </td>
                                    </tr>
                                    <tr>
                                        <th> สรุปผลการวิจัย </th>
                                        <td> {{ $articleevaluation->evaluation_conclusion }} </td>
                                    </tr>
                                    <tr>
                                        <th> เอกสารอ้างอิง </th>
                                        <td> {{ $articleevaluation->evaluation_reference }} </td>
                                    </tr>
                                    <tr>
                                        <th> คะแนนรวม </th>
                                        <td> {{ $articleevaluation->evaluation_total_score }} </td>
                                    </tr>
                                    <tr>
                                        <th> เกณฑ์การประเมิน </th>
                                        <td> {{ $articleevaluation->assessment }} </td>
                                    </tr>
                                    <tr>
                                        <th> สรุปผลการประเมิน </th>
                                        <td> {{ $articleevaluation->evaluation_summary }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อเรื่อง (Title) </th>
                                        <td> {{ $articleevaluation->comment_name }} </td>
                                    </tr>
                                    <tr>
                                        <th> บทคัดย่อ (Abstract) </th>
                                        <td> {{ $articleevaluation->comment_abstract }} </td>
                                    </tr>
                                    <tr>
                                        <th> บทนำ (วัตถุประสงค์และความสำคัญของปัญหาวิจัย)(Introduction) </th>
                                        <td> {{ $articleevaluation->comment_introduction }} </td>
                                    </tr>
                                    <tr>
                                        <th> วิธีดำเนินการวิจัย(ระเบียบวิธีวิจัยและขั้นตอนวิธีดำเนินการวิจัย) </th>
                                        <td> {{ $articleevaluation->comment_methodology }} </td>
                                    </tr>
                                    <tr>
                                        <th> ผลการวิจัยและการอภิปรายผล </th>
                                        <td> {{ $articleevaluation->comment_result }} </td>
                                    </tr>
                                    <tr>
                                        <th> สรุปผลการวิจัย </th>
                                        <td> {{ $articleevaluation->comment_conclusion }} </td>
                                    </tr>
                                    <tr>
                                        <th> เอกสารอ้างอิง </th>
                                        <td> {{ $articleevaluation->comment_reference }} </td>
                                    </tr>
                                    <tr>
                                        <th> ผู้ประเมินบทความ </th>
                                        <td> {{ $articleevaluation->user_id }} </td>
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
