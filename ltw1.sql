-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 08 Juillet 2018 à 16:37
-- Version du serveur :  5.6.37
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ltw1`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `user_account` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `email_account` tinytext COLLATE utf32_unicode_ci NOT NULL,
  `pass_account` tinytext COLLATE utf32_unicode_ci NOT NULL,
  `phone_account` tinyint(4) NOT NULL,
  `address_account` tinytext COLLATE utf32_unicode_ci NOT NULL,
  `balance_account` tinytext COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `user_admin` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `pass_admin` tinytext COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`user_admin`, `pass_admin`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id_brand` int(11) NOT NULL,
  `name_brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `brands`
--

INSERT INTO `brands` (`id_brand`, `name_brand`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Nokia'),
(4, 'Oppo'),
(5, 'Sony'),
(6, 'Asus');

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id_cart` int(11) NOT NULL,
  `id_account` text COLLATE utf8_unicode_ci NOT NULL,
  `date_cart` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `id_cart_info` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL DEFAULT '1',
  `sl_cart_info` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gallerys`
--

CREATE TABLE IF NOT EXISTS `gallerys` (
  `id_gallery` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `gallerys`
--

INSERT INTO `gallerys` (`id_gallery`, `id_product`) VALUES
(11, 29),
(12, 35),
(13, 40);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id_image` int(11) NOT NULL,
  `name_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url_image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id_image`, `name_image`, `url_image`) VALUES
