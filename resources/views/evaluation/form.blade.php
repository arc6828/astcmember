<div class="form-group {{ $errors->has('around') ? 'has-error' : ''}}">
    <label for="around" class="control-label">{{ 'Around' }}</label>
    <input class="form-control" name="around" type="text" id="around" value="{{ isset($evaluation->around) ? $evaluation->around : ''}}" >
    {!! $errors->first('around', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <input class="form-control" name="date" type="date" id="date" value="{{ isset($evaluation->date) ? $evaluation->date : ''}}" >
            {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('results_evaluation') ? 'has-error' : ''}}">
    <label for="results_evaluation" class="control-label">{{ 'Results Evaluation' }}</label>
    <input class="form-control" name="results_evaluation" type="text" id="results_evaluation" value="{{ isset($evaluation->results_evaluation) ? $evaluation->results_evaluation : ''}}" >
    {!! $errors->first('results_evaluation', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}">
    <label for="comment" class="control-label">{{ 'Comment' }}</label>
    <textarea class="form-control" rows="5" name="comment" type="textarea" id="comment" >{{ isset($evaluation->comment) ? $evaluation->comment : ''}}</textarea>
    {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'Article Id' }}</label>
    <input class="form-control" name="article_id" type="text" id="article_id" value="{{ isset($evaluation->article_id) ? $evaluation->article_id : ''}}" >
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="text" id="user_id" value="{{ isset($evaluation->user_id) ? $evaluation->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
