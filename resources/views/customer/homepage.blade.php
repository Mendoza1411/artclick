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
    <header class="header">
      <div class="header-top">
        <div class="container"></div>
        <!-- End .container -->
      </div>
      <!-- End .header-top -->

      <div class="header-middle sticky-header">
        <div class="container">
          <div class="header-left">
            <button class="mobile-menu-toggler">
              <span class="sr-only">Toggle mobile menu</span>
              <i class="icon-bars"></i>
            </button>

            <a href="index-1.html" class="logo">
              <img
                src="{{ asset('customer/images/logo.png') }}"
                alt="Molla Logo"
                width="105"
                height="25" />
            </a>

            <nav class="main-nav">
              <ul class="menu sf-arrows">
                <li class="megamenu-container active">
                  <a href="{{ route('homepage') }}" class="sf-with-ul">Home</a>
                </li>
                <li>
                  <a href="{{ route('shop-category') }}" class="sf-with-ul">Shop</a>
                </li>
                <li>
                  <a href="product.html" class="sf-with-ul">Gallery</a>
                </li>

                <li>
                  <a href="blog.html" class="sf-with-ul">Announcent</a>
                </li>
                <li>
                  <a href="elements-list.html" class="sf-with-ul">About</a>
                </li>
                <li>
                  <a href="{{ route('contact') }}" class="sf-with-ul">Contact</a>
                </li>
              </ul>

              <!-- End .menu -->
            </nav>
            <!-- End .main-nav -->
          </div>
          <!-- End .header-left -->

          <div class="header-right">
            <div class="header-search">
              <a href="#" class="search-toggle" role="button" title="Search"><i
                  class="icon-search"></i></a>
              <form action="#" method="get">
                <div class="header-search-wrapper">
                  <label for="q" class="sr-only">Search</label>
                  <input type="search" class="form-control" name="q" id="q" placeholder="Search in..."
                    required />
                </div>
                <!-- End .header-search-wrapper -->
              </form>
            </div>
            <!-- End .header-search -->
            <div class="dropdown compare-dropdown">
              <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-display="static"
                title="Account" aria-label="Compare Products">
                <i class="icon-user"></i>
              </a>

            </div>
            <!-- End .compare-dropdown -->

            <div class="dropdown cart-dropdown">
              <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-display="static">
                <i class="icon-shopping-cart"></i>

              </a>

              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-cart-products">
                  <div class="product">
                    <div class="product-cart-details">
                      <h4 class="product-title">
                        <a href="product.html">Beige knitted elastic runner shoes</a>
                      </h4>

                      <span class="cart-product-info">
                        <span class="cart-product-qty">1</span>
                        x $84.00
                      </span>
                    </div>
                    <!-- End .product-cart-details -->

                    <figure class="product-image-container">
                      <a href="product.html" class="product-image">
                        <img src="assets/images/products/cart/product-1.jpg" alt="product" />
                      </a>
                    </figure>
                    <a href="#" class="btn-remove" title="Remove Product"><i
                        class="icon-close"></i></a>
                  </div>
                  <!-- End .product -->

                  <div class="product">
                    <div class="product-cart-details">
                      <h4 class="product-title">
                        <a href="product.html">Blue utility pinafore denim dress</a>
                      </h4>

                      <span class="cart-product-info">
                        <span class="cart-product-qty">1</span>
                        x $76.00
                      </span>
                    </div>
                    <!-- End .product-cart-details -->

                    <figure class="product-image-container">
                      <a href="product.html" class="product-image">
                        <img src="assets/images/products/cart/product-2.jpg" alt="product" />
                      </a>
                    </figure>
                    <a href="#" class="btn-remove" title="Remove Product"><i
                        class="icon-close"></i></a>
                  </div>
                  <!-- End .product -->
                </div>
                <!-- End .cart-product -->

                <div class="dropdown-cart-total">
                  <span>Total</span>

                  <span class="cart-total-price">$160.00</span>
                </div>
                <!-- End .dropdown-cart-total -->

                <div class="dropdown-cart-action">
                  <a href="cart.html" class="btn btn-primary">View Cart</a>
                  <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                      class="icon-long-arrow-right"></i></a>
                </div>
                <!-- End .dropdown-cart-total -->
              </div>
              <!-- End .dropdown-menu -->
            </div>
            <!-- End .cart-dropdown -->
          </div>
          <!-- End .header-right -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .header-middle -->
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
      <footer class="footer">
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-about">
                <img
                  src="{{ asset('customer/images/logo.png') }}"
                  class="footer-logo"
                  alt="Footer Logo"
                  width="105"
                  height="25" />

                <p>
                  Praesent dapibus, neque id cursus ucibus, tortor neque
                  egestas augue, eu vulputate magna eros eu erat.
                </p>

                <div class="social-icons">
                  <a
                    href="#"
                    class="social-icon"
                    target="_blank"
                    title="Facebook"><i class="icon-facebook-f"></i></a>
                  <a
                    href="#"
                    class="social-icon"
                    target="_blank"
                    title="Twitter"><i class="icon-twitter"></i></a>
                  <a
                    href="#"
                    class="social-icon"
                    target="_blank"
                    title="Instagram"><i class="icon-instagram"></i></a>
                  <a
                    href="#"
                    class="social-icon"
                    target="_blank"
                    title="Youtube"><i class="icon-youtube"></i></a>
                  <a
                    href="#"
                    class="social-icon"
                    target="_blank"
                    title="Pinterest"><i class="icon-pinterest"></i></a>
                </div>
                <!-- End .soial-icons -->
              </div>
              <!-- End .widget about-widget -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">Useful Links</h4>
                <!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="about.html">About Molla</a></li>
                  <li><a href="#">How to shop on Molla</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                  <li><a href="login.html">Log in</a></li>
                </ul>
                <!-- End .widget-list -->
              </div>
              <!-- End .widget -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">Customer Service</h4>
                <!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="#">Payment Methods</a></li>
                  <li><a href="#">Money-back guarantee!</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="#">Shipping</a></li>
                  <li><a href="#">Terms and conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
                <!-- End .widget-list -->
              </div>
              <!-- End .widget -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">My Account</h4>
                <!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="#">Sign In</a></li>
                  <li><a href="cart.html">View Cart</a></li>
                  <li><a href="#">My Wishlist</a></li>
                  <li><a href="#">Track My Order</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
                <!-- End .widget-list -->
              </div>
              <!-- End .widget -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->
          </div>
          <!-- End .row -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .footer-middle -->

      <div class="footer-bottom">
        <div class="container">
          <p class="footer-copyright">
            Copyright © 2019 Molla Store. All Rights Reserved.
          </p>
          <!-- End .footer-copyright -->
          <figure class="footer-payments">
            <img
              src="{{ asset('Customer/images/payments.png') }}"
              alt="Payment methods"
              width="272"
              height="20" />
          </figure>
          <!-- End .footer-payments -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .footer-bottom -->
    </footer>
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