(178, 'iPhone X 256GB Gray', 'iphone-x-256gb-h2-400x460-400x460.png'),
(179, 'Samsung Galaxy S9+ 128GB HoÃ ng Kim', 'samsung-galaxy-s9-plus-128gb-vang-dong-1-400x460.png'),
(180, 'Sony Xperia XZ2', 'sony-xperia-xz2-2-400x460.png'),
(181, 'OPPO F7 128GB', 'oppo-f7-128gb-den-400x460.png'),
(182, 'Nokia 8', 'nokia-8-1-400x460.png'),
(183, 'Nokia 7 plus', 'nokia-7-plus-5-400x460.png'),
(184, 'iPad Pro 10.5 inch Wifi 64GB', 'ipad-pro-105-inch-wifi-64gb-2017-400-400x460.png'),
(185, 'Samsung Galaxy Tab A6 10.1 Spen', 'samsung-galaxy-tab-a6-101-spen-400x460.png'),
(186, 'Apple Macbook Pro Touch MPXX2SA/A i5 3.1GHz/8GB/256GB', 'apple-macbook-pro-touch-mpxx2sa-a-450x300-450x300.jpg'),
(187, 'Asus GL503GE i7 8750H/8GB/1TB+128GB/4GB GTX1050Ti/Win10/(EN021T)', 'asus-gl503ge-en021t-19-600x600.jpg'),
(188, 'Asus UX430UA i5 8250U/8GB/256GB/Win10/(GV334T)', 'asus-ux430ua-i5-8250u-gv334t-dai-dien-450x300.jpg'),
(189, 'Tai nghe nhÃ©t trong Samsung EG920B', 'tai-nghe-nhet-trong-samsung-eg920b-11-300x300.jpg'),
(190, 'á»p lÆ°ng iPhone X Nhá»±a dáº»o Solid in hÃ¬nh JM JM1802282 ChuÃ´Ì£t Lang', 'op-lung-iphone-x-nhua-deo-solid-in-hinh-jm-jm180221-600x600.jpg'),
(191, 'Samsung Gear VR3', 'kinh-thuc-te-ao-samsung-gear-vr-sm-r325-400x400.png'),
(192, 'BÃºt cáº£m á»©ng Apple Pencil', 'apple-pencil-10-400x460.png'),
(193, 'Samsung Gear Fit2 Pro', 'samsung-gear-fit2-pro-2-330x330.png'),
(194, 'Apple Watch S1, 38mm, viá»n nhÃ´m, dÃ¢y cao su mÃ u tráº¯ng', 'apple-watch-edition-38mm-122-330x330.png'),
(195, 'Samsung Gear S3 Frontier', 'samsung-gear-s3-frontier-lte-400x460.png'),
(196, 'á»šI   ÄÃNH GIÃ   Máº¸O HAY   THá»Š TRÆ¯á»œNG   CUá»˜C Sá»NG Sá»   GAME - APP   Sá»° KIá»†N ÄÄƒng nháº­p Cá»˜NG Äá»’NGBETA ÄÃ£ cÃ³ MIUI 10 Global Beta 8.7.5 cho 8 thiáº¿t bá»‹ Xiaomi, báº¡n Ä‘Ã£ nÃ¢ng cáº¥p?', '4_1280x720-800-resize.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_new` int(11) NOT NULL,
  `name_new` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `hagtag_new` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `image_new` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `info_new` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_new`, `name_new`, `hagtag_new`, `image_new`, `info_new`) VALUES
(1, 'á»šI   ÄÃNH GIÃ   Máº¸O HAY   THá»Š TRÆ¯á»œNG   CUá»˜C Sá»NG Sá»   GAME - APP   Sá»° KIá»†N ÄÄƒng nháº­p Cá»˜NG Äá»’NGBETA ÄÃ£ cÃ³ MIUI 10 Global Beta 8.7.5 cho 8 thiáº¿t bá»‹ Xiaomi', 'Nguá»“n: Gsmarena\r\n\r\nXem thÃªm: CÃ¡ch Ä‘Äƒng kÃ½ tham gia thá»­ nghiá»‡m MIUI 10 Beta dÃ nh cho ngÆ°á»i dÃ¹ng Xiaomi', '196', 'Sau khi tung phiÃªn báº£n beta cá»§a MIUI 10 China cho má»™t sá»‘ thiáº¿t bá»‹ táº¡i thá»‹ trÆ°á»ng Trung Quá»‘c, má»›i Ä‘Ã¢y Xiaomi Ä‘Ã£ tung ra báº£n beta cá»§a MIUI 10 Global dÃ nh cho thá»‹ trÆ°á»ng quá»‘c táº¿ vá»›i 8 thiáº¿t bá»‹ Ä‘Æ°á»£c há»— trá»£.\r\nNhÆ° cÃ¡c báº¡n Ä‘Ã£ biáº¿t, MIUI 10 nhÆ° cÃ¡c phiÃªn báº£n trÆ°á»›c Ä‘Ã¢y sáº½ cÃ³ 2 biáº¿n thá»ƒ: MIUI 10 China dÃ nh cho thá»‹ trÆ°á»ng Trung Quá»‘c vÃ  MIUI 10 Global dÃ nh cho thá»‹ trÆ°á»ng quá»‘c táº¿.\r\n\r\nNgoÃ i ngÃ´n ngá»¯ Ä‘Æ°á»£c há»— trá»£ cho cÃ¡c thá»‹ trÆ°á»ng quá»‘c táº¿ thÃ¬ báº£n MIUI 10 Global  cÃ²n cÃ³ Google Play Ä‘Æ°á»£c tÃ­ch há»£p sáºµn (MIUI 10 China khÃ´ng cÃ³). MIUI 10 China Ä‘Æ°á»£c tung ra ngay sau sá»± kiá»‡n ra máº¯t Mi 8 há»“i cuá»‘i thÃ¡ng 5 vá»«a qua, cÃ²n MIUI 10 Global Ä‘Æ°á»£c cÃ´ng bá»‘ táº¡i sá»± kiá»‡n ra máº¯t Xiaomi Y2 táº¡i áº¤n Äá»™.\r\n\r\nMá»›i Ä‘Ã¢y Xiaomi Ä‘Ã£ chÃ­nh thá»©c cho phÃ©p cÃ¡c báº¡n táº£i vá» báº£n beta cá»§a MIUI 10 Global vá»›i 8 thiáº¿t bá»‹ dÆ°á»›i Ä‘Ã¢y:\r\n\r\nXiaomi Mi 6\r\nXiaomi Mi Mix 2\r\nXiaomi Redmi S2 (Redmi Y2 á»Ÿ áº¤n Äá»™)\r\nXiaomi Redmi Note 5 Pro / Redmi Note 5\r\nXiaomi Mi Mix 2S\r\nXiaomi Mi 5\r\nXiaomi Mi Note 2\r\nXiaomi Mi Mix\r\nMá»™t sá»‘ lÆ°u Ã½ khi cÃ¡c báº¡n cáº­p nháº­t lÃªn MIUI 10 Global  nhÆ° sau:\r\n\r\nPháº£i luÃ´n sao lÆ°u dá»¯ liá»‡u cá»§a mÃ¬nh trÆ°á»›c khi nÃ¢ng cáº¥p lÃªn MIUI 10\r\nTrÆ°á»ng há»£p báº¡n Ä‘ang dÃ¹ng MIUI 7 / MIUI 8 / MIUI 9 vá»›i báº£n ROM chÃ­nh thá»©c thÃ¬ báº¡n cÃ³ thá»ƒ nÃ¢ng cáº¥p lÃªn MIUI 10 thÃ´ng qua hÃ¬nh thá»©c lÃ  fastboot (cáº§n pháº£i unlocked bootloader).\r\nNgÆ°á»i dÃ¹ng Ä‘ang sá»­ dá»¥ng báº£n MIUI 9 Global Beta ROM cÃ³ thá»ƒ vÃ o á»©ng dá»¥ng Updater Ä‘á»ƒ kiá»ƒm tra báº£n cáº­p nháº­t beta MIUI 10 Global.\r\nBáº£n ROM Global Beta cÃ³ thá»ƒ flash báº±ng fastboot hay recovery.\r\nMIUI 10 Global cÃ³ tÃªn gá»i lÃ  Global Beta 8.7.5 ROM, Xiaomi cho biáº¿t Ä‘Ã¢y chá»‰ lÃ  Ä‘á»£t cáº­p nháº­t Ä‘áº§u tiÃªn cá»§a phiÃªn báº£n Global Beta, loáº¡t smartphone khÃ¡c cá»§a hÃ£ng cÅ©ng sáº½ sá»›m nháº­n Ä‘Æ°á»£c báº£n nÃ¢ng cáº¥p nÃ y.Má»™t trong nhá»¯ng tÃ­nh nÄƒng chÃ­nh trong phiÃªn báº£n Global Beta 8.7.5 nÃ y lÃ  bá»• sung cÃ´ng nghá»‡ LDAC cho cÃ¡c thiáº¿t bá»‹ Bluetooth. LÆ°u Ã½, tÃ­nh nÄƒng nÃ y khÃ´ng pháº£i lÃ  má»™t pháº§n cá»§a MIUI 10, tá»©c lÃ  cÃ¡c thiáº¿t bá»‹ khÃ´ng nÃ¢ng cáº¥p lÃªn MIUI 10 váº«n cÃ³ thá»ƒ sá»¡ há»¯u nÃ³. Xiaomi cÅ©ng há»©a háº¹n ráº±ng, táº¥t cáº£ cÃ¡c thiáº¿t bá»‹ Android One cá»§a hÃ£ng Ä‘á»u sáº½ nháº­n Ä‘Æ°á»£c cáº­p nháº­t há»— trá»£ LDAC.\r\n\r\nÄá»‘i vá»›i nhá»¯ng báº¡n khÃ´ng biáº¿t thÃ¬ LDAC lÃ  cÃ´ng nghá»‡ cáº£i thiá»‡n cháº¥t lÆ°á»£ng Ã¢m thanh khÃ´ng dÃ¢y Ä‘Æ°á»£c phÃ¡t qua Bluetooth. NÃ³ Ä‘Æ°á»£c phÃ¡t triá»ƒn bá»Ÿi Sony, cho phÃ©p truyá»n dá»¯ liá»‡u lá»›n gáº¥p 3 láº§n so vá»›i cÃ¡c cÃ´ng nghá»‡ khÃ¡c thÃ´ng qua Bluetooth vá»›i bitrate 990kb/s, cháº¥t lÆ°á»£ng Ã¢m thanh sáº½ Ä‘Æ°á»£c giá»¯ á»Ÿ má»©c cao. VÃ  tai nghe cá»§a báº¡n cÅ©ng cáº§n pháº£i há»— trá»£ phÃ¡t trá»±c tuyáº¿n LDAC.');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL,
  `name_product` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `image_product` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `price_product` float NOT NULL,
  `sale_product` float NOT NULL,
  `sl_product` int(11) NOT NULL,
  `id_type` int(20) NOT NULL,
  `id_brand` int(20) NOT NULL,
  `info_product` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `image_product`, `price_product`, `sale_product`, `sl_product`, `id_type`, `id_brand`, `info_product`) VALUES
(24, 'iPhone X 256GB Gray', '178', 34790000, 34590000, 200, 1, 1, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh:	OLED, 5.8", Super Retina\r\nHá»‡ Ä‘iá»u hÃ nh:	iOS 11\r\nCamera sau:	2 camera 12 MP\r\nCamera trÆ°á»›c:	7 MP\r\nCPU:	Apple A11 Bionic 6 nhÃ¢n\r\nRAM:	3 GB\r\nBá»™ nhá»› trong:	256 GB\r\nTháº» SIM:	1 Nano SIM, Há»— trá»£ 4G\r\nDung lÆ°á»£ng pin:	2716 mAh, cÃ³ sáº¡c nhanh\r\nTrong há»™p cÃ³: Sáº¡c, Tai nghe, SÃ¡ch hÆ°á»›ng dáº«n, Jack chuyá»ƒn tai nghe 3.5mm, CÃ¡p, CÃ¢y láº¥y sim\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua kÃ¨m pin sáº¡c dá»± phÃ²ng, tháº» nhá»› 16GB giáº£m 20%\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP cÃ³ KM phiáº¿u mua hÃ ng) '),
(25, 'Samsung Galaxy S9+ 128GB HoÃ ng Kim', '179', 24490000, 24490000, 200, 1, 2, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh:	Super AMOLED, 6.2", Quad HD+ (2K+)\r\nHá»‡ Ä‘iá»u hÃ nh:	Android 8.0 (Oreo)\r\nCamera sau:	2 camera 12 MP\r\nCamera trÆ°á»›c:	8 MP\r\nCPU:	Exynos 9810 8 nhÃ¢n 64 bit\r\nRAM:	6 GB\r\nBá»™ nhá»› trong:	128 GB\r\nTháº» nhá»›:	MicroSD, há»— trá»£ tá»‘i Ä‘a 400 GB\r\nTháº» SIM:	2 SIM Nano (SIM 2 chung khe tháº» nhá»›), Há»— trá»£ 4G\r\nDung lÆ°á»£ng pin:	3500 mAh, cÃ³ sáº¡c nhanh\r\nTrong há»™p cÃ³: Pin, Sáº¡c, Tai nghe, SÃ¡ch hÆ°á»›ng dáº«n, CÃ¡p, CÃ¢y láº¥y sim\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua kÃ¨m pin sáº¡c dá»± phÃ²ng, tháº» nhá»› 16GB giáº£m 20%\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP cÃ³ KM phiáº¿u mua hÃ ng) '),
(26, 'Sony Xperia XZ2', '180', 19990000, 19990000, 200, 1, 5, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh:	IPS HDR LCD, 5.7", Full HD+\r\nHá»‡ Ä‘iá»u hÃ nh:	Android 8.0 (Oreo)\r\nCamera sau:	19 MP\r\nCamera trÆ°á»›c:	5 MP\r\nCPU:	Snapdragon 845 8 nhÃ¢n\r\nRAM:	4 GB\r\nBá»™ nhá»› trong:	64 GB\r\nTháº» nhá»›:	MicroSD, há»— trá»£ tá»‘i Ä‘a 400 GB\r\nTháº» SIM:	2 Nano SIM, Há»— trá»£ 4G\r\nDung lÆ°á»£ng pin:	3180 mAh, cÃ³ sáº¡c nhanh\r\nTrong há»™p cÃ³: Sáº¡c, Tai nghe, SÃ¡ch hÆ°á»›ng dáº«n\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua kÃ¨m pin sáº¡c dá»± phÃ²ng, tháº» nhá»› 16GB giáº£m 20%\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(27, 'OPPO F7 128GB', '181', 9990000, 9950000, 200, 1, 4, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh:	LTPS LCD, 6.23", Full HD+\r\nHá»‡ Ä‘iá»u hÃ nh:	ColorOS 5.0 (Android 8.1)\r\nCamera sau:	16 MP\r\nCamera trÆ°á»›c:	25 MP\r\nCPU:	MediaTek Helio P60 8 nhÃ¢n 64-bit\r\nRAM:	6 GB\r\nBá»™ nhá»› trong:	128 GB\r\nTháº» nhá»›:	MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB\r\nTháº» SIM:\r\n2 Nano SIM, Há»— trá»£ 4G\r\nHOTMua sim Mobi Big 60 (3GB data/ thÃ¡ng). GiÃ¡ tá»« 80.000Ä‘\r\nDung lÆ°á»£ng pin:	3400 mAh\r\nTrong há»™p cÃ³: Sáº¡c, Tai nghe, CÃ¡p, CÃ¢y láº¥y sim, á»p lÆ°ng\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua kÃ¨m pin sáº¡c dá»± phÃ²ng, tháº» nhá»› 16GB giáº£m 20%\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(28, 'Nokia 8', '182', 9990000, 9990000, 200, 1, 3, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh:	IPS LCD, 5.3", Quad HD (2K)\r\nHá»‡ Ä‘iá»u hÃ nh:	Android 7.1 (Nougat)\r\nCamera sau:	2 camera 13 MP\r\nCamera trÆ°á»›c:	13 MP\r\nCPU:	Qualcomm Snapdragon 835 8 nhÃ¢n 64-bit\r\nRAM:	4 GB\r\nBá»™ nhá»› trong:	64 GB\r\nTháº» nhá»›:	MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB\r\nTháº» SIM:\r\n2 Nano SIM, Há»— trá»£ 4G\r\nHOTMua sim Mobi Big 60 (3GB data/ thÃ¡ng). GiÃ¡ tá»« 80.000Ä‘\r\nDung lÆ°á»£ng pin:	3090 mAh, cÃ³ sáº¡c nhanh\r\nTrong há»™p cÃ³: Sáº¡c, Tai nghe, SÃ¡ch hÆ°á»›ng dáº«n, CÃ¡p, CÃ¢y láº¥y sim\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua kÃ¨m pin sáº¡c dá»± phÃ²ng, tháº» nhá»› 16GB giáº£m 20%\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(29, 'Nokia 7 plus', '183', 8990000, 8950000, 200, 1, 3, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh:	IPS LCD, 6", Full HD+\r\nHá»‡ Ä‘iá»u hÃ nh:	Android 8.0 (Oreo)\r\nCamera sau:	12 MP vÃ  13 MP (2 camera)\r\nCamera trÆ°á»›c:	16 MP\r\nCPU:	Qualcomm Snapdragon 660 8 nhÃ¢n\r\nRAM:	4 GB\r\nBá»™ nhá»› trong:	64 GB\r\nTháº» nhá»›:	MicroSD, há»— trá»£ tá»‘i Ä‘a 256 GB\r\nTháº» SIM:\r\n2 SIM Nano (SIM 2 chung khe tháº» nhá»›), Há»— trá»£ 4G\r\nHOTMua sim Mobi Big 60 (3GB data/ thÃ¡ng). GiÃ¡ tá»« 80.000Ä‘\r\nDung lÆ°á»£ng pin:	3800 mAh\r\nTrong há»™p cÃ³: Sáº¡c, Tai nghe, SÃ¡ch hÆ°á»›ng dáº«n, CÃ¡p, CÃ¢y láº¥y sim\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua kÃ¨m pin sáº¡c dá»± phÃ²ng, tháº» nhá»› 16GB giáº£m 20%\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(30, 'iPad Pro 10.5 inch Wifi 64GB', '184', 16990000, 16950000, 100, 2, 1, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh	IPS LCD, 10.5"\r\nHá»‡ Ä‘iá»u hÃ nh	iOS 11\r\nCPU	Apple A10X 6 nhÃ¢n 64-bit\r\nRAM	4 GB\r\nBá»™ nhá»› trong	64 GB\r\nCamera sau	12 MP\r\nCamera trÆ°á»›c	7 MP\r\nKáº¿t ná»‘i máº¡ng	WiFi, KhÃ´ng há»— trá»£ 3G, KhÃ´ng há»— trá»£ 4G\r\nÄÃ m thoáº¡i	FaceTime\r\nTrá»ng lÆ°á»£ng	469 g\r\nTrong há»™p cÃ³: Adapter, SÃ¡ch hÆ°á»›ng dáº«n, CÃ¡p Lightning, Há»™p mÃ¡y\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng vá»›i sáº£n pháº©m lá»—i. TÃ¬m hiá»ƒu\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP Ä‘ang cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(31, 'Samsung Galaxy Tab A6 10.1 Spen', '185', 7490000, 7490000, 100, 2, 2, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh	PLS LCD, 10.1"\r\nHá»‡ Ä‘iá»u hÃ nh	Android 6.0 (Marshmallow)\r\nCPU	Exynos 7870 8 nhÃ¢n, 1.6 GHz\r\nRAM	3 GB\r\nBá»™ nhá»› trong	16 GB\r\nCamera sau	8 MP\r\nCamera trÆ°á»›c	2 MP\r\nKáº¿t ná»‘i máº¡ng\r\nWiFi, 3G, 4G LTE\r\nHOTMua sim Viettel DATA 7GB (7GB data/thÃ¡ng), má»—i thÃ¡ng náº¡p chá»‰ 70.000Ä‘. GiÃ¡ tá»« 80.000Ä‘\r\nHá»— trá»£ SIM	Nano Sim\r\nÄÃ m thoáº¡i	CÃ³\r\nTrong há»™p cÃ³: Adapter, SÃ¡ch hÆ°á»›ng dáº«n, BÃºt cáº£m á»©ng (+ ngÃ²i bÃºt), CÃ¡p Micro USB, Há»™p mÃ¡y\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng vá»›i sáº£n pháº©m lá»—i. TÃ¬m hiá»ƒu\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP Ä‘ang cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(32, 'Apple Macbook Pro Touch MPXX2SA/A i5 3.1GHz/8GB/256GB', '186', 44990000, 44950000, 300, 3, 1, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nCPU:	Intel Core i5 Kabylake, 3.10 GHz\r\nRAM:	8 GB, DDR3 (on board), 2133 MHz\r\ná»” cá»©ng:	SSD: 256 GB\r\nMÃ n hÃ¬nh:	13.3 inch, Retina (2560 x 1600)\r\nCard mÃ n hÃ¬nh:	Card Ä‘á»“ há»a tÃ­ch há»£p, IntelÂ® Irisâ„¢ Plus Graphics 650\r\nCá»•ng káº¿t ná»‘i:	4 x Thunderbolt 3 (USB-C)\r\nÄáº·c biá»‡t:	CÃ³ Ä‘Ã¨n bÃ n phÃ­m\r\nHá»‡ Ä‘iá»u hÃ nh:	Mac OS\r\nThiáº¿t káº¿:	Vá» kim loáº¡i nguyÃªn khá»‘i, PIN liá»n\r\nKÃ­ch thÆ°á»›c:	DÃ y 14.9 mm, 1.37 kg\r\nTrong há»™p cÃ³: SÃ¡ch hÆ°á»›ng dáº«n, ThÃ¹ng mÃ¡y, Adapter sáº¡c, CÃ¡p(USB-C)\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP Ä‘ang cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(33, 'Asus GL503GE i7 8750H/8GB/1TB+128GB/4GB GTX1050Ti/Win10/(EN021T)', '187', 29990000, 29950000, 300, 3, 6, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nCPU:	Intel Core i7 Coffee Lake, 8750H, 2.20 GHz\r\nRAM:	8 GB, DDR4 (2 khe), 2666 MHz\r\ná»” cá»©ng:	HDD: 1TB + SSD: 128GB M2\r\nMÃ n hÃ¬nh:	15.6 inch, Full HD (1920 x 1080)\r\nCard mÃ n hÃ¬nh:	Card Ä‘á»“ há»a rá»i, NVIDIA GeForce GTX 1050Ti, 4GB\r\nCá»•ng káº¿t ná»‘i:	HDMI 1.4, 3 x USB 3.0, Mini DisplayPort, LAN (RJ45), USB 2.0, USB Type-C\r\nÄáº·c biá»‡t:	CÃ³ Ä‘Ã¨n bÃ n phÃ­m\r\nHá»‡ Ä‘iá»u hÃ nh:	Windows 10 Home SL\r\nThiáº¿t káº¿:	Vá» nhá»±a - chiáº¿u nghá»‰ tay báº±ng kim loáº¡i, PIN liá»n\r\nKÃ­ch thÆ°á»›c:	DÃ y 23 mm, 2.5 kg\r\nTrong há»™p cÃ³: DÃ¢y nguá»“n, SÃ¡ch hÆ°á»›ng dáº«n, ThÃ¹ng mÃ¡y, Adapter sáº¡c\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 24 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP Ä‘ang cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(34, 'Asus UX430UA i5 8250U/8GB/256GB/Win10/(GV334T)', '188', 21990000, 21990000, 300, 3, 6, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nCPU:	Intel Core i5 Kabylake Refresh, 8250U, 1.60 GHz\r\nRAM:	8 GB, DDR3 (on board), 1866 MHz\r\ná»” cá»©ng:	SSD: 256 GB, M.2\r\nMÃ n hÃ¬nh:	14 inch, Full HD (1920 x 1080)\r\nCard mÃ n hÃ¬nh:	Card Ä‘á»“ há»a tÃ­ch há»£p, IntelÂ® UHD Graphics 620\r\nCá»•ng káº¿t ná»‘i:	Micro HDMI, USB 2.0, USB Type-C, USB 3.0\r\nÄáº·c biá»‡t:	CÃ³ Ä‘Ã¨n bÃ n phÃ­m\r\nHá»‡ Ä‘iá»u hÃ nh:	Windows 10 Home SL\r\nThiáº¿t káº¿:	Vá» kim loáº¡i, PIN liá»n\r\nKÃ­ch thÆ°á»›c:	DÃ y 15.9 mm, 1.3 kg\r\nTrong há»™p cÃ³: DÃ¢y nguá»“n, SÃ¡ch hÆ°á»›ng dáº«n, Bao da (asus), ThÃ¹ng mÃ¡y, Adapter sáº¡c, CÃ¡p (USB-C sang HDMI, USB-C sang LAN)\r\nBáº£o hÃ nh chÃ­nh hÃ£ng 24 thÃ¡ng. Xem chi tiáº¿t\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng náº¿u lá»—i, Ä‘á»•i sáº£n pháº©m táº¡i nhÃ  trong 1 ngÃ y.\r\nÆ¯U ÄÃƒI THÃŠM\r\nMua hÃ ng á»Ÿ 76 siÃªu thá»‹ nháº­n Phiáº¿u mua hÃ ng dÃ¹ng tráº£i nghiá»‡m dá»‹ch vá»¥ táº¡i BÃ¡ch HÃ³a Xanh (Ã¡p dá»¥ng cho SP Ä‘ang cÃ³ KM phiáº¿u mua hÃ ng) Xem chi tiáº¿t'),
(35, 'Tai nghe nhÃ©t trong Samsung EG920B', '189', 280000, 168000, 500, 4, 2, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nJack cáº¯m:	\r\n3.5 mm\r\nÄá»™ dÃ i dÃ¢y:	\r\n1.2 m\r\nPhÃ­m Ä‘iá»u khiá»ƒn:	\r\nMic thoáº¡i\r\nNghe/nháº­n cuá»™c gá»i\r\nPhÃ¡t/dá»«ng chÆ¡i nháº¡c\r\nTÄƒng/giáº£m Ã¢m lÆ°á»£ng\r\nBá»™ bÃ¡n hÃ ng:	\r\nTai nghe\r\n3 cáº·p Ä‘á»‡m tai nghe\r\n1 mÃ³c vÃ nh tai\r\nXuáº¥t xá»©	\r\nTrung Quá»‘c\r\nTai nghe nhÃ©t trong Samsung EG920B\r\nÄá»  \r\nÄen\r\nGIÃ Sá»C ONLINE: 168.000â‚« 280.000â‚«\r\nÄÃ£ Ä‘á»§ sá»‘ lÆ°á»£ng - Chá»‰ duy nháº¥t 08/07\r\nMá»—i sá»‘ Ä‘iá»‡n thoáº¡i chá»‰ Ä‘Æ°á»£c mua 1 sáº£n pháº©m\r\nKhÃ´ng Ã¡p dá»¥ng khuyáº¿n mÃ£i khÃ¡c\r\nNháº¯n tin 1.000Ä‘ xÃ¡c nháº­n mua hÃ ng\r\nNháº­n sáº£n pháº©m trong 48h\r\nKhÃ´ng Ã¡p dá»¥ng chuyá»ƒn hÃ ng\r\nXem thÃªm phá»¥ kiá»‡n giÃ¡ sá»‘c 24 giá»\r\n115 khÃ¡ch Ä‘áº·t mua (101 Ä‘Ã£ xÃ¡c nháº­n)\r\nHoáº·c\r\nMUA GIÃ THÆ¯á»œNG: 280.000â‚«\r\nGiao táº­n nÆ¡i hoáº·c nháº­n táº¡i cá»­a hÃ ng\r\nMUA GIÃ THÆ¯á»œNG 280.000â‚«\r\nGiao táº­n nÆ¡i hoáº·c nháº­n á»Ÿ cá»­a hÃ ng\r\nGá»i Ä‘áº·t mua: 1800.1060 (Miá»…n phÃ­) 028.3622.1060 (7:30-22:00)\r\nBáº£o hÃ nh 1 nÄƒm 1 Ä‘á»•i 1. (Xem chi tiáº¿t)\r\nCÃ¡c phÃ­m chá»©c nÄƒng Ä‘Æ°á»£c tÃ­ch há»£p trÃªn dÃ¢y, thuáº­n lá»£i cho ngÆ°á»i dÃ¹ng.\r\nMicro tÃ­ch há»£p cÃ³ kháº£ nÄƒng lá»c tiáº¿ng á»“n.\r\nÄá»‡m tai nghe Ãªm Ã¡i, dá»… chá»‹u khi sá»­ dá»¥ng thá»i gian dÃ i.\r\nDÃ¢y dÃ i 120 cm thoáº£i mÃ¡i Ä‘á»ƒ vá»«a dÃ¹ng mÃ¡y vá»«a nghe nháº¡c.\r\nSáº£n pháº©m chÃ­nh hÃ£ng Samsung.'),
(36, 'á»p lÆ°ng iPhone X Nhá»±a dáº»o Solid in hÃ¬nh JM JM1802282 ChuÃ´Ì£t Lang', '190', 100000, 51000, 500, 4, 1, 'Báº£o hÃ nh 2 tuáº§n 1 Ä‘á»•i 1 (náº¿u lá»—i).\r\nCháº¥t liá»‡u nhá»±a, kiá»ƒu dÃ¡ng thá»i trang vÃ  Ä‘áº¹p máº¯t\r\nThiáº¿t káº¿ vá»«a váº·n vÃ  Ã´m sÃ¡t thÃ¢n mÃ¡y\r\n Dá»… dÃ ng thÃ¡o/láº¯p á»‘p vÃ o mÃ¡y'),
(37, 'Samsung Gear VR3', '191', 2490000, 2490000, 500, 4, 2, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ u sáº¯c	Äen\r\nTÃ­nh nÄƒng	Xem video, ChÆ¡i game, Xem hiÌ€nh aÌ‰nh\r\nCháº¥t liá»‡u	nhá»±a\r\nKÃ­ch thÆ°á»›c	DÃ i 207.8 mm - Ngang 122.5 mm - Cao 98.6 mm\r\nTrá»ng lÆ°á»£ng	345 g\r\n Trong há»™p cÃ³: Há»™p,SÃ¡ch hÆ°á»›ng dáº«n\r\n Báº£o hÃ nh chÃ­nh hÃ£ng 6 thÃ¡ng. Xem chi tiáº¿t\r\nGiao hÃ ng táº­n nÆ¡i miá»…n phÃ­ trong 30 phÃºt. TÃ¬m hiá»ƒu\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng vá»›i sáº£n pháº©m lá»—i. TÃ¬m hiá»ƒu'),
(38, 'BÃºt cáº£m á»©ng Apple Pencil', '192', 2990000, 2990000, 500, 4, 1, 'Báº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\nBÃºt chuyÃªn dá»¥ng dÃ nh cho iPad Pro vÃ  iPad 2018.\r\nKÃ­ch thÆ°á»›c nhÆ° má»™t chiáº¿c bÃºt chÃ¬ dá»… cáº§m tay.\r\nBÃºt sáº¡c pin ráº¥t Ä‘Æ¡n giáº£n qua Lightning connector - 15 giÃ¢y sá»­ dá»¥ng 30 phÃºt\r\nKáº¿t ná»‘i báº±ng Bluetooth vÃ  thao tÃ¡c trÃªn cÃ¡c á»©ng dá»¥ng cá»§a Apple tiá»‡n lá»£i\r\nBáº£o hÃ nh 12 thÃ¡ng chÃ­nh hÃ£ng Apple'),
(39, 'Samsung Gear Fit2 Pro', '193', 4190000, 4190000, 500, 4, 2, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh	AMOLED, 1.5 inch, 216 x 432 pixels\r\nKÃ­nh cÆ°á»ng lá»±c	CÃ³\r\nCháº¥t liá»‡u	DÃ¢y cao su\r\nChá»‘ng nÆ°á»›c	CÃ³\r\nThiáº¿t bá»‹ káº¿t ná»‘i	Android vÃ  iOS\r\nThá»i gian sá»­ dá»¥ng	Khoáº£ng 3 - 4 ngÃ y\r\n Trong há»™p cÃ³: Äá»“ng há»“,SÃ¡ch hÆ°á»›ng dáº«n,Há»™p,Sáº¡c\r\n Báº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\nGiao hÃ ng táº­n nÆ¡i miá»…n phÃ­ trong 30 phÃºt. TÃ¬m hiá»ƒu\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng vá»›i sáº£n pháº©m lá»—i. TÃ¬m hiá»ƒu\r\n'),
(40, 'Apple Watch S1, 38mm, viá»n nhÃ´m, dÃ¢y cao su mÃ u tráº¯ng', '194', 7990000, 7990000, 500, 4, 1, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh	AMOLED, 1.5 inch, 340 x 272 pixels\r\nKÃ­nh cÆ°á»ng lá»±c	Ion-X strengthened glass\r\nCháº¥t liá»‡u	Cao su\r\nChá»‘ng nÆ°á»›c	CÃ³\r\nThiáº¿t bá»‹ káº¿t ná»‘i	iPhone 5, iOS 8.2 trá»Ÿ lÃªn\r\nThá»i gian sá»­ dá»¥ng	Chá»: 18h. Sá»­ dá»¥ng: 3h'),
(41, 'Samsung Gear S3 Frontier', '195', 7990000, 7950000, 500, 4, 2, 'ThÃ´ng sá»‘ ká»¹ thuáº­t\r\nMÃ n hÃ¬nh	Super AMOLED, 1.3 inch, 360 x 360 pixels\r\nKÃ­nh cÆ°á»ng lá»±c	CorningÂ® GorillaÂ® Glass 3\r\nCháº¥t liá»‡u	ThÃ©p khÃ´ng gá»‰\r\nChá»‘ng nÆ°á»›c	CÃ³\r\nThiáº¿t bá»‹ káº¿t ná»‘i	Android RAM trÃªn 1.5 GB vÃ  iOS\r\nThá»i gian sá»­ dá»¥ng	Khoáº£ng 72 tiáº¿ng\r\n Trong há»™p cÃ³: Äá»“ng há»“, Sáº¡c, SÃ¡ch hÆ°á»›ng dáº«n\r\n Báº£o hÃ nh chÃ­nh hÃ£ng 12 thÃ¡ng. Xem chi tiáº¿t\r\nGiao hÃ ng táº­n nÆ¡i miá»…n phÃ­ trong 30 phÃºt. TÃ¬m hiá»ƒu\r\n1 Ä‘á»•i 1 trong 1 thÃ¡ng vá»›i sáº£n pháº©m lá»—i. TÃ¬m hiá»ƒu');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id_type` int(11) NOT NULL,
  `name_type` tinytext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id_type`, `name_type`) VALUES
(1, 'ÄiÃªn thoáº¡i Smartphone'),
(2, 'MÃ¡y tÃ­nh báº£ng'),
(3, 'Laptop'),
(4, 'Phá»¥ kiá»‡n');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_account`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_admin`);

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id_brand`);

--
-- Index pour la table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cart`);

--
-- Index pour la table `cart_info`
--
ALTER TABLE `cart_info`
  ADD PRIMARY KEY (`id_cart_info`);

--
-- Index pour la table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `brands`
--
ALTER TABLE `brands`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `cart_info`
--
ALTER TABLE `cart_info`
  MODIFY `id_cart_info` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
