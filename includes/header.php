<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- <link rel="icon" href="images/h-b.png" type="image/png" sizes=""> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <?php include 'includes/variable.php'; ?>
</head>

<body>

    <!-- header -->
    <header>
        <div class="header-btm" id="myHeader">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.png" alt="img" class="img-fluid logo">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#how-it-works">How it Works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#city">Cities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pricing">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="business.php">Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="drivers.php">Become a Guy!</a>
                            </li>
                        </ul>

                        <ul class="side-ul">
                            <li class="sd-li">
                                <a href="javascript:;"><i class="fa-regular fa-phone"></i> 214-608-3786 </a>
                            </li>
                            <li class="sd-li">
                                <a class="btn btn-started" href="javascript:;">Get Quote</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- offcanvas -->
    <div class="offcanvas search-bar offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasTopLabel"></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h5 class="search-h">search here</h5>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                    <form action="javascript:;" method="GET" class="search">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <input type="text" class="form-control search-control" name="search"
                                    placeholder="search">
                            </div>

                            <div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 col-xxl-1">
                                <button type="search" class="btn search-btn">
                                    <i class="far fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas -->