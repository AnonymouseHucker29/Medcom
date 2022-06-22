<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <title>Contact Us</title>

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
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('products')}}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('contact')}}">Contact Us
                <span class="sr-only">(current)</span>
              </a>
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
  <div class="team-members" style="margin-top: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Team Members</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="admin/assets/images/admingwapo.jpg" style="margin: 0 auto;display: flex; justify-content:center;  width: 200px;">
              <div class="hover-effect">
                <div class="hover-content">
                  <h4 style="color: white;">Contact Me:</h4>
                  <ul class="social-icons">
                    <li><a href="https://www.facebook.com/warzonejap8"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/johnphilipflores/"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>John Philip Flores</h4>
              <span>Project Manager</span>
              <p>The leader of the group which oversees the production of the project.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/devon.jpg" style="margin: 0 auto; display: flex; justify-content:center; width: 200px;">
              <div class="hover-effect">
                <div class="hover-content">
                  <h4 style="color: white;">Contact Me:</h4>
                  <ul class="social-icons">
                    <li><a href="https://web.facebook.com/bonx12" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/dvnqrnt/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Devon Glad Quirante</h4>
              <span>Programmer</span>
              <p>The one who writes code to build the website.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/vincent.png" style="margin: 0 auto;display: flex; justify-content:center; width: 200px;">
              <div class="hover-effect">
                <div class="hover-content">
                  <h4 style="color: white;">Contact Me:</h4>
                  <ul class="social-icons">
                    <li><a href="https://www.facebook.com/vincent.gonzaga.330" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/itssaisai_14/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Vincent Gonzaga</h4>
              <span>Assistant Manager</span>
              <p>The one who assists the overall production of the project.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/brent.jpg" style="margin: 0 auto; display: flex; justify-content:center;  width: 200px;">
              <div class="hover-effect">
                <div class="hover-content">
                  <h4 style="color: white;">Contact Me:</h4>
                  <ul class="social-icons">
                    <li><a href="https://www.facebook.com/codename9.5brentokloy429/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/brentokloy/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Brent Baylon</h4>
              <span>Systems Analyst</span>
              <p>The one who is responsible for the foundation of the project.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/jayson.jpg" style="margin: 0 auto; display: flex; justify-content:center; width: 200px;">
              <div class="hover-effect">
                <div class="hover-content">
                  <h4 style="color: white;">Contact Me:</h4>
                  <ul class="social-icons">
                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/neeowisee/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Jayson Sisneros</h4>
              <span>UI Designer</span>
              <p>The one who designs the user interface of the website.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/gemiries.jpg" style="margin: 0 auto; display: flex; justify-content:center;  width: 200px;">
              <div class="hover-effect">
                <div class="hover-content">
                  <h4 style="color: white;">Contact Me:</h4>
                  <ul class="social-icons">
                    <li><a href="https://www.facebook.com/glare.tembrevilla" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/gemmoleno" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Gemiries Moleño</h4>
              <span>Content Producer</span>
              <p>The only female member which produces informations to be written in the website.</p>
            </div>
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