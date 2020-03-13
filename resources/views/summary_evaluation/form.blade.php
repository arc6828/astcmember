
<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}} d-none">
<label for="article_id" class="control-label">{{ 'หมายเลขบทความ' }}</label>
<input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($article->id) ? $article->id : ''}}" readonly required="">
{!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
<label for="article_id" class="control-label">{{ 'ชื่อบทความ' }}</label>
<input class="form-control" name="article_name" type="text" id="article_name" value="{{ isset($article->name_th) ? $article->name_th : ''}}" readonly required="">
{!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>

<table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ลำดับ</th>
                <th>เกณฑ์การประเมิน</th>
                <th>คะแนนเต็ม</th>
                <th>คะแนนเฉลี่ย</th>
                <th>คะแนนของทั้ง 3 คน</th>
                <th>Comment เดิม</th>
                <th>Comment ใหม่</th>
            </tr>
        </thead>
            <tr>
                <th>1</th>
                <td>ชื่อเรื่อง (Title)</td>
                <td>5</td>
                <td>
                    {{ number_format ( $article->article_evaluations->avg('evaluation_name') , 2 ) }}
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->evaluation_name }} <br>
                    @endforeach
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->comment_name }} <br>
                    @endforeach
                </td>
                <td>
                    <div class="form-group {{ $errors->has('nwecomment_name') ? 'has-error' : ''}}">
                        <textarea class="form-control" rows="5" name="nwecomment_name" type="textarea" id="nwecomment_name" >
@foreach($article->article_evaluations as $item)
{{ $item->comment_name }}
@endforeach {{ isset($summary_evaluation->nwecomment_name) ? $summary_evaluation->nwecomment_name : ''}}</textarea>
                        {!! $errors->first('nwecomment_name', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <th>2</th>
                <td>บทคัดย่อ (Abstract)</td>
                <td>10</td>
                <td>
                    {{ number_format ( $article->article_evaluations->avg('evaluation_abstract') , 2 ) }}
                </td>
                <td>@foreach($article->article_evaluations as $item)
                    {{ $item->evaluation_abstract }} <br>
                    @endforeach
                </td>
                <td>@foreach($article->article_evaluations as $item)
                    {{ $item->comment_abstract }} <br>
                    @endforeach
                </td>
                <td>
                    <div class="form-group {{ $errors->has('nwecomment_abstract') ? 'has-error' : ''}}">
                        <textarea class="form-control" rows="5" name="nwecomment_abstract" type="textarea" id="nwecomment_abstract" >
@foreach($article->article_evaluations as $item)
{{ $item->comment_abstract }}
@endforeach {{ isset($summary_evaluation->nwecomment_abstract) ? $summary_evaluation->nwecomment_abstract : ''}}</textarea>
                        {!! $errors->first('nwecomment_abstract', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <th>3</th>
                <td>บทนำ <br>(วัตถุประสงค์<br>และความสำคัญของ<br>ปัญหาวิจัย)<br>(Introduction)</td>
                <td>20</td>
                <td>
                    {{ number_format ( $article->article_evaluations->avg('evaluation_introduction') , 2 ) }}
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->evaluation_introduction }} <br>
                    @endforeach
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->comment_introduction }} <br>
                    @endforeach
                </td>
                <td>
                    <div class="form-group {{ $errors->has('nwecomment_introduction') ? 'has-error' : ''}}">
                        <textarea class="form-control" rows="5" name="nwecomment_introduction" type="textarea" id="nwecomment_introduction" >
@foreach($article->article_evaluations as $item)
{{ $item->comment_introduction }}
@endforeach {{ isset($summary_evaluation->nwecomment_introduction) ? $summary_evaluation->nwecomment_introduction : ''}}</textarea>
                        {!! $errors->first('nwecomment_introduction', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <th>4</th>
                <td>วิธีดำเนินการวิจัย<br>(ระเบียบวิธีวิจัยและ<br>ขั้นตอนวิธีดำเนินการวิจัย)</td>
                <td>20</td>
                <td>
                    {{ number_format ( $article->article_evaluations->avg('evaluation_methodology') , 2 ) }}
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->evaluation_methodology }} <br>
                    @endforeach
                </td>
                <td>@foreach($article->article_evaluations as $item)
                    {{ $item->comment_methodology }} <br>
                    @endforeach
                </td>
                <td>
                    <div class="form-group {{ $errors->has('nwecomment_methodology') ? 'has-error' : ''}}">
                        <textarea class="form-control" rows="5" name="nwecomment_methodology" type="textarea" id="nwecomment_methodology" >
