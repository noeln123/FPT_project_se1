<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,100,0,0" />
    <!-- Add the slick-theme.css if you want default styling -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/khai-home.js') }}"></script>
    <title>AutoWord</title>
    <title>GeeksforGeeks </title>
    <!-- add icon link -->
    <link
        rel="icon"
        href="https://cdn-icons-png.flaticon.com/512/44/44386.png"
        type="image/x-icon"
    />
</head>
<body >
    <div class="header">
        <div class="header-left">
            <div class="header-logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="header-logo-img">
                </a>
            </div>
    
            <ul class="header-list">
                <li class="header-item header-dropdown">
                    <a href="#" class="header-item__link">Vehicles</a>
                    <div class="dropdown-menu">
                        <ul class="dropdown-menu__list">
                            <li class="dropdown-menu__list-item ">
                                <a href="{{ route('goCatalogue2') }}" class="dropdown-menu__list-item-link">Motorcycles
                                    <i class="fa-solid fa-motorcycle"></i>
                                </a>
                            </li>
                            <li class="dropdown-menu__list-item ">
                                <a href="{{ route('goCatalogue') }}" class="dropdown-menu__list-item-link">Cars
                                    <i class="fa-solid fa-car-side"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header-item underline">
                    <a href="{{ route('goCompare') }}" class="header-item__link">Compare
                        <i class="fa-solid fa-not-equal"></i>
                    </a>
                </li>
                <li class="header-item underline">
                    <a href="{{ route('goFindDealer') }}" class="header-item__link">
                        Find a dealer
                        <i class="fa-solid fa-location-dot"></i>
                    </a>
                </li>
                <li class="header-item underline">
                    <a href="{{ route('goWarranty') }}" class="header-item__link">
                        Warranty
                        <i class="fa-solid fa-user-check"></i>
                    </a>
                </li>
                <li class="header-item underline">
                    <a href="{{ route('goFinance') }}" class="header-item__link">
                        Finance
                        <i class="fa-solid fa-coins"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="header-right">
            <form class="header__search-input-wrap" action="catalogue">
                    <input type="hidden" name="filter" value="search">
                    <input type="text" class="header__search-input" placeholder="Search" name="keyword">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>
    </div>
    
    <div class="main-slide">
        <div class="main-slide-slick">
            <img src="{{ asset('img/slide-1.jpg') }}" alt="" class="main-slide-show__img">
            <!-- <div class="main-slide-show__img"></div> -->
            <div class="main-slide__desc">
                <h2 class="main-slide__desc-1">Driving Excellence, Unleashing Innovation</h2>
                <h1 class= "main-slide__desc-2">HYUNDAI SANTA FE HYBIRD 2023</h1>
            </div>
            <div class="fog-layer"></div>
            
            <div class="main_slide__disc-arround">
                <div class="main-slide__disc">
                    <a href="{{route('goVehicleDetail', ['car', $car_details[7]->id])}}">Discover More</a>
                </div>
            </div>
        </div>


        <div class="main-slide-slick">
            <img src="https://static-images.vnncdn.net/files/publish/2023/8/2/toyota-land-cruiser-prado-2024-ra-mat-voi-hinh-anh-ngay-cang-vuong-vuc-563.jpg" alt="" class="main-slide-show__img">
            <!-- <div class="main-slide-show__img"></div> -->
            <div class="main-slide__desc">
                <h2 class="main-slide__desc-1">Unlock Your Journey, Drive Uniqueness</h2>
                <h1 class= "main-slide__desc-2">MEET THE TOYOTA LAND CRUSHER 2024</h1>
            </div>
            <div class="fog-layer"></div>
            <div class="main_slide__disc-arround">
                <div class="main-slide__disc">
                    <a href="{{route('goVehicleDetail', ['car', $car_details[12]->id])}}">Discover More</a>
                </div>
            </div>
        </div>


        <div class="main-slide-slick">
            <img src="https://www.bmw-motorrad.cl/content/dam/bmwmotorradnsc/common/multiimages/images/models/sport/s1000rr/2022/nsc-s1000rr-P0N3H-multiimage-2560x1440.jpg.asset.1709029804888.jpg" alt="" class="main-slide-show__img">
            <!-- <div class="main-slide-show__img"></div> -->
            <div class="main-slide__desc">
                <h2 class="main-slide__desc-1">Embrace the Extraordinary, Drive with Distinction</h2>
                <h1 class= "main-slide__desc-2">BMW S1000RR 2022</h1>
            </div>
            <div class="fog-layer"></div>
            
            <div class="main_slide__disc-arround">
                <div class="main-slide__disc">
                    <a href="/catalogue/motor/6">Discover More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="content-1">
            <div class="content-1-wrap">
                <h1 style="margin:60px 0px; text-align: center;">Why AutoWorld?</h1>
                <div class="content-1__list">
                    <div class="content-1__card">
                        <img src="https://www.truecar.com/assets/_next/static/images/transparent-pricing-4d7899553551b3a2db95d346ac20062f.svg" alt="">
                        <h2 class="content-2__card-title">Transparent pricing</h2>
                        <p class="content-2__card-info">No surprises here. See how much you'll pay on cars you like.</p>
                    </div>
                    <div class="content-1__card">
                        <img src="https://www.truecar.com/assets/_next/static/images/minutes-not-hours-48afd64860a3e72b36d5986738c77eb4.svg" alt="">
                        <h2 class="content-2__card-title">Minutes, not hours</h2>
                        <p class="content-2__card-info">Time saving tools to help you find the right car in a snap.</p>
                    </div>
                    <div class="content-1__card">
                        <img src="https://www.truecar.com/assets/_next/static/images/shop-your-way-f575579b12ccf6daf39539dab242c0e2.svg" alt="">
                        <h2 class="content-2__card-title">Shop your way</h2>
                        <p class="content-2__card-info">Your own pace, your own space. Shop online where and when it's convenient for you.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="content-2">
            <div class="content-2__body">
                <div class="content-2__left">
                    <div class="content-2__left-tag">
                        NEW
                    </div>
                    <h2 style="color: #343434; font-size: 30px; margin-bottom: 0;">Know your buying power</h2>
                    <p style="color: #707070; font-size: 16px; line-height: 23px; font-weight:500;">How much car can you afford? Find out, then see vehicles that match <br>your budget</p>
                    <img src="https://www.truecar.com/assets/_next/static/images/buying-power-lg-4ade71d5fe5a6d55b8b876e7e957fd2d.png?auto=format&h=313.84615384615387&w=720" alt="">
                </div>
                <div class="content-2__right">
                    <div class="content-2__right-wrap">
                        <div class="content-2__right-down">
                            <h1 class="main-price" style="font-size: 45px; margin-top: 0;">Choose your match</h1>
                        </div>
                        <div class="content-2__right-down">
                            <form action="" class="selectbox-list">
                                <div class="selectbox-list-1">
                                    <div class="selectbox">
                                        <p>Looking for</p>
                                        <i class="fa-solid fa-caret-down"></i>
                                        <select name="type" id="vehicles">
                                            <option value="car">Car</option>
                                            <option value="motor">Motor</option>
                                        </select>
                                    </div>
                                    <div class="selectbox">
                                        <p>Color</p>
                                        <i class="fa-solid fa-caret-down"></i>
                                        <select name="type" id="colors">
                                            <option value="2">White</option>
                                            <option value="3">Black</option>
                                            <option value="1">Red</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="selectbox-list-2">
                                    <div class="selectbox">
                                        <p>Max. pay</p>
                                        <p>$</p>
                                        <input name="max" value="40000" autocomplete="off" id="maxpay">
                                    </div>
                                    <div class="selectbox">
                                        <p>Min. pay</p>
                                        <p>$</p>
                                        <input name="min" value="26000" autocomplete="off" id="minpay">
                                    </div>                                
                                </div>
                            </form>
                        </div>
                        <div class="content-2__right-button">
                            <a href="" id="submitform" onclick="formHandle(this)">
                                <button>
                                    See your matches
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-3" id="demo">
            <div class="content-3-wrap2">
                <div class="content-3-wrap">
                    <h2 style="font-size:40px; text-align: center; width: 100%; margin:0; margin-bottom: 30px;">Shop your favourite brand</h2>
                    <div class="content-3__select-wrap">
                        <div class="content-3__select">
                            <button class="content-3__select-cars" onclick="showCarBrands(this)">
                                <p>&nbsp;Cars&nbsp;</p>
                            </button>
                            <button class="content-3__select-motors" onclick="showMotorBrands(this)">
                                <p>Motors</p>
                            </button>
                        </div>
                    </div>
                    <div class="content-3__brands">
                        <div class="content-3__brands-cars">
                            <a href="/catalogue?brandtype=2&filter=left">
                                <div class="content-3__brand">
                                    <img class='content-3__brand-img' src="{{ asset('img/kia-logo.png') }}" alt="">
                                    <p>Kia</p>
                                </div>
                            </a>
                            <a href="/catalogue?brandtype=1&filter=left">
                                <div class="content-3__brand">
                                    <img class='content-3__brand-img' src="{{ asset('img/hyundai-logo.png') }}" alt="">
                                    <p>Hyundai</p>
                                </div>
                            </a>
                            <a href="/catalogue?brandtype=3&filter=left">
                                <div class="content-3__brand">
                                    <img class='content-3__brand-img' src="{{ asset('img/toyota-logo.png') }}" alt="">
                                    <p>Toyota</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="content-3__brand upcoming" style="margin-right: 0px">
                                    <img class='content-3__brand-img' src="{{ asset('img/ford-logo.png') }}" alt="">
                                    <p>Ford</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="content-3__brand upcoming">
                                    <img class='content-3__brand-img' src="{{ asset('img/audi-logo.png') }}" alt="">
                                    <p>Audi</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="content-3__brand upcoming">
                                    <img class='content-3__brand-img' src="{{ asset('img/chevrolet-logo.png') }}" alt="">
                                    <p>Chevrolet</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="content-3__brand upcoming">
                                    <img class='content-3__brand-img' src="{{ asset('img/landrover-logo.png') }}" alt="">
                                    <p>Land Rover</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="content-3__brand upcoming" style="margin-right: 0px">
                                    <img class='content-3__brand-img' src="{{ asset('img/mazda-logo.png') }}" alt="">
                                    <p>Mazda</p>
                                </div>
                            </a>
                        </div>
                        <div class="content-3__brands-motors">
                            <a href="/catalogue/motor?brandtype=2&filter=left">
                                <div class="content-3__brand">
                                    <img class='content-3__brand-img' src="{{ asset('img/ducati-logo.png') }}" alt="">
                                    <p>Ducati</p>
                                </div>
                            </a>
                            <a href="/catalogue/motor?brandtype=1&filter=left">
                                <div class="content-3__brand">
                                    <img class='content-3__brand-img' src="{{ asset('img/bmw.png') }}" alt="">
                                    <p>BMW Motor</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="content-4">
            <div class="content-4-wrap">
                <h2>content4</h2>
            </div>
        </div> --}}
    </div>

    <div class="wrap-footer">
        <div class="footer">
            <div class="footer-fastlink">
                <div class="footer-fastlink__wrap">
                    <h3>Featured Cars</h3>
                    <ul class="footer-fastlink__list">
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['car', 16]) }}" class="fastlink__link">Toyota Hilux 2.8L</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['car', 15]) }}" class="fastlink__link">Toyota Avanza Premio CVT</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['car', 14]) }}" class="fastlink__link">Toyota Innova 2.0E</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['car', 13]) }}" class="fastlink__link">Toyota Land Cruiser LC300</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['car', 2]) }}" class="fastlink__link">Hyundai Venue 2023</a>
                        </li>
                    </ul>        
                </div>

                <div class="footer-fastlink__wrap">
                    <h3>Featured Motors</h3>
                    <ul class="footer-fastlink__list">
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['motor', 2]) }}" class="fastlink__link">New SuperSport 950 S</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['motor', 3]) }}" class="fastlink__link">Streetfighter V4 S</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['motor', 6]) }}" class="fastlink__link">BMW S1000RR 2022</a>
                        </li> 	
                        <li class="footer-fastlink__item">
                            <a href="{{ route('goVehicleDetail', ['motor', 7]) }}" class="fastlink__link">BMW S1000R 2021</a>
                        </li>
                    </ul>        
                </div>

                <div class="footer-fastlink__wrap">
                    <h3>Our services</h3>
                    <ul class="footer-fastlink__list">
                        <li class="footer-fastlink__item">
                            <a href="/warranty" class="fastlink__link">Warranty policy</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="/finance" class="fastlink__link">Finance service</a>
                        </li>
                    </ul>        
                </div>

                <div class="footer-fastlink__wrap">
                    <h3>About</h3>
                    <ul class="footer-fastlink__list">
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">About Us</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="/contact" class="fastlink__link">Contact Us</a>
                        </li>
                    </ul>        
                </div>

            </div>

            <div class="footer-social">
                <div class="footer-social__icons">
                    <i class="footer-social__icon fa-brands fa-instagram"></i>
                    <i class="footer-social__icon fa-brands fa-square-facebook"></i>
                    <i class="footer-social__icon fa-brands fa-twitter"></i>
                    <i class="footer-social__icon fa-brands fa-youtube"></i>
                    <i class="footer-social__icon fa-brands fa-linkedin"></i>
                </div>
                <div class="footer-social__dowloads">
                    <img class='download-imgs-1' src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="">
                    <img class='download-imgs-2' src="{{ asset('img/dowload-apple.png') }}" alt="">
                </div>
            </div>

            <div class="footer-disclamer">
                <p style="margin: 30px 0 5px 0">For questions about the AutoWorld Buying Service please call <a href="#" style="text-decoration: underline; color: #999999">1-888-878-3227</a><br>
                Certified Dealers are contractually obligated by TrueCar to meet certain customer service requirements and complete the AutoWorld Dealer Certification Program.<br>
                AutoWorld does not broker, sell, or lease motor vehicles. Unless otherwise noted, all vehicles shown on this website are offered for sale by licensed motor vehicle dealers. All vehicles are subject to prior sale. By accessing this website, you agree to the AutoWorld Terms of Service and Privacy Policy.
                </p>
                <a href="#" style="color:#999999; text-decoration: underline; padding-right: 6px;">Terms Of Service</a>
                <p style="display:inline; color:#999999; padding-right: 6px; margin: 2px 0px;">|</p>
                <a href="#" style="color:#999999; text-decoration: underline;">Privacy Policy</a>
                <p style="padding-top: 10px; margin-top:5px; padding-bottom:10px; margin-bottom:0px">© and ™ TrueCar, Inc. All rights reserved. Vehicle photos © Evox Images © 1986-2024 Chrome Data Solutions, LP</p>
            </div>
        </div>
    </div>

</body>
</html>