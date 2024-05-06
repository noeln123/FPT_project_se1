<link rel="stylesheet" type="text/css" href="{{ asset('css/tuan-catalogue.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/khai-header-footer.css') }}">
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

    <div class="grid">
        <div class="body-contact">
            <div class="contact-left">
                <div class="your-name">
                    <label>Your Name</label>
                    <input type="text" placeholder="Enter full name.">
                </div>
                <div class="your-email">
                    <label>Email</label>
                    <input type="email" placeholder="Enter email.">
                </div>
                <div class="number-phone">
                    <label>Number Phone</label>
                    <input type="text" placeholder="Enter your number phone.">
                </div>
                <div class="problem">
                    <label>Message</label>
                    <textarea placeholder="Place us some message, we will reply as soon as we can" name="problem" style="float:top; height: 150px"></textarea>
                </div>
                <button type="submit">Send</button>
            </div>
            <div class="contact-right">
                <p class="contact-us">Contact Us</p>
                <div class="dec-contact">
                    <h2>Get In Touch</h2>
                    <p>We pride ourselves on being responsive and transparent. If you have any questions about our
                        product or company, please
                        don't hesitate to reach out. We'd love to hear from you!<br>For any support or product
                        inquiries, visit our Help Center or contact us at tuangin@gmail.com. For all other inquiries,
                        feel free to reach out to us using the contact information below.</p>
                    <div class="contact-via">
                        <div class="call-us">
                            <i class="fa-solid fa-phone icon-contact "></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>0981 885 908</p>
                            </div>
                        </div>
                        <div class="email-us">
                            <i class="fa-solid fa-envelope icon-contact "></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>tuangin@gmail.com</p>
                            </div>
                        </div>
                        <div class="website">
                            <i class="fa-solid fa-earth-americas icon-contact "></i>
                            <div>
                                <h3>Website</h3>
                                <p>https://www.autoworld.com</p>
                            </div>
                        </div>
                        <div class="address">
                            <i class="fa-solid fa-thumbtack icon-contact "></i>
                            <div>
                                <h3>Address</h3>
                                <p>8A Ton That Thuyet, Nam Tu Liem</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="follow-contact">
                    <h3>Follow Us On</h3>
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-square-threads"></i>
                    <i class="fa-brands fa-square-git"></i>
                    <i class="fa-brands fa-square-hacker-news"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="map-contact">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29789.964340261806!2d105.7435463559395!3d21.04286512520267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ebeb53080d%3A0xf15b60853898ccdf!2zMjYgxJAuIEPhuqd1IERp4buFbiwgUGjDumMgRGnhu4VuLCBC4bqvYyBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2sus!4v1713425996666!5m2!1svi!2sus"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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

