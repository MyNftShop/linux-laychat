# Host: localhost  (Version 5.6.21)
# Date: 2018-05-07 22:42:41
# Generator: MySQL-Front 5.4  (Build 4.153) - http://www.mysqlfront.de/

/*!40101 SET NAMES utf8 */;

#
# Structure for table "snake_archives"
#

DROP TABLE IF EXISTS `snake_archives`;
CREATE TABLE `snake_archives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(155) NOT NULL,
  `url` varchar(155) NOT NULL,
  `keywords` varchar(155) DEFAULT '' COMMENT '文章关键词',
  `description` varchar(155) DEFAULT '' COMMENT '文章的描述',
  `typeid` int(5) NOT NULL DEFAULT '1' COMMENT '文章栏目id',
  `sort` int(3) NOT NULL DEFAULT '1' COMMENT '文章权重',
  `cnum` int(10) NOT NULL DEFAULT '2' COMMENT '文章点击次数',
  `writer` varchar(155) NOT NULL DEFAULT 'admin' COMMENT '文章作者',
  `addtime` int(10) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "snake_archives"
#


#
# Structure for table "snake_articleinfo"
#

DROP TABLE IF EXISTS `snake_articleinfo`;
CREATE TABLE `snake_articleinfo` (
  `aid` int(11) NOT NULL COMMENT '文章对应的id',
  `body` text NOT NULL,
  `typeid` int(5) NOT NULL DEFAULT '1' COMMENT '文章栏目id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "snake_articleinfo"
#


#
# Structure for table "snake_category"
#

DROP TABLE IF EXISTS `snake_category`;
CREATE TABLE `snake_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(255) NOT NULL COMMENT '类别名称',
  `type` varchar(155) NOT NULL COMMENT '归属分类',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 启用 2 禁用',
  `typeid` int(11) NOT NULL COMMENT '父类id',
  PRIMARY KEY (`id`),
  KEY `type` (`type`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "snake_category"
#


#
# Structure for table "snake_chatgroup"
#

DROP TABLE IF EXISTS `snake_chatgroup`;
CREATE TABLE `snake_chatgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '群组id',
  `groupname` varchar(155) NOT NULL COMMENT '群组名称',
  `avatar` varchar(155) DEFAULT NULL COMMENT '群组头像',
  `owner_name` varchar(155) DEFAULT NULL COMMENT '群主名称',
  `owner_id` int(11) DEFAULT NULL COMMENT '群主id',
  `owner_avatar` varchar(155) DEFAULT NULL COMMENT '群主头像',
  `owner_sign` varchar(155) DEFAULT NULL COMMENT '群主签名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "snake_chatgroup"
#

/*!40000 ALTER TABLE `snake_chatgroup` DISABLE KEYS */;
INSERT INTO `snake_chatgroup` VALUES (1,'Time end','/uploads/20180506/091dcacafbb7846424e550460a682fc1.png','马云',2,'http://tp4.sinaimg.cn/2145291155/180/5601307179/1','让天下没有难写的代码');
/*!40000 ALTER TABLE `snake_chatgroup` ENABLE KEYS */;

#
# Structure for table "snake_chatlog"
#

DROP TABLE IF EXISTS `snake_chatlog`;
CREATE TABLE `snake_chatlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromid` int(11) NOT NULL COMMENT '会话来源id',
  `fromname` varchar(155) NOT NULL DEFAULT '' COMMENT '消息来源用户名',
  `fromavatar` varchar(155) NOT NULL DEFAULT '' COMMENT '来源的用户头像',
  `toid` int(11) NOT NULL COMMENT '会话发送的id',
  `content` text NOT NULL COMMENT '发送的内容',
  `timeline` int(10) NOT NULL COMMENT '记录时间',
  `type` varchar(55) NOT NULL COMMENT '聊天类型',
  `needsend` tinyint(1) DEFAULT '0' COMMENT '0 不需要推送 1 需要推送',
  PRIMARY KEY (`id`),
  KEY `fromid` (`fromid`) USING BTREE,
  KEY `toid` (`toid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

#
# Data for table "snake_chatlog"
#

/*!40000 ALTER TABLE `snake_chatlog` DISABLE KEYS */;
INSERT INTO `snake_chatlog` VALUES (1,0,'','',13,'11',1525574823,'friend',0),(2,0,'','',3,'5454',1525574827,'friend',0),(3,3,'mm02','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',13,'654',1525574849,'friend',0),(4,13,'mm01','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',3,'65464',1525574854,'friend',0),(5,13,'mm01','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',3,'nih',1525574866,'friend',0),(6,3,'mm02','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',13,'\'',1525574869,'friend',0),(7,3,'mm02','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',13,'\'54564',1525574871,'friend',0),(8,13,'mm01','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',3,'65156651561',1525574880,'friend',0),(9,3,'mm02','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',13,'55556465465465561',1525574886,'friend',0),(10,2,'my','http://tp4.sinaimg.cn/2145291155/180/5601307179/1',1,'lkjlkj',1525574961,'group',0),(11,13,'mm01','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',1,'nim ',1525574989,'group',0),(12,13,'mm01','http://tp1.sinaimg.cn/1241679004/180/5743814375/0',1,'face[哈哈] ',1525575002,'group',0),(13,2,'my','http://tp4.sinaimg.cn/2145291155/180/5601307179/1',1,'你好',1525576221,'group',0),(14,2,'my','http://tp4.sinaimg.cn/2145291155/180/5601307179/1',1,'你好',1525576707,'group',0),(15,2,'my','http://tp4.sinaimg.cn/2145291155/180/5601307179/1',13,'01',1525576735,'friend',0);
/*!40000 ALTER TABLE `snake_chatlog` ENABLE KEYS */;

#
# Structure for table "snake_chatuser"
#

DROP TABLE IF EXISTS `snake_chatuser`;
CREATE TABLE `snake_chatuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(155) DEFAULT NULL,
  `pwd` varchar(155) DEFAULT NULL COMMENT '密码',
  `groupid` int(5) DEFAULT NULL COMMENT '所属的分组id',
  `status` varchar(55) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "snake_chatuser"
#

/*!40000 ALTER TABLE `snake_chatuser` DISABLE KEYS */;
INSERT INTO `snake_chatuser` VALUES (1,'sys','9db06bcff9248837f86d1a6bcf41c9e7',2,'outline','在深邃的编码世界，做一枚轻盈的纸飞机','http://cdn.firstlinkapp.com/upload/2016_6/1465575923433_33812.jpg'),(2,'my','9db06bcff9248837f86d1a6bcf41c9e7',2,'online','让天下没有难写的代码','http://tp4.sinaimg.cn/2145291155/180/5601307179/1'),(3,'mm02','9db06bcff9248837f86d1a6bcf41c9e7',3,'online','在自己实力不济的时候，不要去相信什么媒体和记者。他们不是善良的人，有时候候他们的采访对当事人而言就是陷阱','http://tp1.sinaimg.cn/1241679004/180/5743814375/0'),(13,'mm01','9db06bcff9248837f86d1a6bcf41c9e7',1,'online','前端就是这么牛','http://tp1.sinaimg.cn/1241679004/180/5743814375/0');
/*!40000 ALTER TABLE `snake_chatuser` ENABLE KEYS */;

#
# Structure for table "snake_groupdetail"
#

DROP TABLE IF EXISTS `snake_groupdetail`;
CREATE TABLE `snake_groupdetail` (
  `userid` int(11) NOT NULL,
  `username` varchar(155) NOT NULL,
  `useravatar` varchar(155) NOT NULL,
  `usersign` varchar(155) NOT NULL,
  `groupid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "snake_groupdetail"
#

/*!40000 ALTER TABLE `snake_groupdetail` DISABLE KEYS */;
INSERT INTO `snake_groupdetail` VALUES (1,'纸飞机','http://cdn.firstlinkapp.com/upload/2016_6/1465575923433_33812.jpg','在深邃的编码世界，做一枚轻盈的纸飞机',1),(2,'马云','http://tp4.sinaimg.cn/2145291155/180/5601307179/1','让天下没有难写的代码',1),(3,'罗玉凤','http://tp1.sinaimg.cn/1241679004/180/5743814375/0','在自己实力不济的时候，不要去相信什么媒体和记者。他们不是善良的人，有时候候他们的采访对当事人而言就是陷阱',1),(13,'前端大神','http://tp1.sinaimg.cn/1241679004/180/5743814375/0','前端就是这么牛',1);
/*!40000 ALTER TABLE `snake_groupdetail` ENABLE KEYS */;

#
# Structure for table "snake_node"
#

DROP TABLE IF EXISTS `snake_node`;
CREATE TABLE `snake_node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `node_name` varchar(155) NOT NULL DEFAULT '' COMMENT '节点名称',
  `module_name` varchar(155) NOT NULL DEFAULT '' COMMENT '模块名',
  `control_name` varchar(155) NOT NULL DEFAULT '' COMMENT '控制器名',
  `action_name` varchar(155) NOT NULL COMMENT '方法名',
  `is_menu` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否是菜单项 1不是 2是',
  `typeid` int(11) NOT NULL COMMENT '父级节点id',
  `style` varchar(155) DEFAULT '' COMMENT '菜单样式',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

#
# Data for table "snake_node"
#

/*!40000 ALTER TABLE `snake_node` DISABLE KEYS */;
INSERT INTO `snake_node` VALUES (1,'用户管理','#','#','#',2,0,'fa fa-users'),(2,'用户列表','admin','user','index',2,1,''),(3,'添加用户','admin','user','useradd',1,2,''),(4,'编辑用户','admin','user','useredit',1,2,''),(5,'删除用户','admin','user','userdel',1,2,''),(6,'角色列表','admin','role','index',2,1,''),(7,'添加角色','admin','role','roleadd',1,6,''),(8,'编辑角色','admin','role','roleedit',1,6,''),(9,'删除角色','admin','role','roledel',1,6,''),(10,'分配权限','admin','role','giveaccess',1,6,''),(11,'系统管理','#','#','#',2,0,'fa fa-desktop'),(12,'数据备份/还原','admin','data','index',2,11,''),(13,'备份数据','admin','data','importdata',1,12,''),(14,'还原数据','admin','data','backdata',1,12,''),(15,'采集管理','admin','#','#',2,0,'fa fa-hdd-o'),(16,'采集测试','admin','tcollect','index',2,15,''),(17,'测试列表','admin','tcollect','testlist',1,17,''),(18,'测试文章','admin','tcollect','testarc',1,17,''),(19,'采集规则列表','admin','rulelist','index',2,15,''),(20,'添加采集规则','admin','rulelist','ruleadd',1,20,''),(21,'编辑采集规则','admin','rulelist','ruleedit',1,20,''),(22,'删除采集规则','admin','rulelist','ruledel',1,20,''),(23,'LayChat管理','#','#','#',2,0,'fa fa-paw'),(24,'laychat用户管理','admin','layuser','index',2,23,''),(25,'laychat消息记录','admin','laymsg','index',2,23,''),(26,'laychat用户添加','admin','layuser','useradd',1,24,''),(27,'laychat用户删除','admin','layuser','userdel',1,24,''),(28,'laychat用户编辑','admin','layuser','useredit',1,24,'');
/*!40000 ALTER TABLE `snake_node` ENABLE KEYS */;

#
# Structure for table "snake_role"
#

DROP TABLE IF EXISTS `snake_role`;
CREATE TABLE `snake_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `rolename` varchar(155) NOT NULL COMMENT '角色名称',
  `rule` varchar(255) DEFAULT '' COMMENT '权限节点数据',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "snake_role"
#

/*!40000 ALTER TABLE `snake_role` DISABLE KEYS */;
INSERT INTO `snake_role` VALUES (1,'超级管理员',''),(2,'系统维护员','1,2,3,4,5,6,7,8,9,10'),(3,'新闻发布员','1,2,3,4,5');
/*!40000 ALTER TABLE `snake_role` ENABLE KEYS */;

#
# Structure for table "snake_rule"
#

DROP TABLE IF EXISTS `snake_rule`;
CREATE TABLE `snake_rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rulename` varchar(155) NOT NULL COMMENT '规则标题',
  `baseurl` varchar(155) NOT NULL COMMENT '采集站点的地址',
  `listurl` varchar(155) NOT NULL COMMENT '列表页地址',
  `ismore` tinyint(1) NOT NULL COMMENT '是否批量采集 1 否 2是',
  `start` int(11) DEFAULT '0' COMMENT '列表页开始地址',
  `end` int(11) DEFAULT '0' COMMENT '列表页结束地址',
  `titlediv` varchar(155) NOT NULL COMMENT '标题父层地址',
  `title` varchar(155) NOT NULL COMMENT '文章标题内容规则',
  `titleurl` varchar(155) NOT NULL COMMENT '标题地址规则',
  `body` varchar(155) NOT NULL COMMENT '文章内容规则',
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "snake_rule"
#

/*!40000 ALTER TABLE `snake_rule` DISABLE KEYS */;
INSERT INTO `snake_rule` VALUES (1,'脚本之家php文章采集','http://www.jb51.net','http://www.jb51.net/list/list_15_1.htm',1,0,0,'.artlist dl dt a','text','href','#content',1471244221),(2,'thinkphp官网文章规则','http://www.thinkphp.cn','http://www.thinkphp.cn/code/system/p/1.html',1,0,0,'.extend ul li .hd a','text','href','.wrapper .detail-bd',1471244221),(3,'果壳网科学人采集规则','http://www.guokr.com','http://www.guokr.com/scientific/',1,0,0,'#waterfall .article h3 a','text','href','.document div:eq(0)',1471247277);
/*!40000 ALTER TABLE `snake_rule` ENABLE KEYS */;

#
# Structure for table "snake_user"
#

DROP TABLE IF EXISTS `snake_user`;
CREATE TABLE `snake_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '用户名',
  `password` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '密码',
  `loginnum` int(11) DEFAULT '0' COMMENT '登陆次数',
  `last_login_ip` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '最后登录IP',
  `last_login_time` int(11) DEFAULT '0' COMMENT '最后登录时间',
  `real_name` varchar(255) COLLATE utf8_bin DEFAULT '' COMMENT '真实姓名',
  `status` int(1) DEFAULT '0' COMMENT '状态',
  `typeid` int(11) DEFAULT '1' COMMENT '用户角色id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

#
# Data for table "snake_user"
#

INSERT INTO `snake_user` VALUES (1,'admin','96e79218965eb72c92a549dd5a330112',68,'127.0.0.1',1525575675,'admin',1,1),(2,'xiaobai','4297f44b13955235245b2497399d7a93',6,'127.0.0.1',1470368260,'小白',1,2);
