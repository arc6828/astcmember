
<div class="card-header">
    โปรดให้ข้อคิดเห็น ข้อเสนอแนะตามที่ท่านเห็นสมควรในประเด็นแก้ไข
    <a href="{{ url('/แบบฟอร์มการให้คะแนน.pdf') }}" class="btn btn-success btn-sm float-right" title="ดาวน์โหลดแบบฟอร์มการให้คะแนน">
        <i class="fa fa-arrow-down" aria-hidden="true"></i> ดาวน์โหลดแบบฟอร์มการให้คะแนน
    </a>
</div>
<div class="card-body">
    <a href="{{ url('/article-evaluation/create') }} ?article_id={{$article->id}}" class="btn btn-success btn-sm d-none" title="Add New ArticleEvaluation">
        <i class="fa fa-plus" aria-hidden="true"></i> Add New
    </a>

    <a href="{{ url('') }} ?article_id={{$article->id}}" class="btn btn-success btn-sm d-none" title="ดาวน์โหลดเอกสาร">
        <i class="fa fa-arrow-down" aria-hidden="true"></i> ดาวน์โหลดเอกสาร
    </a>
    <div>
        @php
            $document_word = ($article->latest_word_documents)? $article->latest_word_documents->first() : null;
            $document_pdf = ($article->latest_pdf_documents)? $article->latest_pdf_documents->first() : null;
            $document_word_blind = ($article->latest_word_blind_documents)? $article->latest_word_blind_documents->first() : null;
            $document_pdf_blind = ($article->latest_pdf_blind_documents)? $article->latest_pdf_blind_documents->first() : null;
        @endphp
        @if($document_word)
            <a href="{{ url('storage') }}/{{$document_word->filename }}" class="btn btn-primary btn-sm mr-5">ดาวน์โหลด Docx</a> 
        @endif
        @if($document_pdf)
            <a href="{{ url('storage') }}/{{$document_pdf->filename }}" class="btn btn-danger btn-sm mr-5">ดาวน์โหลด PDF</a>
        @endif
        <br><br>
        @if($document_word_blind)
            <a href="{{ url('storage') }}/{{$document_word_blind->filename }}" class="btn btn-primary btn-sm mr-5">ดาวน์โหลด Docx blind</a> 
        @endif
        @if($document_pdf_blind)
            <a href="{{ url('storage') }}/{{$document_pdf_blind->filename }}" class="btn btn-danger btn-sm mr-5">ดาวน์โหลด PDF blind</a>
        @endif
    </div>
    <hr>

    <div class="form-group d-none {{ $errors->has('article_id') ? 'has-error' : ''}}">
        <label for="article_id" class="control-label">{{ 'หมายเลขบทความ' }}</label>
        <input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($article->id) ? $article->id : ''}}" readonly required="">
        {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
        <label for="article_id" class="control-label">{{ 'ชื่อบทความ' }}</label>
        <input class="form-control" name="article_name" type="text" id="article_name" value="{{ isset($article->name_th) ? $article->name_th : ''}}" readonly required="">
        {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group d-none  {{ $errors->has('reviewer_id') ? 'has-error' : ''}}">
        <label for="reviewer_id" class="control-label">{{ 'หมายเลขผู้ประเมินบทความ' }}</label>
        <input class="form-control" name="reviewer_id" type="text" id="reviewer_id" value="{{ isset($reviewer->id) ? $reviewer->id : ''}}" readonly required="">
        {!! $errors->first('reviewer_id', '<p class="help-block">:message</p>') !!}
    </div>
    
    <div class="form-group {{ $errors->has('reviewer_id') ? 'has-error' : ''}}">
        <label for="reviewer_id" class="control-label">{{ 'ผู้ประเมินบทความ' }}</label>
        <input class="form-control" name="reviewer_name" type="text" id="reviewer_name" value="{{ isset($reviewer->name) ? $reviewer->title.$reviewer->name.' '.$reviewer->lastname : ''}}" readonly required="">
        {!! $errors->first('reviewer_id', '<p class="help-block">:message</p>') !!}
    </div>


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
                        <input class="form-control sum_input" name="evaluation_name" type="number" id="evaluation_name" min="0" max="5" value="{{ isset($articleevaluation->evaluation_name) ? $articleevaluation->evaluation_name : ''}}" required="" onchange="sum_score()">
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
                        <input class="form-control sum_input" name="evaluation_abstract" type="number" id="evaluation_abstract" max="10" min="0" value="{{ isset($articleevaluation->evaluation_abstract) ? $articleevaluation->evaluation_abstract : ''}}" required="" onchange="sum_score()">
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
                        <input class="form-control sum_input" name="evaluation_introduction" type="number" id="evaluation_introduction" max="20" min="0" value="{{ isset($articleevaluation->evaluation_introduction) ? $articleevaluation->evaluation_introduction : ''}}" required="" onchange="sum_score()">
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
                        <input class="form-control sum_input" name="evaluation_methodology" type="number" id="evaluation_methodology" max="20" min="0" value="{{ isset($articleevaluation->evaluation_methodology) ? $articleevaluation->evaluation_methodology : ''}}" required="" onchange="sum_score()">
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
                        <input class="form-control sum_input" name="evaluation_result" type="number" id="evaluation_result" max="20" min="0" value="{{ isset($articleevaluation->evaluation_result) ? $articleevaluation->evaluation_result : ''}}" required="" onchange="sum_score()">
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
                        <input class="form-control sum_input" name="evaluation_conclusion" type="number" id="evaluation_conclusion" max="20" min="0" value="{{ isset($articleevaluation->evaluation_conclusion) ? $articleevaluation->evaluation_conclusion : ''}}" required="" onchange="sum_score()">
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
                        <input class="form-control sum_input" name="evaluation_reference" type="number" id="evaluation_reference" max="5" min="0" value="{{ isset($articleevaluation->evaluation_reference) ? $articleevaluation->evaluation_reference : ''}}" required="" onchange="sum_score()">
                        {!! $errors->first('evaluation_reference', '<p class="help-block">:message</p>') !!}
                    </div></td>
                <td><div class="form-group {{ $errors->has('comment_reference') ? 'has-error' : ''}}">
                        <textarea class="form-control" rows="5" name="comment_reference" type="textarea" id="comment_reference" >{{ isset($articleevaluation->comment_reference) ? $articleevaluation->comment_reference : ''}}</textarea>
                        {!! $errors->first('comment_reference', '<p class="help-block">:message</p>') !!}
                    </div></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td></td>
                <td></td>
                <td><div class="form-group {{ $errors->has('comment_another') ? 'has-error' : ''}}">
                        <textarea class="form-control" name="comment_another" type="textarea" id="comment_another" placeholder="ความคิดเห็นอื่นๆ (ถ้ามี)" >{{ isset($articleevaluation->comment_another) ? $articleevaluation->comment_another : ''}}</textarea>
                        {!! $errors->first('comment_another', '<p class="help-block">:message</p>') !!}
                    </div></td>
            </tr>
            <tr>
                <th></th>
                <th><br>รวม</th>
                <td><br>100</td>
                <th><br><div class="form-group {{ $errors->has('evaluation_total_score') ? 'has-error' : ''}}"> 
                        
                        <input class="form-control" name="evaluation_total_score" type="text" id="evaluation_total_score" value="{{ isset($articleevaluation->evaluation_total_score) ? $articleevaluation->evaluation_total_score : ''}}"  readonly="">
                        {!! $errors->first('evaluation_total_score', '<p class="help-block">:message</p>') !!}
                    </div></th>
                <td>
                    <div class="form-group {{ $errors->has('file_comment') ? 'has-error' : ''}}">
                        <label for="filename" class="control-label">{{ 'แนบไฟล์ความคิดเห็น' }} 
                        <input class="form-control" name="file_comment" type="file"  value="{{ isset($articleevaluation->file_comment) ? $articleevaluation->file_comment : ''}}"  >
                        {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
    </table>
            
            <hr>

                <div class="form-group {{ $errors->has('assessment') ? 'has-error' : ''}} d-none">
                    <label for="assessment" class="control-label">{{ 'เกณฑ์การประเมิน' }}</label>
                    <select name="assessment" class="form-control form-control-sm" id="assessment" required >
                        @foreach (["ผ่าน"=>"ผ่าน โดยไม่มีการแก้ไข","ผ่าน หลังการแก้ไข"=>"ผ่าน หลังการปรับปรุงแก้ไข","ไม่ผ่าน"=>"ไม่ผ่าน"] as $optionKey => $optionValue)
                            <option value="{{ $optionKey }}" {{ (isset($article_evaluation->assessment) && $article_evaluation->assessment == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                        @endforeach
                    </select>
                </div>
          
            <hr>
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
    <input class="btn btn-primary" type="submit"  value="{{ $formMode === 'edit' ? 'แก้ไข' : 'ส่งผลประเมิน' }}"onclick="return confirm(&quot;ยืนยันการส่งผลประเมินหรือไม่ ?&quot;)">
</div>

<script type="text/javascript">

function sum_score() {
  let array_a = document.getElementsByClassName("sum_input"); //ARRAY OBJECT 
  let i ;
  let number = 0.0 ;
  for(i = 0; i < array_a.length; i++){
    number += isNaN(parseFloat(array_a[i].value)) ? 0 : parseFloat(array_a[i].value) ; 
  }
      
  document.getElementById("evaluation_total_score").value = number ;
}
</script>

</div>






<!--

<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'หมายเลขบทความ' }}</label>
    <input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($articleevaluation->article_id) ? $articleevaluation->article_id : ''}}" readonly required="">
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_name') ? 'has-error' : ''}}">
    <label for="evaluation_name" class="control-label">{{ 'ชื่อเรื่อง ภาษาไทยและภาษาอังกฤษ' }}</label>
    <input class="form-control" name="evaluation_name" type="number" id="evaluation_name" value="{{ isset($articleevaluation->evaluation_name) ? $articleevaluation->evaluation_name : ''}}" >
    {!! $errors->first('evaluation_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_abstract') ? 'has-error' : ''}}">
    <label for="evaluation_abstract" class="control-label">{{ 'บทคัดย่อ ภาษาไทยและภาษาอังกฤษ' }}</label>
    <input class="form-control" name="evaluation_abstract" type="number" id="evaluation_abstract" value="{{ isset($articleevaluation->evaluation_abstract) ? $articleevaluation->evaluation_abstract : ''}}" >
    {!! $errors->first('evaluation_abstract', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_introduction') ? 'has-error' : ''}}">
    <label for="evaluation_introduction" class="control-label">{{ 'บทนำ(วัตถุประสงค์ และความสำคัญของปัญหาวิจัย)' }}</label>
    <input class="form-control" name="evaluation_introduction" type="number" id="evaluation_introduction" value="{{ isset($articleevaluation->evaluation_introduction) ? $articleevaluation->evaluation_introduction : ''}}" >
    {!! $errors->first('evaluation_introduction', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_methodology') ? 'has-error' : ''}}">
    <label for="evaluation_methodology" class="control-label">{{ 'วิธีดำเนินการวิจัย(ระเบียบวิธีวิจัยและขั้นตอนวิธีดำเนินการวิจัย)' }}</label>
    <input class="form-control" name="evaluation_methodology" type="number" id="evaluation_methodology" value="{{ isset($articleevaluation->evaluation_methodology) ? $articleevaluation->evaluation_methodology : ''}}" >
    {!! $errors->first('evaluation_methodology', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_result') ? 'has-error' : ''}}">
    <label for="evaluation_result" class="control-label">{{ 'ผลการวิจัยและการอภิปรายผล' }}</label>
    <input class="form-control" name="evaluation_result" type="number" id="evaluation_result" value="{{ isset($articleevaluation->evaluation_result) ? $articleevaluation->evaluation_result : ''}}" >
    {!! $errors->first('evaluation_result', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_conclusion') ? 'has-error' : ''}}">
    <label for="evaluation_conclusion" class="control-label">{{ 'สรุปผลการวิจัย' }}</label>
    <input class="form-control" name="evaluation_conclusion" type="number" id="evaluation_conclusion" value="{{ isset($articleevaluation->evaluation_conclusion) ? $articleevaluation->evaluation_conclusion : ''}}" >
    {!! $errors->first('evaluation_conclusion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_reference') ? 'has-error' : ''}}">
    <label for="evaluation_reference" class="control-label">{{ 'เอกสารอ้างอิง' }}</label>
    <input class="form-control" name="evaluation_reference" type="number" id="evaluation_reference" value="{{ isset($articleevaluation->evaluation_reference) ? $articleevaluation->evaluation_reference : ''}}" >
    {!! $errors->first('evaluation_reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_total_score') ? 'has-error' : ''}}">
    <label for="evaluation_total_score" class="control-label">{{ 'คะแนนรวม' }}</label>
    <input class="form-control" name="evaluation_total_score" type="number" id="evaluation_total_score" value="{{ isset($articleevaluation->evaluation_total_score) ? $articleevaluation->evaluation_total_score : ''}}" >
    {!! $errors->first('evaluation_total_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('assessment') ? 'has-error' : ''}}">
    <label for="assessment" class="control-label">{{ 'เกณฑ์การประเมิน' }}</label>
    <input class="form-control" name="assessment" type="text" id="assessment" value="{{ isset($articleevaluation->assessment) ? $articleevaluation->assessment : ''}}" >
    {!! $errors->first('assessment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_summary') ? 'has-error' : ''}}">
    <label for="evaluation_summary" class="control-label">{{ 'สรุปผลการประเมิน' }}</label>
    <input class="form-control" name="evaluation_summary" type="text" id="evaluation_summary" value="{{ isset($articleevaluation->evaluation_summary) ? $articleevaluation->evaluation_summary : ''}}" >
    {!! $errors->first('evaluation_summary', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_name') ? 'has-error' : ''}}">
    <label for="comment_name" class="control-label">{{ 'ชื่อเรื่อง (Title)' }}</label>
    <textarea class="form-control" rows="5" name="comment_name" type="textarea" id="comment_name" >{{ isset($articleevaluation->comment_name) ? $articleevaluation->comment_name : ''}}</textarea>
    {!! $errors->first('comment_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_abstract') ? 'has-error' : ''}}">
    <label for="comment_abstract" class="control-label">{{ 'บทคัดย่อ (Abstract)' }}</label>
    <textarea class="form-control" rows="5" name="comment_abstract" type="textarea" id="comment_abstract" >{{ isset($articleevaluation->comment_abstract) ? $articleevaluation->comment_abstract : ''}}</textarea>
    {!! $errors->first('comment_abstract', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_introduction') ? 'has-error' : ''}}">
    <label for="comment_introduction" class="control-label">{{ 'บทนำ (วัตถุประสงค์และความสำคัญของปัญหาวิจัย)(Introduction)' }}</label>
    <textarea class="form-control" rows="5" name="comment_introduction" type="textarea" id="comment_introduction" >{{ isset($articleevaluation->comment_introduction) ? $articleevaluation->comment_introduction : ''}}</textarea>
    {!! $errors->first('comment_introduction', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_methodology') ? 'has-error' : ''}}">
    <label for="comment_methodology" class="control-label">{{ 'วิธีดำเนินการวิจัย(ระเบียบวิธีวิจัยและขั้นตอนวิธีดำเนินการวิจัย)' }}</label>
    <textarea class="form-control" rows="5" name="comment_methodology" type="textarea" id="comment_methodology" >{{ isset($articleevaluation->comment_methodology) ? $articleevaluation->comment_methodology : ''}}</textarea>
    {!! $errors->first('comment_methodology', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_result') ? 'has-error' : ''}}">
    <label for="comment_result" class="control-label">{{ 'ผลการวิจัยและการอภิปรายผล' }}</label>
    <textarea class="form-control" rows="5" name="comment_result" type="textarea" id="comment_result" >{{ isset($articleevaluation->comment_result) ? $articleevaluation->comment_result : ''}}</textarea>
    {!! $errors->first('comment_result', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_conclusion') ? 'has-error' : ''}}">
    <label for="comment_conclusion" class="control-label">{{ 'สรุปผลการวิจัย' }}</label>
    <textarea class="form-control" rows="5" name="comment_conclusion" type="textarea" id="comment_conclusion" >{{ isset($articleevaluation->comment_conclusion) ? $articleevaluation->comment_conclusion : ''}}</textarea>
    {!! $errors->first('comment_conclusion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_reference') ? 'has-error' : ''}}">
    <label for="comment_reference" class="control-label">{{ 'เอกสารอ้างอิง' }}</label>
    <textarea class="form-control" rows="5" name="comment_reference" type="textarea" id="comment_reference" >{{ isset($articleevaluation->comment_reference) ? $articleevaluation->comment_reference : ''}}</textarea>
    {!! $errors->first('comment_reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'ผู้ประเมินบทความ' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($articleevaluation->user_id) ? $articleevaluation->user_id : ''}}" readonly >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>

-->