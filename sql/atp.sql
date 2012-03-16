-- --------------------------------------------------------
-- Host:                         192.168.56.101
-- Server version:               5.0.77 - Source distribution
-- Server OS:                    redhat-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-02-17 19:32:25
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
  `type` enum('Foto','Noticia','Milestone') NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date_event` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table caketest.posts: 1 rows
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `type`, `title`, `body`, `date_event`, `created`, `modified`) VALUES
	(21, 'Noticia', '2Lorem ipsum dolor sit amet, consectetur adipiscing elit.2', '<p><span style="font-size: large;"><span style="font-family: \'arial black\', \'avant garde\';">Aliquam</span> pell<span style="background-color: #33cccc;">entesque purus porta mi luctus venenatis in et neque. Lo</span>rem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;Vestibulum sit amet tortor felis, eget co<span style="background-color: #0000ff;">ngue ante. Donec fermentum semper ante eget bibendum.</span>&nbsp;&nbsp;</span><br /><br /><span style="background-color: #ff0000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lacus ligula, dictum at porta ut, ullamcorper a risus. Nunc ut leo lacus, eleifend fermentum urna. Mauris vel erat sit amet ante semper tincidunt at sit amet massa.</span><br /><br /><span style="background-color: #ff0000;">Pellentesque nibh dolor, ultrices nec scelerisque vel, consectetur in mauris. Nulla felis dui, molestie nec pretium vel, sodale</span>s vitae sapien.</p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: x-large; font-family: impact,chicago;">&scaron;&otilde;&epsilon;&aacute;&aelig;&Iacute;&dagger;&agrave;&minus;&deg;&tilde;&permil;&middot;&Iuml;&Yuml;&Uuml;&ouml;&Euml;sdfsdfsdf</span></p>\r\n<p>sdf</p>\r\n<p>http://www.uol.com.br</p>', '2012-02-13', '2012-02-10 03:19:04', '2012-02-16 07:33:40');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Dumping database structure for testlab
CREATE DATABASE IF NOT EXISTS `testlab` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `testlab`;


-- Dumping structure for table testlab.timeline
CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(6) unsigned NOT NULL auto_increment,
  `type` enum('image','news','milestone') collate utf8_unicode_ci NOT NULL default 'news',
  `title` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `body` text collate utf8_unicode_ci NOT NULL,
  `date_event` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table testlab.timeline: 10 rows
/*!40000 ALTER TABLE `timeline` DISABLE KEYS */;
INSERT INTO `timeline` (`id`, `type`, `title`, `body`, `date_event`) VALUES
	(1, 'news', 'Introducing the all-new event timeline', 'This is a demo for a Tutorialzine tutorial. You can slide through all of the events on the timeline and click the ones you are interested in.\r\n\r\nThe timeline is dynamically build according to records in the MySQL database, so inserting new events is as easy as inserting a new row to the table.\r\n\r\nFeel free to leave your comments on the tutorial homepage (links are provided at the top and bottom of this demo).\r\n\r\nHave a great stay!', '2004-01-02'),
	(2, 'news', 'First meeting with venture capitalists', 'Soon after, our Company Co was founded!\r\n\r\nBe sure to check the rest of our company history in the time line :)', '2004-08-02'),
	(3, 'image', 'Started our famous Free Vacation With Every Purchase Campaign', 'img/machu-picchu.jpg', '2005-06-17'),
	(4, 'milestone', '2000 million in profits for the second quarter', 'For our main competitors.\r\n\r\nIt is not that bad for Company Co though, at least we moved to a bigger garage.', '2008-03-26'),
	(5, 'news', 'A huge upgrade to the servers', 'During a scheduled maintenance to the hardware, the engineering team discovered that the server farm has been powered by hamster wheels all along.\r\n\r\nThanks to their fast reactions and professionalism, additional hamster wheels where installed in order to accommodate the next generation of servers.', '2008-04-03'),
	(6, 'news', 'A Corporate organ donor campaign', 'The management team decided to start company-wide organ donation campaign.\r\n\r\nAll the employees are obliged to participate.\r\n\r\nIn typical managerial style, we have a deadline till the end of the month to deliver a liver, two hearts and four kidneys.', '2009-11-17'),
	(7, 'news', 'Petting zoo grand opening', 'Here at Company Co we love children. This is why we organized a free Petting zoo weekend at the park.\r\n\r\nHowever the company was having some financial difficulties, so we had to apply some restrictions.\r\n\r\nThe llamas were plush and our interface designer, John, was dressed as a panda.', '2010-01-02'),
	(8, 'news', 'Moving in', 'The company rented a garage right next to the one that Google started from.\r\n\r\nThe CEO is certain that this means guaranteed success.\r\n\r\nOnly if we could drive out the old Dodge that occupies the space inside. It smells funny.', '2004-09-03'),
	(9, 'image', 'The Company HQ', 'img/google_garage.jpg', '2004-10-25'),
	(10, 'news', 'Voted the startup with best support', 'A fantastic achievement given that our only tech support guy doesn\'t speak English.\r\n\r\nGuess the other companies\' support is really bad.', '2005-09-14');
/*!40000 ALTER TABLE `timeline` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
