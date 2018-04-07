/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : market

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-07 15:25:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_ads`
-- ----------------------------
DROP TABLE IF EXISTS `t_ads`;
CREATE TABLE `t_ads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `adsname` varchar(255) DEFAULT NULL,
  `adstype` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `price` float(255,0) DEFAULT NULL,
  PRIMARY KEY (`ads_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `t_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_ads
-- ----------------------------
INSERT INTO `t_ads` VALUES ('99', '调度', '手机', '11', '11', 'uploads/11111.JPG', '11');
INSERT INTO `t_ads` VALUES ('100', '嗯嗯', '手机', '11', '嗯嗯嗯', 'uploads/bootstrap.png', '0');
INSERT INTO `t_ads` VALUES ('101', '000', '手机', '11', '00', 'uploads/bootstrap.png', '0');
INSERT INTO `t_ads` VALUES ('106', '6346', '摩托', '11', '346', 'uploads/bootstrap.png', '463346');
INSERT INTO `t_ads` VALUES ('107', 'sda', '汽车', '11', 'qfq', 'uploads/1.jpg', '0');
INSERT INTO `t_ads` VALUES ('112', '苹果', '手机', '12', '128G', 'uploads/b6.jpg', '9488');
INSERT INTO `t_ads` VALUES ('114', '哈雷', '摩托', '12', '摩托摩托', 'uploads/ad1.jpg', '444448');
INSERT INTO `t_ads` VALUES ('115', '联想', '电子电器', '12', '二手联想', 'uploads/ad2.jpg', '9988');

-- ----------------------------
-- Table structure for `t_comment`
-- ----------------------------
DROP TABLE IF EXISTS `t_comment`;
CREATE TABLE `t_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_content` varchar(255) DEFAULT NULL,
  `ads_id` int(11) DEFAULT NULL,
  `commenter` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_comment
-- ----------------------------
INSERT INTO `t_comment` VALUES ('50', '我是李四', '114', '李四');
INSERT INTO `t_comment` VALUES ('51', '我是你爸', '107', '张三');

-- ----------------------------
-- Table structure for `t_complaint`
-- ----------------------------
DROP TABLE IF EXISTS `t_complaint`;
CREATE TABLE `t_complaint` (
  `Complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `Complaint_content` varchar(255) DEFAULT NULL,
  `Complaint_time` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_complaint
-- ----------------------------
INSERT INTO `t_complaint` VALUES ('1', '反馈反馈反馈反馈', '2018-04-06', '12');
INSERT INTO `t_complaint` VALUES ('2', '酷酷酷酷酷酷酷酷酷酷酷', '2018-04-06', '12');
INSERT INTO `t_complaint` VALUES ('3', '荣荣荣荣荣荣荣荣', '2018-04-06', '12');
INSERT INTO `t_complaint` VALUES ('4', '顶顶顶顶', '2018-04-06', '12');
INSERT INTO `t_complaint` VALUES ('5', '帆帆帆帆', '2018-04-06', '12');

-- ----------------------------
-- Table structure for `t_order`
-- ----------------------------
DROP TABLE IF EXISTS `t_order`;
CREATE TABLE `t_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `adstype` varchar(255) DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_order
-- ----------------------------
INSERT INTO `t_order` VALUES ('4', '108', 'eqe', '手机', 'qeqe', 'uploads/ad2.jpg', '0', '12');
INSERT INTO `t_order` VALUES ('5', '103', '99', '电子电器', '99', 'uploads/11111.JPG', '99', '0');
INSERT INTO `t_order` VALUES ('6', '113', '联想', '电子电器', 'y50-70', 'uploads/b6.jpg', '73888', '12');

-- ----------------------------
-- Table structure for `t_reply`
-- ----------------------------
DROP TABLE IF EXISTS `t_reply`;
CREATE TABLE `t_reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `reply_content` varchar(255) DEFAULT NULL,
  `commenter` varchar(255) DEFAULT NULL,
  `reply_time` date DEFAULT NULL,
  `ads_id` int(11) DEFAULT NULL,
  `replyer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_reply
-- ----------------------------
INSERT INTO `t_reply` VALUES ('20', '我是张三', '李四', '2018-04-07', '114', '张三');
INSERT INTO `t_reply` VALUES ('21', '。。。', '张三', '2018-04-07', '107', '张三');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('4', 'houwei', '张三', '948618251@qq.com', '18846927396', '123');
INSERT INTO `t_user` VALUES ('7', 'zouhao', '李四', '2342394@qq.com', '18976685167', '123');
INSERT INTO `t_user` VALUES ('8', 'fanlin', '王五', '3298479@qq.com', '189234873', '123');
INSERT INTO `t_user` VALUES ('9', 'ltm1997', '三三', '1299347597@qq.com', '18845874332', '123');
INSERT INTO `t_user` VALUES ('10', 'zhai', '祭祀', '62649723@qq.com', '32493232443', '123');
INSERT INTO `t_user` VALUES ('11', 'ltm1998', '李铁铭', '1299347597@qq.com', '18845874332', '199755');
INSERT INTO `t_user` VALUES ('12', 'zxzxzx', 'zzzzz', 'zzzzz', '18845874332', 'zzzzz');
INSERT INTO `t_user` VALUES ('13', '11111', '11111', '11111@qq.com', '11111', '11111');
