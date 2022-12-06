-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 May 2022, 17:01:07
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeigniterfirma`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_us`
--

CREATE TABLE `about_us` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `about_us`
--

INSERT INTO `about_us` (`ID`, `Image`, `Title`, `Content`) VALUES
(1, '6283c259de4bc.jpg', 'Hakkımızda', '<p>Yıldız Mobilya ve Konfeksiyon Mağazaları olarak 1976 dan bu yana b&ouml;lgede hizmet veren firmamız 2000 yılından bug&uuml;ne&nbsp; kadar inşaat sekt&ouml;r&uuml;nde hizmet vermektedir.&nbsp;Karab&uuml;k&#39;&uuml;n &ccedil;eşitli b&ouml;lgelerinde binlerce daire, &ccedil;ok sayıda işyeri ve konut projesi ve plaza inşaatını hayata ge&ccedil;irdi.</p>\r\n\r\n<p>Kuruluşundan bug&uuml;ne, sekt&ouml;r&uuml;ndeki ilkleriyle sadece konut değil yaşam alanı oluşturma anlayışıyla binlerce kişinin yaşamına değer katarak, m&uuml;şterileriyle kurduğu uzun soluklu g&uuml;ven ilişkisi ile fark yaratarak b&uuml;y&uuml;d&uuml;. 22 yıllık bilgi, birikim ve deneyimini estetik, teknoloji, kalite ve konfor ile birleştirerek bug&uuml;ne kadar imza attığı t&uuml;m projelerinde satıştan sonra da her zaman yatırımcıların yanında oldu.B&ouml;lgede kendini kanıtlamış olan firmamız yaptıklarımız yapacaklarımızın teminatıdır.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Image`, `Email`, `Password`) VALUES
(1, 'YILDIZLAR GAYRİMENKUL & İNŞAAT', '6283c62fb4124.ico', 'info@yildizlargayrimenkul.com.tr', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `albums`
--

CREATE TABLE `albums` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `albums`
--

INSERT INTO `albums` (`ID`, `Image`, `Name`, `Status`, `Rank`, `Create_Date`) VALUES
(1, '62873cf0b64de.jpg', 'Yıldız Life Residence ', 1, 0, '2022-04-12 09:42:31'),
(2, '62874566ae278.jpg', 'Yıldız Life Premium', 1, 1, '2022-04-12 09:43:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `album_images`
--

CREATE TABLE `album_images` (
  `ID` int(11) NOT NULL,
  `album_ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `album_images`
--

INSERT INTO `album_images` (`ID`, `album_ID`, `Image`, `Status`, `Rank`, `Create_Date`) VALUES
(176, 1, '628740f3b59e2.jpg', 1, 0, '2022-05-20 09:19:16'),
(177, 1, '628740f4136a6.jpg', 1, 1, '2022-05-20 09:19:16'),
(178, 1, '628740f45012a.jpg', 1, 2, '2022-05-20 09:19:16'),
(179, 1, '628740f49e97a.jpg', 1, 3, '2022-05-20 09:19:16'),
(180, 1, '628740f4efac0.jpg', 1, 4, '2022-05-20 09:19:17'),
(181, 1, '628740f54e050.jpg', 1, 5, '2022-05-20 09:19:17'),
(182, 1, '628740f5889cd.jpg', 1, 6, '2022-05-20 09:19:17'),
(183, 1, '628740f5c39d0.jpg', 1, 7, '2022-05-20 09:19:18'),
(184, 1, '628740f60c98e.jpg', 1, 8, '2022-05-20 09:19:18'),
(185, 1, '628740f64a46b.jpg', 1, 9, '2022-05-20 09:19:18'),
(186, 1, '628740f689e5d.jpg', 1, 10, '2022-05-20 09:19:18'),
(187, 1, '628740f6c584e.jpg', 1, 11, '2022-05-20 09:19:19'),
(188, 1, '628740f712b8f.jpg', 1, 12, '2022-05-20 09:19:19'),
(189, 1, '628740f751627.jpg', 1, 13, '2022-05-20 09:19:19'),
(190, 1, '628740f78fbe2.jpg', 1, 14, '2022-05-20 09:19:19'),
(191, 1, '628740f7cc969.jpg', 1, 15, '2022-05-20 09:19:20'),
(192, 1, '628740f813f19.jpg', 1, 16, '2022-05-20 09:19:20'),
(193, 2, '628745f2ef03c.jpg', 1, 0, '2022-05-20 09:40:35'),
(194, 2, '628745f35d9f1.jpg', 1, 0, '2022-05-20 09:40:35'),
(195, 2, '628745f3cd673.jpg', 1, 0, '2022-05-20 09:40:36'),
(196, 2, '628745f44a40a.jpg', 1, 0, '2022-05-20 09:40:36'),
(197, 2, '628745f4b137c.jpg', 1, 0, '2022-05-20 09:40:37'),
(198, 2, '628745f52f9f9.jpg', 1, 0, '2022-05-20 09:40:37'),
(199, 2, '628745f597a70.jpg', 1, 0, '2022-05-20 09:40:38'),
(200, 2, '628745f60c7ce.jpg', 1, 0, '2022-05-20 09:40:38'),
(201, 2, '628745f6745da.jpg', 1, 0, '2022-05-20 09:40:38'),
(202, 2, '628745f6dd183.jpg', 1, 0, '2022-05-20 09:40:39'),
(203, 2, '628745f758c5b.jpg', 1, 0, '2022-05-20 09:40:39'),
(204, 2, '628745f7bffff.jpg', 1, 0, '2022-05-20 09:40:40'),
(205, 2, '628745f8365b9.jpg', 1, 0, '2022-05-20 09:40:40'),
(206, 2, '628745f8a2936.jpg', 1, 0, '2022-05-20 09:40:41'),
(207, 2, '628745f9182ef.jpg', 1, 0, '2022-05-20 09:40:41'),
(208, 2, '628745f980a20.jpg', 1, 0, '2022-05-20 09:40:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `banner`
--

INSERT INTO `banner` (`ID`, `Image`, `Title`) VALUES
(1, '62837f5ce8330.jpg', 'Banner');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brands`
--

CREATE TABLE `brands` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `brands`
--

INSERT INTO `brands` (`ID`, `Image`, `Name`, `Link`, `Status`, `Rank`, `Create_Date`) VALUES
(6, '6283cc66a32ea.png', 'Arçelik', 'javascript:void(0)', 1, 0, '2022-05-06 09:52:36'),
(7, '6283ccd9c3a27.png', 'Ergül Mobilya', 'javascript:void(0)', 1, 0, '2022-05-06 09:54:47'),
(8, '6283cd1c3c787.png', 'Karaca', 'javascript:void(0)', 1, 0, '2022-05-17 18:28:12'),
(9, '6283cd9524371.jpg', 'Enza Home', 'javascript:void(0)', 1, 0, '2022-05-17 18:28:43'),
(10, '6283cd62c1d90.jpg', 'Yataş Bedding', 'javascript:void(0)', 1, 0, '2022-05-17 18:29:22'),
(11, '6283ce402977d.png', 'Weltew Home', 'javascript:void(0)', 1, 0, '2022-05-17 18:31:07'),
(12, '6283ce9d673d3.png', 'Doğtaş Exclusive', 'javascript:void(0)', 1, 0, '2022-05-17 18:34:37'),
(13, '6283ceb20722b.png', 'Lova Yatak', 'javascript:void(0)', 1, 0, '2022-05-17 18:34:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `client_comments`
--

CREATE TABLE `client_comments` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Degree` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `client_comments`
--

INSERT INTO `client_comments` (`ID`, `Image`, `Name`, `Degree`, `Content`, `Status`, `Rank`, `Create_Date`) VALUES
(6, '6283b230528f4.jpg', 'Ali Çetin', 'Bankacı', '<p>&Ouml;ncelikle anne ve babama daha sonra bize yeni evimize kavuşmamızı sağlayan Yıldızlar Gayrimenkul&#39;e teşekk&uuml;r ederim.</p>\r\n', 1, 0, '2022-05-17 08:59:17'),
(7, '6283b25d24a25.jpg', 'Zeynep Dündar', 'Modacı', '<p>Yıldızlar Gayrimenkul ile tanışmadan &ouml;nce 6 katlı asans&ouml;r&uuml; olmayan kiralık bir dairede oturuyorduk. En &uuml;st kat olduğu i&ccedil;in soğuk ve &ccedil;atıdan s&uuml;rekli akan toz ve yağmur damlalarından kurtulmak istedik. Yıldızlar Gayrimenkul sahipleri bizim i&ccedil;in kolay &ouml;deme olanakları sundu ve hayalimizdeki eve kavuştuk.</p>\r\n', 1, 0, '2022-05-17 08:59:51'),
(8, '6283b27104604.jpg', 'Kenan Yılmaz', 'Akademisyen', '<p>Akşam eve geldiğimde park sorunu yaşamayacağım, balkonuma &ccedil;ıktığımda başka binalarla karşı karşıya gelmeyeceğim, şehre uzak olmayan, fiyatı ve &ouml;deme olanakları uygun olan bir evim olsun istiyordum. Yıldızlar Gayrimenkul ile bu isteklerime kavuştum. Teşekk&uuml;r ederiz.</p>\r\n', 1, 0, '2022-05-17 09:00:22'),
(9, '6283b36f1ac03.jpg', 'Alihan Kaplan', 'İnşaat Mühendisi', '<p>Bir s&uuml;redir ev almak i&ccedil;in araştırma yapıyorduk. Sekt&ouml;r&uuml;n i&ccedil;inden biri olarak Yıldızlar Gayrimenkul zaten biliyordum. G&ouml;r&uuml;şmeye gittiğimizde hem b&uuml;t&ccedil;emize uygun, hem de teknik olarak profesyonel bir &ccedil;alışma ortaya koymuşlardı. G&uuml;zel bir sunumla diğer detayları da g&ouml;rd&uuml;kten sonra ka&ccedil;ırılmayacak bir proje olduğuna karar verdik. Şahsen &ccedil;ok memnun kaldım, inşaat konusunda uzman biri olarak da herkese tavsiye ederim.</p>\r\n', 1, 0, '2022-05-17 16:38:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `completedprojects_images`
--

CREATE TABLE `completedprojects_images` (
  `ID` int(11) NOT NULL,
  `completedprojects_ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `completedprojects_images`
--

INSERT INTO `completedprojects_images` (`ID`, `completedprojects_ID`, `Image`, `Status`, `Rank`, `Create_Date`) VALUES
(18, 1, '6288bfcce50c0.jpg', 1, 0, '2022-05-21 12:32:45'),
(19, 1, '6288bfcd28ee6.jpg', 1, 0, '2022-05-21 12:32:45'),
(20, 1, '6288bfcd657d4.jpg', 1, 0, '2022-05-21 12:32:45'),
(21, 1, '6288bfcdabbbf.jpg', 1, 0, '2022-05-21 12:32:45'),
(22, 1, '6288bfcdf04f5.jpg', 1, 0, '2022-05-21 12:32:46'),
(23, 1, '6288bfce40125.jpg', 1, 0, '2022-05-21 12:32:46'),
(24, 1, '6288bfce779b1.jpg', 1, 0, '2022-05-21 12:32:46'),
(25, 1, '6288bfceb04bc.jpg', 1, 0, '2022-05-21 12:32:46'),
(26, 1, '6288bfcee8f95.jpg', 1, 0, '2022-05-21 12:32:47'),
(27, 1, '6288bfcf2afb7.jpg', 1, 0, '2022-05-21 12:32:47'),
(28, 1, '6288bfcf5edd0.jpg', 1, 0, '2022-05-21 12:32:47'),
(29, 1, '6288bfcf9157c.jpg', 1, 0, '2022-05-21 12:32:47'),
(30, 1, '6288bfcfca49e.jpg', 1, 0, '2022-05-21 12:32:48'),
(31, 1, '6288bfd00ce0b.jpg', 1, 0, '2022-05-21 12:32:48'),
(32, 1, '6288bfd03eb6d.jpg', 1, 0, '2022-05-21 12:32:48'),
(33, 1, '6288bfd07830c.jpg', 1, 0, '2022-05-21 12:32:48'),
(34, 1, '6288bfd0a875a.jpg', 1, 0, '2022-05-21 12:32:48'),
(35, 2, '6289019259582.jpg', 1, 0, '2022-05-21 17:13:22'),
(36, 2, '62890192c78a9.jpg', 1, 0, '2022-05-21 17:13:23'),
(37, 2, '628901933e4aa.jpg', 1, 0, '2022-05-21 17:13:23'),
(38, 2, '628901937bc71.jpg', 1, 0, '2022-05-21 17:13:23');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `completed_projects`
--

CREATE TABLE `completed_projects` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `completed_projects`
--

INSERT INTO `completed_projects` (`ID`, `Image`, `Name`, `Status`, `Rank`, `Create_Date`) VALUES
(1, '6288becd842cd.jpg', 'Yıldız Life Residence ', 1, 0, '2022-05-21 12:28:29'),
(2, '6289018ab98fc.jpg', 'Yıldız Plaza', 1, 0, '2022-05-21 17:13:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `counter`
--

CREATE TABLE `counter` (
  `ID` int(11) NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Count` varchar(4) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `counter`
--

INSERT INTO `counter` (`ID`, `Icon`, `Title`, `Count`, `Status`, `Rank`, `Create_Date`) VALUES
(11, 'far fa-clock', 'TECRÜBE EDİLEN YILLAR', '22', 1, 0, '2022-05-17 14:49:49'),
(12, 'fa fa-smile', 'MUTLU DAİRE SAHİBİ', '2875', 1, 2, '2022-05-17 15:41:46'),
(13, 'fas fa-shield-alt', 'DUYULAN GÜVEN', '100', 1, 3, '2022-05-17 15:42:28'),
(14, 'far fa-building', 'TAMAMLANAN PROJE', '128', 1, 1, '2022-05-17 15:58:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `faq`
--

INSERT INTO `faq` (`ID`, `Title`, `Icon`, `Content`, `Rank`, `Status`, `Create_Date`) VALUES
(3, 'Neden Biz?', 'fa fa-question-circle', '<p>İnşaat sekt&ouml;r&uuml;ne adım attığımız ilk g&uuml;nden bug&uuml;ne kadar değişmeyen prensiplerimiz ve yenilik&ccedil;i anlayışımız ile &ccedil;alışmaya devam ediyoruz. Projelerimizi istenen zamanda tamamlayabilmek ve gelişen teknolojik olanakları her daim g&ouml;z &ouml;n&uuml;nde bulundurabilmek bizi rakiplerimizden ayıran en &ouml;nemli &ouml;zelliğimizdir.</p>\r\n', 0, 1, '2022-04-11 13:23:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `goingprojects_images`
--

CREATE TABLE `goingprojects_images` (
  `ID` int(11) NOT NULL,
  `goingprojects_ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `goingprojects_images`
--

INSERT INTO `goingprojects_images` (`ID`, `goingprojects_ID`, `Image`, `Status`, `Rank`, `Create_Date`) VALUES
(17, 1, '6288b6d37ed67.jpg', 0, 1, '2022-05-21 11:54:27'),
(18, 1, '6288b6d3bf47f.jpg', 1, 3, '2022-05-21 11:54:28'),
(19, 1, '6288b6d4179d5.jpg', 1, 0, '2022-05-21 11:54:28'),
(20, 1, '6288b6d4643c4.jpg', 1, 1, '2022-05-21 11:54:28'),
(21, 1, '6288b6d4a37ea.jpg', 1, 2, '2022-05-21 11:54:28'),
(22, 1, '6288b6d4ed1a0.jpg', 1, 4, '2022-05-21 11:54:29'),
(23, 1, '6288b6d545dd8.jpg', 1, 0, '2022-05-21 11:54:29'),
(24, 1, '6288b6d5898df.jpg', 1, 0, '2022-05-21 11:54:29'),
(25, 1, '6288b6d5d1ddb.jpg', 1, 4, '2022-05-21 11:54:30'),
(26, 1, '6288b6d62788e.jpg', 1, 3, '2022-05-21 11:54:30'),
(27, 1, '6288b6d670c44.jpg', 1, 2, '2022-05-21 11:54:30'),
(28, 1, '6288b6d6b534e.jpg', 1, 4, '2022-05-21 11:54:31'),
(29, 1, '6288b6d7097fd.jpg', 1, 3, '2022-05-21 11:54:31'),
(30, 1, '6288b6d74c94b.jpg', 1, 2, '2022-05-21 11:54:31'),
(31, 1, '6288b6d796bee.jpg', 1, 0, '2022-05-21 11:54:31'),
(32, 1, '6288b6d7df5eb.jpg', 1, 1, '2022-05-21 11:54:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `going_projects`
--

CREATE TABLE `going_projects` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `going_projects`
--

INSERT INTO `going_projects` (`ID`, `Image`, `Name`, `Status`, `Rank`, `Create_Date`) VALUES
(1, '6288b43d0b748.jpg', 'Yıldız Life Premium', 1, 0, '2022-05-21 11:43:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `main_menu`
--

CREATE TABLE `main_menu` (
  `ID` int(11) NOT NULL,
  `SupID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `main_menu`
--

INSERT INTO `main_menu` (`ID`, `SupID`, `Name`, `Link`, `Status`, `Rank`, `Create_Date`) VALUES
(1, 0, 'Anasayfa', '', 1, 1, '2022-05-27 10:39:15'),
(2, 0, 'Kurumsal', 'javascript:void(0)', 1, 2, '2022-05-27 10:39:15'),
(3, 0, 'Hizmetlerimiz', 'services', 1, 3, '2022-05-27 10:42:19'),
(4, 0, 'Projelerimiz', 'javascript:void(0)', 1, 4, '2022-05-27 10:43:05'),
(5, 0, 'Haberler', 'news', 1, 5, '2022-05-27 10:43:05'),
(6, 0, 'Multimedya', 'javascript:void(0)', 1, 6, '2022-05-27 10:44:19'),
(7, 0, 'Sıkça Sorulan Sorular', 'faq', 1, 7, '2022-05-27 10:44:19'),
(8, 0, 'İletişim', 'contact', 1, 8, '2022-05-27 10:45:49'),
(9, 2, 'Hakkımızda', 'about_us', 1, 1, '2022-05-27 11:08:03'),
(10, 2, 'Vizyonumuz', 'vision', 1, 2, '2022-05-27 11:08:03'),
(11, 2, 'Misyonumuz', 'mission', 1, 3, '2022-05-27 11:11:32'),
(12, 4, 'Devam Eden Projelerimiz', 'going_projects', 1, 1, '2022-05-27 11:16:56'),
(13, 4, 'Tamamlanan Projelerimiz', 'completed_projects', 1, 2, '2022-05-27 11:16:56'),
(14, 6, 'Albümler', 'albums', 1, 1, '2022-05-27 11:18:16'),
(15, 6, 'Videolar', 'videos', 1, 2, '2022-05-27 11:18:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Subject` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Reply_Status` tinyint(4) NOT NULL DEFAULT 0,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`ID`, `Name`, `Email`, `Phone`, `Subject`, `Content`, `Reply_Status`, `Rank`, `Create_Date`) VALUES
(3, 'Orhan Pamuk', 'osmannnnyldz78787878@gmail.com', '654321123456', 'Eski Çağ', 'Lorem ipsum dolor sit amet, adipiscing elit. Donec elit erat, vestibulum ac luctus id, ultrices.', 1, 1, '2022-04-23 13:51:39'),
(4, 'Osman YILDIZ', 'musamusamusa7878@hotmail.com', '05301585544', 'Deneme Mesaj', 'Deneme yapıyoruz. Aldırmayın.', 0, 0, '2022-05-06 09:30:59'),
(5, '[removed]alert&#40;\"hacklendiniz.\"&#41;;[removed]', 'osmann_yldz7878@hotmail.com', '05301585544', 'adsdsadas', 'dsadasdasads', 0, 0, '2022-05-06 09:40:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mission`
--

CREATE TABLE `mission` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mission`
--

INSERT INTO `mission` (`ID`, `Image`, `Title`, `Content`) VALUES
(1, '6283eb748aa3a.jpeg', 'Misyonumuz', '<p>İnsana ve doğaya saygı felsefesini temel alarak bireylerin yaşam kalitesini ve refahını y&uuml;kseltmek, mimari ve teknolojideki en g&uuml;ncel gelişmeleri yakından takip edip uygulayarak hayatı kolaylaştıran tasarımlara imza atmak, yatırımcılar i&ccedil;in her zaman doğru ve g&uuml;venilir yatırım fırsatları oluşturmak ve sunduğumuz hizmetin her aşamasında koşulsuz m&uuml;şteri memnuniyetine ulaşmaktır.</p>\r\n\r\n<p>Memnuniyet odaklı iş anlayışımız, profesyonel ekiplerimiz, g&uuml;venli &ccedil;alışma sahalarımız, ekipmanlarımız ve kaliteden &ouml;d&uuml;n vermeyen &uuml;r&uuml;nlerimiz ile siz de Yıldızlar Gayrimenkul &amp; İnşaat&#39;ın ayrıcalıklarından yararlanabilirsiniz.</p>\r\n\r\n<p>Tekstil, konfeksiyon, beyaz eşya, mobilya gibi sekt&ouml;rlerde de elde ettiğimiz başarı ve geliştirdiğimiz iş prensipleri, inşaat sekt&ouml;r&uuml;ndeki en b&uuml;y&uuml;k referanslarımızdan biridir. Yaptıklarımız, yapacaklarımızın garantisidir.</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Seo_Tags` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`ID`, `Image`, `Title`, `Content`, `Seo_Tags`, `Status`, `Rank`, `Create_Date`) VALUES
(21, '6286405b8c16b.jpg', 'Yenilen Websitemizle Yayındayız', '<p>Yıldızlar Gayrimenkul &amp; İnşaat web sitesi <strong>www.yildizlargayrimenkul.com.tr</strong>&nbsp;artık yeni y&uuml;z&uuml; ile yayında!</p>\r\n\r\n<p>Kurumsal anlamda m&uuml;şterilerine daha iyi hizmet verebilmek adına, yeniliklerle dolu web sitemiz yayınlandı. T&uuml;m g&uuml;ncel kampanyaları buradan takip edebilir, firma hakkında haberlere ulaşabilirsiniz.&nbsp;Bir&ccedil;ok b&ouml;l&uuml;m&uuml; i&ccedil;in g&uuml;ncellemeleri tamamlanan yeni web sitemizin geliştirilmesine &ouml;n&uuml;m&uuml;zdeki g&uuml;nlerde de devam edilecek.</p>\r\n\r\n<p>Bu ge&ccedil;iş s&uuml;reci boyunca sitemizin kimi b&ouml;l&uuml;mlerine erişimde yaşanabilecek aksaklıklar konusunda, anlayışınız i&ccedil;in teşekk&uuml;r ederiz.</p>\r\n', 'yildizlargayrimenkul, yildizlifepremium, yildizliferesidance, karabuk', 1, 0, '2022-05-19 15:04:29'),
(22, '628644b415407.jpg', 'Hayallerinizde Ki Yuvanıza HOŞGELDİNİZ', '<p>Hayatın her y&ouml;n&uuml;n&uuml; t&uuml;m renkleriyle yaşamak i&ccedil;in başlangış noktası, insana huzur ve g&uuml;ven veren bir yerde yaşamaktır.&nbsp;Koşullar ne olursa olsun sonu&ccedil;landırdığımız projelerin başarısını belirleyen şeyin m&uuml;şteri memnuniyeti olduğuna inanıyoruz. Yıldızlar Gayrimenkul &amp; İnşaat olarak 2000 yılından bu yana y&uuml;zlerce projenin altından imzamız var. Bizi biz yapan, sizi memnun edebilmek ve hayallerinizi ger&ccedil;eğe d&ouml;n&uuml;şt&uuml;rebilmektir.</p>\r\n\r\n<p>Memnuniyet odaklı iş anlayışımız, profesyonel ekiplerimiz, g&uuml;venli &ccedil;alışma sahalarımız, ekipmanlarımız ve kaliteden &ouml;d&uuml;n vermeyen &uuml;r&uuml;nlerimiz ile siz de Yıldızlar Gayrimenkul &amp; İnşaat&#39;ın ayrıcalıklarından yararlanabilirsiniz.</p>\r\n', 'yidizlargayrimenkul, yidizlifepremium, premium, karabük, safranbolu', 1, 0, '2022-05-19 15:23:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `ID` int(11) NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`ID`, `Icon`, `Title`, `Content`, `Status`, `Rank`, `Create_Date`) VALUES
(5, 'fa fa-list', 'Neden Biz?', '<p>İnsana ve doğaya saygı felsefesini temel alarak bireylerin yaşam kalitesini ve refahını y&uuml;kseltmek, mimari ve teknolojideki en g&uuml;ncel gelişmeleri yakından takip edip uygulayarak hayatı kolaylaştıran tasarımlara imza atmak, yatırımcılar i&ccedil;in her zaman doğru ve g&uuml;venilir yatırım fırsatları oluşturmak ve sunduğumuz hizmetin her aşamasında koşulsuz m&uuml;şteri memnuniyetine ulaşmaktır.</p>\r\n\r\n<p>Memnuniyet odaklı iş anlayışımız, profesyonel ekiplerimiz, g&uuml;venli &ccedil;alışma sahalarımız, ekipmanlarımız ve kaliteden &ouml;d&uuml;n vermeyen &uuml;r&uuml;nlerimiz ile siz de Yıldızlar Gayrimenkul &amp; İnşaat&#39;ın ayrıcalıklarından yararlanabilirsiniz.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:-103px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 1, 0, '2022-04-28 22:58:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `popup`
--

CREATE TABLE `popup` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `popup`
--

INSERT INTO `popup` (`ID`, `Name`, `Image`) VALUES
(1, 'Yıldız Life Premium', '6287cfbd5c9b0.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`ID`, `Name`, `Status`, `Rank`, `Create_Date`) VALUES
(9, 'DÜĞÜN PAKETLERİ', 1, 0, '2022-04-28 12:22:38'),
(10, 'YEMEK ODASI TAKIMLARI', 1, 0, '2022-04-28 12:22:54'),
(11, 'Yıldız Mobilya', 1, 0, '2022-04-28 12:23:16'),
(12, 'DÜĞÜN PAKETLERİ', 1, 0, '2022-04-28 23:05:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`ID`, `Title`, `Icon`, `Content`, `Rank`, `Status`, `Create_Date`) VALUES
(15, 'EN İYİ KALİTE', 'fa fa-thumbs-up', '<p>Deneyimli ekip &ccedil;alışanlarımız, &uuml;st&uuml;n kalite malzemelerimiz ve pratik &ccedil;alışma stratejilerimiz ile daima en iyiyi hedefliyor, zor olanı başarıyoruz.</p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:121px; position:absolute; top:-6px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 0, 1, '2022-05-17 12:40:36'),
(16, 'PROJELERİMİZ', 'fas fa-cogs', '<p>Kusursuz hizmet anlayışımız ve uzun yıllara dayanan tecr&uuml;bemizle &ccedil;alışıyor t&uuml;m projelerinizi istenen zamanda ve istenen şekilde ger&ccedil;ekleştiriyoruz.</p>\r\n', 1, 1, '2022-05-17 12:45:03'),
(17, 'EN ÇOK TERCİH EDİLEN', 'fa fa-star', '<p>İnşaat sekt&ouml;r&uuml;nde kalite odaklı projelerimiz ve uzman ekiplerimiz sayesinde her zaman en fazla tercih edilen firma olmaya devam ediyoruz.</p>\r\n', 2, 1, '2022-05-17 12:46:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `Title` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `Description` text COLLATE utf8_turkish_ci NOT NULL,
  `Keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `Author` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Footer` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Adress` text COLLATE utf8_turkish_ci NOT NULL,
  `Map` text COLLATE utf8_turkish_ci NOT NULL,
  `Host` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `User_Mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `User_Password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Port` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Notification_Mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Logo` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `Favicon` varchar(1000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`ID`, `Title`, `Description`, `Keywords`, `Author`, `Footer`, `Phone`, `Mail`, `Adress`, `Map`, `Host`, `User_Mail`, `User_Password`, `Port`, `Notification_Mail`, `Logo`, `Favicon`) VALUES
(1, 'Yıldızlar Gayrimenkul & İnşaat - Karabük, Türkiye', 'Yıldızlar Gayrimenkul web sitesi.', 'yıldızlar gayrimenkul, yıldızlar karabük, gayrimenkul, emlak, ev satışı, gayrimenkul satışı, karabük ev, karabük gayrimenkul, karabük emlak, yildizlar emlak, yildizlar gayrimenkul', 'Osman YILDIZ', '© Copyright 2022. Tüm Hakları Saklıdır.', '(0532) 232 71 12', 'info@yildizlargayrimenkul.com.tr', '100. YIL MAH. 1003 NOLU CAD. NO:33-39, KARABÜK/MERKEZ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.1422283759034!2d32.66531521566675!3d41.21867091439974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354a562123bcf%3A0xa0284dbc2ef14e6!2sYILDIZ%20L%C4%B0FE%20RES%C4%B0DENCE!5e0!3m2!1str!2str!4v1652779563691!5m2!1str!2str\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'ssl://smtp.gmail.com', 'osmannyldz7878@gmail.com', 'Oy621207.', '465', 'osmannnnyldz78787878@gmail.com', '6283c38c2ec88.png', '6283c5f2447ff.ico');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `ID` int(11) NOT NULL,
  `Image` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Rank` int(11) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`ID`, `Image`, `Rank`, `Status`, `Create_Date`) VALUES
(11, '6286080db5a86.jpg', 0, 1, '2022-05-17 22:03:09'),
(13, '628621c56ba72.jpg', 3, 1, '2022-05-19 12:29:39'),
(14, '6286243123242.jpg', 1, 1, '2022-05-19 13:04:17'),
(15, '628627499ea42.jpg', 2, 1, '2022-05-19 13:17:29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socialmedia`
--

CREATE TABLE `socialmedia` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `socialmedia`
--

INSERT INTO `socialmedia` (`ID`, `Title`, `Icon`, `Link`, `Rank`, `Status`, `Create_Date`) VALUES
(1, 'Facebook', 'fab fa-facebook-f', 'https://www.facebook.com/gayrimenkul78', 1, 1, '2021-12-17 09:43:34'),
(2, 'Twitter', 'fab fa-instagram', 'https://www.instagram.com/gayrimenkul78_/', 0, 1, '2021-12-17 09:45:07'),
(3, 'Youtube', ' fab fa-youtube', 'https://www.youtube.com', 3, 0, '2021-12-17 09:45:29'),
(4, 'Pinterest', 'fab fa-pinterest', 'https://www.pinterest.com', 2, 0, '2021-12-17 10:07:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subscribers`
--

CREATE TABLE `subscribers` (
  `ID` int(11) NOT NULL,
  `Icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `subscribers`
--

INSERT INTO `subscribers` (`ID`, `Icon`, `Email`, `Status`, `Rank`, `Create_Date`) VALUES
(1, 'fa fa-user', 'osmann_yldz7878@hotmail.com', 1, 0, '2022-04-23 12:09:57'),
(2, 'fa fa-user', 'osmann_yldz787878@hotmail.com', 1, 1, '2022-04-23 12:09:57'),
(4, 'fa fa-user', 'mstfkrtll@yandex.com', 1, 0, '2022-04-29 15:18:12'),
(5, 'fa fa-user', 'jaguar@gmail.com', 1, 0, '2022-04-29 16:29:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teams`
--

CREATE TABLE `teams` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Degree` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `teams`
--

INSERT INTO `teams` (`ID`, `Image`, `Name`, `Degree`, `Status`, `Rank`, `Create_Date`) VALUES
(9, '626a60e178612.jpg', 'Osman YILDIZ', 'CEO', 1, 0, '2022-04-28 11:39:45'),
(10, '626a60f6b7a78.jpg', 'Ayşe YILDIZ', 'Çalışan', 1, 0, '2022-04-28 11:40:07'),
(11, '626a60f6b7a78.jpg', 'Fadime YILDIZ', 'Çalışan', 1, 0, '2022-04-28 11:40:07'),
(12, '626a60f6b7a78.jpg', 'Huriye YILDIZ', 'Çalışan', 1, 0, '2022-04-28 11:40:07'),
(13, '626a60f6b7a78.jpg', 'ASİYE YILDIZ', 'Çalışan', 1, 0, '2022-04-28 11:40:07'),
(14, '626a60f6b7a78.jpg', 'DURALİ YILDIZ', 'Çalışan', 1, 0, '2022-04-28 11:40:07');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videos`
--

CREATE TABLE `videos` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT 1,
  `Rank` int(11) NOT NULL DEFAULT 0,
  `Create_Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `videos`
--

INSERT INTO `videos` (`ID`, `Title`, `Link`, `Status`, `Rank`, `Create_Date`) VALUES
(2, 'Oğuzhan Koç - Aşkla Aynı Değil', 'C7NAkRwnpaM', 0, 2, '2022-04-22 00:33:02'),
(3, 'Murat Dalkılıç Ft. Oğuzhan Koç - Aşinayız', '8Z6Ral7DG10', 0, 1, '2022-04-22 00:58:15'),
(4, 'No Method - Let Me Go', 'lcOtPV352H8', 0, 0, '2022-04-22 00:58:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vision`
--

CREATE TABLE `vision` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Content` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `vision`
--

INSERT INTO `vision` (`ID`, `Image`, `Title`, `Content`) VALUES
(1, '6283eb5a1e497.jpeg', 'Vizyonumuz', '<p style=\"text-align:justify\">İnşaat sekt&ouml;r&uuml;ne adım attığımız ilk g&uuml;nden bug&uuml;ne kadar değişmeyen prensiplerimiz ve yenilik&ccedil;i anlayışımız ile &ccedil;alışmaya devam ediyoruz. Projelerimizi istenen zamanda tamamlayabilmek ve gelişen teknolojik olanakları her daim g&ouml;z &ouml;n&uuml;nde bulundurabilmek bizi rakiplerimizden ayıran en &ouml;nemli &ouml;zelliğimizdir.</p>\r\n\r\n<p style=\"text-align:justify\">Koşullar ne olursa olsun sonu&ccedil;landırdığımız projelerin başarısını belirleyen şeyin m&uuml;şteri memnuniyeti olduğuna inanıyoruz. Yıldızlar Gayrimenkul &amp; İnşaat olarak 2000 yılından bu yana y&uuml;zlerce projenin altından imzamız var. Bizi biz yapan, sizi memnun edebilmek ve hayallerinizi ger&ccedil;eğe d&ouml;n&uuml;şt&uuml;rebilmektir.</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `album_images`
--
ALTER TABLE `album_images`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `client_comments`
--
ALTER TABLE `client_comments`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `completedprojects_images`
--
ALTER TABLE `completedprojects_images`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `completed_projects`
--
ALTER TABLE `completed_projects`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `goingprojects_images`
--
ALTER TABLE `goingprojects_images`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `going_projects`
--
ALTER TABLE `going_projects`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_us`
--
ALTER TABLE `about_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `albums`
--
ALTER TABLE `albums`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `album_images`
--
ALTER TABLE `album_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `brands`
--
ALTER TABLE `brands`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `client_comments`
--
ALTER TABLE `client_comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `completedprojects_images`
--
ALTER TABLE `completedprojects_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `completed_projects`
--
ALTER TABLE `completed_projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `counter`
--
ALTER TABLE `counter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `goingprojects_images`
--
ALTER TABLE `goingprojects_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `going_projects`
--
ALTER TABLE `going_projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `mission`
--
ALTER TABLE `mission`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `popup`
--
ALTER TABLE `popup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `teams`
--
ALTER TABLE `teams`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `videos`
--
ALTER TABLE `videos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `vision`
--
ALTER TABLE `vision`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
