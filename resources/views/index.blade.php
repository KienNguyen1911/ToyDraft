<link rel="stylesheet" href="../css/index.css">
<body>
  @include(' navbar')
    <div class="container-fluid" style="padding: 0px; height:100vh">
        <div class="main_slider" style="background-image:url(../img/slide.jpg) ">
            <div class="row content_slider" >
              {{-- <div class="col"> --}}
                <h4 style="text-align: center" class="text" >Summer 2022</h4>
                <h1 style="font-size:60; text-align:center">Welcome to the <br>
                  <span style="color: hsl(218, 81%, 75%)">Spaceship World</span>
                </h1>
                {{-- <button type="button" class="btn btn-outline-primary" style="width: 10%; margin: 10px auto">Show now</button> --}}
                <button class="button-50" role="button" style="width:12%; margin:10px auto">
                  <span style="font-size: 18px; font-weight:400">Shop now</span>  
                </button>
              {{-- </div> --}}
            </div>
        </div>
    
        <div class="container my-4">
          <div class="row">

            <div class="col-md-4">
              <div class="banner_item" >
                <img src="../img/meet-narigara-girl-render-pose-1.jpg" alt="">  
                <div class="banner_category">
                    <a href="#">
                      <h3>Toys for Girls</h3>
                    </a>
                  </div>
              </div>
            </div>

            <div class="col-md-4 ">
              <div class="banner_item" >
                <img src="./img/meet-narigara-render-01.jpg"" alt="">
                <div class="banner_category">
                  <a href="#">
                    <h3>Boys and Girls</h3>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="banner_item" >
                <img src="../img/meet-narigara-render-pose-1.jpg" alt="">
                <div class="banner_category">
                  <a href="#">
                    <h3>Toys for Boys</h3>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="new_arivals mt-4">
          <div class="container">

            <div class="row">
              <div class="col text-center">
                <h2 class="section_title">New Arrivals</h2>
              </div>
            </div>

            <div class="row">
              
              <div class="col-xl-2dot4 bg-light border">
                @foreach ($products as $items )
                  <div class="product_items">
                    <div class="product_img">
                      <img src="{{asset('../img/products/'.$items->productimage)}}" style="width:90%" alt="">
                    </div>
                    
                    <div class="product_info">
                      <div class="product_name">
                        <a href="{{route('login',$items->id)}}">
                          <h3>{{$items->productname}}</h3>
                        </a>
                      </div>
                      <div class="product_price">
                        <h3>{{$items->productprice}}</h3>
                      </div>
                    </div>

                    <div class="product_links">
                      <div class="product_cart">
                        <a href="{{route('login',$items->id)}}">
                          <i class="fas fa-shopping-cart"></i>
                          <span>Add to Cart</span>
                        </a>
                      </div>

                  </div>
                  @endforeach
              </div>


            </div>


          </div>
        </div>
      </div>
</body>


