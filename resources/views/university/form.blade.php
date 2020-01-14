<div class="form-group {{ $errors->has('university') ? 'has-error' : ''}}">
    <label for="university" class="control-label">{{ 'University' }}</label>
    <select name="university" class="form-control" id="university" >
    @foreach (json_decode('{"\u0e0a\u0e37\u0e48\u0e2d\u0e2a\u0e16\u0e32\u0e1a\u0e31\u0e19":"\u0e0a\u0e37\u0e48\u0e2d\u0e2a\u0e16\u0e32\u0e1a\u0e31\u0e19","\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e23\u0e31\u0e07\u0e2a\u0e34\u0e15":"\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e23\u0e31\u0e07\u0e2a\u0e34\u0e15","\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e2b\u0e31\u0e27\u0e40\u0e09\u0e35\u0e22\u0e27\u0e40\u0e09\u0e25\u0e34\u0e21\u0e1e\u0e23\u0e30\u0e40\u0e01\u0e35\u0e22\u0e23\u0e15\u0e34":"\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e2b\u0e31\u0e27\u0e40\u0e09\u0e35\u0e22\u0e27\u0e40\u0e09\u0e25\u0e34\u0e21\u0e1e\u0e23\u0e30\u0e40\u0e01\u0e35\u0e22\u0e23\u0e15\u0e34","\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e40\u0e17\u0e04\u0e42\u0e19\u0e42\u0e25\u0e22\u0e35\u0e23\u0e32\u0e0a\u0e21\u0e07\u0e04\u0e25\u0e18\u0e31\u0e0d\u0e1a\u0e38\u0e23\u0e35":"\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e40\u0e17\u0e04\u0e42\u0e19\u0e42\u0e25\u0e22\u0e35\u0e23\u0e32\u0e0a\u0e21\u0e07\u0e04\u0e25\u0e18\u0e31\u0e0d\u0e1a\u0e38\u0e23\u0e35","\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e23\u0e32\u0e0a\u0e20\u0e31\u0e0f\u0e27\u0e44\u0e25\u0e22\u0e2d\u0e25\u0e07\u0e01\u0e23\u0e13\u0e4c\u0e43\u0e19\u0e1e\u0e23\u0e30\u0e1a\u0e23\u0e21\u0e23\u0e32\u0e0a\u0e39\u0e1b\u0e16\u0e31\u0e21\u0e20\u0e4c":"\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e23\u0e32\u0e0a\u0e20\u0e31\u0e0f\u0e27\u0e44\u0e25\u0e22\u0e2d\u0e25\u0e07\u0e01\u0e23\u0e13\u0e4c\u0e43\u0e19\u0e1e\u0e23\u0e30\u0e1a\u0e23\u0e21\u0e23\u0e32\u0e0a\u0e39\u0e1b\u0e16\u0e31\u0e21\u0e20\u0e4c","\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e2a\u0e22\u0e32\u0e21 ":"\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e2a\u0e22\u0e32\u0e21 ","\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e2b\u0e2d\u0e01\u0e32\u0e23\u0e04\u0e49\u0e32\u0e44\u0e17\u0e22":"\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e2b\u0e2d\u0e01\u0e32\u0e23\u0e04\u0e49\u0e32\u0e44\u0e17\u0e22","\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e40\u0e01\u0e29\u0e15\u0e23\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e27\u0e34\u0e17\u0e22\u0e32\u0e40\u0e02\u0e15\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e41\u0e2a\u0e19 ":"\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e40\u0e01\u0e29\u0e15\u0e23\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e27\u0e34\u0e17\u0e22\u0e32\u0e40\u0e02\u0e15\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e41\u0e2a\u0e19 ","\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e1e\u0e23\u0e30\u0e08\u0e2d\u0e21\u0e40\u0e01\u0e25\u0e49\u0e32\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e40\u0e2b\u0e19\u0e37\u0e2d":"\u0e21\u0e2b\u0e32\u0e27\u0e34\u0e17\u0e22\u0e32\u0e25\u0e31\u0e22\u0e1e\u0e23\u0e30\u0e08\u0e2d\u0e21\u0e40\u0e01\u0e25\u0e49\u0e32\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e40\u0e2b\u0e19\u0e37\u0e2d"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($university->university) && $university->university == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('university', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('faculty') ? 'has-error' : ''}}">
    <label for="faculty" class="control-label">{{ 'Faculty' }}</label>
    <input class="form-control" name="faculty" type="text" id="faculty" value="{{ isset($university->faculty) ? $university->faculty : ''}}" >
    {!! $errors->first('faculty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($university->address) ? $university->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('district') ? 'has-error' : ''}}">
    <label for="district" class="control-label">{{ 'District' }}</label>
    <input class="form-control" name="district" type="text" id="district" value="{{ isset($university->district) ? $university->district : ''}}" >
    {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('subdistrict') ? 'has-error' : ''}}">
    <label for="subdistrict" class="control-label">{{ 'Subdistrict' }}</label>
    <input class="form-control" name="subdistrict" type="text" id="subdistrict" value="{{ isset($university->subdistrict) ? $university->subdistrict : ''}}" >
    {!! $errors->first('subdistrict', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('province') ? 'has-error' : ''}}">
    <label for="province" class="control-label">{{ 'Province' }}</label>
    <input class="form-control" name="province" type="text" id="province" value="{{ isset($university->province) ? $university->province : ''}}" >
    {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('postcode') ? 'has-error' : ''}}">
    <label for="postcode" class="control-label">{{ 'Postcode' }}</label>
    <input class="form-control" name="postcode" type="text" id="postcode" value="{{ isset($university->postcode) ? $university->postcode : ''}}" >
    {!! $errors->first('postcode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Tel' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($university->tel) ? $university->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($university->email) ? $university->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
