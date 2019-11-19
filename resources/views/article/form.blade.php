<div class="form-group {{ $errors->has('prapet') ? 'has-error' : ''}}">
    <label for="prapet" class="control-label">{{ 'ประเภทการนำเสนอ' }}</label>
    <select name="prapet" class="form-control" id="prapet" >
    @foreach (json_decode('{"Oral presentation \u0e15\u0e35\u0e1e\u0e34\u0e21\u0e1e\u0e4c\u0e40\u0e09\u0e1e\u0e32\u0e30\u0e1a\u0e17\u0e04\u0e31\u0e14\u0e22\u0e48\u0e2d":"Oral presentation \u0e15\u0e35\u0e1e\u0e34\u0e21\u0e1e\u0e4c\u0e40\u0e09\u0e1e\u0e32\u0e30\u0e1a\u0e17\u0e04\u0e31\u0e14\u0e22\u0e48\u0e2d","\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e1b\u0e23\u0e30\u0e22\u0e38\u0e01\u0e15\u0e4c":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e1b\u0e23\u0e30\u0e22\u0e38\u0e01\u0e15\u0e4c","\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e1e\u0e37\u0e49\u0e19\u0e10\u0e32\u0e19":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e1e\u0e37\u0e49\u0e19\u0e10\u0e32\u0e19","\u0e01\u0e25\u0e38\u0e48\u0e21\u0e04\u0e2d\u0e21\u0e1e\u0e34\u0e27\u0e40\u0e15\u0e2d\u0e23\u0e4c\u0e41\u0e25\u0e30\u0e40\u0e17\u0e04\u0e42\u0e19\u0e42\u0e25\u0e22\u0e35\u0e2a\u0e32\u0e23\u0e2a\u0e19\u0e40\u0e17\u0e28":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e04\u0e2d\u0e21\u0e1e\u0e34\u0e27\u0e40\u0e15\u0e2d\u0e23\u0e4c\u0e41\u0e25\u0e30\u0e40\u0e17\u0e04\u0e42\u0e19\u0e42\u0e25\u0e22\u0e35\u0e2a\u0e32\u0e23\u0e2a\u0e19\u0e40\u0e17\u0e28","\u0e01\u0e25\u0e38\u0e48\u0e21\u0e19\u0e27\u0e31\u0e15\u0e01\u0e23\u0e23\u0e21":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e19\u0e27\u0e31\u0e15\u0e01\u0e23\u0e23\u0e21","\u0e19\u0e27\u0e31\u0e15\u0e01\u0e23\u0e23\u0e21 \u0e15\u0e35\u0e1e\u0e34\u0e21\u0e1e\u0e4c\u0e1a\u0e17\u0e04\u0e27\u0e32\u0e21\u0e09\u0e1a\u0e31\u0e1a\u0e40\u0e15\u0e47\u0e21":"\u0e19\u0e27\u0e31\u0e15\u0e01\u0e23\u0e23\u0e21 \u0e15\u0e35\u0e1e\u0e34\u0e21\u0e1e\u0e4c\u0e1a\u0e17\u0e04\u0e27\u0e32\u0e21\u0e09\u0e1a\u0e31\u0e1a\u0e40\u0e15\u0e47\u0e21"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($article->prapet) && $article->prapet == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('prapet', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('group') ? 'has-error' : ''}}">
    <label for="group" class="control-label">{{ 'กลุ่มสาขา' }}</label>
    <select name="group" class="form-control" id="group" >
    @foreach (json_decode('{"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e2a\u0e38\u0e02\u0e20\u0e32\u0e1e":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e2a\u0e38\u0e02\u0e20\u0e32\u0e1e","\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e1b\u0e23\u0e30\u0e22\u0e38\u0e01\u0e15\u0e4c":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e1b\u0e23\u0e30\u0e22\u0e38\u0e01\u0e15\u0e4c","\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e1e\u0e37\u0e49\u0e19\u0e10\u0e32\u0e19":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e27\u0e34\u0e17\u0e22\u0e32\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e4c\u0e1e\u0e37\u0e49\u0e19\u0e10\u0e32\u0e19","\u0e01\u0e25\u0e38\u0e48\u0e21\u0e04\u0e2d\u0e21\u0e1e\u0e34\u0e27\u0e40\u0e15\u0e2d\u0e23\u0e4c\u0e41\u0e25\u0e30\u0e40\u0e17\u0e04\u0e42\u0e19\u0e42\u0e25\u0e22\u0e35\u0e2a\u0e32\u0e23\u0e2a\u0e19\u0e40\u0e17\u0e28":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e04\u0e2d\u0e21\u0e1e\u0e34\u0e27\u0e40\u0e15\u0e2d\u0e23\u0e4c\u0e41\u0e25\u0e30\u0e40\u0e17\u0e04\u0e42\u0e19\u0e42\u0e25\u0e22\u0e35\u0e2a\u0e32\u0e23\u0e2a\u0e19\u0e40\u0e17\u0e28","\u0e01\u0e25\u0e38\u0e48\u0e21\u0e19\u0e27\u0e31\u0e15\u0e01\u0e23\u0e23\u0e21":"\u0e01\u0e25\u0e38\u0e48\u0e21\u0e19\u0e27\u0e31\u0e15\u0e01\u0e23\u0e23\u0e21"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($article->group) && $article->group == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('group', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_th') ? 'has-error' : ''}}">
    <label for="name_th" class="control-label">{{ 'ชื่อบทความ (ไทย)' }}</label>
    <input class="form-control" name="name_th" type="text" id="name_th" value="{{ isset($article->name_th) ? $article->name_th : ''}}" required>
    {!! $errors->first('name_th', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="control-label">{{ 'ชื่อบทความ (อังกฤษ)' }}</label>
    <input class="form-control" name="name_en" type="text" id="name_en" value="{{ isset($article->name_en) ? $article->name_en : ''}}" >
    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('purubpitshop') ? 'has-error' : ''}}">
    <label for="purubpitshop" class="control-label">{{ 'ผู้รับผิดชอบบทความ/ นักวิจัยหลัก' }}</label>
    <input class="form-control" name="purubpitshop" type="text" id="purubpitshop" value="{{ isset($article->purubpitshop) ? $article->purubpitshop : ''}}" >
    {!! $errors->first('purubpitshop', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'อีเมลผู้รับผิดชอบหลัก' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($article->email) ? $article->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_present') ? 'has-error' : ''}}">
    <label for="name_present" class="control-label">{{ 'ชื่อผู้ที่จะนำเสนอผลงาน' }}</label>
    <input class="form-control" name="name_present" type="text" id="name_present" value="{{ isset($article->name_present) ? $article->name_present : ''}}" >
    {!! $errors->first('name_present', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_aj') ? 'has-error' : ''}}">
    <label for="name_aj" class="control-label">{{ 'ชื่ออาจารย์ที่ปรึกษา' }}</label>
    <input class="form-control" name="name_aj" type="text" id="name_aj" value="{{ isset($article->name_aj) ? $article->name_aj : ''}}" >
    {!! $errors->first('name_aj', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel_aj') ? 'has-error' : ''}}">
    <label for="tel_aj" class="control-label">{{ 'เบอร์โทรศัพท์อาจารย์ที่ปรึกษา' }}</label>
    <input class="form-control" name="tel_aj" type="number" id="tel_aj" value="{{ isset($article->tel_aj) ? $article->tel_aj : ''}}" >
    {!! $errors->first('tel_aj', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'ผู้เขียนบทความ' }}</label>
    <input class="form-control d-none" name="user_id" type="text" id="user_id" value="{{ isset($article->user_id) ? $article->user_id : Auth::id() }}" readonly>
    <input class="form-control" value="{{ isset($article->user_id) ? $article->user->name : Auth::user()->name }}" readonly>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
