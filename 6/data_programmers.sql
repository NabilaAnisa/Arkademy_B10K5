/*
 Navicat Premium Data Transfer

 Source Server         : MySql Local
 Source Server Type    : MySQL
 Source Server Version : 50637
 Source Host           : localhost:3306
 Source Schema         : data_programmers

 Target Server Type    : MySQL
 Target Server Version : 50637
 File Encoding         : 65001

 Date: 25/05/2019 20:07:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for skills
-- ----------------------------
DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of skills
-- ----------------------------
INSERT INTO `skills` VALUES (1, 'JavaScript', 1);
INSERT INTO `skills` VALUES (2, 'HTML', 1);
INSERT INTO `skills` VALUES (3, 'CSS', 1);
INSERT INTO `skills` VALUES (4, '.NET', 2);
INSERT INTO `skills` VALUES (5, 'SQLServer', 2);
INSERT INTO `skills` VALUES (6, 'ASP.Net', 2);
INSERT INTO `skills` VALUES (8, 'Bootstrap', 3);
INSERT INTO `skills` VALUES (9, 'JQuery', 3);
INSERT INTO `skills` VALUES (10, 'asdasdasd', 3);
INSERT INTO `skills` VALUES (11, 'asfasf', 3);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Nabila Anisa');
INSERT INTO `user` VALUES (2, 'Nurul');
INSERT INTO `user` VALUES (3, 'Bila');

SET FOREIGN_KEY_CHECKS = 1;
