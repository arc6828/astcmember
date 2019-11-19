<div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
    <label for="sex" class="control-label">{{ 'เพศ' }}</label>
    <select name="sex" class="form-control form-control-sm" id="sex" >
    @foreach (json_decode('{"\u0e0a\u0e32\u0e22":"\u0e0a\u0e32\u0e22","\u0e2b\u0e0d\u0e34\u0e07":"\u0e2b\u0e0d\u0e34\u0e07"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($profile->sex) && $profile->sex == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'คำนำหน้าชื่อ' }}</label>
    <select name="title" class="form-control form-control-sm" id="title" >
    @foreach (json_decode('{"\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c":"\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c","\u0e23\u0e2d\u0e07\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c":"\u0e23\u0e2d\u0e07\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c","\u0e1c\u0e39\u0e49\u0e0a\u0e48\u0e27\u0e22\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c":"\u0e1c\u0e39\u0e49\u0e0a\u0e48\u0e27\u0e22\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c","\u0e19\u0e32\u0e22":"\u0e19\u0e32\u0e22","\u0e19\u0e32\u0e07":"\u0e19\u0e32\u0e07","\u0e19\u0e32\u0e07\u0e2a\u0e32\u0e27":"\u0e19\u0e32\u0e07\u0e2a\u0e32\u0e27"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($profile->title) && $profile->title == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'ชื่อ' }}</label>
    <input class="form-control form-control-sm" name="name" type="text" id="name" value="{{ isset($profile->name) ? $profile->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    <label for="lastname" class="control-label">{{ 'นามสกุล' }}</label>
    <input class="form-control form-control-sm" name="lastname" type="text" id="lastname" value="{{ isset($profile->lastname) ? $profile->lastname : ''}}" >
    {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'อีเมล' }}</label>
    <input class="form-control form-control-sm" name="email" type="text" id="email" value="{{ isset($profile->email) ? $profile->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'สถานภาพ' }}</label>
    <select name="status" class="form-control form-control-sm" id="status" >
    @foreach (json_decode('{"\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e15\u0e23\u0e35":"\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e15\u0e23\u0e35","\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e42\u0e17":"\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e42\u0e17","\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e40\u0e2d\u0e01":"\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e40\u0e2d\u0e01","\u0e2d\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c":"\u0e2d\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c","\u0e19\u0e31\u0e01\u0e27\u0e34\u0e08\u0e31\u0e22":"\u0e19\u0e31\u0e01\u0e27\u0e34\u0e08\u0e31\u0e22","\u0e40\u0e08\u0e49\u0e32\u0e2b\u0e19\u0e49\u0e32\u0e17\u0e35\u0e48":"\u0e40\u0e08\u0e49\u0e32\u0e2b\u0e19\u0e49\u0e32\u0e17\u0e35\u0e48","\u0e2d\u0e37\u0e48\u0e19\u0e46":"\u0e2d\u0e37\u0e48\u0e19\u0e46"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($profile->status) && $profile->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('statusothers') ? 'has-error' : ''}}">
    <label for="statusothers" class="control-label">{{ 'สถานภาพอื่นๆ โปรดระบุ' }}</label>
    <input class="form-control form-control-sm" name="statusothers" type="text" id="statusothers" value="{{ isset($profile->statusothers) ? $profile->statusothers : ''}}" >
    {!! $errors->first('statusothers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('food') ? 'has-error' : ''}}">
    <label for="food" class="control-label">{{ 'อาหารกลางวัน' }}</label>
    <select name="food" class="form-control form-control-sm" id="food" >
    @foreach (json_decode('{"\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e44\u0e17\u0e22":"\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e44\u0e17\u0e22","\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e21\u0e31\u0e07\u0e2a\u0e27\u0e34\u0e23\u0e31\u0e15":"\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e21\u0e31\u0e07\u0e2a\u0e27\u0e34\u0e23\u0e31\u0e15","\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e21\u0e38\u0e2a\u0e25\u0e34\u0e21":"\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e21\u0e38\u0e2a\u0e25\u0e34\u0e21"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($profile->food) && $profile->food == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('food', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('school') ? 'has-error' : ''}}">
    <label for="school" class="control-label">{{ 'สถาบัน' }}</label>
    <input class="form-control form-control-sm" name="school" type="text" id="school" value="{{ isset($profile->school) ? $profile->school : ''}}" >
    {!! $errors->first('school', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('major') ? 'has-error' : ''}}">
    <label for="major" class="control-label">{{ 'คณะ/ภาควิชา' }}</label>
    <input class="form-control form-control-sm" name="major" type="text" id="major" value="{{ isset($profile->major) ? $profile->major : ''}}" >
    {!! $errors->first('major', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'เลขที่ ซอย ถนน ตำบล' }}</label>
    <input class="form-control form-control-sm" name="address" type="text" id="address" value="{{ isset($profile->address) ? $profile->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('district') ? 'has-error' : ''}}">
    <label for="district" class="control-label">{{ 'อำเภอ' }}</label>
    <input class="form-control form-control-sm" name="district" type="text" id="district" value="{{ isset($profile->district) ? $profile->district : ''}}" >
    {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subdistrict') ? 'has-error' : ''}}">
    <label for="subdistrict" class="control-label">{{ 'จังหวัด' }}</label>
    <input class="form-control form-control-sm" name="subdistrict" type="text" id="subdistrict" value="{{ isset($profile->subdistrict) ? $profile->subdistrict : ''}}" >
    {!! $errors->first('subdistrict', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('postnumber') ? 'has-error' : ''}}">
    <label for="postnumber" class="control-label">{{ 'รหัสไปรษณีย์' }}</label>
    <input class="form-control form-control-sm" name="postnumber" type="text" id="postnumber" value="{{ isset($profile->postnumber) ? $profile->postnumber : ''}}" >
    {!! $errors->first('postnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
    <input class="form-control form-control-sm" name="tel" type="text" id="tel" value="{{ isset($profile->tel) ? $profile->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}}">
    <label for="fax" class="control-label">{{ 'เบอร์โทรสาร' }}</label>
    <input class="form-control form-control-sm" name="fax" type="text" id="fax" value="{{ isset($profile->fax) ? $profile->fax : ''}}" >
    {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fileregister') ? 'has-error' : ''}}">
    <label for="fileregister" class="control-label">{{ 'ไฟล์หลักฐานการชำระเงินค่าลงทะเบียน' }}</label>
    <input class="form-control form-control-sm" name="fileregister" type="file" id="fileregister" value="{{ isset($profile->fileregister) ? $profile->fileregister : ''}}" >
    {!! $errors->first('fileregister', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_school') ? 'has-error' : ''}}">
    <label for="bill_school" class="control-label">{{ 'สถาบัน' }}</label>
    <input class="form-control form-control-sm" name="bill_school" type="text" id="bill_school" value="{{ isset($profile->bill_school) ? $profile->bill_school : ''}}" >
    {!! $errors->first('bill_school', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_major') ? 'has-error' : ''}}">
    <label for="bill_major" class="control-label">{{ 'คณะ/ภาควิชา' }}</label>
    <input class="form-control form-control-sm" name="bill_major" type="text" id="bill_major" value="{{ isset($profile->bill_major) ? $profile->bill_major : ''}}" >
    {!! $errors->first('bill_major', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_address') ? 'has-error' : ''}}">
    <label for="bill_address" class="control-label">{{ 'เลขที่ ซอย ถนน ตำบล' }}</label>
    <input class="form-control form-control-sm" name="bill_address" type="text" id="bill_address" value="{{ isset($profile->bill_address) ? $profile->bill_address : ''}}" >
    {!! $errors->first('bill_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_district') ? 'has-error' : ''}}">
    <label for="bill_district" class="control-label">{{ 'อำเภอ' }}</label>
    <input class="form-control form-control-sm" name="bill_district" type="text" id="bill_district" value="{{ isset($profile->bill_district) ? $profile->bill_district : ''}}" >
    {!! $errors->first('bill_district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_subdistrict') ? 'has-error' : ''}}">
    <label for="bill_subdistrict" class="control-label">{{ 'จังหวัด' }}</label>
    <input class="form-control form-control-sm" name="bill_subdistrict" type="text" id="bill_subdistrict" value="{{ isset($profile->bill_subdistrict) ? $profile->bill_subdistrict : ''}}" >
    {!! $errors->first('bill_subdistrict', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_postnumber') ? 'has-error' : ''}}">
    <label for="bill_postnumber" class="control-label">{{ 'รหัสไปรษณีย์' }}</label>
    <input class="form-control form-control-sm" name="bill_postnumber" type="text" id="bill_postnumber" value="{{ isset($profile->bill_postnumber) ? $profile->bill_postnumber : ''}}" >
    {!! $errors->first('bill_postnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_tel') ? 'has-error' : ''}}">
    <label for="bill_tel" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
    <input class="form-control form-control-sm" name="bill_tel" type="text" id="bill_tel" value="{{ isset($profile->bill_tel) ? $profile->bill_tel : ''}}" >
    {!! $errors->first('bill_tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_fax') ? 'has-error' : ''}}">
    <label for="bill_fax" class="control-label">{{ 'เบอร์โทรสาร' }}</label>
    <input class="form-control form-control-sm" name="bill_fax" type="text" id="bill_fax" value="{{ isset($profile->bill_fax) ? $profile->bill_fax : ''}}" >
    {!! $errors->first('bill_fax', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
