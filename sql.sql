-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: localhost:3306
-- 產生時間： 2017 年 01 月 11 日 07:08
-- 伺服器版本: 5.6.28
-- PHP 版本： 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `drink`
--

-- --------------------------------------------------------

--
-- 資料表結構 `drink_menu`
--

CREATE TABLE `drink_menu` (
  `mid` int(255) UNSIGNED NOT NULL,
  `menu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `pcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `drink_menu`
--

INSERT INTO `drink_menu` (`mid`, `menu`, `price`, `pcode`) VALUES
(1, '蘋果鮮紅 冰中杯', 65, 'LePhare_Zhongxiao'),
(2, '蘋果鮮紅 冰大杯', 85, 'LePhare_Zhongxiao'),
(3, '蘋果鮮紅 熱中杯', 65, 'LePhare_Zhongxiao'),
(4, '蘋果鮮綠 冰中杯', 65, 'LePhare_Zhongxiao'),
(5, '蘋果鮮綠 冰大杯', 85, 'LePhare_Zhongxiao'),
(6, '蘋果鮮綠 熱中杯', 65, 'LePhare_Zhongxiao'),
(7, '蘋果甘蔗 冰中杯', 70, 'LePhare_Zhongxiao'),
(8, '蘋果甘蔗 冰大杯', 90, 'LePhare_Zhongxiao'),
(9, '蘋果柳橙 冰中杯', 70, 'LePhare_Zhongxiao'),
(10, '蘋果柳橙 冰大杯', 90, 'LePhare_Zhongxiao'),
(11, '蘋果優利卡 冰中杯', 70, 'LePhare_Zhongxiao'),
(12, '蘋果優利卡 冰大杯', 90, 'LePhare_Zhongxiao'),
(13, '蘋果優利卡 熱中杯', 70, 'LePhare_Zhongxiao'),
(14, '蘋果那堤 冰中杯', 80, 'LePhare_Zhongxiao'),
(15, '蘋果那堤 冰大杯', 100, 'LePhare_Zhongxiao'),
(16, '蘋果鳳梨 冰中杯', 90, 'LePhare_Zhongxiao'),
(17, '蘋果鳳梨 冰大杯', 110, 'LePhare_Zhongxiao'),
(18, '蘋果草莓 冰中杯', 90, 'LePhare_Zhongxiao'),
(19, '蘋果草莓 冰大杯', 120, 'LePhare_Zhongxiao'),
(20, '蘋果舞凍 冰大杯', 75, 'LePhare_Zhongxiao'),
(21, '蘋果多多 冰中杯', 80, 'LePhare_Zhongxiao'),
(22, '甘蔗菁茶 冰大杯', 55, 'LePhare_Zhongxiao'),
(23, '甘蔗菁茶 熱中杯', 55, 'LePhare_Zhongxiao'),
(24, '甘蔗鮮綠 冰大杯', 55, 'LePhare_Zhongxiao'),
(25, '甘蔗鮮綠 熱中杯', 55, 'LePhare_Zhongxiao'),
(26, '甘蔗鮮紅 冰大杯', 55, 'LePhare_Zhongxiao'),
(27, '甘蔗鮮紅 熱中杯', 55, 'LePhare_Zhongxiao'),
(28, '柳橙優利卡 冰中杯', 50, 'LePhare_Zhongxiao'),
(29, '柳橙優利卡 冰大杯', 65, 'LePhare_Zhongxiao'),
(30, '芒果優利卡 冰中杯', 70, 'LePhare_Zhongxiao'),
(31, '芒果優利卡 冰大杯', 90, 'LePhare_Zhongxiao'),
(32, '芒果那提 冰中杯', 80, 'LePhare_Zhongxiao'),
(33, '芒果那堤 冰大杯', 100, 'LePhare_Zhongxiao'),
(34, '香蕉優利卡 冰中杯', 65, 'LePhare_Zhongxiao'),
(35, '香蕉優利卡 冰大杯', 90, 'LePhare_Zhongxiao'),
(36, '香蕉那堤 冰中杯', 70, 'LePhare_Zhongxiao'),
(37, '香蕉那堤 冰大杯', 95, 'LePhare_Zhongxiao'),
(38, '草莓那堤 冰中杯', 95, 'LePhare_Zhongxiao'),
(39, '草莓那堤 冰大杯', 120, 'LePhare_Zhongxiao'),
(40, '草莓多多 冰中杯', 95, 'LePhare_Zhongxiao'),
(41, '草莓多多 冰大杯', 120, 'LePhare_Zhongxiao'),
(42, '檸檬舞凍 冰中杯', 50, 'LePhare_Zhongxiao'),
(43, '檸檬舞凍 冰大杯', 65, 'LePhare_Zhongxiao'),
(44, '青桔舞凍 冰中杯', 50, 'LePhare_Zhongxiao'),
(45, '青桔舞凍 冰大杯', 65, 'LePhare_Zhongxiao'),
(46, '檸檬鮮紅 冰大杯', 55, 'LePhare_Zhongxiao'),
(47, '檸檬鮮紅 熱中杯', 55, 'LePhare_Zhongxiao'),
(48, '檸檬鮮綠 冰大杯', 55, 'LePhare_Zhongxiao'),
(49, '檸檬鮮綠 熱中杯', 55, 'LePhare_Zhongxiao'),
(50, '百香鮮紅 冰大杯', 50, 'LePhare_Zhongxiao'),
(51, '百香鮮紅 熱中杯', 50, 'LePhare_Zhongxiao'),
(52, '百香優利卡 冰大杯', 55, 'LePhare_Zhongxiao'),
(53, '百香優利卡 熱中杯', 55, 'LePhare_Zhongxiao'),
(54, '薑汁桂圓 熱中杯', 50, 'LePhare_Zhongxiao'),
(55, '薑汁蜂蜜 熱中杯', 50, 'LePhare_Zhongxiao'),
(56, '薑汁金桔 熱中杯', 50, 'LePhare_Zhongxiao'),
(57, '薑汁拿鐵 熱中杯', 60, 'LePhare_Zhongxiao'),
(58, '薑汁甘蔗 熱中杯', 55, 'LePhare_Zhongxiao'),
(59, '甘蔗優利卡 熱中杯', 55, 'LePhare_Zhongxiao'),
(60, '可可拿鐵 熱中杯', 60, 'LePhare_Zhongxiao'),
(61, '桂圓紅棗 熱中杯', 40, 'LePhare_Zhongxiao'),
(62, '黑咖啡 12oz 冰', 40, 'LePhare_Zhongxiao'),
(63, '黑咖啡 12oz 熱', 40, 'LePhare_Zhongxiao'),
(64, '黑咖啡 16oz 冰', 50, 'LePhare_Zhongxiao'),
(65, '黑咖啡 16oz 熱', 50, 'LePhare_Zhongxiao'),
(66, '拿鐵咖啡 12oz 冰', 55, 'LePhare_Zhongxiao'),
(67, '拿鐵咖啡 12oz 熱', 65, 'LePhare_Zhongxiao'),
(68, '拿鐵咖啡 16oz 冰', 65, 'LePhare_Zhongxiao'),
(69, '拿鐵咖啡 16oz 熱', 65, 'LePhare_Zhongxiao'),
(70, '特調咖啡 16oz 冰', 55, 'LePhare_Zhongxiao'),
(71, '特調咖啡 16oz 熱', 55, 'LePhare_Zhongxiao'),
(72, '摩卡咖啡 12oz 冰', 65, 'LePhare_Zhongxiao'),
(73, '摩卡咖啡 12oz 熱', 65, 'LePhare_Zhongxiao'),
(74, '摩卡咖啡 16oz 冰', 75, 'LePhare_Zhongxiao'),
(75, '摩卡咖啡 16oz 熱', 75, 'LePhare_Zhongxiao'),
(76, '玫瑰鹽咖啡 12oz 冰', 60, 'LePhare_Zhongxiao'),
(77, '玫瑰鹽咖啡 12oz 熱', 60, 'LePhare_Zhongxiao'),
(78, '玫瑰鹽咖啡 16oz 冰', 70, 'LePhare_Zhongxiao'),
(79, '玫瑰鹽咖啡 16oz 熱', 70, 'LePhare_Zhongxiao'),
(80, '卡布奇諾 16oz 熱', 70, 'LePhare_Zhongxiao'),
(81, '抹茶咖啡 16oz 熱', 70, 'LePhare_Zhongxiao'),
(82, '冰鑽咖啡那堤 16oz 冰', 70, 'LePhare_Zhongxiao'),
(83, '冰鑽咖啡那堤 16oz 熱', 70, 'LePhare_Zhongxiao'),
(84, '台灣蜜香紅茶 冰大杯', 30, 'LePhare_Zhongxiao'),
(85, '台灣蜜香紅茶 熱中杯', 30, 'LePhare_Zhongxiao'),
(86, '茉莉綠茶 冰大杯', 30, 'LePhare_Zhongxiao'),
(87, '茉莉綠茶 熱中杯', 30, 'LePhare_Zhongxiao'),
(88, '南投菁茶 冰大杯', 35, 'LePhare_Zhongxiao'),
(89, '南投菁茶 熱中杯', 35, 'LePhare_Zhongxiao'),
(90, '蜜香紅奶茶 冰大杯', 35, 'LePhare_Zhongxiao'),
(91, '蜜香紅奶茶 熱中杯', 35, 'LePhare_Zhongxiao'),
(92, '茉莉綠奶茶 冰大杯', 35, 'LePhare_Zhongxiao'),
(93, '茉莉綠奶茶 熱中杯', 35, 'LePhare_Zhongxiao'),
(94, '珍珠奶茶 冰大杯', 40, 'LePhare_Zhongxiao'),
(95, '珍珠奶茶 熱中杯', 40, 'LePhare_Zhongxiao'),
(96, '珍珠奶綠 冰大杯', 40, 'LePhare_Zhongxiao'),
(97, '珍珠奶綠 熱中杯', 40, 'LePhare_Zhongxiao'),
(98, '珍珠紅茶拿鐵 冰中杯', 50, 'LePhare_Zhongxiao'),
(99, '珍珠紅茶拿鐵 冰大杯', 60, 'LePhare_Zhongxiao'),
(100, '珍珠紅茶拿鐵 熱中杯', 50, 'LePhare_Zhongxiao'),
(101, '珍珠綠茶拿鐵 冰中杯', 50, 'LePhare_Zhongxiao'),
(102, '珍珠綠茶拿鐵 冰大杯', 60, 'LePhare_Zhongxiao'),
(103, '珍珠綠茶拿鐵 熱中杯', 50, 'LePhare_Zhongxiao'),
(104, '紅茶拿鐵 冰中杯', 50, 'LePhare_Zhongxiao'),
(105, '紅茶拿鐵 冰大杯', 60, 'LePhare_Zhongxiao'),
(106, '紅茶拿鐵 熱中杯', 50, 'LePhare_Zhongxiao'),
(107, '綠茶拿鐵 冰中杯', 50, 'LePhare_Zhongxiao'),
(108, '綠茶拿鐵 冰大杯', 60, 'LePhare_Zhongxiao'),
(109, '綠茶拿鐵 熱中杯', 50, 'LePhare_Zhongxiao'),
(110, '抹茶奶茶 冰大杯', 40, 'LePhare_Zhongxiao'),
(111, '綠茶拿鐵奶茶 熱中杯', 40, 'LePhare_Zhongxiao'),
(112, '抹茶拿鐵 冰中杯', 50, 'LePhare_Zhongxiao'),
(113, '抹茶拿鐵 熱中杯', 50, 'LePhare_Zhongxiao'),
(114, '義豐冬瓜茶 冰大杯', 40, 'LePhare_Zhongxiao'),
(115, '義豐冬瓜茶 熱中杯', 40, 'LePhare_Zhongxiao'),
(116, '義豐冬瓜菁 冰大杯', 45, 'LePhare_Zhongxiao'),
(117, '義豐冬瓜菁 熱中杯', 45, 'LePhare_Zhongxiao'),
(118, '義豐冬瓜檸檬 冰大杯', 50, 'LePhare_Zhongxiao'),
(119, '義豐冬瓜檸檬 熱中杯', 50, 'LePhare_Zhongxiao'),
(120, '蘆薈綠茶 冰大杯', 40, 'LePhare_Zhongxiao'),
(121, '蘆薈菁茶 冰大杯', 45, 'LePhare_Zhongxiao'),
(122, '蘆薈蜜 冰大杯', 45, 'LePhare_Zhongxiao'),
(123, '珍蘆蜜 冰大杯', 50, 'LePhare_Zhongxiao'),
(124, '蜂蜜綠 冰大杯', 45, 'LePhare_Zhongxiao'),
(125, '養樂多綠茶 冰大杯', 50, 'LePhare_Zhongxiao'),
(126, '韓國蜂蜜柚子蜜 冰大杯', 40, 'LePhare_Zhongxiao'),
(127, '韓國蜂蜜柚子蜜 熱中杯', 40, 'LePhare_Zhongxiao'),
(128, '韓國蜂蜜柚子綠 冰大杯', 40, 'LePhare_Zhongxiao'),
(129, '韓國蜂蜜柚子綠 熱中杯', 40, 'LePhare_Zhongxiao'),
(130, '黑糖薑茶 冰小杯', 50, 'dayungs_Zhongxiao'),
(131, '黑糖薑茶 熱小杯', 55, 'dayungs_Zhongxiao'),
(132, '黑糖薑奶 冰小杯', 55, 'dayungs_Zhongxiao'),
(133, '黑糖薑奶 熱小杯', 55, 'dayungs_Zhongxiao'),
(134, '紫米紅豆 冰小杯', 55, 'dayungs_Zhongxiao'),
(135, '紫米紅豆 熱小杯', 55, 'dayungs_Zhongxiao'),
(136, '桂圓紅棗茶 冰大杯', 55, 'dayungs_Zhongxiao'),
(137, '桂圓紅棗茶 熱大杯', 55, 'dayungs_Zhongxiao'),
(138, '金時奶茶 冰大杯', 60, 'dayungs_Zhongxiao'),
(139, '金時奶茶 熱大杯', 60, 'dayungs_Zhongxiao'),
(140, '芋頭奶綠 冰小杯', 60, 'dayungs_Zhongxiao'),
(141, '芋頭奶綠 熱小杯', 60, 'dayungs_Zhongxiao'),
(142, '橘子紅茶 冰大杯', 60, 'dayungs_Zhongxiao'),
(143, '橘子紅茶 熱大杯', 60, 'dayungs_Zhongxiao'),
(144, '鮮搾柳橙綠 冰大杯', 60, 'dayungs_Zhongxiao'),
(145, '鮮搾柳橙綠 熱大杯', 60, 'dayungs_Zhongxiao'),
(146, '鮮搾柳橙綠 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(147, '鮮搾柳橙綠 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(148, '芭樂梅 冰大杯', 60, 'dayungs_Zhongxiao'),
(149, '芭樂梅 熱大杯', 60, 'dayungs_Zhongxiao'),
(150, '芭樂梅 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(151, '芭樂梅 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(152, '柚香百香 冰小杯', 60, 'dayungs_Zhongxiao'),
(153, '柚香百香 熱小杯', 60, 'dayungs_Zhongxiao'),
(154, '柚香百香 冰大杯', 70, 'dayungs_Zhongxiao'),
(155, '柚香百香 熱大杯', 70, 'dayungs_Zhongxiao'),
(156, '翡翠檸檬 冰大杯', 55, 'dayungs_Zhongxiao'),
(157, '翡翠檸檬 熱大杯', 55, 'dayungs_Zhongxiao'),
(158, '翡翠檸檬 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(159, '翡翠檸檬 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(160, '新鮮水果茶 冰大杯', 65, 'dayungs_Zhongxiao'),
(161, '新鮮水果茶 熱大杯', 65, 'dayungs_Zhongxiao'),
(162, '柚美粒 冰大杯', 60, 'dayungs_Zhongxiao'),
(163, '柚美粒 熱大杯', 60, 'dayungs_Zhongxiao'),
(164, '柚美粒 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(165, '柚美粒 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(166, '金美粒 冰大杯', 60, 'dayungs_Zhongxiao'),
(167, '金美粒 熱大杯', 60, 'dayungs_Zhongxiao'),
(168, '金美粒 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(169, '金美粒 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(170, '鮮搾葡萄柚綠 冰大杯', 60, 'dayungs_Zhongxiao'),
(171, '鮮搾葡萄柚綠 熱大杯', 60, 'dayungs_Zhongxiao'),
(172, '鮮搾葡萄柚綠 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(173, '鮮搾葡萄柚綠 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(174, '鮮百香果綠 冰大杯', 55, 'dayungs_Zhongxiao'),
(175, '鮮百香果綠 熱大杯', 55, 'dayungs_Zhongxiao'),
(176, '鮮百香果綠 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(177, '鮮百香果綠 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(178, '鮮百香果汁 冰大杯', 55, 'dayungs_Zhongxiao'),
(179, '鮮百香果汁 熱大杯', 55, 'dayungs_Zhongxiao'),
(180, '鮮百香果汁 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(181, '鮮百香果汁 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(182, '鮮搾檸檬青 冰大杯', 55, 'dayungs_Zhongxiao'),
(183, '鮮搾檸檬青 熱大杯', 55, 'dayungs_Zhongxiao'),
(184, '鮮搾檸檬青 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(185, '鮮搾檸檬青 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(186, '鮮搾檸檬汁 冰大杯', 55, 'dayungs_Zhongxiao'),
(187, '鮮搾檸檬汁 熱大杯', 55, 'dayungs_Zhongxiao'),
(188, '鮮搾檸檬汁 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(189, '鮮搾檸檬汁 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(190, '金桔檸檬 冰大杯', 55, 'dayungs_Zhongxiao'),
(191, '金桔檸檬 熱大杯', 55, 'dayungs_Zhongxiao'),
(192, '金桔檸檬 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(193, '金桔檸檬 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(194, '鮮桔綠 冰大杯', 55, 'dayungs_Zhongxiao'),
(195, '鮮桔綠 熱大杯', 55, 'dayungs_Zhongxiao'),
(196, '鮮桔綠 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(197, '鮮桔綠 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(198, '鮮桔茶 冰大杯', 55, 'dayungs_Zhongxiao'),
(199, '鮮桔茶 熱大杯', 55, 'dayungs_Zhongxiao'),
(200, '鮮桔茶 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(201, '鮮桔茶 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(202, '檸檬愛玉 冰大杯', 60, 'dayungs_Zhongxiao'),
(203, '檸檬愛玉 熱大杯', 60, 'dayungs_Zhongxiao'),
(204, '檸檬愛玉 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(205, '檸檬愛玉 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(206, '百香愛玉 冰大杯', 60, 'dayungs_Zhongxiao'),
(207, '百香愛玉 熱大杯', 60, 'dayungs_Zhongxiao'),
(208, '百香愛玉 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(209, '百香愛玉 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(210, '蔓越莓冰醋 冰大杯', 50, 'dayungs_Zhongxiao'),
(211, '蔓越莓冰醋 熱大杯', 50, 'dayungs_Zhongxiao'),
(212, '蔓越莓冰醋 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(213, '蔓越莓冰醋 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(214, '蘋果醋冰茶 冰大杯', 50, 'dayungs_Zhongxiao'),
(215, '蘋果醋冰茶 熱大杯', 50, 'dayungs_Zhongxiao'),
(216, '蘋果醋冰茶 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(217, '蘋果醋冰茶 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(218, '金桔粒脆纖果 冰大杯', 60, 'dayungs_Zhongxiao'),
(219, '金桔粒脆纖果 熱大杯', 60, 'dayungs_Zhongxiao'),
(220, '金桔粒脆纖果 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(221, '金桔粒脆纖果 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(222, '蔓美粒 冰大杯', 60, 'dayungs_Zhongxiao'),
(223, '蔓美粒 熱大杯', 60, 'dayungs_Zhongxiao'),
(224, '蔓美粒 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(225, '蔓美粒 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(226, '蜜仙草 冰大杯', 55, 'dayungs_Zhongxiao'),
(227, '蜜仙草 熱大杯', 55, 'dayungs_Zhongxiao'),
(228, '蜜仙草 冰分享瓶', 90, 'dayungs_Zhongxiao'),
(229, '蜜仙草 熱分享瓶', 90, 'dayungs_Zhongxiao'),
(230, '甜檸脆纖果 冰大杯', 50, 'dayungs_Zhongxiao'),
(231, '甜檸脆纖果 熱大杯', 50, 'dayungs_Zhongxiao'),
(232, '甜檸脆纖果 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(233, '甜檸脆纖果 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(234, '冬瓜觀音 冰大杯', 45, 'dayungs_Zhongxiao'),
(235, '冬瓜觀音 熱大杯', 45, 'dayungs_Zhongxiao'),
(236, '冬瓜觀音 冰分享瓶', 75, 'dayungs_Zhongxiao'),
(237, '冬瓜觀音 熱分享瓶', 75, 'dayungs_Zhongxiao'),
(238, '冬瓜檸檬 冰大杯', 45, 'dayungs_Zhongxiao'),
(239, '冬瓜檸檬 熱大杯', 45, 'dayungs_Zhongxiao'),
(240, '冬瓜檸檬 冰分享瓶', 75, 'dayungs_Zhongxiao'),
(241, '冬瓜檸檬 熱分享瓶', 75, 'dayungs_Zhongxiao'),
(242, '古早位冬瓜茶 冰大杯', 35, 'dayungs_Zhongxiao'),
(243, '古早位冬瓜茶 熱大杯', 35, 'dayungs_Zhongxiao'),
(244, '古早位冬瓜茶 冰分享瓶', 60, 'dayungs_Zhongxiao'),
(245, '古早位冬瓜茶 熱分享瓶', 60, 'dayungs_Zhongxiao'),
(246, '養樂多綠茶 冰大杯', 50, 'dayungs_Zhongxiao'),
(247, '養樂多綠茶 熱大杯', 50, 'dayungs_Zhongxiao'),
(248, '養樂多綠茶 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(249, '養樂多綠茶 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(250, '仙草干茶 冰大杯', 35, 'dayungs_Zhongxiao'),
(251, '仙草干茶 熱大杯', 35, 'dayungs_Zhongxiao'),
(252, '仙草干茶 冰分享瓶', 60, 'dayungs_Zhongxiao'),
(253, '仙草干茶 熱分享瓶', 60, 'dayungs_Zhongxiao'),
(254, '冰淇淋紅茶 冰大杯', 55, 'dayungs_Zhongxiao'),
(255, '冰淇淋紅茶 熱大杯', 55, 'dayungs_Zhongxiao'),
(256, '百香多輕飲 冰大杯', 50, 'dayungs_Zhongxiao'),
(257, '百香多輕飲 熱大杯', 50, 'dayungs_Zhongxiao'),
(258, '百香多輕飲 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(259, '百香多輕飲 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(260, '柚香多輕飲 冰大杯', 50, 'dayungs_Zhongxiao'),
(261, '柚香多輕飲 熱大杯', 50, 'dayungs_Zhongxiao'),
(262, '柚香多輕飲 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(263, '柚香多輕飲 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(264, '檸檬多輕飲 冰大杯', 50, 'dayungs_Zhongxiao'),
(265, '檸檬多輕飲 熱大杯', 50, 'dayungs_Zhongxiao'),
(266, '檸檬多輕飲 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(267, '檸檬多輕飲 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(268, '百香果舒活 冰大杯', 35, 'dayungs_Zhongxiao'),
(269, '百香果舒活 熱大杯', 35, 'dayungs_Zhongxiao'),
(270, '百香果舒活 冰分享瓶', 60, 'dayungs_Zhongxiao'),
(271, '百香果舒活 熱分享瓶', 60, 'dayungs_Zhongxiao'),
(272, '葡萄柚舒活 冰大杯', 35, 'dayungs_Zhongxiao'),
(273, '葡萄柚舒活 熱大杯', 35, 'dayungs_Zhongxiao'),
(274, '葡萄柚舒活 冰分享瓶', 60, 'dayungs_Zhongxiao'),
(275, '葡萄柚舒活 熱分享瓶', 60, 'dayungs_Zhongxiao'),
(276, '纖活綠茶 冰大杯', 30, 'dayungs_Zhongxiao'),
(277, '纖活綠茶 熱大杯', 30, 'dayungs_Zhongxiao'),
(278, '纖活綠茶 冰分享瓶', 55, 'dayungs_Zhongxiao'),
(279, '纖活綠茶 熱分享瓶', 55, 'dayungs_Zhongxiao'),
(280, '阿薩姆紅茶 冰大杯', 30, 'dayungs_Zhongxiao'),
(281, '阿薩姆紅茶 熱大杯', 30, 'dayungs_Zhongxiao'),
(282, '阿薩姆紅茶 冰分享瓶', 55, 'dayungs_Zhongxiao'),
(283, '阿薩姆紅茶 熱分享瓶', 55, 'dayungs_Zhongxiao'),
(284, '文山青茶 冰大杯', 30, 'dayungs_Zhongxiao'),
(285, '文山青茶 熱大杯', 30, 'dayungs_Zhongxiao'),
(286, '文山青茶 冰分享瓶', 55, 'dayungs_Zhongxiao'),
(287, '文山青茶 熱分享瓶', 55, 'dayungs_Zhongxiao'),
(288, '美祿 冰大杯', 60, 'dayungs_Zhongxiao'),
(289, '美祿 熱大杯', 60, 'dayungs_Zhongxiao'),
(290, '奶茶 冰小杯', 35, 'dayungs_Zhongxiao'),
(291, '奶茶 熱小杯', 35, 'dayungs_Zhongxiao'),
(292, '奶茶 冰大杯', 45, 'dayungs_Zhongxiao'),
(293, '奶茶 熱大杯', 45, 'dayungs_Zhongxiao'),
(294, '奶茶 冰分享瓶', 75, 'dayungs_Zhongxiao'),
(295, '奶茶 熱分享瓶', 75, 'dayungs_Zhongxiao'),
(296, '纖活奶綠 冰小杯', 35, 'dayungs_Zhongxiao'),
(297, '纖活奶綠 熱小杯', 35, 'dayungs_Zhongxiao'),
(298, '纖活奶綠 冰大杯', 45, 'dayungs_Zhongxiao'),
(299, '纖活奶綠 熱大杯', 45, 'dayungs_Zhongxiao'),
(300, '纖活奶綠 冰分享瓶', 75, 'dayungs_Zhongxiao'),
(301, '纖活奶綠 熱分享瓶', 75, 'dayungs_Zhongxiao'),
(302, '珍珠奶茶 冰小杯', 35, 'dayungs_Zhongxiao'),
(303, '珍珠奶茶 熱小杯', 35, 'dayungs_Zhongxiao'),
(304, '珍珠奶茶 冰大杯', 45, 'dayungs_Zhongxiao'),
(305, '珍珠奶茶 熱大杯', 45, 'dayungs_Zhongxiao'),
(306, '珍珠奶茶 冰分享瓶', 75, 'dayungs_Zhongxiao'),
(307, '珍珠奶茶 熱分享瓶', 75, 'dayungs_Zhongxiao'),
(308, '仙草凍奶茶 冰小杯', 35, 'dayungs_Zhongxiao'),
(309, '仙草凍奶茶 熱小杯', 35, 'dayungs_Zhongxiao'),
(310, '仙草凍奶茶 冰大杯', 45, 'dayungs_Zhongxiao'),
(311, '仙草凍奶茶 熱大杯', 45, 'dayungs_Zhongxiao'),
(312, '仙草凍奶茶 冰分享瓶', 75, 'dayungs_Zhongxiao'),
(313, '仙草凍奶茶 熱分享瓶', 75, 'dayungs_Zhongxiao'),
(314, '鮮奶美祿 冰大杯', 70, 'dayungs_Zhongxiao'),
(315, '鮮奶美祿 熱大杯', 70, 'dayungs_Zhongxiao'),
(316, '觀音拿鐵 冰大杯', 60, 'dayungs_Zhongxiao'),
(317, '觀音拿鐵 熱大杯', 60, 'dayungs_Zhongxiao'),
(318, '觀音拿鐵 冰分享瓶', 95, 'dayungs_Zhongxiao'),
(319, '觀音拿鐵 熱分享瓶', 95, 'dayungs_Zhongxiao'),
(320, '鮮奶茶 冰小杯', 45, 'dayungs_Zhongxiao'),
(321, '鮮奶茶 熱小杯', 45, 'dayungs_Zhongxiao'),
(322, '鮮奶茶 冰大杯', 50, 'dayungs_Zhongxiao'),
(323, '鮮奶茶 熱大杯', 50, 'dayungs_Zhongxiao'),
(324, '鮮奶茶 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(325, '鮮奶茶 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(326, '鮮奶綠 冰小杯', 45, 'dayungs_Zhongxiao'),
(327, '鮮奶綠 熱小杯', 45, 'dayungs_Zhongxiao'),
(328, '鮮奶綠 冰大杯', 50, 'dayungs_Zhongxiao'),
(329, '鮮奶綠 熱大杯', 50, 'dayungs_Zhongxiao'),
(330, '鮮奶綠 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(331, '鮮奶綠 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(332, '鮮奶冬瓜 冰大杯', 50, 'dayungs_Zhongxiao'),
(333, '鮮奶冬瓜 熱大杯', 50, 'dayungs_Zhongxiao'),
(334, '鮮奶冬瓜 冰分享瓶', 80, 'dayungs_Zhongxiao'),
(335, '鮮奶冬瓜 熱分享瓶', 80, 'dayungs_Zhongxiao'),
(336, 'お茶阿里 冰大杯', 49, 'dayungs_Zhongxiao'),
(337, 'お茶阿里 熱大杯', 49, 'dayungs_Zhongxiao');

-- --------------------------------------------------------

--
-- 資料表結構 `goods`
--

CREATE TABLE `goods` (
  `gid` int(100) UNSIGNED NOT NULL,
  `goods` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `pcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `goods`
--

INSERT INTO `goods` (`gid`, `goods`, `price`, `pcode`) VALUES
(1, '無', 0, 'LePhare_Zhongxiao'),
(2, '加珍珠', 5, 'LePhare_Zhongxiao'),
(3, '檸檬Q凍', 10, 'LePhare_Zhongxiao'),
(4, '蘆薈', 10, 'LePhare_Zhongxiao'),
(5, '無', 0, 'dayungs_Zhongxiao');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(100) UNSIGNED NOT NULL,
  `user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `user`, `password`, `name`) VALUES
(1, 'story0629', 'banana555', '吳嘉皓');

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `menu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surger` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `goods` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price_menu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price_goods` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `scode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `order`
--

INSERT INTO `order` (`id`, `name`, `menu`, `surger`, `ice`, `goods`, `price_menu`, `price_goods`, `total`, `time`, `scode`, `pcode`) VALUES
(1, 'aaa', '蘋果鮮紅 冰大杯', '5分糖', '少冰', '檸檬Q凍', '85', '10', '95', '2017-01-11 00:00:00', 'lcc_Zhongxiao', 'LePhare_Zhongxiao'),
(2, 'bbbb', '甘蔗鮮綠 熱中杯', '3分糖', '少冰', '加珍珠', '55', '5', '60', '2017-01-11 00:10:00', 'lcc_Zhongxiao', 'LePhare_Zhongxiao'),
(3, 'cccc', '甘蔗鮮綠 冰大杯', '5分糖', '少冰', '檸檬Q凍', '55', '10', '65', '2017-01-11 00:20:00', 'lcc_Zhongxiao', 'LePhare_Zhongxiao');

-- --------------------------------------------------------

--
-- 資料表結構 `scholl`
--

CREATE TABLE `scholl` (
  `sid` int(100) UNSIGNED NOT NULL,
  `sname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `saddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scode` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `scholl`
--

INSERT INTO `scholl` (`sid`, `sname`, `saddress`, `scode`) VALUES
(1, '聯成電腦_忠孝分校', '台北市大安區忠孝東路四段178號4樓', 'lcc_Zhongxiao'),
(2, '聯成電腦_公館分校', '台北市中正區羅斯福路三段272號3F', 'lcc_Gongguan'),
(3, '聯成電腦_館前分校', '台北市中正區館前路2號5樓', 'lcc_Guanqian');

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE `shop` (
  `pid` int(100) UNSIGNED NOT NULL,
  `shop` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `scode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pcode` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `shop`
--

INSERT INTO `shop` (`pid`, `shop`, `tel`, `address`, `scode`, `pcode`) VALUES
(1, '樂法_統領店', '02-27115091', '台北市大安區忠孝東路四段205巷7弄1號', 'lcc_Zhongxiao', 'LePhare_Zhongxiao'),
(2, '50嵐_忠孝延吉店', '02-87729811', '台北市大安區延吉街72之4號', 'lcc_Zhongxiao', '50arasi_Zongxiao'),
(3, '大苑子_公館店', '02-23685310', '台北市中正區羅斯福路三段316巷7-2號', 'lcc_Gongguan', 'dayungs_Gongguan\r\n'),
(4, '50嵐_台大店', '02-23632296', '台北市大安區羅斯福路三段345號', 'lcc_Gongguan', '50arasi_Gongguan\r\n'),
(5, '大苑子_通化店', '02-27372080', '台北市大安區通化街109號', 'lcc_Zhongxiao', 'dayungs_Zhongxiao'),
(6, '迷客夏_南陽店', '02-23119011', '台北市中正區南陽街15-5號', 'lcc_Guanqian', 'milkshop_Guanqian');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `drink_menu`
--
ALTER TABLE `drink_menu`
  ADD PRIMARY KEY (`mid`);

--
-- 資料表索引 `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`gid`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `scholl`
--
ALTER TABLE `scholl`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`pid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `drink_menu`
--
ALTER TABLE `drink_menu`
  MODIFY `mid` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;
--
-- 使用資料表 AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `gid` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `order`
--
ALTER TABLE `order`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `scholl`
--
ALTER TABLE `scholl`
  MODIFY `sid` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `shop`
--
ALTER TABLE `shop`
  MODIFY `pid` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;