@foreach($article->article_evaluations as $item)
{{ $item->comment_methodology }}
@endforeach {{ isset($summary_evaluation->nwecomment_methodology) ? $summary_evaluation->nwecomment_methodology : ''}}</textarea>
                        {!! $errors->first('nwecomment_methodology', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <th>5</th>
                <td>ผลการวิจัย<br>และการอภิปรายผล</td>
                <td>20</td>
                <td>
                    {{ number_format ( $article->article_evaluations->avg('evaluation_result') , 2 ) }}
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->evaluation_result }} <br>
                    @endforeach
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->comment_result }} <br>
                    @endforeach
                </td>
                <td>
                    <div class="form-group {{ $errors->has('nwecomment_result') ? 'has-error' : ''}}">
                        <textarea class="form-control" rows="5" name="nwecomment_result" type="textarea" id="nwecomment_result" >
@foreach($article->article_evaluations as $item)
{{ $item->comment_result }}
@endforeach {{ isset($summary_evaluation->nwecomment_result) ? $summary_evaluation->nwecomment_result : ''}}</textarea>
                        {!! $errors->first('nwecomment_result', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <th>6</th>
                <td>สรุปผลการวิจัย</td>
                <td>20</td>
                <td>
                    {{ number_format ( $article->article_evaluations->avg('evaluation_conclusion') , 2 ) }}
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->evaluation_conclusion }} <br>
                    @endforeach
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->comment_conclusion }} <br>
                    @endforeach
                </td>
                <td>
                    <div class="form-group {{ $errors->has('nwecomment_conclusion') ? 'has-error' : ''}}">
                        <textarea class="form-control" rows="5" name="nwecomment_conclusion" type="textarea" id="nwecomment_conclusion" >
@foreach($article->article_evaluations as $item)
{{ $item->comment_conclusion }}
@endforeach {{ isset($summary_evaluation->nwecomment_conclusion) ? $summary_evaluation->nwecomment_conclusion : ''}}</textarea>
                        {!! $errors->first('nwecomment_conclusion', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <th>7</th>
                <td>เอกสารอ้างอิง</td>
                <td>5</td>
                <td>
                    {{ number_format ( $article->article_evaluations->avg('evaluation_reference') , 2 ) }}
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->evaluation_reference }} <br>
                    @endforeach
                </td>
                <td>
                    @foreach($article->article_evaluations as $item)
                    {{ $item->comment_reference }} <br>
                    @endforeach
                </td>
                <td><div class="form-group {{ $errors->has('nwecomment_reference') ? 'has-error' : ''}}">
                        <textarea class="form-control" rows="5" name="nwecomment_reference" type="textarea" id="nwecomment_reference" >
@foreach($article->article_evaluations as $item)
{{ $item->comment_reference }}
@endforeach {{ isset($summary_evaluation->nwecomment_reference) ? $summary_evaluation->nwecomment_reference : ''}}</textarea>
                        {!! $errors->first('nwecomment_reference', '<p class="help-block">:message</p>') !!}
                    </div></td>
            </tr>
            <tr>
                <th></th>
                <th>รวม</th>
                <th>100</th>
                <td><div class="form-group {{ $errors->has('summary_average_score') ? 'has-error' : ''}}">
    <input class="form-control" name="summary_average_score" type="number" id="summary_average_score" value="{{ isset($summary_evaluation->summary_average_score) ? $summary_evaluation->summary_average_score :  
    (
        $article->article_evaluations->avg('evaluation_name')  +  
        $article->article_evaluations->avg('evaluation_abstract') +
        $article->article_evaluations->avg('evaluation_introduction') +
        $article->article_evaluations->avg('evaluation_methodology') +
        $article->article_evaluations->avg('evaluation_result') +
        $article->article_evaluations->avg('evaluation_conclusion') +
        $article->article_evaluations->avg('evaluation_reference')

    )
    }}" readonly="">
    {!! $errors->first('summary_average_score', '<p class="help-block">:message</p>') !!}
