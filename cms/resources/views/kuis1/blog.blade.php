<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog - Indonesian Cultures Blog</title>
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
              <li class="nav-item"><a href="{{route('home')}}" class="nav-link ">Home</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link active">Blog</a>
              </li>
              <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link ">Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="container">
          <a><h3 class="h1">Kumpulan Artikel Terbaru</h3></a>
            <div class="row">
              <!-- post -->
              
              @foreach($cultures as $culture)
              <div class="post col-xl-6">
                <div class="post-thumbnail"><img src="{{$culture-> featured_image}}" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{$culture-> publish_at}}</div>
                    <div class="category"><a>{{$culture-> category}}</a></div>
                  </div>
                  <a href="/post/{{$culture->id}}"><h3 class="h4">{{$culture->title}}</h3></a>
                  <p class="text-muted">{{Str::limit($culture->intro, 100, '...')}} <a href="/post/{{$culture->id}}" class="text-dark">Lebih Detail</a></p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStt8Ue2ZBqbY1HGhCxwV_G6bh5-E3-ggkXAQ&usqp=CAU" alt="..." class="img-fluid"></div>
                      <div class="title"><span>{{$culture-> author}}</span></div></a>
                    <div class="date">{{$culture->publish_at}}</div>
                    <div class="comments meta-last">1 comments</div>
                  </footer>
                </div>
                <hr>
              </div>
              @endforeach
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-template d-flex justify-content-center">
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </main>
        <aside class="col-lg-4">
          <!-- Widget [Search Bar Widget]-->
          <div class="widget search">
            <header>
              <h3 class="h6">Search the blog</h3>
            </header>
            <form action="#" class="search-form">
              <div class="form-group">
                <input type="search" placeholder="Masukkan Kata Kunci">
                <button type="submit" class="submit">Go</button>
              </div>
            </form>
          </div>
          <!-- Widget [Categories Widget]-->
          <div class="widget categories">
            <header>
              <h3 class="h6">Categories</h3>
            </header>
            <div class="item d-flex justify-content-between"><a href="#">Kesenian</a><span>3</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tradisi</a><span>2</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Budaya</a><span>2</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tarian</a><span>1</span></div>
          </div>
          <!-- Widget [Tags Cloud Widget]-->
          <div class="widget tags">       
            <header>
              <h3 class="h6">Tags</h3>
            </header>
            <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="tag">#indonesiaku</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#lestarikan_budaya</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#bangga_jadi_indonesia</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#wonderful_indonesia</a></li>
              <li class="list-inline-item"><a href="#" class="tag">#indonesia_makmur</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
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