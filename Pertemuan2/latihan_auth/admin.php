<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login_page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PWPBNAVIGASI/Pertemuan1/css/bootstrap.min.css"/>

<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row  my-2">
        <header class="p-3 bg-dark text-white">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  
                </a>
        
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                  <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>
        
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                  <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>
        
                <div class="text-end">
                  <a href="logout.php" class="btn btn-outline-light me-2">Logout</a>

                  <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
              </div>
            </div>
          </header>
    </div>
    <div class="row  my-2">
        
    </div>
    <div class="row  my-2">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="http://localhost/PWPBNAVIGASI/Pertemuan1/img/Screenshot%202022-09-09%20104551.png" width="100%" height="900px">
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo $asset ?>Screenshot 2022-09-09 105353.png" width="100%" height="900px">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo $asset ?>Screenshot 2022-09-09 104551.png" width="100%" height="900px">
                <div class="container">
                  <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <div class="row my-1 ">
        <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
            <div class="card" style="width: 15rem;">
                <img src="http://localhost/PWPBNAVIGASI/Pertemuan1/img/Screenshot%202022-09-09%20104551.png" width="100%" height="200px">
                <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
            <div class="card" style="width: 15rem;">
                <img src="<?php echo $asset ?>Screenshot%202022-09-09%20104755.png" width="100%" height="200px">
                <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
            <div class="card" style="width: 15rem;">
                <img src="<?php echo $asset ?>Screenshot 2022-09-09 104736.png" width="100%" height="200px">
                <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
            <div class="card" style="width: 15rem;">
                <img src="<?php echo $asset ?>\Screenshot 2022-09-09 104755.png" width="100%" height="200px">
                <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-1 ">
        <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
            <div class="card" style="width: 15rem;">
                <img src="<?php echo $asset ?>Screenshot 2022-09-09 104825.png" width="100%" height="200px">
                <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
            <div class="card" style="width: 15rem;">
                <img src="<?php echo $asset ?>Screenshot 2022-09-09 105353.png" width="100%" height="200px">
                <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
            <div class="card" style="width: 15rem;">
                <img src="<?php echo $asset ?>naturehike_tenda_naturehike_mongar_2_-_tenda_camping_2p_ultralight_full04_mt8x84yh.webp" width="100%" height="200px">
                <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xl col-6 d-flex align-items-center justify-content-center my-2" style="height: 500px;">
            <div class="card" style="width: 15rem;">
                <img src="<?php echo $asset ?>TAS_CARRIER_FJALLRAVEN_KAJKA_65_L_ORIGINAL.jpg" width="100%" height="200px">
                <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="#">Bottom navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                  <li class="nav-item dropup">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Dropup</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown10">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
</div>
</body>
</html>