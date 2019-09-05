<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta charset= "utf-8">
  <title>Probando Laravel - @yield('title')</title>
</head>
<body>
  @section('header')
    Master Header
  @show
  <div class="container">
    @yield('content')
  </div>
  @section('footer')
    Master footer
  @show
</body>
</html>
