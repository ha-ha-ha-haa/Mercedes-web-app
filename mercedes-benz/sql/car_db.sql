-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 10:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_info`
--

CREATE TABLE `car_info` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(25) NOT NULL,
  `car_model` varchar(25) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `car_year` int(11) NOT NULL,
  `color` varchar(25) NOT NULL,
  `car_price` int(11) NOT NULL,
  `tire_id` int(11) NOT NULL,
  `engine_id` int(11) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `shortdescription` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_info`
--

INSERT INTO `car_info` (`car_id`, `car_name`, `car_model`, `manufacturer_id`, `car_year`, `color`, `car_price`, `tire_id`, `engine_id`, `pic`, `shortdescription`) VALUES
(1, 'Mercedes', 'VISION EQS show car', 1, 2019, 'Silver', 50000, 1, 1, 'https://www.mercedes-benz.com/en/innovation/concept-cars/vision-eqs/_jcr_content/image/MQ6-12-image-20190910094823/00-mercedes-benz-vision-eqs-show-car-mercedes-benz-eq-2560x1440.jpeg', ' The VISION EQS is a first milestone on the way to a CO₂-neutral mobility of the future. Mercedes-Benz has always stood for technical innovation, responsibility and fascination. And sustainability is now another integral component of the brand philosophy. The show car already meets these aspirations today, and gives an outlook on the future large, electric saloons by the brand.'),
(2, 'BMW', 'i8', 2, 2019, 'Silver', 50000, 2, 2, 'https://www.bmw.com/content/dam/bmw/marketBMWCOM/bmw_com/categories/Innovation/si8/i8-02-media-hd.jpg?imwidth=768', '  The BMW i8 combines many unique attributes: sports car, coupé or roadster, pioneer, brand-shaper, innovator, future-oriented design. A typical future classic.   The BMW i8 combines many unique attributes: sports car, coupé or roadster, pioneer, brand-shaper, innovator, future-oriented design. A typical future classic.   The BMW i8 combines many unique attributes: sports car, coupé or roadster, pioneer, brand-shaper, innovator, future-oriented design. A typical future classic.'),
(3, 'Audi', 'A8', 3, 2019, 'Black', 50000, 8, 3, 'https://www.motortrend.com/uploads/2022/07/2023-Audi-A8-42-front-three-quarter-view.jpg', '   The Audi A8 is a full-size luxury sedan that is available in standard and long-wheelbase versions. The A8 is the flagship of the Audi lineup and is available in L, L e-tron and L 60 TFSI trims. The Audi A8 is a full-size luxury sedan that is available in standard and long-wheelbase versions. The A8 is the flagship of the Audi lineup and is available in L, L e-tron and L 60 TFSI trims. The Audi A8 is a full-size luxury sedan that is available in standard and long-wheelbase versions. The A8 is the flagship of the Audi lineup and is available in L, L e-tron and L 60 TFSI trims.'),
(4, 'Porsche', 'Panamera', 1, 2019, 'Red', 50000, 1, 4, 'https://images.alphacoders.com/110/1101334.jpg', ' The Panamera Turbo S E-Hybrid is the most powerful and fastest Panamera ever. It combines the performance of a sports car with the comfort of a luxury sedan. The Panamera Turbo S E-Hybrid is very good. The Panamera Turbo S E-Hybrid is the most powerful and fastest Panamera ever. It combines the performance of a sports car with the comfort of a luxury sedan. The Panamera Turbo S E-Hybrid is very good. The Panamera Turbo S E-Hybrid is the most powerful and fastest Panamera ever.'),
(5, 'Volkswagen', 'Tiguan', 5, 2019, 'Blue', 50000, 6, 5, 'https://images2.alphacoders.com/112/1121779.jpg', '  The Volkswagen Tiguan is a compact crossover SUV (CUV) manufactured by German automaker Volkswagen since 2007. It is named after the town of Tiguan, located in the Mexican state of Guerrero. The first generation (2007–2016) shared its platform with the Audi Q5 and Volkswagen Touareg, and was based on the PQ46 platform. The second generation (2016–present) is based on the MQB platform and shares its platform with the Volkswagen Golf Mk7, Volkswagen Passat B8, and Audi A3 Mk3.'),
(6, 'Lamborghini', 'Aventador', 6, 2019, 'Silver', 50000, 6, 6, 'https://i.pinimg.com/originals/54/41/bb/5441bbda8700540e9263864235b213e0.jpg', 'The Lamborghini Aventador is a mid-engined sports car produced by the Italian automotive manufacturer Lamborghini. The Aventador is the successor to the long-running Lamborghini Murciélago, and was first shown at the 2011 Geneva Motor Show. The Aventador is the first Lamborghini to feature a rear-wheel steering system, and the first to be fitted with a seven-speed ISR (Independent Shifting Rods) transmission. The Aventador is powered by a 6.5 L V12 engine, which produces 700 PS (515 kW; 690 hp) at 8,250 rpm and 690 N⋅m (510 lb⋅ft) of torque at 5,500 rpm. The Aventador can accelerate from 0 to 100 km/h (62 mph) in 2.9 seconds, and has a top speed of 350 km/h (217 mph). The Aventador is available in both coupé and roadster body styles. The Aventador was replaced by the Lamborghini Huracán in 2014.'),
(7, 'Ferrari', '488 GTB', 7, 2019, 'Red', 50000, 7, 7, 'https://wallpapercave.com/wp/wp7015649.jpg', 'The Ferrari 488 GTB is a mid-engined sports car produced by the Italian automotive manufacturer Ferrari. The 488 GTB is the successor to the Ferrari 458 Italia, and was first shown at the 2015 Geneva Motor Show. The 488 GTB is powered by a 3.9 L twin-turbocharged V8 engine, which produces 670 PS (660 hp; 490 kW) at 8,000 rpm and 760 N⋅m (560 lb⋅ft) of torque at 3,000 rpm. The 488 GTB can accelerate from 0 to 100 km/h (62 mph) in 3.0 seconds, and has a top speed of 330 km/h (205 mph). The 488 GTB is available in both coupé and Spider body styles. The 488 GTB was replaced by the Ferrari 488 Pista in 2018.'),
(8, 'Maserati', 'Levante', 8, 2019, 'Black', 50000, 8, 8, 'https://images3.alphacoders.com/112/1121298.jpg', 'The Maserati Levante is a mid-size luxury crossover SUV produced by Italian automobile manufacturer Maserati. The Levante is the first SUV produced by Maserati, and was first shown at the 2016 Geneva Motor Show. The Levante is powered by a 3.0 L twin-turbocharged V6 engine, which produces 350 PS (345 hp; 257 kW) at 5,500 rpm and 500 N⋅m (369 lb⋅ft) of torque at 1,750 rpm. The Levante can accelerate from 0 to 100 km/h (62 mph) in 6.4 seconds, and has a top speed of 250 km/h (155 mph). The Levante is available in both coupé and convertible body styles. The Levante was replaced by the Maserati Levante GTS in 2019.'),
(9, 'Alfa Romeo', 'Stelvio', 9, 2019, 'Black', 50000, 9, 9, 'https://images5.alphacoders.com/960/960152.jpg', 'The Alfa Romeo Stelvio is a mid-size luxury crossover SUV produced by Italian automobile manufacturer Alfa Romeo. The Stelvio is the first SUV produced by Alfa Romeo, and was first shown at the 2016 Los Angeles Auto Show. The Stelvio is powered by a 2.0 L turbocharged I4 engine, which produces 280 PS (276 hp; 206 kW) at 5,500 rpm and 400 N⋅m (295 lb⋅ft) of torque at 2,500 rpm. The Stelvio can accelerate from 0 to 100 km/h (62 mph) in 5.9 seconds, and has a top speed of 250 km/h (155 mph). The Stelvio is available in both coupé and convertible body styles. The Stelvio was replaced by the Alfa Romeo Stelvio Quadrifoglio in 2019.'),
(10, 'Fiat', '500', 10, 2019, 'White', 50000, 10, 10, 'https://wallpaperaccess.com/full/3444117.jpg', 'The Fiat 500 is a rear-engined, 2-door, 2+2 city car manufactured and marketed by Fiat since 1957 over a single generation in Europe, as a rebadged variant of the Fiat Nuova (New) 500, itself a city car launched at the same time and derived from the Fiat 600. The Fiat 500 has been awarded the title of European Car of the Year in 2008. The 500 was designed by Dante Giacosa, and was produced by Fiat Automobiles in Turin, Italy. The 500 was launched at the Turin Motor Show in July 1957.'),
(11, 'Ford', 'Mustang', 1, 1932, 'red', 10000, 1, 1, 'https://p4.wallpaperbetter.com/wallpaper/182/288/882/car-ford-mustang-gt-red-car-vehicle-wallpaper-preview.jpg', 'Named for a World War II fighter plane, the Mustang was one of the first vehicles that came to be known as a “pony car.” Ford sold more than 400,000 Mustangs within its first year of production, far exceeding sales expectations. The Mustang was conceived as a “working man\'s Thunderbird,” according to Ford.Named for a World War II fighter plane, the Mustang was one of the first vehicles that came to be known as a “pony car.” Ford sold more than 400,000 Mustangs within its first year of production, far exceeding sales expectations. The Mustang was conceived as a “working man\'s Thunderbird,” according to Ford.');

