<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simseekr</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/tg-icon.svg">
    <link rel="stylesheet" href="uiframe/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="uiframe/css/slick.css">
    <link rel="stylesheet" href="uiframe/css/slick-theme.css">
    <link rel="stylesheet" href="css/t_styles.css">
    <link rel="stylesheet" href="css/rstyle.css">
    <link rel="stylesheet" href="css/sakkdm.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="uiframe/css/font-awesome.min.css">
    <link rel="stylesheet" href="uiframe/css/animate.min.css">
    <link href="uiframe/css/aos.css" rel="stylesheet">
  </head>
  <body>
  
  <div class="main-div">
    <header class="header-top fixed-top" id="header-top">
      <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="./img/hlogo.svg" alt="Simseekr Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                  <h5>Navigation</h5>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Shop eSIMs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Support Hub</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Contact Us</a>
                  </li>
                </ul>
                <ul class="navbar-nav m-auto menu-items-mobile">
                  <h5>Navigation</h5>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Terms & Conditions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Privacy Policy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Cookies Policy</a>
                  </li>
                </ul>
                <div class="d-flex right-side-menu">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <button class="nav-link dropdown-toggle"  id="currencyBtn"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      $ USD <img src="./img/usa-flag.svg" class="img-fluid" id="currencyFlag">
                      </button>
                      <ul class="dropdown-menu">
                        <li><button class="dropdown-item" onclick="selectCurrency('$ USD','./img/usa-flag.svg')">$ USD <img src="./img/usa-flag.svg" class="img-fluid"></button></li>
                        <li><button class="dropdown-item" onclick="selectCurrency('$ CAD','./img/usa-flag.svg')">$ CAD <img src="./img/usa-flag.svg" class="img-fluid"></button></li>
                        <li><button class="dropdown-item" onclick="selectCurrency('$ EUR','./img/france.svg')">$ EUR <img src="./img/france.svg" class="img-fluid"></button></li>
                        <li><button class="dropdown-item" onclick="selectCurrency('$ GBP','./img/italy.svg')">$ GBP <img src="./img/italy.svg" class="img-fluid"></button></li>
                        <li><button class="dropdown-item" onclick="selectCurrency('$ AUD','./img/thailand.svg')">$ AUD <img src="./img/thailand.svg" class="img-fluid"></button></li>
                        <li><button class="dropdown-item" onclick="selectCurrency('$ NZD','./img/usa-flag.svg')">$ NZD <img src="./img/usa-flag.svg" class="img-fluid"></button></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link ">
                        <div class="cartCount">1</div>
                        <img src="./img/shopping-basket-solid.svg" alt="Shopping Basket Icon" class="shopping-basket-icon img-fluid">
                      </a>
                    </li>
                    <li class="nav-item">
                      <img src="./img/user-icon.svg" alt="Support Icon" class="user-icon img-fluid">
                    </li>
                  </ul>
                </div> 
                <div class="header-bottom d-block d-lg-none d-md-block">
                    <p>© 2026 Simseekr. All rights reserved.</p>
                </div>
            </div>
          </div>
      </nav>
   </header>
  
  