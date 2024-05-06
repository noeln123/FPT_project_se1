<link rel="stylesheet" type="text/css" href="{{ asset('css/tuan-catalogue.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/khai-header-footer.css') }}">
<script>
  // "global" vars, built using blade
  var imgsUrl = '{{ URL::asset('/img') }}';
  var baseUrl = '{{ URL::asset('') }}';
</script>
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
    <div class="show-car">
      <div class="boxleft">
        <div class="img-car">
          <?php $id = $vehicleDetails[0]->id ?>
          {{-- <img src="{{ asset("img/1_$id.avif") }}" alt=""/> --}}
          <?php 
            $colors = $vehicleDetails[0]->color_name;
            $colors = explode(",",$colors);
          ?>
          <img src="{{ asset("img/$vehicleId" . "_$id" . "_$colors[0].jpg") }}" alt="">
          <div clas="img-car__dec">
            <p class="dec__car">All images and parameters displayed are for illustration and reference purposes only. The product selected by the Customer may have images and specifications different from those shown depending on the Vehicle Sales Contract with the Customer. PLEASE NOTE carefully check the proposal sent to the Customer that the Distributor provides to ensure the accuracy of equipment and vehicle configuration.</p>
          </div>
        </div>
      </div>
      <div class="boxright">
        <div class="information-car">
            <div class="information-car__name">
              <p class="name-car">{{ $vehicleDetails[0]->name }}</p>
            </div>
            <div class="information-car__price">
              <span>Price</span>
              <h3>${{ $vehicleDetails[0]->price }}</h3>
            </div>
            <div class="information-car__dec">
              <span>
                  <i class="fa-solid fa-taxi"></i>
                  {{ $vehicleDetails[0]->engine_power }}
              </span>
              <span>
                  <i class="fa-solid fa-gas-pump"></i>
                  {{ $vehicleDetails[0]->engine_type }}
              </span>
              <span>
                  <i class="fa-solid fa-stairs"></i>
                  Floor Number
              </span>
            </div>

            <div class="information-car__color">
              <button>White</button>
              <button>Black</button>
            </div>

            <div class="information-car__contact">
              <button type="submit">Contact for consultation now</button>
            </div>
        </div>
      </div>
    </div>

    <div class="car_information__name">
      <button>Parameters</button>
    </div>

    <div class="car_information">
        <div class="car_information-1">
          <div class="information-1__left">
            <strong>Detail</strong>
          </div>
          <div class="information-1__right">
            <table>
              <tr>
                <th>Exterior color</th>
                <th>Working capacity</th>
              </tr>
              <tr>
                <td class="information__database">{{ $vehicleDetails[0]->color_name }}</td>
                <td class="information__database">1.496 cm³</td>
              </tr>

              <tr>
                <th>Number of cylinders</th>
                <th>Length</th>
              </tr>
              <tr>
                <td class="information__database">4</td>
                <td class="information__database">4.751 mm</td>
              </tr>

              <tr>
                <th>Width</th>
                <th>Height</th>
              </tr>
              <tr>
                <td class="information__database">1.820 mm</td>
                <td class="information__database">1.437 mm</td>
              </tr>

              <tr>
                <th>Weight </th>
                <th>Maximum weight</th>
              </tr>
              <tr>
                <td class="information__database">1.650 kg</td>
                <td class="information__database">2.265 kg</td>
              </tr>

              <tr>
                <th>Number of seats</th>
                <th>Door number</th>
              </tr>
              <tr>
                <td class="information__database">5</td>
                <td class="information__database">4</td>
              </tr>

              <tr>
                <th>Maximum Torque</th>
                <th>Interior color</th>
              </tr>
              <tr>
                <td class="information__database">{{ $vehicleDetails[0]->engine_torque }}</td>
                <td class="information__database">Brown</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="car_information-2">
          <button>
          <strong>Trang bị tiêu chuẩn</strong>
          <i class="fa-solid fa-angle-down"></i>

          </button>
        </div>
    </div>

    
  </div>

  <div class="map">
    <div class="grid">
      <div class="body">
        <p id="name">Contact Distributor HyunDai</p>
        <div id="map" style="width:100%;height:500px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29789.94374216572!2d105.7189803743164!3d21.042968100000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455c027bab193%3A0xcc859a35773f7a9b!2zxJDhuqBJIEzDnSBIWVVOREFJIEPhuqZVIERJ4buETg!5e0!3m2!1svi!2sus!4v1713087130230!5m2!1svi!2sus" width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="grid">
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

