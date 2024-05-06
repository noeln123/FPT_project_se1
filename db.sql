
-- --------------------------------------------------------
CREATE DATABASE eproject_hk1;
use eproject_hk1;

CREATE TABLE `car_company` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_company`
--

INSERT INTO `car_company` (`id`, `company`) VALUES
(1, 'hyundai'),
(2, 'kia'),
(3, 'toyota');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `engine` int(11) NOT NULL,
  `transmission` int(11) NOT NULL,
  `fuel_efficiency` int(11) NOT NULL,
  `dimensions` int(11) NOT NULL,
  `features_and_amenities` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `name`, `company_id`, `color_id`, `type_id`, `engine`, `transmission`, `fuel_efficiency`, `dimensions`, `features_and_amenities`, `image`, `price`) VALUES
(1, 'Hyundai Accent 2021 1.4 MT ', 1, 6, 3, 2, 1, 6, 2, 2, '1_1_black.jpg,1_1_white.jpg', 24000),
(2, 'Hyundai Venue 2023 ', 1, 6, 4, 3, 1, 17, 3, 2, '1_2_black.jpg,1_2_white.jpg', 27000),
(3, 'Hyundai i10 2021 ', 1, 6, 2, 2, 1, 7, 4, 2, '1_3_black.jpg,1_3_white.jpg', 18500),
(4, 'Hyundai Creta ', 1, 6, 4, 4, 3, 8, 5, 2, '1_4_black.jpg,1_4_white.jpg', 18500),
(5, 'Hyundai Elantra ', 1, 6, 3, 9, 5, 13, 6, 2, '1_5_white.jpg,1_5_black.png', 30000),
(6, 'Hyundai Tucson 2022 ', 1, 6, 4, 8, 7, 14, 6, 2, '1_6_black.jpg,1_6_white.jpg', 38000),
(7, 'Hyundai Kona ', 1, 6, 4, 10, 5, 15, 7, 2, '1_7_black.jpg,1_7_white.jpg', 33000),
(8, 'Hyundai SantaFe ', 1, 6, 4, 11, 7, 16, 8, 2, '1_8_black.jpg,1_8_white.jpg', 45000),
(9, 'Toyota camry 2.0 Q', 3, 6, 3, 5, 2, 18, 1, 2, '1_9_black.jpeg,1_9_white.jpg', 51500),
(10, 'Toyota Corolla Altis 1.8V', 3, 6, 3, 6, 2, 19, 2, 2, '1_10_black.jpg,1_10_white.png', 33000),
(11, 'Toyota Vios 1.5 E CVT', 3, 6, 3, 2, 1, 20, 3, 2, '1_11_white.jpeg,1_11_black.jpg', 24400),
(12, 'Toyota Corolla Cross 1.8G ', 3, 6, 4, 3, 2, 11, 4, 2, '1_12_black.jpg,1_12_white.jpg', 32434.8),
(13, 'Toyota Land Cruiser LC300 ', 3, 6, 4, 4, 2, 11, 3, 2, '1_13_black.jpg,1_13_white.jpg', 186000),
(14, 'Toyota Innova 2.0E ', 3, 6, 5, 5, 5, 13, 5, 2, '1_14_black.jpg,1_14_white.jpg', 43000),
(15, 'Toyota Avanza Premio CVT ', 3, 6, 4, 6, 2, 14, 6, 2, '1_15_black.jpg,1_15_white.jpg', 26000),
(16, 'Toyota Hilux 2.8L ', 3, 6, 6, 7, 2, 15, 7, 2, '1_16_white.jpg,1_16_black.png', 43400),
(17, 'Toyota wigo 1.2g mt ', 3, 6, 2, 8, 2, 16, 8, 2, '1_17_white.jpg,1_17_black.png', 15700),
(18, 'Kia Seltos ', 2, 6, 4, 9, 2, 17, 1, 2, '1_18_black.jpg,1_18_white.jpg', 30000),
(19, 'Kia Morning ', 2, 6, 2, 10, 2, 18, 2, 2, '1_19_black.jpg,1_19_white .jpg', 19000),
(20, 'Kia Soluto ', 2, 6, 3, 11, 2, 19, 3, 2, '1_20_black.png,1_20_white.jpg', 19800),
(21, 'Kia Sonet ', 2, 6, 4, 2, 2, 20, 4, 2, '1_21_black.jpg,1_21_white.jpg', 26200),
(22, 'Kia K3 ', 2, 6, 3, 3, 2, 11, 2, 2, '1_22_black.jpg,1_22_white.jpg', 27000),
(23, 'Kia Rondo ', 2, 6, 5, 4, 2, 12, 3, 2, '1_23_black.jpg,1_23_white.jpg', 27000),
(24, 'Kia Carens ', 2, 6, 5, 5, 2, 14, 4, 2, '1_24_black.png,1_24_white.png', 29700),
(25, 'Kia K5 ', 2, 6, 3, 6, 2, 15, 5, 2, '1_25_black.jpg,1_25_white.jpg', 42800);

-- --------------------------------------------------------

--
-- Table structure for table `car_dimensions_details`
--

CREATE TABLE `car_dimensions_details` (
  `id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `wheelbase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_dimensions_details`
