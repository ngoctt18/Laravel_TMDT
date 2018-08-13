<!DOCTYPE html>
<html>
<head>
  <!-- head -->
  @include('admin.blocks.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- header -->
    @include('admin.blocks.header')

    <!-- Left side column. contains the logo and menubar -->
    @include('admin.blocks.menubar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- content-header (Page header) -->
      @include('admin.blocks.content-header')

      <!-- Main content -->
      <section class="content">

        @yield('content')

      </section>
    </div>
    <!-- footer -->
    @include('admin.blocks.footer')
  </div>
  <!-- scripts -->
  @include('admin.blocks.scripts')
</body>
</html>
