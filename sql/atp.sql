-- MySQL dump 10.13  Distrib 5.1.61, for redhat-linux-gnu (i386)
--
-- Host: localhost    Database: caketest
-- ------------------------------------------------------
-- Server version	5.1.61

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('Evento','Milestone','Galeria') NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date_event` date NOT NULL,
  `image_path` text NOT NULL,
  `thumb_path` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (47,'Evento','Configuração e Instalação física equipamento VPN','<p>Configura&ccedil;&atilde;o e Instala&ccedil;&atilde;o f&iacute;sica equipamento VPN</p>','2012-01-27','/files/uploads/425dde0939142e1c2d87d565ca3f91.jpg','/files/uploads/425dde0939142e1c2d87d565ca3f91_resized_320x200.jpg','2012-03-08 09:38:37','2012-03-15 03:16:31'),(48,'Evento','Aceite Instalação 02 equipamentos Storage (VNX 5300)','<p>Aceite Instala&ccedil;&atilde;o 02 equipamentos Storage (VNX 5300)</p>','2012-01-02','','','2012-03-08 09:47:47','2012-03-08 09:47:47'),(49,'Evento','Otimização Processo Deploy (novo template)','<p>Otimiza&ccedil;&atilde;o Processo Deploy (novo template)</p>','2012-01-03','','','2012-03-08 09:53:51','2012-03-08 09:53:51'),(50,'Evento','Exame Indicadores (com Book completo)','<p>Exame Indicadores (com Book completo)</p>','2012-01-04','','','2012-03-08 09:55:25','2012-03-08 09:55:25'),(51,'Evento','Semanas de Moda - ModaSpot / Elle / Estilo / Manequim OK durante evento','<p>Semanas de Moda - ModaSpot / Elle / Estilo / Manequim OK durante evento</p>','2012-01-05','','','2012-03-08 09:58:06','2012-03-08 09:58:06'),(52,'Evento','IBA - Entrada de Arquiteto para atuar no backlog estabelecido','<p>IBA - Entrada de Arquiteto para atuar no backlog estabelecido</p>','2012-01-06','','','2012-03-08 09:59:21','2012-03-08 09:59:21'),(53,'Evento','Virtualização - 05 Servidores ligados no DC','<p>Virtualiza&ccedil;&atilde;o - 05 Servidores ligados no DC</p>','2012-01-07','','','2012-03-08 10:03:40','2012-03-08 10:05:15'),(54,'Evento','Análise investigativa lentidão Veja (Search)','<p>An&aacute;lise investigativa lentid&atilde;o Veja (Search)</p>','2012-01-08','','','2012-03-08 10:07:10','2012-03-08 10:07:10'),(55,'Evento','Invasões Blogs Veja','<p>Invas&otilde;es Blogs Veja</p>','2012-01-09','','','2012-03-08 10:19:50','2012-03-08 10:19:50');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-16 19:42:49
