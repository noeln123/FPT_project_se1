<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-header-footer.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tuan-catalogue.css') }}">
    <title>Catalogue</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('filterForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting

            queryUrlBrand = '';
            queryUrlVehicletype = '';
            queryUrlColor = '';

            const selectedBrands = Array.from(document.querySelectorAll('input[type="checkbox"][name="brandtype"]:checked'))
            .map(checkbox => checkbox.value)
            .join('%');
            if (selectedBrands != '') {
                queryUrlBrand = `brandtype=${selectedBrands}`;
            }

            const selectedVehicletypes = Array.from(document.querySelectorAll('input[type="checkbox"][name="vehicletype"]:checked'))
            .map(checkbox => checkbox.value)
            .join('%');
            if (selectedVehicletypes != '') {
                queryUrlVehicletype = `&vehicletype=${selectedVehicletypes}`;
            }

            const selectedColors = Array.from(document.querySelectorAll('input[type="checkbox"][name="color"]:checked'))
            .map(checkbox => checkbox.value)
            .join('%');
            if (selectedColors != '') {
                queryUrlColor = `&color=${selectedColors}`;
            }


            let queryUrl = `${queryUrlBrand}${queryUrlVehicletype}${queryUrlColor}&filter=left`;
            // alert(queryUrl);
            window.location.href = `/catalogue/motor?${queryUrl}`; // Redirect to the generated URL
        });
        });
    </script>
    <script>

        function sleep(ms) {
             return new Promise(resolve => setTimeout(resolve, ms));
        }
        function DropDown(element) {
            let menu = document.getElementsByClassName('show-menu');
            for(let i = 0;i < menu.length; i++) {
                menu[i].classList.remove()
            }

            element.nextElementSibling.style.display = 'block';
            element.setAttribute('onclick', 'javascrip: DropUp(this)')
        }

        function DropUp(element) {

        
            element.nextElementSibling.style.display = 'none';
            element.setAttribute('onclick', 'javascrip: DropDown(this)')
        }

        const contactBtns = document.querySelectorAll('.js-contact');

        
