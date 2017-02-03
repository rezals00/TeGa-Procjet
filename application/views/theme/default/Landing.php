<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$Site->nama;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="./cdn/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./cdn/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="./cdn/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="./cdn/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?=$Site->nama;?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#apk">Android</a>
                    </li>
                    <?php if($session != null) { ?>
                    <li>
                        <a class="page-scroll" href="./Main/Index"><?=$session->name;?></a>
                    </li>
                    <?php } else { ?>
                    <li>
                        <a class="page-scroll" href="./Main/Login">Login</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?=$Site->nama;?></h1>
                <hr>
                <p><?=$Site->info;?></p>
                <?php if($Site->register == '1'){ ?>
                <a href="./Main/Register" class="btn btn-primary btn-xl page-scroll">Register</a>
                <?php } ?>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Informasi Panel</h2>
                    <hr class="light">
                    <p class="text-faded"><?=$Site->nama;?> Adalah Panel Penyedia Layanan Social Media Marketing (SMM) Yang Bertujuan Untuk Membantu Para Penjual Di Social Media </p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-instagram text-primary sr-icons"></i>
                        <h3>Instagram</h3>
                        <p class="text-muted">Menyediakan Layanan Followers , Like , Dan Comment</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-facebook text-primary sr-icons"></i>
                        <h3>Facebook</h3>
                        <p class="text-muted">Menyediakan Layanan Followers , Like , Comment , DLL</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-youtube text-primary sr-icons"></i>
                        <h3>Youtube</h3>
                        <p class="text-muted">Menyediakan Layanan Subscribe , Like , Disslike , Dan View</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-twitter text-primary sr-icons"></i>
                        <h3>Tweeter</h3>
                        <p class="text-muted">Menyediakan Layanan Tweet , Followers DLL</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section id="apk">
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Download Aplikasi Androidnya Sekarang Juga !</h2>
                <a href="./BelumTersedia" class="btn btn-primary btn-xl page-scroll">Download Now!</a>
            </div>
        </div>
    </aside>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact US</h2>
                    <hr class="primary">
                    <p>Kurang Informasi ? Langsung Aja email / telpon ya - </p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p><?=$Site->nope;?></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:<?=$Site->email;?>"><?=$Site->email;?></a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="./cdn/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./cdn/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="./cdn/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="./cdn/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="./cdn/js/creative.min.js"></script>

</body>

</html>
