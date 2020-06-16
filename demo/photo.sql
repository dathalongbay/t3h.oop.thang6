/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : photo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-06-14 20:41:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for photo
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(255) DEFAULT NULL,
  `photo_desc` varchar(255) DEFAULT NULL,
  `photo_image` varchar(255) DEFAULT NULL,
  `photo_created` int(11) DEFAULT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES ('1', 'PHP Fullstack', 'PHP Fullstack', 'uploads/khoa-hoc-dao-tao-lap-trinh-php-t3h_1.jpg', '1592132358');
INSERT INTO `photo` VALUES ('2', 'Java Fullstack', 'Java Fullstack', 'uploads/khoa-hoc-dao-tao-lap-trinh-javaweb-t3h.jpg', '1592132382');
INSERT INTO `photo` VALUES ('5', 'Android App', 'Android App', 'uploads/khoa-hoc-dao-tao-lap-trinh-android-t3h.jpg', '1592136234');
