<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/home-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/cart-style.css')}}">
    <title>Fashion Store</title>
</head>
<body>
<!-- start main navbar  -->
<nav class="navbar navbar-main navbar-expand-lg navbar-light ">
    <div class="container">
        <div><span class="offer">free shiping on all orders over $75!</span></div>
      <div>
        <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto text-center" >
         
          <li class="nav-item">
            <a class="nav-link" href="#">Wishlist</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Currency:Usd
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">EG</a></li>
              <li><a class="dropdown-item" href="#">EUR</a></li>
              <li><a class="dropdown-item" href="#">GBP</a></li>
            </ul>
          </li>
            @if (Route::has('login'))
            @auth
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('show-cart')}}"><i class="fa-solid fa-cart-shopping"></i> My Carft({{$count}})</a>
            </li>
                    <x-app-layout style="padding: 0; margin:0;" ></x-app-layout>

              @else
                  <a class="nav-link" href="{{ route('login') }}" >Log in</a>

                  @if (Route::has('register'))
                    <li> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                  @endif
              @endauth
      @endif
          </li>
        </ul>
      </div>
    </div>
</nav>
<!-- end main navbar  -->

<!-- start search  -->
    

  

<div class="search">
    <form action="{{route('search')}}" action="get" class="d-flex justify-content-center">
      @csrf
      <input class="form-control me-2" type="search" name="search" placeholder="Search Here What You Need...." aria-label="Search">
      <button class="btn btn-outline-success " type="submit">Search</button>
    </form>
</div>

<!-- end search -->


<!-- start sec nav  -->
<nav class="navbar navbar-sec navbar-expand-lg navbar-light ">
    <div class="container">
        <a href="#"><img src="imgs/logo.jpg" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto text-center">
          <li class="nav-item">
            <a class="nav-link"  href="{{route('redirect')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Foot Wear</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Accessories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<!-- end sec nav  -->

@yield('home-content')
@yield('cart-content')




<!-- start footer  -->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="content">
            <h3>SHOPS</h3>
            <ul>
              <li><a href="#">New In</a></li>
              <li><a href="#">Women</a></li>
              <li><a href="#">Men</a></li>
              <li><a href="#">Shoes</a></li>
              <li><a href="#">Bags & Accessories</a></li>
              <li><a href="#">Top Brands</a></li>
              <li><a href="#">Sale & Special Offers</a></li>
              <li><a href="#">Look Book</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="content">
            <h3>INFORMATION</h3>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Customer Service</a></li>
              <li><a href="#">New Collection</a></li>
              <li><a href="#">Best Seller</a></li>
              <li><a href="#">Manfucture</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="content">
            <h3>CUSTOMER SERVICE</h3>
            <ul>
              <li><a href="#">Search Terms</a></li>
              <li><a href="#">Advanced Search</a></li>
              <li><a href="#">Orders & Returns</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Rss</a></li>
              <li><a href="#">Help & FAQS</a></li>
              <li><a href="#">Consultant</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="content">
            <h3>NEWS LETTER</h3>
            <form action="">
              <label for="">Sign Up For Letter</label>
              <input type="email" placeholder="Type Your E-mail">
              <input type="submit" value="SUBSCRIBE" class="btn btn-primary">
            </form>
            <div class="social">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-brands fa-youtube"></i>
              <i class="fa-brands fa-google"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer  -->
  <div class="copy-right">
    <div class="container">
      <div>
        <span>&copy; 2022 Fashion Store</span>
        <span>Made By : Karim Atef</span>
      </div>
    </div>
  </div>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/home.js"></script>
</html>