<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>ชื่อ-นามสกุล</th>
            
            <th>สถานะการชำระเงิน</th>
            <th>ยอดที่ต้องชำระ</th>
            
        </tr>
    </thead>
        <tbody>      
        
        
        @foreach($profiles as $item)
            <tr>
                <td>{{ $loop->iteration+ (request('page','1')-1) *  25 }}</td>
                <td>
                    
                        <div>{{ $item->sex }} {{ $item->name }} {{ $item->lastname }} ({{ $item->title }}) </div>
                    
                    <div>วันที่ลงทะเบียน {{ $item->created_at }} </div>
                    
                    @switch( $item->role )
                        @case("author")
                            <div><span class="badge badge-success">ผู้ส่งบทความ</span> จำนวน {{ $item->articles->count('title') }} เรื่อง</div>
                            @break                                                         
                        @case("audience")
                            <div><span class="badge badge-primary">ผู้เข้าร่วม</span></div>
                            @break
                        @case("guest")
                            <div><span class="badge badge-danger">pending</span></div>
                            @break
                        @default
                            <div><span class="badge badge-warning">{{ $item->role }}</span></div>
                                                                
                    @endswitch  
                    
    
                </td>
                <td>
                    
                    @switch( $item->payment_status )
                        @case("unpaid")
                            <div><span class="badge badge-primary">ยังไม่ได้ชำระ</span></div>
                            <div>{{ $item->unpaid_at }}</div>
                        @break
                                    
                        @case("chackpayment")
                            <div><span class="badge badge-warning">กำลังตรวจสอบ</span></div>
                            <div>{{ $item->chackpayment_at }}</div>
                        @break

                        @case("paid")
                            <div><span class="badge badge-success">ชำระเงินครบ</span></div>
                            <div>{{ $item->paid_at }}</div>
                        @break

                        @case("notpaid")
                            <div><span class="badge badge-danger">ชำระเงินไม่ครบ</span></div>
                            <div>{{ $item->notpaid_at }}</div>
                        @break


                
                    @endswitch  

                </td>
                <td>
                    @switch( $item->role )
                        @case("author")
                            {{ number_format( $item->articles->sum('price'))  }}
                            @break                                                         
                        @case("audience")
                            600 - 1500
                            @break
                        @case("guest")                                                    
                            @break
                        @default
                            @break
                                                                
                    @endswitch  
                </td>    
                
                
            </tr>
        @endforeach
        </tbody>
    </table>