@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Profile {{ $profile->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/profile') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/profile/' . $profile->id . '/edit') }}" title="Edit Profile"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('profile' . '/' . $profile->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $profile->id }}</td>
                                    </tr>
                                    <tr><th> เพศ </th><td> {{ $profile->sex }} </td></tr>
                                    <tr><th> คำนำหน้าชื่อ </th><td> {{ $profile->title }} </td></tr>
                                    <tr><th> ชื่อ </th><td> {{ $profile->name }} </td></tr>
                                    <tr><th> นามสกุล </th><td> {{ $profile->lastname }} </td></tr>
                                    <tr><th> อีเมล </th><td> {{ $profile->email }} </td></tr>
                                    <tr><th> สถานภาพ </th><td> {{ $profile->status }} </td></tr>
                                    <tr><th> สถานภาพอื่นๆ โปรดระบุ </th><td> {{ $profile->statusothers }} </td></tr>
                                    <tr><th> อาหารกลางวัน </th><td> {{ $profile->food }} </td></tr>
                                    <tr><th> สถาบัน </th><td> {{ $profile->school }} </td></tr>
                                    <tr><th> คณะ/ภาควิชา </th><td> {{ $profile->major }} </td></tr>
                                    <tr><th> เลขที่ ซอย ถนน ตำบล </th><td> {{ $profile->address }} </td></tr>
                                    <tr><th> อำเภอ </th><td> {{ $profile->district }} </td></tr>
                                    <tr><th> จังหวัด </th><td> {{ $profile->subdistrict }} </td></tr>
                                    <tr><th> รหัสไปรษณีย์ </th><td> {{ $profile->postnumber }} </td></tr>
                                    <tr><th> เบอร์โทรศัพท์ </th><td> {{ $profile->tel }} </td></tr>
                                    <tr><th> เบอร์โทรสาร </th><td> {{ $profile->fax }} </td></tr>
                                    <tr><th> ไฟล์หลักฐานการชำระเงินค่าลงทะเบียน </th><td> {{ $profile->fileregister }} </td></tr>
                                    <tr><th> สถาบัน </th><td> {{ $profile->bill_school }} </td></tr>
                                    <tr><th> คณะ/ภาควิชา </th><td> {{ $profile->bill_major }} </td></tr>
                                    <tr><th> เลขที่ ซอย ถนน ตำบล </th><td> {{ $profile->bill_address }} </td></tr>
                                    <tr><th> อำเภอ </th><td> {{ $profile->bill_district }} </td></tr>
                                    <tr><th> จังหวัด </th><td> {{ $profile->bill_subdistrict }} </td></tr>
                                    <tr><th> รหัสไปรษณีย์ </th><td> {{ $profile->bill_postnumber }} </td></tr>
                                    <tr><th> เบอร์โทรศัพท์ </th><td> {{ $profile->bill_tel }} </td></tr>
                                    <tr><th> เบอร์โทรสาร </th><td> {{ $profile->bill_fax }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection