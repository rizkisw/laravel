<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- animate Css -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- MY FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@700&display=swap" rel="stylesheet">
    <!-- MY CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    

    <title>Talk</title>
  </head>
  <body>
    <!--Navbar -->
    <div class="animate__fadeInDown">
    <nav class="navbar navbar-expand-lg navbar-light .bg-transparent">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Talk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">News Update</a>
            <a class="btn btn-dark tombol" href="{{ route('login') }}">Sign In</a>
          </div>
        </div>
      </div>
    </nav>
</div>

    <!-- Navbar End -->
    <!-- Hero -->
    <div class="animate__backInLeft">
    <div class="container-fluid ">
      <div class="container">
        <img src="images\responsive.png" class="img-fluid" alt="responsive">
        <h1 class="display-4 animate__backInLeft">Wherever you are, you can<br> connect to everyone</h1>
        <p>Talk for everything</p>
        <a class="btn btn-dark tombol" href="{{ route('register') }}">Sign Up For Free</a>
        </div>
      </div>
    </div>
    <!-- Hero End -->
    <!-- Feature Section -->
    <!-- CONTAINER -->
    <div class="container">
      <!-- Feature Confrence -->
      <div class="row Feature" data-aos="fade-left">
        <div class="col">
          <img src="images/videoconference-with-happy-people-desktop-flat-illustration_74855-14200.jpg" alt="confrence" class="img-fluid">
        </div>
        <div class="col">
         <h2>Make Confrence</h2>
         <p>This feature allows you to make online conferences with<br> companies, schools, or whatever. via video call </p> 
        </div>
      </div>
      <!-- Feature Encrypcy -->
      <div class="row Feature" data-aos="fade-left">
        <div class="col">
          <img src="images\enkripsi.jpg" alt="enkripsi" class="img-fluid">
        </div>
        <div class="col">
         <h2>End-To-End Encrypted</h2>
         <p>End-to-end encryption ensures only you and the person you're communicating with can read or listen to what is sent, and nobody in between</p> 
        </div>
      </div>
      <div class="text-center" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-delay="300">
        <h2>Ready To Start</h2>
        <a class="btn btn-dark tombol" href="#">Sign Up For Free</a>
        <img src="images\people.png" alt="people" class="img-fluid">
      </div>
      <!-- Feature End -->
    </div>
    <!-- Container End -->
    <!-- Footer -->
    <footer class="bg-dark text-white ">
      <div class="container text-center text-md-left">
        
        <div class="row text-center text-md-left" >
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h2>Talk</h2>
            <p>Talk for Everything</p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5>About</h5>
            <p>
              <a href="#" class="text-white" style="text-decoration:none;">Career</a>
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration:none;">Policy</a>
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5>Feature</h5>
            <p>
              <a href="#" class="text-white" style="text-decoration:none;">Confrence</a>
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration:none;">End-To-End</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5>News Update</h5>
            <p>
              <a href="#" class="text-white" style="text-decoration:none;">Dekstop</a>
            </p>
            <p>
              <a href="#" class="text-white" style="text-decoration:none;">Mobile</a>
            </p>
          </div>
          <div class="col-md-3 mx auto mt-3">
            <p class="copyright">Copyright ©2021 All rights</p>
          </div>
        </div>
      </div>

    </footer>




































    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset:300,
      duration:1000
    });
  </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>