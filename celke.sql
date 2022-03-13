/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : celke

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 13/03/2022 19:33:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for enderecos
-- ----------------------------
DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE `enderecos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of enderecos
-- ----------------------------
INSERT INTO `enderecos` VALUES (1, 'Rua Assis Bezerra', '183', 1);
INSERT INTO `enderecos` VALUES (2, 'Rua Emilia Couto', '603', 2);

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Carlos André Silveira Freitas', 'casfreitas@outlook.com');
INSERT INTO `usuarios` VALUES (2, 'PEDRO ANSELMO DE SIQUEIRA SÃO THIAGO', 'andre.silveira.freitas@gmail.com');

SET FOREIGN_KEY_CHECKS = 1;
