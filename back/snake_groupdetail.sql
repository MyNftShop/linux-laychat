SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `snake_groupdetail`;
CREATE TABLE `snake_groupdetail` (
  `userid` int(11) NOT NULL,
  `username` varchar(155) NOT NULL,
  `useravatar` varchar(155) NOT NULL,
  `usersign` varchar(155) NOT NULL,
  `groupid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

