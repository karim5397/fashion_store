
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
      @include('admin.body')
        <!-- main-panel ends -->
    @includeIf('admin.script')
  </body>
</html>