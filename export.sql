-- Minifp MySQL Dump - généré le samedi 09 avril 2016 à 15:51 --

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
DROP DATABASE IF EXISTS `minifp`;
CREATE DATABASE `minifp`;
USE `minifp`;
--
-- Base: `minifp`
--

-- --------------------------------------------------------


--
-- Structure de la table `insedfdsrt`
--

CREATE TABLE `insedfdsrt` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `insedfdsrt`
--



--
-- Structure de la table `insert`
--

CREATE TABLE `insert` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `age` int(11) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `isMale` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;


--
-- Données de la table `insert`
--

INSERT INTO `insert` VALUES ('1','3','toto','0');
INSERT INTO `insert` VALUES ('2','3','insert','0');
INSERT INTO `insert` VALUES ('3','0','insert','0');
INSERT INTO `insert` VALUES ('4','0','insert','0');
INSERT INTO `insert` VALUES ('5','0','insert','0');
INSERT INTO `insert` VALUES ('6','0','insert','0');
INSERT INTO `insert` VALUES ('7','0','toto','0');
INSERT INTO `insert` VALUES ('8','3','','0');
INSERT INTO `insert` VALUES ('9','0','','0');
INSERT INTO `insert` VALUES ('10','0','toto','0');
INSERT INTO `insert` VALUES ('11','4','toto','0');
INSERT INTO `insert` VALUES ('12','621','qwAwCpLeTv','0');
INSERT INTO `insert` VALUES ('13','339','rLbhUrIOlE','1');
INSERT INTO `insert` VALUES ('14','3','Rvsojt0K0B','0');
INSERT INTO `insert` VALUES ('15','133','IFMRwLSo3U','0');
INSERT INTO `insert` VALUES ('16','759','MM4cYzLArj','0');
INSERT INTO `insert` VALUES ('17','428','eIMuyMChrp','0');
INSERT INTO `insert` VALUES ('18','5','','0');
INSERT INTO `insert` VALUES ('19','0','','0');
INSERT INTO `insert` VALUES ('20','0','','0');
INSERT INTO `insert` VALUES ('21','0','','0');
INSERT INTO `insert` VALUES ('22','5','','0');
INSERT INTO `insert` VALUES ('23','0','','0');
INSERT INTO `insert` VALUES ('24','','','0');
INSERT INTO `insert` VALUES ('25','','','1');
INSERT INTO `insert` VALUES ('26','','','0');
INSERT INTO `insert` VALUES ('27','','','1');
INSERT INTO `insert` VALUES ('28','','','1');
INSERT INTO `insert` VALUES ('29','','','0');
INSERT INTO `insert` VALUES ('30','','','0');
INSERT INTO `insert` VALUES ('31','5','','0');
INSERT INTO `insert` VALUES ('32','50','','0');
INSERT INTO `insert` VALUES ('33','50','','0');
INSERT INTO `insert` VALUES ('34','0','','0');
INSERT INTO `insert` VALUES ('35','0','','0');
INSERT INTO `insert` VALUES ('36','0','','0');
INSERT INTO `insert` VALUES ('37','54','','0');


--
-- Structure de la table `newtable`
--

CREATE TABLE `newtable` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gsdf` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `newtable`
--



--
-- Structure de la table `newtable22`
--

CREATE TABLE `newtable22` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gsdf` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `newtable22`
--



--
-- Structure de la table `rollback`
--

CREATE TABLE `rollback` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `toto` int(11) DEFAULT NULL,
  `toto2` int(11) DEFAULT NULL,
  `toto4` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `rollback`
--



--
-- Structure de la table `rollback2`
--

CREATE TABLE `rollback2` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `toto` int(11) DEFAULT NULL,
  `toto2` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `rollback2`
--



--
-- Structure de la table `rollback3`
--

CREATE TABLE `rollback3` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `toto` int(11) DEFAULT NULL,
  `toto2` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `rollback3`
--



--
-- Structure de la table `rollback54`
--

CREATE TABLE `rollback54` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `toto` int(11) DEFAULT NULL,
  `toto2` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `rollback54`
--



--
-- Structure de la table `rollfdbacfdffk54`
--

CREATE TABLE `rollfdbacfdffk54` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tot54` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `rollfdbacfdffk54`
--



--
-- Structure de la table `s4u4fdsfs55u`
--

CREATE TABLE `s4u4fdsfs55u` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `age356` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `age2` int(11) DEFAULT NULL,
  `age3` varchar(255) DEFAULT NULL,
  `age356ji` int(11) DEFAULT NULL,
  `agytye` int(11) DEFAULT NULL,
  `agythgye` int(11) DEFAULT NULL,
  `agythhggye` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `s4u4fdsfs55u`
--



--
-- Structure de la table `s4u4s55u`
--

CREATE TABLE `s4u4s55u` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `age356` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `age2` int(11) DEFAULT NULL,
  `age3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `s4u4s55u`
--



--
-- Structure de la table `s4u4s5u`
--

CREATE TABLE `s4u4s5u` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `age356` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `s4u4s5u`
--



--
-- Structure de la table `s4u4su`
--

CREATE TABLE `s4u4su` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `age356` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `s4u4su`
--



--
-- Structure de la table `s4usu`
--

CREATE TABLE `s4usu` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `age356` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `s4usu`
--



--
-- Structure de la table `susu`
--

CREATE TABLE `susu` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `age` varchar(255) DEFAULT NULL,
  `age2` varchar(255) DEFAULT NULL,
  `age32` varchar(255) DEFAULT NULL,
  `totoo` int(11) DEFAULT NULL,
  `age362` varchar(255) DEFAULT NULL,
  `toto5o` int(11) DEFAULT NULL,
  `age3562` varchar(255) DEFAULT NULL,
  `tot5o5o` int(11) DEFAULT NULL,
  `age35652` varchar(255) DEFAULT NULL,
  `to5t5o5o` int(11) DEFAULT NULL,
  `age356552` varchar(255) DEFAULT NULL,
  `to5t55o5o` int(11) DEFAULT NULL,
  `age356` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


--
-- Données de la table `susu`
--

INSERT INTO `susu` VALUES ('1','','','','0','','0','','0','','0','','0','5');
INSERT INTO `susu` VALUES ('2','','','','0','','0','','0','','0','','0','5');


--
-- Structure de la table `t44`
--

CREATE TABLE `t44` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fdd` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `t44`
--



--
-- Structure de la table `t544`
--

CREATE TABLE `t544` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fdd` int(11) DEFAULT NULL,
  `fdopkk` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `t544`
--



--
-- Structure de la table `tableNonExistante`
--

CREATE TABLE `tableNonExistante` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


--
-- Données de la table `tableNonExistante`
--

INSERT INTO `tableNonExistante` VALUES ('1','toto');


--
-- Structure de la table `transaction15565`
--

CREATE TABLE `transaction15565` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tototyo` int(11) DEFAULT NULL,
  `tototyo7kl` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `transaction15565`
--



--
-- Structure de la table `transaction16`
--

CREATE TABLE `transaction16` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tototo` int(11) DEFAULT NULL,
  `fds` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Données de la table `transaction16`
--

