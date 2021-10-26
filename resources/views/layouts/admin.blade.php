<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="author" content="dlbxqp@gmail.com">
  <meta name="theme-color" content="#404040">
  <meta name="publisher-URL" content="/">

  <title>@section('title') SiteName @show</title>

  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">

  <link rel="stylesheet" href="{{asset('assets/styles/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('assets/styles/main.css')}}">
  <link rel="stylesheet" href="{{asset('assets/styles/project.css')}}">

<!--[if IE]>
  <script>
document.createElement('figcaption')
document.createElement('template')
document.createElement('article')
document.createElement('section')
document.createElement('header')
document.createElement('figure')
document.createElement('footer')
document.createElement('output')
document.createElement('aside')
document.createElement('main')
document.createElement('menu')
document.createElement('nav')
  </script>
<![endif]-->

  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
  <style>
.pace-progress{
 background-color: var(--color-yellow) !important
}
  </style>
  <script src="//cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
<!-- + -->
  <script src="//cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- + -->
  <script src="//unpkg.com/imask"></script>
 </head>

 <body>
  <main>
   <x-admin.header></x-admin.header>
   <div>
    <x-admin.sidebar></x-admin.sidebar>
    <article>
@yield('content')
    </article>
   </div>
   <x-admin.footer></x-admin.footer>
  </main>
 </body>

 <script src="{{asset('assets/scripts/s.js')}}"></script>
</html>
