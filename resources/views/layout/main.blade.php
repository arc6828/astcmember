<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
</head>

<body id="page-top" style="background-color:#edffed ">
  @include('layout.js')
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">  
      @include('layout.navbar')
      <div id="wrapper"> 
        @include('layout.sidebar')
        <div class="container-fluid pt-5 pb-5 mb-5">   
          @yield('content')          
        </div>
      </div>
      @include('layout.footer')
    </div>
  </div>    
</body>
</html>