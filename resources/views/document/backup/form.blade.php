<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'ประเภทไฟล์' }}</label>
   <select name="title" class="form-control" id="title" >
    @foreach (["Word","PDF","Powerpoint/PDF","อื่นๆ"] as $optionKey => $optionValue)
        <option value="{{ $optionValue }}" {{ (isset($article->title) && $article->title == $optionValue) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control d-none" name="user_id" type="number" id="user_id" value="{{ isset($document->user_id) ? $document->user_id : Auth::id()}}" readonly=""  required="">
    <input class="form-control" value="{{ isset($document->user_id) ? $document->user->name : Auth::user()->name }}" readonly>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none  {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'บทความที่' }}</label>
    <input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($document->article_id) ? $document->article_id : request('article_id')}}" readonly=""  required="">
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('filename') ? 'has-error' : ''}}">
    <label for="filename" class="control-label">{{ 'Filename' }}</label>
    <input class="form-control" name="filename" type="file" id="filename" value="{{ isset($document->filename) ? $document->filename : ''}}"  required="">
    {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
    <label for="remark" class="control-label">{{ 'หมายเหตุ' }}</label>
    <input class="form-control" name="remark" type="text" id="remark" value="{{ isset($document->remark) ? $document->remark : ''}}" >
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
