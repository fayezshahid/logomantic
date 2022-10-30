<?PHP
    header('Access-Control-Allow-Origin: *');
?>

<!doctype html>
<html lang="zxx" class="theme-light">
    
<head>
        <!-- Required meta tags -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Playball&family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/godswearhats/jquery-ui-rotatable@1.1/jquery.ui.rotatable.css">
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
		
		<title>Logo tool</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <!-- Start Preloader Area -->
      
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <!-- <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo.png" class="black-logo" alt="image">
                                <img src="assets/img/logo-2.png" class="white-logo" alt="image">
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <!-- <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" class="black-logo" alt="image">
                            <img src="assets/img/logo-2.png" class="white-logo" alt="image">
                        </a> -->

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link active">
                                        Home 
                                       
                                    </a>
                                  
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Premium Logo Design 
                                       
                                    </a>

                                   
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Logo Design with logo Maker
                                       
                                    </a>

                                  
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
                                                Letter Head Design
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
                                    <a href="#" class="nav-link">
                                        Contact
                                      
                                    </a>
                                   
                                </li>

                                @auth
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
                                @endauth

                                <li class="nav-item">
                                    @auth
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <a onclick="this.parentNode.submit();" class="nav-link">Logout</a>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="nav-link">
                                        Login / Register
                                        
                                        </a>
                                    @endauth
                                </li>
                                
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <!-- <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>0</span>
                                        </a>
                                    </div>
                                </div> -->

                            

                                <div class="option-item">
                                    <a href="pricing-1.html" class="default-btn">
                                       Pricing
                                    </a>
                                </div>
                            </div>
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

        <div class="container">
            <div class="row">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Logo Id</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($wishlists as $wishlist)
                            <tr>
                                <td>
                                    <div style="margin-top: 40px">
                                        {{ $wishlist->logo_id }}
                                    </div>
                                </td>
                                <td>
                                    <img src="{{ $wishlist->logo }}" height="300px" width="300px" alt="">
                                </td>
                                <td style="width: 30%">
                                    <div class="d-flex justify-content-between" style="margin-top: 40px">
                                        <form action="{{ route('purchaseLogo') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="logo" id="purchaseLogo" value="{{ $wishlist->logo }}">
                                            <input type="hidden" name="logoId" id="purchaseLogoId" value="{{ $wishlist->logo_id }}">
                                            <button class="btn btn-sm btn-primary ml-2">Add To Cart</button>
                                        </form>
                                        <form action="{{ route('deleteWishlistItem', $wishlist->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger ml-2">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
            
                    </tbody>
                </table>
            </div>
        </div>
        

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
                                Copyright @ 2022 Company Name All Rights Reserved by
                                <a href="#" target="_blank">
                                  abc
                                </a>
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

        <input type="file" id="imgFile" hidden>
        <!-- End Go Top Area -->

        <!-- Dark version -->
        
        <!-- Dark version -->

        <!-- Jquery Slim JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/godswearhats/jquery-ui-rotatable@1.1/jquery.ui.rotatable.min.js"></script>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
        <script src="assets/js/vibrant.js"></script>
        <script src="assets/js/paletteExtractor.js"></script>

        <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    </body>


</html>