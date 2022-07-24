
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
    <style>
        .title{
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align='center'>
                <h1 class="title">Update Account</h1>
                
                @if (session()->has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    {{session()->get('message')}}
                  </div>
                @endif
                
                 <form action="{{route('update-user' ,$user->id)}}" method="post" >
                    @csrf
                    <div style="padding: 15px">
                        <label>User Name</label>
                        <input style="color: black;" type="text" name="username"  value="{{$user->name}}" required>
                    </div>
                    <div style="padding: 15px">
                        <label>Email</label>
                        <input style="color: black;" type="email" name="email"  value="{{$user->email}}" required>
                    </div>
                    <div style="padding: 15px">
                        <label>Address</label>
                        <input style="color: black;" type="text" name="address"  value="{{$user->address}}" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="">Phone</label>
                        <input style="color: black;" type="number" name="phone"  value="{{$user->phone}}" required>
                    </div>
                    <div style="padding: 15px">
                        <label for="">User Type</label>
                        <input style="color: black;" type="text" value="{{$user->usertype}}" name="usertype" required>
                    </div>
                    <div style="padding: 15px">
                        <input class="btn btn-success" type="submit">
                    </div>
                </form>
            </div>
        </div>
     
        <!-- main-panel ends -->
    @includeIf('admin.script')
  </body>
</html>