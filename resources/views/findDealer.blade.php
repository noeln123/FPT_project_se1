<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tuan-findDealer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-header-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/khai-font.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script>
        function locate(name) {
            document.getElementById('map-frame').src = `https://www.google.com/maps/embed/v1/search?q=${name}&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8`
        }
        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                inputText = document.getElementById('findDealer').value;
                inputText = inputText.toLowerCase()
                if (inputText.indexOf('toyota') !== -1) {
                    document.getElementById('map-toyota').style.display = 'block'
                    document.getElementById('map-kia').style.display = 'none'
                    document.getElementById('map-hyundai').style.display = 'none'
                } else if (inputText.indexOf('hyundai') !== -1 || inputText.indexOf('hyundai') !== -1 || inputText.indexOf('huynhdai') !== -1 || inputText.indexOf('hyunhdai') !== -1) {
                    document.getElementById('map-hyundai').style.display = 'block'
                    document.getElementById('map-kia').style.display = 'none'
                    document.getElementById('map-toyota').style.display = 'none'
                } else if (inputText.indexOf('kia') !== -1) {
                    document.getElementById('map-kia').style.display = 'block'
                    document.getElementById('map-hyundai').style.display = 'none'
                    document.getElementById('map-toyota').style.display = 'none'
                }
            }
}
    </script>
</head>

<style>
    body {
        box-sizing: border-box;
    }
</style>

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
    <div class="body-find">
        <div class="find-left">
            <div class="grid-find2">
                <div class="bd-find">
                    <p>FIND A DEALER</p>

                    <div class="find">
                        <i class="fa-solid fa-location-dot"></i>
                        <input list="browsers" name="find-name" id="findDealer" placeholder="Enter name dealer" onkeydown="handleKeyPress(event)"/>
                        <datalist id="browsers">
                            <option value="Toyota">
                            <option value="KIA">
                            <option value="Hyundai">
                        </datalist>
                        <button class="find-name" onclick="findDealer()" type="submit"><i
                                class="fa-brands fa-sistrix"></i></button>
                    </div>
                </div>
            </div>
            <div class="map-toyota" id="map-toyota" style="display: block;">
                <div class="grid-find2">
                    <div class="show-map">
                        <h3>Toyota My Dinh</h3>
                        <p>15 Pham Hung</p>
                        <p>My Dinh, Ha Noi</p>
                        <p>Fax: 0902279900</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('toyotamydinh')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>Toyota Thang Long</h3>
                        <p>316 Cau Giay</p>
                        <p>Cau Giay, Ha Noi</p>
                        <p>Fax: 0936222526</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 5pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 4pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('toyotathanglong')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>Toyota Thanh Xuan</h3>
                        <p>315 Truong Chinh</p>
                        <p>Thanh Xuan, Ha Noi</p>
                        <p>Fax: 0934696669</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>8am - 5pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 5pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('toyotathanhxuan')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>Toyota Ha Dong</h3>
                        <p>989 Quang Trung</p>
                        <p>Ha Dong, Ha Noi</p>
                        <p>Fax: 0866812968</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table class="hours-time">
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('toyotahadong')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>Toyota Giai Phong</h3>
                        <p>807 Giai Phong</p>
                        <p>Hoang Mai, Ha Noi</p>
                        <p>Fax: 0903259295</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('toyotagiaiphong')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-kia" id="map-kia">
                <div class="grid-find2">
                    <div class="show-map">
                        <h3>KIA Pham Van Dong</h3>
                        <p>234 Pham Van Dong</p>
                        <p>Bac Tu Liem, Ha Noi</p>
                        <p>Fax: 0933805919</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('kiaphamvandong')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>KIA Tay Ho</h3>
                        <p>100 Vo Chi Cong</p>
                        <p>Tay Ho, Ha Noi</p>
                        <p>Fax: 0889963167</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>8am - 5pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('kiatayho')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>KIA My Dinh</h3>
                        <p>100 Me Tri</p>
                        <p>My Dinh, Ha Noi</p>
                        <p>Fax: 0934696669</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>8am - 5pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 5pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('kiamydinh')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>KIA Ha Dong</h3>
                        <p>202 Quang Trung</p>
                        <p>Ha Dong, Ha Noi</p>
                        <p>Fax: 0961584700</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table class="hours-time">
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('kiahadong')">
                            <button class="contact-dealer__button" >LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>KIA Ba Dinh</h3>
                        <p>102 Kim Ma</p>
                        <p>Ba Dinh, Ha Noi</p>
                        <p>Fax: 0903259295</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('kiabadinh')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-hyundai" id="map-hyundai">
                <div class="grid-find2">
                    <div class="show-map">
                        <h3>Hyundai Pham Hung</h3>
                        <p>16A Pham Hung</p>
                        <p>Bac Tu Liem, Ha Noi</p>
                        <p>Fax: 0886381886</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('Hyundaiphamhung')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>Hyundai Cau Dien</h3>
                        <p>30 Cau Dien</p>
                        <p>Tu Liem, Ha Noi</p>
                        <p>Fax: 0889963167</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>8am - 5pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('Hyundaicaudien')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>Hyundai Thanh Cong</h3>
                        <p>79 Dich Vong Hau</p>
                        <p>Cau Giay, Ha Noi</p>
                        <p>Fax: 0906223737</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table>
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>8am - 5pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 5pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('hyundai+thành+công+79')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>

                    <div class="show-map">
                        <h3>Hyundai An Khanh</h3>
                        <p>Km08+400, CT03</p>
                        <p>Hoai Duc, Ha Noi</p>
                        <p>Fax: 0847886886</p>
                        <div class="hours">
                            <h4>Hours</h4>
                            <table class="hours-time">
                                <tr>
                                    <td>Mon-Fri</td>
                                    <td>7:30am - 6pm</td>
                                </tr>
                                <tr>
                                    <td>Sat</td>
                                    <td>8am - 2pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="findDetail">
                            <a href="#">DEALER DETAILS</a>
                            <a href="#">DEALER SITE</a>
                            <a href="#">SCHEDULE SERVICE</a>
                        </div>
                        <div class="contact-dealer" onclick="locate('hyundai+an+khánh')">
                            <button class="contact-dealer__button">LOCATE ON MAP</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-right">
            <iframe
                src="https://www.google.com/maps/embed/v1/search?q=TOYOTA&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                id="map-frame"></iframe>
        </div>
    </div>

    <script>
        function findDealer() {
            $name = document.getElementById("findDealer").value;
            console.log($name);
        }
    </script>
</body>

</html>