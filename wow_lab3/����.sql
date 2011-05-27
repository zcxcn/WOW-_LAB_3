-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 04 月 17 日 06:47
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `传奇`
--

-- --------------------------------------------------------

--
-- 表的结构 `副本`
--

CREATE TABLE IF NOT EXISTS `副本` (
  `副本名称` varchar(12) NOT NULL,
  `难度` double NOT NULL,
  `简介` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `副本`
--

INSERT INTO `副本` (`副本名称`, `难度`, `简介`) VALUES
('地狱火城墙', 1.1, '这是一个哈啊我的发哈发挥 地方撒的萨芬地方按时法哈德斯卡的十分看好lsd附件开发的撒谎广告法撒旦撒地方 是打发似的发爱上对方发生大关卡的方式更发达时发生大国的司法会计的手法地方撒倒萨犯规 '),
('破碎大厅', 2.2, '这还是带欧式打火机ask打开按时很多事大幅缓解开了爱使股份啦事故的空间啊飞ads发发的撒个士大夫啊范德萨就爱上的风格'),
('炼狱', 3.3, '扎进回家啊飞案发当时 阿斯达的发放都是 阿方索地方噶阿凡达是埃弗顿 猛鬼刚出门呢地方安徽'),
('龙门客栈', 4.4, '龙门客栈，有趣啊啊是案发时大声地方噶速度飞洒安抚 案发生的各个房间前往瓦尔高原反应个撒打发打发 ，啊啊范德萨 。'),
('华山古道', 5.5, '这是给一个重码不穿衣土丘哈地方范德萨范德萨的多发几个回复的的大部iryaf 发的是干哈范德萨 阿反击打法案发生地gadfly\r\n尽情想了吧！');

-- --------------------------------------------------------

--
-- 表的结构 `莫愁`
--

CREATE TABLE IF NOT EXISTS `莫愁` (
  `所副本名称` varchar(20) NOT NULL,
  `名称` varchar(20) NOT NULL,
  `HP` int(10) NOT NULL,
  `MP` int(10) NOT NULL,
  `坐标-X` int(10) NOT NULL,
  `坐标-Y` int(10) NOT NULL,
  KEY `ID` (`所副本名称`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `莫愁`
--

INSERT INTO `莫愁` (`所副本名称`, `名称`, `HP`, `MP`, `坐标-X`, `坐标-Y`) VALUES
('地狱火城墙', '巡视者加戈玛', 80, 80, 10, 20),
('地狱火城墙', '无疤者奥摩尔', 50, 80, 30, 20),
('地狱火城墙', '传令官瓦兹德', 90, 80, 70, 80),
('破碎大厅', ' 高阶术士奈瑟库斯', 40, 20, 40, 50),
('破碎大厅', ' 战争使者沃姆罗格', 77, 55, 67, 57),
('炼狱', ' 酋长卡加斯·刃拳', 71, 85, 72, 44),
('龙门客栈', '古巨基', 500, 1000, 10, 80),
('华山古道', '刘的胡', 43, 84, 12, 33);

-- --------------------------------------------------------

--
-- 表的结构 `装备`
--

CREATE TABLE IF NOT EXISTS `装备` (
  `装备ID` int(11) NOT NULL,
  `装备名称` varchar(20) CHARACTER SET utf8 NOT NULL,
  `装备生命值` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `装备`
--

INSERT INTO `装备` (`装备ID`, `装备名称`, `装备生命值`) VALUES
(1, '散兵的鳞片护腿', 0),
(2, '光触胸甲', 0),
(3, '奥术怒火护肩', 0),
(4, '影裂长剑', 0),
(5, '诡计护腕', 0);

-- --------------------------------------------------------

--
-- 表的结构 `身份认证`
--

CREATE TABLE IF NOT EXISTS `身份认证` (
  `用户名` varchar(20) CHARACTER SET utf8 NOT NULL,
  `密码` varchar(22) CHARACTER SET utf8 NOT NULL,
  `邮箱` varchar(22) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `身份认证`
--

INSERT INTO `身份认证` (`用户名`, `密码`, `邮箱`) VALUES
('admin', 'admin', 'zhzhliyu@163.com'),
('Nersle', '1211-=lhhj', 'chailudi@gmail.com'),
('', '', '');
