<div class="form-group {{ $errors->has('around') ? 'has-error' : ''}}">
    <label for="around" class="control-label">{{ 'Around' }}</label>
    <input class="form-control" name="around" type="text" id="around" value="{{ isset($evaluation->around) ? $evaluation->around : ''}}" >
    {!! $errors->first('around', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
    <label for="date" class="control-label">{{ 'Date' }}</label>
    <textarea class="form-control" rows="5" name="date" type="textarea" id="date" >{{ isset($evaluation->date) ? $evaluation->date : ''}}</textarea>
    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('results_evaluation') ? 'has-error' : ''}}">
    <label for="results_evaluation" class="control-label">{{ 'Results Evaluation' }}</label>
    <input class="form-control" name="results_evaluation" type="text" id="results_evaluation" value="{{ isset($evaluation->results_evaluation) ? $evaluation->results_evaluation : ''}}" >
    {!! $errors->first('results_evaluation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}">
    <label for="comment" class="control-label">{{ 'Comment' }}</label>
    <input class="form-control" name="comment" type="text" id="comment" value="{{ isset($evaluation->comment) ? $evaluation->comment : ''}}" >
    {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
