/*
MySQL Data Transfer
Source Host: localhost
Source Database: mydb
Target Host: localhost
Target Database: mydb
Date: 2011/6/3 13:59:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(50) default NULL,
  `lastname` varchar(50) default NULL,
  `phone` varchar(200) default NULL,
  `email` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'fname1', 'lname1', '(000)000-0000', 'name1@gmail.com');
INSERT INTO `users` VALUES ('4', 'fname2', 'lname2', '(000)000-0000', 'name2@gmail.com');
INSERT INTO `users` VALUES ('5', 'fname3', 'lname3', '(000)000-0000', 'name3@gmail.com');
INSERT INTO `users` VALUES ('7', 'fname4', 'lname4', '(000)000-0000', 'name4@gmail.com');
INSERT INTO `users` VALUES ('8', 'fname5', 'lname5', '(000)000-0000', 'name5@gmail.com');
INSERT INTO `users` VALUES ('9', 'fname6', 'lname6', '(000)000-0000', 'name6@gmail.com');
INSERT INTO `users` VALUES ('10', 'fname7', 'lname7', '(000)000-0000', 'name7@gmail.com');
INSERT INTO `users` VALUES ('11', 'fname8', 'lname8', '(000)000-0000', 'name8@gmail.com');
INSERT INTO `users` VALUES ('12', 'fname9', 'lname9', '(000)000-0000', 'name9@gmail.com');
INSERT INTO `users` VALUES ('13', 'fname10', 'lname10', '(000)000-0000', 'name10@gmail.com');

INSERT INTO `users` VALUES ('14', 'fname11', 'lname11', '(000)000-0000', 'name11@gmail.com');
INSERT INTO `users` VALUES ('15', 'fname12', 'lname12', '(000)000-0000', 'name12@gmail.com');
INSERT INTO `users` VALUES ('16', 'fname13', 'lname13', '(000)000-0000', 'name13@gmail.com');
INSERT INTO `users` VALUES ('17', 'fname14', 'lname14', '(000)000-0000', 'name14@gmail.com');
INSERT INTO `users` VALUES ('18', 'fname15', 'lname15', '(000)000-0000', 'name15@gmail.com');
INSERT INTO `users` VALUES ('19', 'fname16', 'lname16', '(000)000-0000', 'name16@gmail.com');
INSERT INTO `users` VALUES ('20', 'fname17', 'lname17', '(000)000-0000', 'name17@gmail.com');
INSERT INTO `users` VALUES ('21', 'fname18', 'lname18', '(000)000-0000', 'name18@gmail.com');
INSERT INTO `users` VALUES ('22', 'fname19', 'lname19', '(000)000-0000', 'name19@gmail.com');
INSERT INTO `users` VALUES ('23', 'fname20', 'lname20', '(000)000-0000', 'name20@gmail.com');

INSERT INTO `users` VALUES ('24', 'fname21', 'lname21', '(000)000-0000', 'name21@gmail.com');
INSERT INTO `users` VALUES ('25', 'fname22', 'lname22', '(000)000-0000', 'name22@gmail.com');
INSERT INTO `users` VALUES ('26', 'fname23', 'lname23', '(000)000-0000', 'name23@gmail.com');
INSERT INTO `users` VALUES ('27', 'fname24', 'lname24', '(000)000-0000', 'name24@gmail.com');
INSERT INTO `users` VALUES ('28', 'fname25', 'lname25', '(000)000-0000', 'name25@gmail.com');
INSERT INTO `users` VALUES ('29', 'fname26', 'lname26', '(000)000-0000', 'name26@gmail.com');
INSERT INTO `users` VALUES ('30', 'fname27', 'lname27', '(000)000-0000', 'name27@gmail.com');
INSERT INTO `users` VALUES ('31', 'fname28', 'lname28', '(000)000-0000', 'name28@gmail.com');
INSERT INTO `users` VALUES ('32', 'fname29', 'lname29', '(000)000-0000', 'name29@gmail.com');
INSERT INTO `users` VALUES ('33', 'fname30', 'lname30', '(000)000-0000', 'name30@gmail.com');
