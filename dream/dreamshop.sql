-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 08, 2015 at 06:44 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6
-- Describe:dream商城项目SQL

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `dreamshop`
-- 
CREATE DATABASE `dreamshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dreamshop`;

-- --------------------------------------------------------

-- 
-- Table structure for table `cate`
-- 

CREATE TABLE `cate` (
  `id` int(11) NOT NULL auto_increment,
  `catename` varchar(20) NOT NULL default '',
  `intro` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `cate`
-- 

INSERT INTO `cate` VALUES (1, 'hello', 'time');
INSERT INTO `cate` VALUES (2, '手机', 'Android手机');
INSERT INTO `cate` VALUES (3, 'iphone6', '土豪机');
INSERT INTO `cate` VALUES (4, 'MacBook', '高大上的，编程电脑');
INSERT INTO `cate` VALUES (5, '台式机器', '小涛的电脑没什么用处');

-- --------------------------------------------------------

-- 
-- Table structure for table `category`
-- 

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL auto_increment,
  `cat_name` varchar(20) NOT NULL default '',
  `intro` varchar(100) NOT NULL default '',
  `parent_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `category`
-- 

INSERT INTO `category` VALUES (1, '男士正装', '男士正装', 0);
INSERT INTO `category` VALUES (2, '西装', '西装', 1);
INSERT INTO `category` VALUES (3, '衬衫', '衬衫', 1);
INSERT INTO `category` VALUES (4, '女士正装', '女士正装', 0);
INSERT INTO `category` VALUES (5, '套装', '套装', 4);
INSERT INTO `category` VALUES (6, '衬衫', '衬衫', 4);
INSERT INTO `category` VALUES (7, '正装鞋', '正装鞋', 0);
INSERT INTO `category` VALUES (8, '男士皮鞋', '男士皮鞋', 7);
INSERT INTO `category` VALUES (9, '女士皮鞋', '女士皮鞋', 7);
INSERT INTO `category` VALUES (10, '配饰', '配饰', 0);
INSERT INTO `category` VALUES (11, '领带', '领带', 10);
INSERT INTO `category` VALUES (12, '皮带', '皮带', 10);

-- --------------------------------------------------------

-- 
-- Table structure for table `goods`
-- 

CREATE TABLE `goods` (
  `goods_id` int(10) unsigned NOT NULL auto_increment,
  `goods_sn` char(15) NOT NULL default '',
  `cat_id` smallint(6) NOT NULL default '0',
  `brand_id` smallint(6) NOT NULL default '0',
  `goods_name` varchar(60) NOT NULL default '',
  `shop_price` decimal(9,2) NOT NULL default '0.00',
  `market_price` decimal(9,2) NOT NULL default '0.00',
  `goods_number` smallint(6) NOT NULL default '1',
  `click_count` mediumint(9) NOT NULL default '0',
  `goods_weight` decimal(6,3) NOT NULL default '0.000',
  `goods_brief` varchar(100) NOT NULL default '',
  `goods_desc` text NOT NULL,
  `thumb_img` varchar(50) NOT NULL default '',
  `goods_img` varchar(50) NOT NULL default '',
  `ori_img` varchar(50) NOT NULL default '',
  `is_on_sale` tinyint(4) NOT NULL default '1',
  `is_delete` tinyint(4) NOT NULL default '0',
  `is_best` tinyint(4) NOT NULL default '0',
  `is_new` tinyint(4) NOT NULL default '0',
  `is_hot` tinyint(4) NOT NULL default '0',
  `add_time` int(10) unsigned NOT NULL default '0',
  `last_update` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_id`),
  UNIQUE KEY `goods_sn` (`goods_sn`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- 
-- Dumping data for table `goods`
-- 

INSERT INTO `goods` VALUES (1, 'BL2012121939587', 2, 0, '两扣双开衩平驳头斜兜男士西服套装3312/纯藏青色人字纹/羊毛+涤纶', 799.00, 1598.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_aifwnt.JPG', 'data/images/201212/19/goods_aifwnt.JPG', 'data/images/201212/19/aifwnt.JPG', 1, 0, 0, 1, 0, 1355915283, 0);
INSERT INTO `goods` VALUES (2, 'BL2012121913673', 2, 0, '纯羊毛一粒扣枪驳领纯黑西服套装', 999.00, 1325.00, 22, 0, 0.000, '', '', 'data/images/201212/19/thumb_z2gd86.JPG', 'data/images/201212/19/goods_z2gd86.JPG', 'data/images/201212/19/z2gd86.JPG', 1, 0, 0, 0, 0, 1355915493, 0);
INSERT INTO `goods` VALUES (3, 'BL2012121919874', 2, 0, '两扣平驳领棕色格纹男士休闲单西D6959', 1490.00, 1643.00, 20, 0, 0.000, '', '', 'data/images/201212/19/thumb_dx9ghq.JPG', 'data/images/201212/19/goods_dx9ghq.JPG', 'data/images/201212/19/dx9ghq.JPG', 1, 0, 0, 0, 0, 1355915572, 0);
INSERT INTO `goods` VALUES (4, 'BL2012121970923', 3, 0, '蓝黑竖条纹男士休闲衬衫', 199.00, 238.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_juir8s.JPG', 'data/images/201212/19/goods_juir8s.JPG', 'data/images/201212/19/juir8s.JPG', 1, 0, 0, 0, 0, 1355915656, 0);
INSERT INTO `goods` VALUES (5, 'BL2012121980647', 3, 0, '蓝底提花咖色竖条纹修身正装衬衫', 199.00, 234.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_rad3wq.JPG', 'data/images/201212/19/goods_rad3wq.JPG', 'data/images/201212/19/rad3wq.JPG', 1, 1, 0, 1, 0, 1355915689, 0);
INSERT INTO `goods` VALUES (6, 'BL2012121956217', 3, 0, '男士短袖衬衫A52D/纯白暗竖纹/莫代尔棉', 45.00, 54.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_3fckzt.jpg', 'data/images/201212/19/goods_3fckzt.jpg', 'data/images/201212/19/3fckzt.jpg', 1, 0, 0, 0, 0, 1355915726, 0);
INSERT INTO `goods` VALUES (7, 'BL2012121936338', 5, 0, '枪驳大领面后开叉短款两扣女士正装', 567.00, 1324.00, 21, 0, 0.000, '', '', 'data/images/201212/19/thumb_wcri9z.JPG', 'data/images/201212/19/goods_wcri9z.JPG', 'data/images/201212/19/wcri9z.JPG', 1, 0, 0, 1, 0, 1355915834, 0);
INSERT INTO `goods` VALUES (8, 'BL2012121994403', 5, 0, '泡泡袖后领色丁拼接平驳领一扣女士正装套裤/黑色', 482.00, 897.00, 18, 0, 0.000, '', '', 'data/images/201212/19/thumb_5tsyhu.JPG', 'data/images/201212/19/goods_5tsyhu.JPG', 'data/images/201212/19/5tsyhu.JPG', 1, 0, 0, 1, 0, 1355915895, 0);
INSERT INTO `goods` VALUES (9, 'BL2012121977239', 5, 0, '本白压褶下摆短袖套裙', 318.00, 564.00, 22, 0, 0.000, '', '', 'data/images/201212/19/thumb_ay86zh.JPG', 'data/images/201212/19/goods_ay86zh.JPG', 'data/images/201212/19/ay86zh.JPG', 1, 0, 0, 1, 0, 1355915936, 0);
INSERT INTO `goods` VALUES (10, 'BL2012121941490', 5, 0, '枪驳大领面1扣女士正装/亮咖色', 499.00, 675.00, 22, 0, 0.000, '', '', 'data/images/201212/19/thumb_n29dmp.JPG', 'data/images/201212/19/goods_n29dmp.JPG', 'data/images/201212/19/n29dmp.JPG', 1, 0, 0, 0, 0, 1355915993, 0);
INSERT INTO `goods` VALUES (11, 'BL2012121985783', 6, 0, '纯白斜条棉涤女士衬衫', 42.00, 67.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_byadc8.JPG', 'data/images/201212/19/goods_byadc8.JPG', 'data/images/201212/19/byadc8.JPG', 1, 0, 0, 0, 0, 1355916069, 0);
INSERT INTO `goods` VALUES (12, 'BL2012121952838', 6, 0, '女士长袖衬衫165/蓝条纹/莫代尔棉V领花边', 99.00, 134.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_2mhjt4.JPG', 'data/images/201212/19/goods_2mhjt4.JPG', 'data/images/201212/19/2mhjt4.JPG', 1, 0, 0, 0, 0, 1355916106, 0);
INSERT INTO `goods` VALUES (13, 'BL2012121982746', 6, 0, '白色暗竖纹V领莫代尔棉衬衫', 89.00, 156.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_fys85v.JPG', 'data/images/201212/19/goods_fys85v.JPG', 'data/images/201212/19/fys85v.JPG', 1, 0, 0, 1, 0, 1355916157, 0);
INSERT INTO `goods` VALUES (14, 'BL2012121992429', 8, 0, '男士系带正装鞋/黑色/牛皮', 150.00, 250.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_yvwnc9.JPG', 'data/images/201212/19/goods_yvwnc9.JPG', 'data/images/201212/19/yvwnc9.JPG', 1, 0, 0, 1, 0, 1355916281, 0);
INSERT INTO `goods` VALUES (15, 'BL2012121971035', 8, 0, '滑轮添奴男士系带正装鞋/牛皮', 150.00, 250.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_dh2yxm.JPG', 'data/images/201212/19/goods_dh2yxm.JPG', 'data/images/201212/19/dh2yxm.JPG', 1, 0, 0, 0, 0, 1355916549, 0);
INSERT INTO `goods` VALUES (16, 'BL2012121977793', 8, 0, '全牛皮小圆头正装鞋', 199.00, 234.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_iu5xgq.JPG', 'data/images/201212/19/goods_iu5xgq.JPG', 'data/images/201212/19/iu5xgq.JPG', 1, 0, 0, 1, 0, 1355916612, 0);
INSERT INTO `goods` VALUES (17, 'BL2012121952414', 0, 0, '鞋面三扣装饰胎牛皮带绒中跟踝靴/黑色', 299.00, 399.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_i7pqy8.JPG', 'data/images/201212/19/goods_i7pqy8.JPG', 'data/images/201212/19/i7pqy8.JPG', 1, 0, 0, 0, 0, 1355916746, 0);
INSERT INTO `goods` VALUES (18, 'BL2012121957666', 9, 0, '简约中跟女士正装鞋黑色', 199.00, 399.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_fsuh7j.JPG', 'data/images/201212/19/goods_fsuh7j.JPG', 'data/images/201212/19/fsuh7j.JPG', 1, 0, 0, 1, 0, 1355916792, 0);
INSERT INTO `goods` VALUES (19, 'BL2012121917277', 9, 0, '单侧镶钻漆皮中跟正装鞋/黑色', 145.00, 234.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_uigxw5.JPG', 'data/images/201212/19/goods_uigxw5.JPG', 'data/images/201212/19/uigxw5.JPG', 1, 0, 0, 1, 0, 1355916829, 0);
INSERT INTO `goods` VALUES (20, 'BL2012121993042', 11, 0, '深蓝纯色领带', 89.00, 139.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_cbnrqe.JPG', 'data/images/201212/19/goods_cbnrqe.JPG', 'data/images/201212/19/cbnrqe.JPG', 1, 0, 0, 0, 0, 1355916948, 0);
INSERT INTO `goods` VALUES (21, 'BL2012121965862', 11, 0, '100%桑蚕丝天蓝底黑斜纹领带', 128.00, 234.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_uc9n7f.JPG', 'data/images/201212/19/goods_uc9n7f.JPG', 'data/images/201212/19/uc9n7f.JPG', 1, 0, 0, 0, 0, 1355916979, 0);
INSERT INTO `goods` VALUES (22, 'BL2012121940360', 11, 0, '100%桑蚕丝灰黑斜条纹领带', 128.00, 234.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_m5qd2j.JPG', 'data/images/201212/19/goods_m5qd2j.JPG', 'data/images/201212/19/m5qd2j.JPG', 1, 0, 0, 0, 0, 1355917010, 0);
INSERT INTO `goods` VALUES (23, 'BL2012121939272', 12, 0, '不锈钢自动扣荔枝纹牛皮正装腰带', 69.00, 129.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_kixvwy.JPG', 'data/images/201212/19/goods_kixvwy.JPG', 'data/images/201212/19/kixvwy.JPG', 1, 0, 0, 1, 0, 1355917090, 0);
INSERT INTO `goods` VALUES (24, 'BL2012121926113', 12, 0, '黑色烤漆不锈钢自动扣细纹牛皮正装腰带', 89.00, 169.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_avkfd4.JPG', 'data/images/201212/19/goods_avkfd4.JPG', 'data/images/201212/19/avkfd4.JPG', 1, 0, 0, 0, 0, 1355917125, 0);
INSERT INTO `goods` VALUES (25, 'BL2012121943041', 12, 0, '银色不锈钢针扣头层小牛皮二层同色皮底正装腰带', 99.00, 169.00, 23, 0, 0.000, '', '', 'data/images/201212/19/thumb_nv7cas.JPG', 'data/images/201212/19/goods_nv7cas.JPG', 'data/images/201212/19/nv7cas.JPG', 1, 0, 0, 0, 0, 1355917162, 0);
INSERT INTO `goods` VALUES (26, 'DM2015070751674', 2, 0, 'S骏西服', 899.00, 755.00, 0, 0, 0.700, '90后非常的喜欢这种东西专用', '<p><em><strong>这是一个好西服，90后SX专用</strong></em></p><p><br/><em></em></p><p><em><strong><img src=\\"http://img.baidu.com/hi/jx2/j_0049.gif\\"/></strong></em></p><p><em><strong><img src=\\"/ueditor/php/upload/image/20150707/1436237910362628.jpg\\" alt=\\"20140722130229902990.jpg\\"/></strong></em></p>', 'data/images/201507/07/thumb_xrwdzu.jpg', 'data/images/201507/07/goods_xrwdzu.jpg', 'data/images/201507/07/xrwdzu.jpg', 1, 0, 0, 0, 0, 1436238082, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `ordergoods`
-- 

CREATE TABLE `ordergoods` (
  `og_id` int(10) unsigned NOT NULL auto_increment,
  `order_id` int(10) unsigned NOT NULL default '0',
  `order_sn` char(15) NOT NULL default '',
  `goods_id` int(10) unsigned NOT NULL default '0',
  `goods_name` varchar(60) NOT NULL default '',
  `goods_number` smallint(6) NOT NULL default '1',
  `shop_price` decimal(10,2) NOT NULL default '0.00',
  `subtotal` decimal(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (`og_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `ordergoods`
-- 

INSERT INTO `ordergoods` VALUES (1, 1, 'OI2015070640614', 3, '两扣平驳领棕色格纹男士休闲单西D6959', 1, 1490.00, 1490.00);
INSERT INTO `ordergoods` VALUES (2, 2, 'OI2015070673858', 10, '枪驳大领面1扣女士正装/亮咖色', 1, 499.00, 499.00);
INSERT INTO `ordergoods` VALUES (3, 3, 'OI2015070676152', 9, '本白压褶下摆短袖套裙', 1, 318.00, 318.00);
INSERT INTO `ordergoods` VALUES (4, 3, 'OI2015070676152', 2, '纯羊毛一粒扣枪驳领纯黑西服套装', 1, 999.00, 999.00);
INSERT INTO `ordergoods` VALUES (5, 3, 'OI2015070676152', 8, '泡泡袖后领色丁拼接平驳领一扣女士正装套裤/黑色', 1, 482.00, 482.00);
INSERT INTO `ordergoods` VALUES (6, 4, 'OI2015070784469', 7, '枪驳大领面后开叉短款两扣女士正装', 1, 567.00, 567.00);
INSERT INTO `ordergoods` VALUES (7, 5, 'OI2015070719349', 8, '泡泡袖后领色丁拼接平驳领一扣女士正装套裤/黑色', 1, 482.00, 482.00);
INSERT INTO `ordergoods` VALUES (8, 6, 'OI2015070765182', 8, '泡泡袖后领色丁拼接平驳领一扣女士正装套裤/黑色', 1, 482.00, 482.00);
INSERT INTO `ordergoods` VALUES (9, 7, 'OI2015070772550', 7, '枪驳大领面后开叉短款两扣女士正装', 1, 567.00, 567.00);
INSERT INTO `ordergoods` VALUES (10, 8, 'OI2015070776852', 8, '泡泡袖后领色丁拼接平驳领一扣女士正装套裤/黑色', 1, 482.00, 482.00);
INSERT INTO `ordergoods` VALUES (11, 9, 'OI2015070732498', 8, '泡泡袖后领色丁拼接平驳领一扣女士正装套裤/黑色', 1, 482.00, 482.00);
INSERT INTO `ordergoods` VALUES (12, 10, 'OI2015070762743', 3, '两扣平驳领棕色格纹男士休闲单西D6959', 1, 1490.00, 1490.00);
INSERT INTO `ordergoods` VALUES (13, 11, 'OI2015070758152', 3, '两扣平驳领棕色格纹男士休闲单西D6959', 1, 1490.00, 1490.00);
INSERT INTO `ordergoods` VALUES (14, 12, 'OI2015070710281', 26, 'S骏西服', 1, 899.00, 899.00);

-- --------------------------------------------------------

-- 
-- Table structure for table `orderinfo`
-- 

CREATE TABLE `orderinfo` (
  `order_id` int(10) unsigned NOT NULL auto_increment,
  `order_sn` char(15) NOT NULL default '',
  `user_id` int(10) unsigned NOT NULL default '0',
  `username` varchar(20) NOT NULL default '',
  `zone` varchar(30) NOT NULL default '',
  `address` varchar(30) NOT NULL default '',
  `zipcode` char(6) NOT NULL default '',
  `reciver` varchar(10) NOT NULL default '',
  `email` varchar(40) NOT NULL default '',
  `tel` varchar(20) NOT NULL default '',
  `mobile` char(11) NOT NULL default '',
  `building` varchar(30) NOT NULL default '',
  `best_time` varchar(10) NOT NULL default '',
  `add_time` int(10) unsigned NOT NULL default '0',
  `order_amount` decimal(10,2) NOT NULL default '0.00',
  `pay` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `orderinfo`
-- 

INSERT INTO `orderinfo` VALUES (1, 'OI2015070640614', 0, '匿名', '', '', '', '', '', '', '', '', '', 1436156741, 1490.00, 0);
INSERT INTO `orderinfo` VALUES (2, 'OI2015070673858', 0, '匿名', '广州', '广州XXX大厦', '758254', '李骏', '972735433@qq.com', '18054261117', '18054261117', '大厦', '17', 1436158017, 499.00, 4);
INSERT INTO `orderinfo` VALUES (3, 'OI2015070676152', 0, '匿名', '上海', '广州XXX大厦', '625400', '李骏', 'admin@admin.com', '18054261117', '18054261117', '地国大厦', '18', 1436159017, 1799.00, 4);
INSERT INTO `orderinfo` VALUES (4, 'OI2015070784469', 0, '匿名', '成都', 'No. 42 Sands Road Chengdu Jinn', '6252', 'Aliax', 'ggongbiao@gmail.com', '18828077952', '18054261117', '一个地球', '18', 1436269662, 567.00, 4);
INSERT INTO `orderinfo` VALUES (5, 'OI2015070719349', 0, '匿名', '成都', 'No. 42 Sands Road Chengdu Jinn', '625400', 'Aliax', 'ggongbiao@gmail.com', '18828077952', '18054261117', '一个地球', '18', 1436270708, 482.00, 4);
INSERT INTO `orderinfo` VALUES (6, 'OI2015070765182', 0, '匿名', '成都', 'No. 42 Sands Road Chengdu Jinn', '6252', 'Aliax', 'admin@admin.com', '18828077952', '18054261117', '地国大厦', '18', 1436270814, 482.00, 4);
INSERT INTO `orderinfo` VALUES (7, 'OI2015070772550', 0, '匿名', '成都', 'No. 42 Sands Road Chengdu Jinn', '625400', 'Aliax', 'admin@admin.com', '18828077952', '18054261117', '地国大厦', '18', 1436271259, 567.00, 4);
INSERT INTO `orderinfo` VALUES (8, 'OI2015070776852', 0, '匿名', '成都', 'No. 42 Sands Road Chengdu Jinn', '625400', 'Aliax', 'admin@admin.com', '18828077952', '18054261117', '地国大厦', '18', 1436271459, 482.00, 4);
INSERT INTO `orderinfo` VALUES (9, 'OI2015070732498', 0, '匿名', '成都', 'No. 42 Sands Road Chengdu Jinn', '625400', 'Aliax', 'developbiao@gmail.com', '18828077952', '18054261117', '一个地球', '18', 1436271634, 482.00, 4);
INSERT INTO `orderinfo` VALUES (10, 'OI2015070762743', 0, '匿名', '上海', '广州XXX大厦', '625400', '李骏', '972735433@qq.com', '18054261117', '18054261117', '地国大厦', '17', 1436271791, 1490.00, 4);
INSERT INTO `orderinfo` VALUES (11, 'OI2015070758152', 0, '匿名', '上海', '广州XXX大厦', '758254', '李骏', '972735433@qq.com', '18054261117', '18054261117', '地国大厦', '18', 1436271994, 1490.00, 4);
INSERT INTO `orderinfo` VALUES (12, 'OI2015070710281', 0, '匿名', '上海', '广州XXX大厦', '758254', '李骏', '972735433@qq.com', '18054261117', '18054261117', '地国大厦', '17', 1436272328, 899.00, 4);

-- --------------------------------------------------------

-- 
-- Table structure for table `test`
-- 

CREATE TABLE `test` (
  `t1` varchar(10) default NULL,
  `t2` varchar(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `test`
-- 

INSERT INTO `test` VALUES ('tt1', 'ttt2');
INSERT INTO `test` VALUES ('tt1', 'ttt2');
INSERT INTO `test` VALUES ('tt1', 'ttt2');
INSERT INTO `test` VALUES ('tt1', 'ttt2');
INSERT INTO `test` VALUES ('aaaa\\''\\''', 'cat\\''');
INSERT INTO `test` VALUES ('\\"smail', '\\''losse\\''');
INSERT INTO `test` VALUES ('tttt1', 'ttt2');
INSERT INTO `test` VALUES ('adminuser', 'adminuser');
INSERT INTO `test` VALUES ('frontuser', 'frontuser');
INSERT INTO `test` VALUES ('frontuser', 'frontuser');
INSERT INTO `test` VALUES ('frontuser', 'frontuser');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(16) NOT NULL default '',
  `email` varchar(30) NOT NULL default '',
  `passwd` char(32) NOT NULL default '',
  `regtime` int(10) unsigned NOT NULL default '0',
  `lastlogin` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'GongBiao', 'developbiao@gmail.com', '202cb962ac59075b964b07152d234b70', 1435758593, 0);
INSERT INTO `user` VALUES (2, '美女老师`', 'meinvsd@meinv.com', 'e10adc3949ba59abbe56e057f20f883e', 1435758628, 0);
INSERT INTO `user` VALUES (3, 'lijun', 'lijun@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 1436185100, 0);
