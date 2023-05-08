<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('Modernize/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('Modernize/assets/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('back.partials.sidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
      @include('back.partials.header')
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>
  <script src="{{ asset('Modernize/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('Modernize/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Modernize/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('Modernize/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('Modernize/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('Modernize/assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('Modernize/assets/js/dashboard.js') }}"></script>
</body>

</html>
