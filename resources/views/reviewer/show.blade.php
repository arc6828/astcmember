@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ข้อมูลผู้ประเมินที่ {{ $reviewer->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/reviewer') }}" title="Back"><button class="btn btn-warning btn-sm d-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ url('/reviewer/' . $reviewer->id . '/edit') }}" title="Edit Reviewer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                        <form method="POST" action="{{ url('reviewer' . '/' . $reviewer->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm d-none" title="Delete Reviewer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                    <tr>
                                        <th class="d-none">ID</th>
                                        <td class="d-none">{{ $reviewer->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> คำนำหน้า </th>
                                        <td> {{ $reviewer->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อ </th>
                                        <td> {{ $reviewer->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> นามสกุล </th>
                                        <td> {{ $reviewer->lastname }} </td>
                                    </tr>
                                    <tr>
                                        <th> อีเมล </th>
                                        <td> {{ $reviewer->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> กลุ่ม </th>
                                        <td> {{ $reviewer->group }} </td>
                                    </tr>
                                    <tr>
                                        <th> ความเชี่ยวชาญ </th>
                                        <td> {{ $reviewer->expert }} </td>
                                    </tr>
                                    <tr>
                                        <th> สถาบัน </th>
                                        <td> {{ $reviewer->school }} </td>
                                    </tr>
                                    <tr>
                                        <th> สาขาวิชา </th>
                                        <td> {{ $reviewer->major }} </td>
                                    </tr>
                                    <tr>
                                        <th> ที่อยู่ </th>
                                        <td> {{ $reviewer->address }} </td>
                                    </tr>
                                    <tr>
                                        <th class="d-none"> อำเภอ </th>
                                        <td class="d-none"> {{ $reviewer->district }} </td>
                                    </tr>
                                    <tr>
                                        <th> อำเภอ </th>
                                        <td> {{ $reviewer->amphoe }} </td>
                                    </tr>
                                    <tr>
                                        <th> จังหวัด </th>
                                        <td> {{ $reviewer->province }} </td>
                                    </tr>
                                    <tr>
                                        <th> รหัสไปรษณีย์ </th>
                                        <td> {{ $reviewer->postnumber }} </td>
                                    </tr>
                                    <tr>
                                        <th> เบอร์โทรศัพท์มือถือ </th>
                                        <td> {{ $reviewer->tel }} </td>
                                    </tr>
                                    <tr>
                                        <th> แฟกซ์ </th>
                                        <td> {{ $reviewer->fax }} </td>
                                    </tr>
                                    <tr>
                                        <th> ประเภท </th>
                                        <td> {{ $reviewer->type }} </td>
                                    </tr>
                                    <tr>
                                        <th> หมายเหตุ </th>
                                        <td> {{ $reviewer->remark }} </td>
                                    </tr>
                            </table>
                            <hr>
                            <div>
                                <table class="table">
                                  <thead>
                                    <tr>
                                        <th class="text-right" scope="col" >
                                            <form method="POST" action="{{ url('/reviewer' . '/' . $reviewer->id . '/thank-you') }}" accept-charset="UTF-8" class="form-horizontal " >
                                                {{ method_field('POST') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="status" value="Accept">
                                                <button type="submit" class="btn btn-success btn-sm" title="Accept"> Accept</button>
                                            </form>
                                        </th>

                                        <th scope="col" >
                                            <form method="POST" action="{{ url('/reviewer' . '/' . $reviewer->id . '/reject') }}" accept-charset="UTF-8" class="form-horizontal " >
                                                {{ method_field('POST') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" name="status" value="Reject">
                                                <button type="submit" class="btn btn-danger btn-sm" title="Reject"> Reject</button>
                                            </form>
                                        </th>
                                    </tr>
                                  </thead>
                                </table>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
