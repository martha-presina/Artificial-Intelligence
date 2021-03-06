-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2020 pada 14.00
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nbc_atribut`
--

CREATE TABLE `nbc_atribut` (
  `id_atribut` tinyint(3) UNSIGNED NOT NULL,
  `atribut` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nbc_atribut`
--

INSERT INTO `nbc_atribut` (`id_atribut`, `atribut`) VALUES
(7, 'BMI'),
(6, 'Gula Darah'),
(5, 'Asam Urat'),
(3, 'Merokok'),
(4, 'Kolesterol'),
(1, 'Kelayakan Kerja'),
(2, 'Usia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nbc_data`
--

CREATE TABLE `nbc_data` (
  `id_data` int(11) UNSIGNED NOT NULL,
  `id_responden` tinyint(3) UNSIGNED NOT NULL,
  `id_atribut` tinyint(3) UNSIGNED NOT NULL,
  `id_parameter` tinyint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nbc_data`
--

INSERT INTO `nbc_data` (`id_data`, `id_responden`, `id_atribut`, `id_parameter`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 2),
(3, 1, 3, 2),
(4, 1, 4, 2),
(5, 1, 5, 2),
(6, 1, 6, 1),
(7, 1, 7, 2),
(8, 2, 1, 1),
(9, 2, 2, 0),
(10, 2, 3, 1),
(11, 2, 4, 0),
(12, 2, 5, 2),
(13, 2, 6, 2),
(14, 2, 7, 1),
(15, 3, 1, 1),
(16, 3, 2, 1),
(17, 3, 3, 1),
(18, 3, 4, 1),
(19, 3, 5, 2),
(20, 3, 6, 2),
(21, 3, 7, 1),
(22, 4, 1, 0),
(23, 4, 2, 2),
(24, 4, 3, 2),
(25, 4, 4, 0),
(26, 4, 5, 0),
(27, 4, 6, 2),
(28, 4, 7, 2),
(29, 5, 1, 1),
(30, 5, 2, 0),
(31, 5, 3, 1),
(32, 5, 4, 0),
(33, 5, 5, 2),
(34, 5, 6, 2),
(35, 5, 7, 1),
(36, 6, 1, 1),
(37, 6, 2, 0),
(38, 6, 3, 1),
(39, 6, 4, 1),
(40, 6, 5, 1),
(41, 6, 6, 2),
(42, 6, 7, 0),
(43, 7, 1, 2),
(44, 7, 2, 1),
(45, 7, 3, 0),
(46, 7, 4, 2),
(47, 7, 5, 1),
(48, 7, 6, 0),
(49, 7, 7, 1),
(50, 8, 1, 2),
(51, 8, 2, 1),
(52, 8, 3, 0),
(53, 8, 4, 0),
(54, 8, 5, 2),
(55, 8, 6, 0),
(56, 8, 7, 1),
(57, 9, 1, 0),
(58, 9, 2, 1),
(59, 9, 3, 1),
(60, 9, 4, 1),
(61, 9, 5, 2),
(62, 9, 6, 1),
(63, 9, 7, 0),
(64, 10, 1, 2),
(65, 10, 2, 1),
(66, 10, 3, 2),
(67, 10, 4, 0),
(68, 10, 5, 1),
(69, 10, 6, 2),
(70, 10, 7, 1),
(71, 11, 1, 2),
(72, 11, 2, 1),
(73, 11, 3, 2),
(74, 11, 4, 0),
(75, 11, 5, 1),
(76, 11, 6, 0),
(77, 11, 7, 0),
(78, 12, 1, 2),
(79, 12, 2, 2),
(80, 12, 3, 2),
(81, 12, 4, 0),
(82, 12, 5, 1),
(83, 12, 6, 0),
(84, 12, 7, 2),
(85, 13, 1, 2),
(86, 13, 2, 0),
(87, 13, 3, 1),
(88, 13, 4, 0),
(89, 13, 5, 1),
(90, 13, 6, 2),
(91, 13, 7, 1),
(92, 14, 1, 2),
(93, 14, 2, 0),
(94, 14, 3, 2),
(95, 14, 4, 0),
(96, 14, 5, 2),
(97, 14, 6, 0),
(98, 14, 7, 1),
(99, 15, 1, 2),
(100, 15, 2, 2),
(101, 15, 3, 2),
(102, 15, 4, 2),
(103, 15, 5, 1),
(104, 15, 6, 0),
(105, 15, 7, 1),
(106, 16, 1, 2),
(107, 16, 2, 0),
(108, 16, 3, 0),
(109, 16, 4, 2),
(110, 16, 5, 1),
(111, 16, 6, 0),
(112, 16, 7, 1),
(113, 17, 1, 0),
(114, 17, 2, 1),
(115, 17, 3, 1),
(116, 17, 4, 0),
(117, 17, 5, 2),
(118, 17, 6, 2),
(119, 17, 7, 2),
(120, 18, 1, 2),
(121, 18, 2, 0),
(122, 18, 3, 1),
(123, 18, 4, 2),
(124, 18, 5, 1),
(125, 18, 6, 0),
(126, 18, 7, 1),
(127, 19, 1, 2),
(128, 19, 2, 0),
(129, 19, 3, 2),
(130, 19, 4, 0),
(131, 19, 5, 2),
(132, 19, 6, 0),
(133, 19, 7, 1),
(134, 20, 1, 2),
(135, 20, 2, 2),
(136, 20, 3, 1),
(137, 20, 4, 0),
(138, 20, 5, 1),
(139, 20, 6, 1),
(140, 20, 7, 1),
(141, 21, 1, 1),
(142, 21, 2, 2),
(143, 21, 3, 2),
(144, 21, 4, 0),
(145, 21, 5, 2),
(146, 21, 6, 0),
(147, 21, 7, 1),
(148, 22, 1, 1),
(149, 22, 2, 1),
(150, 22, 3, 1),
(151, 22, 4, 2),
(152, 22, 5, 1),
(153, 22, 6, 0),
(154, 22, 7, 2),
(155, 23, 1, 2),
(156, 23, 2, 2),
(157, 23, 3, 2),
(158, 23, 4, 0),
(159, 23, 5, 1),
(160, 23, 6, 0),
(161, 23, 7, 0),
(162, 24, 1, 2),
(163, 24, 2, 2),
(164, 24, 3, 1),
(165, 24, 4, 0),
(166, 24, 5, 1),
(167, 24, 6, 0),
(168, 24, 7, 2),
(169, 25, 1, 2),
(170, 25, 2, 1),
(171, 25, 3, 0),
(172, 25, 4, 0),
(173, 25, 5, 1),
(174, 25, 6, 0),
(175, 25, 7, 2),
(176, 26, 1, 2),
(177, 26, 2, 1),
(178, 26, 3, 2),
(179, 26, 4, 0),
(180, 26, 5, 1),
(181, 26, 6, 0),
(182, 26, 7, 2),
(183, 27, 1, 0),
(184, 27, 2, 2),
(185, 27, 3, 2),
(186, 27, 4, 2),
(187, 27, 5, 1),
(188, 27, 6, 2),
(189, 27, 7, 2),
(190, 28, 1, 2),
(191, 28, 2, 1),
(192, 28, 3, 2),
(193, 28, 4, 0),
(194, 28, 5, 1),
(195, 28, 6, 1),
(196, 28, 7, 1),
(197, 29, 1, 2),
(198, 29, 2, 2),
(199, 29, 3, 0),
(200, 29, 4, 0),
(201, 29, 5, 0),
(202, 29, 6, 0),
(203, 29, 7, 1),
(204, 30, 1, 2),
(205, 30, 2, 0),
(206, 30, 3, 2),
(207, 30, 4, 2),
(208, 30, 5, 1),
(209, 30, 6, 0),
(210, 30, 7, 1),
(211, 31, 1, 2),
(212, 31, 2, 2),
(213, 31, 3, 1),
(214, 31, 4, 2),
(215, 31, 5, 1),
(216, 31, 6, 0),
(217, 31, 7, 1),
(218, 32, 1, 2),
(219, 32, 2, 2),
(220, 32, 3, 1),
(221, 32, 4, 0),
(222, 32, 5, 0),
(223, 32, 6, 0),
(224, 32, 7, 1),
(225, 33, 1, 2),
(226, 33, 2, 0),
(227, 33, 3, 0),
(228, 33, 4, 0),
(229, 33, 5, 1),
(230, 33, 6, 1),
(231, 33, 7, 1),
(232, 34, 1, 1),
(233, 34, 2, 0),
(234, 34, 3, 2),
(235, 34, 4, 2),
(236, 34, 5, 1),
(237, 34, 6, 2),
(238, 34, 7, 2),
(239, 35, 1, 2),
(240, 35, 2, 0),
(241, 35, 3, 2),
(242, 35, 4, 0),
(243, 35, 5, 1),
(244, 35, 6, 0),
(245, 35, 7, 2),
(246, 36, 1, 2),
(247, 36, 2, 1),
(248, 36, 3, 1),
(249, 36, 4, 0),
(250, 36, 5, 1),
(251, 36, 6, 2),
(252, 36, 7, 1),
(253, 37, 1, 2),
(254, 37, 2, 1),
(255, 37, 3, 2),
(256, 37, 4, 0),
(257, 37, 5, 2),
(258, 37, 6, 0),
(259, 37, 7, 1),
(260, 38, 1, 2),
(261, 38, 2, 1),
(262, 38, 3, 1),
(263, 38, 4, 2),
(264, 38, 5, 1),
(265, 38, 6, 0),
(266, 38, 7, 1),
(267, 39, 1, 0),
(268, 39, 2, 1),
(269, 39, 3, 1),
(270, 39, 4, 2),
(271, 39, 5, 2),
(272, 39, 6, 0),
(273, 39, 7, 0),
(274, 40, 1, 2),
(275, 40, 2, 1),
(276, 40, 3, 0),
(277, 40, 4, 0),
(278, 40, 5, 0),
(279, 40, 6, 0),
(280, 40, 7, 1),
(281, 41, 1, 2),
(282, 41, 2, 2),
(283, 41, 3, 0),
(284, 41, 4, 0),
(285, 41, 5, 1),
(286, 41, 6, 2),
(287, 41, 7, 1),
(288, 42, 1, 2),
(289, 42, 2, 2),
(290, 42, 3, 1),
(291, 42, 4, 0),
(292, 42, 5, 1),
(293, 42, 6, 0),
(294, 42, 7, 2),
(295, 43, 1, 1),
(296, 43, 2, 1),
(297, 43, 3, 2),
(298, 43, 4, 2),
(299, 43, 5, 1),
(300, 43, 6, 0),
(301, 43, 7, 0),
(302, 44, 1, 1),
(303, 44, 2, 2),
(304, 44, 3, 0),
(305, 44, 4, 2),
(306, 44, 5, 1),
(307, 44, 6, 0),
(308, 44, 7, 2),
(309, 45, 1, 2),
(310, 45, 2, 2),
(311, 45, 3, 2),
(312, 45, 4, 0),
(313, 45, 5, 1),
(314, 45, 6, 2),
(315, 45, 7, 1),
(316, 46, 1, 2),
(317, 46, 2, 2),
(318, 46, 3, 2),
(319, 46, 4, 0),
(320, 46, 5, 2),
(321, 46, 6, 0),
(322, 46, 7, 1),
(323, 47, 1, 2),
(324, 47, 2, 1),
(325, 47, 3, 1),
(326, 47, 4, 2),
(327, 47, 5, 1),
(328, 47, 6, 0),
(329, 47, 7, 1),
(330, 48, 1, 2),
(331, 48, 2, 1),
(332, 48, 3, 1),
(333, 48, 4, 0),
(334, 48, 5, 2),
(335, 48, 6, 0),
(336, 48, 7, 1),
(337, 49, 1, 2),
(338, 49, 2, 1),
(339, 49, 3, 2),
(340, 49, 4, 0),
(341, 49, 5, 1),
(342, 49, 6, 0),
(343, 49, 7, 2),
(344, 50, 1, 2),
(345, 50, 2, 2),
(346, 50, 3, 1),
(347, 50, 4, 0),
(348, 50, 5, 1),
(349, 50, 6, 2),
(350, 50, 7, 1),
(351, 51, 1, 0),
(352, 51, 2, 1),
(353, 51, 3, 0),
(354, 51, 4, 2),
(355, 51, 5, 2),
(356, 51, 6, 2),
(357, 51, 7, 2),
(358, 52, 1, 0),
(359, 52, 2, 2),
(360, 52, 3, 1),
(361, 52, 4, 2),
(362, 52, 5, 1),
(363, 52, 6, 2),
(364, 52, 7, 2),
(365, 53, 1, 2),
(366, 53, 2, 0),
(367, 53, 3, 1),
(368, 53, 4, 0),
(369, 53, 5, 2),
(370, 53, 6, 0),
(371, 53, 7, 1),
(372, 54, 1, 1),
(373, 54, 2, 0),
(374, 54, 3, 1),
(375, 54, 4, 1),
(376, 54, 5, 1),
(377, 54, 6, 2),
(378, 54, 7, 2),
(379, 55, 1, 1),
(380, 55, 2, 0),
(381, 55, 3, 0),
(382, 55, 4, 2),
(383, 55, 5, 1),
(384, 55, 6, 2),
(385, 55, 7, 1),
(386, 56, 1, 0),
(387, 56, 2, 2),
(388, 56, 3, 1),
(389, 56, 4, 0),
(390, 56, 5, 2),
(391, 56, 6, 2),
(392, 56, 7, 2),
(393, 57, 1, 1),
(394, 57, 2, 1),
(395, 57, 3, 2),
(396, 57, 4, 1),
(397, 57, 5, 0),
(398, 57, 6, 0),
(399, 57, 7, 0),
(400, 58, 1, 2),
(401, 58, 2, 1),
(402, 58, 3, 1),
(403, 58, 4, 0),
(404, 58, 5, 1),
(405, 58, 6, 0),
(406, 58, 7, 1),
(407, 59, 1, 1),
(408, 59, 2, 0),
(409, 59, 3, 0),
(410, 59, 4, 2),
(411, 59, 5, 1),
(412, 59, 6, 2),
(413, 59, 7, 1),
(414, 60, 1, 0),
(415, 60, 2, 2),
(416, 60, 3, 2),
(417, 60, 4, 2),
(418, 60, 5, 0),
(419, 60, 6, 2),
(420, 60, 7, 1),
(421, 61, 1, 0),
(422, 61, 2, 1),
(423, 61, 3, 1),
(424, 61, 4, 1),
(425, 61, 5, 2),
(426, 61, 6, 1),
(427, 61, 7, 2),
(428, 62, 1, 1),
(429, 62, 2, 1),
(430, 62, 3, 0),
(431, 62, 4, 2),
(432, 62, 5, 1),
(433, 62, 6, 2),
(434, 62, 7, 1),
(435, 63, 1, 1),
(436, 63, 2, 1),
(437, 63, 3, 0),
(438, 63, 4, 2),
(439, 63, 5, 1),
(440, 63, 6, 2),
(441, 63, 7, 1),
(442, 64, 1, 1),
(443, 64, 2, 1),
(444, 64, 3, 2),
(445, 64, 4, 1),
(446, 64, 5, 1),
(447, 64, 6, 2),
(448, 64, 7, 1),
(449, 65, 1, 1),
(450, 65, 2, 1),
(451, 65, 3, 1),
(452, 65, 4, 1),
(453, 65, 5, 1),
(454, 65, 6, 1),
(455, 65, 7, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nbc_parameter`
--

CREATE TABLE `nbc_parameter` (
  `id_parameter` tinyint(3) UNSIGNED NOT NULL,
  `id_atribut` tinyint(3) UNSIGNED NOT NULL,
  `nilai` tinyint(3) UNSIGNED NOT NULL,
  `parameter` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nbc_parameter`
--

INSERT INTO `nbc_parameter` (`id_parameter`, `id_atribut`, `nilai`, `parameter`) VALUES
(82, 7, 2, 'gemuk'),
(81, 7, 1, 'ideal'),
(80, 7, 0, 'kurus'),
(79, 6, 2, 'diabetes'),
(78, 6, 1, 'prediabetes'),
(77, 6, 0, 'normal'),
(76, 5, 2, 'tinggi'),
(75, 5, 1, 'normal'),
(74, 5, 0, 'rendah'),
(73, 4, 2, 'tinggi'),
(72, 4, 1, 'batas tinggi'),
(71, 4, 0, 'normal'),
(70, 3, 2, 'berat'),
(69, 3, 1, 'ringan'),
(68, 3, 0, 'tidak'),
(67, 2, 2, 'tua'),
(66, 2, 1, 'dewasa'),
(65, 2, 0, 'muda'),
(64, 1, 2, 'aman'),
(63, 1, 1, 'kurang aman'),
(62, 1, 0, 'bahaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nbc_responden`
--

CREATE TABLE `nbc_responden` (
  `id_responden` tinyint(3) UNSIGNED NOT NULL,
  `responden` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nbc_responden`
--

INSERT INTO `nbc_responden` (`id_responden`, `responden`) VALUES
(48, 'Pekerja 48'),
(47, 'Pekerja 47'),
(46, 'Pekerja 46'),
(45, 'Pekerja 45'),
(44, 'Pekerja 44'),
(43, 'Pekerja 43'),
(42, 'Pekerja 42'),
(41, 'Pekerja 41'),
(40, 'Pekerja 40'),
(39, 'Pekerja 39'),
(38, 'Pekerja 38'),
(37, 'Pekerja 37'),
(36, 'Pekerja 36'),
(35, 'Pekerja 35'),
(34, 'Pekerja 34'),
(33, 'Pekerja 33'),
(32, 'Pekerja 32'),
(31, 'Pekerja 31'),
(30, 'Pekerja 30'),
(29, 'Pekerja 29'),
(28, 'Pekerja 28'),
(27, 'Pekerja 27'),
(26, 'Pekerja 26'),
(25, 'Pekerja 25'),
(24, 'Pekerja 24'),
(23, 'Pekerja 23'),
(22, 'Pekerja 22'),
(21, 'Pekerja 21'),
(20, 'Pekerja 20'),
(19, 'Pekerja 19'),
(18, 'Pekerja 18'),
(17, 'Pekerja 17'),
(16, 'Pekerja 16'),
(15, 'Pekerja 15'),
(14, 'Pekerja 14'),
(13, 'Pekerja 13'),
(12, 'Pekerja 12'),
(11, 'Pekerja 11'),
(10, 'Pekerja 10'),
(9, 'Pekerja 9'),
(8, 'Pekerja 8'),
(7, 'Pekerja 7'),
(6, 'Pekerja 6'),
(5, 'Pekerja 5'),
(4, 'Pekerja 4'),
(3, 'Pekerja 3'),
(2, 'Pekerja 2'),
(1, 'Pekerja 1'),
(49, 'Pekerja 49'),
(50, 'Pekerja 50'),
(51, 'Pekerja 51'),
(52, 'Pekerja 52'),
(53, 'Pekerja 53'),
(54, 'Pekerja 54'),
(55, 'Pekerja 55'),
(56, 'Pekerja 56'),
(57, 'Pekerja 57'),
(58, 'Pekerja 58'),
(59, 'Pekerja 59'),
(60, 'Pekerja 60'),
(61, 'Pekerja 61'),
(62, 'Pekerja 62'),
(63, 'Pekerja 63'),
(64, 'Pekerja 64'),
(65, 'Pekerja 65');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nbc_atribut`
--
ALTER TABLE `nbc_atribut`
  ADD PRIMARY KEY (`id_atribut`);

--
-- Indeks untuk tabel `nbc_data`
--
ALTER TABLE `nbc_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `nbc_parameter`
--
ALTER TABLE `nbc_parameter`
  ADD PRIMARY KEY (`id_parameter`);

--
-- Indeks untuk tabel `nbc_responden`
--
ALTER TABLE `nbc_responden`
  ADD PRIMARY KEY (`id_responden`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nbc_atribut`
--
ALTER TABLE `nbc_atribut`
  MODIFY `id_atribut` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nbc_data`
--
ALTER TABLE `nbc_data`
  MODIFY `id_data` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456;

--
-- AUTO_INCREMENT untuk tabel `nbc_parameter`
--
ALTER TABLE `nbc_parameter`
  MODIFY `id_parameter` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `nbc_responden`
--
ALTER TABLE `nbc_responden`
  MODIFY `id_responden` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