-- --------------------------------------------------------

--
-- Table structure for table `engine`
--

CREATE TABLE `engine` (
  `engine_id` int(11) NOT NULL,
  `horsepower` int(11) NOT NULL,
  `rpm` int(11) NOT NULL,
  `rated_miles` int(11) NOT NULL,
  `engine_year` int(11) NOT NULL,
  `engine_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `engine`
--

INSERT INTO `engine` (`engine_id`, `horsepower`, `rpm`, `rated_miles`, `engine_year`, `engine_price`) VALUES
(1, 400, 8000, 100000, 2019, 5000),
(2, 500, 9000, 100000, 2019, 5000),
(3, 600, 10000, 100000, 2019, 5000),
(4, 700, 11000, 100000, 2019, 5000),
(5, 800, 12000, 100000, 2019, 5000),
(6, 900, 13000, 100000, 2019, 5000),
(7, 1000, 14000, 100000, 2019, 5000),
(8, 1100, 15000, 100000, 2019, 5000),
(9, 1200, 16000, 100000, 2019, 5000),
(10, 1300, 17000, 100000, 2019, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(25) NOT NULL,
  `established` date NOT NULL,
  `country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_name`, `established`, `country`) VALUES
(1, 'Mercedes', '1926-01-28', 'Germany'),
(2, 'BMW', '1916-03-07', 'Germany'),
(3, 'Audi', '1909-07-16', 'Germany'),
(4, 'Porsche', '1931-04-25', 'Germany'),
(5, 'Volkswagen', '1937-05-28', 'Germany'),
(6, 'Lamborghini', '1963-04-28', 'Italy'),
(7, 'Ferrari', '1929-08-03', 'Italy'),
(8, 'Maserati', '1914-12-01', 'Italy'),
(9, 'Alfa Romeo', '1910-06-24', 'Italy'),
(10, 'Fiat', '1899-01-11', 'Italy');

-- --------------------------------------------------------

--
-- Table structure for table `tire`
--

CREATE TABLE `tire` (
  `tire_id` int(11) NOT NULL,
  `tire_name` varchar(25) NOT NULL,
  `tire_model` varchar(25) NOT NULL,
  `tire_year` int(11) NOT NULL,
  `tread_depth` varchar(25) NOT NULL,
  `tire_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tire`
--

INSERT INTO `tire` (`tire_id`, `tire_name`, `tire_model`, `tire_year`, `tread_depth`, `tire_price`) VALUES
(1, 'Michelin', 'Pilot Sport 4S', 2019, '10/32', 300),
(2, 'Yokohama', 'Advan Sport V105', 2018, '10/33', 300),
(3, 'Pirelli', 'P Zero', 2019, '10/32', 300),
(4, 'Michelin', 'Defender', 2020, '10/32', 300),
(5, 'Dunlop', 'Sport Maxx RT', 2019, '10/32', 300),
(6, 'Bridgestone', 'Potenza RE-71R', 2019, '10/32', 300),
(7, 'Firestone', 'Firehawk Indy 500', 2019, '10/32', 300),
(8, 'Goodyear', 'Eagle F1 Asymmetric 5', 2019, '10/32', 300),
(9, 'Continental', 'ExtremeContact Sport', 2019, '10/32', 300),
(10, 'Hankook', 'Ventus S1 Evo2', 2019, '10/32', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `car_id` (`car_id`),
  ADD KEY `manufacturer_id` (`manufacturer_id`),
  ADD KEY `tire_id` (`tire_id`),
  ADD KEY `engine_id` (`engine_id`);

--
-- Indexes for table `engine`
--
ALTER TABLE `engine`
  ADD PRIMARY KEY (`engine_id`),
  ADD UNIQUE KEY `engine_id` (`engine_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`),
  ADD UNIQUE KEY `manufacturer_id` (`manufacturer_id`);

--
-- Indexes for table `tire`
--
ALTER TABLE `tire`
  ADD PRIMARY KEY (`tire_id`),
  ADD UNIQUE KEY `tire_id` (`tire_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_info`
--
ALTER TABLE `car_info`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `engine`
--
ALTER TABLE `engine`
  MODIFY `engine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tire`
--
ALTER TABLE `tire`
  MODIFY `tire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_info`
--
ALTER TABLE `car_info`
  ADD CONSTRAINT `car_info_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`manufacturer_id`),
  ADD CONSTRAINT `car_info_ibfk_2` FOREIGN KEY (`tire_id`) REFERENCES `tire` (`tire_id`),
  ADD CONSTRAINT `car_info_ibfk_3` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`engine_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
