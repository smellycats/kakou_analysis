/*
Navicat MariaDB Data Transfer

Source Server         : localhost_mariadb
Source Server Version : 50545
Source Host           : 127.0.0.1:3306
Source Database       : analysis

Target Server Type    : MariaDB
Target Server Version : 50545
File Encoding         : 65001

Date: 2015-11-01 19:04:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for info
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `empty` int(11) DEFAULT NULL,
  `contain` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', '肥仔', '4', '12');
INSERT INTO `info` VALUES ('2', 'Apple', '6', '8');
INSERT INTO `info` VALUES ('3', 'Bear', '3', '24');
INSERT INTO `info` VALUES ('4', 'Banana', '5', '29');
