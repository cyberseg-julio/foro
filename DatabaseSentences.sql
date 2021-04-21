-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 01:43 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `description` text COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Web Programming', 0x466f72756d20706f73742061626f7574207765622070726f6772616d6d696e67206c696b65205048502c204e6f64652e4a532c204a4156412c20507974686f6e20657463),
(2, 'Web Design', 0x44657369676e696e672062656175746966756c207765622070616765732c20434d532c2070686f746f73686f702064657369676e20616e64206d6f7265);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `body` text COLLATE utf16_bin NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=18 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `topic_id`, `user_id`, `body`, `create_date`) VALUES
(1, 2, 2, 0x506572736f6e616c6c792c2049207374617274656420746f206c6f6f6b20617420736f6d65206578616d706c657320616e642061667465722049206275696c6420736f6d65206372617070792073697465732c2049206c6561726e65642071756974652077656c6c2e2041732061207265636f6d6d656e647461696f6e2c20796f752063616e20636865636b20687474703a2f2f7777772e77337363686f6f6c732e636f6d2e2054686520736974652069732070726574747920636f6d706c657465, '2015-01-17 05:10:17'),
(2, 2, 1, 0x54686174207761732067726561742068656172696e6720746861742066726f6d20796f7520416d72697421, '2015-01-17 05:10:17'),
(3, 4, 2, 0x48544d4c20616e6420435353206172652062617369632e205468657265206973206e6f74206d75636820696e207468656d20746f206c6561726e2e204c6561726e696e6720686f7720626173696320656c656d656e747320696e74657261637420697320746865206d6f737420636f6d706c6578207061727420696e636c7564696e672063726f73732d62726f7773657220636f6d7061746962696c697479, '2015-01-17 05:15:21'),
(4, 3, 1, 0x48544d4c20616e6420435353206172652062617369632e205468657265206973206e6f74206d75636820696e207468656d20746f206c6561726e2e204c6561726e696e6720686f7720626173696320656c656d656e747320696e74657261637420697320746865206d6f737420636f6d706c6578207061727420696e636c7564696e672063726f73732d62726f7773657220636f6d7061746962696c697479, '2015-01-17 05:15:21'),
(5, 3, 2, 0x5468657265206973206e6f74206d75636820696e207468656d20746f206c6561726e2e204c6561726e696e6720686f7720626173696320656c656d656e747320696e74657261637420697320746865206d6f737420636f6d706c6578207061727420696e636c7564696e672063726f73732d62726f7773657220636f6d7061746962696c6974792e, '2015-01-17 05:15:21'),
(6, 3, 1, 0x4c6561726e696e6720686f7720626173696320656c656d656e747320696e74657261637420697320746865206d6f737420636f6d706c6578207061727420696e636c7564696e672063726f73732d62726f7773657220636f6d7061746962696c6974792e, '2015-01-17 05:15:21'),
(7, 1, 2, 0x4920646f6e277420756e6465727374616e64207768617420796f75206172652074656c6c696e67206d6520746f207265706c793f, '2015-01-17 05:15:21'),
(8, 1, 2, 0x546865207175657374696f6e20697320737570657220636c6561722e20596f75206e65656420746f2072656164207175657374696f6e20616761696e20616e6420616761696e20756e74696c20796f7520756e6465727374616e64, '2015-01-17 05:15:21'),
(9, 4, 2, 0x492068617665204e65766572206865617264206f662053746f7265642070726f636564757265732e20576861742061726520746865792061637475616c6c793f, '2015-01-17 05:15:21'),
(10, 4, 2, 0x446f65732050485020737570706f72742074726967676572733f204920646f6e2774207468696e6b207468657920646f2e, '2015-01-17 05:15:21'),
(11, 4, 1, 0x547269676765727320617265206e6f742072656c6174656420746f205048502e2054686579206172652072656c6174656420746f204d7973716c, '2015-01-17 05:15:21'),
(12, 4, 1, 0x446566696e6974656c79206d7973716c20646f20737570706f72742054726967676572732e205468652066756e6374696f6e616c69747920776173206164646564206166746572206d7973716c2076657273696f6e20352e, '2015-01-17 05:15:21'),
(13, 6, 1, 0x48544d4c3520616e642043535333206973206e657765722076657273696f6e206f6620726567756c61722048544d4c20616e64204353532e20546865736520737570706f7274206d616e79206e657720656e68616e63656d656e74732c20776869636820776f756c642074616b65207665727920636f6d706c65782070726f6772616d6d696e67206f74686572776973652e2048544d4c35206665617475726573206e6577206461746120747970657320696e20696e70757420666f726d732c20566964656f20616e64206d616e79206d6f72652e204353533320636f6e7461696e732061206c6f6164206f66206e6577207374796c696e67206f7074696f6e732e, '2015-01-18 04:09:30'),
(14, 5, 1, 0x4f626a656374206f7269656e7465642070726f6772616d6d696e6720616e642050726f6365647572616c2070726f6772616d6d696e672061726520737570706f72746564206279206d6f7374206f66207468652077656220736372697074696e67206c616e67756167657320696e636c7564696e67205048502e20, '2015-01-18 04:09:30'),
(15, 5, 2, 0x5768696368206f6e652073686f756c64207765207573653f, '2015-01-18 04:09:30'),
(16, 5, 1, 0x596f752063616e2075736520616e79206f6e65206163636f7264696e6720746f20796f757220726571756972656d656e74732e20496620796f75722070726f6a65637420697320736d616c6c657220616e64206f6e6c79206e65656473206665776572206c696e6573206f6620636f6465732c20796f752063616e207573652070726f6365647572616c207374796c652e20496620796f75206e656564206d6f726520636f6d706c696361746564207374727563747572652c204f4f20697320726571756972656420746f206d616e6167652074686520636f6d706c65786974792e, '2015-01-18 04:09:30'),
(17, 5, 3, 0x466f7220616e64206578616d706c6520444220636f6e6e656374696f6e207468726f756768204f4f2050444f206973206d75636820626574746572207468616e207573696e67206d7973716c692e20596f752063616e207265757365204f4f20636c617373657320617661696c61626c6520696e20696e7465726e657420746f206d616b6520796f75722070726f6a656374207661727920666173742e, '2015-01-18 04:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf16_bin NOT NULL,
  `body` text COLLATE utf16_bin NOT NULL,
  `last_activity` datetime NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `category_id`, `user_id`, `title`, `body`, `last_activity`, `create_date`) VALUES
