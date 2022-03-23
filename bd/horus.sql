/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : horus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-03-23 14:52:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for login_acessos
-- ----------------------------
DROP TABLE IF EXISTS `login_acessos`;
CREATE TABLE `login_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` char(8) NOT NULL,
  `ip_v4` char(11) NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of login_acessos
-- ----------------------------

-- ----------------------------
-- Table structure for login_usuarios
-- ----------------------------
DROP TABLE IF EXISTS `login_usuarios`;
CREATE TABLE `login_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` char(32) NOT NULL,
  `hash` char(32) NOT NULL,
  `cadastro` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ultimo_acesso` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `senha_alterada` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of login_usuarios
-- ----------------------------
INSERT INTO `login_usuarios` VALUES ('2', 'João', 'joaodasi', 'joao@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2022-03-14 09:44:51', '2022-03-14 09:44:51', '2022-03-14 09:44:51');
