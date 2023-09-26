@extends("layout.app")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/home.css">
    @section("title")
        KeyMochi
    @endsection
</head>
<body>
    @include("component.navbar")
    <div class="jumbotron jumbotron-fluid home-jumbotron">
        <div class="container">
          <h1 class="display-4 header-text">Elevate Your Snacking Game with Mochi!</h1>
          <p class="lead header-paragraph">Indulge in Mochi's Sweet Sensation <br> Buy Now and Taste the Magic!</p>
          <button class="buy-now-button">BUY NOW!</button>
          {{-- <button class="contact-button">CONTACT</button> --}}
        </div>
    </div>
   <div class="container ">
        <div class="row title">
            <h1 class="text-center">BEST SELLER</h1>
        </div>
        <div class="row">

            <div class="col">
                <img src="/image/1.png" alt="image" class="image1">
            </div>
            <div class="col">
                    <div class="description1">
                        <h5>STARTED FROM PHP 120.00</h5>
                        <h1>Strawberry Cream Mochi</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto rem et error non, nam laudantium! Nesciunt vel nobis rerum totam, minus cupiditate dolore. Possimus aperiam, est eveniet praesentium quibusdam saepe.</p>
                        <button class="buy-button">BUY NOW</button>
                    </div>
            </div>
        </div>
        <div class="row">


            <div class="col">
                    <div class="description1">
                        <h5>STARTED FROM PHP 120.00</h5>
                        <h1>Strawberry Cream Mochi</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto rem et error non, nam laudantium! Nesciunt vel nobis rerum totam, minus cupiditate dolore. Possimus aperiam, est eveniet praesentium quibusdam saepe.</p>
                        <button class="buy-button">BUY NOW</button>
                    </div>
            </div>
            <div class="col">
                <img src="/image/18.png" alt="image" class="image2">
            </div>
        </div>
        <div class="row">

            <div class="col">
                <img src="/image/21.png" alt="image" class="image1">
            </div>
            <div class="col">
                    <div class="description1">
                        <h5>STARTED FROM PHP 120.00</h5>
                        <h1>Strawberry Cream Mochi</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto rem et error non, nam laudantium! Nesciunt vel nobis rerum totam, minus cupiditate dolore. Possimus aperiam, est eveniet praesentium quibusdam saepe.</p>
                        <button class="buy-button">BUY NOW</button>
                    </div>
            </div>
        </div>
        <div class="row mb-5">


            <div class="col">
                    <div class="description1">
                        <h5>STARTED FROM PHP 120.00</h5>
                        <h1>Strawberry Cream Mochi</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto rem et error non, nam laudantium! Nesciunt vel nobis rerum totam, minus cupiditate dolore. Possimus aperiam, est eveniet praesentium quibusdam saepe.</p>
                        <button class="buy-button">BUY NOW</button>
                </div>
            </div>
            <div class="col">
                <img src="/image/25.png" alt="image" class="image2">
            </div>
        </div>

   </div>
   <div class="jumbotron jumbotron-fluid banner2">

   </div>
   <div class="container " id="product">
    <div class="row">
        <h1 class="text-center title">PRODUCTS</h1>
    </div>

    <div class="row pb-5">

        <div class="col-lg-4">
            <div class="product-card">
                <img src="/image/1.png" alt="product" class="product">
                <h4>Strawberry Mochi</h4>
                <h6>PHP 120.00</h6>
                <button>ADD TO CART</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-card">
                <img src="/image/18.png" alt="product" class="product">
                <h4>Grapes Mochi</h4>
                <h6>PHP 120.00</h6>
                <button>ADD TO CART</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-card">
                <img src="/image/21.png" alt="product" class="product">
                <h4>Chocolate Mochi</h4>
                <h6>PHP 120.00</h6>
                <button>ADD TO CART</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-card">
                <img src="/image/29.png" alt="product" class="product">
                <h4>Red Bean Mochi</h4>
                <h6>PHP 120.00</h6>
                <button>ADD TO CART</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-card">
                <img src="/image/25.png" alt="product" class="product">
                <h4>Cream Mochi <span class="badge">NEW</span></h4>
                <h6>PHP 120.00</h6>
                <button>ADD TO CART</button>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-card">
                <img src="/image/32.png" alt="product" class="product">
                <h4>Matcha Mochi <span class="badge">NEW</span></h4>
                <h6>PHP 120.00</h6>
                <button>ADD TO CART</button>
            </div>
        </div>

    </div>


    </div>
    <div class="jumbotron jumbotron-fluid banner3 mb-0">

    </div>

        <div id="carouselExampleControls" class="carousel slide testimonial" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    {{-- <img src="..." class="d-block w-100" alt="..."> --}}
                    <div class="message">
                        <img src="/image/40.png" alt="testimonial" >

                        <h4 class="text-center">I've tried mochi from various places, but KeyMochi's unique flavors set them apart. Their commitment to quality shines through in every piece.</h4>

                        <h5 class="text-center">ー Alex K.</h5>

                    </div>
                  </div>
                  <div class="carousel-item">

                    <div class="message">
                        <img src="/image/41.png" alt="testimonial" >

                        <h4 class="text-center">I've tried mochi from various places, but KeyMochi's unique flavors set them apart. Their commitment to quality shines through in every piece.</h4>

                        <h5 class="text-center">ー Alex K.</h5>

                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="message">
                        <img src="/image/42.png" alt="testimonial" >

                        <h4 class="text-center">I've tried mochi from various places, but KeyMochi's unique flavors set them apart. Their commitment to quality shines through in every piece.</h4>

                        <h5 class="text-center">ー Alex K.</h5>

                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="message">
                        <img src="/image/43.png" alt="testimonial" >

                        <h4 class="text-center">I've tried mochi from various places, but KeyMochi's unique flavors set them apart. Their commitment to quality shines through in every piece.</h4>

                        <h5 class="text-center">ー Alex K.</h5>

                    </div>
                  </div>
                </div>
               <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
    </div>
    <div class="jumbotron jumbotron-fluid banner4 mb-0">

    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col subscribe">
                <h1 class="text-center">Get Promotions & Updates</h1>
                <h6 class="text-center">Don't miss out on the latest news and exclusive offers – subscribe today to get promotional updates that will keep you in the know!</h6>
                <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Recipient's username"
                      aria-label="Recipient's username"
                      aria-describedby="button-addon2"
                    />
                    <button class="btn btn-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                      Button
                    </button>
                  </div>
            </div>
        </div>
    </div>

    @include("component.footer")

    <script src="/js/home.js"></script>
</body>
</html>
