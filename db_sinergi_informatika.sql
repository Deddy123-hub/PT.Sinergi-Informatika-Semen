-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 05:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sinergi_informatika`
--

-- --------------------------------------------------------

--
-- Table structure for table `i_error_application`
--

CREATE TABLE `i_error_application` (
  `ERROR_ID` int(11) NOT NULL,
  `ID_USER` varchar(30) DEFAULT NULL,
  `ERROR_DATE` varchar(30) DEFAULT NULL,
  `MODULUS` varchar(100) DEFAULT NULL,
  `CONTROLLER` varchar(200) DEFAULT NULL,
  `FUNCTION_NAME` varchar(200) DEFAULT NULL,
  `ERROR_LINE` varchar(30) DEFAULT NULL,
  `ERROR_MESSAGE` varchar(1000) DEFAULT NULL,
  `STATUS` varchar(30) DEFAULT NULL,
  `PARAM` varchar(300) DEFAULT NULL,
  `CREATE_DATE` varchar(30) DEFAULT NULL,
  `CREATE_TIME` timestamp NOT NULL DEFAULT current_timestamp(),
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'manager'),
(2, 'staf');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL,
  `no_hp` int(10) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `id_jabatan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `no_hp`, `alamat`, `id_jabatan`) VALUES
(1, 'Indah', 2147483647, 'Jakartaa', NULL),
(3, 'dwisaputra', 11122333, 'bandung122', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `activity_type` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MENU_ID` varchar(3) NOT NULL,
  `ID_LEVEL` varchar(3) DEFAULT NULL,
  `MENU_NAME` varchar(300) DEFAULT NULL,
  `MENU_LINK` varchar(300) DEFAULT NULL,
  `MENU_ICON` varchar(300) DEFAULT NULL,
  `PARENT_ID` varchar(30) DEFAULT NULL,
  `CREATE_BY` varchar(30) DEFAULT NULL,
  `CREATE_DATE` date DEFAULT NULL,
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MENU_ID`, `ID_LEVEL`, `MENU_NAME`, `MENU_LINK`, `MENU_ICON`, `PARENT_ID`, `CREATE_BY`, `CREATE_DATE`, `DELETE_MARK`, `UPDATE_BY`, `UPDATE_DATE`) VALUES
('001', '001', 'Gallery 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('002', '002', 'Gallery 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_level`
--

CREATE TABLE `menu_level` (
  `ID_LEVEL` varchar(3) NOT NULL,
  `LEVEL` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_level`
--

INSERT INTO `menu_level` (`ID_LEVEL`, `LEVEL`) VALUES
('001', 'superadmin'),
('002', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu_user`
--

CREATE TABLE `menu_user` (
  `NO_SETTING` int(11) NOT NULL,
  `ID_USER` varchar(30) DEFAULT NULL,
  `MENU_ID` varchar(3) DEFAULT NULL,
  `CREATE_DATE` varchar(30) DEFAULT NULL,
  `CREATE_TIME` timestamp NOT NULL DEFAULT current_timestamp(),
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` varchar(30) NOT NULL,
  `USERNAME` varchar(60) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `WA` varchar(30) DEFAULT NULL,
  `PIN` varchar(30) NOT NULL,
  `ID_JENIS_USER` varchar(3) DEFAULT NULL,
  `STATUS_USER` varchar(30) DEFAULT NULL,
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `CREATE_BY` varchar(30) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME`, `PASSWORD`, `EMAIL`, `WA`, `PIN`, `ID_JENIS_USER`, `STATUS_USER`, `DELETE_MARK`, `CREATE_BY`, `CREATE_DATE`, `UPDATE_BY`, `UPDATE_DATE`) VALUES
('USER001', 'Deddy Supariandi', '12345', 'deddysup12@gmail.com', '086637722', '334455', NULL, NULL, NULL, NULL, '2024-02-08 13:11:28', NULL, '2024-02-08 13:11:28'),
('USER003', 'indah', '21233e31', 'Dededy@Gmail.com', '343434', '21212', NULL, NULL, NULL, NULL, '2024-02-11 16:05:01', NULL, '2024-02-11 16:05:01'),
('USER004', 'dede', '22wdww', 'Dededeedy@Gmail.com', '1221123', '232344', NULL, NULL, NULL, NULL, '2024-02-11 16:13:55', NULL, '2024-02-11 16:13:55');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `log_user_delete` AFTER DELETE ON `user` FOR EACH ROW INSERT INTO user_activity SET
ID_USER = ID_USER,
DESKRIPSI = 'Delete DATA'
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `log_user_insert` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO user_activity SET
ID_USER = new.ID_USER,
DESKRIPSI = 'Input DATA'
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `NO_ACTIVITY` int(11) NOT NULL,
  `ID_USER` varchar(30) DEFAULT NULL,
  `DESKRIPSI` varchar(300) DEFAULT NULL,
  `STATUS` varchar(30) DEFAULT NULL,
  `MENU_ID` varchar(3) DEFAULT NULL,
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `CREATE_BY` varchar(30) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_foto`
--

CREATE TABLE `user_foto` (
  `NO_FOTO` int(11) NOT NULL,
  `ID_USER` varchar(30) DEFAULT NULL,
  `FOTO` varchar(30) DEFAULT NULL,
  `CREATE_BY` varchar(30) DEFAULT NULL,
  `CREATE_DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  `DELETE_MARK` varchar(1) DEFAULT NULL,
  `UPDATE_BY` varchar(30) DEFAULT NULL,
  `UPDATE_DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `i_error_application`
--
ALTER TABLE `i_error_application`
  ADD PRIMARY KEY (`ERROR_ID`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MENU_ID`),
  ADD KEY `ID_LEVEL` (`ID_LEVEL`);

--
-- Indexes for table `menu_level`
--
ALTER TABLE `menu_level`
  ADD PRIMARY KEY (`ID_LEVEL`);

--
-- Indexes for table `menu_user`
--
ALTER TABLE `menu_user`
  ADD PRIMARY KEY (`NO_SETTING`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `MENU_ID` (`MENU_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indexes for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`NO_ACTIVITY`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Indexes for table `user_foto`
--
ALTER TABLE `user_foto`
  ADD PRIMARY KEY (`NO_FOTO`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `i_error_application`
--
ALTER TABLE `i_error_application`
  MODIFY `ERROR_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_user`
--
ALTER TABLE `menu_user`
  MODIFY `NO_SETTING` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `NO_ACTIVITY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_foto`
--
ALTER TABLE `user_foto`
  MODIFY `NO_FOTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `i_error_application`
--
ALTER TABLE `i_error_application`
  ADD CONSTRAINT `i_error_application_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`ID_LEVEL`) REFERENCES `menu_level` (`ID_LEVEL`);

--
-- Constraints for table `menu_user`
--
ALTER TABLE `menu_user`
  ADD CONSTRAINT `menu_user_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `menu_user_ibfk_2` FOREIGN KEY (`MENU_ID`) REFERENCES `menu` (`MENU_ID`);

--
-- Constraints for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD CONSTRAINT `user_activity_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `user_foto`
--
ALTER TABLE `user_foto`
  ADD CONSTRAINT `user_foto_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
