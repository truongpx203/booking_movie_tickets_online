-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 16, 2024 lúc 06:57 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_fpoly_2023`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `do_an`
--

CREATE TABLE `do_an` (
  `id_do_an` int(11) NOT NULL,
  `ten_do_an` text NOT NULL,
  `gia` int(11) NOT NULL,
  `img` varchar(225) NOT NULL,
  `mo_ta` text NOT NULL,
  `so_luong` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `do_an`
--

INSERT INTO `do_an` (`id_do_an`, `ten_do_an`, `gia`, `img`, `mo_ta`, `so_luong`) VALUES
(1, 'Proper Cinema', 50000, 'doan6.jpg\r\n', 'Mix 4 vị phiên bản limitted', 0),
(2, 'Combo bỏng&coca', 100000, 'doan1.jpg', 'kích thước bỏng nước tăng 25% giá không đổi', 0),
(3, 'combo 2 nước 1 bỏng', 120000, 'doan2.jpg', 'giảm 40% khi mua combo 2 nước 1 bỏng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `id_ghe` int(50) NOT NULL,
  `ten_ghe` varchar(225) NOT NULL,
  `trang_thai` text NOT NULL,
  `gia` int(255) NOT NULL,
  `loai_ghe` text NOT NULL,
  `id_phong_chieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`id_ghe`, `ten_ghe`, `trang_thai`, `gia`, `loai_ghe`, `id_phong_chieu`) VALUES
