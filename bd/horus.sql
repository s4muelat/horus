/*
Navicat MySQL Data Transfer

Source Server         : XAMPP
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : horus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-03-14 17:19:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for login_usuarios
-- ----------------------------
DROP TABLE IF EXISTS `login_usuarios`;
CREATE TABLE `login_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cadastro` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` char(32) NOT NULL,
  `hash` char(32) NOT NULL,
  `ultimo_acesso_ipv4` varchar(15) NOT NULL,
  `cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ultimo_acesso` datetime NOT NULL,
  `senha_alterada` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of login_usuarios
-- ----------------------------
INSERT INTO `login_usuarios` VALUES ('1', '1', 'Samuel', 'contatu@live.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '200.200.200', '2022-03-14 09:44:51', '2022-03-14 09:44:51', '2022-03-14 09:44:51');
INSERT INTO `login_usuarios` VALUES ('2', '2', 'João', 'joao@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '200.200.201', '2022-03-14 09:44:51', '2022-03-14 09:44:51', '2022-03-14 09:44:51');
