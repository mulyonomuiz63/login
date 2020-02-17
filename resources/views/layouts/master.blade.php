<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Areta Amany</title>
    @include('partials.cs')
    @yield('header')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <!-- Sidebar -->
        @include('layouts.includes._sidebar')
        <!-- top navigation -->
        <div class="top_nav">
          <!-- Navbar -->
        @include('layouts.includes._navbar')
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        @include($thisContent)
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <!-- <div class="pull-right">
          2019 REPOSITORY - Developed by <b>Muiz</b> | Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div> -->
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    @include('partials.js')
    @include($thisJs)
  </body>
</html>
