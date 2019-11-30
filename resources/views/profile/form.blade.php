<div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
    <label for="sex" class="control-label">{{ 'คำนำหน้า' }}</label><span class="text-danger">{{ '*' }}</span><br>
    <input name="sex" type="radio" id="sex" value="male" checked> นาย
    <input name="sex" type="radio" id="sex" value="female-marriage"> นาง
    <input name="sex" type="radio" id="sex" value="female"> นางสาว
    {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'ตำแหน่งทางวิชาการ / อาชีพ' }}</label><span class="text-danger">{{ '*' }}</span>
    <div class="form-row">
      <div class="col">
        <select name="title2" class="form-control form-control-sm" id="title2" onchange="var title = document.querySelector('#title'); title.value=this.value; if(title.value == 'โปรดระบุ ...'){ title.classList.remove('d-none'); }else{ title.classList.add('d-none'); }">
        @foreach (["ไม่มี","ศาสตราจารย์","รองศาสตาจารย์","ผู้ช่วยศาสตราจารย์","อาจารย์","นักวิจัย","เจ้าหน้าที่", "โปรดระบุ ..."] as $optionValue)
            <option value="{{ $optionValue }}" {{ (isset($profile->title) && $profile->title == $optionValue) ? 'selected' : ''}}>{{ $optionValue }}</option>
        @endforeach
        </select>
        <script>
          document.querySelector("#title2").value = "{{ isset($profile->title) ? $profile->title : 'ไม่มี'}}";
        </script>
      </div>
      <div class="col">
        <input class="form-control form-control-sm d-none" name="title" type="text" id="title" value="{{ isset($profile->title) ? $profile->title : 'ไม่มี'}}" required >
      </div>
    </div>
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
    <label for="status" class="control-label">{{ 'วุฒิการศึกษาปัจจุบัน' }}</label><span class="text-danger">{{ '*' }}</span>
    <select name="status" class="form-control form-control-sm" id="status" >
    @foreach (["ต่ำกว่าปริญญาตรี","ปริญญาตรี","กำลังศึกษาปริญญาโท","ปริญญาโท","กำลังศึกษาปริญญาเอก","ปริญญาเอก"] as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($profile->status) && $profile->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group d-none {{ $errors->has('statusothers') ? 'has-error' : ''}}">
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
<div class="form-row">
  <div class="col">
    <h4>ที่อยู่ที่สามารถติดต่อได้</h4>    
    <div class="form-group {{ $errors->has('group_university2') ? 'has-error' : ''}}">
        <input type="checkbox" onchange="if(this.checked){ document.querySelector('#group_university2').classList.remove('d-none') }else{ document.querySelector('#group_university2').classList.add('d-none')}">
        <label for="group_university2" class="control-label">{{ 'ใช้ที่อยู่มหาวิทยาลัยในเครือข่าย' }}</label><span class="text-danger">{{ '*' }}</span>
        <select class="form-control form-control-sm d-none" name="group_university2" id="group_university2"  required >
        @foreach(["ไม่มี","วไลยอลงกรณ์","ม.รังสิต","ม.หัวเฉียว"] as $value)
        <option value="{{ $value }}">{{ $value }}</option>
        @endforeach
        </select>
        {!! $errors->first('group_university2', '<p class="help-block">:message</p>') !!}
    </div>
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
    <div class="form-group {{ $errors->has('province') ? 'has-error' : ''}}">
        <label for="province" class="control-label">{{ 'จังหวัด' }}</label><span class="text-danger">{{ '*' }}</span>
        <select class="form-control form-control-sm" name="province" id="province" onchange="showAmphoes()"  data-value="{{ isset($profile->province) ? $profile->province : ''}}" required >
        <option value="">กรุณาเลือกจังหวัด</option>
        </select>
        {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('amphoe') ? 'has-error' : ''}}">
        <label for="amphoe" class="control-label">{{ 'อำเภอ' }}</label><span class="text-danger">{{ '*' }}</span>
        <select class="form-control form-control-sm" name="amphoe" id="amphoe" onchange="showDistricts()" required >
        <option value="">กรุณาเลือกอำเภอ</option>
        </select>
        
        {!! $errors->first('amphoe', '<p class="help-block">:message</p>') !!}
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
        <input class="form-control form-control-sm" name="postnumber" id="postnumber" >
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
  </div>
  <div class="col">
    <h4>ที่อยู่ตามใบเสร็จการชำระเงิน</h4>
    <div class="form-group {{ $errors->has('group_university') ? 'has-error' : ''}}">
        <input type="checkbox" onchange="if(this.checked){ document.querySelector('#group_university').classList.remove('d-none') }else{ document.querySelector('#group_university').classList.add('d-none')}">
        <label for="group_university" class="control-label">{{ 'ใช้ที่อยู่มหาวิทยาลัยในเครือข่าย' }}</label><span class="text-danger">{{ '*' }}</span>
        <select class="form-control form-control-sm d-none" name="group_university" id="group_university"  required >
        @foreach(["ไม่มี","วไลยอลงกรณ์","ม.รังสิต","ม.หัวเฉียว"] as $value)
        <option value="{{ $value }}">{{ $value }}</option>
        @endforeach
        </select>
        {!! $errors->first('group_university', '<p class="help-block">:message</p>') !!}
    </div>
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
    <div class="form-group {{ $errors->has('bill_province') ? 'has-error' : ''}}">
        <label for="bill_province" class="control-label">{{ 'จังหวัด' }}</label><span class="text-danger">{{ '*' }}</span>
        <select class="form-control form-control-sm" name="bill_province" id="bill_province" onchange="showAmphoesBill()" required >
        <option value="">กรุณาเลือกจังหวัด</option>
        </select>
        {!! $errors->first('bill_province', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group {{ $errors->has('bill_amphoe') ? 'has-error' : ''}}">
        <label for="bill_amphoe" class="control-label">{{ 'อำเภอ' }}</label><span class="text-danger">{{ '*' }}</span>
        <select class="form-control form-control-sm" name="bill_amphoe" id="bill_amphoe" onchange="showDistrictsBill()" required >
        <option value="">กรุณาเลือกอำเภอ</option>
        </select>
        {!! $errors->first('bill_amphoe', '<p class="help-block">:message</p>') !!}
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
        <input class="form-control form-control-sm" name="bill_postnumber" id="bill_postnumber" >
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
  </div>
</div>

<hr >
<div class="form-group {{ $errors->has('fileregister') ? 'has-error' : ''}}">
    <label for="fileregister" class="control-label">{{ 'ไฟล์หลักฐานการชำระเงินค่าลงทะเบียน' }}</label>
    <input class="form-control form-control-sm" name="fileregister" type="file" id="fileregister" value="{{ isset($profile->fileregister) ? $profile->fileregister : ''}}"  >
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
    $("#province").empty();
    for(var i=0; i<result.length; i++){
      $("#province").append(
        $('<option></option>')
          .attr("value", ""+result[i].province_code)
          .html(""+result[i].province)
      );
    }
    $("#province").val($("#province").attr("data-value"));
    showAmphoes();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showAmphoes(){
  //INPUT
  var province_code = $("#province").val();
  //PARAMETERS
  var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe";
  var callback = function(result){
    //console.log(result);
    $("#amphoe").empty();
    for(var i=0; i<result.length; i++){
      $("#amphoe").append(
        $('<option></option>')
          .attr("value", ""+result[i].amphoe_code)
          .html(""+result[i].amphoe)
      );
    }
    
    $("#amphoe").val($("#amphoe").attr("data-value"));
    showDistricts();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showDistricts(){
  //INPUT
  var province_code = $("#province").val();
  var amphoe_code = $("#amphoe").val();
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
    $("#district").val($("#district").attr("data-value"));
    showZipcode();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showZipcode(){
  //INPUT
  var province_code = $("#province").val();
  var amphoe_code = $("#amphoe").val();
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
    $("#bill_province").empty();
    for(var i=0; i<result.length; i++){
      $("#bill_province").append(
        $('<option></option>')
          .attr("value", ""+result[i].province_code)
          .html(""+result[i].province)
      );
    }
    showAmphoesBill();
  };
  //CALL AJAX
  ajax(url,callback);
}

function showAmphoesBill(){
  //INPUT
  var province_code = $("#bill_province").val();
  //PARAMETERS
  var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe";
  var callback = function(result){
    //console.log(result);
    $("#bill_amphoe").empty();
    for(var i=0; i<result.length; i++){
      $("#bill_amphoe").append(
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
  var province_code = $("#bill_province").val();
  var amphoe_code = $("#bill_amphoe").val();
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
  var province_code = $("#bill_province").val();
  var amphoe_code = $("#bill_amphoe").val();
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