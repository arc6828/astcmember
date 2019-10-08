    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>หน้าหลัก</span>
        </a>
      </li>

      <div class="dropdown-divider"></div>          

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>ผู้เขียนบทความ</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="#">ส่งบทความ</a> 
          <a class="dropdown-item" href="#">บทความของฉัน</a> 
          <a class="dropdown-item" href="#">อัพโหลดเอกสาร</a>           
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>ผู้ประเมินบทความ</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="#">บทความทั้งหมด</a> 
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
          <a class="dropdown-item" href="{{ url('/profile') }}?role=auther">รายชื่อผู้ส่งบทความ</a>        
          <a class="dropdown-item" href="#">บทความทั้งหมด</a> 
          <a class="dropdown-item" href="blank.html">ผลการประเมิน</a>
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
    </ul>
    <!-- End of Sidebar -->