@extends('user.navbar-footer')
@section('home-content')
    @include('user.header')
    <!-- end header -->
 <main>
    <!-- start collection section  -->
    <section class="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="content">
                        <img src="imgs/collection1.jpg" alt="">
                        <span class="span-style text-black-50">Hot Collection</span>
                        <h1>new trend for Women</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate ut incidunt nostrum, in illum consequatur enim reprehenderit possimus. Corrupti, perspiciatis est. Fuga recusandae molestiae vero alias illo, odit deleniti pariatur.</p>
                        <button class="btn btn-light px-5">Shop Now</button>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="sec-content">
                        <div class="image">
                            <img src="imgs/collection4.jpg" alt="">
                            <div class="view-collection">
                                <a href="" class="btn btn-dark">View Collection</a>
                            </div>
                        </div>
                        <div class="image">
                            <img src="imgs/collection3.jpg" alt="">
                            <div class="view-collection">
                                <a href="" class="btn btn-dark">View Collection</a>
                            </div>
                        </div>
                        <div class="image">
                            <img src="imgs/collection2.jpg" alt="">
                            <div class="view-collection">
                                <a href="" class="btn btn-dark">View Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end collection section  -->
    
     @include('user.product')




    <!-- start blogs  -->
    <section class="blogs">
      <h2 class="main-title">lastest blog</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <img src="imgs/blogs1.webp" alt="">
              <h3>Men Fashion</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, minus? Quo aliquid quod, architecto eligendi officiis laborum natus, necessitatibus placeat ab obcaecati sed voluptas iste ullam nesciunt fugit porro ipsum.</p>
              <a href="#" class="btn btn btn-outline-secondary">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <img src="imgs/blogs2.webp" alt="">
              <h3>Women Fashion</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, minus? Quo aliquid quod, architecto eligendi officiis laborum natus, necessitatibus placeat ab obcaecati sed voluptas iste ullam nesciunt fugit porro ipsum.</p>
              <a href="#" class="btn btn btn-outline-secondary">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <img src="imgs/blogs3.webp" alt="">
              <h3>Kids Fashion</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, minus? Quo aliquid quod, architecto eligendi officiis laborum natus, necessitatibus placeat ab obcaecati sed voluptas iste ullam nesciunt fugit porro ipsum.</p>
              <a href="#" class="btn btn btn-outline-secondary">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end blogs  -->
    <!-- start brand  -->
    <section class="brand">
      <h3 class="main-title">Shop By Brand</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="box">
              <img src="imgs/brand1.jpg" alt="">
              <a href="https://www.adidas.com.eg/" target="_blanck"> Adidas Brand</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box">
              <img src="imgs/brand2.jpg">
              <a href="https://dejavu.shoes/" target="_blanck"> Dejavu Brand</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box">
              <img src="imgs/brand5.jpg" alt="">
              <a href="https://www.zara.com/" target="_blanck"> Zara Brand</a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box">
              <img src="imgs/brand4.jpg" alt="">
              <a href="https://www.lcwaikiki.eg" target="_blanck"> lcwaikiki Brand</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end brand  -->
</main>
 

@endsection