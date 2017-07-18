/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : bdm137359381_db

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-07-18 14:26:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comb
-- ----------------------------
DROP TABLE IF EXISTS `comb`;
CREATE TABLE `comb` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `combination` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comb
-- ----------------------------
INSERT INTO `comb` VALUES ('1', '2,45,1');
INSERT INTO `comb` VALUES ('2', '2,45,3');
INSERT INTO `comb` VALUES ('5', '2,45');
INSERT INTO `comb` VALUES ('4', '2,1,3');
INSERT INTO `comb` VALUES ('6', '1,3');
INSERT INTO `comb` VALUES ('7', '3,42,43');
INSERT INTO `comb` VALUES ('8', '1,2,3');
INSERT INTO `comb` VALUES ('9', '32,28');
INSERT INTO `comb` VALUES ('10', '29,32');
INSERT INTO `comb` VALUES ('11', '27,29');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_img` varchar(80) DEFAULT NULL COMMENT '评论人头像',
  `comment_user_name` varchar(255) DEFAULT NULL COMMENT '评论人',
  `comment_user_phone` varchar(255) DEFAULT NULL COMMENT '评论人手机号',
  `comment_book_name` varchar(20) DEFAULT NULL COMMENT '评论的菜品名称',
  `comment_content` varchar(255) DEFAULT NULL COMMENT '评论内容',
  `comment_fen` varchar(10) DEFAULT NULL COMMENT '评论打分',
  `comment_time` datetime DEFAULT NULL COMMENT '评论时间',
  `comment_classify_name` varchar(50) DEFAULT NULL COMMENT '评论类型--分类',
  `comment_status` tinyint(1) DEFAULT NULL COMMENT '1',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', 'images/home_user_img/home5.jpg', '马冠亚', '12345678900', 'php从入门到放弃', '好好好好', '10', '2017-07-13 10:32:52', '健康饮食', '0');
INSERT INTO `comment` VALUES ('2', 'images/home_user_img/home4.jpg', '11', '12345678900', '火锅', '好吃好好好好', '10', '2017-07-13 10:32:52', '美食快拍', '1');
INSERT INTO `comment` VALUES ('3', 'images/home_user_img/home3.jpg', '22', '12345678900', '麻辣烫', '好吃好吃好吃好吃', '10', '2017-07-13 10:32:52', '厨艺交流', '1');
INSERT INTO `comment` VALUES ('4', 'images/home_user_img/home2.jpg', '33', '12345678900', '小吃', '美味美味美味美味美味', '10', '2017-07-13 10:32:52', '妈妈π', '1');
INSERT INTO `comment` VALUES ('5', 'images/home_user_img/home1.jpg', '44', '12345678900', '甜点', '甜甜甜甜甜', '10', '2017-07-13 10:32:52', '健康饮食', '1');

-- ----------------------------
-- Table structure for comment_classify
-- ----------------------------
DROP TABLE IF EXISTS `comment_classify`;
CREATE TABLE `comment_classify` (
  `classify_id` int(11) NOT NULL AUTO_INCREMENT,
  `classify_name` varchar(255) DEFAULT NULL COMMENT '评论类型',
  PRIMARY KEY (`classify_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment_classify
-- ----------------------------
INSERT INTO `comment_classify` VALUES ('1', '美食快拍');
INSERT INTO `comment_classify` VALUES ('2', '厨艺交流');
INSERT INTO `comment_classify` VALUES ('3', '妈妈π');
INSERT INTO `comment_classify` VALUES ('4', '健康饮食');

