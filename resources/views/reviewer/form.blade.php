<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($reviewer->email) ? $reviewer->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($reviewer->title) ? $reviewer->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($reviewer->name) ? $reviewer->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    <label for="lastname" class="control-label">{{ 'Lastname' }}</label>
    <input class="form-control" name="lastname" type="text" id="lastname" value="{{ isset($reviewer->lastname) ? $reviewer->lastname : ''}}" >
    {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('group') ? 'has-error' : ''}}">
    <label for="group" class="control-label">{{ 'Group' }}</label>
    <input class="form-control" name="group" type="text" id="group" value="{{ isset($reviewer->group) ? $reviewer->group : ''}}" >
    {!! $errors->first('group', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('expert') ? 'has-error' : ''}}">
    <label for="expert" class="control-label">{{ 'Expert' }}</label>
    <input class="form-control" name="expert" type="text" id="expert" value="{{ isset($reviewer->expert) ? $reviewer->expert : ''}}" >
    {!! $errors->first('expert', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('school') ? 'has-error' : ''}}">
    <label for="school" class="control-label">{{ 'School' }}</label>
    <input class="form-control" name="school" type="text" id="school" value="{{ isset($reviewer->school) ? $reviewer->school : ''}}" >
    {!! $errors->first('school', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('major') ? 'has-error' : ''}}">
    <label for="major" class="control-label">{{ 'Major' }}</label>
    <input class="form-control" name="major" type="text" id="major" value="{{ isset($reviewer->major) ? $reviewer->major : ''}}" >
    {!! $errors->first('major', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($reviewer->address) ? $reviewer->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('district') ? 'has-error' : ''}}">
    <label for="district" class="control-label">{{ 'District' }}</label>
    <input class="form-control" name="district" type="text" id="district" value="{{ isset($reviewer->district) ? $reviewer->district : ''}}" >
    {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amphoe') ? 'has-error' : ''}}">
    <label for="amphoe" class="control-label">{{ 'Amphoe' }}</label>
    <input class="form-control" name="amphoe" type="text" id="amphoe" value="{{ isset($reviewer->amphoe) ? $reviewer->amphoe : ''}}" >
    {!! $errors->first('amphoe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('province') ? 'has-error' : ''}}">
    <label for="province" class="control-label">{{ 'Province' }}</label>
    <input class="form-control" name="province" type="text" id="province" value="{{ isset($reviewer->province) ? $reviewer->province : ''}}" >
    {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('postnumber') ? 'has-error' : ''}}">
    <label for="postnumber" class="control-label">{{ 'Postnumber' }}</label>
    <input class="form-control" name="postnumber" type="text" id="postnumber" value="{{ isset($reviewer->postnumber) ? $reviewer->postnumber : ''}}" >
    {!! $errors->first('postnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Tel' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($reviewer->tel) ? $reviewer->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}}">
    <label for="fax" class="control-label">{{ 'Fax' }}</label>
    <input class="form-control" name="fax" type="text" id="fax" value="{{ isset($reviewer->fax) ? $reviewer->fax : ''}}" >
    {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="{{ isset($reviewer->type) ? $reviewer->type : ''}}" >
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
    <label for="remark" class="control-label">{{ 'Remark' }}</label>
    <input class="form-control" name="remark" type="text" id="remark" value="{{ isset($reviewer->remark) ? $reviewer->remark : ''}}" >
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'บันทึก' : 'เพิ่ม' }}">
</div>
