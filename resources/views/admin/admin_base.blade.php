<!doctype html>
<html lang="en">
  <!--begin::Head-->
  @include('admin.include.head')
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('admin.include.navbar')
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('admin.include.sidebar')
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
          <!--begin::App Content Header-->
          @yield('content')
        
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2024&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">Shop-admin.app</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    @include('admin.include.script')
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
