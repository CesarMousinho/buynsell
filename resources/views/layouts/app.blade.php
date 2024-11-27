<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Organic - Grocery Store HTML Website Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css') }}">
  <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{url('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{url('style.css') }}">
  <link rel="stylesheet" href="http://localhost/css/_Login.css">

  <link rel="preconnect" href="{{url('https://fonts.googleapis.com') }}">
  <link rel="preconnect" href="{{url('https://fonts.gstatic.com') }}" crossorigin>
  <link href="{{url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap') }}" rel="stylesheet">




  <style>
    .preloader-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.9);
      z-index: 1050;
      display: flex;
      justify-content: center;
      align-items: center;
      visibility: visible;
      opacity: 1;
      transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }

    .preloader-wrapper.hidden {
      visibility: hidden;
      opacity: 0;
    }
  </style>


</head>
<header>
  <div class="container-fluid">
    <div class="row py-3 border-bottom">

      <div class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
        <div class="d-flex align-items-center my-3 my-sm-0">
          <a href="index.html">
            <img src="{{ url('images/logo.svg')}}" alt="logo" class="img-fluid">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <svg width="24" height="24" viewBox="0 0 24 24">
            <use link:href="carrinhoicon"></use>
          </svg>
        </button>
      </div>

      <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4">
        <div class="search-bar row bg-light p-2 rounded-4">
          <div class="col-md-4 d-none d-md-block">
            <select class="form-select border-0 bg-transparent">
              <option>All Categories</option>
              <option>Groceries</option>
              <option>Drinks</option>
              <option>Chocolates</option>
            </select>
          </div>
          <div class="col-11 col-md-7">
            <form id="search-form" class="text-center" action="index.html" method="post">
              <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 20,000 products">
            </form>
          </div>
          <div class="col-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z"></path>
            </svg>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
          <li class="nav-item active">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle pe-3" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu border-0 p-3 rounded-0 shadow" aria-labelledby="pages">
              <li><a href="{{ url('/feed/categoria') }}" class="dropdown-item">Categorias </a></li>
              <li><a href="index.html" class="dropdown-item">Shop </a></li>
              <li><a href="index.html" class="dropdown-item">Single Product </a></li>
              <li><a href="index.html" class="dropdown-item">Cart </a></li>
              <li><a href="index.html" class="dropdown-item">Checkout </a></li>
              <li><a href="index.html" class="dropdown-item">Blog </a></li>
              <li><a href="index.html" class="dropdown-item">Single Post </a></li>
              <li><a href="index.html" class="dropdown-item">Styles </a></li>
              <li><a href="index.html" class="dropdown-item">Contact </a></li>
              <li><a href="index.html" class="dropdown-item">Thank You </a></li>
              <li><a href="index.html" class="dropdown-item">My Account </a></li>
              <li><a href="index.html" class="dropdown-item">404 Error </a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
        <ul class="d-flex justify-content-end list-unstyled m-0">
          <li>
            <a href="http://localhost/buynsell/public/login" class="p-2 mx-3">
              <img src="{{ url('images/caneta-do-usuario.svg')}}" alt="Usuario">
            </a>
          </li>
          <li>
            <a href="#" class="p-2 mx-3">
              <img src="{{ url('images/caixa-alt.svg')}}" alt="">
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</header>

<body>


  <div class="section">
    @yield('content')
  </div>




  <footer class="py-5">
    <div class="container-lg">
      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <img src="images/logo.svg" width="240" height="70" alt="logo">
            <div class="social-links mt-3">
              <ul class="d-flex list-unstyled gap-2">
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#youtube"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#amazon"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Organic</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">About us</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Conditions </a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Our Journals</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Careers</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Affiliate Programme</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Ultras Press</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Quick Links</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">Offers</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Discount Coupons</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Stores</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Track Order</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Shop</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Info</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Customer Service</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">FAQ</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Privacy Policy</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Returns & Refunds</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Cookie Guidelines</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Delivery Information</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Subscribe Us</h5>
            <p>Subscribe to our newsletter to get updates about our grand offers.</p>
            <form class="d-flex mt-3 gap-0" action="index.html">
              <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="Email Address" aria-label="Email Address">
              <button class="btn btn-dark rounded-end rounded-0" type="submit">Subscribe</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <div id="footer-bottom">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-6 copyright">
          <p>© 2024 Organic. All rights reserved.</p>
        </div>
        <div class="col-md-6 credit-link text-start text-md-end">
          <p>HTML Template by <a href="{{ url('https://templatesjungle.com/') }}">TemplatesJungle</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a> </p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ url('js/jquery-1.11.0.min.js') }}"></script>
  <script src="{{ url('https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="{{ url('js/plugins.js') }}"></script>
  <script src="{{ url('js/script.js') }}"></script>


  @section('js')
  document.addEventListener('DOMContentLoaded', function () {
  setTimeout(() => {
  document.querySelector('.preloader-wrapper').classList.add('hidden');
  }, 1500); // Esconde após 1.5 segundos
  });

  @endsection


</body>

</html>