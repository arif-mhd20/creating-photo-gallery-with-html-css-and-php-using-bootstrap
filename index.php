<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photo Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My Personal Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature Photographs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture Photographs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel Photographs</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/p4n.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h2>Nature Photographs</h2>
    <p></p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/p4a.jpeg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h2>Architecture Photographs</h2>
    <p></p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/p4t.jpeg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h2>Travel Photographs</h2>
    <p></p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="nature">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Nature  Photograph</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p1n.jpeg" alt="" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p2n.jpeg" alt="" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p3n.jpeg" alt="" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a  id="architecture">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Architecture  Photograph</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p1a.jpeg" alt="" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p2a.jpeg" alt="" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p3a.jpeg" alt="" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="travel">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Travel  Photograph</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p1t.jpeg" alt="" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p2t.jpeg" alt="" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="/images/p3t.jpeg" alt="" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Conduct Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class = "form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class = "form-control">
            </div>
            <div class="form-group">
                <label>Number:</label>
                <input type="text" name="number" class = "form-control">
            </div>
            <button type="submit" class = "btn btn-success">Log In</button>
        </form>
    </div>
</section>
</a>

<a id="about">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">About</h2>
    </div>
    <div class="container-fluid">
        <h3 class="text-center">MAC</h3><br>
        <p class = "text-centwe"><b>i am a photographar interested in working in nature , Architecture and travel photography. i am a computer science Engineer with Web development skills </b></p>
    </div>
</section>
</a>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>