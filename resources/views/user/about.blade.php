<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <title>About Us</title>

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
  <header class="">
    <nav class=" navbar navbar-expand-lg">
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
              <a class="nav-link" href="/">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('products')}}">Products</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="">About Us
                <span class="sr-only">(current)</span>
              </a>
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



  <div class="page-heading about-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4 style="color: white;">about us</h4>
            <h2><span style="color: orangered; font-weight: bold;"> s a d b o y s</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-features about-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Background</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/feature-image.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Who we are &amp; What we do?</h4>
            <p><span style="font-size:x-large; color:orangered; font-weight:bolder;">SADBOYS Inc.</span> is a group of third year Computer Science students from Negros Oriental State University (NOrSU). The name
              SADBOYS is derived from the subject Software Analysis and Design (SAD) and the group consists of all male students (BOYS).<br><br>
              The group focuses on developing a website called <span style="color: orangered; font-weight:bold;">MedGo</span> which aims to
              provide the people ease of access in buying medicine through the use of the Internet. It is capable of handling orders from
              customers to the suppliers by developing a website that will act as a bridge between the customer and supplier for a
              convenient and efficient way of buying medicines to pharmacies without actually going to pharmacies which will save time and
              costs like transportation fee especially if someone is far from the pharmacies.</p>
          </div>
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