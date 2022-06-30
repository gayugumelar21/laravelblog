<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>
    <!-- mengimpor file css.blade.php -->
    @include('admin.layout.css')
    <!-- posisi default jika hendak memasukan CSS tambahan pada suatu content -->
    @stack('css')
  </head>
    <body>
      <!-- mengimpor file navbar.blade.php -->
      @include('admin.layout.navbar')
      <div class="container-fluid">
        <div class="row">
          <!-- mengimpor file sidebar.blade.php -->
          @include('admin.layout.sidebar')
          <!-- posisi default content yang hendak ditampilkan -->
          @yield('content')
        </div>
      </div>
          <!-- mengimpor file js.blade.php -->
          @include('admin.layout.js')
          <!--posisi default jika hendak memasukan JS tambahan pada suatu content  -->
          @stack('js')
    </body>
</html>
