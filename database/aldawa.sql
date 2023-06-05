-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 10:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aldawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_pic`) VALUES
(1, 'HALEON (GlaxoSmithKline)', 'upload/brand1.png'),
(2, 'Abbot Laboratories (Pak) LTD', 'upload/brand2.png'),
(3, 'certeza', 'upload/brand3.png'),
(4, 'kuch bhi', 'upload/Use-Case-Diagram-to-Represent-Requirements-for-an-IVTS.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'tablets_capsules'),
(2, 'equipment'),
(3, 'personalcare\r\n'),
(4, 'syrups_suspension');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_pic` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `generics` varchar(255) NOT NULL,
  `usedfor` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `indication` text NOT NULL,
  `sideeffects` text NOT NULL,
  `when_not_to_use` text NOT NULL,
  `dosage` text NOT NULL,
  `storage` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_pic`, `brand_id`, `category_id`, `description`, `generics`, `usedfor`, `price`, `indication`, `sideeffects`, `when_not_to_use`, `dosage`, `storage`, `quantity`) VALUES
(1, 'Panadol 500Mg Tablets 200S (Pack Size 20X10s)', 'upload/panadol.png', 1, 1, 'Paracetamol has a central analgesic effect that is mediated through activation of descending serotonergic pathways. Debate exists about its primary site of action, which may be inhibition of prostaglandin (PG) synthesis or through an active metabolite influencing cannabinoid receptors.', 'Paracetamol\r\n', 'Pain Fever', 26.7, 'It provide fast and effective relief against: Headache , Migraine pain , Joint pain associated with Osteoarthritis , Muscle ache , Tooth ache , Period pain , Fever.', 'Thrombocytopaenia, Anaphylaxis cutaneous hypersensitivity reactions including among others skin rashes, angiodema, stevens johnson syndrome, toxic epidermal necrosis, bronchospasm in patients sensitive to aspirin and other NSAIDs, hepatic dysfuction.', 'This product is contraindicated in patients with a previous history of hypersensitivity to paracetamol or excipients.', 'Adults (including the elderly) and children aged 12 years and over: 1 - 2 tablets every 4 to 6 hours as required or as directed by your physician.Do not take more than 8 tablets (4000mg paracetamol) in 24 hours.Do not exceed the stated dose.The lowest dose necessary to achieve efficacy should be used.Should not be used with other paracetamol-containing products.Children 6 to 11 years: 1/2 – 1 (250mg -500mg) tablet every 4 to 6 hours.Maximum daily dose: 60mg/kg presented in divided doses of 10-15', 'Store this medicine at room temperature, away from direct light and heat.', 10),
(2, 'Panadol Cf Day Tablets 100S (Pack Size 10 X 10S)', 'upload/panadol2.png', 1, 1, 'Paracetamol works to stop the pain messages from getting through to the brain. It also acts in the brain to reduce fever . Pseudoephedrine is a sympathomimetic with a mixed mechanism of action, direct and indirect. It indirectly stimulates alpha-adrenergic receptors, causing the release of endogenous norepinephrine from the granularity of neurons, while it directly stimulates beta-adrenergic receptors . Codeine binds to mu-opioid receptors, which are involved in the transmission of pain throughout the body and central nervous system . The analgesic properties of codeine are thought to arise from its conversion to Morphine, although the exact mechanism of analgesic action is unknown at this time.', 'Paracetamol\r\n', 'Fever Cough\r\n', 41.2, 'Panadol Cold + Flu Day tablets can be used for: Nasal and sinus congestion , Colds and Flus', 'Paracetamol: Thrombocytopaenia, Anaphylaxis cutaneous hypersensitivity reactions including others skin rashes, angiodema, stevens johnson syndrome, toxic epidermal necrosis, bronchospasm in patients sensitive to aspirin and other NSAIDs, hepatic dysfuction.Phenylephrine: Nervousness, Headache, Dizziness, Insomnia, Increased blood pressure, Vomiting, nausea, Mydriasis, acute angle closure glaucoma, most likely to occur in those with closed angle glaucoma Tachycardia, Palpitations Allergic reactions (e.g. rash, urticaria, allergic dermatitis) Dysuria, urinary retention. This is most likely to occur in those with bladder outlet obstruction such as prostatic hypertrophy.', 'This product is contraindicated in patients: With a previous history of hypersensitivity to paracetamol, pseudoephedrine or excipients.', 'Adults and children above 12 years: 2 caplets every 4 to 6 hrs as needed. Below 12 years : Not recommended. OR As directed by your physician.', 'Store this medicine at room temperature, away from direct light and heat.', 4),
(3, 'Panadol 160mg Syrup 120 ml', 'upload/panadolsyrup.png', 1, 4, 'Paracetamol has a central analgesic effect that is mediated through activation of descending serotonergic pathways. Debate exists about its primary site of action, which may be inhibition of prostaglandin (PG) synthesis or through an active metabolite influencing cannabinoid receptors.', 'Paracetamol', 'Pain Fever', 117.6, 'It provide fast and effective relief against: Headache , Migraine pain , Joint pain associated with Osteoarthritis , Muscle ache , Tooth ache , Period pain , Fever.', 'Thrombocytopaenia, Anaphylaxis cutaneous hypersensitivity reactions including among others skin rashes, angiodema, stevens johnson syndrome, toxic epidermal necrosis, bronchospasm in patients sensitive to aspirin and other NSAIDs, hepatic dysfuction.', 'This product is contraindicated in patients with a previous history of hypersensitivity to paracetamol or excipients.', 'Children: Oral: Pain; pyrexia with discomfort : 2-3 mnth, 30-60mg every 8hr as necessary , max 60mg/kg daily in divided doses ; 3-6mnth , 60mg every 4-6hr , max 4 doses/day ; 6mnth-2yr, 120mg every 4-6hr , max 4 doses/day ; 2-4yr, 180mg every 4-6hr, max 4 doses/day ; 4-6yr , 240mg every 4-6hr , max 4 doses/day ; 6-8 yr , 240-250mg every 4-6hr , max 4 doses/day ; 8-10yr , 360-375mg every 4-6hr , max 4 doses/day ; 10-12yr, 480-500mg every 4-6hr , max 4 doses/day; 12-16 yr , 480mg-750mg every 4-\r\n6hr , max 4 doses/day OR As directed by your physician .', 'Store this medicine at room temperature, away from direct light and heat.\r\n', 20),
(4, 'Panadol Forte 250 mg Per 5 ml Suspension\r\n', 'upload/panadolsyrup2.png\r\n', 1, 4, 'Paracetamol has a central analgesic effect that is mediated through activation of descending serotonergic pathways. Debate exists about its primary site of action, which may be inhibition of prostaglandin (PG) synthesis or through an active metabolite influencing cannabinoid receptors.\r\n', 'Paracetamol\r\n', 'Pain Fever\r\n', 99, 'It provide fast and effective relief against: Headache , Migraine pain , Joint pain associated with Osteoarthritis , Muscle ache , Tooth ache , Period pain , Fever.\r\n', 'Thrombocytopaenia, Anaphylaxis cutaneous hypersensitivity reactions including among others skin rashes, angiodema, stevens johnson syndrome, toxic epidermal necrosis, bronchospasm in patients sensitive to aspirin and other NSAIDs, hepatic dysfuction.', 'This product is contraindicated in patients with a previous history of hypersensitivity to paracetamol or excipients.', 'Children: Oral: Pain; pyrexia with discomfort : 2-3 mnth, 30-60mg every 8hr as necessary , max 60mg/kg daily in divided doses ; 3-6mnth , 60mg every 4-6hr , max 4 doses/day ; 6mnth-2yr, 120mg every 4-6hr , max 4 doses/day ; 2-4yr, 180mg every 4-6hr, max 4 doses/day ; 4-6yr , 240mg every 4-6hr , max 4 doses/day ; 6-8 yr , 240-250mg every 4-6hr , max 4 doses/day ; 8-10yr , 360-375mg every 4-6hr , max 4 doses/day ; 10-12yr, 480-500mg every 4-6hr , max 4 doses/day; 12-16 yr , 480mg-750mg every 4-6\r\nhr , max 4 doses/day OR As directed by your physician .', 'Store this medicine at room temperature, away from direct light and heat.\r\n', 15),
(5, 'CR3002 Stethoscope Dual Head', 'upload/stethoscope.png', 3, 2, 'CR3002 STETHOSCOPE DUAL HEAD', '', 'heartbeat lungs-sound', 850, '', '', '', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `userid` int(11) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`userid`, `phoneno`, `name`, `password`, `datetime`, `email`, `address`, `postal_code`, `city`) VALUES
(1, '+920123456789', 'hi', 'me', '2023-06-06 00:57:38', 'hanzalah_siddiq@gmail.com', ' pc hotel ,karachi', '75850', 'karchi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `userid_fk` (`userid`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_id_fk` (`order_id`),
  ADD KEY `product_id_fk` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_brand_id_fk` (`brand_id`),
  ADD KEY `product_category_id_fk` (`category_id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `userid_fk` FOREIGN KEY (`userid`) REFERENCES `registered_users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_id_fk` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_brand_id_fk` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
