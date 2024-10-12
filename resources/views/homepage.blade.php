<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>ArtClick</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Molla - Bootstrap eCommerce Template" />
    <meta name="author" content="p-themes" />
    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="{{ asset('customer/images/icons/apple-touch-icon.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="{{ asset('customer/images/icons/favicon-32x32.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('customer/images/icons/favicon-16x16.png') }}"
    />
    <link rel="manifest" href="{{ asset('customer/images/icons/site.html') }}" />
    <link
      rel="mask-icon"
      href="{{ asset('customer/images/icons/safari-pinned-tab.svg') }}"
      color="#666666"
    />
    <link rel="shortcut icon" href="{{ asset('customer/images/icons/favicon.ico') }}" />
    <meta name="apple-mobile-web-app-title" content="Molla" />
    <meta name="application-name" content="Molla" />
    <meta name="msapplication-TileColor" content="#cc9966" />
    <meta
      name="msapplication-config"
      content="{{ asset('assets/images/icons/browserconfig.xml') }}"
    />
    <meta name="theme-color" content="#ffffff" />
    <link
      rel="stylesheet"
      href="{{ asset('customer/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}"
    />
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('customer/css/bootstrap.min.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('customer/css/plugins/owl-carousel/owl.carousel.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('customer/css/plugins/magnific-popup/magnific-popup.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('customer/css/plugins/jquery.countdown.css') }}" />
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('customer/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/css/skins/skin-demo-2.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/css/demos/demo-2.css') }}" />
  </head>

  <body>
    <div class="page-wrapper">
      <header class="header header-2 header-intro-clearance">
        <div class="header-top">
          <div class="container">
            <div class="header-right">
              <ul class="top-menu">
                <li>
                  <a href="#">Links</a>
                  <ul>
                    <li></li>
                    <li></li>
                    <li>
                      <a href="#signin-modal" data-toggle="modal"
                        >Sign in / Sign up</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- End .top-menu -->
            </div>
            <!-- End .header-right -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-top -->

        <div class="header-middle">
          <div class="container">
            <div class="header-left">
              <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
              </button>
              <a href="index.html" class="logo">
                <img
                  src="{{ asset('customer/images/demos/demo-2/logo.png') }}"
                  alt="Molla Logo"
                  width="105"
                  height="25"
                />
              </a>
            </div>
            <!-- End .header-left -->

            <div class="header-center">
              <div
                class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block"
              >
                <a href="#" class="search-toggle" role="button"
                  ><i class="icon-search"></i
                ></a>
                <form action="#" method="get">
                  <div class="header-search-wrapper search-wrapper-wide">
                    <label for="q" class="sr-only">Search</label>
                    <input
                      type="search"
                      class="form-control"
                      name="q"
                      id="q"
                      placeholder="Search product ..."
                      required
                    />
                    <button class="btn btn-primary" type="submit">
                      <i class="icon-search"></i>
                    </button>
                  </div>
                  <!-- End .header-search-wrapper -->
                </form>
              </div>
              <!-- End .header-search -->
            </div>

            <div class="header-right">
              <div class="account">
                <a href="dashboard.html" title="My account">
                  <div class="icon">
                    <i class="icon-user"></i>
                  </div>
                  <p>Account</p>
                </a>
              </div>

              <div class="dropdown cart-dropdown">
                <a
                  href="#"
                  class="dropdown-toggle"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  data-display="static"
                >
                  <div class="icon">
                    <i class="icon-shopping-cart"></i>
                    <span class="cart-count">2</span>
                  </div>
                  <p>Cart</p>
                </a>
              </div>
              <!-- End .dropdown-menu -->
            </div>
            <!-- End .header-right -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-middle -->

        <div class="header-bottom sticky-header">
          <div class="container">
            <div class="header-left"></div>
            <!-- End .header-left -->

            <div class="header-center">
              <nav class="main-nav">
                <ul class="menu">
                  <li class="active">
                    <a href="index-1.html" class="sf-with-ul">HOME</a>
                  </li>
                  <li>
                    <a href="category-fullwidth.html" class="sf-with-ul"
                      >SHOP</a
                    >
                  </li>
                  <li>
                    <a href="index-7.html" class="sf-with-ul">GALLERY</a>
                  </li>
                  <li>
                    <a href="blog-mask-masonry.html" class="sf-with-ul">ANNOUNCEMENT</a>
                    <ul>
                      <li><a href="contact.html" class="sf-with-ul">ABOUT</a></li>
                      <li><a href="contact.html" class="sf-with-ul">CONTACT</a></li>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="faq.html">FAQs</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="contact.html" class="sf-with-ul">ABOUT</a>
                    
                  </li>
                  <li>
                    <a href="contact.html" class="sf-with-ul">CONTACT</a>
                  </li>
                </ul>
                <!-- End .menu -->
              </nav>
              <!-- End .main-nav -->
            </div>
            <!-- End .header-center -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-bottom -->
      </header>
      <!-- End .header -->

      <main class="main">
        <div class="intro-slider-container">
          <div
            class="owl-carousel owl-simple owl-light owl-nav-inside"
            data-toggle="owl"
            data-owl-options='{"nav": false}'
          >
            <div
              class="intro-slide"
            >
              <div class="container intro-content">
                <p class="intro-subtitle">Express your art with handmade art</p>
                <!-- End .h3 intro-subtitle -->
                <h4 class="intro-title">
                  Enhance your space with unique handmade <br />
                  art and unique crafts that showcase your style <br />
                  and add character.
                </h4>
                <!-- End .intro-title -->

                <a href="login.html" class="btn btn-primary">
                  <span>Sign Up</span>
                  <i class="icon-long-arrow-right"></i>
                </a>
              </div>
            </div>
            <!-- End .intro-slide -->
          </div>
          <!-- End .owl-carousel owl-simple -->
          <span class="slider-loader text-white"></span
          ><!-- End .slider-loader -->
        </div>
        <!-- End .intro-slider-container -->

        <!-- Category Title -->
<h2 class="category-title">CATEGORY</h2>

<!-- Subtitle -->
<h3 class="category-subtitle">Explore our wide range of categories</h3>

<!--start product category-->
<section class="category-section">
  <a href="product.html"  class="category-card">
    <img src="{{ asset('customer/images/items/item4.jpg') }}" alt="Category Image" />
    <h3>Wooden</h3>
    <p>Short description or subtext</p>
    
    <div class="ratings-container">
      <div class="ratings">
        <div class="ratings-val" style="width: 79%"></div>
        <!-- End .ratings-val -->
      </div>
      <!-- End .ratings -->
      <span class="ratings-text">( 79k Reviews )</span>
    </div>
    <!-- End .rating-container -->
  </a>
  <a href="product.html" class="category-card">
    <img src="{{ asset('customer/images/items/item2.jpg') }}" alt="Category Image" />
    <h3>Furnitures</h3>
    <p>Short description or subtext</p>

    <div class="ratings-container">
      <div class="ratings">
        <div class="ratings-val" style="width: 79%"></div>
        <!-- End .ratings-val -->
      </div>
      <!-- End .ratings -->
      <span class="ratings-text">( 79k Reviews )</span>
    </div>
    <!-- End .rating-container -->
  </a>
  <a href="product.html"  class="category-card">
    <img src="{{ asset('customer/images/items/item3.jpg') }}" alt="Category Image" />
    <h3>Decorations</h3>
    <p>Short description or subtext</p>
    <div class="ratings-container">
      <div class="ratings">
        <div class="ratings-val" style="width: 79%"></div>
        <!-- End .ratings-val -->
      </div>
      <!-- End .ratings -->
      <span class="ratings-text">( 79k Reviews )</span>
    </div>
    <!-- End .rating-container -->
    </a>
  <a href="product.html"  class="category-card">
    <img src="{{ asset('customer/images/items/item2.jpg') }}" alt="Category Image" />
    <h3>Accessories</h3>
    <p>Short description or subtext</p>
    <div class="ratings-container">
      <div class="ratings">
        <div class="ratings-val" style="width: 79%"></div>
        <!-- End .ratings-val -->
      </div>
      <!-- End .ratings -->
      <span class="ratings-text">( 79k Reviews )</span>
    </div>
    <!-- End .rating-container -->
  <a>
  <a href="product.html" class="category-card">
    <img src="{{ asset('customer/images/items/item3.jpg') }}" alt="Category Image" />
    <h3>Gift</h3>
    <p>Short description or subtext</p>
    <div class="ratings-container">
      <div class="ratings">
        <div class="ratings-val" style="width: 79%"></div>
        <!-- End .ratings-val -->
      </div>
      <!-- End .ratings -->
      <span class="ratings-text">( 79k Reviews )</span>
    </div>
    <!-- End .rating-container --> 
</a>
</section>
 <!--end product category-->

       
        <div
          class="brands-border owl-carousel owl-simple"
          data-toggle="owl"
          data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'
        ></div>
        <!-- End .brands-border -->

        <div class="mb-3"></div>
        <!-- End .mb-6 -->

        <div class="container-fluid">
          <div class="tab-content tab-content-carousel">
            <div
              class="tab-pane p-0 fade show active"
              id="products-featured-tab"
              role="tabpanel"
              aria-labelledby="products-featured-link"
            >
              <div
                class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                data-toggle="owl"
                data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'
              ></div>
              <!-- End .owl-carousel -->
            </div>
            <!-- .End .tab-pane -->
          </div>
          <!-- End .tab-content -->
        </div>
        <!-- End .container-fluid -->

        <div class="mb-5"></div>
        <!-- End .mb-5 -->
      </main> 
      <!-- End .main -->

      <!-- Plugins JS File -->
      <script src="{{ asset('customer/js/jquery.min.js') }}"></script>
      <script src="{{ asset('customer/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('customer/js/jquery.hoverIntent.min.js') }}"></script>
      <script src="{{ asset('customer/js/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('customer/js/superfish.min.js') }}"></script>
      <script src="{{ asset('customer/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('customer/js/jquery.plugin.min.js') }}"></script>
      <script src="{{ asset('customer/js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('customer/js/jquery.countdown.min.js') }}"></script>
      <!-- Main JS File -->
      <script src="{{ asset('customer/js/main.js') }}"></script>
      <script src="{{ asset('customer/js/demos/demo-2.js') }}"></script>
    </div>
    <!-- End .page-wrapper -->
  </body>
</html>
