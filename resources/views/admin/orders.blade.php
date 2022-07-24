
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
                            <td>Cutomer Name</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <td>Produc_Name</td>
                            <td>Quantity</td>
                            <td>Price</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($order as $orders )
                        
                      
                        <tr>
                            <td>{{$orders->name}}</td>
                            <td>{{$orders->phone}}</td>
                            <td>{{$orders->address}}</td>
                            <td>{{$orders->product_name}}</td>
                            <td>{{$orders->quantity}}</td>
                            <td>{{$orders->price}}</td>
                            <td>{{$orders->status}}</td>
                            <td>
                                <a href="{{route('update-status' ,$orders->id)}}" class="btn btn-success">Deliverd</a>
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