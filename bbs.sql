-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-03-01 03:53:03
-- 服务器版本： 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `rid` int(11) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `authorid` int(30) NOT NULL,
  `shoujia` int(10) NOT NULL DEFAULT '0',
  `jinghua` int(3) NOT NULL DEFAULT '0',
  `gaoliang` int(11) NOT NULL DEFAULT '0',
  `bankuaiid` int(10) DEFAULT NULL,
  `chakanshuliang` int(11) NOT NULL DEFAULT '0',
  `huitieshuliang` int(11) NOT NULL DEFAULT '0',
  `goumairen` char(11) NOT NULL DEFAULT '0',
  `zhiding` timestamp NULL DEFAULT NULL,
  `pingbi` int(11) NOT NULL DEFAULT '0',
  `tu` varchar(64) DEFAULT '/images/t03.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `rid`, `time`, `content`, `authorid`, `shoujia`, `jinghua`, `gaoliang`, `bankuaiid`, `chakanshuliang`, `huitieshuliang`, `goumairen`, `zhiding`, `pingbi`, `tu`) VALUES
(87, '你是不是我最疼爱的人', 0, '2017-12-30 10:04:59', '<p accuse="aContent" class="best-text mb-10" id="best-content-1464302815" style="margin-top: 10px; margin-bottom: 10px; padding: 0px; font-family: &quot;PingFang SC&quot;, &quot;Lantinghei SC&quot;, &quot;Microsoft YaHei&quot;, arial, 宋体, sans-serif, tahoma; white-space: pre-wrap; word-wrap: break-word; font-size: 16px; line-height: 29px; color: rgb(51, 51, 51); min-height: 55px;">\r\n	从来就没冷过<br />\r\n	因为有你在我身后<br />\r\n	你总是轻声地说<br />\r\n	黑夜有我<br />\r\n	你总是默默承受<br />\r\n	这样的我不敢怨尤<br />\r\n	现在为了什么<br />\r\n	不再看我</p>\r\n', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/upload/17/12/30/up_5a4764cbc13b0.jpg'),
(89, NULL, 87, '2017-12-30 10:14:56', '<pre accuse="aContent" class="best-text mb-10" id="best-content-1464302815" style="margin-top: 10px; margin-bottom: 10px; padding: 0px; font-family: &quot;PingFang SC&quot;, &quot;Lantinghei SC&quot;, &quot;Microsoft YaHei&quot;, arial, 宋体, sans-serif, tahoma; white-space: pre-wrap; word-wrap: break-word; font-size: 16px; line-height: 29px; color: rgb(51, 51, 51); min-height: 55px;">\r\n<a class="baidu-highlight" href="https://www.baidu.com/s?wd=%E6%88%91%E6%98%AF%E4%B8%8D%E6%98%AF%E4%BD%A0%E6%9C%80%E7%96%BC%E7%88%B1%E7%9A%84%E4%BA%BA&amp;tn=44039180_cpr&amp;fenlei=mv6quAkxTZn0IZRqIHckPjm4nH00T1YLuWD3PHfzmWbLPHcduHbv0ZwV5Hcvrjm3rH6sPfKWUMw85HfYnjn4nH6sgvPsT6KdThsqpZwYTjCEQLGCpyw9Uz4Bmy-bIi4WUvYETgN-TLwGUv3EPH61rHnzPWnL" rel="nofollow" style="color: rgb(63, 136, 191);" target="_blank"><span style="color:#ff0000;">我是不是你最疼爱的人</span></a><span style="color:#ff0000;">\r\n</span><a class="baidu-highlight" href="https://www.baidu.com/s?wd=%E4%BD%A0%E4%B8%BA%E4%BB%80%E4%B9%88%E4%B8%8D%E8%AF%B4%E8%AF%9D&amp;tn=44039180_cpr&amp;fenlei=mv6quAkxTZn0IZRqIHckPjm4nH00T1YLuWD3PHfzmWbLPHcduHbv0ZwV5Hcvrjm3rH6sPfKWUMw85HfYnjn4nH6sgvPsT6KdThsqpZwYTjCEQLGCpyw9Uz4Bmy-bIi4WUvYETgN-TLwGUv3EPH61rHnzPWnL" rel="nofollow" style="color: rgb(63, 136, 191); text-decoration-line: none;" target="_blank"><span style="color:#ff0000;">你为什么不说话</span></a>\r\n<span style="color:#00ff00;">握住是你冰冷的手\r\n动也不动让我好难过</span>\r\n<a class="baidu-highlight" href="https://www.baidu.com/s?wd=%E6%88%91%E6%98%AF%E4%B8%8D%E6%98%AF%E4%BD%A0%E6%9C%80%E7%96%BC%E7%88%B1%E7%9A%84%E4%BA%BA&amp;tn=44039180_cpr&amp;fenlei=mv6quAkxTZn0IZRqIHckPjm4nH00T1YLuWD3PHfzmWbLPHcduHbv0ZwV5Hcvrjm3rH6sPfKWUMw85HfYnjn4nH6sgvPsT6KdThsqpZwYTjCEQLGCpyw9Uz4Bmy-bIi4WUvYETgN-TLwGUv3EPH61rHnzPWnL" rel="nofollow" style="color: rgb(63, 136, 191); text-decoration-line: none;" target="_blank"><span style="background-color:#0000ff;">我是不是你最疼爱的人</span></a><span style="background-color:#0000ff;">\r\n</span><a class="baidu-highlight" href="https://www.baidu.com/s?wd=%E4%BD%A0%E4%B8%BA%E4%BB%80%E4%B9%88%E4%B8%8D%E8%AF%B4%E8%AF%9D&amp;tn=44039180_cpr&amp;fenlei=mv6quAkxTZn0IZRqIHckPjm4nH00T1YLuWD3PHfzmWbLPHcduHbv0ZwV5Hcvrjm3rH6sPfKWUMw85HfYnjn4nH6sgvPsT6KdThsqpZwYTjCEQLGCpyw9Uz4Bmy-bIi4WUvYETgN-TLwGUv3EPH61rHnzPWnL" rel="nofollow" style="color: rgb(63, 136, 191); text-decoration-line: none;" target="_blank"><span style="background-color:#0000ff;">你为什么不说话</span></a>\r\n当我需要你的时候\r\n你却沉默不说\r\n从来就没冷过\r\n因为有你挡住寒冻\r\n你总是在我身后</pre>\r\n', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/images/t03.jpg'),
(94, NULL, 93, '2017-12-30 10:32:21', '<p>\r\n	<span style="color:#00ff00;"><span style="background-color:#ff0000;">可惜，世上没有卖后悔药的，所以，珍惜现在的一切，不要等失去了才知道后悔</span></span></p>\r\n', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/images/t03.jpg'),
(98, NULL, 93, '2017-12-30 10:41:57', '<p>\r\n	<img alt="broken heart" height="70" src="http://localhost/boke/mvc/public/images/girl.jpg" title="broken heart" width="70" /></p>\r\n', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/images/t03.jpg'),
(99, '消愁 - 毛不易', 0, '2017-12-31 04:18:33', '<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	当你走进这欢乐场\r\n	<div class="lemma-picture text-pic layout-right" style="border: 1px solid rgb(224, 224, 224); overflow: hidden; margin: 0px 0px 3px; position: relative; float: right; clear: right; width: 220px;">\r\n		<a class="image-link" href="https://baike.baidu.com/pic/%E6%B6%88%E6%84%81/22053904/0/d31b0ef41bd5ad6e93d82c178acb39dbb6fd3c2d?fr=lemma&amp;ct=single" nslog-type="9317" style="color: rgb(19, 110, 194); text-decoration-line: none; display: block; width: 220px; height: 160px;" target="_blank" title=""><img alt="" src="http://g.hiphotos.baidu.com/baike/s%3D220/sign=dc44acc4b8de9c82a265fe8d5c8080d2/d31b0ef41bd5ad6e93d82c178acb39dbb6fd3c2d.jpg" style="border: 0px; display: block; margin: 0px auto; width: 220px; height: 160px;" /></a></div>\r\n</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	背上所有的梦与想</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	各色的脸上各色的妆</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	没人记得你的模样</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	三巡酒过你在角落</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	固执的唱着苦涩的歌</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	听他在喧嚣里被淹没</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	你拿起酒杯对自己说</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	一杯敬朝阳 一杯敬月光</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	唤醒我的向往 温柔了寒窗</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	于是可以不回头地逆风飞翔</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	不怕心头有雨 眼底有霜</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	一杯敬故乡 一杯敬远方</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	守着我的善良 催着我成长</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	所以南北的路从此不再漫长</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	灵魂不再无处安放</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	一杯敬明天 一杯敬过往</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	支撑我的身体 厚重了肩膀</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	虽然从不相信所谓山高水长</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	人生苦短何必念念不忘</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	一杯敬自由 一杯敬死亡</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	宽恕我的平凡 驱散了迷惘</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	好吧天亮之后总是潦草离场</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	清醒的人最荒唐</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	好吧天亮之后总是潦草离场</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	清醒的人最荒唐</div>\r\n', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/upload/17/12/31/up_5a486519a0ef0.jpg'),
(100, '', 0, '2018-02-22 10:33:22', '', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/uploads/c20dd152f0b98246941537e383b12875.gif'),
(101, '222', 0, '2018-02-22 11:24:59', '<p>\r\n	222</p>\r\n', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/uploads/b672ee23e6bb1c75fc9558f178040113.gif'),
(102, NULL, 87, '2018-02-22 15:13:52', '<p>\r\n	我我我</p>\r\n', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/images/t03.jpg'),
(103, NULL, 87, '2018-02-22 15:14:12', '我我我', 1, 0, 0, 0, NULL, 0, 0, '0', NULL, 0, '/images/t03.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `bankuai`
--

DROP TABLE IF EXISTS `bankuai`;
CREATE TABLE IF NOT EXISTS `bankuai` (
  `bid` int(10) NOT NULL AUTO_INCREMENT,
  `bkname` varchar(60) NOT NULL,
  `parentid` int(10) NOT NULL,
  `huitieshuliang` int(10) NOT NULL DEFAULT '0',
  `tiezhishuliang` int(10) NOT NULL DEFAULT '0',
  `banzhu` char(10) DEFAULT NULL,
  `zuihoufabiao` varchar(255) DEFAULT NULL,
  `sx` int(11) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bankuai`
--

INSERT INTO `bankuai` (`bid`, `bkname`, `parentid`, `huitieshuliang`, `tiezhishuliang`, `banzhu`, `zuihoufabiao`, `sx`) VALUES
(1, 'PHP技术交流', 0, 0, 0, NULL, NULL, 1),
(2, '程序人生', 0, 0, 0, NULL, NULL, 2),
(3, '内核源码', 1, 15, 36, '1', NULL, 1),
(4, 'PHP框架', 1, 1, 3, '1,2', NULL, 2),
(5, '开源产品', 1, 0, 3, '1', NULL, 3),
(6, '进阶讨论', 1, 0, 2, '', NULL, 4),
(7, '求职招聘', 2, 1, 1, '', NULL, 1),
(9, '经验分享', 2, 0, 0, '', NULL, 2),
(10, '名人故事', 2, 0, 0, '', NULL, 3);

-- --------------------------------------------------------

--
-- 表的结构 `jzip`
--

DROP TABLE IF EXISTS `jzip`;
CREATE TABLE IF NOT EXISTS `jzip` (
  `jid` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(32) DEFAULT NULL,
  `shijian` varchar(32) DEFAULT '100000000000000000000',
  `jztime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`jid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jzip`
--

INSERT INTO `jzip` (`jid`, `ip`, `shijian`, `jztime`) VALUES
(2, 16843009, '100000000000000000000', '2017-12-12 12:13:05'),
(3, 50529027, '1728000', '2017-12-12 12:13:05');

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

DROP TABLE IF EXISTS `liuyan`;
CREATE TABLE IF NOT EXISTS `liuyan` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `nameid` int(11) NOT NULL,
  `lynr` text NOT NULL,
  `ltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `liuyan`
--

INSERT INTO `liuyan` (`lid`, `nameid`, `lynr`, `ltime`) VALUES
(1, 55, '官方论坛', '2017-12-30 18:21:24'),
(6, 55, '<p>\r\n	qqqqqqqq</p>\r\n', '2017-12-30 18:49:10'),
(7, 55, '<p>\r\n	<span style="color:#ff8c00;">qqqqq</span></p>\r\n', '2017-12-30 18:52:17'),
(8, 55, '<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	这是一首简单的小情歌\r\n	<div class="lemma-picture text-pic layout-right" style="border: 1px solid rgb(224, 224, 224); overflow: hidden; margin: 0px 0px 3px; position: relative; float: right; clear: right; width: 220px;">\r\n		<a class="image-link" href="https://baike.baidu.com/pic/%E5%B0%8F%E6%83%85%E6%AD%8C/26153/0/d1e312f4e27741b17709d71e?fr=lemma&amp;ct=single" nslog-type="9317" style="color: rgb(19, 110, 194); text-decoration-line: none; display: block; width: 220px; height: 129px;" target="_blank" title="《小情歌》MV图片"><img alt="《小情歌》MV图片" src="https://gss3.bdstatic.com/-Po3dSag_xI4khGkpoWK1HF6hhy/baike/s%3D220/sign=b0fde88ef703918fd3d13ac8613c264b/d439b6003af33a873a8abf74c65c10385243b5fd.jpg" style="border: 0px; display: block; margin: 0px auto; width: 220px; height: 129px;" /></a><span class="description" style="display: block; color: rgb(85, 85, 85); font-size: 12px; text-indent: 0px; font-family: 宋体; word-wrap: break-word; word-break: break-all; line-height: 15px; padding: 8px 7px; min-height: 12px; border-top: 1px solid rgb(224, 224, 224);">《小情歌》MV图片</span></div>\r\n</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	唱着人们心肠的曲折</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我想我很快乐</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	当有你的温热</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	脚边的空气转了</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	这是一首简单的小情歌</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	唱着我们心头的白鸽</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我想我很适合</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	当一个歌颂者</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	青春在风中飘着</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	你知道</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	就算大雨让这座城市颠倒</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我会给你怀抱</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	受不了看见你背影来到</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	写下我度秒如年难捱的离骚</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	就算整个世界被寂寞绑票</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我也不会奔跑</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	逃不了最后谁也都苍老</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	写下我时间和琴声交错的城堡</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	这是一首简单的小情歌</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	唱着我们心头的白鸽</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我想我很适合</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	当一个歌颂者</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	青春在风中飘着</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	你知道</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	就算大雨让这座城市颠倒</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我会给你怀抱</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	受不了看见你背影来到</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	写下我度秒如年难捱的离骚</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	就算整个世界被寂寞绑票</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我也不会奔跑</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	逃不了最后谁也都苍老</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	写下我时间和琴声交错的城堡</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	你知道</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	就算大雨让这座城市颠倒</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我会给你怀抱\r\n	<div class="lemma-picture text-pic layout-right" style="border: 1px solid rgb(224, 224, 224); overflow: hidden; margin: 0px 0px 3px; position: relative; float: right; clear: right; width: 220px;">\r\n		<a class="image-link" href="https://baike.baidu.com/pic/%E5%B0%8F%E6%83%85%E6%AD%8C/26153/0/c995d143ad4bd1133fb21df958afa40f4afb05f9?fr=lemma&amp;ct=single" nslog-type="9317" style="color: rgb(19, 110, 194); text-decoration-line: none; display: block; width: 220px; height: 131px;" target="_blank" title="小情歌 MV"><img alt="小情歌 MV" src="https://gss0.bdstatic.com/-4o3dSag_xI4khGkpoWK1HF6hhy/baike/s%3D220/sign=8555e0c56509c93d03f209f5af3cf8bb/c995d143ad4bd1133fb21df958afa40f4afb05f9.jpg" style="border: 0px; display: block; margin: 0px auto; width: 220px; height: 131px;" /></a><span class="description" style="display: block; color: rgb(85, 85, 85); font-size: 12px; text-indent: 0px; font-family: 宋体; word-wrap: break-word; word-break: break-all; line-height: 15px; padding: 8px 7px; min-height: 12px; border-top: 1px solid rgb(224, 224, 224);">小情歌 MV</span></div>\r\n</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	受不了看见你背影来到</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	写下我度秒如年难捱的离骚</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	就算整个世界被寂寞绑票</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	我也不会奔跑</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	最后谁也都苍老</div>\r\n<div class="para" label-module="para" style="font-size: 14px; word-wrap: break-word; color: rgb(51, 51, 51); margin-bottom: 15px; text-indent: 2em; line-height: 24px; zoom: 1; font-family: arial, 宋体, sans-serif;">\r\n	写下我时间和琴声交错的城堡</div>\r\n', '2017-12-30 18:56:22'),
(9, 55, '<p>\r\n	<span style="background-color:#ffd700;">耐得住寂寞才能守的住繁华</span></p>\r\n', '2017-12-31 02:25:20'),
(10, 55, '<p>\r\n	<span style="color:#ff0000;">不要年纪轻轻就选择安逸，因为你还没有到安逸的年纪</span></p>\r\n', '2017-12-31 02:27:45');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `email` text,
  `zctime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `regip` varchar(30) DEFAULT NULL,
  `yonghuleixing` int(10) DEFAULT '2',
  `jifen` int(10) DEFAULT '2',
  `denglutime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `denglusuo` int(11) NOT NULL DEFAULT '0',
  `touxiang` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT '/images/touxiang.gif',
  `zhenshixingming` text,
  `xingbie` text,
  `qqhao` varchar(11) DEFAULT NULL,
  `shengri` text,
  `jiguan` text,
  `phone` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `email`, `zctime`, `regip`, `yonghuleixing`, `jifen`, `denglutime`, `denglusuo`, `touxiang`, `zhenshixingming`, `xingbie`, `qqhao`, `shengri`, `jiguan`, `phone`) VALUES
(1, 'admin', '123456', NULL, '2018-02-21 06:26:01', NULL, 1, 2, '2018-02-21 06:26:01', 0, '/uploads/f68a6eec1d115708314a046e26f6c623.gif', NULL, NULL, NULL, NULL, NULL, '17777787662'),
(124, '111', '123456', NULL, '2018-02-21 06:27:35', NULL, 2, 2, '2018-02-21 06:27:35', 0, '/images/touxiang.gif', NULL, NULL, NULL, NULL, NULL, '111'),
(125, 'qqq', 'qqq', NULL, '2018-02-27 07:15:32', NULL, 2, 2, '2018-02-27 07:15:32', 0, '/images/touxiang.gif', NULL, NULL, NULL, NULL, NULL, '17777787662'),
(126, '123', '123', NULL, '2018-02-28 06:13:53', NULL, 2, 2, '2018-02-28 06:13:53', 0, '/images/touxiang.gif', NULL, NULL, NULL, NULL, NULL, '17777787662');

-- --------------------------------------------------------

--
-- 表的结构 `zhandianxinxi`
--

DROP TABLE IF EXISTS `zhandianxinxi`;
CREATE TABLE IF NOT EXISTS `zhandianxinxi` (
  `zid` int(11) NOT NULL,
  `wzmc` text NOT NULL,
  `url` varchar(32) NOT NULL,
  `badm` text NOT NULL,
  `zdmc` text NOT NULL,
  `guanbizd` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`zid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zhandianxinxi`
--

INSERT INTO `zhandianxinxi` (`zid`, `wzmc`, `url`, `badm`, `zdmc`, `guanbizd`) VALUES
(1, 'cc', 'URL', '京ICP备 89273号', 'aa', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
