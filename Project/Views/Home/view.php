<!DOCTYPE html>

<html>

<head>
  <title> Home page - Ayndre Illustrator </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--For icon-->
  <link rel="icon" type="image/x-icon" href="Images/logo.ico">

  <!--For styleSheets-->
  <link rel="stylesheet" href=".\Styles\homeStyleSheet.css">
  <link rel="stylesheet" href=".\Styles\generalStyleSheet.css">

  <!--For page font-->
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

  <!--For webpage title font-->
  <link href='https://fonts.googleapis.com/css?family=Tourney' rel='stylesheet'>

  <!-- For Bootstrap 5 and JavaScript-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
</head>

<body>
  <header id="header" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
    <a id="website_name" href="/"
      class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      Ayndre Illustrator
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="index.html" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="portfolio.html" class="nav-link px-2 link-dark">Portfolio</a></li>
      <li><a href="store.html" class="nav-link px-2 link-dark">Store</a></li>
      <li><a href="comissions.html" class="nav-link px-2 link-dark">Comissions</a></li>
      <li><a href="blog.html" class="nav-link px-2 link-dark">Blog</a></li>
      <li><a href="faq.html" class="nav-link px-2 link-dark">FAQ</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <button onclick="window.location.href = 'logiin.html';" type="button" class="btn btn-outline-primary me-2">Login</button>
      <button onclick="window.location.href = 'signup.html';" type="button" class="btn btn-primary mrsu">Sign-up</button>
    </div>
  </header>

  <main>
    <div class="container-fluid">
      <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <center><img src="Images/exCarouselmgs/img1.jpeg" class="d-block w-50" alt="Dragon Rider"></center>
          </div>
          <div class="carousel-item">
            <center><img src="Images/exCarouselmgs/img2.jpg" class="d-block w-50" alt="Pirate"></center>
          </div>
          <div class="carousel-item">
            <center><img src="Images/exCarouselmgs/img3.jpg" class="d-block w-50" alt="Tribal Tropical"></center>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </main>
</body>

</html>


<script>
    function logIn() 
    {
    }

</script>