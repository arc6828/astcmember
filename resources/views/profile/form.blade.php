<div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
    <label for="sex" class="control-label">{{ 'เพศ' }}</label><span class="text-danger">{{ '*' }}</span><br>
    <input name="sex" type="radio" id="sex" value="male" checked> ชาย
    <input name="sex" type="radio" id="sex" value="female"> หญิง
    <input name="sex" type="radio" id="sex" value="other"> อื่นๆ
    {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'คำนำหน้าชื่อ' }}</label><span class="text-danger">{{ '*' }}</span>
    <select name="title" class="form-control form-control-sm" id="title" >
    @foreach (json_decode('{"\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c":"\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c","\u0e23\u0e2d\u0e07\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c":"\u0e23\u0e2d\u0e07\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c","\u0e1c\u0e39\u0e49\u0e0a\u0e48\u0e27\u0e22\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c":"\u0e1c\u0e39\u0e49\u0e0a\u0e48\u0e27\u0e22\u0e28\u0e32\u0e2a\u0e15\u0e23\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c","\u0e19\u0e32\u0e22":"\u0e19\u0e32\u0e22","\u0e19\u0e32\u0e07":"\u0e19\u0e32\u0e07","\u0e19\u0e32\u0e07\u0e2a\u0e32\u0e27":"\u0e19\u0e32\u0e07\u0e2a\u0e32\u0e27"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($profile->title) && $profile->title == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
    </select>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'ชื่อ' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="name" type="text" id="name" value="{{ isset($profile->name) ? $profile->name : ''}}" required >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
    <label for="lastname" class="control-label">{{ 'นามสกุล' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="lastname" type="text" id="lastname" value="{{ isset($profile->lastname) ? $profile->lastname : ''}}" required >
    {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'อีเมล' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="email" type="text" id="email" value="{{ isset($profile->email) ? $profile->email : ''}}" readonly >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'สถานภาพ' }}</label><span class="text-danger">{{ '*' }}</span>
    <select name="status" class="form-control form-control-sm" id="status" >
    @foreach (json_decode('{"\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e15\u0e23\u0e35":"\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e15\u0e23\u0e35","\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e42\u0e17":"\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e42\u0e17","\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e40\u0e2d\u0e01":"\u0e19\u0e31\u0e01\u0e28\u0e36\u0e01\u0e29\u0e32\u0e1b\u0e23\u0e34\u0e0d\u0e0d\u0e32\u0e40\u0e2d\u0e01","\u0e2d\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c":"\u0e2d\u0e32\u0e08\u0e32\u0e23\u0e22\u0e4c","\u0e19\u0e31\u0e01\u0e27\u0e34\u0e08\u0e31\u0e22":"\u0e19\u0e31\u0e01\u0e27\u0e34\u0e08\u0e31\u0e22","\u0e40\u0e08\u0e49\u0e32\u0e2b\u0e19\u0e49\u0e32\u0e17\u0e35\u0e48":"\u0e40\u0e08\u0e49\u0e32\u0e2b\u0e19\u0e49\u0e32\u0e17\u0e35\u0e48","\u0e2d\u0e37\u0e48\u0e19\u0e46":"\u0e2d\u0e37\u0e48\u0e19\u0e46"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($profile->status) && $profile->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('statusothers') ? 'has-error' : ''}}">
    <label for="statusothers" class="control-label">{{ 'สถานภาพอื่นๆ โปรดระบุ' }}</label>
    <input class="form-control form-control-sm" name="statusothers" type="text" id="statusothers" value="{{ isset($profile->statusothers) ? $profile->statusothers : ''}}">
    {!! $errors->first('statusothers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('food') ? 'has-error' : ''}}">
    <label for="food" class="control-label">{{ 'อาหารกลางวัน' }}</label><span class="text-danger">{{ '*' }}</span>
    <select name="food" class="form-control form-control-sm" id="food" required >
    @foreach (json_decode('{"\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e44\u0e17\u0e22":"\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e44\u0e17\u0e22","\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e21\u0e31\u0e07\u0e2a\u0e27\u0e34\u0e23\u0e31\u0e15":"\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e21\u0e31\u0e07\u0e2a\u0e27\u0e34\u0e23\u0e31\u0e15","\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e21\u0e38\u0e2a\u0e25\u0e34\u0e21":"\u0e2d\u0e32\u0e2b\u0e32\u0e23\u0e21\u0e38\u0e2a\u0e25\u0e34\u0e21"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($profile->food) && $profile->food == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('food', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="control-label">{{ 'สถานะในการเข้าร่วมงาน' }}</label><span class="text-danger">{{ '*' }}</span><br>
    <input name="role" type="radio" id="role" value="audience" checked> ผู้เข้าชมงาน
    <input name="role" type="radio" id="role" value="author"> ผู้ส่งบทความ
    {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
</div>
<hr>
<h2>ที่อยู่ที่สามารถติดต่อได้</h1>
<div class="form-group {{ $errors->has('school') ? 'has-error' : ''}}">
    <label for="school" class="control-label">{{ 'สถาบัน' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="school" type="text" id="school" value="{{ isset($profile->school) ? $profile->school : ''}}" required >
    {!! $errors->first('school', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('major') ? 'has-error' : ''}}">
    <label for="major" class="control-label">{{ 'คณะ/ภาควิชา' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="major" type="text" id="major" value="{{ isset($profile->major) ? $profile->major : ''}}" required >
    {!! $errors->first('major', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'เลขที่ ซอย ถนน' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="address" type="text" id="address" value="{{ isset($profile->address) ? $profile->address : ''}}" required >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('provinces') ? 'has-error' : ''}}">
    <label for="provinces" class="control-label">{{ 'จังหวัด' }}</label><span class="text-danger">{{ '*' }}</span>
    <select class="form-control form-control-sm" name="provinces" id="provinces" onchange="showAmphoes()" required >
    <option value="">กรุณาเลือกจังหวัด</option>
    </select>
    {!! $errors->first('provinces', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amphoes') ? 'has-error' : ''}}">
    <label for="amphoes" class="control-label">{{ 'อำเภอ' }}</label><span class="text-danger">{{ '*' }}</span>
    <select class="form-control form-control-sm" name="amphoes" id="amphoes" onchange="showDistricts()" required >
    <option value="">กรุณาเลือกอำเภอ</option>
    </select>
    
    {!! $errors->first('amphoes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('district') ? 'has-error' : ''}}">
    <label for="district" class="control-label">{{ 'ตำบล' }}</label><span class="text-danger">{{ '*' }}</span>
    <select class="form-control form-control-sm" name="district" id="district" onchange="showZipcode()" required >
    <option value="">กรุณาเลือกตำบล</option>
    </select>
    {!! $errors->first('district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('postnumber') ? 'has-error' : ''}}">
    <label for="postnumber" class="control-label">{{ 'รหัสไปรษณีย์' }}</label>
    <input class="form-control form-control-sm" name="postnumber" id="postnumber" readonly>
    {!! $errors->first('postnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="tel" type="text" id="tel" value="{{ isset($profile->tel) ? $profile->tel : ''}}" required >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}}">
    <label for="fax" class="control-label">{{ 'เบอร์โทรสาร' }}</label>
    <input class="form-control form-control-sm" name="fax" type="text" id="fax" value="{{ isset($profile->fax) ? $profile->fax : ''}}" >
    {!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
</div>
<hr>
<h2>ที่อยู่ตามใบเสร็จการชำระเงิน</h1>
<div class="form-group {{ $errors->has('bill_school') ? 'has-error' : ''}}">
    <label for="bill_school" class="control-label">{{ 'สถาบัน' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="bill_school" type="text" id="bill_school" value="{{ isset($profile->bill_school) ? $profile->bill_school : ''}}" required >
    {!! $errors->first('bill_school', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_major') ? 'has-error' : ''}}">
    <label for="bill_major" class="control-label">{{ 'คณะ/ภาควิชา' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="bill_major" type="text" id="bill_major" value="{{ isset($profile->bill_major) ? $profile->bill_major : ''}}" required >
    {!! $errors->first('bill_major', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_address') ? 'has-error' : ''}}">
    <label for="bill_address" class="control-label">{{ 'เลขที่ ซอย ถนน' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="bill_address" type="text" id="bill_address" value="{{ isset($profile->bill_address) ? $profile->bill_address : ''}}" required >
    {!! $errors->first('bill_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_provinces') ? 'has-error' : ''}}">
    <label for="bill_provinces" class="control-label">{{ 'จังหวัด' }}</label><span class="text-danger">{{ '*' }}</span>
    <select class="form-control form-control-sm" name="bill_provinces" id="bill_provinces" onchange="showAmphoesBill()" required >
    <option value="">กรุณาเลือกจังหวัด</option>
    </select>
    {!! $errors->first('bill_provinces', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_amphoes') ? 'has-error' : ''}}">
    <label for="bill_amphoes" class="control-label">{{ 'อำเภอ' }}</label><span class="text-danger">{{ '*' }}</span>
    <select class="form-control form-control-sm" name="bill_amphoes" id="bill_amphoes" onchange="showDistrictsBill()" required >
    <option value="">กรุณาเลือกอำเภอ</option>
    </select>
    {!! $errors->first('bill_amphoes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_district') ? 'has-error' : ''}}">
    <label for="bill_district" class="control-label">{{ 'ตำบล' }}</label><span class="text-danger">{{ '*' }}</span>
    <select class="form-control form-control-sm" name="bill_district" id="bill_district" onchange="showZipcodeBill()" required >
    <option value="">กรุณาเลือกตำบล</option>
    </select>
    {!! $errors->first('bill_district', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_postnumber') ? 'has-error' : ''}}">
    <label for="bill_postnumber" class="control-label">{{ 'รหัสไปรษณีย์' }}</label>
    <input class="form-control form-control-sm" name="bill_postnumber" id="bill_postnumber" readonly>
    {!! $errors->first('bill_postnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_tel') ? 'has-error' : ''}}">
    <label for="bill_tel" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="bill_tel" type="text" id="bill_tel" value="{{ isset($profile->bill_tel) ? $profile->bill_tel : ''}}" required >
    {!! $errors->first('bill_tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bill_fax') ? 'has-error' : ''}}">
    <label for="bill_fax" class="control-label">{{ 'เบอร์โทรสาร' }}</label>
    <input class="form-control form-control-sm" name="bill_fax" type="text" id="bill_fax" value="{{ isset($profile->bill_fax) ? $profile->bill_fax : ''}}" >
    {!! $errors->first('bill_fax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fileregister') ? 'has-error' : ''}}">
    <label for="fileregister" class="control-label">{{ 'ไฟล์หลักฐานการชำระเงินค่าลงทะเบียน' }}</label><span class="text-danger">{{ '*' }}</span>
    <input class="form-control form-control-sm" name="fileregister" type="file" id="fileregister" value="{{ isset($profile->fileregister) ? $profile->fileregister : ''}}" required >
    {!! $errors->first('fileregister', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


<script>
document.addEventListener("DOMContentLoaded", function(event) { //รอให้ให้ javascript ทุกตัวโหลดให้เสร็จก่อน แล้วจึงรันโค้ดนี้
    //ปัญหาคือ jquery ยังโหลดไม่เสร็จ มันจึงไม่รู้จัก $
    $(document).ready(function(){
        console.log("HELLO");
        showProvinces();
        showProvincesBill();
    });
});

function ajax(url, callback){
  $.ajax({
    "url" : url,
    "type" : "GET",
    "dataType" : "json",
  })
  .done(callback); //END AJAX
}

function showProvinces(){
  //PARAMETERS
  var url = "{{ url('/') }}/api/province";
  var callback = function(result){
    $("#provinces").empty();
    for(var i=0; i<result.length; i++){
      $("#provinces").append(
        $('<option></option>')
          .attr("value", ""+result[i].province_code)
          .html(""+result[i].province)
      );
    }
    showAmphoes();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showAmphoes(){
  //INPUT
  var province_code = $("#provinces").val();
  //PARAMETERS
  var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe";
  var callback = function(result){
    //console.log(result);
    $("#amphoes").empty();
    for(var i=0; i<result.length; i++){
      $("#amphoes").append(
        $('<option></option>')
          .attr("value", ""+result[i].amphoe_code)
          .html(""+result[i].amphoe)
      );
    }
    showDistricts();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showDistricts(){
  //INPUT
  var province_code = $("#provinces").val();
  var amphoe_code = $("#amphoes").val();
  //PARAMETERS
  var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district";
  var callback = function(result){
    //console.log(result);
    $("#district").empty();
    for(var i=0; i<result.length; i++){
      $("#district").append(
        $('<option></option>')
          .attr("value", ""+result[i].district_code)
          .html(""+result[i].district)
      );
    }
    showZipcode();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showZipcode(){
  //INPUT
  var province_code = $("#provinces").val();
  var amphoe_code = $("#amphoes").val();
  var district_code = $("#district").val();
  //PARAMETERS
  var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district/"+district_code;
  var callback = function(result){
    //console.log(result);
    for(var i=0; i<result.length; i++){
      $("#postnumber").val(result[i].zipcode);
    }
  };
  //CALL AJAX
  ajax(url,callback);
}

//bill section
function showProvincesBill(){
  //PARAMETERS
  var url = "{{ url('/') }}/api/province";
  var callback = function(result){
    $("#bill_provinces").empty();
    for(var i=0; i<result.length; i++){
      $("#bill_provinces").append(
        $('<option></option>')
          .attr("value", ""+result[i].province_code)
          .html(""+result[i].province)
      );
    }
    showAmphoesฺBill();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showAmphoesBill(){
  //INPUT
  var province_code = $("#bill_provinces").val();
  //PARAMETERS
  var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe";
  var callback = function(result){
    //console.log(result);
    $("#bill_amphoes").empty();
    for(var i=0; i<result.length; i++){
      $("#bill_amphoes").append(
        $('<option></option>')
          .attr("value", ""+result[i].amphoe_code)
          .html(""+result[i].amphoe)
      );
    }
    showDistrictsBill();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showDistrictsBill(){
  //INPUT
  var province_code = $("#bill_provinces").val();
  var amphoe_code = $("#bill_amphoes").val();
  //PARAMETERS
  var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district";
  var callback = function(result){
    //console.log(result);
    $("#bill_district").empty();
    for(var i=0; i<result.length; i++){
      $("#bill_district").append(
        $('<option></option>')
          .attr("value", ""+result[i].district_code)
          .html(""+result[i].district)
      );
    }
    showZipcodeBill();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showZipcodeBill(){
  //INPUT
  var province_code = $("#bill_provinces").val();
  var amphoe_code = $("#bill_amphoes").val();
  var district_code = $("#bill_district").val();
  //PARAMETERS
  var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district/"+district_code;
  var callback = function(result){
    //console.log(result);
    for(var i=0; i<result.length; i++){
      $("#bill_postnumber").val(result[i].zipcode);
    }
  };
  //CALL AJAX
  ajax(url,callback);
}
</script>