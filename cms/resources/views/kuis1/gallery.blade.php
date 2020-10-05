<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery - Indonesian Cultures Blog</title>
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
              <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a>
              </li>
              <li class="nav-item"><a href="{{route('blog')}}" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link active">Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Latest Posts -->
    <!--<section class="latest-posts">--> 
      <div style="margin-top: 25px;">
      <div class="container">
        <h2>Gallery</h2>
        <header> 
          <p class="text-big">Budaya Indonesia</p>
        </header>
        <div class="row">
          @foreach($cultures as $culture)
          <div class="post col-md-4">
          <div class="item"><a href="{{$culture->featured_image}}" data-fancybox="gallery" class="image"><img src="{{$culture->featured_image}}" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
            
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">{{$culture-> publish_at}}</div>
                <div class="category">{{$culture-> category}}</div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
      </div>
    <!--</section>-->
    <!-- Gallery Section-->
    <section class="gallery no-padding">    
      <div class="row">
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-1-C.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-1-C.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-2-D.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-2-D.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-3-A.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-3-A.jpg" alt="..." class="img-fluid">
              <div class="overlay d-flex align-items-center justify-content-center"></div></a></div>
        </div>
        <div class="mix col-lg-3 col-md-3 col-sm-6">
          <div class="item"><a href="img/gambar-1-B.jpg" data-fancybox="gallery" class="image"><img src="img/gambar-1-B.jpg" alt="..." class="img-fluid">
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