<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($accept->email) ? $accept->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'Article Id' }}</label>
    <input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($accept->article_id) ? $accept->article_id : ''}}" >
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('reviwer_id') ? 'has-error' : ''}}">
    <label for="reviwer_id" class="control-label">{{ 'Reviwer Id' }}</label>
    <input class="form-control" name="reviwer_id" type="number" id="reviwer_id" value="{{ isset($accept->reviwer_id) ? $accept->reviwer_id : ''}}" >
    {!! $errors->first('reviwer_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('feedback') ? 'has-error' : ''}}">
    <label for="feedback" class="control-label">{{ 'Feedback' }}</label>
    <input class="form-control" name="feedback" type="text" id="feedback" value="{{ isset($accept->feedback) ? $accept->feedback : ''}}" >
    {!! $errors->first('feedback', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
    <label for="remark" class="control-label">{{ 'Remark' }}</label>
    <input class="form-control" name="remark" type="text" id="remark" value="{{ isset($accept->remark) ? $accept->remark : ''}}" >
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