</div></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
    </table>

<hr>

    <div class="form-group {{ $errors->has('evaluation_summary') ? 'has-error' : ''}}">
    <label for="evaluation_summary" class="control-label">{{ 'สรุปผลการประเมิน' }}</label>
    <select name="evaluation_summary" class="form-control" id="evaluation_summary" >
     @foreach (["pass"=>"ผ่าน โดยไม่มีการแก้ไข","pass_modify"=>"ผ่าน หลังการปรับปรุงแก้ไข","notpass"=>"ไม่ผ่าน"] as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($summary_evaluation->evaluation_summary) && $summary_evaluation->evaluation_summary == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('evaluation_summary', '<p class="help-block">:message</p>') !!}
</div><br>

<hr> <br>
                <table class="table table-striped table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th colspan="2" ><center><p>เกณฑ์การประเมิน</p></center></th>
                    </tr>
                  </thead>
                  
                    <tr>
                      <td> >80 คะแนน </td>
                      <td>  เห็นควรตีพิมพ์เผยแพร่ได้ โดยไม่มีการแก้ไข </td>
                    </tr>
                    <tr>
                      <td>70-79 คะแนน</td>
                      <td>เห็นควรตีพิมพ์เผยแพร่หลังการปรับปรุงแก้ไขตามคำแนะนำของผู้ทรงคุณวุฒิ และกองบรรณาธิการพิจารณา</td>
                    </tr>
                    <tr>
                      <td>60-69 คะแนน</td>
                      <td>เห็นควรปรับปรุงตามคำแนะนำของผู้ทรงคุณวุฒิ และให้กองบรรณาธิการพิจารณาในการตอบรับการตีพิมพ์เผยแพร่</td>
                    </tr>
                    <tr>
                      <td> <60 คะแนน</td>
                      <td>ไม่สมควรตีพิมพ์เผยแพร่</td>
                    </tr>
                  
                </table>
            <hr>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไข' : 'ส่งสรุปผลการประเมิน
' }}">
</div>







