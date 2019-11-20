<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($document->title) ? $document->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control d-none" name="user_id" type="number" id="user_id" value="{{ isset($document->user_id) ? $document->user_id : Auth::id()}}" readonly>
    <input class="form-control" value="{{ isset($document->user_id) ? $document->user->name : Auth::user()->name }}" readonly>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'Article Id' }}</label>
    <input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($document->article_id) ? $document->article_id : request('article_id')}}" readonly>
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('filename') ? 'has-error' : ''}}">
    <label for="filename" class="control-label">{{ 'Filename' }}</label>
    <input class="form-control" name="filename" type="file" id="filename" value="{{ isset($document->filename) ? $document->filename : ''}}" >
    {!! $errors->first('filename', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
