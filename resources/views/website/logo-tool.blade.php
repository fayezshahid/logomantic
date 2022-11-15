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
        {{-- <link rel="stylesheet" href="assets/css/nice-select.min.css"> --}}
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- RTL CSS -->
        <link rel="stylesheet" href="assets/css/dark.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<title>Logomantic</title>
        <style id="fonts">
        </style>
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
                                    <a href="{{ route('premium') }}" class="nav-link">
                                        Premium Logo Design 
                                       
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

                            

                                {{-- <div class="option-item">
                                    <a href="pricing-1.html" class="default-btn">
                                       Pricing
                                    </a>
                                </div> --}}
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

        <!-- Start Page Banner -->
        {{-- <div class="page-banner-area item-bg333">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Your Logo Tool</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li> Logo Tool</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Page Banner -->
        <section class="checkout-area" id="toolBar">
            <div class="container">
                
                {{-- <form> --}}
                    <div class="row">
                        

                        <div class="col-lg-12 col-md-12 margin">
                            <div class="order-details">
                            
                             

                                <div class="payment-box borderr">
                                    <div class="payment-method">
                                        <div class="billing-details">
                                            
                                            <div class="row justify-content-center">
                                                <div class="col-lg-2 col-md-6" style="width: 270px">
                                                    <div class="form-group">
                                                        <label>Select Font Family <span class="required">*</span></label>
                                                        <div class="select-box">
                                                            <select class="form-control" id="font-family">
                                                                
                                                            </select>
                                                            <!-- <div class="nice-select form-control" tabindex="0"><span class="current">United Arab Emirates</span><ul class="list"><li data-value="5" class="option selected focus">United Arab Emirates</li><li data-value="1" class="option">China</li><li data-value="2" class="option">United Kingdom</li><li data-value="0" class="option">Germany</li><li data-value="3" class="option">France</li><li data-value="4" class="option">Japan</li></ul></div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6">
                                                    <div class="form-group">
                                                        <label>Font size <span class="required">*</span></label>
                                                        <input id="font-size" type="number" class="form-control" value="">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-lg-2 col-md-6">
                                                    <div class="form-group">
                                                        <label>Color<span class="required">*</span></label>
                                                        <input id="color" type="color" class="form-control">
                                                    </div>
                                                </div> --}}
                                                <div class="col-lg-1 col-md-6">
                                                    <div class="form-group">
                                                        <label>Refresh <span class="required"></span></label>
                                                        <i id="refresh" class="bi-bootstrap-reboot" style="font-size:40px; cursor: pointer"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-6">
                                                    <div class="form-group">
                                                        <label>Undo <span class="required"></span></label>
                                                        <i onclick="undo()" class="bi-arrow-counterclockwise" style="font-size:40px; cursor: pointer"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-6">
                                                    <div class="form-group">
                                                        <label>Redo <span class="required"></span></label>
                                                        <i onclick="redo()" class="bi-arrow-clockwise" style="font-size:40px; cursor: pointer"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-6">
                                                    <div class="form-group">
                                                        <label>Add Text <span class="required"></span></label>
                                                        <i id="addTextBox" class="bi-file-plus-fill" style="font-size:40px; cursor: pointer"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-6" style="width: 132px">
                                                    <div class="form-group">
                                                        <label>Replace Logo <span class="required"></span></label>
                                                        <form action="{{ route('allLogos') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="logoType" value="{{ $logo->logoType }}">
                                                            <input type="hidden" name="bName" value="{{ $bName }}">
                                                            <a onclick="this.parentNode.submit()">
                                                                <i class="bi-reply-fill" style="font-size:40px; cursor: pointer; margin-left: 25px"></i>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                               
                                              
                                               
                                                
                                                
                                                
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </form> --}}
            </div>
        </section>
        <!-- Start Services Details Area -->
        <section class="services-details-area small-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="spix-grid-sorting row align-items-center">
                            <div class="col-lg-6 col-md-6 result-count">
                                <p>We found <span class="count">10</span> products available for you</p>
                            </div>
        
                            <div class="col-lg-6 col-md-6 ordering">
                                <div class="select-box">
                                    <label>Sort By:</label>
                                    <select style="display: none;">
                                        <option>Default</option>
                                        <option>Popularity</option>
                                        <option>Latest</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">Default</span><ul class="list"><li data-value="Default" class="option selected">Default</li><li data-value="Popularity" class="option">Popularity</li><li data-value="Latest" class="option">Latest</li><li data-value="Price: low to high" class="option">Price: low to high</li><li data-value="Price: high to low" class="option">Price: high to low</li></ul></div>
                                </div>
                            </div>
                        </div> -->
                        <div id="colorPalette" style="padding-left: 125px;padding-bottom: 10px; display:none">
                            @foreach ($logo->hexcodes as $hexcode)
                                <input type="color" onclick="getColor(this.value)" onchange="setColor(this.value)" value="#{{ $hexcode->hexcode }}" style="width: 3rem; height: 3rem;">
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="single-products-box">
                                    <div class="products-image">
                                        <div id="finalLogo" onclick="hideAll()" style="position: relative;">
                                            <div class="txtContainer" id="txtField">
                                                <div onclick="hideAllExceptLogo()" style="width: 250px; height: 250px; inset: -55px auto auto 510px; display: none;" id='elementResizable' class="elementResizable">
                                                    <img crossorigin="Anonymous" style="cursor: move" id="logoImage" src="{{ config('logo.logoUrl').$logo->image }}" alt="image" >
                                                    <div class="ui-resizable-handle ui-resizable-nw nwgrip" id="nwgrip"></div>
                                                    <div class="ui-resizable-handle ui-resizable-ne negrip" id="negrip"></div>
                                                    <div class="ui-resizable-handle ui-resizable-sw swgrip" id="swgrip"></div>
                                                    <div class="ui-resizable-handle ui-resizable-se segrip" id="segrip"></div>
                                                    <div class="ui-resizable-handle ui-resizable-n ngrip" id="ngrip"></div>
                                                    <div class="ui-resizable-handle ui-resizable-s sgrip" id="sgrip"></div>
                                                    <div class="ui-resizable-handle ui-resizable-e egrip" id="egrip"></div>
                                                    <div class="ui-resizable-handle ui-resizable-w wgrip" id="wgrip"></div>
                                                </div>
                                                <div id="dragTextBox0" class="inputBoxDiv" onclick="idChange(this.id)" style="inset: 200px auto auto 530px">
                                                    <div class="d-flex justify-content-between" style="position: relative">
                                                            <div id='elementResizable0' class="elementResizable">
                                                                <p class="inputBoxResult" id="inputBoxResult0" style="color: {{ $fontColor }}; font-family: {{ $fontFamily }};" onclick="preChangeFontColor(this.id)">{{ $bName }}</p>
                                                                <div class="ui-resizable-handle ui-resizable-nw nwgrip" id="nwgrip0"></div>
                                                                <div class="ui-resizable-handle ui-resizable-ne negrip" id="negrip0"></div>
                                                                <div class="ui-resizable-handle ui-resizable-sw swgrip" id="swgrip0"></div>
                                                                <div class="ui-resizable-handle ui-resizable-se segrip" id="segrip0"></div>
                                                                <div class="ui-resizable-handle ui-resizable-n ngrip" id="ngrip0"></div>
                                                                <div class="ui-resizable-handle ui-resizable-s sgrip" id="sgrip0"></div>
                                                                <div class="ui-resizable-handle ui-resizable-e egrip" id="egrip0"></div>
                                                                <div class="ui-resizable-handle ui-resizable-w wgrip" id="wgrip0"></div>
                                                            </div>
                                                        <span id="remove0" style="display: none" class="removeInputBoxIcon" onclick="removeInputBox(0)">x</span>
                                                    </div>
                                                    <input class="inputBox" style="display: none" onkeyup="writeAbove(0)" id="inputBox0" type="text" maxlength="30" value="{{ $bName }}">
                                                </div>
                                            </div>
                                            <img id="parent" width="990px" style="height: 510px !important" src="assets/img/background.jpg" alt="background">
                                        </div>
                                        
                                    </div>
        
                                    <!-- <div class="products-content center">
                                        <h3 class="fomt-size"><a href="shop-details.html">Logo Name Here</a></h3>
                                        <div class="price">
                                            
                                            <span class="new-price">$120</span>
                                        </div>
                                        
                                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                                    </div> -->
                                    <!-- <div class="features-btn">
                                        <a href="#" class="default-btn new-btn">Want To Customize Free?</a>
                                    </div> -->
                                </div>
                            </div>
        
                           
        
                            
        
        
                            
        
                          
                        </div>
                        <div class="row">
                        

                            <div class="col-lg-12 col-md-12 margin">
                                <div class="order-details">
                                
                                 
    
                                    <div class="payment-box center">
                                       <form action="{{ route('saveLogo') }}" style="display: none" id="saveForm" method="POST">
                                            @csrf
                                            <input type="text" name="logo" id="saveLogo" value="">
                                            <input type="text" name="logoId" id="saveLogoId" value="{{ $logo->id }}">
                                       </form>
                                       <form action="{{ route('purchaseLogo') }}" style="display: none" id="purchaseForm" method="POST">
                                            @csrf
                                            <input type="text" name="logo" id="purchaseLogo" value="">
                                            <input type="text" name="logoId" id="purchaseLogoId" value="{{ $logo->id }}">
                                        </form>
                                        <a onclick="proceedLogo('purchase')" class="default-btn col-lg-3 margin" style="cursor: pointer">
                                            Want To purchase
                                        </a>
                                        <a onclick="proceedLogo('save')" class="default-btn col-lg-3 margin" style="cursor: pointer">
                                            Save Now
                                        </a>
                                        <a id="prevNow" class="default-btn col-lg-3 margin" style="cursor: pointer">
                                            Preview Now
                                        </a>
                                        <a id="unPrev" class="default-btn col-lg-3 margin" style="cursor: pointer; display: none">
                                            UnPreview
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="logoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content" style="height:510px !important;">
                                        {{-- <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div> --}}
                                        <div class="modal-body" id="modalContent">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" id="closeModal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="related-shop">
                                <h4>Priview Products</h4>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-products-box">
                                            <div class="products-image">
                                                <div style="position: relative; left: 0; top: 0;">
                                                    <img src="assets/img/preview1.jpg" alt="image">
                                                    <div class="div2" style="display: none">
                                                        <img class="img2" src="">
                                                        <p class="p2"></p>
                                                    </div>
                                                    <div class="div3" style="display: none">
                                                        <img class="img2" src="" alt="">
                                                        <p class="p2"></p>
                                                    </div>
                                                </div>
                                            </div>
                
                                           
                                        </div>
                                    </div>
                
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-products-box">
                                            <div class="products-image">
                                                <div style="position: relative; left: 0; top: 0;">
                                                    <img src="assets/img/preview2.jpg" alt="image">
                                                    <div class="div4" style="display: none">
                                                        <img class="img2" src="">
                                                        <p class="p2"></p>
                                                    </div>
                                                </div>
                                            </div>
                
                                          
                                        </div>
                                    </div>
                
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-products-box">
                                            <div class="products-image">
                                                <div style="position: relative; left: 0; top: 0;">
                                                    <img src="assets/img/preview3.jpg" alt="image">
                                                    <div class="div5" style="display: none">
                                                        <img class="img2" src="">
                                                        <p class="p2"></p>
                                                    </div>
                                                </div>
                                            </div>
                
                                        
                                        </div>
                                    </div>
                
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                 
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
        {{-- <script src="assets/js/jquery.nice-select.min.js"></script> --}}
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

        <script>

            var img = document.getElementById("logoImage");
            var canvas = document.createElement("canvas");
            var ctx = canvas.getContext("2d");
            var originalPixels = null;
            var currentPixels = null;
            var w,h;
            var hexcodes;

            function setTextBox(i){
                $("#dragTextBox" + i).draggable({
                    containment: "#parent",
                });
                w = $('#elementResizable' + i).width();
                h = $('#elementResizable' + i).height();
                $('#elementResizable' + i).resizable({
                    maxWidth: 500,
                    maxHeight: 150,
                    containment: "#finalLogo",
                    handles: {
                        'nw': '#nwgrip' + i,
                        'ne': '#negrip' + i,
                        'sw': '#swgrip' + i,
                        'se': '#segrip' + i,
                        'n': '#ngrip' + i,
                        'e': '#egrip' + i,
                        's': '#sgrip' + i,
                        'w': '#wgrip' + i,
                    },
                    resize: function(event, ui) {
                        var size = ui.size;
                        
                        ww = (size.width - w)/250;
                        hh = (size.height - h)/70;

                        $('#inputBoxResult' + i).css("transform", `scale(${1 + ww}, ${1 + hh})`); 
                    }
                });
                $('#elementResizable' + i).rotatable();
            }

            $(document).ready(function(){

                $.get('getFonts', function(data){
                    for(var i=0; i<data.length; i++){
                        var fontName = data[i].name.split('.')[0];
                        var fontType = data[i].name.split('.')[1];
                        if(fontType.toLowerCase == 'ttf'){
                            fontType = "truetype";
                        }
                        else if(fontType.toLowerCase == 'otf'){
                            fontType = "truetype";
                        }
                        $('#fonts').append(`
                            @font-face {
                                font-family: ${fontName};
                                src: url(fontpack/${data[i].name}) format("truetype");
                            }
                        `)
                        $('#font-family').append(`
                            <option value="${fontName}">${fontName}</option>
                        `);
                    }
                });

                hexcodes = $('#colorPalette').html();

                saveMemento($('#inputBoxResult0').html());

                w = $('#elementResizable0').width();
                h = $('#elementResizable0').height();

                setTextBox(0);
                
                $('#elementResizable').draggable({
                    containment: "#parent",
                });

                $('#elementResizable').resizable({
                    containment: "#finalLogo",
                    handles: {
                        'nw': '#nwgrip',
                        'ne': '#negrip',
                        'sw': '#swgrip',
                        'se': '#segrip',
                        'n': '#ngrip',
                        'e': '#egrip',
                        's': '#sgrip',
                        'w': '#wgrip',
                    },
                    resize: function(event, ui) {
                        var size = ui.size;

                        $('#logoImage').width(size.width - 10); 
                        $('#logoImage').height(size.height - 10); 
                    }
                });

                $('#elementResizable').rotatable({
                    handleOffset: {
                        top: -15,
                        left: 0
                    }
                });

                $('#elementResizable').show();

                canvas.width = img.width;
                canvas.height = img.height;

                ctx.drawImage(img, 0, 0, img.naturalWidth, img.naturalHeight, 0, 0, img.width, img.height);
                originalPixels = ctx.getImageData(0, 0, img.width, img.height);
                currentPixels = ctx.getImageData(0, 0, img.width, img.height);

                img.onload = null;
            })

            function hexToRGB(hex)
            {
                var long = parseInt(hex.replace(/^#/, ""), 16);
                return {
                    R: (long >>> 16) & 0xff,
                    G: (long >>> 8) & 0xff,
                    B: long & 0xff
                };
            }

            function changeColor(recentColor, newColor)
            {
                // pixels();
                // console.log(newColor);
                if(!originalPixels) return; // Check if image has loaded
                // var newColor = hexToRGB(document.getElementById("color").value);
                newColor = hexToRGB(newColor);
                recentColor = hexToRGB(recentColor);
                
                for(var I = 0, L = originalPixels.data.length; I < L; I += 4)
                {
                    if(currentPixels.data[I + 3] > 0) // If it's not a transparent pixel
                    {
                        // if(currentPixels.data[I] == recentColor.R){
                        //     console.log(currentPixels.data[I] + ',' + currentPixels.data[I + 2] + ','  + currentPixels.data[I + 2]);
                        //     console.log(recentColor);
                        // }
                        // console.log(recentColor);
                        // console.log(originalPixels.data[I], originalPixels.data[I + 1], originalPixels.data[I + 2]);
                        if(currentPixels.data[I] == recentColor.R && currentPixels.data[I + 1] == recentColor.G && currentPixels.data[I + 2] == recentColor.B)
                        {
                            currentPixels.data[I] = newColor.R;
                            currentPixels.data[I + 1] = newColor.G;
                            currentPixels.data[I + 2] = newColor.B;
                        }
                    }
                }
                // recentColor = newColor;
                ctx.putImageData(currentPixels, 0, 0);
                img.src = canvas.toDataURL("image/png");
            }

            var i = 0;
            var pVal, intVal;

            $('#addTextBox').click(function(){ 
                i++;
                var a = `
                            <div id="dragTextBox${i}" class="inputBoxDiv" onclick="idChange(this.id)" style="inset: 200px auto auto 500px">
                                <div class="d-flex justify-content-between" style="position: relative">
                                    <div id='elementResizable${i}' class="elementResizable" style="width: 270px">
                                        <p class="inputBoxResult" id="inputBoxResult${i}" onclick="preChangeFontColor(this.id)">This is a textfield</p>
                                        <div class="ui-resizable-handle ui-resizable-nw nwgrip" id="nwgrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-ne negrip" id="negrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-sw swgrip" id="swgrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-se segrip" id="segrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-n ngrip" id="ngrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-s sgrip" id="sgrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-e egrip" id="egrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-w wgrip" id="wgrip${i}"></div>
                                    </div>
                                    <span id="remove${i}" style="display: none" class="removeInputBoxIcon" onclick="removeInputBox(${i})">x</span>
                                </div>
                                <input class="inputBox" style="display: none" onkeyup="writeAbove(${i})" id="inputBox${i}" type="text" maxlength="30" value="This is a textfield">
                            </div>
                        `;
                $('#txtField').append(a);
                setTextBox(i);
            });

            function writeAbove(i){
                var inp = $('#inputBox' + i).val();
                $('#inputBoxResult' + i).html(inp);
                if(inp.length <= 30){
                    saveMemento(inp);
                }
            }

            function removeInputBox(i){
                var loc = $('#dragTextBox' + i).css('inset');
                var fz = $('#inputBoxResult' + i).css('font-size');
                var c = $('#inputBoxResult' + i).css('color');
                var ff = $('#inputBoxResult' + i).css('font-family');
                
                var a = `
                            <div id="dragTextBox${i}" class="inputBoxDiv" onclick="idChange(this.id)" style="inset: ${loc}">
                                <div class="d-flex justify-content-between" style="position: relative">
                                    <div id='elementResizable${i}' class="elementResizable">
                                        <p class="inputBoxResult" id="inputBoxResult${i}" style='font-size: ${fz}; font-family: ${ff}; color: ${c}' onclick="preChangeFontColor(this.id)"></p>
                                        <div class="ui-resizable-handle ui-resizable-nw nwgrip" id="nwgrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-ne negrip" id="negrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-sw swgrip" id="swgrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-se segrip" id="segrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-n ngrip" id="ngrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-s sgrip" id="sgrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-e egrip" id="egrip${i}"></div>
                                        <div class="ui-resizable-handle ui-resizable-w wgrip" id="wgrip${i}"></div>
                                    </div>
                                    <span id="remove${i}" style="display: none" class="removeInputBoxIcon" onclick="removeInputBox(${i})">x</span>
                                </div>
                                <input class="inputBox" style="display: none" onkeyup="writeAbove(${i})" id="inputBox${i}" type="text" maxlength="30" value="This is a textfield">
                            </div>
                        `;
                saveMemento(a);
                pVal = $('#inputBoxResult' + i).html();
                inpVal = $('#inputBox' + i).val();
                $('#dragTextBox' + i).remove();
                $('#colorPalette').html('');
            }

            var id;

            function idChange(tmp){
                id = tmp.charAt(tmp.length - 1);
                $('#elementResizable' + id).css('border', '1px solid');
                $('#nwgrip' + id).css('border', '1px solid');
                $('#negrip' + id).css('border', '1px solid');
                $('#swgrip' + id).css('border', '1px solid');
                $('#segrip' + id).css('border', '1px solid');
                $('#ngrip' + id).css('border', '1px solid');
                $('#egrip' + id).css('border', '1px solid');
                $('#sgrip' + id).css('border', '1px solid');
                $('#wgrip' + id).css('border', '1px solid');
                $('#inputBox' + id).show();
                $('#remove' + id).show();
                $('#elementResizable' + id + ' div:last-child').css('display', 'block');
                
                for(var k=0; k<=i; k++){
                    if(k != id){
                        $('#elementResizable' + k).css('border', '0');
                        $('#nwgrip' + k).css('border', '0');
                        $('#negrip' + k).css('border', '0');
                        $('#swgrip' + k).css('border', '0');
                        $('#segrip' + k).css('border', '0');
                        $('#ngrip' + k).css('border', '0');
                        $('#egrip' + k).css('border', '0');
                        $('#sgrip' + k).css('border', '0');
                        $('#wgrip' + k).css('border', '0');
                        $('#inputBox' + k).hide();
                        $('#remove' + k).hide();
                        $('#elementResizable' + k + ' div:last-child').css('display', 'none');
                    }
                }

                $('#elementResizable').css('border', '0');
                $('#negrip').css('border', '0');
                $('#swgrip').css('border', '0');
                $('#nwgrip').css('border', '0');
                $('#segrip').css('border', '0');
                $('#ngrip').css('border', '0');
                $('#egrip').css('border', '0');
                $('#sgrip').css('border', '0');
                $('#wgrip').css('border', '0');
                $('#elementResizable div:last-child').css('display', 'none');
            }

            function hideAllExceptLogo(){
                
                $('#elementResizable').css('border', '1px solid');
                $('#nwgrip').css('border', '1px solid');
                $('#negrip').css('border', '1px solid');
                $('#swgrip').css('border', '1px solid');
                $('#segrip').css('border', '1px solid');
                $('#ngrip').css('border', '1px solid');
                $('#egrip').css('border', '1px solid');
                $('#sgrip').css('border', '1px solid');
                $('#wgrip').css('border', '1px solid');
                $('#elementResizable div:last-child').css('display', 'block');

                for(var k=0; k<=i; k++){
                    $('#elementResizable' + k).css('border', '0');
                    $('#nwgrip' + k).css('border', '0');
                    $('#negrip' + k).css('border', '0');
                    $('#swgrip' + k).css('border', '0');
                    $('#segrip' + k).css('border', '0');
                    $('#ngrip' + k).css('border', '0');
                    $('#egrip' + k).css('border', '0');
                    $('#sgrip' + k).css('border', '0');
                    $('#wgrip' + k).css('border', '0');
                    $('#inputBox' + k).hide();
                    $('#remove' + k).hide();
                    $('#elementResizable' + k + ' div:last-child').css('display', 'none');
                }
            }

            function hideAll(){
                var x = event.target.id;
                if(x == 'finalLogo' || x == 'txtField' || x == 'parent'){
                    $('#elementResizable').css('border', '0');
                    $('#negrip').css('border', '0');
                    $('#swgrip').css('border', '0');
                    $('#nwgrip').css('border', '0');
                    $('#segrip').css('border', '0');
                    $('#ngrip').css('border', '0');
                    $('#egrip').css('border', '0');
                    $('#sgrip').css('border', '0');
                    $('#wgrip').css('border', '0');
                    $('#elementResizable div:last-child').css('display', 'none');

                    for(var k=0; k<=i; k++){
                        $('#elementResizable' + k).css('border', '0');
                        $('#nwgrip' + k).css('border', '0');
                        $('#negrip' + k).css('border', '0');
                        $('#swgrip' + k).css('border', '0');
                        $('#segrip' + k).css('border', '0');
                        $('#ngrip' + k).css('border', '0');
                        $('#egrip' + k).css('border', '0');
                        $('#sgrip' + k).css('border', '0');
                        $('#wgrip' + k).css('border', '0');
                        $('#inputBox' + k).hide();
                        $('#remove' + k).hide();
                        $('#elementResizable' + k + ' div:last-child').css('display', 'none');
                    }
                }
            }

            function preChangeFontColor(id){
                var txtId = id.charAt(id.length - 1);
                color = $('#' + id).css('color');
                var tmp = color.split(',');
                var r = parseInt(tmp[0].replace('rgb(', ''));
                var g = parseInt(tmp[1].replace(' ', ''));
                var b = parseInt(tmp[2].replace(')', '').replace(' ', ''));
                var c = rgbToHex(r,g,b);
                $('#colorPalette').html(`
                    <input type="color" onchange="changeFontColor(${txtId}, this.value)" value="${c}" style="width: 3rem; height: 3rem;">
                `);
                $('#colorPalette').show();
            }

            function changeFontColor(id, color){
                $('#inputBoxResult' + id).css('color', color);
            }

            $('#refresh').click(function(){
                i = 0;
                var src = $('#logoImage').attr('src');
                $('#txtField').html(`
                    <img onclick="main()" style="cursor: move" id="logoImage" src="${src}" alt="image" >
                    <div id="dragTextBox0" class="inputBoxDiv" onclick="idChange(this.id)" style="inset: 200px auto auto 500px">
                        <div class="d-flex justify-content-between" style="position: relative">
                                <div id='elementResizable0' class="elementResizable">
                                    <p class="inputBoxResult" id="inputBoxResult0" style="color: {{ $fontColor }}; font-family: {{ $fontFamily }};" onclick="preChangeFontColor(this.id)">{{ $bName }}</p>
                                    <div class="ui-resizable-handle ui-resizable-nw nwgrip" id="nwgrip0" ></div>
                                    <div class="ui-resizable-handle ui-resizable-ne negrip" id="negrip0" ></div>
                                    <div class="ui-resizable-handle ui-resizable-sw swgrip" id="swgrip0" ></div>
                                    <div class="ui-resizable-handle ui-resizable-se segrip" id="segrip0" ></div>
                                    <div class="ui-resizable-handle ui-resizable-n ngrip" id="ngrip0" ></div>
                                    <div class="ui-resizable-handle ui-resizable-s sgrip" id="sgrip0" ></div>
                                    <div class="ui-resizable-handle ui-resizable-e egrip" id="egrip0" ></div>
                                    <div class="ui-resizable-handle ui-resizable-w wgrip" id="wgrip0" ></div>
                                </div>
                            <span id="remove0" class="removeInputBoxIcon" onclick="removeInputBox(0)">x</span>
                        </div>
                        <input class="inputBox" onkeyup="writeAbove(0)" id="inputBox0" type="text" maxlength="30" value="{{ $bName }}">
                    </div>
                `);

                setTextBox(0);

            });

            $('#font-size').keyup(function(){
                $('#inputBoxResult' + id).css('font-size', $(this).val() + "px");
            });

            $('#font-family').change(function(){
                $('#inputBoxResult' + id).css('font-family', $(this).val());
            });

            const mementos = [];

            function saveMemento(a) {
                mementos.push(a);
            }

            function undo() {
                var tmp = mementos.pop();
                if(tmp != null)
                {
                    saveRedo(tmp);
                }
                console.log(mementos[mementos.length-1]);
                console.log(tmp);
                if(tmp.includes('dragTextBox')){
                    // console.log(tmp);
                    $('#txtField').append(tmp);
                    
                    setTextBox(id);

                    $('#inputBoxResult' + id).html(pVal);
                    $('#inputBox' + id).val(inpVal);
                }
                else{
                    var inp = mementos[mementos.length-1];
                    $('#inputBoxResult' + id).html(inp ? inp : tmp);
                    $('#inputBox' + id).val(inp ? inp : tmp);
                }
            }

            const redos = []

            function saveRedo(a){
                redos.push(a);
            }

            function redo(){
                var inp = redos.pop();
                if(inp != null)
                {
                    saveMemento(inp);
                }
                // console.log(mementos[mementos.length-1]);
                console.log(inp);
                if(inp.includes('dragTextBox')){
                    // console.log(id);
                    $('#dragTextBox' + id).remove();
                }
                else{
                    // var inp = redos[redos.length-1];
                    $('#inputBoxResult' + id).html(inp ? inp : 'This is a text field');
                    $('#inputBox' + id).val(inp ? inp : 'This is a text field');
                }
            }
                       
            $('#prevNow').click(function(){
                // $(this).hide();
                $('#toolBar').hide();
                // $('#unPrev').show();
                $('#elementResizable').draggable({ disabled: true });
                $('.ui-rotatable-handle').hide();
                $('#elementResizable').css('border', '0px');
                $('#nwgrip').css('display', 'none');
                $('#negrip').css('display', 'none');
                $('#swgrip').css('display', 'none');
                $('#segrip').css('display', 'none');
                $('#ngrip').css('display', 'none');
                $('#egrip').css('display', 'none');
                $('#sgrip').css('display', 'none');
                $('#wgrip').css('display', 'none');
                
                var logoInset = $('#elementResizable').css('inset');
                var x = parseInt(logoInset.split(' ')[0]) + 60;
                var y = parseInt(logoInset.split(' ')[3]) - 80;
                var newInset = `${x}px auto auto ${y}px`;
                $('#elementResizable').css('inset', newInset);
                $('#elementResizable').css('width', '314px');
                $('#elementResizable').css('height', '314px');

                var insets = [];
                for(var j=0; j<=i; j++){
                    $('#inputBox' + j).attr('type', 'hidden');
                    $('#remove' + j).html('');
                    $('#elementResizable' + j).css('border', '0px');
                    $('#nwgrip' + j).css('display', 'none');
                    $('#negrip' + j).css('display', 'none');
                    $('#swgrip' + j).css('display', 'none');
                    $('#segrip' + j).css('display', 'none');
                    $('#ngrip' + j).css('display', 'none');
                    $('#egrip' + j).css('display', 'none');
                    $('#sgrip' + j).css('display', 'none');
                    $('#wgrip' + j).css('display', 'none');
                    $('#dragTextBox' + j).draggable({
                        disabled: true
                    });
                    var tmp = $('#dragTextBox'  + j).css('inset');
                    insets.push(tmp);
                    x = parseInt(tmp.split(' ')[0]) + 115;
                    y = parseInt(tmp.split(' ')[3]) - 35;
                    newInset = `${x}px auto auto ${y}px`;
                    $('#dragTextBox' + j).css('inset', newInset);
                }

                $('#modalContent').html($('#txtField').html());

                $('#logoModal').modal('show');

                $('#logoModal').on('hidden.bs.modal', function () {
                    set(logoInset, insets);
                });

                $('.div2').show();
                $('.div3').show();
                $('.div4').show();
                $('.div5').show();

                var previewImgSrc = $('#logoImage').attr('src');
                $('.img2').attr('src', previewImgSrc);
                // $('.img3').attr('src', previewImgSrc);

                var tmp1 = $('#inputBoxResult0').css('color');
                var tmp2 = $('#inputBoxResult0').css('font-family');
                $('.p2').html($('#inputBoxResult0').html());
                $('.p2').css('color', tmp1);
                $('.p2').css('font-family', tmp2);
                $('.p3').html($('#inputBoxResult0').html());
                $('.p3').css('color', tmp1);
                $('.p3').css('font-family', tmp2);
            });
            
            $('#closeModal').click(function(){
                $('#logoModal').modal('hide');
            });

            function set(logoInset, insets){
                // $(this).hide();
                $('#toolBar').show();
                // $('#prevNow').show();
                $('#elementResizable').draggable({ disabled: false });
                $('.ui-rotatable-handle').show();
                $('#elementResizable').css('border', '1px solid black');
                $('#nwgrip').css('display', 'block');
                $('#negrip').css('display', 'block');
                $('#swgrip').css('display', 'block');
                $('#segrip').css('display', 'block');
                $('#ngrip').css('display', 'block');
                $('#egrip').css('display', 'block');
                $('#sgrip').css('display', 'block');
                $('#wgrip').css('display', 'block');
                $('#elementResizable').css('inset', logoInset);

                for(var j=0; j<=i; j++){
                    $('#inputBox' + j).attr('type', 'text');
                    $('#remove' + j).html('x');
                    $('#elementResizable' + j).css('border', '1px solid black');
                    $('#nwgrip' + j).css('display', 'block');
                    $('#negrip' + j).css('display', 'block');
                    $('#swgrip' + j).css('display', 'block');
                    $('#segrip' + j).css('display', 'block');
                    $('#ngrip' + j).css('display', 'block');
                    $('#egrip' + j).css('display', 'block');
                    $('#sgrip' + j).css('display', 'block');
                    $('#wgrip' + j).css('display', 'block');
                    $('#dragTextBox' + j).draggable({
                        disabled: false
                    });
                    $('#dragTextBox' + j).css('inset', insets[j]);
                }

                $('#elementResizable').css('width', '250px');
                $('#elementResizable').css('height', '250px');
            }

            var colors;

            const rgbToHex = (r, g, b) => '#' + [r, g, b].map(x => {
                const hex = x.toString(16)
                return hex.length === 1 ? '0' + hex : hex
            }).join('')

            $('#logoImage').click(function(){
                $('#colorPalette').html(hexcodes);
                $('#colorPalette').show();
                // colorThief = new ColorThief()
                // img = $('#logoImage');
                // var tmp = '';
                // colors = colorThief.getPalette(img);
                // for(var i=0; i<colors.length; i++){
                //     var color = rgbToHex(colors[i][0], colors[i][1], colors[i][2]);
                //     tmp += `<input type="color" onclick="getColor(this.value)" onchange="setColor(this.value)" value="${color}" style="width: 3rem; height: 3rem;">`;
                // }
                // $('#colorPalette').html(tmp);
                
                // var image = document.getElementById('hiddenImage');
                // var vibrant = new Vibrant(image);

                // var swatches = vibrant.swatches();

                // for (var swatch in swatches){
                //     if (swatches.hasOwnProperty(swatch) && swatches[swatch]){
                //         console.log(swatch, swatches[swatch].getHex())
                //     }
                // }
            });

            var recentColor;
            function getColor(c){
                // console.log(c);
                recentColor = c;
            }

            function setColor(newColor){
                hexcodes = hexcodes.replace(recentColor.toUpperCase(), newColor.toUpperCase());
                changeColor(recentColor, newColor);
            }

            $('#inputBoxResult0').click(function(){
                $('#font-size').val(30);
            });

            // $('#color').change(function(){
            //     var color = $(this).val();
            //     // console.log(color);
            //     $('#colorPalette').html(`
            //         <input type="color" onclick="getColor(this.value)" onchange="setColor(this.value)" id="${color}" value="${color}" style="width: 3rem; height: 3rem;">
            //     `);
            // });

            function proceedLogo(mode) {
                
                $('.ui-rotatable-handle').hide();
                $('#elementResizable').css('border', '0px');
                $('#nwgrip').css('display', 'none');
                $('#negrip').css('display', 'none');
                $('#swgrip').css('display', 'none');
                $('#segrip').css('display', 'none');
                $('#ngrip').css('display', 'none');
                $('#egrip').css('display', 'none');
                $('#sgrip').css('display', 'none');
                $('#wgrip').css('display', 'none');

                for(var j=0; j<=i; j++){
                    $('#inputBox' + j).attr('type', 'hidden');
                    $('#remove' + j).html('');
                    $('#elementResizable' + j).css('border', '0px');
                    $('#nwgrip' + j).css('display', 'none');
                    $('#negrip' + j).css('display', 'none');
                    $('#swgrip' + j).css('display', 'none');
                    $('#segrip' + j).css('display', 'none');
                    $('#ngrip' + j).css('display', 'none');
                    $('#egrip' + j).css('display', 'none');
                    $('#sgrip' + j).css('display', 'none');
                    $('#wgrip' + j).css('display', 'none');
                }

                var container = document.getElementById("finalLogo");; /* full page */
                html2canvas(container, { allowTaint: true, useCORS:true }).then(function (canvas) {
                    var src = canvas.toDataURL();
                    $('#' + mode + 'Logo').val(src);
                    $('#' + mode + 'Form').submit();
                });
            }

        </script>

    </body>


</html>