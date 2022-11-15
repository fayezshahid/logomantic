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
                                            <a onclick="this.parentNode.submit();" class="nav-link" style="cursor: pointer">Logout</a>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="nav-link">
                                        Login / Register
                                        
                                        </a>
                                    @endauth
                                </li>

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
        <div class="page-banner-area item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Premium Logo</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Premium Logo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        <!-- <section class="checkout-area">
            <div class="container">
                
                <form>
                    <div class="row">
                        

                        <div class="col-lg-9 col-md-12 margin">
                            <div class="order-details">
                            
                             

                                <div class="payment-box borderr">
                                    <div class="payment-method">
                                        <div class="billing-details">
                                            <h3 class="title">Search Your Logo</h3>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Select industry <span class="required">*</span></label>
                                                        <div class="select-box">
                                                            <select class="form-control" style="display: none;">
                                                                <option value="5">United Arab Emirates</option>
                                                                <option value="1">China</option>
                                                                <option value="2">United Kingdom</option>
                                                                <option value="0">Germany</option>
                                                                <option value="3">France</option>
                                                                <option value="4">Japan</option>
                                                            </select><div class="nice-select form-control" tabindex="0"><span class="current">United Arab Emirates</span><ul class="list"><li data-value="5" class="option selected focus">United Arab Emirates</li><li data-value="1" class="option">China</li><li data-value="2" class="option">United Kingdom</li><li data-value="0" class="option">Germany</li><li data-value="3" class="option">France</li><li data-value="4" class="option">Japan</li></ul></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label>Enter Your Business Name <span class="required">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                               
                                              
                                               
                                                
                                                
                                                
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <a href="#" class="default-btn col-lg-6 margin">
                                        Search Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section> -->
        <!-- Start Services Details Area -->
        <section class="services-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @if(session('status'))
                            <div class="alert alert-success" style="text-align: center">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">

                            @foreach ($premiumLogos as $logo)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-portfolio-item">
                                        <div class="portfolio-image">
                                            <a style="cursor: pointer" onclick="buyPremiumLogo({{ $logo->id }})">
                                                <img src="{{ config('logo.logoUrl').$logo->image }}" alt="image">
                                            </a>
                                        </div>
            
                                        <div class="portfolio-content">
                                            <h3 class="fomt-size">
                                                <a style="cursor: pointer" onclick="buyPremiumLogo({{ $logo->id }})">{{ $logo->name }}</a>
                                            </h3>
                                            <span>{{ $logo->logoType }}</span>
                                            <div class="features-btn">
                                                <a onclick="buyPremiumLogo({{ $logo->id }})" class="default-btn new-btn" style="cursor: pointer">Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal" id="logoModal{{ $logo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                        <div class="modal-content" style="height:510px !important;">
                                            <div class="modal-body d-flex justify-content-between" style="height: 500px">
                                                <div>
                                                    <form action="{{ route('premiumLogoBuy') }}" method="POST" id="form{{ $logo->id }}" style="width: 510px; padding-top: 110px;">
                                                        @csrf
                                                        <div class="form-group" style="margin-bottom: 15px">
                                                            <label for="">Name</label>
                                                            <input type="text" id="name{{ $logo->id }}" class="form-control" name="name" placeholder="Enter name">
                                                            <div class="text-danger" id="nameError{{ $logo->id }}"></div>
                                                        </div>
                                                        <div class="form-group" style="margin-bottom: 15px">
                                                            <label for="">Email address</label>
                                                            <input type="email" id="email{{ $logo->id }}" class="form-control" name="email" placeholder="Enter email">
                                                            <div class="text-danger" id="emailError{{ $logo->id }}"></div>
                                                        </div>
                                                        <div class="form-group" style="margin-bottom: 15px">
                                                            <label for="">Phone</label>
                                                            <input type="text" id="phone{{ $logo->id }}" class="form-control" name="phone" placeholder="Enter phone number">
                                                            <div class="text-danger" id="phoneError{{ $logo->id }}"></div>
                                                        </div>
                                                        <input type="hidden" value="{{ $logo->id }}" name="premium_logo_id">
                                                    </form>
                                                </div>
                                                <div style="width: 500px; height: 405px">
                                                    <img style="height: 100% !important" width="400px" src="{{ config('logo.logoUrl').$logo->image }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" onclick="buy({{ $logo->id }})">Contact</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
     
                            <div class="col-lg-12 col-md-12">
                                <div class="pagination-area">
                                    <a href="#" class="prev page-numbers">
                                        <i class="flaticon-left-arrow"></i>
                                    </a>
                                    <a href="#" class="page-numbers">1</a>
                                    <span class="page-numbers current" aria-current="page">2</span>
                                    <a href="#" class="page-numbers">3</a>
                                    <a href="#" class="page-numbers">4</a>
                                    <a href="#" class="next page-numbers">
                                        <i class="flaticon-next"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-12">
                        <div class="services-details-information">
                            <ul class="services-list">
                                <li><a href="#" class="active">Creative Web Design</a></li>
                                <li><a href="#">Complex Dashboard</a></li>
                                <li><a href="#">Digital Agency</i></a></li>
                                <li><a href="#">Software Engineers</a></li>
                                <li><a href="#">Marketing Agency</a></li>
                                <li><a href="#">Data Analysis</a></li>
                                <li><a href="#">App Development</a></li>
                                <li><a href="#">Web Application</a></li>
                                <li><a href="#">Logo & Branding</a></li>
                            </ul>

                            <div class="download-file">
                                <h3>What Type OF files You will Get?</h3>

                                <ul>
                                    <li><a href="#">JPG File  </a></li>
                                    <li><a href="#">PNG FILE </a></li>
                                    <li><a href="#">AI OR PSD FILE </a></li>
                                </ul>
                            </div>

                          
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Start Services Details Area -->

        <!-- Start Services Area -->
      
        <!-- End Services Area -->

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

        <script>
            function buyPremiumLogo(id){
                $('#logoModal' + id).fadeIn(300);
            }

            function buy(id){
                var f = 1;
                
                if(!$('#name' + id).val()){
                    f = 0;
                    $('#nameError' + id).html('Name is required');
                }
                else{
                    $('#nameError' + id).html('');
                }
                
                if(!$('#email' + id).val()){
                    f = 0;
                    $('#emailError' + id).html('Email is required');
                }
                else{
                    $('#emailError' + id).html('');
                }

                if(!$('#phone' + id).val()){
                    f = 0;
                    $('#phoneError' + id).html('Phone is required');
                }
                else{
                    $('#phoneError' + id).html('');
                }
                    
                if(f)
                    $('#form' + id).submit();
            }

            $(document).click(function (e) {
                if ($(e.target).is('.modal')) {
                    $('.modal').fadeOut(300);
                }
            });

            window.setTimeout(function() {
                $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 5000);
        </script>

    </body>

<!-- Mirrored from templates.envytheme.com/spix/default/services-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 18:09:33 GMT -->
</html>