(1, 1, 1, 'Favourite Server-Side Language', 0x5768617420697320796f7572206661766f72697465207365727665722d73696465206c616e677561676520616e64207768793f, '0000-00-00 00:00:00', '2015-01-16 10:52:39'),
(2, 2, 1, 'How did you Learn CSS and HTML?', 0x446976696e6720696e746f2043535320616e642048544d4c2064657369676e20616e6420646576656c6f706d656e7420697320656173792c20686f7765766572206c6561726e696e6720697420746f2070657266656374696f6e2069732076657279206461756e74696e67207461736b2e20486f772064696420796f75206c6561726e2043535320616e642048544d4c3f20486f772061626f7574206c6561726e696e672048544d4c35207769746820435353333f205768617420776572652074686520736f7572636573207468617420796f7520676f7420696e666f726d6174696f6e2061626f75742069743f, '0000-00-00 00:00:00', '2015-01-16 10:52:39'),
(3, 1, 1, 'Photoshop design to Web Page', 0x5768617420697320796f7572206661766f72697465206d65737361676520746f206368616e676520612050686f746f73686f702064657369676e20746f20612062656175746966756c20776562736974653f, '0000-00-00 00:00:00', '2015-01-16 11:07:30'),
(4, 2, 1, 'Mysql Triggers and Stored Procedures', 0x43616e20776520777269746520747269676765727320616e642073746f7265642070726f6365647572657320696e204d5953716c3f20486f7720746f207772697465207468617420696620697420697320706f737369626c653f20, '0000-00-00 00:00:00', '2015-01-16 11:07:30'),
(5, 2, 2, 'Object oriented scripting vs procedural', 0x43616e20776520757365206f626a656374206f7269656e74656420736372697074696e67206c616e677561676520696e20776562206170706c69636174696f6e3f20576869636820746f6f6c732061726520617661696c61626c653f20576861742069732074686520646966666572656e6365206265747765656e2074686573652074776f3f2077686963682069732065617369657220616e64207768617420646f206d6f7374206f662074686520646576656c6f70657273207573653f, '0000-00-00 00:00:00', '2015-01-18 04:01:38'),
(6, 2, 2, 'HTML5 and CSS3', 0x492068617665206865617264206c6f7473206f662062757a7a2061626f75742068746d6c3520616e6420435353332e20576861742061726520746865792061637475616c6c793f20417265207468657920636f6d706c6574656c7920646966666572656e74207468616e2073696d706c652048544d4c20616e64204353532074686174207765207573653f2057686572652063616e207765206c6561726e2069743f, '0000-00-00 00:00:00', '2015-01-18 04:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf16_bin NOT NULL,
  `email` varchar(100) COLLATE utf16_bin NOT NULL,
  `avatar` varchar(100) COLLATE utf16_bin NOT NULL,
  `username` varchar(20) COLLATE utf16_bin NOT NULL,
  `password` varchar(64) COLLATE utf16_bin NOT NULL,
  `about` text COLLATE utf16_bin NOT NULL,
  `last_activity` datetime NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `username`, `password`, `about`, `last_activity`, `join_date`) VALUES
(1, 'Prabhu Bhakta', 'dprabin@yahoo.com', 'dprabin.jpg', 'dprabin', 'dprabin', 0x4920616d20612070726f6772616d6d65722c2073797374656d2041646d696e2c2077656220646576656c6f7065722066726f6d204e6570616c2e, '0000-00-00 00:00:00', '2015-01-16 10:43:37'),
(2, 'Amrit Man', 'amritms@gmail.com', 'amritms.jpg', 'amritms', 'amritms', 0x4920616d205048502070726f6772616d6d6572206174204b6174686d616e64752c204e6570616c, '0000-00-00 00:00:00', '2015-01-17 05:08:22'),
(3, 'Ramesh Bhusal', 'vol222@gmail.com', 'rkbhushal.jpg', 'rkbhushal', 'rkbhushal', 0x4920616d2061207075626c69736865722c20696e746572657374656420696e207075626c697368696e67206d79207075626c69636174696f6e73206279207573696e672077656220746563686e6f6c6f676965732e, '0000-00-00 00:00:00', '2015-01-18 04:11:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;