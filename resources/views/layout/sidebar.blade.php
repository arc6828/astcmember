    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
    
    @if(Auth::check())
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>หน้าหลัก</span>
        </a>
      </li>

      @if(Auth::user()->profile->role == "author" ) 
      <div class="dropdown-divider"></div>     
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/article/create') }}" >
          <i class="fas fa-fw fa-paper-plane"></i> <span>ส่งบทความ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/article') }}" >
          <i class="fas fa-fw fa-file"></i> <span>บทความของฉัน</span>
        </a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/profile') }}" >
          <i class="fas fa-fw fa-user"></i> <span>ผู้ร่วมงานทั้งหมด</span>
        </a>
      </li>         
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/payment') }}" >
          <i class="fas fa-fw fa-credit-card"></i> <span>แจ้งการชำระเงิน</span>
        </a>
      </li> 
      @endif

      @if(Auth::user()->profile->role == "academic-admin" ) 
      <div class="dropdown-divider"></div>      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/profile') }}" >
          <i class="fas fa-fw fa-user"></i> <span>ผู้ร่วมงานทั้งหมด</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/article') }}" >
          <i class="fas fa-fw fa-file"></i> <span>บทความทั้งหมด</span>
        </a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/reviewer') }}" >
          <i class="fas fa-fw fa-user-check"></i> <span>รายชื่อผู้ประเมิน</span>
        </a>
      </li>
      <li class="nav-item d-none">
        <a class="nav-link" href="{{ url('/university_payment/index_payment') }}" >
          <i class="fas fa-fw fa-file"></i> <span>รายชื่อผู้ส่งบทความ</span>
        </a>
      </li>
      <li class="nav-item d-none">
        <a class="nav-link" href="{{ url('/university_payment') }}" >
          <i class="fas fa-fw fa-file"></i> <span>แจ้งชำระเงิน</span>
        </a>
      </li>
      @endif


      @if(Auth::user()->profile->role == "admin" )     
      <div class="dropdown-divider"></div>      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/profile') }}" >
          <i class="fas fa-fw fa-user"></i> <span>ผู้ร่วมงานทั้งหมด</span>
        </a>
      </li>
      <div class="dropdown-divider"></div>     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>ผู้เขียนบทความ</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{ url('/article/create') }}">ส่งบทความ</a> 
          <a class="dropdown-item" href="{{ url('/article') }}">บทความของฉัน</a> 
          <a class="dropdown-item" href="{{ url('/document/create') }}">อัพโหลดเอกสาร</a>           
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>ผู้ประเมินบทความ</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{ url('/article') }}">บทความทั้งหมด</a> 
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>ผู้ดูแลระบบ</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">          
          <a class="dropdown-item" href="{{ url('/profile') }}">รายชื่อทั้งหมด</a>        
          <a class="dropdown-item" href="{{ url('/profile') }}?role=guest">รายชื่อผู้เข้าร่วมงาน</a>        
          <a class="dropdown-item" href="{{ url('/profile') }}?role=author">รายชื่อผู้ส่งบทความ</a>        
          <a class="dropdown-item" href="{{ url('/article') }}">บทความทั้งหมด</a> 
          <a class="dropdown-item" href="{{ url('/evaluation') }}">ผลการประเมิน</a>
        </div>
      </li>
      <div class="dropdown-divider"></div>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
      @endif

      @endif
    </ul>
    <!-- End of Sidebar -->
