<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
@include('inc.header')
@if(Request::is('/'))
@include('inc.hero')
@endif
@include('inc.info')
  <div class="container">
     <div class="row">
      <div class="col-8">@yield('content')</div>
      <div class="col-4">@include('inc.aside')</div>
     </div>
  </div>
@yield('form')
@include('inc.footer')
</body>
</html>