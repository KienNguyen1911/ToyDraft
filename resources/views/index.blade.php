<link rel="stylesheet" href="../css/index.css">

{{-- toast --}}
{{-- <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Hello, world! Welcome back .
    </div>
  </div>
</div> --}}

  @include(' navbar')
  <body>
    
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

              <div class="row mt-5">

                @foreach ($products as $items )

                <div class="col-md-2dot4 text-center px-0 f-card">
                    <div class="product_items " >
                      <div class="group card justify-content-around" style="height: 286px">
                        
                        <div class="product_img">
                          <img src="{{asset('../img/products/'.$items->productimage)}}" style="width:90%" alt="">
                        </div>
                        
                        <div class="product_info">
                          <div class="product_name">
                            <a href="{{route('login',$items->id)}}" style="text-decoration: none; color: #333333">
                              <h5 >{{$items->productname}}</h5>
                            </a>
                          </div>
                          <div class="product_price">
                            <p>Price: {{$items->productprice}} VND</p>
                          </div>
                        </div>

                      </div>

                      <div class="product_links" >
                        <div class="product_cart">
                            <a href="{{route('login',$items->id)}}">
                              {{-- <i class="fas fa-shopping-cart"></i> --}}
                              <span>Add to Cart</span>
                            </a>
                        </div>
                      </div>
                      
                    </div>
                </div>
                @endforeach
                
              </div>
        
            </div>
        </div>

        @include('countdown')

        {{-- form to get opinion from clients --}}

        {{-- <form action=""> --}}
          <div class="container-fluid my-5 p-3" style="background-image: url('../img/Yellow We are hiring Facebook Post (1280 × 300 px).png')">
            <form action="">
              <div class="row">

                  <div class="col-md-7" style="margin: auto">
                    <h3 class=" text-center" style="color: #8CB1F3">What do you think about our website?</h3>
                    <p class="text-center" >Your feedback is very important with 
                      <span style="font-weight: 500">Spaceship</span>
                    </p>
                  </div>                

                  <div class="col-md-5" >
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1">Lucky number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your number">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Topic</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Topic">
                    </div>  

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Description</label>
                      <textarea type="email" class="form-control" id="exampleFormControlInput1"  > </textarea>
                    </div>
                  </div>
    

  
              </div>
            </form>
          </div>
        {{-- </form> --}}

        @include('footer')
    </div>
  
  </body>


    