-- ----------------------------
-- Table structure for home_user
-- ----------------------------
DROP TABLE IF EXISTS `home_user`;
CREATE TABLE `home_user` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `home_name` varchar(50) DEFAULT NULL COMMENT '前台用户名',
  `home_pwd` varchar(20) DEFAULT NULL COMMENT '用户密码',
  `home_phone` varchar(20) DEFAULT NULL COMMENT '用户手机号',
  `home_sex` varchar(10) DEFAULT NULL COMMENT '用户性别',
  `home_status` tinyint(1) DEFAULT NULL COMMENT '用户账号状态, 1:正常 0:停止使用',
  `home_create_time` datetime DEFAULT NULL COMMENT '用户注册时间',
  `home_update_time` datetime DEFAULT NULL COMMENT '用户修改信息时间',
  `home_img` varchar(80) DEFAULT NULL COMMENT '用户头像',
  `home_user_from` tinyint(1) DEFAULT '4' COMMENT '1:手机号; 2:微信; 3:QQ; 0:其它.',
  `home_time_jin` datetime DEFAULT NULL,
  `home_login_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of home_user
-- ----------------------------
INSERT INTO `home_user` VALUES ('1', '安潇松', '123', '12345678900', '男', '1', '2017-07-11 15:59:44', '0000-00-00 00:00:00', 'images/home_user_img/home1.jpg', '0', '2017-07-17 15:22:44', '36');
INSERT INTO `home_user` VALUES ('2', '王瑞臣', '123456', '12345678900', '男', '1', '2017-07-11 04:05:44', '0000-00-00 00:00:00', 'images/home_user_img/home2.jpg', '1', null, null);
INSERT INTO `home_user` VALUES ('3', '王永辉', '123456', '12345678900', '男', '1', '2017-07-10 15:12:21', '0000-00-00 00:00:00', 'images/home_user_img/home3.jpg', '2', null, null);
INSERT INTO `home_user` VALUES ('4', '付彦淋', '123456', '12345678900', '男', '1', '2017-07-15 15:32:23', '0000-00-00 00:00:00', 'images/home_user_img/home4.jpg', '3', null, null);
INSERT INTO `home_user` VALUES ('5', '马冠亚', '123456', '12345678900', '男', '0', '2017-07-21 15:59:44', '0000-00-00 00:00:00', 'images/home_user_img/home5.jpg', '0', null, null);
INSERT INTO `home_user` VALUES ('6', '呵呵', '123456', '12345678900', '女', '1', '2017-07-04 04:54:56', '0000-00-00 00:00:00', 'images/home_user_img/home6.jpg', '0', null, null);
INSERT INTO `home_user` VALUES ('7', '哈哈', '123456', '12345678900', '女', '1', '2017-07-01 23:32:43', '0000-00-00 00:00:00', 'images/home_user_img/home7.jpg', '0', null, null);
INSERT INTO `home_user` VALUES ('8', '啦啦', '123456', '12345678900', '男', '1', '2017-07-16 08:43:43', '0000-00-00 00:00:00', 'images/home_user_img/home8.jpg', '0', null, null);
INSERT INTO `home_user` VALUES ('9', '喵喵', '123456', '12345678900', '女', '1', '2017-07-17 16:39:15', '0000-00-00 00:00:00', 'images/home_user_img/home9.jpg', '0', null, null);

-- ----------------------------
-- Table structure for shop_brand
-- ----------------------------
DROP TABLE IF EXISTS `shop_brand`;
CREATE TABLE `shop_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商城信息主键',
  `brand_name` varchar(60) NOT NULL DEFAULT '' COMMENT '商城名称',
  `brand_tel` char(20) NOT NULL DEFAULT '' COMMENT '联系电话',
  `brand_address` varchar(180) NOT NULL DEFAULT '' COMMENT '商城地址',
  `brand_description` text COMMENT '商城介绍',
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_brand
-- ----------------------------
INSERT INTO `shop_brand` VALUES ('1', '浪子的博客', '12113021774', '上海徐汇区宜山路810号8号楼创嘉站201 （贝岭电子大厦院内）', '我店是知名的综合性网上购物商城，由国内著名出版机构科文公司、美国老虎基金、美国IDG集团、卢森堡剑桥集团、亚洲创业投资基金（原名软银中国创业基金）共同投资成立。');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(30) DEFAULT NULL,
  `p_id` varchar(30) DEFAULT NULL,
  `t_text` varchar(30) DEFAULT NULL,
  `sort` varchar(30) DEFAULT NULL,
  `is_show` varchar(30) DEFAULT '0',
  `status` varchar(30) DEFAULT '0' COMMENT '状态 是否为删除',
  `t_images` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '永辉国际商城', '1', '三范式', '1', '1', '0', 'images/type_user_img/1.jpg');
