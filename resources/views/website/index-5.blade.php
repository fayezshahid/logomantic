<!doctype html>
<html lang="zxx" class="theme-light">
    
<head>
        <!-- Required meta tags -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
                <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="meta tags, meta description, meta keywords, SEO, search engine optimization">
        <meta name="description" content="logo design logo logo maker facebook logo free logo maker wix logo maker twitter logo logo maker online adidas logo starbucks logo netflix logo wix logo free logo design linkedin logo spotify logo samsung logo canva logo zoom logo microsoft logo chanel logo logo apple twitch logo facebook png pepsi logo logo nike snapchat logo versace logo hatchful fedex logo fb logo free logo maker online s logo pringles logo walmart logo a logo m logo placeit logo photography logo logo online kia new logo music logo tailorbrands mastercard logo target logo supreme logo logo creator free playboy logo lion logo designevo company logo placeit logo maker logo by memory canva logo maker
        visa logo logo design online ikea logo hatchful shopify cricket logo create logo online free food logo fruit of the loom logo business logo fox logo free logo design templates">
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
    
    <body @if($view == 0) style="display: none" @endif>

        <!-- Start Preloader Area -->
        <!-- <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div> -->
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/new-image/web-logo/new-2.png" class="black-logo" alt="image">
                                <img src="assets/new-image/web-logo/new-2.png" class="white-logo" alt="image">
                            </a>
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
        <!-- <div class="home-wrapper-area">
            <div class="home-slides owl-carousel owl-theme">
                <div class="main-slider-item">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="main-slider-content">
                                            <h1>Make a logo design in minutes.</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            <div class="slider-btn">
                                                <a href="#" class="default-btn">
                                                    Get Services
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6">
                                        <div class="main-slider-image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-item">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="main-slider-content">
                                            <h1>Choose from thousands of logo design templates</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            <div class="slider-btn">
                                                <a href="#" class="default-btn">
                                                    Get Services
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6">
                                        <div class="main-slider-image two"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider-item">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="main-slider-content">
                                          
                                            <h1>  Make a logo for your business or event in 3 easy steps
                                            </h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            <div class="slider-btn">
                                                <form class="banner-form">
                                                    <input type="email" class="form-control" placeholder="If you Need Assistance Just Enter your Email/Number">
                                                    <button type="submit">I Need Help?</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6">
                                        <div class="main-slider-image three"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slider-shape">
                <div class="shape-1">
                    <img src="assets/img/main-slider/slider-shape-1.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="assets/img/main-slider/slider-shape-2.png" alt="image">
                </div>
                <div class="shape-3">
                    <img src="assets/img/main-slider/slider-shape-3.png" alt="image">
                </div>
                <div class="shape-4">
                    <img src="assets/img/main-slider/slider-shape-4.png" alt="image">
                </div>
                <div class="shape-5">
                    <img src="assets/img/main-slider/slider-shape-5.png" alt="image">
                </div>
            </div> -->
        </div> 
        <!-- Start Main Banner Area -->
        <div class="main-banner">
            <div class="main-banner-item item-four">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <h1>Digital Marketing Best Solution</h1>
                                        <p>To create a company logo design, use our top-of-the-line free logo maker tool and follow these simple steps.</p>
                                        
                                        <!-- <form class="banner-form">
                                            <input type="email" class="form-control" placeholder="If you Need Assistance Just Enter your Email/Number">
                                            <button type="submit">I Need Help?</button>
                                        </form> -->
                                        
                                    </div>
                                   
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-banner-image">
                                        <img src="assets/new-image/other/mockup.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <section class="subscribe-area ptb-1000 news-bg">
            <div class="container">
                <div class="subscribe-content" style="max-width: 90%"; >
                    <span class="yellow">Get Started Instantly!</span>
                    <h2>SEARCH YOUR LOGO</h2>

                    <form action="{{ route('allLogos') }}" method="post">
                        @csrf
                        <div class="row">
                            
    
                            <div class="col-lg-12 col-md-12 margin">
                                <div class="order-details">
                                
                                 
    
                                    <div class="payment-box">
                                        <div class="payment-method">
                                            <div class="billing-details">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12">
                                                        <div class="form-group">
                                                            <label style="
    text-align: left;
    color: black;
    font-weight: 600;
