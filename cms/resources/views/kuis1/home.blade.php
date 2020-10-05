<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Indonesian Cultures Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="css/kuis1/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/kuis1/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/kuis1/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand -->
            <a class="navbar-brand"><img src="https://cmxpv89733.i.lithium.com/t5/image/serverpage/image-id/3032iB0DBA4C2FDFC60E1/image-size/large?v=1.0&px=999" width="120" height="45" class="d-inline-block align-top" alt=""></a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#" class="nav-link active">Home</a>
              </li>
              <li class="nav-item"><a href="{{route('blog')}}" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link ">Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <section style="background: url(img/bc1.jpg); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1 style="color: black;">Welcome To Indonesian Cultures Blog</h1><a href="{{route('blog')}}" class="hero-link"><strong>Kunjungi Blog</strong></a>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="h3">Budaya Indonesia</h2>
            <p class="text-big">Bicara soal <strong>budaya Indonesia</strong> tidak akan pernah ada habisnya. Keragamannya mulai dari agama, suku, etnis, tarian dan masih banyak lagi dan dari wilayah ke wilayah lainnya sudah berbeda adat istiadatnya. Hal ini juga yang sering <strong>menarik perhatian dunia</strong>. Wisatawan asing yang berkunjung ke indonesia pasti akan terkesan dengan keragaman budaya di indonesia ini.</p>
            <p class="text-big">Budaya di indonesia ini merupakan <strong>peninggalan dari nenek moyang</strong> yang harus kita jaga. <strong>Indonesia</strong> sendiri sudah terkenal akan keragaman budaya. Maka tidak heran jika warga negara asing justru banyak yang rela bersekolah kebudayaan indonesia dan menetap di indonesia. Kita sebagai warga negara indonesia harus<strong> bangga dan membantu untuk tetap melestarikannya</strong>.</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Gallery Section-->
    <section class="gallery no-padding">    
      <div class="row">
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-1-A.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-1-A.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-2-C.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-2-C.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-3-B.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-3-B.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-3-C.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-3-C.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
      </div>
    </section>
    
    <!-- Page Footer-->
    <footer class="py-4 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-light">Copyright &copy; Abdul Rahman Saleh 2020</p>
        <p class="m-0 text-center text-light">Pasuruan, Jawa Timur, Kode Pos 67156</p>
        <p class="m-0 text-center text-light">Phone: (+62) 812 3092 8718</p>
        <p class="m-0 text-center text-light">Email: <a href="mailto:1931710038@student.polinema.ac.id">1931710038@student.polinema.ac.id</a></p>
      </div>

    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>