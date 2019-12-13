<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $pagetitle; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
    </head>
    <body style="overflow-x:hidden;">
    <header>
        <div class="row">
            <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="<?php echo $scriptLink ?>">CMS</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="<?php echo $scriptLink ?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">About Us</a>
                                    <a class="dropdown-item" href="#">Vision & Mission</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Our Clients</a>
                                  </div>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="modal" data-target="#registerModal">Register</a>
                                </li>

                                <li>

                                </li>
                                </ul>
                              <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                              </form>
                            </div>
                          </nav>
            </div>
        </div>
      <?php include_once "tables.class.php" ?>
      <?php include_once "login.php" ?>
      <?php include_once "register.php" ?>
    </header>

    <section class="bg-dark text-white pb-3 pt-5 page-header">
        <div class="container">
            <h1><?php echo $pagetitle ?></h1>
        </div>

    </section>

    <section class="maincontent py-3">
      <div class="container">
        