</script>

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

    <div class="list-car__container">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column2">
                    <nav class="category">
                        <div class="icon_category">
                            <img src="{{ asset('img/motor_catalogue_icon.png') }}" alt="" style="height: 100px; object-fit:cover;">
                            <img src="{{ asset('img/motor_catalogue_icon2.png') }}" alt="" style="height: 100px; object-fit:cover;">
                        </div>  
                        <form action="" id="filterForm">             
                            <ul class="category-list">
                                <li class="category-item">
                                    <div onclick="DropDown(this)" href="" id="88888" class="category-item__link">
                                        <div>
                                            <i class="fa-solid fa-user category-item__icons"></i>
                                            <span class="filter_name">Brand</span>
                                        </div>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="show-menu">
                                        <ul>
                                            <li>
                                                <label>
                                                    <input class="check-lable" type="checkbox" name="brandtype" value="1">
                                                    <label for="brandtype" class="name_trademark">BMW Motor</label>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="check-lable" type="checkbox" name="brandtype" value="2">
                                                    <label for="brandtype" class="name_trademark">Ducati</label>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
            

                                <li class="category-item">
                                    <div  onclick="DropDown(this)" href="" id="" class="category-item__link">
                                        <div>
                                            <i class="fa-solid fa-pen category-item__icons"></i>
                                            <span class="filter_name">Color</span>
                                        </div>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="show-menu">
                                        <ul>
                                            <li>
                                                <label>
                                                    <input class="check-lable" type="checkbox" name="color" value="3"></input>
                                                    <label for="color" class="name_trademark">Black</label>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="check-lable" type="checkbox" name="color" value="2"></input>
                                                    <label for="color" class="name_trademark">White</label>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input class="check-lable" type="checkbox" name="color" value="1"></input>
                                                    <label for="color" class="name_trademark">Red</label>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                {{-- <li class="category-item">
                                    <div onclick="DropDown(this)" href="" id="" class="category-item__link">
                                        <div>
                                            <i class="fa-solid fa-bell  category-item__icons"></i>
                                            <span class="filter_name">Offers</span>
                                        </div>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>

                                    <div class="show-menu">
                                        <ul>
                                            <li>
                                                <label>
                                                    <input class="check-lable" type="checkbox"></input>
                                                    <span class="name_trademark">New Offers</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>   --}}
                            </ul>
                            <div class="btn-wrap">
                                <input type='submit' value='Find my favourite' class="btn btn-main">
                            </div>
                        </form>
                    </nav>
                </div>

                <div class="grid__column4">
                    <div class="home-filter" style="display: flex; justify-content: space-between;">

                        <div class="sort-menu">
                            <button onclick="DropDown(this)" href="#" class="btn" style="border-radius: 5px">
                                Sort Price
                                <i class="fa-solid fa-caret-down"></i>
                            </button>
                            <div class="sort-menu__show">
                                <ul class="arrange-list">
                                    <a href="{{ route('goCatalogue2', array_merge(['filter' => 'price', 'type' => 'low2high'], request()->except('type'))) }}">
                                        <li class="arrange-list__link">Price: Low to High</li>
                                    </a>
                                    <a href="{{ route('goCatalogue2', array_merge(['filter' => 'price', 'type' => 'high2low'], request()->except('type')))  }}">
                                        <li class="arrange-list__link">Price: High to Low</li>
                                    </a>
                                </ul>
                            </div>
                        </div>

                        <div class="home-filter__page">
                            <div class="home-filter__page-control">
                                <a href="<?= $car_details->appends(request()->query())->previousPageUrl();?>" 
                                    class="<?php echo $car_details->currentPage() === 1 ? 'home-filter__page-btn home-filter__page-btn-disable' : 'home-filter__page-btn'?>">
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                                {{-- <a href="{{ $products->previousPageUrl() }}" class="home-filter__page-btn home-filter__page-btn-disable">
                                    <i class="fa-solid fa-angle-left"></i>
                                </a> --}}
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">{{$car_details->currentPage()}}</span>/{{$car_details->lastPage()}}
                                </span>
                                <a href="{{ {{--$car_details->nextPageUrl()--}} $car_details->appends(request()->query())->nextPageUrl(); }}" class="<?php echo $car_details->currentPage() === $car_details->lastPage() ? 'home-filter__page-btn home-filter__page-btn-disable' : 'home-filter__page-btn'?>">
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="home-product">
                        <div class="grid__row">
                            @foreach($car_details as $row)
                            <div class="grid__column2-2">
                                
                                <div class="car">
                                    <?php 
                                        $str = $row->image;
                                        $temp = explode(',',$str);
                                    ?>
                                    <div class="imgcar-wrap">
                                        <img src="{{ asset("img/2_$row->id.png") }}" alt=""
                                            style="width:auto;height:137px; text-align:center">
                                    </div>
                                    <h2 class="name-car">{{$row->name}}</h2>
                                    <div class="dec">
                                        <span>
                                            <i class="fa-solid fa-motorcycle"></i>
                                            {{$row->engine_power}}
                                        </span>
                                        <span>
                                            <i class="fa-regular fa-engine"></i>
                                            {{$row->displacement}}
                                        </span>
                                    </div>

                                    <div class="price">
                                        <span>Price</span>
                                        <br>
                                        <span class="show-price">{{$row->price}} $</span>
                                    </div>

                                    <div class="address">
                                        <span>
                                            <i class="fa-solid fa-map-pin"></i>
                                            HuynDai
                                        </span>
                                        <br>
                                        <span>Hoài Đức - Hà Nội</span>
                                    </div>

                                    <div class="show">
                                        <a href="{{ route('goVehicleDetail', ['motor', $row->id]) }}" class="button_showcar">Show Detail</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <!-- <div class="grid__column2-2">
                                <div class="car">
                                    <img src="https://otovinfast.vn/wp-content/uploads/2019/12/white-sa-1105089f25135.png" alt=""
                                        style="width:100%;height:auto;">
                                    <h2 class="name-car">HyunDai i10 2021</h2>
                                    <div class="dec">
                                        <span>
                                            <i class="fa-solid fa-taxi"></i>
                                            150 kW (202 mã lực)
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-gas-pump"></i>
                                            Xăng
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-stairs"></i>
                                            Số Sàn
                                        </span>
                                    </div>

                                    <div class="price">
                                        <span>Giá</span>
                                        <br>
                                        <span class="show-price">1.920.000.000đ</span>
                                    </div>

                                    <div class="address">
                                        <span>
                                            <i class="fa-solid fa-map-pin"></i> 
                                            HuynDai
                                        </span>
                                        <br>
                                        <span>Hoài Đức - Hà Nội</span>
                                    </div>

                                    <div class="show">
                                        <a href="{{ route('goVehicleDetail', ['car', $row->id]) }}" class="button_showcar">Show Detail</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid__column2-2">
                                <div class="car">
                                    <img src="https://otovinfast.vn/wp-content/uploads/2019/12/white-sa-1105089f25135.png" alt=""
                                        style="width:100%;height:auto;">
                                    <h2 class="name-car">HyunDai i10 2021</h2>
                                    <div class="dec">
                                        <span>
                                            <i class="fa-solid fa-taxi"></i>
                                            150 kW (202 mã lực)
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-gas-pump"></i>
                                            Xăng
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-stairs"></i>
                                            Số Sàn
                                        </span>
                                    </div>

                                    <div class="price">
                                        <span>Giá</span>
                                        <br>
                                        <span class="show-price">1.920.000.000đ</span>
                                    </div>

                                    <div class="address">
                                        <span>
                                            <i class="fa-solid fa-neuter"></i>
                                            HuynDai
                                        </span>
                                        <br>
                                        <span>Hoài Đức - Hà Nội</span>
                                    </div>

                                    <div class="show">
                                        <a href="{{ route('goVehicleDetail', ['car', $row->id]) }}" class="button_showcar">Show Detail</a>
                                    </div>
                                </div>
                            </div>

                            <div class="grid__column2-2">
                                <div class="car">
                                    <img src="https://otovinfast.vn/wp-content/uploads/2019/12/white-sa-1105089f25135.png" alt=""
                                        style="width:100%;height:auto;">
                                    <h2 class="name-car">HyunDai i10 2021</h2>
                                    <div class="dec">
                                        <span>
                                            <i class="fa-solid fa-taxi"></i>
                                            150 kW (202 mã lực)
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-gas-pump"></i>
                                            Xăng
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-stairs"></i>
                                            Số Sàn
                                        </span>
                                    </div>

                                    <div class="price">
                                        <span>Giá</span>
                                        <br>
                                        <span class="show-price">1.920.000.000đ</span>
                                    </div>

                                    <div class="address">
                                        <span>
                                            <i class="fa-solid fa-neuter"></i>
                                            HuynDai
                                        </span>
                                        <br>
                                        <span>Hoài Đức - Hà Nội</span>
                                    </div>

                                    <div class="show">
                                        <a href="{{ route('goVehicleDetail', ['car', $row->id]) }}" class="button_showcar">Show Detail</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                            
                            

                            
                    </div>

                    <div class="sub-show">
                        <button class="show__list-car">See more cars</button>
                    </div>
                </div>
            </div>

            <div class="contact">
     </div>

     <div class="menu-contact">
      <div class="grid__row">

      <div class="grid__column3-1">
          <a  href="{{ route('goContact') }}" class="grid__contact js-contact">
              <div class="menu-contact_body">
                  <i class="fa-solid fa-phone icon-button"  ></i>
                  <div class="body__contact">
                      <span class="menu-contact__name">
                        Contact
                      </span>
                      <p class="menu-contact__dec">Ask for advice.</p>
                  </div>
              </div>
        
          </a>
      </div>

      <div class="grid__column3-1">
          <a href="{{ route('goRegister') }}" class="grid__contact js-contact">
              <div class="menu-contact_body">
                  <i class="fa-solid fa-pen icon-button"></i>
                  <div>
                  <span class="menu-contact__name">
                    Sign up for a test drive
                  </span>
                  <p class="menu-contact__dec">Make an appointment with the distributor.</p>
                  </div>
              </div>
          </a>
      </div>

      <div class="grid__column3-1">
          <a href="#" class="grid__contact js-contact">
              <div class="menu-contact_body">
                  <i class="fa-regular fa-calendar-days icon-button"></i>
                  <div>
                  <span class="menu-contact__name">
                    Schedule a service appointment
                  </span>
                  <p class="menu-contact__dec">Make a service appointment at the Distributor.</p>
                  </div>
              </div>
          </a>
      </div>
            </div>
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