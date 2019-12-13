<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $pagetitle ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../assets/libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body style="overflow-x:hidden;">
    <header>
        <div class="row">
            <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">CMS</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                  <a class="nav-link" href="#">Dashboard</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Admin Tools
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Content Management</a>
                                    <a class="nav-link dropdown-toggle" href="#" id="userManDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      User Management
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="userManDropdown">
                                      <a class="dropdown-item" href="#">Users Management</a>
                                      <a class="dropdown-item" href="#">Pages Roles Management</a>
                                      <a class="dropdown-item" href="#">Roles Management</a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                  </div>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="#">Services</a>
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
    </header>

    <section class="bg-dark text-white pb-3 pt-5 page-header">
        <div class="container pt-3">
            <h1><?php echo $pagetitle ?></h1>
        </div>

    <section>