--

INSERT INTO `car_dimensions_details` (`id`, `length`, `width`, `height`, `wheelbase`) VALUES
(1, 4385, 1700, 1460, 2570),
(2, 3670, 1680, 1480, 2425),
(3, 3995, 1770, 1605, 2500),
(4, 4300, 1790, 1620, 2610),
(5, 4620, 1800, 1440, 2700),
(6, 4480, 1850, 1650, 2670),
(7, 4165, 1800, 1550, 2600),
(8, 4770, 1890, 1705, 2765);

-- --------------------------------------------------------

--
-- Table structure for table `car_engine_details`
--

CREATE TABLE `car_engine_details` (
  `id` int(11) NOT NULL,
  `engine_type` int(11) NOT NULL,
  `displacement` varchar(255) NOT NULL,
  `maximum_power` varchar(255) NOT NULL,
  `maximum_torque` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_engine_details`
--

INSERT INTO `car_engine_details` (`id`, `engine_type`, `displacement`, `maximum_power`, `maximum_torque`) VALUES
(1, 1, '1.4 L', '98 HP', '132 Nm'),
(2, 1, '1.0 L or 1.2 L ', '66 to 84 HP', '96 to 118 Nm'),
(3, 3, 'Petrol: 1.2-liter Kappa Dual VTVT engine or 1.0-liter Kappa Turbo GDi engine\r\nDiesel: 1.5-liter U2 CRDi engine', '94 to 112 HP', '110 Nm'),
(4, 2, '1.5-liter U2 CRDi engine', '60 to 120 HP', '111 to 222 Nm'),
(5, 1, 'Approximately 1.4 or 1.6 liters', '123 to 138 HP ', '154 to 242 Nm'),
(6, 2, 'Approximately 1.5 liters', '113 to 115 HP ', '250 to 260 Nm '),
(7, 1, '2.0-liter MPI (Multi-Point Injection) ', '150 to 160 HP', '130 to 140 Nm'),
(8, 3, 'Petrol: 2.0-liter MPI (Multi-Point Injection) engine or 1.6-liter Turbo GDi (Gasoline Direct Injection) engine\nDiesel: 1.5-liter CRDi (Common Rail Direct Injection) engine', '100 to 120 HP', '120 Nm'),
(9, 3, 'Petrol: 2.0-liter MPI (Multi-Point Injection) engine or 1.6-liter Turbo GDi (Gasoline Direct Injection) engine\r\nDiesel: 2.0-liter CRDi (Common Rail Direct Injection) engine or 2.0-liter R CRDi (Rail Common Rail Direct Injection) engine', '122 to 131 HP', '130 Nm'),
(10, 3, 'Petrol: 1.6-liter Gamma II GDi (Gasoline Direct Injection) engine\r\nDiesel: 1.6-liter U2 CRDi (Common Rail Direct Injection) engine\r\n', '144 to 167 HP', '100 Nm'),
(11, 3, 'Petrol: 2.5-liter Smartstream G2.5 MPi engine\nDiesel: 2.2-liter Smartstream D2.2 CRDi engine\n', '143 to 156 HP', '122 Nm');

-- --------------------------------------------------------

--
-- Table structure for table `car_features_and_amenities_details`
--

CREATE TABLE `car_features_and_amenities_details` (
  `id` int(11) NOT NULL,
  `entertainment_system` varchar(255) DEFAULT NULL,
  `safety_system` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_features_and_amenities_details`
--

INSERT INTO `car_features_and_amenities_details` (`id`, `entertainment_system`, `safety_system`) VALUES
(1, 'Touchscreen display, Bluetooth connectivity, USB/AUX ports.', 'ABS, airbags, rear parking sensors, electronic brake-force distribution (EBD), electronic stability control (ESC)'),
(2, 'Touchscreen display, Apple CarPlay and Android Auto compatibility, Bluetooth connectivity, USB/AUX ports', 'ABS, airbags, rear parking sensors, electronic stability control (ESC), hill-start assist control, and more'),
(3, 'Touchscreen display, Apple CarPlay and Android Auto compatibility, Bluetooth connectivity, USB/AUX ports', 'ABS with EBD, airbags, rear parking sensors, rearview camera, electronic stability control (ESC), hill-start assist control, and more.'),
(4, 'Touchscreen display, Apple CarPlay and Android Auto connectivity, Bluetooth, USB/AUX ports', 'ABS, airbags, Electronic Stability Control (ESC), blind-spot sensors, rearview camera, hill-start assist control, and various other safety features'),
(5, 'Touchscreen display, Apple CarPlay and Android Auto compatibility, Bluetooth connectivity, USB/AUX ports', 'ABS with EBD, airbags, rearview camera, electronic stability control (ESC), hill-start assist control, and more'),
(6, 'Touchscreen display, Apple CarPlay and Android Auto compatibility, Bluetooth connectivity, USB/AUX ports', 'ABS with EBD, airbags, rearview camera, electronic stability control (ESC), hill-start assist control, blind-spot monitoring, lane-keeping assist, and more'),
(7, 'Touchscreen display, Apple CarPlay and Android Auto compatibility, Bluetooth connectivity, USB/AUX ports', 'ABS with EBD, airbags, rearview camera, electronic stability control (ESC), hill-start assist control, blind-spot monitoring, lane-keeping assist, adaptive cruise control, and more');

-- --------------------------------------------------------

--
-- Table structure for table `car_transmission_details`
--

CREATE TABLE `car_transmission_details` (
  `id` int(11) NOT NULL,
  `transmission_type` varchar(255) NOT NULL,
  `gears` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_transmission_details`
--

INSERT INTO `car_transmission_details` (`id`, `transmission_type`, `gears`) VALUES
(1, '5-speed manual', ''),
(2, '5-speed automated manual ', ''),
(3, '6-speed manual', ''),
(4, '7-speed DCT ', ''),
(5, '6-speed automatic', ''),
(6, 'CVT', ''),
(7, '8-speed automatic', '');

-- --------------------------------------------------------

--
-- Table structure for table `car_type`
--

CREATE TABLE `car_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_type`
--

INSERT INTO `car_type` (`id`, `type`) VALUES
(1, 'micro'),
(2, 'hatchback'),
(3, 'sedan'),
(4, 'suv'),
(5, 'mpv'),
(6, 'convertible'),
(7, 'wagon'),
(8, 'luxury'),
(9, 'antique'),
(10, 'coupe'),
(11, 'sports car'),
(12, 'supercar'),
(13, 'muscle car'),
(14, 'limousine'),
(15, 'hybrid car'),
(16, 'electric car'),
(17, 'diesel car');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'red'),
(2, 'white'),
(3, 'black'),
(4, 'red,white'),
(5, 'red,black'),
(6, 'white,black'),
(7, 'red,white,black'),
(8, 'black,grey');

-- --------------------------------------------------------

--
-- Table structure for table `engine_type`
--

CREATE TABLE `engine_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `engine_type`
--

INSERT INTO `engine_type` (`id`, `type`) VALUES
(1, 'Petrol'),
(2, 'Diesel'),
(3, 'Petrol & Diesel');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_30_192011_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motor_company`
--

CREATE TABLE `motor_company` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `motor_company`
--

INSERT INTO `motor_company` (`id`, `company`) VALUES
(1, 'BMW moto'),
(2, 'Ducati');

-- --------------------------------------------------------

--
-- Table structure for table `motor_details`
--

CREATE TABLE `motor_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `engine` int(11) NOT NULL,
  `transmission` int(11) NOT NULL,
  `fual_tank_capacity` int(11) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `motor_details`
--

INSERT INTO `motor_details` (`id`, `name`, `company_id`, `color_id`, `engine`, `transmission`, `fual_tank_capacity`, `price`, `img`) VALUES
(1, 'Panigale V2', 2, 4, 6, 4, 10, 26700, '2_1_red.jpg,2_1_white.jpg'),
(2, 'New SuperSport 950 S', 2, 4, 7, 5, 11, 25000, '2_2_red.png,2_2_white.png'),
(3, 'Streetfighter V4 S', 2, 5, 1, 1, 12, 34000, '2_3_black.jpg,2_3_red.jpg'),
(4, 'Diavel V4', 2, 5, 3, 3, 13, 45000, '2_4_black.jpg,2_4_red.jpg'),
(5, 'Monster 937', 2, 5, 4, 4, 14, 19100, '2_5_black.jpg,2_5_red.jpg'),
(6, 'BMW S1000RR 2022', 1, 5, 5, 5, 15, 41000, '2_6_black.jpg,2_6_red.jpg'),
(7, 'BMW F 900 XR', 1, 5, 6, 1, 16, 26000, '2_7_black.jpg,2_7_red.jpg'),
(8, 'BMW S 1000 R', 1, 5, 7, 2, 17, 28000, '2_8_black.jpg,2_\n8_red.jpg'),
(9, 'F 900 R', 1, 5, 1, 3, 18, 20000, '2_9_black.jpg,2_9_red.jpg'),
(10, 'BMW R 1250 GS', 1, 8, 6, 4, 19, 28000, '2_10_black.jpg,2_10_grey.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `motor_engine_details`
--

CREATE TABLE `motor_engine_details` (
  `id` int(11) NOT NULL,
  `engine_type` varchar(255) NOT NULL,
  `displacement` varchar(255) NOT NULL,
  `maximum_power` varchar(255) NOT NULL,
  `maximum_torque` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `motor_engine_details`
--

INSERT INTO `motor_engine_details` (`id`, `engine_type`, `displacement`, `maximum_power`, `maximum_torque`) VALUES
(1, 'Liquid-cooled, four-cylinder in-line engine, four valves per cylinder, two overhead camshafts', '999cc', '207 horsepower ', '113 Nm '),
(2, 'Liquid-cooled, four-stroke, parallel-twin engine', '895cc', '105 horsepower ', '92 Nm '),
(3, 'Liquid-cooled, four-cylinder in-line engine, four valves per cylinder, two overhead camshafts', '999cc', '165 horsepower ', '114 Nm '),
(4, 'Twin-cylinder, 4-stroke, L-Twin, Desmodromic, 4 valves per cylinder', '955cc', '155 horsepower ', '104 Nm '),
(5, 'L-Twin cylinder, 4-stroke, Desmodromic distribution, 4 valves per cylinder, liquid-cooled', '937cc', '110 horsepower ', '93 Nm '),
(6, 'Desmosedici Stradale 90° V4, rearward-rotating crankshaft, 4 Desmodromically actuated valves per cylinder, liquid-cooled', '1,103cc', '208 horsepower ', '123 Nm '),
(7, 'Testastretta 11° L-Twin, 4 valves per cylinder, Desmodromic, liquid-cooled', '937cc', '111 horsepower ', '93 Nm ');

-- --------------------------------------------------------

--
-- Table structure for table `motor_transmission_details`
--

CREATE TABLE `motor_transmission_details` (
  `id` int(11) NOT NULL,
  `transmission_type` varchar(255) NOT NULL,
  `gears` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `motor_transmission_details`
--

INSERT INTO `motor_transmission_details` (`id`, `transmission_type`, `gears`) VALUES
(1, '6-speed with wet multiplate clutch system', ''),
(2, '6-speed with Ducati Quick Shift (DQS) up/down EVO', ''),
(3, '6-speed with straight-toothed pinion wheels and integrated shift assistant', ''),
(4, '6-speed constant mesh transmission', ''),
(5, '6-speed constant mesh transmission with straight-toothed pinion wheels and integrated shift assistant', '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iyTc58FV1MyfA59JguyKHWH6lDbaHEGHxSgdQaav', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; rv:125.0) Gecko/20100101 Firefox/125.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU1c2aGlkRVo0ZEpqUTlvR204TW9abmhYZHBiSnR6UzBrN2RLSUp2TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb21wYXJlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714817381),
('nZUnGHOPV6eDgM00zoYqlyPjc9iu409HTx6E4kTK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; rv:125.0) Gecko/20100101 Firefox/125.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3dkMWFmU1Z0MFVaTG4xaktnTFlpU2FQVVFibGx3TWxCSjB5MTZtRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714818129),
('zV02MtTK5Fi1P1lwMKvXq8AmjENTgUZCHnlvGRlQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; rv:125.0) Gecko/20100101 Firefox/125.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWVMRm1Jb2FBMEs3TUozQVE5NUFxUHdhaDl0QTdUZlpLdnVnTTJpWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jYXRhbG9ndWU/Y29sb3I9MyZmaWx0ZXI9aW5yYW5nZSZtYXhwYXk9NDAwMDAmbWlucGF5PTI2MDAwJnZlaGljbGU9Y2FyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1714802707);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_company`
--
ALTER TABLE `car_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `engine` (`engine`),
  ADD KEY `transmission` (`transmission`),
  ADD KEY `dimensions` (`dimensions`),
  ADD KEY `features_and_amenities` (`features_and_amenities`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `car_engine_details`
--
ALTER TABLE `car_engine_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `engine_type` (`engine_type`);

--
-- Indexes for table `car_features_and_amenities_details`
--
ALTER TABLE `car_features_and_amenities_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_transmission_details`
--
ALTER TABLE `car_transmission_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_type`
--
ALTER TABLE `car_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engine_type`
--
ALTER TABLE `engine_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor_company`
--
ALTER TABLE `motor_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor_details`
--
ALTER TABLE `motor_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `engine` (`engine`),
  ADD KEY `transmission` (`transmission`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `motor_engine_details`
--
ALTER TABLE `motor_engine_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor_transmission_details`
--
ALTER TABLE `motor_transmission_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_company`
--
ALTER TABLE `car_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `car_engine_details`
--
ALTER TABLE `car_engine_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `car_features_and_amenities_details`
--
ALTER TABLE `car_features_and_amenities_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_transmission_details`
--
ALTER TABLE `car_transmission_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_type`
--
ALTER TABLE `car_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `engine_type`
--
ALTER TABLE `engine_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `motor_company`
--
ALTER TABLE `motor_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `motor_details`
--
ALTER TABLE `motor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `motor_engine_details`
--
ALTER TABLE `motor_engine_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `motor_transmission_details`
--
ALTER TABLE `motor_transmission_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

