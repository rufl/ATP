-- --------------------------------------------------------
-- Host:                         192.168.246.128
-- Server version:               5.1.61-0ubuntu0.10.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-03-29 19:35:49
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for caketest
CREATE DATABASE IF NOT EXISTS `caketest` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `caketest`;


-- Dumping structure for table caketest.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('Evento','Milestone','Galeria') NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date_event` date NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `thumb_path` varchar(255) NOT NULL,
  `preview_path` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- Dumping data for table caketest.posts: 9 rows
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `type`, `title`, `body`, `date_event`, `image_path`, `thumb_path`, `preview_path`, `created`, `modified`) VALUES
	(47, 'Galeria', 'Configuração e Instalação física equipamento VPN', '<p>Configura&ccedil;&atilde;o e Instala&ccedil;&atilde;o f&iacute;sica equipamento VPN</p>', '2011-12-26', '', '', '', '2012-03-08 09:38:37', '2012-03-26 20:44:04'),
	(48, 'Evento', 'Aceite Instalação 02 equipamentos Storage (VNX 5300)', '<p>Aceite Instala&ccedil;&atilde;o 02 equipamentos Storage (VNX 5300)</p>', '2012-01-01', '', '', '', '2012-03-08 09:47:47', '2012-03-19 19:49:55'),
	(49, 'Evento', 'Otimização Processo Deploy (novo template)', '<p>Otimiza&ccedil;&atilde;o Processo Deploy (novo template)</p>', '2012-01-02', '', '', '', '2012-03-08 09:53:51', '2012-03-19 20:49:04'),
	(50, 'Evento', 'Exame Indicadores (com Book completo)', '<p>Exame Indicadores (com Book completo)</p>', '2012-01-04', '', '', '', '2012-03-08 09:55:25', '2012-03-08 09:55:25'),
	(51, 'Evento', 'Semanas de Moda - ModaSpot / Elle / Estilo / Manequim OK durante evento', '<p>Semanas de Moda - ModaSpot / Elle / Estilo / Manequim OK durante evento</p>', '2012-01-05', '', '', '', '2012-03-08 09:58:06', '2012-03-08 09:58:06'),
	(52, 'Evento', 'IBA - Entrada de Arquiteto para atuar no backlog estabelecido', '<p>IBA - Entrada de Arquiteto para atuar no backlog estabelecido</p>', '2012-01-06', '', '', '', '2012-03-08 09:59:21', '2012-03-08 09:59:21'),
	(53, 'Evento', 'Virtualização - 05 Servidores ligados no DC', '<p>Virtualiza&ccedil;&atilde;o - 05 Servidores ligados no DC</p>', '2012-01-07', '', '', '', '2012-03-08 10:03:40', '2012-03-08 10:05:15'),
	(54, 'Evento', 'Análise investigativa lentidão Veja (Search)', '<p>An&aacute;lise investigativa lentid&atilde;o Veja (Search)</p>', '2012-01-08', '', '', '', '2012-03-08 10:07:10', '2012-03-08 10:07:10'),
	(55, 'Evento', 'Invasões Blogs Veja', '<p>Invas&otilde;es Blogs Veja</p>', '2012-01-09', '', '', '', '2012-03-08 10:19:50', '2012-03-08 10:19:50');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
