<div class="form-group {{ $errors->has('prapet') ? 'has-error' : ''}}">
    <label for="prapet" class="control-label">{{ 'ประเภทการนำเสนอ' }}</label>
    <select name="prapet" class="form-control" id="prapet" >
    
    @foreach (["Oral Presentation","Poster"] as $optionKey => $optionValue)
        <option value="{{ $optionValue }}" {{ (isset($article->prapet) && $article->prapet == $optionValue) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('prapet', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('group') ? 'has-error' : ''}}">
    <label for="group" class="control-label">{{ 'กลุ่มสาขา' }}</label>
    <select name="group" class="form-control" id="group" >
    @php
        $groups = [
            "HS" => "กลุ่มวิทยาศาสตร์สุขภาพ",
            "AS" => "กลุ่มวิทยาศาสตร์ประยุกต์",
            "BS" => "กลุ่มวิทยาศาสตร์พื้นฐาน",
            "IT" => "กลุ่มคอมพิวเตอร์และเทคโนโลยีสารสนเทศ",
            "INNO" => "กลุ่มนวัตกรรม"
        ];
    @endphp
    @foreach ($groups as $optionKey => $optionValue)
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
    <input class="form-control" name="name_en" type="text" id="name_en" value="{{ isset($article->name_en) ? $article->name_en : ''}}" required>
    {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_aj') ? 'has-error' : ''}}">
    <label for="name_aj" class="control-label">{{ 'ชื่อผู้แต่งร่วม (ต้องไม่ซ้ำกับผ้นำเสนอ/แต่ละชื่อคั่นด้วย , )' }}</label>
    <input class="form-control" name="name_aj" type="text" id="name_aj" value="{{ isset($article->name_aj) ? $article->name_aj : ''}}" required>
    {!! $errors->first('name_aj', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('purubpitshop') ? 'has-error' : ''}}">
    <label for="purubpitshop" class="control-label">{{ 'ผู้รับผิดชอบบทความ/ นักวิจัยหลัก (Co-responding)' }}</label>
    <input class="form-control" name="purubpitshop" type="text" id="purubpitshop" value="{{ isset($article->purubpitshop) ? $article->purubpitshop : ''}}" required>
    {!! $errors->first('purubpitshop', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'อีเมลผู้รับผิดชอบหลัก (Co-responding)' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($article->email) ? $article->email : ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel_aj') ? 'has-error' : ''}}">
    <label for="tel_aj" class="control-label">{{ 'เบอร์โทรศัพท์ผู้รับผิดชอบหลัก (Co-responding)' }}</label>
    <input class="form-control" name="tel_aj" type="text" id="tel_aj" value="{{ isset($article->tel_aj) ? $article->tel_aj : ''}}" required>
    {!! $errors->first('tel_aj', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name_present') ? 'has-error' : ''}}">
    <label for="name_present" class="control-label">{{ 'ชื่อผู้นำเสนอผลงาน (1 คน)' }}</label>
    <input class="form-control" name="name_present" type="text" id="name_present" value="{{ isset($article->name_present) ? $article->name_present : ''}}" required>
    {!! $errors->first('name_present', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group d-none {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'ผู้เขียนบทความ' }}</label>
    <input class="form-control d-none" name="user_id" type="text" id="user_id" value="{{ isset($article->user_id) ? $article->user_id : Auth::id() }}" readonly>
    <input class="form-control" value="{{ isset($article->user_id) ? $article->user->name : Auth::user()->name }}" readonly>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit"  value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
