/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : film

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-06-13 12:17:17
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `access`
-- ----------------------------
DROP TABLE IF EXISTS `access`;
CREATE TABLE `access` (
  `idAccess` int(10) NOT NULL COMMENT 'mã quyền truy cập',
  `nameAccess` varchar(255) NOT NULL COMMENT 'tên quyền truy cập',
  PRIMARY KEY (`idAccess`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of access
-- ----------------------------

-- ----------------------------
-- Table structure for `actor`
-- ----------------------------
DROP TABLE IF EXISTS `actor`;
CREATE TABLE `actor` (
  `idActor` int(10) NOT NULL,
  `nameActor` varchar(255) NOT NULL,
  `imgActor` text,
  `dateOfBirth` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `info` text COMMENT 'thông tin thêm',
  PRIMARY KEY (`idActor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of actor
-- ----------------------------

-- ----------------------------
-- Table structure for `advertise`
-- ----------------------------
DROP TABLE IF EXISTS `advertise`;
CREATE TABLE `advertise` (
  `idAdv` int(10) NOT NULL,
  `nameAdv` varchar(255) NOT NULL,
  `linkImg` varchar(255) DEFAULT NULL,
  `linkAdv` varchar(255) DEFAULT NULL,
  `target` varchar(20) DEFAULT NULL COMMENT 'kiểu link khi click vào',
  `active` bit(1) DEFAULT NULL COMMENT 'trạng thái có xuất hiện hay không',
  PRIMARY KEY (`idAdv`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of advertise
-- ----------------------------

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `idCmt` int(10) NOT NULL,
  `idFilm` int(10) NOT NULL,
  `idMem` int(10) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `active` bit(1) NOT NULL,
  PRIMARY KEY (`idCmt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for `country`
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `idCountry` int(10) NOT NULL,
  `nameCountry` varchar(255) NOT NULL COMMENT 'tên quốc gia',
  PRIMARY KEY (`idCountry`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of country
-- ----------------------------

-- ----------------------------
-- Table structure for `film`
-- ----------------------------
DROP TABLE IF EXISTS `film`;
CREATE TABLE `film` (
  `idFilm` int(10) NOT NULL,
  `idcate` int(10) NOT NULL,
  `nameFilm` varchar(255) NOT NULL,
  `titleFile` varchar(255) DEFAULT NULL COMMENT 'tiêu đề cho phim',
  `desFilm` text COMMENT 'mô tả phim(nội dung tóm tăt)',
  `imgFilm` varchar(255) DEFAULT NULL,
  `linkFilm` varchar(255) DEFAULT NULL,
  `keyFilm` varchar(255) DEFAULT NULL,
  `numFilm` int(10) DEFAULT NULL COMMENT 'số tập phim',
  `timeFilm` int(10) DEFAULT NULL COMMENT 'thời lượng 1 tập (phút)',
  `active` bit(1) DEFAULT NULL,
  `idActor` int(10) DEFAULT NULL COMMENT 'mã diễn viên chính',
  `idCountry` int(10) DEFAULT NULL COMMENT 'mã quốc gia',
  PRIMARY KEY (`idFilm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of film
-- ----------------------------

-- ----------------------------
-- Table structure for `filmcategory`
-- ----------------------------
DROP TABLE IF EXISTS `filmcategory`;
CREATE TABLE `filmcategory` (
  `idCate` int(10) NOT NULL,
  `nameCate` varchar(255) NOT NULL,
  `imgCate` text NOT NULL,
  `titleCate` varchar(255) DEFAULT NULL COMMENT 'tiêu đề cho thể loại phim',
  `desCate` text,
  `keyCate` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `target` varchar(20) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idCate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of filmcategory
-- ----------------------------

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `idMem` int(10) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passWord` varchar(255) NOT NULL,
  `idAccess` int(10) NOT NULL COMMENT 'mã quyền truy cập',
  PRIMARY KEY (`idMem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of member
-- ----------------------------

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `IdMenu` int(10) NOT NULL,
  `nameMenu` varchar(255) NOT NULL,
  `order` varchar(100) DEFAULT NULL COMMENT 'thứ tự',
  `level` varchar(100) DEFAULT NULL COMMENT 'phân cấp',
  `link` varchar(255) DEFAULT NULL,
  `target` varchar(20) DEFAULT NULL,
  `active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`IdMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
