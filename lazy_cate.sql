/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : lazy

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 03/08/2018 17:29:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for lazy_cate
-- ----------------------------
DROP TABLE IF EXISTS `lazy_cate`;
CREATE TABLE `lazy_cate`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT 0 COMMENT '父ID',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '名称',
  `is_del` tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否删除 0否 1是',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lazy_cate
-- ----------------------------
INSERT INTO `lazy_cate` VALUES (1, 0, 'PHP', 0);
INSERT INTO `lazy_cate` VALUES (2, 1, 'Laravel', 0);
INSERT INTO `lazy_cate` VALUES (3, 4, 'predis', 0);
INSERT INTO `lazy_cate` VALUES (4, 0, 'database', 0);
INSERT INTO `lazy_cate` VALUES (22, 0, 'front', 1);
INSERT INTO `lazy_cate` VALUES (18, 4, 'NoSql', 1);

SET FOREIGN_KEY_CHECKS = 1;
