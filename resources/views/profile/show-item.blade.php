<div class="table-responsive">
    <table class="table">
        <tbody>
            <tr class="d-none">
                <th>ID</th><td>{{ $profile->id }}</td>
            </tr>
            <tr><th> คำนำหน้า </th><td> {{ $profile->sex }} </td></tr>
            <tr><th> ตำแหน่งทางวิชาการ / อาชีพ </th><td> {{ $profile->title }} </td></tr>
            <tr><th> ชื่อ </th><td> {{ $profile->name }} </td></tr>
            <tr><th> นามสกุล </th><td> {{ $profile->lastname }} </td></tr>
            <tr><th> อีเมล์ </th><td> {{ $profile->email }} </td></tr>
            <tr><th> วุฒิการศึกษาปัจจุบัน </th><td> {{ $profile->status }} </td></tr>
            <tr class="d-none"><th> สถานภาพอื่นๆ โปรดระบุ </th><td> {{ $profile->statusothers }} </td></tr>
            <tr><th> อาหารกลางวัน </th><td> {{ $profile->food }} </td></tr>
            <tr><th> สถาบัน </th><td> {{ $profile->school }} </td></tr>
            <tr><th> คณะ/ภาควิชา </th><td> {{ $profile->major }} </td></tr>
            <tr><th> เลขที่ ซอย ถนน ตำบล </th><td> {{ $profile->address }} </td></tr>
            <tr><th> ตำบล </th><td> {{ $profile->district? $profile->district_district->district : '' }} </td></tr>
            <tr><th> อำเภอ </th><td> {{ $profile->amphoe? $profile->district_amphoe->amphoe : '' }} </td></tr>
            <tr><th> จังหวัด </th><td> {{ $profile->province? $profile->district_province->province : '' }} </td></tr>
            <tr><th> รหัสไปรษณีย์ </th><td> {{ $profile->postnumber }} </td></tr>
            <tr><th> เบอร์โทรศัพท์ </th><td> {{ $profile->tel }} </td></tr>
            <tr><th> เบอร์โทรสาร </th><td> {{ $profile->fax }} </td></tr>
            <tr class="d-none"><th> ไฟล์หลักฐานการชำระเงินค่าลงทะเบียน </th><td> {{ $profile->fileregister }} </td></tr>
            <tr><th> สถาบัน </th><td> {{ $profile->bill_school }} </td></tr>
            <tr><th> คณะ/ภาควิชา </th><td> {{ $profile->bill_major }} </td></tr>
            <tr><th> เลขที่ ซอย ถนน ตำบล </th><td> {{ $profile->bill_address }} </td></tr>
            <tr><th> ตำบล </th><td> {{ $profile->bill_district? $profile->district_bill_district->district : ''  }} </td></tr>
            <tr><th> อำเภอ </th><td> {{ $profile->bill_amphoe? $profile->district_bill_amphoe->amphoe : '' }} </td></tr>
            <tr><th> จังหวัด </th><td> {{ $profile->bill_province? $profile->district_bill_province->province : '' }} </td></tr>
            <tr><th> รหัสไปรษณีย์ </th><td> {{ $profile->bill_postnumber }} </td></tr>
            <tr><th> เบอร์โทรศัพท์ </th><td> {{ $profile->bill_tel }} </td></tr>
            <tr><th> เบอร์โทรสาร </th><td> {{ $profile->bill_fax }} </td></tr>
        </tbody>
    </table>
</div>