">Select industry <span class="required">*</span></label>
                                                            <div class="select-box">
                                                                <select class="form-control" id="logoType" name="logoType">
                                                                    {{-- <option value="5">abc logo</option>
                                                                    <option value="1">Software Logo</option>
                                                                    <option value="2">Electrical logo</option>
                                                                    <option value="0">Mechinical logo</option>
                                                                    <option value="3">Fashion Logo</option>
                                                                    <option value="4">Cosmetic Logo</option> --}}
                                                                    {{-- <option selected disabled>Select a logo</option> --}}
                                                                    @foreach ($industries as $industry)
                                                                        <option value="{{ $industry->name }}">{{ $industry->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                {{-- <div class="nice-select form-control" tabindex="0"><span class="current">restaurant logo</span><ul class="list"><li data-value="5" class="option selected focus">restaurant logo</li><li data-value="1" class="option">Software Logo</li><li data-value="2" class="option">Electrical logo</li><li data-value="0" class="option">Mechinical logo</li><li data-value="3" class="option">Fashion Logo</li><li data-value="4" class="option">Cosmetic Logo</li></ul></div> --}}
                                                                <!-- <div class="nice-select form-control" tabindex="0"><span class="current">United Arab Emirates</span><ul class="list"><li data-value="5" class="option selected focus">United Arab Emirates</li><li data-value="1" class="option">China</li><li data-value="2" class="option">United Kingdom</li><li data-value="0" class="option">Germany</li><li data-value="3" class="option">gfgfgfg</li><li data-value="4" class="option">Japan</li></ul></div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="form-group">
                                                            <label style="
    text-align: left;
    color: black;
    font-weight: 600;
">Enter Your Business Name <span class="required">*</span></label>
                                                            <input id="bName" name="bName" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                       
                                                        {{-- <input id="inp1" name="logoType" type="hidden">
                                                        <input id="inp2" name="bName" type="hidden"> --}}
                                                        <button id="sbm" type="submit" class="default-btn col-lg-4 margin animate">
                                                            Customize Your Logo
                                                        </button>
                                                    

                                                    {{-- <a href="{{ route('allLogos') }}" class="default-btn col-lg-4 margin animate">
                                                        Customize Your Logo
                                                    </a> --}}
                                                    
                                                </div>
                                            </div>
                                           
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Main Banner Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="section-title">
                    <span>Premium Logo</span>
                    <h2>Our <span class="blue">  Premium </span>Logo</h2>
                    <div class="bar"></div>
                </div>
                @if(session('status'))
                    <div class="alert alert-success" style="width: 75%; margin-left: 230px; text-align: center">
                        {{ session('status') }}
                    </div>
                @endif
                {{ $logoCount = 0 }}
                <div class="team-slider owl-carousel owl-theme">
                    @foreach ($premiumLogos as $logo)
                        @if ((++$logoCount) <= 10)
                            <div class="single-team">
                                <div class="image">
                                    <a onclick="buyPremiumLogo({{ $logo->id }})" style="cursor: pointer">
                                        <img src="{{ config('logo.logoUrl').$logo->image }}" alt="image">
                                    </a>
                                    <div class="content">
                                        <a onclick="buyPremiumLogo({{ $logo->id }})" style="cursor: pointer">
                                            <h3>{{ $logo->name }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                @foreach ($premiumLogos as $logo)
                    @if ((++$logoCount) <= 10)
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
                                        <button type="button" class="btn btn-primary" onclick="buy({{ $logo->id }})">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <!-- Start Features Area -->
        <section class="features-area small-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="features-inner-content">
                            <span>About Us</span>
                            <h3> 
                                Make a logo design in minutes.</h3>
                            <div class="bar"></div>
                            <p>Over 20 Million businesses have trusted our free logo maker to design a logo. With our online logo maker you can create, edit, and save as many logos as you like. Once you have the perfect design, purchase your files for just $40.00 .</p>

                            <ul class="features-list">
                                <li>
                                    <span><i class="flaticon-checked"></i> Logo design</span>
                                </li>
                                <li>
                                    <span><i class="flaticon-checked"></i> T-shirt design</span>
                                </li>
                                <li>
                                    <span><i class="flaticon-checked"></i> Business card design</span>
                                </li>
                                <li>
                                    <span><i class="flaticon-checked"></i> Letter Head design</span>
                                </li>
                                <li>
                                    <span><i class="flaticon-checked"></i> Web Design</span>
                                </li>
                                <li>
                                    <span><i class="flaticon-checked"></i> Envelop design</span>
                                </li>
                            </ul>

                            <!-- <div class="features-btn">
                                <a href="#" class="default-btn">Learn More</a>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="features-image">
                            <img src="assets/new-image/other/Untitled-1.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Features Area -->
        
        <!-- Start About Area -->
        <section class="features-area pt-100 pb-70 bg-green">
            <div class="container">
                <div class="section-title text-width">
                    <span class="yellow">How Can I Create a Professional Company Logo?</span>
                    <h2 class="white">Create Awesome Logo  <span class="white">With Our </span>Customization Tool</h2>
                    <div class="bar"></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-features">
                            <div class="icon">
                                <i class="flaticon-promotion"></i>
                            </div>
                            <h3>
                                <a href="#">Enter Company Name</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

                            <div class="number">
                                <span>1</span>
                            </div>
                
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-features">
                            <div class="icon">
                                <i class="flaticon-speed"></i>
                            </div>
                            <h3>
                                <a href="#">Select Your Industry</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

                            <div class="number">
                                <span>2</span>
                            </div>
                
                          
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-features">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <h3>
                                <a href="#">Pick a Logo Design</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

                            <div class="number">
                                <span>3</span>
                            </div>
                
                          
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-features">
                            <div class="icon">
                                <i class="flaticon-network"></i>
                            </div>
                            <h3>
                                <a href="#">Customize Your Logo Design</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

                            <div class="number">
                                <span>4</span>
                            </div>
                
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Services Area -->
     
        <!-- End Services Area -->

        <!-- Start Digital Experience Area -->
        <section class="digital-experience-area pt-100 pb-70 ">
            <div class="container">
                <div class="section-title">
                    <span>Our Services</span>
                    <h2>Outstanding Services<span class="blue"> <br>With Digital </span>Experience</h2><br/>
                    <div class="bar"></div>
                </div>

                <div class="tab digital-experience-tab">
                    <ul class="tabs">
                        <li>
                            <a href="#">
                                <span>
                                    <i class="flaticon-analysis"></i>
                                    Logo Design
                                </span>
                            </a>
                        </li>
                        
                        <li class="bg-5cbd12">
                            <a href="#">
                                <span>
                                    <i class="flaticon-profit"></i>
                                    Letter Head
                                </span>
                            </a>
                        </li>
                        
                        <li class="bg-e2851b">
                            <a href="#">
                                <span>
                                    <i class="flaticon-digital-marketing"></i>
                                   Business Card
                                </span>
                            </a>
                        </li>

                        <li class="bg-04b893">
                            <a href="#">
                                <span>
                                    <i class="flaticon-email-marketing"></i>
                                   
                                    T-Shirt Design
                                </span>
                            </a>
                        </li>

                        <li class="bg-785eda">
                            <a href="#">
                                <span>
                                    <i class="flaticon-network"></i>
                                    Web Design
                                </span>
                            </a>
                        </li>

                        <li class="bg-d0465a">
                            <a href="#">
                                <span>
                                    <i class="flaticon-digital-marketing-2"></i>
                                   Flyer Design
                                </span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab_content">
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="digital-experience-content">
                                        <h3>A great brand story starts with a good logo design</h3>
                                       
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Super Responsive</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>High Security</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                         
                                        </div>
                                        

                                       
                                    </div>
                                    
                                    
                                    
                                </div>
                                

                                <div class="col-lg-6">
                                    <div class="digital-experience-image ">
                                        <img src="assets/new-image/other/banner-image.jpg" alt="image" class="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="digital-experience-content">
                                        <h3>Create a Company Letterhead Using Our Templates</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Super Responsive</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>High Security</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Optimal Choice</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="digital-experience-image ">
                                        <img src="assets/new-image/other/letter-head.jpg" alt="image" class="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="digital-experience-content">
                                        <h3>Rock Your Business Card Design the DIY Way</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Super Responsive</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>High Security</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Optimal Choice</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="digital-experience-image ">
                                        <img src="assets/new-image/other/LM-BUSINESS-CARD.jpg" alt="image" class="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="digital-experience-content">
                                        <h3>Fabulous T-Shirt Design Maker</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Super Responsive</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>High Security</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Optimal Choice</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="digital-experience-image ">
                                        <img src="assets/new-image/other/shirt.jpg" alt="image" class="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="digital-experience-content">
                                        <h3>Web design with logo solutions.</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Super Responsive</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>High Security</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Optimal Choice</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="digital-experience-image">
                                        <img src="https://img.freepik.com/premium-psd/website-mockup-template_68185-389.jpg?w=996" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="digital-experience-content">
                                        <h3>DIY Flyer Maker to Boost Your Marketing on the Go</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan facilisis.</p>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Super Responsive</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>High Security</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>

                                        <div class="experience-inner-content">
                                            <div class="icon">
                                                <i class="flaticon-check"></i>
                                            </div>
                                            <h3>Optimal Choice</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="digital-experience-image ">
                                        <img src="https://img.freepik.com/free-psd/geometric-business-brochure_1389-143.jpg?w=996&t=st=1658995386~exp=1658995986~hmac=35b29c844f2e9334fa48c08e1f5e98080dc51943c3ca32f9c4d3516daecef239" alt="image" class="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Digital Experience Area -->

        <!-- Start Fun Facts Area -->
        <section class="fun-facts-area small-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact-box">
                            <div class="icon">
                                <i class="flaticon-checked"></i>
                            </div>

                            <h3>
                                <span class="odometer" data-count="950">00</span>
                            </h3>
                            <p>Completed Project</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact-box">
                            <div class="icon">
                                <i class="flaticon-happy"></i>
                            </div>

                            <h3>
                                <span class="odometer" data-count="850">00</span>
                            </h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact-box">
                            <div class="icon">
                                <i class="flaticon-technical-support"></i>
                            </div>

                            <h3>
                                <span class="odometer" data-count="550">00</span>
                            </h3>
                            <p>Multi Service</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact-box">
                            <div class="icon">
                                <i class="flaticon-trophy"></i>
                            </div>

                            <h3>
                                <span class="odometer" data-count="750">00</span>
                            </h3>
                            <p>Winning Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Area -->

        <!-- Start Pricing Area -->
        <section class="pricing-area pb-70 bg-green pt-100 pb-70">
            <div class="container ">
                <div class="section-title">
                    <span class="yellow">Pricing Plans</span>
                    <h2 class="white">The Best Solutions for Our Clients</h2>
                    <div class="bar"></div>
                </div>

                <div class="tab pricing-tab">
                   

                    <div class="tab_content">
                        <div class="tabs_item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-box top-1">
                                        <div class="pricing-header">
                                            <h3>Basic Plan</h3>
                                        </div>
            
                                        <div class="price">
                                            $24
                                        </div>
            
                                        <ul class="pricing-features">
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Audits
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Management
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Copywriting
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Link Building
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Site Migration
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Video Camplaigns
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Unlimited SEO Keywords
                                            </li>
                                        </ul>
            
                                        <div class="pricing-btn">
                                            <a href="#" class="default-btn">
                                                Get Started
                                            </a>
                                        </div>
            
                                        <div class="pricing-shape">
                                            <img src="assets/img/pricing-shape.png" alt="image">
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-box">
                                        <div class="pricing-header">
                                            <h3>Standard Plan</h3>
                                        </div>
            
                                        <div class="price">
                                            $59
                                        </div>
            
                                        <ul class="pricing-features">
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Audits
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Management
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Copywriting
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Link Building
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Site Migration
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Video Camplaigns
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Unlimited SEO Keywords
                                            </li>
                                        </ul>
            
                                        <div class="pricing-btn">
                                            <a href="#" class="default-btn">
                                                Get Started
                                            </a>
                                        </div>
            
                                        <div class="pricing-shape">
                                            <img src="assets/img/pricing-shape.png" alt="image">
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-pricing-box top-2">
                                        <div class="pricing-header">
                                            <h3>Premium Plan</h3>
                                        </div>
            
                                        <div class="price">
                                            $89
                                        </div>
            
                                        <ul class="pricing-features">
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Audits
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Management
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                SEO Copywriting
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Link Building
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Site Migration
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Video Camplaigns
                                            </li>
                                            <li>
                                                <i class="flaticon-check-mark"></i>
                                                Unlimited SEO Keywords
                                            </li>
                                        </ul>
            
                                        <div class="pricing-btn">
                                            <a href="#" class="default-btn">
                                                Get Started
                                            </a>
                                        </div>
            
                                        <div class="pricing-shape">
                                            <img src="assets/img/pricing-shape.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Area -->

        <!-- Start Team Area -->
       
        <!-- End Team Area -->

        <!-- Start Testimonial Area -->
        <section class="testimonial-area ptb-100 tes-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="testimonial-content">
                            <span>Testimonials</span>
                            <h2>Our Client’s Review</h2>
                            <div class="bar"></div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="testimonial-image"></div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="testimonial-inner-content">
                                    <div class="icon">
                                        <i class="flaticon-left-quotes-sign"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus  maecenas accumsan noniice Lorem Ipsum.</p>

                                    <div class="info-text">
                                        <h4>Morris Jacket</h4>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="testimonial-image image-two"></div>
                            </div>
        
                            <div class="col-lg-8">
                                <div class="testimonial-inner-content">
                                    <div class="icon">
                                        <i class="flaticon-left-quotes-sign"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus  maecenas accumsan noniice Lorem Ipsum.</p>

                                    <div class="info-text">
                                        <h4>Mahindra jhon</h4>
                                        <span>App Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="testimonial-image image-three"></div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="testimonial-inner-content">
                                    <div class="icon">
                                        <i class="flaticon-left-quotes-sign"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus  maecenas accumsan noniice Lorem Ipsum.</p>

                                    <div class="info-text">
                                        <h4>Lee Munroe</h4>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->

        <!-- Start Overview Area -->
     
        <!-- End Overview Area -->

        <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Blog</span>
                    <h2>Latest News From Blog</h2>
                    <div class="bar"></div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="image">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-1.jpg" alt="image">
                                </a>
                            </div>
                            <div class="content">
                                <span>20 March, 2022</span>
                                <h3>
                                    <a href="blog-details.html">7 Great Tips For Earn More Money From Digital Industry</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class='bx bx-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="image">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-2.jpg" alt="image">
                                </a>
                            </div>
                            <div class="content">
                                <span>25 March, 2022</span>
                                <h3>
                                    <a href="blog-details.html">How To Boost Your Digital Marketing Agency</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class='bx bx-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="image">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-3.jpg" alt="image">
                                </a>
                            </div>
                            <div class="content">
                                <span>28 March, 2022</span>
                                <h3>
                                    <a href="blog-details.html">The Billionaire Guide On Design That will Get You Rich</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class='bx bx-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-shape">
                <div class="shape1">
                    <img src="assets/img/default-shape/default-shape1.png" alt="image">
                </div>
                <div class="shape2">
                    <img src="assets/img/default-shape/default-shape2.png" alt="image">
                </div>
                <div class="shape3">
                    <img src="assets/img/default-shape/default-shape3.png" alt="image">
                </div>
                <div class="shape4">
                    <img src="assets/img/default-shape/default-shape4.png" alt="image">
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Subscribe Area -->
    
        <section class="feature-area small-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <aside class="widget-area">
                           

                           
                        

                            <section class="widget widget_tag_cloud">
                                <h3 class="widget-title">Popular Tags</h3>

                                <div class="tagcloud">
                                    <a href="#">logo design <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo maker <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">facebook logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">free logo maker <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">wix logo maker <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">twitter logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo maker online <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">adidas logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">starbucks logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">netflix logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">wix logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">free logo design <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">linkedin logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">spotify logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">samsung logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">canva logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">zoom logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">microsoft logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">chanel logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo apple <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">twitch logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">facebook png <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">pepsi logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo nike <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">snapchat logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">versace logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">hatchful <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">fedex logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">fb logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">free logo maker online <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">s logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">pringles logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">walmart logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">a logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">m logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">placeit logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">photography logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo online <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">kia new logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">music logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">tailorbrands <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">mastercard logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">target logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">supreme logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo creator free <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">playboy logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">lion logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">designevo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">company logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">placeit logo maker <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo by memory <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">canva logo maker <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">visa logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">logo design online <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">ikea logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">hatchful shopify <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">cricket logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">create logo online free <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">food logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">fruit of the loom logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">business logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">fox logo <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">free logo design templates <span class="tag-link-count"> (2)</span></a>
                                </div>
                            </section>
                        </aside>
                        <!-- <div class="features-inner-content">
                               <ul class="features-list">
                                <li class="width">
                                    <span><i class="flaticon-checked"></i> Business Card</span>
                                </li>
                                <li class="width">
                                    <span><i class="flaticon-checked"></i> Letter Head</span>
                                </li>
                                <li class="width">
                                    <span><i class="flaticon-checked"></i>Logo Design</span>
                                </li>
                                <li class="width">
                                    <span><i class="flaticon-checked"></i> Web Design</span>
                                </li>
                                <li class="width">
                                    <span><i class="flaticon-checked"></i> T-Shirt Design</span>
                                </li>
                                <li class="width">
                                    <span><i class="flaticon-checked"></i> Mug Design</span>
                                </li>
                               
                            </ul>

                           
                        </div> -->
                    </div>

                  
                </div>
            </div>
        </section>
        <!-- End Subscribe Area -->

        <!-- Start Partner Area -->
       
        <!-- End Partner Area -->

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

</html>
