
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

              @if (session()->has('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                  {{session()->get('message')}}
                </div>
              
              @endif

                <table class="table table-success table-striped" style="color: black">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Description</td>
                            <td>Quantity</td>
                            <td>Price</td>
                            <td>Category</td>
                            <td>Image</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $product )
                        
                      
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->discription}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->category}}</td>
                            <td><img src="productimage/{{$product->image}}" alt=""></td>
                            <td>
                              @can('admin')
                              <a href="{{route('update-product' ,$product->id)}}" class="btn btn-primary"> update</a>
                              <a href="{{route('delete-product' ,$product->id)}}" class="btn btn-danger">delete </a>
                              @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>    


        <!-- main-panel ends -->
    @include('admin.script')
  </body>
</html>