INSERT INTO `type` VALUES ('9', '烩面', '1', '特色面食', null, '0', '0', 'images/type_user_img/2.jpg');
INSERT INTO `type` VALUES ('18', '回锅肉', '2', '艾弗森', null, '1', '0', 'images/type_user_img/3.jpg');
INSERT INTO `type` VALUES ('22', '永辉国际商城', '1', '三范式', '1', '1', '0', 'images/type_user_img/4.jpg');
INSERT INTO `type` VALUES ('23', '烩面', '1', '特色面食', '', '0', '0', 'images/type_user_img/5.jpg');
INSERT INTO `type` VALUES ('24', '回锅肉', '2', '艾弗森', '', '1', '0', 'images/type_user_img/6.jpg');
INSERT INTO `type` VALUES ('25', '永辉国际商城', '1', '三范式', '1', '1', '0', 'images/type_user_img/7.jpg');
INSERT INTO `type` VALUES ('26', '烩面', '1', '特色面食', '', '0', '0', 'images/type_user_img/8.jpg');
INSERT INTO `type` VALUES ('27', '回锅肉', '2', '艾弗森', '', '1', '0', 'images/type_user_img/9.jpg');
INSERT INTO `type` VALUES ('28', '大帅哥的', '5', '什么？', null, '1', '0', null);
INSERT INTO `type` VALUES ('29', '大帅哥的', '2', '什么？', null, '1', '0', null);
INSERT INTO `type` VALUES ('30', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('31', '', '0', '', null, '', '0', null);
INSERT INTO `type` VALUES ('32', '回锅肉', '3', '肉肉', null, '1', '0', null);
INSERT INTO `type` VALUES ('33', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('34', '', '0', '', null, '', '0', null);
INSERT INTO `type` VALUES ('35', '', '0', '', null, '', '0', null);
INSERT INTO `type` VALUES ('36', '', '0', '', null, '', '0', null);
INSERT INTO `type` VALUES ('37', '', '0', '', null, '', '0', null);
INSERT INTO `type` VALUES ('38', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('39', '', '0', '', null, '', '0', null);
INSERT INTO `type` VALUES ('40', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('41', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('42', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('43', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('44', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('45', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('46', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('47', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('48', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('49', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('50', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('51', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('52', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('53', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('54', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('55', '', '', '', null, '', '0', null);
INSERT INTO `type` VALUES ('56', '', '', '', null, '', '0', null);

-- ----------------------------
-- Table structure for up_file
-- ----------------------------
DROP TABLE IF EXISTS `up_file`;
CREATE TABLE `up_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `upload_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of up_file
-- ----------------------------
INSERT INTO `up_file` VALUES ('13', '五组项目相关资料.txt');
INSERT INTO `up_file` VALUES ('14', '简单的sql语句.txt');
INSERT INTO `up_file` VALUES ('17', '简单的sql语句.txt');
INSERT INTO `up_file` VALUES ('16', '简单的sql语句.txt');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_name` varchar(20) DEFAULT NULL COMMENT '后台管理员',
  `login_pwd` varchar(20) DEFAULT NULL COMMENT '后台管理员密码',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态: 1:正常   0: 封停',
  `login_img` varchar(80) DEFAULT NULL COMMENT '管理员头像',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123456', '1', 'images/user/admin.jpg');

-- ----------------------------
-- Table structure for xian
-- ----------------------------
DROP TABLE IF EXISTS `xian`;
CREATE TABLE `xian` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `x_name` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_sinhala_ci DEFAULT NULL COMMENT '菜品分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of xian
-- ----------------------------
INSERT INTO `xian` VALUES ('1', '面食');
INSERT INTO `xian` VALUES ('2', '炒菜');
INSERT INTO `xian` VALUES ('3', '炖菜');
INSERT INTO `xian` VALUES ('4', '油炸');
INSERT INTO `xian` VALUES ('5', '火锅');
INSERT INTO `xian` VALUES ('6', '烧烤');
