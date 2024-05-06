<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranties</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-header-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style type="text/css">
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
    }

    .title {
        text-align: center;
        background-image: url('https://mega.com.vn/media/news/0106_hinh-nen-4k-may-tinh12.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 40px 0;
        height: 200px;
    }

    .title h1 {
        padding-top: 30px;
        font-size: 36px;
        margin-bottom: 10px;
    }

    .title p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .container {
        max-width: 1200px;
        margin: auto;
        padding: 0 20px;
        
    }

    .card-body {
        margin-top: 50px;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        overflow: hidden;
        transition: all 0.3s ease;
        width: 200px; /* Điều chỉnh kích thước của thẻ hình ảnh */
        height: 200px; /* Điều chỉnh kích thước của thẻ hình ảnh */
        display: flex;
        justify-content: center; /* Căn giữa theo chiều ngang */
        align-items: center; /* Căn giữa theo chiều dọc */
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card img {
        width: 90%;
        height: 100%;
        object-fit: cover; /* Đảm bảo hình ảnh không bị vặn hoặc kéo dãn */

    }

    .card-body a {
        display: block;
        text-align: center;
        padding: 20px 0;
        text-decoration: none;
        color: #333;
    }
    </style>
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
    <div class="title">
        <h1>Warranties</h1>
        <p>Learn more about the type of warranties on New Vehicles, Accessories</p>
    </div>
    
    <div class="container">
        <div class="card-body">
            <div class="card">
                <a href="{{ route('goWarrantyBrand', 'hyundai') }}">
                    <img src="{{ asset('img/w-2.png') }}" alt="Huyndai">
                </a>
            </div>
            <div class="card">
                <a href="{{ route('goWarrantyBrand', 'toyota') }}">
                    <img src="{{ asset('img/w-3.png') }}" style="height: 120px; width: 130px;" alt="Toyota">
                </a>
            </div>
            <div class="card">
                <a href="{{ route('goWarrantyBrand', 'kia') }}">
                    <img src="{{ asset('img/w-4.png') }}" alt="Kia">
                </a>
            </div>
            <div class="card">
                <a href="{{ route('goWarrantyBrand', 'bmw') }}">
                    <img src="{{ asset('img/w-1.png') }}" style="height: 150px; width: 150px;" alt="BMW">
                </a>
            </div>
            <div class="card">
                <a href="{{ route('goWarrantyBrand', 'ducati') }}">
                    <img src="{{ asset('img/w-5.png') }}" style="height: 150px; width: 150px;" alt="Ducati">
                </a>
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
                            <a href="#" class="fastlink__link">Toyota Hilux 2.8L</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">Toyota Avanza Premio CVT</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">Toyota Innova 2.0E</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">Toyota Land Cruiser LC300</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">Hyundai Venue 2023</a>
                        </li>
                    </ul>        
                </div>

                <div class="footer-fastlink__wrap">
                    <h3>Featured Motors</h3>
                    <ul class="footer-fastlink__list">
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">New SuperSport 950 S</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">Streetfighter V4 S</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">BMW S1000RR 2022</a>
                        </li> 	
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">BMW S1000R 2021</a>
                        </li>
                    </ul>        
                </div>

                <div class="footer-fastlink__wrap">
                    <h3>Our services</h3>
                    <ul class="footer-fastlink__list">
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">Warranty policy</a>
                        </li>
                        <li class="footer-fastlink__item">
                            <a href="#" class="fastlink__link">Finance service</a>
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
                            <a href="#" class="fastlink__link">Contact Us</a>
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
