<!-- start feature section  -->
<section class="featured">
    <div class="container">
      <h2 class="main-title">featured items</h2>
      <div>
        <ul class="category">
          <li><a href="{{route('redirect')}}">All</a></li>
          <li><a href="{{route('men-category')}}">Men</a></li>
          <li><a href="{{route('women-category')}}">Women</a></li>
          <li><a href="{{route('child-category')}}">Child</a></li>
        </ul>
      </div>
      <div class="row">
        
        
        @if (session()->has('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                    {{session()->get('message')}}
                  </div>
        @endif
      
       
            
        @forelse ( $data as $product)
          
       
    
        <div class="box col-md-3">
          <div class="product">
            <img src="productimage/{{$product->image}}" alt="">
            <span>$ {{$product->price}}</span>
            <div class="discount">
              <span>20%</span>
              <span>OFF</span>
            </div>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>{{$product->title}}</h3>
            <p>{{$product->discription}}</p>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
              
              <span>
                
                  <form action="{{route('add-cart' ,$product->id)}}" method="post">
                    @csrf
                    <input type="number" min="1" value="1" hidden>
                    <input type="submit" value="add cart" class="btn btn-primary">
                  </form>
                
              </span>
           
             
            </div>
        </div>
      </div>

      @empty
        
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/product-2.jpg" alt="">
          <span>$150.00</span>
          <div class="discount">
            <span>20%</span>
            <span>OFF</span>
          </div>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
            <span>
              <i class="fa-solid fa-cart-shopping">
                {{-- <form action="{{route('add-cart'),$product->id}}" hidden>
                  <input type="number" min="1" value="1" hidden>
                </form> --}}
              </i>
            </span>
            
          </div>

        </div>
      </div>


      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/product-1.jpg" alt="">
          <span>$150.00</span>
          <div class="discount">
            <span>20%</span>
            <span>OFF</span>
          </div>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>

        </div>
      </div>

      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/product-3.jpg" alt="">
          <span>$150.00</span>
          <div class="discount">
            <span>20%</span>
            <span>OFF</span>
          </div>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          
          </div>

        </div>


      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/product-4.jpg" alt="">
          <span>$150.00</span>
          <div class="discount">
            <span>20%</span>
            <span>OFF</span>
          </div>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          
          </div>

        </div>
      </div>

          
      @endforelse


      <div class="d-flex justify-content-center py-5" >
        {!! $data->links() !!}
      </div>
    </div>
    </div>
   
  </section>
  <!-- end feature section  -->
  <!-- start trend section  -->
  <section class="trend">
    <div class="container">
      <h2 class="main-title">trending items</h2>
      <div class="row">
        <div class="box col-md-3">
          <div class="product">
            <img src="imgs/product-1.jpg" alt="">
            <span>$150.00</span>
            <div class="discount">
              <span>20%</span>
              <span>OFF</span>
            </div>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>suspendisse et.</h3>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
             
            </div>

          </div>
        </div>
        <div class="box col-md-3">
          <div class="product">
            <img src="imgs/product-2.jpg" alt="">
            <span>$150.00</span>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>suspendisse et.</h3>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
             
            </div>
        </div>
        </div>
        <div class="box col-md-3">
          <div class="product">
            <img src="imgs/product-3.jpg" alt="">
            <span>$120.00</span>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>suspendisse et.</h3>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
             
            </div>
        </div>
        </div>
        <div class="box col-md-3">
          <div class="product">
            <img src="imgs/product-4.jpg" alt="">
            <span>$130.00</span>
            <div class="discount">
              <span>20%</span>
              <span>OFF</span>
            </div>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>suspendisse et.</h3>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
             
            </div>
        </div>
        </div>
        <div class="box col-md-3">
          <div class="product">
            <img src="imgs/product-5.jpg" alt="">
            <span>$110.00</span>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>suspendisse et.</h3>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
             
            </div>
        </div>
        </div>
        <div class="box col-md-3">
          <div class="product">
            <img src="imgs/product-6.jpg" alt="">
            <span>$100.00</span>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>suspendisse et.</h3>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
             
            </div>
        </div>
        </div>
        <div class="box col-md-3">
          <div class="product">
            <img src="imgs/product-1.jpg" alt="">
            <span>$140.00</span>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>suspendisse et.</h3>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
             
            </div>
        </div>
        </div>
        <div class="box col-md-3">
          <div class="product">
            <img src="imgs/product-3.jpg" alt="">
            <span>$150.00</span>
            <div class="discount">
              <span>20%</span>
              <span>OFF</span>
            </div>
            <div class="layer">
              <i class="fa-solid fa-4x fa-eye"></i>
            </div>
          </div>
          <div class="info">
            <h3>suspendisse et.</h3>
            <div class="rate">
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
              <span><i class="fa-solid fa-star"></i></span>
            </div>
            <div class="like">
              <span><i class="fa-solid fa-heart"></i></span>
              <span><i class="fa-solid fa-share-nodes"></i></span>
             
            </div>
        </div>
      </div>
    </div>
    <div class="row more" style="display: none;" >
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/polo-shirt-1.png" alt="">
          <span>$150.00</span>
          <div class="discount">
            <span>20%</span>
            <span>OFF</span>
          </div>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>

        </div>
      </div>
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/polo-shirt-2.png" alt="">
          <span>$150.00</span>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>
      </div>
      </div>
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/polo-shirt-4.png" alt="">
          <span>$120.00</span>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>
      </div>
      </div>
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/polo-shirt-5.png" alt="">
          <span>$130.00</span>
          <div class="discount">
            <span>20%</span>
            <span>OFF</span>
          </div>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>
      </div>
      </div>
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/polo-shirt-6.png" alt="">
          <span>$110.00</span>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>
      </div>
      </div>
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/t-shirt-1.png" alt="">
          <span>$100.00</span>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>
      </div>
      </div>
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/polo-shirt-1.png" alt="">
          <span>$140.00</span>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>
      </div>
      </div>
      <div class="box col-md-3">
        <div class="product">
          <img src="imgs/polo-shirt-4.png" alt="">
          <span>$150.00</span>
          <div class="discount">
            <span>20%</span>
            <span>OFF</span>
          </div>
          <div class="layer">
            <i class="fa-solid fa-4x fa-eye"></i>
          </div>
        </div>
        <div class="info">
          <h3>suspendisse et.</h3>
          <div class="rate">
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
            <span><i class="fa-solid fa-star"></i></span>
          </div>
          <div class="like">
            <span><i class="fa-solid fa-heart"></i></span>
            <span><i class="fa-solid fa-share-nodes"></i></span>
           
          </div>
      </div>
    </div>
    </div>
      </div>
      <div class="button d-flex justify-content-center align-items-center my-5 py-5">
        <button class="btn load-more btn btn-outline-secondary px-5">Load More</button>
      </div>
      <div class="image position-relative">
        <img src="imgs/trend.jpg" alt="">
        <div class="info">
          <i class="fa-solid fa-quote-left"></i>
          <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, eaque voluptas officiis perferendis adipisci expedita veniam ex ipsam dolorum dolores quisquam quo ut optio alias consequuntur. Sunt beatae eius ad? </q>
        </div>
      </div>
  </section>
  <!-- end trend section  -->