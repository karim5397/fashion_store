
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
        <div class="container-fluid page-body-wrapper">
            <div class="container" align='center'>

                <table class="table table-success table-striped" style="color: black">
                    <thead>
                        <tr>
                            <td>User Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <td>User Type</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $users )
                        
                      
                        <tr>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->address}}</td>
                            <td>{{$users->usertype}}</td>
                            <td>
                              @can('admin')
                              <a href="{{route('edit-user' , $users->id)}}" class="btn btn-success">update</a>
                              <a href="{{route('delete-user' ,$users->id)}}" class="btn btn-danger">delete</a>
                              @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
        <!-- main-panel ends -->
    @includeIf('admin.script')
  </body>
</html>