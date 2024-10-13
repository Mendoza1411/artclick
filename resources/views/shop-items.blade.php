<!DOCTYPE html>
<html lang="en">
<!-- molla/category-fullwidth.html  22 Nov 2019 10:03:02 GMT -->

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>ARTCLICK</title>
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Molla - Bootstrap eCommerce Template" />
  <meta name="author" content="p-themes" />
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="customer/images/icons/apple-touch-icon.png') }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('customer/images/icons/favicon-32x32.png') }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('customer/images/icons/favicon-16x16.png') }}" />
  <link rel="manifest" href="{{ asset('customer/images/icons/site.html') }}" />
  <link rel="mask-icon" href="{{ asset('customer/images/icons/safari-pinned-tab.svg') }}" color="#666666" />
  <link rel="shortcut icon" href="{{ asset('customer/images/icons/favicon.ico') }}" />
  <meta name="apple-mobile-web-app-title" content="Molla" />
  <meta name="application-name" content="Molla" />
  <meta name="msapplication-TileColor" content="#cc9966" />
  <meta name="msapplication-config" content="{{ asset('customer/images/icons/browserconfig.xml') }}" />
  <meta name="theme-color" content="#ffffff" />
  <!-- Plugins CSS File -->
  <link rel="stylesheet" href="{{ asset('customer/css/bootstrap.min.css') }}" />
  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{ asset('customer/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('customer/css/plugins/owl-carousel/owl.carousel.css') }}" />
  <link rel="stylesheet" href="{{ asset('customer/css/plugins/magnific-popup/magnific-popup.css') }}" />
  <link rel="stylesheet" href="{{ asset('customer/css/plugins/nouislider/nouislider.css') }}" />
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
                <li  class="megamenu-container active">
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
      <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container-fluid">
          <h1 class="page-title">TURTLE GIFT<span>Category</span></h1>
        </div>
        <!-- End .container-fluid -->
      </div>
      <!-- End .page-header -->
      <br />

      <div class="page-content">
        <div class="container-fluid">
          <div class="toolbox">



          </div>
          <!-- End .toolbox-center -->

        </div>
        <!-- End .toolbox-right -->
      </div>
      <!-- End .toolbox -->

      <div class="products">
        <div class="row">
          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="product">
              <figure class="product-media">
                <a href="product.html">
                  <!-- img item -->
                  <img src="{{ asset('customer/images/items/item2.jpg') }}" alt="Product image" class="product-image" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">WOODEN CARVES</a>
                  <!-- ilagay sa # ang link na under ng wooden carves-->
                </div>
                <!-- End .product-cat -->
                <h3 class="product-title">
                  <a href="product.html">ITEM 1</a>
                </h3>

                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 67%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 119 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                  <a href="#" style="background: #cc9966"><span class="sr-only">Color name</span></a>
                  <a href="#" class="active" style="background: #ebebeb"><span class="sr-only">Color name</span></a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>

            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div class="col-6 col-md-4 col-lg-4 col-xl-3">
            <div class="product">
              <figure class="product-media">
                <a href="{{ asset('customer/images/items/item1.jpeg') }}">
                  <!--img item for wooden carves-->
                  <img src="{{ asset('customer/images/items/item3.jpg') }}" alt="Product image" class="product-image" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">FURNITURE</a>
                </div>
                <!-- End .product-cat -->
                <h3 class="product-title">
                  <a href="product.html">ITEM 2 </a>
                </h3>
                <!-- End .product-title -->
                <div class="product-price">$32.00</div>
                <!-- End .product-price -->
                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 80%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 11 Reviews )</span>
                </div>
                <!-- End .rating-container -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="product">
              <figure class="product-media">
                <a href="product.html">
                  <img src="{{ asset('customer/images/items/item2.jpg') }}" alt="Product image" class="product-image" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">DECORATIONS</a>
                </div>
                <!-- End .product-cat -->
                <h3 class="product-title">
                  <a href="product.html">ITEM 3</a>
                </h3>
                <!-- End .product-title -->
                <div class="product-price">
                  <span class="new-price">$50.00</span>
                  <span class="old-price">$84.00</span>
                </div>
                <!-- End .product-price -->
                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 40%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 4 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                  <a href="#" class="active" style="background: #cc9966"><span class="sr-only">Color name</span></a>
                  <a href="#" style="background: #7fc5ed"><span class="sr-only">Color name</span></a>
                  <a href="#" style="background: #e8c97a"><span class="sr-only">Color name</span></a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="product">
              <figure class="product-media">
                <a href="product.html">
                  <img src="{{ asset('customer/images/items/item3.jpg') }}" alt="Product image" class="product-image" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">ACCESSORIES</a>
                </div>
                <!-- End .product-cat -->
                <h3 class="product-title">
                  <a href="product.html"> ITEM 4</a>
                </h3>
                <!-- End .product-title -->
                <div class="product-price">$60.00</div>
                <!-- End .product-price -->
                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 20%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 2 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                  <a href="#" class="active" style="background: #cc9966"><span class="sr-only">Color name</span></a>
                  <a href="#" style="background: #333333"><span class="sr-only">Color name</span></a>
                  <a href="#" style="background: #7b5d36"><span class="sr-only">Color name</span></a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="product">
              <figure class="product-media">
                <a href="product.html">
                  <img src="{{ asset('customer/images/items/item3.jpg') }}" alt="Product image" class="product-image" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">GIFT</a>
                </div>
                <!-- End .product-cat -->
                <h3 class="product-title">
                  <a href="product.html">ITEM 5</a>
                </h3>
                <!-- End .product-title -->
                <div class="product-price">$84.00</div>
                <!-- End .product-price -->
                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 0%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 0 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                  <a href="#" style="background: #ebebeb"><span class="sr-only">Color name</span></a>
                  <a href="#" class="active" style="background: #eabc4e"><span class="sr-only">Color name</span></a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="product">
              <figure class="product-media">
                <a href="product.html">
                  <img src="{{ asset('customer/images/items/item2.jpg') }}" alt="Product image" class="product-image" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">GIFT</a>
                </div>
                <!-- End .product-cat -->
                <h3 class="product-title">
                  <a href="product.html">ITEM 6</a>
                </h3>
                <!-- End .product-title -->
                <div class="product-price">$84.00</div>
                <!-- End .product-price -->
                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 0%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 0 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                  <a href="#" style="background: #ebebeb"><span class="sr-only">Color name</span></a>
                  <a href="#" class="active" style="background: #eabc4e"><span class="sr-only">Color name</span></a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="product">
              <figure class="product-media">
                <a href="product.html">
                  <img src="{{ asset('customer/images/items/item4.jpg') }}" alt="Product image" class="product-image" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">GIFT</a>
                </div>
                <!-- End .product-cat -->
                <h3 class="product-title">
                  <a href="product.html">ITEM 7</a>
                </h3>
                <!-- End .product-title -->
                <div class="product-price">$84.00</div>
                <!-- End .product-price -->
                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 0%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 0 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                  <a href="#" style="background: #ebebeb"><span class="sr-only">Color name</span></a>
                  <a href="#" class="active" style="background: #eabc4e"><span class="sr-only">Color name</span></a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->
          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="product">
              <figure class="product-media">
                <a href="product.html">
                  <img src="{{ asset('customer/images/items/item3.jpg') }}" alt="Product image" class="product-image" />
                </a>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->

              <div class="product-body">
                <div class="product-cat">
                  <a href="#">GIFT</a>
                </div>
                <!-- End .product-cat -->
                <h3 class="product-title">
                  <a href="product.html">ITEM 8</a>
                </h3>
                <!-- End .product-title -->
                <div class="product-price">$84.00</div>
                <!-- End .product-price -->
                <div class="ratings-container">
                  <div class="ratings">
                    <div class="ratings-val" style="width: 0%"></div>
                    <!-- End .ratings-val -->
                  </div>
                  <!-- End .ratings -->
                  <span class="ratings-text">( 0 Reviews )</span>
                </div>
                <!-- End .rating-container -->

                <div class="product-nav product-nav-dots">
                  <a href="#" style="background: #ebebeb"><span class="sr-only">Color name</span></a>
                  <a href="#" class="active" style="background: #eabc4e"><span class="sr-only">Color name</span></a>
                </div>
                <!-- End .product-nav -->
              </div>
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div>
            <div class="product">
              <figure class="product-media">
                <span class="product-label label-out">Out of stock</span>

                <div class="product-action-vertical">
                  <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                </div>
                <!-- End .product-action -->

                <div class="product-action action-icon-top">
                  <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                  <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick
                      view</span></a>
                  <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                </div>
                <!-- End .product-action -->
              </figure>
              <!-- End .product-media -->
              <!-- End .product-body -->
            </div>
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <!-- End .product -->
          </div>
          <!-- End .col-sm-6 col-lg-4 col-xl-3 -->

          <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">

          </div>
          <!-- End .product -->
        </div>
        <!-- End .col-sm-6 col-lg-4 col-xl-3 -->


      </div>
      <!-- End .col-sm-6 col-lg-4 col-xl-3 -->


  </div>
  <!-- End .col-sm-6 col-lg-4 col-xl-3 -->




  <!-- End .load-more-container -->
  </div>
  <!-- End .products -->

  <div class="sidebar-filter-overlay"></div>
  <!-- End .sidebar-filter-overlay -->

  </aside>
  <!-- End .sidebar-filter -->
  </div>
  <!-- End .container-fluid -->
  </div>
  <!-- End .page-content -->
  </main>
  <!-- End .main -->


  </div>
  <!-- End .page-wrapper -->
  <button id="scroll-top" title="Back to Top">
    <i class="icon-arrow-up"></i>
  </button>

  <!-- Mobile Menu -->
  <div class="mobile-menu-overlay"></div>
  <!-- End .mobil-menu-overlay -->

  <div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
      <span class="mobile-menu-close"><i class="icon-close"></i></span>

      <form action="#" method="get" class="mobile-search">
        <label for="mobile-search" class="sr-only">Search</label>
        <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
          required />
        <button class="btn btn-primary" type="submit">
          <i class="icon-search"></i>
        </button>
      </form>

      <nav class="mobile-nav">
        <ul class="mobile-menu">
          <li class="active">
            <a href="index-1.html">Home</a>
          </li>

          <li>
            <a href="product.html" class="sf-with-ul">Product</a>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li>
                <a href="contact.html">About</a>
                <a href="contact.html">Contact</a>
              </li>
              <li>
                <a href="contact.html">Contact</a>
              </li>
              <li><a href="faq.html">FAQs</a></li>
            </ul>
          </li>
          <li>

          </li>
          <li>
            <a href="elements-list.html">Elements</a>
            <ul>
              <li><a href="elements-products.html">Products</a></li>
              <li><a href="elements-typography.html">Typography</a></li>
              <li><a href="elements-titles.html">Titles</a></li>
              <li><a href="elements-banners.html">Banners</a></li>
              <li>
                <a href="elements-product-category.html">Product Category</a>
              </li>
              <li><a href="elements-video-banners.html">Video Banners</a></li>
              <li><a href="elements-buttons.html">Buttons</a></li>
              <li><a href="elements-accordions.html">Accordions</a></li>
              <li><a href="elements-tabs.html">Tabs</a></li>
              <li><a href="elements-testimonials.html">Testimonials</a></li>
              <li><a href="elements-blog-posts.html">Blog Posts</a></li>
              <li><a href="elements-portfolio.html">Portfolio</a></li>
              <li><a href="elements-cta.html">Call to Action</a></li>
              <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End .mobile-nav -->

      <div class="social-icons">
        <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
      </div>
      <!-- End .social-icons -->
    </div>
    <!-- End .mobile-menu-wrapper -->
  </div>
  <!-- End .mobile-menu-container -->

  <!-- Sign in / Register Modal -->

  <div style="margin-top: 30px"></div>
  <!-- End .modal -->
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
  <script src="{{ asset('customer/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('customer/js/jquery.hoverIntent.min.js') }}"></script>
  <script src="{{ asset('customer/js/jquery.min.js') }}"></script>
  <script src="{{ asset('customer/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('customer/js/superfish.min.js') }}"></script>
  <script src="{{ asset('customer/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('customer/js/wNumb.js') }}"></script>
  <script src="{{ asset('customer/js/bootstrap-input-spinner.js') }}"></script>
  <script src="{{ asset('customer/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('customer/js/nouislider.min.js') }}"></script>
  <!-- Main JS File -->
  <script src="{{ asset('customer/js/main.js') }}"></script>
</body>

<!-- molla/category-fullwidth.html  22 Nov 2019 10:03:02 GMT -->

</html>