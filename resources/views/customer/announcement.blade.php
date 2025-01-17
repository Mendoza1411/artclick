<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Announcements - ARTCLICK</title>
  <link rel="stylesheet" href="{{ asset('customer/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('customer/css/style.css') }}" />
  <style>
    .modal-dialog {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: calc(100vh - 1rem);
    }

    .modal-content {
      width: 80%;
      /* Adjust the width as needed */
      max-width: 600px;
      /* Maximum width */
      margin: auto;
      box-sizing: border-box;
      /* Apply box-sizing */
    }
  </style>
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
                <li>
                  <a href="{{ route('homepage') }}" class="sf-with-ul">Home</a>
                </li>
                <li>
                  <a href="{{ route('shop-category') }}" class="sf-with-ul">Shop</a>
                </li>
                <li>
                  <a href="{{ route('gallery') }}" class="sf-with-ul">Gallery</a>
                </li>

                <li>
                  <a href="{{ route('announcement') }}" class="sf-with-ul">Announcent</a>
                </li>
                <li class="megamenu-container active">
                  <a href="{{ route('about') }}" class="sf-with-ul">About</a>
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
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-cart-action">
                  <a href="cart.html" class="btn btn-primary">Account</a>
                  <a href="{{ route('signin') }}" class="btn btn-outline-primary-2"><span>Sign Up</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .dropdown-cart-total -->
              </div><!-- End .dropdown-menu -->
            </div>
            <!-- End .compare-dropdown -->

            <div class="dropdown cart-dropdown">
              <a href="{{ route('cart') }}" class="dropdown-toggle" role="button">
                <i class="icon-shopping-cart"></i>
              </a>


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

    <main class="main">
      <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
          <h1 class="page-title">Announcements</h1>
        </div>
      </div>

      <div class="page-content">
        <div class="container">
          <section class="announcements">
            <div class="announcement-list">
              <div class="announcement new-arrivals" data-toggle="modal" data-target="#announcementModal1">
                <div class="date">Today 03:00</div>
                <h3>NEW ARRIVAL!</h3>
                <p>Click to read more...</p>
              </div>

              <div class="announcement events" data-toggle="modal" data-target="#announcementModal2">
                <div class="date">Today 03:00</div>
                <h3>Exhibition</h3>
                <p>Click to read more...</p>
              </div>

              <div class="announcement new-arrivals" data-toggle="modal" data-target="#announcementModal3">
                <div class="date">Today 03:00</div>
                <h3>New Items Soon!</h3>
                <p>Click to read more...</p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-about">
                <img src="assets/images/logo.png" class="footer-logo" alt="Footer Logo" width="105" height="25" />
                <p>
                  Asiano's Arts and Crafts offers handmade creations
                  by skills artisan, showcasing authentic, high-quality
                  products that blend traditon and creativity.
                </p>

                <div class="social-icons">
                  <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                  <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                  <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                  <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                  <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
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
                  <li><a href="about.html">About Molla</a></li> <!-- wala pang html ito-->
                  <li><a href="faq.html">FAQ</a></li>
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
                <h4 class="widget-title">My Account</h4>
                <!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="login.html">Sign In</a></li>
                  <li><a href="cart.html">View Cart</a></li>
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
    </footer><!-- End .footer -->
  </div>

  <button id="scroll-top" title="Back to Top">
    <i class="icon-arrow-up"></i>
  </button>

  <!-- Modals -->
  <div class="modal fade" id="announcementModal1" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="announcementModalLabel1">NEW ARRIVAL!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <img src="{{ asset('customer/images/items/item1.jpg') }} " alt="New Arrival Image" class="announcement-image">
          <p>We have officially launched our new collection. Check it out now!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="announcementModal2" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="announcementModalLabel2">Exhibition</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Join us for an exclusive exhibition of our latest artworks.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="announcementModal3" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel3"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="announcementModalLabel3">New Items Soon!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Stay tuned for our upcoming collection of unique items.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('customer/js/jquery.min.js') }}"></script>
  <script src="{{ asset('customer/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('customer/js/main.js') }}"></script>
</body>

</html>