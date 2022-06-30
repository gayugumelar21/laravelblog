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

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span data-feather="user"></span>
                                Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calender"></span>
                            This week
                        </button>
                    </div>
                </div>
                @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error')}}
                </div>
                @endif
                <p>Welcome to member dashboard, <strong>{{ Auth::user()->name }}</strong></p>
                <!-- <p>Your role is <strong>{{ Auth::user()->role }}</strong></p> -->
            </main>

        </div>
      </div>
          <!-- mengimpor file js.blade.php -->
          @include('admin.layout.js')
          <!--posisi default jika hendak memasukan JS tambahan pada suatu content  -->
          @stack('js')
    </body>
</html>
