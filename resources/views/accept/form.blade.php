<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} d-none">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control " name="email" type="text" id="email" value="{{ isset($accept->email) ? $accept->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'ชื่อบทความ' }}</label>
    <input class="form-control" name="name_th" type="text" id="name_th" value="{{ isset($article->name_th) ? $article->name_th : ''}}"  readonly="">
    
    <input class="form-control d-none" name="article_id" type="number" id="article_id" value="{{ isset($article->id) ? $article->id : ''}}"  readonly="">
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('reviewer_id') ? 'has-error' : ''}}">
    <label for="reviewer_id" class="control-label">{{ 'ผู้ประเมิน' }}</label>
        <select name="reviewer_id" class="form-control form-control-sm" id="reviewer_id" required >
                @foreach ($reviewers as $item)
                    <option value="{{ $item->id }}" {{ (isset($accept->reviewer_id) && $accept->reviewer_id == $item->id) ? 'selected' : ''}}>{{ $item->title }} {{ $item->name }} {{ $item->lastname }} : {{ $item->school }} ({{ $item->group }}) : {{ $item->email }} </option>
                @endforeach
        </select>
</div>

<div class="form-group {{ $errors->has('feedback') ? 'has-error' : ''}} d-none">
    <label for="feedback" class="control-label">{{ 'Feedback' }}</label>
    <input class="form-control" name="feedback" type="text" id="feedback" value="{{ isset($accept->feedback) ? $accept->feedback : ''}}" >
    {!! $errors->first('feedback', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}} d-none">
    <label for="remark" class="control-label">{{ 'Remark' }}</label>
    <input class="form-control" name="remark" type="text" id="remark" value="{{ isset($accept->remark) ? $accept->remark : ''}}" >
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
