<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'Article Id' }}</label>
    <input class="form-control" name="article_id" type="number" id="article_id" value="{{ isset($articleevaluation->article_id) ? $articleevaluation->article_id : ''}}" >
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_name') ? 'has-error' : ''}}">
    <label for="evaluation_name" class="control-label">{{ 'Evaluation Name' }}</label>
    <input class="form-control" name="evaluation_name" type="number" id="evaluation_name" value="{{ isset($articleevaluation->evaluation_name) ? $articleevaluation->evaluation_name : ''}}" >
    {!! $errors->first('evaluation_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_abstract') ? 'has-error' : ''}}">
    <label for="evaluation_abstract" class="control-label">{{ 'Evaluation Abstract' }}</label>
    <input class="form-control" name="evaluation_abstract" type="number" id="evaluation_abstract" value="{{ isset($articleevaluation->evaluation_abstract) ? $articleevaluation->evaluation_abstract : ''}}" >
    {!! $errors->first('evaluation_abstract', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_introduction') ? 'has-error' : ''}}">
    <label for="evaluation_introduction" class="control-label">{{ 'Evaluation Introduction' }}</label>
    <input class="form-control" name="evaluation_introduction" type="number" id="evaluation_introduction" value="{{ isset($articleevaluation->evaluation_introduction) ? $articleevaluation->evaluation_introduction : ''}}" >
    {!! $errors->first('evaluation_introduction', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_methodology') ? 'has-error' : ''}}">
    <label for="evaluation_methodology" class="control-label">{{ 'Evaluation Methodology' }}</label>
    <input class="form-control" name="evaluation_methodology" type="number" id="evaluation_methodology" value="{{ isset($articleevaluation->evaluation_methodology) ? $articleevaluation->evaluation_methodology : ''}}" >
    {!! $errors->first('evaluation_methodology', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_result') ? 'has-error' : ''}}">
    <label for="evaluation_result" class="control-label">{{ 'Evaluation Result' }}</label>
    <input class="form-control" name="evaluation_result" type="number" id="evaluation_result" value="{{ isset($articleevaluation->evaluation_result) ? $articleevaluation->evaluation_result : ''}}" >
    {!! $errors->first('evaluation_result', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_conclusion') ? 'has-error' : ''}}">
    <label for="evaluation_conclusion" class="control-label">{{ 'Evaluation Conclusion' }}</label>
    <input class="form-control" name="evaluation_conclusion" type="number" id="evaluation_conclusion" value="{{ isset($articleevaluation->evaluation_conclusion) ? $articleevaluation->evaluation_conclusion : ''}}" >
    {!! $errors->first('evaluation_conclusion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_reference') ? 'has-error' : ''}}">
    <label for="evaluation_reference" class="control-label">{{ 'Evaluation Reference' }}</label>
    <input class="form-control" name="evaluation_reference" type="number" id="evaluation_reference" value="{{ isset($articleevaluation->evaluation_reference) ? $articleevaluation->evaluation_reference : ''}}" >
    {!! $errors->first('evaluation_reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_total_score') ? 'has-error' : ''}}">
    <label for="evaluation_total_score" class="control-label">{{ 'Evaluation Total Score' }}</label>
    <input class="form-control" name="evaluation_total_score" type="number" id="evaluation_total_score" value="{{ isset($articleevaluation->evaluation_total_score) ? $articleevaluation->evaluation_total_score : ''}}" >
    {!! $errors->first('evaluation_total_score', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('assessment') ? 'has-error' : ''}}">
    <label for="assessment" class="control-label">{{ 'Assessment' }}</label>
    <input class="form-control" name="assessment" type="text" id="assessment" value="{{ isset($articleevaluation->assessment) ? $articleevaluation->assessment : ''}}" >
    {!! $errors->first('assessment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('evaluation_summary') ? 'has-error' : ''}}">
    <label for="evaluation_summary" class="control-label">{{ 'Evaluation Summary' }}</label>
    <input class="form-control" name="evaluation_summary" type="text" id="evaluation_summary" value="{{ isset($articleevaluation->evaluation_summary) ? $articleevaluation->evaluation_summary : ''}}" >
    {!! $errors->first('evaluation_summary', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_name') ? 'has-error' : ''}}">
    <label for="comment_name" class="control-label">{{ 'Comment Name' }}</label>
    <textarea class="form-control" rows="5" name="comment_name" type="textarea" id="comment_name" >{{ isset($articleevaluation->comment_name) ? $articleevaluation->comment_name : ''}}</textarea>
    {!! $errors->first('comment_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_abstract') ? 'has-error' : ''}}">
    <label for="comment_abstract" class="control-label">{{ 'Comment Abstract' }}</label>
    <textarea class="form-control" rows="5" name="comment_abstract" type="textarea" id="comment_abstract" >{{ isset($articleevaluation->comment_abstract) ? $articleevaluation->comment_abstract : ''}}</textarea>
    {!! $errors->first('comment_abstract', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_introduction') ? 'has-error' : ''}}">
    <label for="comment_introduction" class="control-label">{{ 'Comment Introduction' }}</label>
    <textarea class="form-control" rows="5" name="comment_introduction" type="textarea" id="comment_introduction" >{{ isset($articleevaluation->comment_introduction) ? $articleevaluation->comment_introduction : ''}}</textarea>
    {!! $errors->first('comment_introduction', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_methodology') ? 'has-error' : ''}}">
    <label for="comment_methodology" class="control-label">{{ 'Comment Methodology' }}</label>
    <textarea class="form-control" rows="5" name="comment_methodology" type="textarea" id="comment_methodology" >{{ isset($articleevaluation->comment_methodology) ? $articleevaluation->comment_methodology : ''}}</textarea>
    {!! $errors->first('comment_methodology', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_result') ? 'has-error' : ''}}">
    <label for="comment_result" class="control-label">{{ 'Comment Result' }}</label>
    <textarea class="form-control" rows="5" name="comment_result" type="textarea" id="comment_result" >{{ isset($articleevaluation->comment_result) ? $articleevaluation->comment_result : ''}}</textarea>
    {!! $errors->first('comment_result', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_conclusion') ? 'has-error' : ''}}">
    <label for="comment_conclusion" class="control-label">{{ 'Comment Conclusion' }}</label>
    <textarea class="form-control" rows="5" name="comment_conclusion" type="textarea" id="comment_conclusion" >{{ isset($articleevaluation->comment_conclusion) ? $articleevaluation->comment_conclusion : ''}}</textarea>
    {!! $errors->first('comment_conclusion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment_reference') ? 'has-error' : ''}}">
    <label for="comment_reference" class="control-label">{{ 'Comment Reference' }}</label>
    <textarea class="form-control" rows="5" name="comment_reference" type="textarea" id="comment_reference" >{{ isset($articleevaluation->comment_reference) ? $articleevaluation->comment_reference : ''}}</textarea>
    {!! $errors->first('comment_reference', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($articleevaluation->user_id) ? $articleevaluation->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
