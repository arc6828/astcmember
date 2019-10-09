<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout.head')
</head>

<body id="page-top">
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
  @include('layout.js')    
</body>
</html>