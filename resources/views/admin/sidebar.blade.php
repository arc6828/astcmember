<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist" style="flex-direction: column;">
                <li role="presentation">
                    <a href="{{ url('/home') }}">
                        หน้าหลัก
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/profile') }}?role=guest">
                        รายชื่อผู้ลงทะเบียนเข้าร่วมงาน
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/profile') }}?role=author">
                        รายชื่อผู้ส่งบทความ
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/evaluation') }}">
                        ผลการประเมิน
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
