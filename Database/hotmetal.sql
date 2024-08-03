-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 04:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotmetal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `cat` text NOT NULL,
  `img` text NOT NULL,
  `tags` text NOT NULL,
  `username` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `cat`, `img`, `tags`, `username`, `date`) VALUES
(1, 'Textual Logo\r\n\r\n', 'Textual design is another name for a common type of logo design. You can use a fancy or plain typeface to mention the name of the organization here. This makes it possible for the customer to immediately remember their business. For instance, the logos of well-known companies like Google, FedEx, Microsoft, and others have provided them with their brand identity.\r\n\r\n\r\nIt is crucial to pick the appropriate design elements while attempting to create an eye-catching brand logo. However, the choice of logo typefaces is where the majority of designers stumble.\r\n\r\n', '1', 'microsoft-logo-768x768.png', 'Textual Logo, Logo, Blog', 'admin', '2024-03-06 09:25:32'),
(2, 'Symbol Based Logos\r\n', 'These logos are built around particular symbols. The firm name won’t be shown in this case. In order to leave a lasting impact on the customer, you must be innovative with the designs. A figure, a pictogram, a mark, or a particular symbol that expresses what the firm stands for may be used as the symbol. Such a logo template is used by well-known firms like Shell, Puma, and Apple to symbolize their corporate identities.\r\n\r\n', '1', 'apple-logo-768x768.jpg', 'Textual Logo, Logo, Blog', 'admin', '2024-03-06 09:25:42'),
(3, 'Abstract Logos\r\n', 'This logo template is frequently used to reflect their brand identity. These logos make use of creative images or signs to communicate the essence of their brand to the intended audience. But as a designer, you must keep in mind that developing such a logo necessitates a thorough study of the company.\r\nFor instance, Lab Vantage Inc., a software company, uses a reverse “V” sign in its logo to indicate its potential for expansion.', '1', 'LabVantage-Inc-logo-1-768x768.jpg', 'Textual Logo, Logo, Blog', 'admin', '2024-03-06 09:25:42'),
(4, 'Initial Base Logo\r\n\r\n', 'Another option is to base your client’s logo on their initials. To represent the client’s trademark, short initials are employed rather than extended names. This permits the business to be recognized by the utilized acronym. For instance, the McDonald’s and Honda logos, which use the letters “M” and “H,” respectively, are the best examples of initial-based logos.\r\n\r\n', '1', 'honda-logo-1-768x768.jpg', 'Textual Logo, Logo, Blog', 'admin', '2024-03-06 09:25:42'),
(6, '5 Essential Components of Logo Design\r\n', '<b>The logo is a component of a company’s commercial brand or economic entity, and it typically stands out from other logos in the same market segment in terms of shapes, colours, typefaces, and imagery. As a result, it is a crucial instrument for promoting a company or a product.</b>\r\n\r\nA strong logo communicates the owner’s desired message and is recognizable, pertinent, classic, graphic, and straightforward in design. All five essential components will be covered individually.\r\n\r\nDistinctive:\r\nA logo is seen as a rival to every other successful custom logo design out there if it deviates from the accepted notions of logo designs and is adaptable. A unique logo will stand out from the competition and have a distinctive appearance.\r\n\r\nAppropriate:\r\nA logo should be relevant to the name, seamlessly fusing colour, typeface, visuals, the goal of the organisation or the product, and the tagline. Customers are more likely to remember a company with a logo that is appropriate for the situation.\r\n\r\nTimeless:\r\nA successful logo needs to be timeless. The rationale is that logos that stand the test of time without being updated or altered have become household names and are recognised by numerous generations. The expense of changing the designs or the colour scheme, and last but not least, the time and expense of re-branding the logo, are also significant factors. So, classic logos endure for a very long period.\r\n\r\nGraphic:\r\nLogos should include a graphical representation of the corporate name, trademark, or abbreviation. This visual representation may take the form of typography, engraving, or other forms of visual art. One of the most recognisable logo designs in the world, for instance, is the “Nike” logo, which features the swoosh.\r\n\r\nSimple:\r\nA straightforward logo enables simple recognition and makes the brand adaptable and memorable. Good logos have a distinctive element without being overdrawn. Even when it is imprinted on non-technical equipment or at the back of the public transport vehicle, you wouldn’t confuse Apple’s apple for any other fruit.\r\n\r\nThe finest logos should have design components. Call us right away. For your new business or remodeling of your existing one, our certified, highly trained professional staff will create an attractive logo to give you a competitive edge in the market.', '1', '5-Essential-Components-of-Logo-Design-630x354.jpg', 'Textual Logo, Logo, Blog', 'admin', '2024-03-06 09:25:42'),
(7, 'Importance of Branding for Companies\r\n', 'Being a single entrepreneur or a small business entering the market with a wonderful objective, branding is still your business’s thirst and is urgently needed. Popular businesses all across the world consistently invest heavily on branding. Then, why shouldn’t the startup invest?\r\n<br>\r\n<b>\r\nAccording to well-known businessman Simon Mainwaring\r\n</b>\r\n<br>\r\nSelf-definition, transparency, sincerity, and accountability are the secrets to a successful brand.\r\n\r\nUnderstanding Branding describes how customers view your business and its products. It extends beyond logos and graphics and includes ideas about the overall customer experience, such as digital presentations, social media marketing, and team responses to client behavior. Therefore, it could be a little intimidating to consider what is involved in your brand when using the broad definition of branding.\r\n<br>\r\n<b>\r\nImpressive branding strategy for new businesses\r\n</b>\r\n<br>\r\nIn order to draw in and keep devoted clients, branding tries to build a large and distinctive presence in the marketplace. Starting with a distinctive business name and presenting the goods in the marketplace ensures that the commercial creates a lasting impact on viewers while maintaining a unifying theme.\r\n\r\nThe first important element is distinctive recognition utilizing the brand logo, which includes the real definitions of the startup goal. Simply distinctive and potent enough to elicit the desired response from the company’s advertising, a professionally created logo. People are more likely to make a purchase from a company that presents itself as professional and reliable. establishing credibility and trust in the end.\r\n\r\nA top brand may be quickly recognized in the market and attracts interest from businesses around the world for collaborative initiatives, giving branding a competitive edge in the marketplace. A compelling brand story not only meets the expectations of the client, but it also inspires employees and teams, as a productive workplace is essential for success.\r\n<br>\r\n<b>\r\nBenefits that Branding offers\r\n</b>\r\n<br>\r\nAs soon as you move forward, your startup’s branding should be a top priority. Owners and employees recognize brands, which stand for their objectives, ideas, and future goals. By recommending a product to family and friends during conversations, a content, and happy customer can aid in generating referrals.\r\n\r\nStrong, distinct, and consistent branding provides value to the firm and increases customer confidence to the point where they are less likely to risk trying other products and are more willing to come forward when a new product is later introduced.\r\n\r\nMega stable organizations should therefore not only strive for branding, but startups also require long-term branding strategies. In addition to giving a product a good, attractive, high-standard appearance on the market, branding fosters emotional attachment in customers, which leads to referrals and faith in later-introduced new products. when a company has a defined brand strategy and a commitment to quality deployment. When you have long-term planned collaborative adventures or business commitments, the results will be fantastic, incredible success.', '1', 'Branding-scaled-1600x900.jpg', 'Textual Logo, Logo, Blog', 'admin', '2024-03-06 09:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `date`) VALUES
(1, 'Graphic Designing', '2024-03-06 09:26:07'),
(2, 'Web Development\r\n', '2024-03-06 09:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories_pro`
--

CREATE TABLE `categories_pro` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_head` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `cat` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories_pro`
--

INSERT INTO `categories_pro` (`id`, `name`, `sub_head`, `description`, `img`, `cat`, `date`) VALUES
(6, 'Custom WordPress Business Website Design', 'WordPress Website Design & Development Best Packages Plan & Pricing                   ', 'We offers the best WordPress website design & development Packages in affordable budget. The business website is now the backbone and the infrastructure around which you build your business.	', 'admin.1250804910.jpg', 2, '2024-03-07 16:21:53'),
(15, 'Custom Website Development', 'Custom Website Design & Development Best Packages Plan & Pricing', 'We offers the best Custom PHP, Laravel and Node.Js website design & development Packages in affordable budget. The Custom website is now the backbone and the infrastructure around which you build your Solution.\r\n\r\n', 'admin.1214019331.jpg', 2, '2024-03-07 16:33:35'),
(16, 'E-Commerce Website Design and Development', 'E-Commerce Website Design & Development Best Packages Plan & Pricing', 'We offers the best Custom PHP, Laravel, Node.Js, Wix and WordPress E-Commerce website design & development Packages in affordable budget. The E-Commerce website is now the backbone and the infrastructure around which you build your E-Store.\r\n\r\n', 'admin.1021269204.jpg', 2, '2024-03-07 16:34:14'),
(17, 'Custom Blogger Website Design', 'Blogger Website Design & Development Best Packages Plan & Pricing', 'We offers the best WordPress and Custom PHP website design & development Packages in affordable budget. The Blogger website is now the backbone and the infrastructure around which you build your blog.\r\n\r\n', 'admin.392865876.jpg', 2, '2024-03-07 16:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `comment` text NOT NULL,
  `p_id` text NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `p_id`, `type`, `status`, `date`) VALUES
(2, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', 'Testing', '1', 'Portfolio', 'Approve', '2024-03-07 04:58:07'),
(3, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', 'Testing', '2', 'Portfolio', 'Approve', '2024-03-07 04:58:06'),
(4, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', 'Testing', '3', 'Portfolio', 'Approve', '2024-03-07 04:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact_no` text NOT NULL,
  `query_type` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact_no`, `query_type`, `msg`, `date`) VALUES
(1, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Design and Develop Website', 'Testing', '2024-02-29 06:59:21'),
(2, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Design and Develop Website', 'Testing', '2024-02-29 06:59:32'),
(3, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Design and Develop Website', 'Testing', '2024-02-29 06:59:47'),
(4, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:00:26'),
(5, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:01:15'),
(6, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:01:36'),
(7, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:01:42'),
(8, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:01:53'),
(9, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:02:53'),
(10, 'Testing', 'shahbazakhtarjaved@gmail.com', '03463806125', 'Want to Develop Custom Solution', 'Testing', '2024-02-29 07:02:55'),
(11, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Develop Custom Solution', 'message', '2024-02-29 07:03:08'),
(12, 'Testing', 'shahbazakhtarjaved@gmail.com', '', 'Want to Develop Custom Solution', 'message', '2024-02-29 07:04:15'),
(13, 'Shahbaz Akhtar Javed', 'shahbazakhtarjaved@gmail.com', '03463806125', '', '', '2024-03-09 17:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `cus_orders`
--

CREATE TABLE `cus_orders` (
  `id` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `p_desc` text NOT NULL,
  `p_price` text NOT NULL,
  `p_discount` text NOT NULL,
  `p_c_price` text NOT NULL,
  `email` text NOT NULL,
  `status` text NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cus_orders`
--

INSERT INTO `cus_orders` (`id`, `p_name`, `p_desc`, `p_price`, `p_discount`, `p_c_price`, `email`, `status`, `orderid`, `date`) VALUES
(2, 'Custom WordPress Business Website Design	', 'Design your Custom WordPress Business Website', '100', '20', '80', 'shahbazakhtarjaved@gmail.com', 'Completed', '100003', '2024-03-26 15:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `orderfiles`
--

CREATE TABLE `orderfiles` (
  `id` int(11) NOT NULL,
  `orderid` text NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `dicount` int(11) NOT NULL,
  `c_price` int(11) NOT NULL,
  `email` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderid`, `p_id`, `price`, `dicount`, `c_price`, `email`, `status`, `date`) VALUES
(22, '1049', 4, 600, 25, 450, 'shahbazakhtarjaved@gmail.com', 'Pending', '2024-03-27 02:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `ordersmbl`
--

CREATE TABLE `ordersmbl` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `mblorderId` text NOT NULL,
  `formurl` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersmbl`
--

INSERT INTO `ordersmbl` (`id`, `orderid`, `mblorderId`, `formurl`, `date`) VALUES
(8, '', 'cdaef631-0e1b-4b89-acfd-f496e3b5918b', 'https://acquiring.meezanbank.com/epg/merchants/Hot_metal_logos/payment.html?mdOrder=cdaef631-0e1b-4b89-acfd-f496e3b5918b&language=en', '2024-03-27 02:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `cat` text NOT NULL,
  `demo_link` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `img`, `cat`, `demo_link`, `date`) VALUES
(6, 'LMS Library Management System', 'A library management system is software that is designed to manage all the functions of a library. It helps librarian to maintain the database of new books and the books that are borrowed by members along with their due dates.\r\n\r\nThis system completely automates all your library’s activities. The best way to maintain, organize, and handle countless books systematically is to implement a library management system software.\r\n\r\nA library management system is used to maintain library records. It tracks the records of the number of books in the library, how many books are issued, or how many books have been returned or renewed or late fine charges, etc.\r\n\r\nYou can find books in an instant, issue/reissue books quickly, and manage all the data efficiently and orderly using this system. The purpose of a library management system is to provide instant and accurate data regarding any type of book, thereby saving a lot of time and effort.\r\n\r\n', 'admin.299433298.png', '2', 'http://shahbaz514.epizy.com/lms/librarian/login.php', '2024-03-07 06:20:52'),
(7, 'Tadrees Holding Company', 'Tadrees Company is interested in the public education sector through its work. By providing resources and infrastructure; To create an educational climate in its schools. To become the leading company in the field of education in the Kingdom of Saudi Arabia\r\n\r\n', 'admin.365423724.png', '2', 'https://tadreesholding.com/tadrees/', '2024-03-07 06:23:20'),
(8, 'Car Station Network like Uber, Cream', 'Introducing our Car Station Network: Your Modern Solution for Convenient Transportation. Similar to Uber and Cream, We Provide Reliable Rides On-Demand. Experience Seamless Booking, Skilled Drivers, and Effortless Travel for Your Everyday Journeys.\r\n\r\n', 'admin.1506342245.webp', '2', 'https://carstation.hotmetallogos.com/', '2024-03-07 06:25:25'),
(9, 'Meezan Bank ADC Portal', 'Discover the Meezan Bank ADC Portal – Your Central Hub for Advanced Digital Banking Services. Seamlessly Manage Your Accounts, Conduct Secure Transactions, and Access a Range of Financial Tools. Experience Banking Convenience at Your Fingertips.\r\n\r\n', 'admin.814009523.png', '2', 'https://mbl.hotmetallogos.com/login.php', '2024-03-07 06:26:12'),
(10, 'Point of Sale (POS) System', 'Elevate Your Business with Our Point of Sale (POS) System. Experience Swift Transactions, Streamlined Inventory Management, and Real-Time Sales Insights. Our User-Friendly Interface and Robust Features Empower You to Serve Customers Effectively and Drive Business Growth.\r\n\r\n', 'admin.1877703914.png', '2', 'https://pos.hotmetallogos.com/', '2024-03-07 06:26:52'),
(11, 'Accounts and Payroll System', 'Revolutionize Your Financial Management with Our Advanced Accounts and Payroll System. Streamline Payroll Processing, Ensure Tax Compliance, and Gain In-Depth Financial Insights. Experience Seamless Integration and Efficient Employee Self-Service, All While Keeping Your Financial Data Secure.\r\n\r\n', 'admin.1614229324.png', '2', 'https://payroll.hotmetallogos.com/', '2024-03-07 06:27:37'),
(12, 'Customer relationship management (CRM)', 'In the dynamic landscape of modern business, effective customer relationship management (CRM) stands as a pivotal strategy to foster growth, retention, and unparalleled success. At HotMetalLogos, we recognize the significance of cultivating lasting customer connections and have developed cutting-edge CRM solutions tailored to meet the evolving needs of businesses across industries.\r\n\r\nOur CRM system goes beyond mere data management; it’s a comprehensive approach to understanding, engaging, and serving your customers seamlessly. From prospect to loyal advocate, our platform empowers you to orchestrate personalized experiences that resonate at every touchpoint.\r\n\r\n360-Degree Customer Insights: With our CRM, you gain a holistic view of each customer. Their interactions, preferences, purchase history, and engagement patterns are consolidated into a single, accessible dashboard. This wealth of insights allows you to anticipate needs, personalize communications, and make informed decisions that drive results.\r\n\r\nEnhanced Collaboration: Smooth internal communication is at the heart of successful CRM. Our platform facilitates effortless information sharing among teams, departments, and even remote locations. This collaborative environment ensures everyone is aligned in delivering consistent, exceptional customer experiences.\r\n\r\nAutomated Workflows: Time is of the essence in today’s fast-paced world. Our CRM automates routine tasks and processes, freeing your team to focus on strategic initiatives. Whether it’s sending follow-up emails, managing leads, or nurturing prospects, automation accelerates your customer journey.\r\n\r\nData-Driven Decisions: Informed decisions rest on accurate data. Our CRM system offers in-depth analytics and reporting, allowing you to measure performance, track KPIs, and identify trends. These insights enable you to refine strategies and pivot quickly to stay ahead in a competitive landscape.\r\n\r\nSeamless Integration: We understand that your business operates through various channels and tools. Our CRM seamlessly integrates with other applications you rely on, whether it’s email marketing platforms, e-commerce systems, or communication tools. This integration enhances efficiency and ensures a unified approach.\r\n\r\nScalability: As your business expands, your CRM solution should adapt accordingly. Our system is designed with scalability in mind, accommodating your growth trajectory while maintaining the same level of efficiency and effectiveness.\r\n\r\nAt HotMetalLogos, we’re not just offering a CRM; we’re delivering a strategic advantage. Our CRM solutions are a catalyst for transforming customer interactions into meaningful relationships. We’re committed to being your partner in nurturing customer loyalty, fostering innovation, and driving sustainable success. Elevate your CRM strategy with us today and witness the transformative power of customer-centricity.\r\n\r\n', 'admin.408669524.png', '2', 'http://crm.hotmetallogos.com/', '2024-03-07 06:28:56'),
(13, 'QR Code Generator ', 'The QR Code Generator is a versatile tool designed to simplify the process of creating QR (Quick Response) codes for various purposes. This web-based application offers users a seamless experience to generate QR codes swiftly and efficiently.\r\n<br>\r\nKey Features:\r\n<br>\r\nCustomizable Content: Users can input a wide range of data types into the QR code, including URLs, text, contact information, Wi-Fi credentials, and more. The tool accommodates diverse needs, whether it\'s for business cards, marketing materials, or personal use.\r\n<br>\r\nDynamic QR Codes: Generate dynamic QR codes that can be edited or updated even after distribution. This feature proves invaluable for campaigns requiring real-time adjustments or ongoing tracking of user engagement.\r\n<br>\r\nDesign Options: Enhance the visual appeal of QR codes by customizing their appearance. Users can select from various color schemes, add logos or images, and adjust the size and shape to match branding requirements.\r\n<br>\r\nHigh-Quality Output: The QR Code Generator ensures the production of high-resolution QR codes suitable for both digital and print applications. This guarantees optimal readability across different devices and surfaces.\r\n<br>\r\nAnalytics and Tracking: Gain insights into QR code performance with built-in analytics tools. Track scan metrics, such as location, time, and device type, to assess the effectiveness of marketing campaigns and optimize strategies accordingly.\r\n<br>\r\nUser-Friendly Interface: The intuitive interface makes QR code generation a hassle-free process for users of all skill levels. With simple navigation and clear instructions, anyone can create professional-grade QR codes within minutes.\r\n\r\nMulti-Platform Compatibility: Access the QR Code Generator from desktops, laptops, tablets, and smartphones, ensuring flexibility and convenience for users on the go.\r\n<br>\r\nSecure and Reliable: Rest assured of data security and reliability with robust encryption protocols and cloud-based storage. The QR Code Generator prioritizes user privacy and data integrity at every stage of the process.\r\n\r\n', 'admin.1578099291.png', '2', 'https://qrcode.hotmetallogos.com/index.php', '2024-03-07 06:36:29'),
(14, ' MC Carrier Onboarding Portal', 'The Carrier Onboarding Portal is a comprehensive solution designed to streamline and simplify the process of onboarding carriers for transportation and logistics companies. This web-based platform offers a centralized hub where carriers can efficiently submit required documentation, undergo compliance checks, and seamlessly integrate into the company\'s network.\r\n\r\n', 'admin.110631822.png', '2', 'https://mcco.hotmetallogos.com/', '2024-03-07 06:38:28'),
(15, 'IMEI Check Portal', 'The IMEI Check Portal is a powerful online platform designed to provide users with comprehensive information and verification services for mobile devices based on their International Mobile Equipment Identity (IMEI) numbers. This web-based tool offers a range of functionalities to verify device authenticity, check for blacklist status, and assess device specifications, empowering consumers, businesses, and regulatory authorities alike.\r\n\r\n', 'admin.594716219.png', '2', 'https://imeicheck.hotmetallogos.com/signin.php', '2024-03-07 06:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat` text NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `c_price` int(11) NOT NULL,
  `pack` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat`, `price`, `discount`, `c_price`, `pack`, `date`) VALUES
(1, '6', 400, 50, 200, 'Silver', '2024-03-09 18:07:22'),
(3, '6', 500, 25, 375, 'Gold', '2024-03-07 10:42:36'),
(4, '6', 600, 25, 450, 'Diamond', '2024-03-07 10:47:38'),
(5, '15', 400, 25, 300, 'Silver', '2024-03-07 16:40:45'),
(6, '15', 500, 25, 375, 'Gold', '2024-03-07 16:41:05'),
(7, '15', 600, 20, 480, 'Diamond', '2024-03-07 16:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `pro_feat`
--

CREATE TABLE `pro_feat` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_feat`
--

INSERT INTO `pro_feat` (`id`, `p_id`, `title`, `status`) VALUES
(4, 1, '5 Pages', 'Yes'),
(5, 1, 'Custom Home Page', 'Yes'),
(6, 1, 'Home Page Banner Design', 'Yes'),
(7, 1, 'Contact Forms', 'Yes'),
(8, 1, 'Responsive Design', 'Yes'),
(9, 1, 'Content Management System', 'Yes'),
(10, 1, 'Speed Optimization', 'Yes'),
(11, 1, 'General Contact Form', 'Yes'),
(12, 1, '24/7 Support For One Month After project Completion', 'Yes'),
(13, 1, 'Newsletter Integration', 'No'),
(14, 1, 'Google Analytics', 'No'),
(15, 1, 'Optimized Meta Tags', 'No'),
(16, 1, 'Photo Gallery', 'No'),
(17, 1, 'Email Addresses', 'No'),
(19, 3, '8-12 Pages', 'Yes'),
(20, 3, 'Custom Home Page', 'Yes'),
(21, 3, 'Home Page Banner Design', 'Yes'),
(22, 3, 'Contact Forms', 'Yes'),
(23, 3, 'Responsive Design', 'Yes'),
(24, 3, 'Content Management System', 'Yes'),
(25, 3, 'General Contact Form', 'Yes'),
(26, 3, 'Social Media Integration', 'Yes'),
(27, 3, 'Newsletter Integration', 'Yes'),
(28, 3, 'Email Addresses', 'Yes'),
(29, 3, 'Photo Gallery', 'Yes'),
(30, 3, '24/7 Support For One Month After project Completion', 'Yes'),
(31, 3, 'Google Analytics', 'No'),
(32, 3, 'Optimized Meta Tags', 'No'),
(34, 4, 'Up To 20', 'Yes'),
(35, 4, 'Custom Home Page', 'Yes'),
(36, 4, 'Home Page Banner Design', 'Yes'),
(37, 4, 'Contact Forms', 'Yes'),
(38, 4, 'Responsive Design', 'Yes'),
(39, 4, 'Content Management System', 'Yes'),
(40, 4, 'Chatbot/Livechat Setup', 'Yes'),
(41, 4, 'Google Map Integration', 'Yes'),
(42, 4, 'Google Search Console Setup', 'Yes'),
(43, 4, 'Promo Popup Design And Configuration', 'Yes'),
(44, 4, '24/7 Support For One Month After project Completion', 'Yes'),
(45, 4, 'Newsletter Integration', 'Yes'),
(46, 4, 'Photo Gallery', 'Yes'),
(47, 4, 'Email Addresses', 'Yes'),
(48, 4, 'Social Media Optimized', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `p_name` text NOT NULL,
  `stars` text NOT NULL,
  `comments` text NOT NULL,
  `email` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subsucribe`
--

CREATE TABLE `subsucribe` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `img` text NOT NULL,
  `comment` text NOT NULL,
  `link` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `designation`, `img`, `comment`, `link`, `date`) VALUES
(1, 'Transpodman', 'Owner', 't.png', 'Very easy to work with and responded to all of my messages in a timely manner. Gave the perfect canvas for me to work with to bring my vision to life. Thorough and professional to say the least. I would definitely work with him again.\r\n', 'https://www.fiverr.com/trucking_logo', '2024-03-06 11:34:56'),
(2, 'F8cummins', 'Owner', 'f.png', 'Muhammad took a thought for what I wanted for my logo and immediately made it a reality. The revisions were small and simple and he made quick work of what I was wanting in the final product.\r\n\r\n', 'https://www.fiverr.com/trucking_logo', '2024-03-06 11:34:56'),
(3, 'Drayvenbeckmon', 'Owner', 'd.png', 'I went thru countless reviews til i found him. His artistry and attention to detail are amazing. He Definitely Exceeded my expectations very understanding of my needs.\r\n\r\n\r\n', 'https://www.fiverr.com/truck_logo', '2024-03-06 11:34:56'),
(4, 'Said Raddi | Morocco\r\n', 'Owner', 'sr.jpg', 'pro and understands exactly what he needs to do and provides great support', 'https://www.upwork.com/freelancers/~0189e2e37f28c73c49', '2024-03-06 11:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `role` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `img`, `role`, `status`, `date`) VALUES
(1, 'Shahbaz Akhtar', 'admin', 'admin@binary.com', '123', 'admin.1736633545.jpeg', 'Admin', 'Active', '2024-03-11 08:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `users_site`
--

CREATE TABLE `users_site` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `zipcode` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_site`
--

INSERT INTO `users_site` (`id`, `name`, `email`, `whatsapp`, `password`, `img`, `address`, `city`, `country`, `zipcode`, `date`) VALUES
(1, 'Shahbaz Akhtar ', 'shahbazakhtarjaved@gmail.com', '3463806125', '123', '.486838534.jpeg', 'Ahmed Nagar Tehsil Lalian District Chiniot', 'Lalian, Chiniot', 'Punjab, Pakistan', '41000', '2024-03-10 08:56:59'),
(2, 'Shahbaz Akhtar Javed', 'shahbaz.ali@gmail.com', '', '123', '', 'Ahmed Nagar Tehsil Lalian', 'Chiniot', 'Pakistan', '35400', '2024-03-12 06:41:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_pro`
--
ALTER TABLE `categories_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus_orders`
--
ALTER TABLE `cus_orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderid` (`orderid`);

--
-- Indexes for table `orderfiles`
--
ALTER TABLE `orderfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderid` (`orderid`);

--
-- Indexes for table `ordersmbl`
--
ALTER TABLE `ordersmbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderid` (`orderid`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_feat`
--
ALTER TABLE `pro_feat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderid` (`orderid`);

--
-- Indexes for table `subsucribe`
--
ALTER TABLE `subsucribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_site`
--
ALTER TABLE `users_site`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories_pro`
--
ALTER TABLE `categories_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cus_orders`
--
ALTER TABLE `cus_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderfiles`
--
ALTER TABLE `orderfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ordersmbl`
--
ALTER TABLE `ordersmbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pro_feat`
--
ALTER TABLE `pro_feat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subsucribe`
--
ALTER TABLE `subsucribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_site`
--
ALTER TABLE `users_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
