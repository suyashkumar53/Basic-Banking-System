<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "stylesheet" href="css/bootstrap.min.css">

    <link rel = "stylesheet" href="css/main.css">

    <title>DocumentBasic Banking System</title>

</head>
<body>
    <header class="header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="#">Eazy Bank</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="history.php">History</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="Customer.php" target="_blank">Customers</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Banking</a></li>
                      <li><a class="dropdown-item" href="#">Loans</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Contact Us</a></li>
                    </ul>
                  </li>
                </ul>

                <ul class="navbar-nav2 ms-auto">
                    <button class="btn">Transaction </button>
                </ul>

              </div>
            </div>
          </nav>

    </header>

          <nav class="navbar3 navbar-light bg-light">
            <form class="container-fluid justify-content-start">
              <button class="btn btn-outline-success me-2" type="button">Contact Us</button>
              <button class="btn btn-sm btn-outline-secondary" type="button">How to Reach</button>
            </form>
          </nav>
          

          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="css/Building.jpg" class="d-block w-100" alt="..." height = "300">
      <div class="carousel-caption d-none d-md-block">
        <h5>EASY BANKING FOR YOU</h5>
        <p>We provide easy and fast banking</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Online.jpg" class="d-block w-100" alt="..." height = "300">
      <div class="carousel-caption d-none d-md-block">
        <h5>EASY TRANSACTION</h5>
        <p>A comfortable transaction for you</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bank1.png" class="d-block w-100" alt="..." height="300">
      <div class="carousel-caption d-none d-md-block">
        <h5>SAFE MONEY</h5>
        <p>A great place for safe and secure transaction</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

          
           <div class ="Start">

          <h1>WELCOME TO EAZY BANK</h1>
        
        </div>

    <div class="mat">
      <h4>Mobile devices, high-speed data communication, and online commerce are creating expectations that convenient, secure, real-time payment and banking capabilities should be available whenever and wherever they are needed.</h4></div>
        <div class="trans"><h3>Do your Transaction here </h3><p><h4><a class="Transact" href="Customer.php" target ="_blank">Click HERE</a></p></h4></div>
        
        <div class="lat">
      <h4>Technology is an enabler; you have to be at the cutting edge of technology - there is no choice.So use online Banking.</h4>
    </div>

    
    </body>
<script src = "js/bootstrap.bundle.min.js"></script>
<script src = "js/popper.min.js"></script>
<script src = "js/bootstarp.min.js"></script>
</body>
</html>