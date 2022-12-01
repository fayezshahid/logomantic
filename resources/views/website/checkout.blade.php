<!doctype html>
<html lang="zxx" class="theme-light">
    
<head>
        <!-- Required meta tags -->
        <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Playball&family=Poppins&display=swap" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Odometer Min CSS -->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!-- Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Carousel Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- RTL CSS -->
        <link rel="stylesheet" href="assets/css/dark.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<title>Logomantic</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <!-- <a href="index.html">
                                <img src="assets/img/logo.png" class="black-logo" alt="image">
                                <img src="assets/img/logo-2.png" class="white-logo" alt="image">
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="assets/new-image/web-logo/new-2.png" class="black-logo" alt="image">
                            <img src="assets/new-image/web-logo/new-2.png" class="white-logo" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link active">
                                        Home 
                                       
                                    </a>
                                  
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('premium') }}" class="nav-link">
                                        Premium Logo  
                                       
                                    </a>

                                   
                                </li>

                                <li class="nav-item">
                                    <form action="{{ route('allLogos') }}" method="POST">
                                        <input type="hidden" name="logoType" value="{{ App\Models\LogoType::where('id', '1')->value('name') }}">
                                        <a style="cursor: pointer" onclick="this.parentNode.submit()" class="nav-link">Logo Maker</a>
                                    </form>

                                  
                                </li>

                    

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Other Services 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('businessCardDesign') }}" class="nav-link">
                                               Business card Design
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('letterHeadDesign') }}" class="nav-link">
                                                Letter Head  Design
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('tShirtDesign') }}" class="nav-link">
                                                T-Shirt  Design
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('envelopDesign') }}" class="nav-link">
                                                Envelop  Design
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('webDesign') }}" class="nav-link">
                                                Web Design
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('mugDesign') }}" class="nav-link">
                                               Mug Design
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('flyerDesign') }}" class="nav-link">
                                              Flyer Design
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('signatureDesign') }}" class="nav-link">
                                              Signature Design
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('weddingCardDesign') }}" class="nav-link">
                                              Wedding Card Design
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">
                                        Contact
                                      
                                    </a>
                                </li>
                                
                                @auth
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Dashboard 
                                            <i class='bx bx-chevron-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{ route('wishlist') }}" class="nav-link">
                                                    Wishlist
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('cart') }}" class="nav-link">
                                                    Cart
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <form action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                    <a onclick="this.parentNode.submit();" class="nav-link" style="cursor: pointer">Logout</a>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endauth

                                @guest
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">
                                        Login / Register
                                        
                                        </a>
                                    </li>
                                @endguest

                                {{-- <div class="option-item" style="align-self:center ;">
                                    <a href="pricing-2.html" class="default-btn">
                                       Pricing
                                    </a>
                                </div> --}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>0</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <i class="search-btn flaticon-loupe"></i>
                                    <i class="close-btn flaticon-cancel"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search" type="text">

                                                <button class="search-button" type="submit">
                                                    <i class="flaticon-loupe"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="pricing-1.html" class="default-btn">
                                        Get Quote
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Checkout</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Checkout Area -->
		<section class="checkout-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="user-actions">
                            <i class='bx bx-link-external'></i>
                            <span>Returning customer? 
                                <a href="login.html">Click here to login</a>
                            </span>
                        </div>
                    </div>
                </div>
                <form action="{{ route('checkoutUser') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="billing-details">
                                <h3 class="title">Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
										    <label>Country <span class="required">*</span></label>
                                            <div class="select-box">
                                                <select class="form-control" name="country">
                                                    <option value="5">United Arab Emirates</option>
                                                    <option value="1">China</option>
                                                    <option value="2">United Kingdom</option>
                                                    <option value="0">Germany</option>
                                                    <option value="3">France</option>
                                                    <option value="4">Japan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" name="firstName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" name="lastName" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="company" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" name="address" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" name="city" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" name="state" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" name="zip" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Email Address<span class="required">*</span></label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12 col-md-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="create-an-account">
                                            <label class="form-check-label" for="create-an-account">Create an account?</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="ship-different-address">
                                            <label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="order-details">
                                <h3 class="title">Your Order</h3>
                                <div class="order-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                           
                                          
                                            <tr>
                                                <td class="total-price">
                                                    <span>Order Total</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">${{ $amount }}</span>
                                                    <input type="hidden" id="amount" name="amount" value="{{ $amount }}">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="payment-box">
                                    <div class="payment-method">
                                        <p>
                                            <input name="payment" value="bankTransfer" type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                            <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                        </p>
                                        <p>
                                            <input name="payment" value="paypal" type="radio" id="paypal" name="radio-group">
                                            <label for="paypal">PayPal</label>
                                        </p>
                                        <p>
                                            <input name="payment" value="stripe" type="radio" id="cash-on-delivery" name="radio-group">
                                            <label for="cash-on-delivery">Stripe</label>
                                        </p>
                                    </div>
                                    
                                    {{-- <br><br> --}}
                                    <button type="submit" class="default-btn">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
		<!-- End Checkout Area -->

        <!-- Start Footer Area -->
        <div class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <!-- <a href="index.html">
                                    <img src="assets/img/logo.png" class="black-logo" alt="image">
                                    <img src="assets/img/logo-2.png" class="white-logo" alt="image">
                                </a> -->
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                            <ul class="social">
                                <li>
                                    <a href="#" class="facebook" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin" target="_blank">
                                        <i class='bx bxl-instagram-alt'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Important Links</h3>
    
                            <ul class="quick-links">
                                <li>
                                    <a href="about-2.html">About Us</a>
                                </li>
                                <li>
                                    <a href="portfolio-2.html">Services</a>
                                </li>
                                <li>
                                    <a href="services-2.html">Faq</a>
                                </li>
                                <li>
                                    <a href="blog-2.html">Blog</a>
                                </li>
                                <li>
                                    <a href="contact-1.html">Contact</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Featured Services</h3>
    
                            <ul class="quick-links">
                                <li>
                                    <a href="#">Logo Design</a>
                                </li>
                                <li>
                                    <a href="#">Web design</a>
                                </li>
                                <li>
                                    <a href="#">letter head Design</a>
                                </li>
                                <li>
                                    <a href="#">Business Card</a>
                                </li>
                                <li>
                                    <a href="#">T-shirt Design</a>
                                </li>
                                <li>
                                    <a href="#">Envelop Design</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Information</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class="flaticon-call"></i>
                                    <span>Phone</span>
                                    <a href="tel:882569756">882-569-756</a>
                                </li>
                                <li>
                                    <i class="flaticon-email-1"></i>
                                    <span>Email</span>
                                    <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#3159545d5d5e71424158491f525e5c"><span class="__cf_email__" data-cfemail="127a777e7e7d5261627b6a3c717d7f">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i>
                                    <span>Address</span>
                                    <a href="https://www.google.com/maps/@51.5287718,-0.2416804,11z" target="_blank">50 Nortambiya, UK.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>
                                Copyright @ 2022 Logomantic
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li>
                                    <a href="terms-of-service.html">Terms of Service</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-chevron-up'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Dark version -->
    
        <!-- Dark version -->

        <!-- Jquery Slim JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Appear Min JS -->
        <script src="assets/js/jquery.appear.min.js"></script>
        <!-- Odometer Min JS -->
        <script src="assets/js/odometer.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Ajaxchimp JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/main.js"></script>

    </body>

<!-- Mirrored from templates.envytheme.com/spix/default/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 18:09:30 GMT -->
</html>