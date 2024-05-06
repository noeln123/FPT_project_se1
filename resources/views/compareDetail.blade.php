<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-compareDetail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-header-footer.css') }}">
    <title>Document</title>
</head>
<body>
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
                    <div class="dropdown-menu" style="bottom: -90px !important; border-radius: 5px;">
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
    <div class="content-wrap">
        <div class="content">
            <div class="direction">
                <div class="direction__block direction__block-notend direction__block-first">Compare Cars</div>
                <div class="direction__block">{{$carDetails[0]->name}} vs. {{$carDetails[1]->name}}</div>
            </div>
            <div class="mainname">
                <h1>{{$carDetails[0]->name}} vs. {{$carDetails[1]->name}}</h1>
            </div>
            <div class="maintable">
                <table class="maintable-table">
                    <tr class="maintable__header">
                        <td class="maintable__header-data">{{$carDetails[0]->name}}</td>
                        <td class="maintable__header-data">{{$carDetails[1]->name}}</td>

                    </tr>
                    <tr class="maintable__row">
                        <td class="maintable__row-data">
                            <div class="maintable__row-data-wrap">
                                <img src="{{ asset($imgs[0]) }}" alt="" class="maintable__img">
                                <a href="{{route('goCatalogue')}}?&vehicletype={{$carDetails[0]->type_id}}&filter=left" class="">
                                    <button class="btn btn-main">Similar Product</button>
                                </a>
                                <a href="/catalogue/car/{{ $carDetails[0]->id }}">
                                    <button class="btn">
                                        View Detail
                                    </button>
                                </a>
                            </div>
                        </td>
                        <td class="maintable__row-data">
                            <div class="maintable__row-data-wrap">
                                <img src="{{ asset($imgs[1]) }}" alt="" class="maintable__img">
                                <a href="{{route('goCatalogue')}}?&vehicletype={{$carDetails[1]->type_id}}&filter=left" class="">
                                    <button class="btn btn-main">Similar Product</button>
                                </a>
                                <a href="/catalogue/car/{{ $carDetails[1]->id }}">
                                    <button class="btn">
                                        View Detail
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="comparetable">
                <table class="comparetable-table">
                    <tr>
                        <td class="comparetable__header">Price</td>
                        <td class="comparetable__row-data">${{$carDetails[0]->price}}</td>
                        <td class="comparetable__row-data">${{$carDetails[1]->price}}</td>
                    </tr>
                    <tr>
                        <td class="comparetable__header">Engine type</td>
                        <td class="comparetable__row-data">{{$carDetails[0]->engine_type}}</td>
                        <td class="comparetable__row-data">{{$carDetails[1]->engine_type}}</td>
                    </tr>
                    <tr>
                        <td class="comparetable__header">Colors</td>
                        <td class="comparetable__row-data">{{$carDetails[0]->color_name}}</td>
                        <td class="comparetable__row-data">{{$carDetails[1]->color_name}}</td>
                    </tr>
                    <tr>
                        <td class="comparetable__header">Vehicle Type</td>
                        <td class="comparetable__row-data">{{$carDetails[0]->type_name}}</td>
                        <td class="comparetable__row-data">{{$carDetails[1]->type_name}}</td>
                    </tr>
                    <tr>
                        <td class="comparetable__header">Maximum Power</td>
                        <td class="comparetable__row-data">{{$carDetails[0]->engine_power}}</td>
                        <td class="comparetable__row-data">{{$carDetails[1]->engine_power}}</td>
                    </tr>
                    <tr>
                        <td class="comparetable__header">Maximum Torque</td>
                        <td class="comparetable__row-data">{{$carDetails[0]->engine_torque}}</td>
                        <td class="comparetable__row-data">{{$carDetails[1]->engine_torque}}</td>
                    </tr>
                    <tr>
                        <td class="comparetable__header">Fuel Efficiency</td>
                        <td class="comparetable__row-data">{{$carDetails[0]->fuel_efficiency}} kilometers per liter</td>
                        <td class="comparetable__row-data">{{$carDetails[1]->fuel_efficiency}} kilometers per liter</td>
                    </tr>
                    <tr>
                        <td class="comparetable__header">Wheelbase Dimension</td>
                        <td class="comparetable__row-data">{{$carDetails[0]->wheelbase}}mm</td>
                        <td class="comparetable__row-data">{{$carDetails[1]->wheelbase}}mm</td>
                    </tr>
                    <tr>
                        <td class="comparetable__header">Features and Amenities System</td>
                        <td class="comparetable__row-data">{{$carDetails[0]->entertainment_system}}</td>
                        <td class="comparetable__row-data">{{$carDetails[1]->entertainment_system}}</td>
                    </tr>
                </table>
            </div>
        </div>
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