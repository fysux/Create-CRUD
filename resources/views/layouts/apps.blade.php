<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  @include('layouts.template.assets.style')
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  
</head>

<body class="g-sidenav-show  bg-gray-100">
@include('layouts.template.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.template.nav')
    <!-- End Navbar -->
    <div>
      @yield('content')
    </div>
  </main>
</body>
@include('layouts.template.assets.script')
</html>