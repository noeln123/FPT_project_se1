<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Loan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/viet-finance.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-header-footer.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <p style="font-size: larger;">Car Loan Service</p>
        <h1>Roll into the<br> showroom with <br>confidence</h1>
        <p style="font-size: 17px;">With our affordable rates, flexible terms, and trusted know-how, we have<br> 
        everything you need to take your leap whether you’re a first-time buyer or<br>  
        an experienced car shopper.</p>
    </div>
    <div class="wp-content">
        <i class="fa-solid fa-check" style="letter-spacing: 2px;"> 5 minutes or less pre-approval</i>
        <br><br>
        <i class="fa-solid fa-check" style="letter-spacing: 2px;" > No impact to your credit</i>
    </div>
    <div class="pic">
        <img src="https://www.carmudi.vn/_next/image/?url=https://static.carmudi.vn/wp-content/uploads/2020-09/KXndKaCNtk.jpg&w=1200&q=75">
    </div>
    <div class="table-container">
        <h2>Auto loan rates that don’t break the bank</h2>
        <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">APR*<br>(as low as)</th>
                    <th scope="col">Loan Amount**<br> </th>
                    <th scope="col">Max. Term<br>(months)</th>
                    <th scope="col">Vehicle Age<br> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" style="color: #4356FF;">5.99%</th>
                    <td>No Minimum</td>
                    <td>36</td>
                    <td>2021+</td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #4356FF;">5.99%</th>
                    <td>No Minimum</td>
                    <td>48</td>
                    <td>2021+</td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #4356FF;">5.99%</th>
                    <td>No Minimum</td>
                    <td>60</td>
                    <td>2021+</td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #4356FF;">6.24%</th>
                    <td>No Minimum</td>
                    <td>72</td>
                    <td>2021+</td>
                  </tr>
                  <tr>
                    <th scope="row" style="color: #4356FF;">6.99%</th>
                    <td>$15,000+</td>
                    <td>84</td>
                    <td>2021+</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <div class="text-contain">
        <p style="font-size: 28px; font-weight: bolder;">Notes & Fees</p>
        <p>* APR = Annual Percentage Rate. Rates, terms, and fees are subject to change.
            ** Maximum loan amount is $200,000. Rates are effective as of 04/01/2024.
            <br><br>
            Rate includes 0.25% discount for having a Gesa checking account, and 0.50% discount for having a Gesa Visa® credit card. Additionally, rate includes 0.25% discount for auto transfer from a checking or savings account at the time the loan is originated.
            <br><br>
            On new and used auto loans, max advance (loan value) is based on approved credit tier plus tax, license, and dealer add-ons that are claimed refundable. Includes a $75 documentation processing fee. Rate is dependent on credit qualifications. Other rates and terms available. Rates, terms, and fees are subject to change. Contact Gesa for full program details.
            <br><br>
            Ineligible Collateral: salvage vehicles, branded titles, lemon law buybacks, or vehicles with over 125,000 miles.
            <br><br>
            Gesa offers a range of rates that depend on factors such as credit history, loan term, and Gesa account. Actual rates are disclosed to approved applicants in writing prior to loan consummation.
            04/01/2024.
            <br><br>
            Payment Example – New or Used Auto Loan: fixed rate; terms to 60 months. $18.99 a month per $1,000 based on a 5 year loan at 5.25% APR.</p>
    </div>
    <div class="content-a">
        <div class="box-left">
            <img style="height: 430px; width: 630px; float: right" src="https://www.gesa.com/wp-content/uploads/2023/02/pre-approved.jpg">
        </div>
        <div class="box-right" style="width: 50%; padding-right: 150px; text-align: left; margin-top: 4%;">
            <h3 style="font-size: 45px;">Stroll into the showroom<br>with a pre-approved loan</h3><br>
            <p style="font-weight: 400;">Within minutes you can be pre-approved online or over the phone, so 
            you’ll be ready to drive into the sunset when you find the new or used 
            vehicle of your dreams. Our rates are always affordable for new or used 
            vehicles, even for first- time buyers.</p>
        </div>
    </div>
    <div class="content-b" style="margin-bottom: 100px">
        <div class="box-left">
            <h3 style="text-align: left; padding-right: 100px; font-size: 40px; margin-top: 10%;">Why hit the road with<br>Auto World?</h3>
            <br>
            <div style="margin-right: 15%;">
                <i class="fa-solid fa-check" style="letter-spacing: 2px; font-size: 13px; line-height: 5px;"> Advocates for you</i>
                <i class="fa-solid fa-check" style="letter-spacing: 2px; font-size: 13px; line-height: 5px;"> Great rates that beat the big banks</i>
                <i class="fa-solid fa-check" style="letter-spacing: 2px; font-size: 13px; line-height: 30px;"> Get the best possible financing with our First Time Auto Buyer program</i>
                <i class="fa-solid fa-check" style="letter-spacing: 2px; font-size: 13px; line-height: 30px;"> Rate discounts with a Gesa checking account and a Gesa Visa credit card</i>
                <i class="fa-solid fa-check" style="letter-spacing: 2px; font-size: 13px; line-height: 5px;"> Flexible terms and trusted know-how</i>
            </div>
        </div>
        <div class="box-right">
            <img style="height: 430px; width: 630px; float: right; margin-right: 20%; " src="https://www.gesa.com/wp-content/uploads/2022/06/why-hit.jpg">
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
