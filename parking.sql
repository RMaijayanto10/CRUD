-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table parking.manageadmins: ~1 rows (approximately)
/*!40000 ALTER TABLE `manageadmins` DISABLE KEYS */;
REPLACE INTO `manageadmins` (`id`, `nama`, `pass`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES
	(2, 'Muhammad Rifai', '1q2w3e4r5t6y', '02188888888', 'Jl. Batu Ampar V Rt.007/02 no.42', '2015-05-10 02:49:27', '2015-05-10 02:49:27'),
	(3, 'Ris Maijayanto', '123', '085691914685', 'Jl H. Sulaiman Rt.011/02 No.42 Cipinang Melayu Jakarta Timur', '2015-05-10 04:59:52', '2015-05-10 04:59:52'),
	(4, 'Admin', 'Admin', '000', 'kosong', '2015-05-10 05:00:39', '2015-05-10 05:00:39'),
	(5, 'Golden', 'Golden', '111', 'kosong', '2015-05-10 05:01:38', '2015-05-10 05:01:38');
/*!40000 ALTER TABLE `manageadmins` ENABLE KEYS */;

-- Dumping data for table parking.manageofficers: ~1 rows (approximately)
/*!40000 ALTER TABLE `manageofficers` DISABLE KEYS */;
REPLACE INTO `manageofficers` (`id`, `nama`, `pass`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES
	(2, 'Muhammad Rifai', '1q2w3e4r5t6y', '0218888888', 'Jl. Batu Ampar V Rt.007/02 no.42', '2015-05-10 02:49:07', '2015-05-10 02:49:07'),
	(3, 'Ris Maijayanto', '12345', '085691914685', 'Jl H.Sulaiman Rt.011/02 No.42 Cipinang Melayu Jakarta Timur', '2015-05-10 05:03:07', '2015-05-10 05:03:07');
/*!40000 ALTER TABLE `manageofficers` ENABLE KEYS */;

-- Dumping data for table parking.manageusers: ~0 rows (approximately)
/*!40000 ALTER TABLE `manageusers` DISABLE KEYS */;
REPLACE INTO `manageusers` (`id`, `nama`, `pass`, `noplat`, `alamat`, `nosim`, `jenissim`, `telp`, `created_at`, `updated_at`) VALUES
	(2, 'Muhammad Rifai', '1q2w3e4r5t6y', 'B6969SEX', 'Jl. Batu Ampar V Rt.007/02 no.42', '90120921093', 'B', '0218888888', '2015-05-10 02:48:33', '2015-05-10 02:48:33'),
	(3, 'Ris Maijayanto', 'apa27may05jayanto1997', 'B4919TBI', 'jakarta', '90120921093', 'C', '0218520789', '2015-05-10 04:06:18', '2015-05-10 04:06:18'),
	(4, 'heru', '12345', 'B6767SI', 'Jakarta', '123908279912', 'A', '0102909', '2015-05-10 09:28:47', '2015-05-10 09:28:47');
/*!40000 ALTER TABLE `manageusers` ENABLE KEYS */;

-- Dumping data for table parking.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`migration`, `batch`) VALUES
	('2015_05_09_132732_adminn', 1),
	('2015_05_09_132814_officerr', 1),
	('2015_05_09_132836_userr', 1),
	('2015_05_10_001610_officerr', 2),
	('2015_05_10_010413_userr', 3),
	('2015_05_10_020602_userr', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
