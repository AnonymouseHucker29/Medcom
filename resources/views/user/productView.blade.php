<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <title>Products</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader" style="background-color: #e38217;">
  <center><img src="{{URL::asset('/admin/assets/images/medgodiff.jpg')}}" style="width: 200px; height: 200px; margin-top: 70px;"></center>
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="header" style="position: relative;">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/">
          <h2>Med <em>GO</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('products')}}">Products
              <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))

              @auth

            <li class="nav-item">
              <a class="nav-link" href="{{url('showcart')}}">
                <i class="fas fa-shopping-cart"></i>
                Cart[{{$count}}]</a>
            </li>
            <x-app-layout>

            </x-app-layout>
            @else
            <li> <a class="nav-link" href="{{ route('login') }}">Log in</a></li>

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
    @if(session()->has('message'))

    <div class="alert alert-success" style="top: -19px;">
      <center>
        {{session()->get('message')}}
        <button type="button" class="close" data-dismiss="alert">x</button>
      </center>
    </div>

    @endif
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->

  <!-- Banner Ends Here -->

  <div id="container" style="margin-top: -85px;">
  <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>All Products</h2>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">

               <input class="form-control" type="search" name="search" placeholder="Search an item">
                &nbsp;
               <button type="submit" class="btn btn-primary" style="background-color: orangered; border-color: orangered;">Search</button>

              
              </form>

            </div>
          </div>
            
          @foreach($data as $product)
          
          <div class="col-md-4">
            <div class="product-item">
              <img height="250" width="100" src="/productimage/{{$product->image}}" alt="">
              <div class="down-content">
                <h4>{{$product->title}}</h4>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}</p>
             
            <form action="{{url('addcart', $product->id)}} " method="POST">

            @csrf

            Quantity:
            <input type="number" value="0" min="1" class="form-control" style="width: 100px" name="quantity">

            <br>

            <button class="btn btn-primary" type="submit" style="background-color: orangered; border-color: orangered;">Add to Cart</button>

            </form>   
                
              </div>
            </div>
          </div>
          
          @endforeach

          @if(method_exists($data,'links'))

          <div class="d-flex justify-content-center">
           
           {!! $data->links() !!}
            
          </div>

          @endif

           

        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright &copy; 2022 MedGo., Ltd.

              - Design: <a rel="nofollow noopener" href="about">SADBOYS</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>


</body>

</html>