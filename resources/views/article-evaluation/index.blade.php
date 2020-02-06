@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row ">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">โปรดให้ข้อคิดเห็น ข้อเสนอแนะตามที่ท่านเห็นสมควรในประเด็นแก้ไข</div>
                    <div class="card-body">
                        <a href="{{ url('/article-evaluation/create') }}" class="btn btn-success btn-sm d-none" title="Add New ArticleEvaluation">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
                            <label for="article_id" class="control-label">{{ 'หมายเลขบทความ' }}</label>
                            <input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($articleevaluation->article_id) ? $articleevaluation->article_id : ''}}" readonly required="">
                            {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                            <label for="user_id" class="control-label">{{ 'ผู้ประเมินบทความ' }}</label>
                            <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($articleevaluation->user_id) ? $articleevaluation->user_id : ''}}" readonly >
                            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                        </div>
                        <hr>


                        <form method="GET" action="{{ url('/article-evaluation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right d-none"  role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ประเด็น</th>
                                        <th>คะแนนเต็ม</th>
                                        <th>คะแนนที่ได้</th>
                                        <th>ประเด็นแก้ไข</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <th>1</th>
                                        <td>ชื่อเรื่อง (Title)</td>
                                        <td>5</td>
                                        <td><div class="form-group {{ $errors->has('evaluation_name') ? 'has-error' : ''}}">
                                                <input class="form-control" name="evaluation_name" type="number" id="evaluation_name" value="{{ isset($articleevaluation->evaluation_name) ? $articleevaluation->evaluation_name : ''}}" >
                                                {!! $errors->first('evaluation_name', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                        <td><div class="form-group {{ $errors->has('comment_name') ? 'has-error' : ''}}">
                                                <textarea class="form-control" rows="5" name="comment_name" type="textarea" id="comment_name" >{{ isset($articleevaluation->comment_name) ? $articleevaluation->comment_name : ''}}</textarea>
                                                {!! $errors->first('comment_name', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>บทคัดย่อ (Abstract)</td>
                                        <td>10</td>
                                        <td><div class="form-group {{ $errors->has('evaluation_abstract') ? 'has-error' : ''}}">
                                                <input class="form-control" name="evaluation_abstract" type="number" id="evaluation_abstract" value="{{ isset($articleevaluation->evaluation_abstract) ? $articleevaluation->evaluation_abstract : ''}}" >
                                                {!! $errors->first('evaluation_abstract', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                        <td><div class="form-group {{ $errors->has('comment_abstract') ? 'has-error' : ''}}">
                                                <textarea class="form-control" rows="5" name="comment_abstract" type="textarea" id="comment_abstract" >{{ isset($articleevaluation->comment_abstract) ? $articleevaluation->comment_abstract : ''}}</textarea>
                                                {!! $errors->first('comment_abstract', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>บทนำ <br>(วัตถุประสงค์<br>และความสำคัญของ<br>ปัญหาวิจัย)<br>(Introduction)</td>
                                        <td>20</td>
                                        <td><div class="form-group {{ $errors->has('evaluation_introduction') ? 'has-error' : ''}}">
                                                <input class="form-control" name="evaluation_introduction" type="number" id="evaluation_introduction" value="{{ isset($articleevaluation->evaluation_introduction) ? $articleevaluation->evaluation_introduction : ''}}" >
                                                {!! $errors->first('evaluation_introduction', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                        <td><div class="form-group {{ $errors->has('comment_introduction') ? 'has-error' : ''}}">
                                                <textarea class="form-control" rows="5" name="comment_introduction" type="textarea" id="comment_introduction" >{{ isset($articleevaluation->comment_introduction) ? $articleevaluation->comment_introduction : ''}}</textarea>
                                                {!! $errors->first('comment_introduction', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>วิธีดำเนินการวิจัย<br>(ระเบียบวิธีวิจัยและ<br>ขั้นตอนวิธีดำเนินการวิจัย)</td>
                                        <td>20</td>
                                        <td><div class="form-group {{ $errors->has('evaluation_methodology') ? 'has-error' : ''}}">
                                                <input class="form-control" name="evaluation_methodology" type="number" id="evaluation_methodology" value="{{ isset($articleevaluation->evaluation_methodology) ? $articleevaluation->evaluation_methodology : ''}}" >
                                                {!! $errors->first('evaluation_methodology', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                        <td><div class="form-group {{ $errors->has('comment_methodology') ? 'has-error' : ''}}">
                                                <textarea class="form-control" rows="5" name="comment_methodology" type="textarea" id="comment_methodology" >{{ isset($articleevaluation->comment_methodology) ? $articleevaluation->comment_methodology : ''}}</textarea>
                                                {!! $errors->first('comment_methodology', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>ผลการวิจัย<br>และการอภิปรายผล</td>
                                        <td>20</td>
                                        <td><div class="form-group {{ $errors->has('evaluation_result') ? 'has-error' : ''}}">
                                                <input class="form-control" name="evaluation_result" type="number" id="evaluation_result" value="{{ isset($articleevaluation->evaluation_result) ? $articleevaluation->evaluation_result : ''}}" >
                                                {!! $errors->first('evaluation_result', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                        <td><div class="form-group {{ $errors->has('comment_result') ? 'has-error' : ''}}">
                                                <textarea class="form-control" rows="5" name="comment_result" type="textarea" id="comment_result" >{{ isset($articleevaluation->comment_result) ? $articleevaluation->comment_result : ''}}</textarea>
                                                {!! $errors->first('comment_result', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>สรุปผลการวิจัย</td>
                                        <td>20</td>
                                        <td><div class="form-group {{ $errors->has('evaluation_conclusion') ? 'has-error' : ''}}">
                                                <input class="form-control" name="evaluation_conclusion" type="number" id="evaluation_conclusion" value="{{ isset($articleevaluation->evaluation_conclusion) ? $articleevaluation->evaluation_conclusion : ''}}" >
                                                {!! $errors->first('evaluation_conclusion', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                        <td><div class="form-group {{ $errors->has('comment_conclusion') ? 'has-error' : ''}}">
                                                    <textarea class="form-control" rows="5" name="comment_conclusion" type="textarea" id="comment_conclusion" >{{ isset($articleevaluation->comment_conclusion) ? $articleevaluation->comment_conclusion : ''}}</textarea>
                                                    {!! $errors->first('comment_conclusion', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th>7</th>
                                        <td>เอกสารอ้างอิง</td>
                                        <td>5</td>
                                        <td><div class="form-group {{ $errors->has('evaluation_reference') ? 'has-error' : ''}}">
                                                <input class="form-control" name="evaluation_reference" type="number" id="evaluation_reference" value="{{ isset($articleevaluation->evaluation_reference) ? $articleevaluation->evaluation_reference : ''}}" >
                                                {!! $errors->first('evaluation_reference', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                        <td><div class="form-group {{ $errors->has('comment_reference') ? 'has-error' : ''}}">
                                                <textarea class="form-control" rows="5" name="comment_reference" type="textarea" id="comment_reference" >{{ isset($articleevaluation->comment_reference) ? $articleevaluation->comment_reference : ''}}</textarea>
                                                {!! $errors->first('comment_reference', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th>รวม</th>
                                        <th>100</th>
                                        <td><div class="form-group {{ $errors->has('evaluation_total_score') ? 'has-error' : ''}}">
                                                <input class="form-control" name="evaluation_total_score" type="number" id="evaluation_total_score" value="{{ isset($articleevaluation->evaluation_total_score) ? $articleevaluation->evaluation_total_score : ''}}" >
                                                {!! $errors->first('evaluation_total_score', '<p class="help-block">:message</p>') !!}
                                            </div></td>
                                        <td></td>
                                    </tr>
                                
                            </table>
                            <div class="pagination-wrapper"> {!! $articleevaluation->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
