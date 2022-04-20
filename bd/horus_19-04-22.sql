/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : horus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-04-19 23:01:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular1` char(11) NOT NULL,
  `fixo1` char(10) NOT NULL,
  `cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'Roberto', 'Carlos da Silva', 'roberto@gmail.com', '3299999999', '1144444444', '2022-04-07 03:50:33');
INSERT INTO `clientes` VALUES ('2', 'Albert ', 'Eistein', 'einstein@hotmail.com', '3288888888', '2133333333', '2022-04-07 01:50:33');
INSERT INTO `clientes` VALUES ('3', 'Elba', 'Ramalho Pereira', 'elba@ramalho.com.br', '3277777777', '3212345678', '2022-04-07 01:53:01');
INSERT INTO `clientes` VALUES ('4', 'Samuel', 'Andrade Teixeira', 'contatu@live.com', '32984951223', '3200000000', '2022-04-19 21:32:48');
INSERT INTO `clientes` VALUES ('5', 'Danielle', 'Pereira Clarimundo', 'danny.p.c@hotmail.com', '32998112159', '3211111111', '2022-04-19 21:35:31');
INSERT INTO `clientes` VALUES ('6', 'Jose', 'Borbole', 'jb@terra.com.br', '32999999999', '4566666666', '2022-04-19 21:36:33');
INSERT INTO `clientes` VALUES ('7', 'Maria da Penha', 'Martins Andrade', 'penha@uol.com.br', '21222222222', '2145454545', '2022-04-19 21:37:24');
INSERT INTO `clientes` VALUES ('8', 'Maria das Dores', 'Andrade', 'mariaa@ig.com.br', '55333333333', '5522222222', '2022-04-19 21:42:49');
INSERT INTO `clientes` VALUES ('9', 'Marcelo', 'da Silva Coelho', 'marcelo@engbrasil.com', '11232323232', '2222222222', '2022-04-19 21:46:47');
INSERT INTO `clientes` VALUES ('10', 'Adalberto', 'Borboleta', 'borboleta@terra.com.br', '55333333333', '4455555555', '2022-04-19 22:07:13');
INSERT INTO `clientes` VALUES ('11', 'Samuel', 'Andrade', 'samuel.andrade.t@gmail.com', '19999999999', '1922222222', '2022-04-19 22:18:39');
INSERT INTO `clientes` VALUES ('12', 'Sabrina', 'Oliveira Pires', 'sab@gmail.com', '14555555555', '2177777777', '2022-04-19 22:27:30');
INSERT INTO `clientes` VALUES ('13', 'Samir', 'Junior Pereira', 'samir@uol.com.br', '33988888888', '3211111111', '2022-04-19 22:28:24');
INSERT INTO `clientes` VALUES ('14', 'Suelen', 'da Cunha Xavier', 'suxavier@live.com', '44555555555', '5555555555', '2022-04-19 22:43:55');

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
  `ativo` char(1) NOT NULL DEFAULT 'S',
  `bloqueado` char(1) NOT NULL DEFAULT 'N',
  `cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of login_usuarios
-- ----------------------------
INSERT INTO `login_usuarios` VALUES ('3', 'ADM Horus', 'admhors', 'adm@softhorus.com', 'e10adc3949ba59abbe56e057f20f883e', 'S', 'N', '2022-03-31 20:43:13');
INSERT INTO `login_usuarios` VALUES ('4', 'Samuel', 'samuelat', 'contatu@live.com', 'e10adc3949ba59abbe56e057f20f883e', 'S', 'N', '2022-03-31 20:43:11');
INSERT INTO `login_usuarios` VALUES ('5', 'Sebastião', 'sebastia', 'sebastiao@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'S', 'N', '2022-03-31 20:43:08');
INSERT INTO `login_usuarios` VALUES ('6', 'Maria', 'mariaand', 'maria@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'S', 'N', '2022-03-31 20:46:50');
INSERT INTO `login_usuarios` VALUES ('18', 'Junior', 'junior20', 'junior@softhorus.com', '480b4e358b7a68fb55c1eb83c97556f5', 'S', 'N', '2022-04-02 17:59:49');