<!--
<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'Article Id' }}</label>
    <input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($summary_evaluation->article_id) ? $summary_evaluation->article_id : ''}}" >
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('article_evaluation_id') ? 'has-error' : ''}}">
    <label for="article_evaluation_id" class="control-label">{{ 'Article Evaluation Id' }}</label>
    <input class="form-control" name="article_evaluation_id" type="number" id="article_evaluation_id" value="{{ isset($summary_evaluation->article_evaluation_id) ? $summary_evaluation->article_evaluation_id : ''}}" >
    {!! $errors->first('article_evaluation_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('summary_average_score') ? 'has-error' : ''}}">
    <label for="summary_average_score" class="control-label">{{ 'Summary Average Score' }}</label>
    <input class="form-control" name="summary_average_score" type="number" id="summary_average_score" value="{{ isset($summary_evaluation->summary_average_score) ? $summary_evaluation->summary_average_score : ''}}" >
    {!! $errors->first('summary_average_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('summary_total_score') ? 'has-error' : ''}}">
    <label for="summary_total_score" class="control-label">{{ 'Summary Total Score' }}</label>
    <input class="form-control" name="summary_total_score" type="number" id="summary_total_score" value="{{ isset($summary_evaluation->summary_total_score) ? $summary_evaluation->summary_total_score : ''}}" >
    {!! $errors->first('summary_total_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nwecomment_name') ? 'has-error' : ''}}">
    <label for="nwecomment_name" class="control-label">{{ 'Nwecomment Name' }}</label>
    <textarea class="form-control" rows="5" name="nwecomment_name" type="textarea" id="nwecomment_name" >{{ isset($summary_evaluation->nwecomment_name) ? $summary_evaluation->nwecomment_name : ''}}</textarea>
    {!! $errors->first('nwecomment_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nwecomment_abstract') ? 'has-error' : ''}}">
    <label for="nwecomment_abstract" class="control-label">{{ 'Nwecomment Abstract' }}</label>
    <textarea class="form-control" rows="5" name="nwecomment_abstract" type="textarea" id="nwecomment_abstract" >{{ isset($summary_evaluation->nwecomment_abstract) ? $summary_evaluation->nwecomment_abstract : ''}}</textarea>
    {!! $errors->first('nwecomment_abstract', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nwecomment_introduction') ? 'has-error' : ''}}">
    <label for="nwecomment_introduction" class="control-label">{{ 'Nwecomment Introduction' }}</label>
    <textarea class="form-control" rows="5" name="nwecomment_introduction" type="textarea" id="nwecomment_introduction" >{{ isset($summary_evaluation->nwecomment_introduction) ? $summary_evaluation->nwecomment_introduction : ''}}</textarea>
    {!! $errors->first('nwecomment_introduction', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nwecomment_methodology') ? 'has-error' : ''}}">
    <label for="nwecomment_methodology" class="control-label">{{ 'Nwecomment Methodology' }}</label>
    <textarea class="form-control" rows="5" name="nwecomment_methodology" type="textarea" id="nwecomment_methodology" >{{ isset($summary_evaluation->nwecomment_methodology) ? $summary_evaluation->nwecomment_methodology : ''}}</textarea>
    {!! $errors->first('nwecomment_methodology', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nwecomment_result') ? 'has-error' : ''}}">
    <label for="nwecomment_result" class="control-label">{{ 'Nwecomment Result' }}</label>
    <textarea class="form-control" rows="5" name="nwecomment_result" type="textarea" id="nwecomment_result" >{{ isset($summary_evaluation->nwecomment_result) ? $summary_evaluation->nwecomment_result : ''}}</textarea>
    {!! $errors->first('nwecomment_result', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nwecomment_conclusion') ? 'has-error' : ''}}">
    <label for="nwecomment_conclusion" class="control-label">{{ 'Nwecomment Conclusion' }}</label>
    <textarea class="form-control" rows="5" name="nwecomment_conclusion" type="textarea" id="nwecomment_conclusion" >{{ isset($summary_evaluation->nwecomment_conclusion) ? $summary_evaluation->nwecomment_conclusion : ''}}</textarea>
    {!! $errors->first('nwecomment_conclusion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nwecomment_reference') ? 'has-error' : ''}}">
    <label for="nwecomment_reference" class="control-label">{{ 'Nwecomment Reference' }}</label>
    <textarea class="form-control" rows="5" name="nwecomment_reference" type="textarea" id="nwecomment_reference" >{{ isset($summary_evaluation->nwecomment_reference) ? $summary_evaluation->nwecomment_reference : ''}}</textarea>
    {!! $errors->first('nwecomment_reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_summary') ? 'has-error' : ''}}">
    <label for="evaluation_summary" class="control-label">{{ 'Evaluation Summary' }}</label>
    <select name="evaluation_summary" class="form-control" id="evaluation_summary" >
    @foreach (json_decode('{"\u0e1c\u0e48\u0e32\u0e19 \u0e42\u0e14\u0e22\u0e44\u0e21\u0e48\u0e21\u0e35\u0e01\u0e32\u0e23\u0e41\u0e01\u0e49\u0e44\u0e02":"\u0e1c\u0e48\u0e32\u0e19 \u0e42\u0e14\u0e22\u0e44\u0e21\u0e48\u0e21\u0e35\u0e01\u0e32\u0e23\u0e41\u0e01\u0e49\u0e44\u0e02","\u0e1c\u0e48\u0e32\u0e19 \u0e2b\u0e25\u0e31\u0e07\u0e01\u0e32\u0e23\u0e1b\u0e23\u0e31\u0e1a\u0e1b\u0e23\u0e38\u0e07\u0e41\u0e01\u0e49\u0e44\u0e02":"\u0e1c\u0e48\u0e32\u0e19 \u0e2b\u0e25\u0e31\u0e07\u0e01\u0e32\u0e23\u0e1b\u0e23\u0e31\u0e1a\u0e1b\u0e23\u0e38\u0e07\u0e41\u0e01\u0e49\u0e44\u0e02","\u0e44\u0e21\u0e48\u0e1c\u0e48\u0e32\u0e19":"\u0e44\u0e21\u0e48\u0e1c\u0e48\u0e32\u0e19"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($summary_evaluation->evaluation_summary) && $summary_evaluation->evaluation_summary == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('evaluation_summary', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
-->
