--mysql_database_schema.sql
--Schema for the cakephp framework exercise MySQL database server


CREATE DATABASE cakephp;

--if want to grant, use line below.
--grant all privileges on cakephp.* to ‘cakephp’@’localhost’ identified by ‘abc123’;


CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_caption` varchar(250) DEFAULT NULL,
  `image_cover` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


)

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
