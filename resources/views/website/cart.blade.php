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
        <!-- End Navbar Area -->

        <!-- Start Page Banner -->
        <div class="page-banner-area item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>FAQ</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start FAQ Area -->
       
        <section class="terms-of-service-area ptb-100">
            <div class="container" style="margin-bottom: 15px">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Logo Name</th>
                                <th scope="col">Price</th>
                                {{-- <th scope="col">Quantity</th> --}}
                                {{-- <th scope="col">Total</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $cart)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="{{ $cart->logo }}" alt="item">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">{{ App\Models\Logo::where('id', '=', $cart->logo_id)->value('name') }}</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="unit-amount">
                                            ${{ App\Models\Logo::where('id', '=', $cart->logo_id)->value('price') }}
                                        </span>
                                    </td>
                                    {{-- <td class="product-quantity">
                                        <div class="input-counter">
                                            <span onclick="decrease({{ $cart->id }}, {{ App\Models\Logo::where('id', '=', $cart->logo_id)->value('price') }})" class="minus-btn">
                                                <i class='bx bx-minus'></i>
                                            </span>
                                            <input type="text" value="1" id="quantity{{ $cart->id }}">
                                            <span onclick="increase({{ $cart->id }}, {{ App\Models\Logo::where('id', '=', $cart->logo_id)->value('price') }})" class="plus-btn">
                                                <i class='bx bx-plus'></i>
                                            </span>
                                        </div>
                                    </td> --}}
                                    <td class="product-subtotal">
                                        {{-- <span id="price{{ $cart->id }}" class="subtotal-amount">
                                            ${{ App\Models\Logo::where('id', '=', $cart->logo_id)->value('price') }}
                                        </span> --}}
                                        <form action="{{ route('deleteCartItem', $cart->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a onclick="this.parentNode.submit()" class="remove" style="cursor: pointer">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="user-actions">
                            <h5 class="title">Our Bundles
                            </h5>
                        </div>
                    </div>
                </div>
				<div class="terms-of-service-content">
                    @foreach ($packages as $package)
                        <h3>  
                            <input type="radio" value="{{ $package->price }}" onchange="updateService({{ $package->id }}, {{ $package->price }})" id="paypal" name="radio-group"> {{ $package->name }} ${{ $package->price }}
                        </h3>
                        <ol>
                            @foreach ($package->items as $item)
                                <li>{{ $item->item }}</li>
                            @endforeach
                        </ol>
                    @endforeach
				</div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="user-actions">
                            <h5 class="title">Our Services
                            </h5>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <!-- <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead> -->
                                <tbody id="services">
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-buttons">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <a href="shop-1.html" class="default-btn">
                                        Back to Shop
                                    </a>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                    <a href="#" class="default-btn">
                                        Update Cart
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="cart-totals">
                            <h3>Cart Totals</h3>
                            <ul>
                                <li>Subtotal 
                                    <span class="total">${{ $amount }}</span>
                                </li>
                                <li>Tax 
                                    <span>$0.00</span>
                                </li>
                                <li>Total 
                                    <span><b class="total">${{ $amount }}</b></span>
                                </li>
                            </ul>
                            <div class="mb-3" id="couponDiv">
                                <p style="display: none; font-size: 14px !important; color: red" id="couponMsg">Invalid Coupon Code</p>
                                <label for="">Coupon</label>
                                <input type="text" name="" id="coupon">
                                <button type="button" onclick="checkCoupon()" class="btn btn-sm btn-primary">Apply Coupon</button>
                            </div>
                            <p style="display: none; font-size: 14px !important; color: green" id="couponSuccess">Coupon Activated</p>
                            <form action="{{ route('checkout') }}" id="form" method="POST">
                                @csrf
                                <input type="hidden" id="amount" value="" name="amount">
                                <a style="cursor: pointer" onclick="submitForm()" class="default-btn">
                                    Proceed to Checkout
                                </a>
                            </form>
                            {{-- <a href="{{ route('checkout') }}" class="default-btn">
                                Proceed to Checkout
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End FAQ Area -->

        <!-- Start FAQ Contact Area -->
       
        <!-- End Subscribe Area -->

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
            var amount = parseInt($('.total').html().replace('$', ''));

            function updateService(packageId, price){
                $.get('getServices/' + packageId, function(data){
                    var output = '';
                    for(var i=0; i<data.length; i++){
                        output += `
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="form-check">
                                        <div class="form-check">
                                            <input type="checkbox" onchange="updateAmount(${data[i].price})" class="form-check-input" id="checkme">
                                            <label class="form-check-label" for="checkme">${data[i].service}</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="product-name">
                                    1qty
                                </td>
                                <td class="product-price">
                                    <span class="unit-amount">Price - $${data[i].price}</span>
                                </td>
                            </tr>
                        `;
                    }
                    $('#services').html(output);
                });
                $('.total').html('$' + (amount + price));
            }

            function updateAmount(price){
                var tmp = parseInt($('.total').html().replace('$', ''));
                if(event.currentTarget.checked){
                    $('.total').html('$' + (tmp + price));
                }
                else{
                    $('.total').html('$' + (tmp - price));
                }
            }

            function checkCoupon(){
                var price =  parseFloat($('.total').html().replace('$', ''));
                $.get('checkCoupon/' + $('#coupon').val(), function(res){
                    if(res == 0){
                        $('#coupon').css('border-color', 'red');
                        $('#couponMsg').show();
                        $('.total').html('$' + price);
                    }
                    else{
                        $('#couponDiv').hide();
                        $('#couponSuccess').show();
                        $('.total').html('$' + (price - (price*res)/100));
                        $('#coupon').val('');
                    }
                });
            }

            function submitForm(){
                $('#amount').val($('.total').html().replace('$', ''));
                $('#form').submit();
            }

        </script>

    </body>

<!-- Mirrored from templates.envytheme.com/spix/default/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 18:09:31 GMT -->
</html>