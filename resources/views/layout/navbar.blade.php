<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-success static-top">

    <a class="navbar-brand mr-1" href="{{ url('/home') }}"><b>ASTC 2020</b></a>

    <button class="btn btn-link btn-sm order-1 order-sm-0 text-white" id="sidebarToggle" href="#">
      <b><i class="fas fa-bars"></i></b>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group  d-none">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1 d-none">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1 d-none">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow ">
        <a class="nav-link dropdown-toggle href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i> {{ Auth::check() ? Auth::user()->name : '' }}
            @if(Auth::check())

              @if(Auth::user()->profile->role == "author" )
              (ผู้ส่งบทความ)
              @endif

              @if(Auth::user()->profile->role == "academic-admin" )
              (กรรมการวิชาการ)
              @endif

              @if(Auth::user()->profile->role == "admin" )
              (ผู้ดูแลระบบ)
              @endif

              @if(Auth::user()->profile->role == "audience" )
              (ผู้เข้าร่วมงาน)
              @endif

            @endif
        </a>
      @if (Route::has('login'))
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          @auth
          <!-- <a class="dropdown-item disabled" href="#">Settings</a>
          <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="{{ url('/logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        @else
          <a class="dropdown-item" href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a>
          @endauth
        </div>
      @endif
      </li>
    </ul>

  </nav>
