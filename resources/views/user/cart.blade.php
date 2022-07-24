
    @extends('user.navbar-footer')
    @section('cart-content')
 
        


@if ($count== "0")
    
<section class="cart">
    <div class="container">
        <div class="content">
            <i class="fa-solid fa-cart-shopping"></i>
            <h3>Your cart is empty!</h3>
            <span>Browse our categories and discover our best deals!</span>
            <a href="{{route('redirect')}}" class="btn btn-primary">START SHOPPING</a>
        </div>
    </div>
</section>
@else
    
<div style="height: 600px">
    @if (session()->has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    {{session()->get('message')}}
                </div>
    @endif
  
    
    <form action="{{route('order')}}" method="post">
        @csrf
        <table class="table table-success table-striped" style="color: black" >
            <thead>
                <tr>
                    <td>Product Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $carts )
                <tr>
                    <td>
                        <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden=''>
                        {{$carts->product_title}}
                    </td>
                    <td>
                        
                        <input type="number" name="quantity[]" value="{{$carts->quantity}}" min="1" class="quantity" >
                       
                    </td>
                    <td>
                        <input type="number" name="price[]" value="{{$carts->price}}" hidden=''>
                        {{$carts->price}}
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{route('delete-cart' ,$carts->id)}}">delete</a>
                    </td>

                </tr>
                    
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-success">Confirm Order</button>
    </form>

</div>
@endif

 <!-- start top-selling -->
 <section class="top-selling">
    <div class="container">
        <div class="content">
        <h4>Top selling items</h4>
        <div class="box d-flex justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
            <img src="imgs/product-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example </p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="imgs/product-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example </p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="imgs/product-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example </p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="imgs/product-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example </p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="imgs/product-5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example </p>
            </div>
          </div>
        </div>
    </div>
    </div>
</section>
<!-- end top-selling -->
 @endsection
