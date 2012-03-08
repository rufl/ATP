-- --------------------------------------------------------
-- Host:                         192.168.56.101
-- Server version:               5.0.77 - Source distribution
-- Server OS:                    redhat-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-03-08 17:44:54
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for caketest
CREATE DATABASE IF NOT EXISTS `caketest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `caketest`;


-- Dumping structure for table caketest.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `type` enum('Evento','Milestone','Galeria') NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date_event` date NOT NULL,
  `image_path` text NOT NULL,
  `thumb_path` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Dumping data for table caketest.posts: 1 rows
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;