(3, 'A1', '1', 100000, '', 1),
(4, 'A2', '1', 100000, '', 1),
(8, 'A3', '1', 100000, '', 1),
(9, 'A4', '1', 100000, '', 1),
(10, 'A5', '1', 100000, '', 1),
(11, 'A6', '1', 100000, '', 1),
(12, 'A7', '0', 100000, '', 1),
(13, 'A8', '0', 100000, '', 1),
(18, 'A9', '1', 100000, '', 1),
(19, 'A10', '1', 100000, '', 1),
(20, 'A11', '1', 100000, '', 1),
(21, 'A12', '1', 100000, '', 1),
(22, 'B1', '0', 100000, '', 1),
(23, 'B2', '0', 100000, '', 1),
(24, 'B3', '1', 100000, '', 1),
(25, 'B4', '1', 100000, '', 1),
(26, 'B5', '1', 100000, '', 1),
(27, 'B6', '1', 100000, '', 1),
(28, 'B7', '0', 100000, '', 1),
(29, 'B8', '0', 100000, '', 1),
(30, 'B9', '0', 100000, '', 1),
(31, 'B10', '0', 100000, '', 1),
(32, 'B11', '1', 100000, '', 1),
(34, 'C1', '0', 100000, '', 1),
(35, 'B12', '0', 100000, '', 1),
(36, 'C3', '1', 100000, '', 1),
(37, 'C4', '1', 100000, '', 1),
(38, 'C5', '1', 100000, '', 1),
(39, 'C6', '0', 100000, '', 1),
(40, 'C7', '0', 100000, '', 1),
(41, 'C8', '0', 100000, '', 1),
(42, 'C9', '1', 100000, '', 1),
(43, 'C10', '1', 100000, '', 1),
(44, 'C11', '0', 100000, '', 1),
(45, 'C12', '0', 100000, '', 1),
(46, 'D1', '0', 100000, '', 1),
(47, 'D2', '0', 100000, '', 1),
(48, 'D3', '0', 100000, '', 1),
(49, 'D4', '1', 100000, '', 1),
(50, 'D5', '1', 100000, '', 1),
(51, 'D6', '1', 100000, '', 1),
(52, 'D7', '0', 100000, '', 1),
(53, 'D8', '0', 100000, '', 1),
(54, 'D9', '1', 100000, '', 1),
(55, 'D10', '1', 100000, '', 1),
(56, 'D11', '0', 100000, '', 1),
(57, 'D12', '0', 100000, '', 1),
(58, 'E1', '0', 100000, '', 1),
(59, 'E2', '1', 100000, '', 1),
(60, 'E3', '0', 100000, '', 1),
(61, 'E4', '1', 100000, '', 1),
(62, 'E5', '0', 100000, '', 1),
(63, 'E6', '1', 100000, '', 1),
(64, 'E7', '1', 100000, '', 1),
(65, 'E8', '1', 100000, '', 1),
(66, 'E9', '0', 100000, '', 1),
(67, 'E10', '0', 100000, '', 1),
(68, 'E11', '0', 100000, '', 1),
(69, 'E12', '1', 100000, '', 1),
(70, 'F1', '0', 100000, '', 1),
(71, 'F2', '0', 100000, '', 1),
(72, 'F3', '0', 100000, '', 1),
(73, 'F4', '1', 100000, '', 1),
(74, 'F5', '1', 100000, '', 1),
(75, 'F6', '0', 100000, '', 1),
(76, 'F7', '0', 100000, '', 1),
(77, 'F8', '1', 100000, '', 1),
(78, 'F9', '0', 100000, '', 1),
(79, 'F10', '1', 100000, '', 1),
(80, 'F11', '1', 100000, '', 1),
(81, 'F12', '0', 100000, '', 1),
(82, 'G1', '0', 100000, '', 1),
(83, 'G2', '0', 100000, '', 1),
(84, 'G3', '0', 100000, '', 1),
(85, 'G4', '0', 100000, '', 1),
(86, 'G5', '0', 100000, '', 1),
(87, 'G6', '0', 100000, '', 1),
(88, 'G7', '1', 100000, '', 1),
(89, 'G8', '1', 100000, '', 1),
(90, 'G9', '0', 100000, '', 1),
(91, 'G10', '0', 100000, '', 1),
(92, 'G11', '1', 100000, '', 1),
(93, 'G12', '1', 100000, '', 1),
(94, 'H1', '0', 100000, '', 1),
(95, 'H2', '0', 100000, '', 1),
(96, 'H3', '1', 100000, '', 1),
(97, 'H4', '1', 100000, '', 1),
(98, 'H5', '1', 100000, '', 1),
(99, 'H6', '1', 100000, '', 1),
(100, 'H7', '1', 100000, '', 1),
(101, 'H8', '1', 100000, '', 1),
(102, 'H9', '1', 100000, '', 1),
(103, 'H10', '1', 100000, '', 1),
(104, 'H11', '0', 100000, '', 1),
(105, 'H12', '0', 100000, '', 1),
(106, 'I1', '0', 100000, '', 1),
(107, 'I2', '0', 100000, '', 1),
(108, 'I3', '0', 100000, '', 1),
(109, 'I4', '0', 100000, '', 1),
(110, 'I5', '0', 100000, '', 1),
(111, 'I6', '0', 100000, '', 1),
(112, 'I7', '0', 100000, '', 1),
(113, 'I8', '0', 100000, '', 1),
(114, 'I9', '0', 100000, '', 1),
(115, 'I10', '1', 100000, '', 1),
(116, 'I11', '1', 100000, '', 1),
(117, 'I12', '1', 100000, '', 1),
(118, 'J1', '0', 100000, '', 1),
(119, 'J2', '0', 100000, '', 1),
(120, 'J3', '1', 100000, '', 1),
(121, 'J4', '0', 100000, '', 1),
(122, 'J5', '0', 100000, '', 1),
(123, 'J6', '0', 100000, '', 1),
(124, 'J7', '0', 100000, '', 1),
(125, 'J8', '0', 100000, '', 1),
(126, 'J9', '0', 100000, '', 1),
(127, 'J10', '0', 100000, '', 1),
(128, 'J11', '1', 100000, '', 1),
(129, 'J12', '1', 100000, '', 1),
(130, 'A1', '1', 120000, '', 2),
(131, 'A2', '0', 120000, '', 2),
(132, 'A3', '0', 120000, '', 2),
(133, 'A4', '0', 120000, '', 2),
(134, 'A5', '1', 120000, '', 2),
(135, 'A6', '0', 120000, '', 2),
(136, 'A7', '1', 120000, '', 2),
(137, 'A8', '0', 120000, '', 2),
(138, 'A9', '0', 120000, '', 2),
(139, 'A10', '0', 120000, '', 2),
(140, 'A11', '0', 120000, '', 2),
(141, 'A12', '0', 120000, '', 2),
(142, 'B1', '0', 120000, '', 2),
(143, 'B2', '0', 120000, '', 2),
(144, 'B3', '0', 120000, '', 2),
(145, 'B4', '0', 120000, '', 2),
(146, 'B5', '0', 120000, '', 2),
(147, 'B6', '0', 120000, '', 2),
(148, 'B7', '0', 120000, '', 2),
(149, 'B8', '0', 120000, '', 2),
(150, 'B9', '0', 120000, '', 2),
(151, 'B10', '0', 120000, '', 2),
(152, 'B11', '0', 120000, '', 2),
(153, 'B12', '0', 120000, '', 2),
(154, 'C1', '1', 120000, '', 2),
(155, 'C2', '0', 120000, '', 2),
(156, 'C3', '1', 120000, '', 2),
(157, 'C4', '1', 120000, '', 2),
(158, 'C5', '1', 120000, '', 2),
(159, 'C6', '1', 120000, '', 2),
(160, 'C7', '1', 120000, '', 2),
(161, 'C8', '1', 120000, '', 2),
(162, 'C9', '0', 120000, '', 2),
(163, 'C10', '0', 120000, '', 2),
(164, 'C11', '0', 120000, '', 2),
(165, 'C12', '1', 120000, '', 2),
(166, 'D1', '1', 120000, '', 2),
(167, 'D2', '1', 120000, '', 2),
(168, 'D3', '0', 120000, '', 2),
(169, 'D4', '0', 120000, '', 2),
(170, 'D5', '1', 120000, '', 2),
(171, 'D6', '0', 120000, '', 2),
(172, 'D7', '0', 120000, '', 2),
(173, 'D8', '0', 120000, '', 2),
(174, 'D9', '0', 120000, '', 2),
(175, 'D10', '1', 120000, '', 2),
(176, 'D11', '1', 120000, '', 2),
(177, 'D12', '0', 120000, '', 2),
(178, 'E1', '1', 120000, '', 2),
(179, 'E2', '0', 120000, '', 2),
(180, 'E3', '0', 120000, '', 2),
(181, 'E4', '1', 120000, '', 2),
(182, 'E5', '0', 120000, '', 2),
(183, 'E6', '1', 120000, '', 2),
(184, 'E7', '0', 120000, '', 2),
(185, 'E8', '0', 120000, '', 2),
(186, 'E9', '0', 120000, '', 2),
(187, 'E10', '0', 120000, '', 2),
(188, 'E11', '0', 120000, '', 2),
(189, 'E12', '1', 120000, '', 2),
(190, 'F1', '0', 120000, '', 2),
(191, 'F2', '1', 120000, '', 2),
(192, 'F3', '1', 120000, '', 2),
(193, 'F4', '1', 120000, '', 2),
(194, 'F5', '1', 120000, '', 2),
(195, 'F6', '0', 120000, '', 2),
(196, 'F7', '1', 120000, '', 2),
(197, 'F8', '0', 120000, '', 2),
(198, 'F9', '0', 120000, '', 2),
(199, 'F10', '0', 120000, '', 2),
(200, 'F11', '0', 120000, '', 2),
(201, 'F12', '1', 120000, '', 2),
(202, 'G1', '0', 120000, '', 2),
(203, 'G2', '0', 120000, '', 2),
(204, 'G3', '0', 120000, '', 2),
(205, 'G4', '0', 120000, '', 2),
(206, 'G5', '0', 120000, '', 2),
(207, 'G6', '0', 120000, '', 2),
(208, 'G7', '0', 120000, '', 2),
(209, 'G8', '1', 120000, '', 2),
(210, 'G9', '1', 120000, '', 2),
(211, 'G10', '0', 120000, '', 2),
(212, 'G11', '0', 120000, '', 2),
(213, 'G12', '0', 120000, '', 2),
(214, 'H1', '1', 120000, '', 2),
(215, 'H2', '0', 120000, '', 2),
(216, 'H3', '0', 120000, '', 2),
(217, 'H4', '0', 120000, '', 2),
(218, 'H5', '0', 120000, '', 2),
(219, 'H6', '0', 120000, '', 2),
(220, 'H7', '1', 120000, '', 2),
(221, 'H8', '0', 120000, '', 2),
(222, 'H9', '1', 120000, '', 2),
(223, 'H10', '1', 120000, '', 2),
(224, 'H11', '1', 120000, '', 2),
(225, 'H12', '0', 120000, '', 2),
(226, 'I1', '1', 120000, '', 2),
(227, 'I2', '0', 120000, '', 2),
(228, 'I3', '0', 120000, '', 2),
(229, 'I4', '0', 120000, '', 2),
(230, 'I5', '0', 120000, '', 2),
(231, 'I6', '0', 120000, '', 2),
(232, 'I7', '0', 120000, '', 2),
(233, 'I8', '0', 120000, '', 2),
(234, 'I9', '0', 120000, '', 2),
(235, 'I10', '0', 120000, '', 2),
(236, 'I11', '0', 120000, '', 2),
(237, 'I12', '0', 120000, '', 2),
(238, 'J1', '1', 120000, '', 2),
(239, 'J2', '0', 120000, '', 2),
(240, 'J3', '0', 120000, '', 2),
(241, 'J4', '0', 120000, '', 2),
(242, 'J5', '0', 120000, '', 2),
(243, 'J6', '0', 120000, '', 2),
(244, 'J7', '0', 120000, '', 2),
(245, 'J8', '0', 120000, '', 2),
(246, 'J9', '0', 120000, '', 2),
(247, 'J10', '0', 120000, '', 2),
(248, 'J11', '0', 120000, '', 2),
(249, 'J12', '1', 120000, '', 2),
(251, 'B12', '1', 10000, '1', 1),
(252, 'A1', '1', 100000, '', 5),
(253, 'A2', '1', 100000, '', 5),
(254, 'A3', '0', 100000, '', 5),
(255, 'A4', '1', 100000, '', 5),
(256, 'A5', '1', 100000, '', 5),
(257, 'A6', '1', 100000, '', 5),
(258, 'A7', '0', 100000, '', 5),
(259, 'A8', '1', 100000, '', 5),
(260, 'A9', '1', 100000, '', 5),
(261, 'A10', '1', 100000, '', 5),
(262, 'A11', '0', 100000, '', 5),
(263, 'A12', '0', 100000, '', 5),
(264, 'B1', '0', 100000, '', 5),
(265, 'B2', '0', 100000, '', 5),
(266, 'B3', '0', 100000, '', 5),
(267, 'B4', '1', 100000, '', 5),
(268, 'B5', '1', 100000, '', 5),
(269, 'B6', '0', 100000, '', 5),
(270, 'B7', '1', 100000, '', 5),
(271, 'B8', '1', 100000, '', 5),
(272, 'B9', '0', 100000, '', 5),
(273, 'B10', '0', 100000, '', 5),
(274, 'B11', '0', 100000, '', 5),
(275, 'B12', '0', 100000, '', 5),
(276, 'C1', '1', 100000, '', 5),
(277, 'C2', '1', 100000, '', 5),
(278, 'C3', '1', 100000, '', 5),
(279, 'C4', '1', 100000, '', 5),
(280, 'C5', '0', 100000, '', 5),
(281, 'C6', '0', 100000, '', 5),
(282, 'C7', '1', 100000, '', 5),
(283, 'C8', '1', 100000, '', 5),
(284, 'C9', '0', 100000, '', 5),
(285, 'C10', '1', 100000, '', 5),
(286, 'C11', '0', 100000, '', 5),
(287, 'C12', '0', 100000, '', 5),
(288, 'D1', '0', 100000, '', 5),
(289, 'D2', '0', 100000, '', 5),
(290, 'D3', '0', 100000, '', 5),
(291, 'D4', '0', 100000, '', 5),
(292, 'D5', '1', 100000, '', 5),
(293, 'D6', '1', 100000, '', 5),
(294, 'D7', '1', 100000, '', 5),
(295, 'D8', '0', 100000, '', 5),
(296, 'D9', '0', 100000, '', 5),
(297, 'D10', '0', 100000, '', 5),
(298, 'D11', '1', 100000, '', 5),
(299, 'D12', '1', 100000, '', 5),
(300, 'E1', '1', 100000, '', 5),
(301, 'E2', '1', 100000, '', 5),
(302, 'E3', '0', 100000, '', 5),
(303, 'E4', '1', 100000, '', 5),
(304, 'E5', '1', 100000, '', 5),
(305, 'E6', '1', 100000, '', 5),
(306, 'E7', '0', 100000, '', 5),
(307, 'E8', '0', 100000, '', 5),
(308, 'E9', '0', 100000, '', 5),
(309, 'E10', '0', 100000, '', 5),
(310, 'E11', '1', 100000, '', 5),
(311, 'E12', '1', 100000, '', 5),
(312, 'F1', '0', 100000, '', 5),
(313, 'F2', '0', 100000, '', 5),
(314, 'F3', '0', 100000, '', 5),
(315, 'F4', '0', 100000, '', 5),
(316, 'F5', '0', 100000, '', 5),
(317, 'F6', '0', 100000, '', 5),
(318, 'F7', '1', 100000, '', 5),
(319, 'F8', '1', 100000, '', 5),
(320, 'F9', '1', 100000, '', 5),
(321, 'F10', '1', 100000, '', 5),
(322, 'F11', '1', 100000, '', 5),
(323, 'F12', '0', 100000, '', 5),
(324, 'G1', '1', 100000, '', 5),
(325, 'G2', '1', 100000, '', 5),
(326, 'G3', '1', 100000, '', 5),
(327, 'G4', '1', 100000, '', 5),
(328, 'G5', '0', 100000, '', 5),
(329, 'G6', '0', 100000, '', 5),
(330, 'G7', '0', 100000, '', 5),
(331, 'G8', '1', 100000, '', 5),
(332, 'G9', '0', 100000, '', 5),
(333, 'G10', '0', 100000, '', 5),
(334, 'G11', '0', 100000, '', 5),
(335, 'G12', '1', 100000, '', 5),
(336, 'H1', '1', 100000, '', 5),
(337, 'H2', '0', 100000, '', 5),
(338, 'H3', '0', 100000, '', 5),
(339, 'H4', '1', 100000, '', 5),
(340, 'H5', '0', 100000, '', 5),
(341, 'H6', '0', 100000, '', 5),
(342, 'H7', '0', 100000, '', 5),
(343, 'H8', '0', 100000, '', 5),
(344, 'H9', '1', 100000, '', 5),
(345, 'H10', '1', 100000, '', 5),
(346, 'H11', '0', 100000, '', 5),
(347, 'H12', '0', 100000, '', 5),
(348, 'I1', '1', 100000, '', 5),
(349, 'I2', '1', 100000, '', 5),
(350, 'I3', '1', 100000, '', 5),
(351, 'I4', '1', 100000, '', 5),
(352, 'I5', '0', 100000, '', 5),
(353, 'I6', '0', 100000, '', 5),
(354, 'I7', '0', 100000, '', 5),
(355, 'I8', '0', 100000, '', 5),
(356, 'I9', '1', 100000, '', 5),
(357, 'I10', '1', 100000, '', 5),
(358, 'I11', '1', 100000, '', 5),
(359, 'I12', '0', 100000, '', 5),
(360, 'J1', '1', 100000, '', 5),
(361, 'J2', '1', 100000, '', 5),
(362, 'J3', '1', 100000, '', 5),
(363, 'J4', '1', 100000, '', 5),
(364, 'J5', '1', 100000, '', 5),
(365, 'J6', '1', 100000, '', 5),
(366, 'J7', '0', 100000, '', 5),
(367, 'J8', '0', 100000, '', 5),
(368, 'J9', '0', 100000, '', 5),
(369, 'J10', '1', 100000, '', 5),
(370, 'J11', '0', 100000, '', 5),
(371, 'J12', '1', 100000, '', 5),
(372, 'A1', '1', 120000, '', 6),
(373, 'A2', '1', 120000, '', 6),
(374, 'A3', '0', 120000, '', 6),
(375, 'A4', '0', 120000, '', 6),
(376, 'A5', '0', 120000, '', 6),
(377, 'A6', '0', 120000, '', 6),
(378, 'A7', '0', 120000, '', 6),
(379, 'A8', '1', 120000, '', 6),
(380, 'A9', '1', 120000, '', 6),
(381, 'A10', '1', 120000, '', 6),
(382, 'A11', '0', 120000, '', 6),
(383, 'A12', '0', 120000, '', 6),
(384, 'B1', '1', 120000, '', 6),
(385, 'B2', '1', 120000, '', 6),
(386, 'B3', '1', 120000, '', 6),
(387, 'B4', '1', 120000, '', 6),
(388, 'B5', '0', 120000, '', 6),
(389, 'B6', '0', 120000, '', 6),
(390, 'B7', '1', 120000, '', 6),
(391, 'B8', '1', 120000, '', 6),
(392, 'B9', '0', 120000, '', 6),
(393, 'B10', '0', 120000, '', 6),
(394, 'B11', '0', 120000, '', 6),
(395, 'B12', '0', 120000, '', 6),
(396, 'C1', '0', 120000, '', 6),
(397, 'C2', '0', 120000, '', 6),
(398, 'C3', '0', 120000, '', 6),
(399, 'C4', '0', 120000, '', 6),
(400, 'C5', '0', 120000, '', 6),
(401, 'C6', '0', 120000, '', 6),
(402, 'C7', '0', 120000, '', 6),
(403, 'C8', '1', 120000, '', 6),
(404, 'C9', '1', 120000, '', 6),
(405, 'C10', '1', 120000, '', 6),
(406, 'C11', '1', 120000, '', 6),
(407, 'C12', '1', 120000, '', 6),
(408, 'D1', '1', 120000, '', 6),
(409, 'D2', '1', 120000, '', 6),
(410, 'D3', '1', 120000, '', 6),
(411, 'D4', '1', 120000, '', 6),
(412, 'D5', '1', 120000, '', 6),
(413, 'D6', '1', 120000, '', 6),
(414, 'D7', '0', 120000, '', 6),
(415, 'D8', '0', 120000, '', 6),
(416, 'D9', '0', 120000, '', 6),
(417, 'D10', '1', 120000, '', 6),
(418, 'D11', '1', 120000, '', 6),
(419, 'D12', '1', 120000, '', 6),
(420, 'E1', '0', 120000, '', 6),
(421, 'E2', '0', 120000, '', 6),
(422, 'E3', '0', 120000, '', 6),
(423, 'E4', '0', 120000, '', 6),
(424, 'E5', '0', 120000, '', 6),
(425, 'E6', '1', 120000, '', 6),
(426, 'E7', '1', 120000, '', 6),
(427, 'E8', '1', 120000, '', 6),
(428, 'E9', '0', 120000, '', 6),
(429, 'E10', '0', 120000, '', 6),
(430, 'E11', '0', 120000, '', 6),
(431, 'E12', '0', 120000, '', 6),
(432, 'F1', '0', 120000, '', 6),
(433, 'F2', '0', 120000, '', 6),
(434, 'F3', '0', 120000, '', 6),
(435, 'F4', '0', 120000, '', 6),
(436, 'F5', '1', 120000, '', 6),
(437, 'F6', '1', 120000, '', 6),
(438, 'F7', '1', 120000, '', 6),
(439, 'F8', '1', 120000, '', 6),
(440, 'F9', '1', 120000, '', 6),
(441, 'F10', '1', 120000, '', 6),
(442, 'F11', '1', 120000, '', 6),
(443, 'F12', '0', 120000, '', 6),
(444, 'G1', '1', 120000, '', 6),
(445, 'G2', '1', 120000, '', 6),
(446, 'G3', '1', 120000, '', 6),
(447, 'G4', '1', 120000, '', 6),
(448, 'G5', '1', 120000, '', 6),
(449, 'G6', '1', 120000, '', 6),
(450, 'G7', '1', 120000, '', 6),
(451, 'G8', '1', 120000, '', 6),
(452, 'G9', '0', 120000, '', 6),
(453, 'G10', '0', 120000, '', 6),
(454, 'G11', '0', 120000, '', 6),
(455, 'G12', '1', 120000, '', 6),
(456, 'H1', '0', 120000, '', 6),
(457, 'H2', '0', 120000, '', 6),
(458, 'H3', '0', 120000, '', 6),
(459, 'H4', '0', 120000, '', 6),
(460, 'H5', '0', 120000, '', 6),
(461, 'H6', '1', 120000, '', 6),
(462, 'H7', '1', 120000, '', 6),
(463, 'H8', '1', 120000, '', 6),
(464, 'H9', '1', 120000, '', 6),
(465, 'H10', '0', 120000, '', 6),
(466, 'H11', '0', 120000, '', 6),
(467, 'H12', '0', 120000, '', 6),
(468, 'I1', '0', 120000, '', 6),
(469, 'I2', '0', 120000, '', 6),
(470, 'I3', '0', 120000, '', 6),
(471, 'I4', '0', 120000, '', 6),
(472, 'I5', '0', 120000, '', 6),
(473, 'I6', '0', 120000, '', 6),
(474, 'I7', '0', 120000, '', 6),
(475, 'I8', '0', 120000, '', 6),
(476, 'I9', '0', 120000, '', 6),
(477, 'I10', '1', 120000, '', 6),
(478, 'I11', '1', 120000, '', 6),
(479, 'I12', '1', 120000, '', 6),
(480, 'J1', '1', 120000, '', 6),
(481, 'J2', '1', 120000, '', 6),
(482, 'J3', '1', 120000, '', 6),
(483, 'J4', '0', 120000, '', 6),
(484, 'J5', '0', 120000, '', 6),
(485, 'J6', '0', 120000, '', 6),
(486, 'J7', '0', 120000, '', 6),
(487, 'J8', '1', 120000, '', 6),
(488, 'J9', '1', 120000, '', 6),
(489, 'J10', '1', 120000, '', 6),
(490, 'J11', '1', 120000, '', 6),
(491, 'J12', '1', 120000, '', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gia_ve`
--

CREATE TABLE `gia_ve` (
  `id_gia_ve` int(11) NOT NULL,
  `ten_ve` varchar(50) NOT NULL,
  `gia_ve` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gia_ve`
--

INSERT INTO `gia_ve` (`id_gia_ve`, `ten_ve`, `gia_ve`) VALUES
(1, '2D', 70000),
(2, '2D-ES', 90000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` int(11) NOT NULL,
  `ten_khuyen_mai` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `chi_tiet` text NOT NULL,
  `chiet_khau` int(11) NOT NULL,
  `ngay_ap_dung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ten_khuyen_mai`, `img`, `chi_tiet`, `chiet_khau`, `ngay_ap_dung`) VALUES
(1, 'Khuyến mãi 1', 'Web-HappyDay-270x152.png\r\n', 'Chương trình:  THỨ 2 VUI VẺ\r\n\r\n– Hình thức áp dụng: Giá vé 2D đặc biệt cho khách hàng xem phim vào ngày thứ 2 hàng tuần.\r\n\r\n– Đối tượng áp dụng: Vé người lớn.\r\n\r\n– Chính sách giá vé: Thay đổi tuỳ vào các cụm rạp (Vui lòng tham khảo bảng giá vé tại các rạp)\r\n\r\n– Điều kiện áp dụng:\r\n\r\n+ Áp dụng cho mọi suất chiếu phim 2D trong ngày thứ 2 hàng tuần trừ các suất chiếu sớm đặc biệt.\r\n\r\n+ Không phụ thu ghế đôi, ghế Sofa, ghế Premium.\r\n\r\n+ Không áp dụng phòng First Class.\r\n\r\n+ Không áp dụng kèm các chương trình giảm giá vé khác.\r\n\r\n+ Áp dụng phụ thu đối với phim 3D, phim bom tấn.\r\n\r\n+ Không áp dụng ngày Lễ, Tết.\r\n\r\nBan Quản Lý Rạp có thể thay đổi hoặc dừng chương trình mà không thông báo trước.', 20, '2023-11-11'),
(2, 'Khuyến mãi 2', 'u22.png', '', 10, '2023-12-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id_lien_he` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `ho_ten` text NOT NULL,
  `chu_de` varchar(225) NOT NULL,
  `noi_dung` varchar(500) NOT NULL,
  `ngay_gui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`id_lien_he`, `email`, `ho_ten`, `chu_de`, `noi_dung`, `ngay_gui`) VALUES
(5, 'truong5122003@gmail.com', 'truongpx', 'qaaaa', '2131231231', '2023-12-07'),
(6, 'truongpxph39601@fpt.edu.vn', 'truong', '1', '123456', '2023-12-07'),
(7, 'maco6644@gmail.com', 'ky', 'good', 'oke', '2023-12-09'),
(8, 'truong5122003@gmail.com', 'truongpx', 'qaaaa', '123', '2023-12-09'),
(9, 'truong5122003@gmail.com', 'truongpx', 'qaaaa', '123456', '2023-12-09'),
(10, 'truong5122003@gmail.com', 'truongpx', 'qaaaa', 'ưdaszs', '2023-12-09'),
(11, '1asd1a@gmail.com', 'a', '1', '1', '2023-12-13'),
(12, 'truongpxph39601@fpt.edu.vn', 'moi', '1', '1', '2023-12-14'),
(13, 'truong5122003@gmail.com', 'truongpx', 'qqqq', 'abc', '2024-06-29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id_phim` int(11) NOT NULL,
  `ten_phim` text NOT NULL,
  `anh` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `ngay_phat_hanh` date NOT NULL,
  `ngon_ngu` text NOT NULL,
  `trailer` varchar(255) NOT NULL,
  `thoi_luong` varchar(255) NOT NULL,
  `trang_thai_phim` text NOT NULL,
  `id_khuyen_mai` int(11) NOT NULL,
  `id_the_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id_phim`, `ten_phim`, `anh`, `mo_ta`, `ngay_phat_hanh`, `ngon_ngu`, `trailer`, `thoi_luong`, `trang_thai_phim`, `id_khuyen_mai`, `id_the_loai`) VALUES
(1, 'AQUAMAN', 'aquaman.jpg', 'Arthur Curry là kết tinh tình yêu của một người đàn ông bình thường và vị nữ vương đại dương. Anh là người thừa kế vương quốc Atlantis dưới đáy đại dương, và phải tiến đến để dẫn dắt người dân của mình, trở thành một người hùng mới của thế giới.', '2023-12-04', 'Tiếng Việt', '', '143 phút', 'Phim sắp chiếu', 1, 1),
(6, 'HOPELESS', 'HOPELESS.jpg', 'Sinh ra và lớn lên tại nơi không có lấy một tia sáng hy vọng, Yeon Gyu quyết tâm phải thoát khỏi chốn địa ngục này. Cậu tình cờ gặp được Chi Geon - một người có máu mặt trong tổ chức tội phạm. Liệu Yeon Gyu có thoát khỏi thế giới đầy rẫy nguy hiểm không?', '2023-12-05', 'Tiếng Việt', 'https://www.youtube.com/watch?v=VLfVjEJoxgY', '123 phút', 'Phim đang chiếu', 1, 1),
(7, 'BRAVE CITIZEN', 'BRAVE CITIZEN.jpg', 'So Shi-Min luôn đam mê trở thành một võ sĩ quyền anh, nhưng cơm áo gạo tiền kéo cô về với vị trí giáo viên hợp đồng tại trường trung học. Tâm lý muốn sống an phận của cô sớm bị thử thách khi phải trừng trị Han Soo-Gang, một nam sinh ngỗ ngược nhất trường.', '2023-12-06', 'Tiếng Việt', 'https://www.youtube.com/watch?v=egj-2c-TsMc', '112 phút', 'Phim đang chiếu', 2, 1),
(8, 'CHIẾM ĐOẠT', 'CHIẾM ĐOẠT.jpg', 'Người vợ của một gia đình thượng lưu thuê cô bảo mẫu “trong mơ” để chăm sóc con trai mình. Nhưng cô không ngờ rằng, phía sau sự trong sáng, tinh khiết kia, cô bảo mẫu luôn che giấu âm mưu nhằm phá hoại hạnh phúc gia đình và khiến cuộc sống của cô thay đổi', '2023-12-07', 'Tiếng Việt', 'https://www.youtube.com/watch?v=N_mFHAQ5vL0', '114 phút', 'Phim đang chiếu', 1, 3),
(9, 'THE BRIDGE CURSE 2: RITUAL', 'ba31b22d9a89a4c0fcc67fd7009fc795.jpg', 'Một ngôi trường có cấu trúc xây dựng hình nghịch bát quái nhằm bẫy những linh hồn vất vưởng để tránh chúng phá hoại. Nhưng không ngờ điều này đã khiến sinh viên chứng kiến nhiều chuyện kì quái khó tin, ngôi trường dần dà trở nên ma mị và nhiều âm khí...', '2023-12-09', 'Tiếng Việt', 'https://www.youtube.com/watch?v=oe6jTUhD_p4', '160 phút', 'Vé bán trước', 2, 4),
(10, 'TROLLS BAND TOGETHER', 'TROLLS BAND TOGETHER.jpg', 'Sự xuất hiện của John Dory,anh trai thất lạc đã lâu của Branch đã mở quá khứ đen tối của Branch,đó là về một ban nhạc có tên BroZone từng rất nổi tiếng nhưng đã tan rã.Hành trình đi tìm lại các thành viên khi xưa trở thành chuyến phiêu lưu đầy cảm xúc', '2023-12-10', 'Tiếng Việt', 'https://www.youtube.com/watch?v=qZ40Z62tcXM', '160 phút', 'Phim đang chiếu', 1, 2),
(11, 'WISH', 'WISH.png', 'Điều ước sẽ đi theo cô gái trẻ Asha, người ước nguyện dưới vì sao và nhận được nhiều hơn mong đợi khi một ngôi sao rắc rối từ trên trời rơi xuống để đồng hành cùng cô. Cô sẽ đối mặt với những kẻ thù ghê gớm nhất vũ trụ và phải hợp sức với Star...', '2023-12-12', 'Tiếng Việt', 'https://www.youtube.com/watch?v=oyRxxpD3yNw', '94 phút', 'Phim đang chiếu', 1, 2),
(12, 'NGƯỜI MẶT TRỜI', 'ngmattroi.jpg', '400 năm qua, loài Ma Cà Rồng đã bí mật sống giữa loài người trong hòa bình, nhưng hiểm họa bỗng ập đến khi một cô gái loài người phát hiện được thân phận của hai anh em Ma Cà Rồng. Người anh khát máu quyết săn lùng cô để bảo vệ bí mật giống loài...', '2023-12-03', 'Tiếng Việt', 'https://www.youtube.com/watch?v=5yreWvGqbyg', '115 phút', 'Phim đang chiếu', 1, 4),
(13, 'WONKA', 'WONKA.jpg', 'Dựa trên nhân vật từ quyển sách gối đầu giường của các em nhỏ trên toàn thế giới \"Charlie và Nhà Máy Sôcôla\" và phiên bản phim điện ảnh cùng tên vào năm 2005, WONKA kể câu chuyện kỳ diệu về hành trình của nhà phát minh, ảo thuật gia và nhà sản xuất sôcôla', '2023-12-08', 'Tiếng Việt', 'https://www.youtube.com/watch?v=otNh9bTjXWg', '116 phút', 'Phim sắp chiếu', 2, 2),
(14, 'NCT NATION: TO THE WORLD', 'HO00002856.jpg', 'Concert này một lần nữa chứng minh danh tiếng và sức ảnh hưởng ngày càng lớn mạnh của NCT. Bởi đây là concert trực tiếp đầu tiên có sự tham gia của tất cả nhóm nhỏ (unit) trong hệ thống của NCT, tổ chức tại sân vận động có quy mô lớn.', '2023-12-01', 'Tiếng Việt', 'https://www.youtube.com/watch?v=AIULG5K6uIE', '103 phút', 'Phim đang chiếu', 1, 3),
(15, '14 AGAIN: I LOVE YOU TWO THOUSAND', 'HO00002865.jpg', 'Trong lúc đắn đo giữa việc nên cố gắng tốt nghiệp đại học để làm hài lòng gia đình hay theo đuổi ước mơ và đam mê, Gib gặp lại mối tình đầu của mình - Tor. Liệu cả hai có hóa giải được hiểu lầm năm xưa và nối lại tình cũ hay không?', '2023-12-02', 'Tiếng Việt', 'https://www.youtube.com/watch?v=MZFWT7By1uQ', '114 phút', 'Phim sắp chiếu', 2, 3),
(16, 'GOOD JOB', 'HO00002867.jpg', 'Hành trình của Kang-Jin, một học sinh trung học lầm lì và hay bị bắt nạt , bỗng trở thành chiến thần tài chính, ông hoàng tài chính, chuyên gia cho vay nặng lãi...', '2023-12-01', 'Tiếng Việt', '', '95 phút', 'Phim sắp chiếu', 2, 3),
(17, 'THE TUNNEL TO THE SUMMER\r\n', 'HO00002869.png', 'Kaoru Tono nghe được một tin đồn: Quy luật không gian và thời gian chẳng có ý nghĩa gì với đường hầm Urashima. Nếu tìm thấy nó, hãy bước qua và bạn sẽ tìm thấy mong muốn của trái tim mình ở phía bên kia...đổi lấy những năm tháng cuộc đời của chính bạn', '2023-12-01', 'Tiếng Việt', 'https://www.youtube.com/watch?v=quNGzBv9arI', '84 phú', 'Phim sắp chiếu', 2, 2),
(18, 'NOT FRIENDS', 'HO00002833 (1).jpg', 'Pae vừa chuyển sang trường mới, tại đây, cậu gặp Joe - một học sinh được cả lớp yêu mến. Joe muốn kết bạn với Pae nhưng bị Pae từ chối. Hôm sau, Joe không may qua đời sau tai nạn giao thông. Vì để được vô trường đại học, Pae tuyên bố sẽ làm phim về Joe...', '2023-02-12', 'Tiếng Việt', 'https://www.youtube.com/watch?v=2ZZtD18W2Mw', '128 phút', 'Phim đang chiếu', 2, 3),
(19, 'NAPOLEON', 'HO00002846.jpg', 'Một thiên anh hùng ca kể về sự trỗi dậy và sụp đổ đầy trắc trở của Hoàng đế Pháp Napoléon Bonaparte và hành trình không ngừng nghỉ của ông để giành quyền lực qua lăng kính của mối quan hệ gây nghiện và đầy biến động với vợ mình, Josephine...', '2023-01-12', 'Tiếng Việt', 'https://www.youtube.com/watch?v=LIsfMO5Jd_w', '158 phút', 'Phim đang chiếu', 1, 1),
(20, 'THE BRIDGE CURSE 2', 'HO00002834.jpg', 'Một ngôi trường có cấu trúc xây dựng hình nghịch bát quái nhằm bẫy những linh hồn vất vưởng để tránh chúng phá hoại. Nhưng không ngờ điều này đã khiến sinh viên chứng kiến nhiều chuyện kì quái khó tin, ngôi trường dần dà trở nên ma mị và nhiều âm khí...', '0000-00-00', 'Tiếng Việt', 'https://www.youtube.com/watch?v=oe6jTUhD_p4', '101 phút', 'Phim đang chiếu', 2, 4),
(21, 'MY SHINEE WORLD', 'HO00002820.jpg', 'Như một món quà kỷ niệm 15 năm ra mắt, MY SHINee WORLD sẽ mang đến những khoảnh khắc của SHINee cùng người hâm mộ suốt hơn một thập kỷ qua và lần theo từng chặng đường của SHINee dưới góc nhìn của SHINee WORLD.', '0000-00-00', 'Tiếng Anh', 'https://www.youtube.com/watch?v=zB_a1nZuUco', '111 phút', 'Phim đang chiếu', 1, 3),
(22, 'THE MARVELS', 'HO00002701.jpg', 'Carol Danvers bị vướng vào sức mạnh của Kamala Khan và Monica Rambeau, buộc họ phải hợp tác với nhau để cứu vũ trụ', '2023-02-01', 'Tiếng Anh', 'https://www.youtube.com/watch?v=uwmDH12MAA4', '104 phút', 'Phim đang chiếu', 2, 1),
(23, 'LOVE RESET', 'HO00002815.jpg', 'Bất chấp sự phản đối kịch liệt, Jeong-yeol và Na-ra quyết tâm kết hôn nhưng nhanh chóng sau đó họ ra tòa ly hôn. Tai nạn xe hơi bất ngờ khiến cả hai mất trí nhớ. Cặp đôi yêu nhau lần nữa và các thành viên trong gia đình đã lên kế hoạch phá đảo...', '2023-10-11', 'Tiếng Việt', 'https://www.youtube.com/watch?v=wzlzVRud5HQ', '119 phút', 'Phim đang chiếu', 1, 3),
(24, 'MIGRATION', 'HO00002759.jpg', 'Cùng theo chân một gia đình vịt trời gồm vịt bố, vịt mẹ, cậu con trai Dax và vịt út Gwen, trong lần đầu tiên trải nghiệm chuyến di cư tiến về phía nam để trú đông. Với khung cảnh rực rỡ sắc trời thu tại một chiếc ao ở New England...', '2023-02-12', 'Tiếng Anh', 'https://www.youtube.com/watch?v=hWbfohXIdEU', '110 phút', 'Phim đang chiếu', 2, 2),
(25, 'QUY CAU', 'HO00002854.jpg', 'Nam về quê để lo đám tang cho bố trong khi phải che giấu bạn gái đang mang thai. Sau đó, Nam mơ thấy gia đình bị giết, và Mít – con chó trắng của mình có biểu hiện kì lạ. Anh nghi ngờ lò mổ chó của gia đình và quyết tâm giải quyết những chuyện kỳ lạ...', '2023-02-12', 'Tiếng Việt', 'https://www.youtube.com/watch?v=Y00GJIeAJ0w', '100 phút', 'Phim sắp chiếu', 1, 4),
(26, 'aaaa', '', '', '0000-00-00', 'Tiếng Việt', '', '', 'Phim đang chiếu', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_chieu`
--

CREATE TABLE `phong_chieu` (
  `id_phong_chieu` int(11) NOT NULL,
  `ten_phong_chieu` text NOT NULL,
  `loai_phong_chieu` text NOT NULL,
  `id_rap` int(11) NOT NULL,
  `id_gia_ve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phong_chieu`
--

INSERT INTO `phong_chieu` (`id_phong_chieu`, `ten_phong_chieu`, `loai_phong_chieu`, `id_rap`, `id_gia_ve`) VALUES
(1, 'phòng chiếu 1', '2D', 1, 1),
(2, 'Phòng chiếu 2', '2D-ES', 1, 2),
(5, 'Phòng chiếu 1', '2D', 2, 1),
(6, 'Phòng chiếu 2', '2D-ES', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rap`
--

CREATE TABLE `rap` (
  `id_rap` int(11) NOT NULL,
  `ten_rap` text NOT NULL,
  `dia_diem` varchar(255) NOT NULL,
  `img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rap`
--

INSERT INTO `rap` (`id_rap`, `ten_rap`, `dia_diem`, `img`) VALUES
(1, 'Rạp 1', 'Phạm Ngọc Thạch/Đống Đa/Hà Nội', 'rap1.jpg'),
(2, 'Rạp 2', 'Bà Triệu/Hoàn Kiếm/Hà Nội', 'rap2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 1,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `vai_tro`, `mat_khau`) VALUES
(1, 0, 'admin'),
(3, 1, '123456'),
(8, 1, '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suat_chieu`
--

CREATE TABLE `suat_chieu` (
  `id_suat_chieu` int(11) NOT NULL,
  `ngay_chieu` date NOT NULL,
  `gio_chieu` time NOT NULL,
  `id_phim` int(11) NOT NULL,
  `id_rap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `suat_chieu`
--

INSERT INTO `suat_chieu` (`id_suat_chieu`, `ngay_chieu`, `gio_chieu`, `id_phim`, `id_rap`) VALUES
(3, '2023-12-23', '03:28:37', 10, 2),
(4, '2023-11-24', '01:28:37', 1, 1),
(7, '2023-11-20', '21:30:00', 8, 1),
(8, '2023-11-20', '22:00:00', 7, 1),
(9, '2023-11-24', '22:30:00', 11, 1),
(10, '2024-06-25', '22:00:00', 1, 2),
(11, '2023-12-25', '02:29:25', 1, 2),
(12, '2023-11-25', '17:25:05', 1, 1),
(13, '2023-12-15', '01:28:37', 8, 1),
(14, '2023-12-07', '22:16:54', 1, 1),
(15, '2023-12-14', '19:00:00', 24, 1),
(16, '2023-12-14', '21:00:00', 24, 1),
(17, '2023-12-14', '23:00:00', 24, 1),
(20, '2023-12-15', '20:00:00', 24, 2),
(21, '2024-09-09', '22:00:00', 24, 1),
(22, '2024-09-10', '22:00:00', 24, 2),
(23, '2024-09-16', '19:00:00', 24, 2),
(25, '2024-09-14', '17:00:00', 24, 1),
(27, '2024-09-09', '19:00:00', 24, 1),
(28, '2024-09-09', '13:00:00', 24, 1),
(29, '2024-09-09', '09:00:00', 24, 1),
(30, '2024-09-11', '16:00:00', 24, 1),
(31, '2024-09-12', '09:00:00', 24, 1),
(32, '2024-09-13', '10:00:00', 24, 1),
(33, '2024-09-14', '21:30:00', 24, 1),
(34, '2024-09-15', '14:00:00', 24, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_loai_phim`
--

CREATE TABLE `the_loai_phim` (
  `id_the_loai` int(11) NOT NULL,
  `ten_the_loai` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `the_loai_phim`
--

INSERT INTO `the_loai_phim` (`id_the_loai`, `ten_the_loai`) VALUES
(1, 'Bom tấn'),
(2, 'Hoạt hình'),
(3, 'Tâm lý'),
(4, 'Kinh dị'),
(5, 'ad'),
(6, 'aaaaaaaaaaaaaa'),
(7, 'phíadasdasd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` text NOT NULL,
  `ho_ten` text NOT NULL,
  `so_dien_thoai` text NOT NULL,
  `dia_chi` text NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `email`, `ho_ten`, `so_dien_thoai`, `dia_chi`, `id_role`) VALUES
(1, 'admin@gmail.com', '0', '', '', 1),
(16, 'maco6644@gmail.com', 'hoang ky', '0258741111', 'tien lang', 3),
(40, 'truong5122003@gmail.com', 'truongpx', '0328902188', 'traidat', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `id_ve` int(11) NOT NULL,
  `id_suat_chieu` int(11) NOT NULL,
  `id_ghe` int(11) NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `id_gia_ve` int(11) NOT NULL,
  `id_pay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`id_ve`, `id_suat_chieu`, `id_ghe`, `trang_thai`, `id_gia_ve`, `id_pay`) VALUES
(20, 13, 214, 'Hết hạn', 2, 20),
(21, 13, 226, 'Hết hạn', 2, 20),
(22, 22, 253, 'Hết hạn', 1, 21),
(25, 15, 21, 'Hết hạn', 1, 23),
(26, 3, 372, 'Hết hạn', 2, 23),
(27, 21, 20, 'Hết hạn', 1, 23),
(28, 15, 19, 'Hết hạn', 1, 23),
(29, 15, 18, 'Hết hạn', 1, 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id_pay` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_do_an` int(11) DEFAULT NULL,
  `vnp_Amount` varchar(50) NOT NULL,
  `vnp_BankCode` varchar(50) NOT NULL,
  `vnp_BankTranNo` varchar(50) NOT NULL,
  `vnp_CardType` varchar(50) NOT NULL,
  `vnp_Orderinfo` varchar(50) NOT NULL,
  `vnp_PayDate` varchar(50) NOT NULL,
  `vnp_ResponseCode` varchar(50) NOT NULL,
  `vnp_TmnCode` varchar(50) NOT NULL,
  `vnp_TransactionNo` varchar(50) NOT NULL,
  `vnp_TransactionStatus` varchar(50) NOT NULL,
  `vnp_TxnRef` varchar(50) NOT NULL,
  `vnp_SecureHash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id_pay`, `id_user`, `id_do_an`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_Orderinfo`, `vnp_PayDate`, `vnp_ResponseCode`, `vnp_TmnCode`, `vnp_TransactionNo`, `vnp_TransactionStatus`, `vnp_TxnRef`, `vnp_SecureHash`) VALUES
(20, 16, 3, '45000000', 'NCB', 'VNP14230400', 'ATM', 'Thanh toán vé xem phim', '20231209105508', '00', '5NC5P2K0', '14230400', '00', '9620', '9c4004a842327ed9b1c5f405e44681ad783e53a7911cd0b963c5b9df5451db488d6f1a07446a10b13c0b97101999c3c86f20e2150e212addbe69a2a527acf6e5'),
(21, 16, 3, '29000000', 'NCB', 'VNP14231861', 'ATM', 'Thanh toán vé xem phim', '20231209232228', '00', '5NC5P2K0', '14231861', '00', '193', '35c2a9b18315af0a4c704166316d91494da642b4dc1aa53f51cfac7d62148966dd1d90b9925183351f5c765c466643f77290642ce08e6ff6ffb6f71f623159d9'),
(23, 40, 2, '31000000', 'NCB', 'VNP14238559', 'ATM', 'Thanh toán vé xem phim', '20231212220923', '00', '5NC5P2K0', '14238559', '00', '3403', 'a950861fb763872cc4dac478cdd0ea57f1efef469ce391a8925258f8ca6361131d0173cc41c58dd38a5bcfbad6b7b9e0bcc99b59178b512528dff1f3825c7995'),
(24, 40, 1, '22000000', 'NCB', 'VNP14238618', 'ATM', 'Thanh toán vé xem phim', '20231212223615', '00', '5NC5P2K0', '14238618', '00', '9858', 'e6e45578df0a6b25d83d8aa1280515ee1fa11a7d2d098be8458ff8505a868416273d237d0a18c554f1f56fcbb893130663a51f4e393dcb63c8c7e7e560871a60'),
(25, 40, 0, '11900000', 'NCB', 'VNP14240823', 'ATM', 'Thanh toán vé xem phim', '20231213204317', '00', '5NC5P2K0', '14240823', '00', '508', '93d1c64dc1c71adf29963826038879e90aec3baca8bd3e39e21ef7d5f6eb7db6cf7c0716bb597c4875f73bcd68e7c3bd45d670e40b5196bbdfe5262c984bd826'),
(26, 40, 3, '23100000', 'NCB', 'VNP14241254', 'ATM', 'Thanh toán vé xem phim', '20231214023316', '00', '5NC5P2K0', '14241254', '00', '2440', '2fa4acfb082df185af548f54adefa6fb59c6ae02204bfe31305796dfb533534c6583bc1f04d38ad52bd993ed4296644661ac322510b8ea915ce0cbd6dc5f0733');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `do_an`
--
ALTER TABLE `do_an`
  ADD PRIMARY KEY (`id_do_an`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id_ghe`),
  ADD KEY `id_phong_chieu` (`id_phong_chieu`);

--
-- Chỉ mục cho bảng `gia_ve`
--
ALTER TABLE `gia_ve`
  ADD PRIMARY KEY (`id_gia_ve`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id_phim`),
  ADD KEY `fk_khuyen_mai_id` (`id_khuyen_mai`);

--
-- Chỉ mục cho bảng `phong_chieu`
--
ALTER TABLE `phong_chieu`
  ADD PRIMARY KEY (`id_phong_chieu`),
  ADD KEY `fk_id_rap` (`id_rap`),
  ADD KEY `fk_id_gia` (`id_gia_ve`);

--
-- Chỉ mục cho bảng `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`id_rap`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  ADD PRIMARY KEY (`id_suat_chieu`),
  ADD KEY `fk_rap_id` (`id_rap`);

--
-- Chỉ mục cho bảng `the_loai_phim`
--
ALTER TABLE `the_loai_phim`
  ADD PRIMARY KEY (`id_the_loai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `UC_user` (`email`,`so_dien_thoai`) USING HASH,
  ADD KEY `fk_id_role` (`id_role`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id_ve`),
  ADD KEY `fk_id_suat_chieu` (`id_suat_chieu`),
  ADD KEY `fk_id_gia_ve` (`id_gia_ve`),
  ADD KEY `fk_id_pay` (`id_pay`),
  ADD KEY `fk_id_ghe` (`id_ghe`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id_pay`),
  ADD KEY `fk_users_id` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `do_an`
--
ALTER TABLE `do_an`
  MODIFY `id_do_an` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id_ghe` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT cho bảng `gia_ve`
--
ALTER TABLE `gia_ve`
  MODIFY `id_gia_ve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lien_he` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id_phim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `phong_chieu`
--
ALTER TABLE `phong_chieu`
  MODIFY `id_phong_chieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `rap`
--
ALTER TABLE `rap`
  MODIFY `id_rap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  MODIFY `id_suat_chieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `the_loai_phim`
--
ALTER TABLE `the_loai_phim`
  MODIFY `id_the_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `id_ve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD CONSTRAINT `ghe_ibfk_1` FOREIGN KEY (`id_phong_chieu`) REFERENCES `phong_chieu` (`id_phong_chieu`);

--
-- Các ràng buộc cho bảng `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `fk_khuyen_mai_id` FOREIGN KEY (`id_khuyen_mai`) REFERENCES `khuyen_mai` (`id_khuyen_mai`);

--
-- Các ràng buộc cho bảng `phong_chieu`
--
ALTER TABLE `phong_chieu`
  ADD CONSTRAINT `fk_id_gia` FOREIGN KEY (`id_gia_ve`) REFERENCES `gia_ve` (`id_gia_ve`),
  ADD CONSTRAINT `fk_id_rap` FOREIGN KEY (`id_rap`) REFERENCES `rap` (`id_rap`);

--
-- Các ràng buộc cho bảng `suat_chieu`
--
ALTER TABLE `suat_chieu`
  ADD CONSTRAINT `fk_rap_id` FOREIGN KEY (`id_rap`) REFERENCES `rap` (`id_rap`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Các ràng buộc cho bảng `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `fk_id_ghe` FOREIGN KEY (`id_ghe`) REFERENCES `ghe` (`id_ghe`),
  ADD CONSTRAINT `fk_id_gia_ve` FOREIGN KEY (`id_gia_ve`) REFERENCES `gia_ve` (`id_gia_ve`),
  ADD CONSTRAINT `fk_id_pay` FOREIGN KEY (`id_pay`) REFERENCES `vnpay` (`id_pay`),
  ADD CONSTRAINT `fk_id_suat_chieu` FOREIGN KEY (`id_suat_chieu`) REFERENCES `suat_chieu` (`id_suat_chieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
