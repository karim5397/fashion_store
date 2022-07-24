
<!DOCTYPE html>
<html lang="en">
  <head>
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
                <h1 class="title">Add Products</h1>
                
                @if (session()->has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    {{session()->get('message')}}
                  </div>
                @endif
                
                 <form action="{{route('uploadproduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label>Product Title</label>
                        <input style="color: black;" type="text" name="title" placeholder="Give a Product Title" required>
                    </div>
                    <div style="padding: 15px">
                        <label>Price</label>
                        <input style="color: black;" type="number" name="price" placeholder="Give a Price" required>
                    </div>
                    <div style="padding: 15px">
                        <label>Description</label>
                        <input style="color: black;" type="text" name="discription" placeholder="Give a Product Description" required>
                    </div>
                    <div style="padding: 15px">
                        <label>Quantity</label>
                        <input style="color: black;" type="text" name="quantity" placeholder="Give a Product Quantity" required>
                    </div>
                    <div style="padding: 15px">
                        <label>Category Name</label>
                        <select style="color: black;" name="category" >
                            <option style="color: black;" value=""></option>
                            <option style="color: black;" value="men">Men</option>
                            <option style="color: black;" value="women">Women</option>
                            <option style="color: black;" value="child">Child</option>
                        </select>
                    </div>
                    <div style="padding: 15px">
                        <label for="">Image</label>
                        <input type="file" name="image">
                    </div>
                    <div style="padding: 15px">
                        <input class="btn btn-success" type="submit">
                    </div>
                </form>
            </div>
        </div>
     
        <!-- main-panel ends -->
    @include('admin.script')
  </body>
</html>