<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty Scheme</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/viet-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-header-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
<div class="head">
    <div class="button">
        <a href="{{route('goWarranty')}}" class="back-btn">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>
    <h1 class='txtdeepshadow'>Welcome to auto insurance service of BMW</h1>
</div>
<body>

    <div class="noti">
        <img src="{{ asset('img/w-1.png') }}" style="height: 150px; width: 150px;" alt="BMW">
        <h2 style="padding-top: 30px;">Highest standards for quality and<br> warranties.</h2>
        <p style = "font-family: calibri; padding-top: 30px; font-size: 25px; letter-spacing: -1px; font-weight: 540; line-height: 30px;" >
            Every new BMW is built to the highest quality standards which allow us to offer an unlimited<br> 
            mileage warranty. It provides coverage in the unlikely event a repair is needed during your first<br> 
            five years of ownership. And there's more: warranties include high-voltage batteries and parts,<br> 
            as well as a mobility warranty.
        </p>
    </div>
   
        <div class="container">
            <div style="padding: 50px 0 100px 0;">
                <a href="#content"><i class="fa-solid fa-arrow-down" style="letter-spacing: 2px;"></i>   Unlimited mileage.</a>
                <a href="#content"><i class="fa-solid fa-arrow-down" style="letter-spacing: 2px;"></i>   Annual health checks.</a>
            </div>
            <hr><br>
            <div class="cf-title-02 cf-title-alt-two">
                <h3>New Vehicle
                    <br/> 
                    5-Year Unlimited Mileage Warranty.
                    <span><br>
                        Unlimited peace of mind comes as standard with your Hyundai. Not just because it's built to the highest possible quality 
                        standards the 5-Year Unlimited Mileage warranty your Hyundai comes with is just as well put together.
                    </span><br/>
                </h3>
            </div>
            <div class="content">
                <div class="box-left">
                    <p><h3 style="font-size: 30px;"  id="content">Unlimited mileage.</h3><br>
                        You have plans. We make sure that you can turn them into reality without worrying: with the BMW Warranty you are protected against unexpected repair costs for 36 months without mileage limitation. Even after this you can still relax knowing you’re in good hands. Because, when ordering your new BMW you have the option of easily extending your warranty period to up to 5 years for a small charge.</p>
                </div>
                <div class="box-right" style="padding-top: 0;">
                    <img style="height: 300px; width: 400px; float: left" src="https://www.hermys.com/wp-content/uploads/2024/02/1.png">  
                </div>
            </div>
            
            <div class="content">
                <div class="box-left">
                    <img style="height: 300px; width: 400px; float: right" src="https://www.bmwride.com/wp-content/uploads/2018/09/serviceimgm.jpg">
                </div>
                <div class="box-right" style="width: 50%; padding-right: 150px; text-align: right;">
                    <p><h3 style="font-size: 30px;"  id="content">Annual health checks.</h3><br>
                        • Extension of the warranty for new vehicles to up to 5 years from first registration date
                        <br>
                        • Full cost control as well as quick and convenient correction of defects.
                        <br>
                        • Available at all participating Authorised BMW Service Centres worldwide.
                        </p>  
                </div>
            </div>
        </div> 
</body>
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
</html>
