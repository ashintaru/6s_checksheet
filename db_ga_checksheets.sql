/*
 Navicat Premium Data Transfer

 Source Server         : 10.216.128.101
 Source Server Type    : MySQL
 Source Server Version : 80021
 Source Host           : 10.216.128.101:3306
 Source Schema         : db_ga_checksheets

 Target Server Type    : MySQL
 Target Server Version : 80021
 File Encoding         : 65001

 Date: 09/05/2025 17:04:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_area_code
-- ----------------------------
DROP TABLE IF EXISTS `tbl_area_code`;
CREATE TABLE `tbl_area_code`  (
  `area_code_id` int(0) NOT NULL AUTO_INCREMENT,
  `bldg_id` int(0) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`area_code_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_area_code
-- ----------------------------
INSERT INTO `tbl_area_code` VALUES (2, NULL, 'Canteen', '2025-04-02 09:27:43', '2025-04-08 17:07:34');
INSERT INTO `tbl_area_code` VALUES (4, NULL, 'Guest Room 1', '2025-04-11 10:47:25', '2025-04-11 10:47:25');
INSERT INTO `tbl_area_code` VALUES (5, NULL, 'Guest Room 2', '2025-04-11 11:11:30', '2025-04-11 11:11:30');
INSERT INTO `tbl_area_code` VALUES (7, NULL, 'Comfort Room #2', '2025-04-22 15:56:58', '2025-04-22 15:56:58');
INSERT INTO `tbl_area_code` VALUES (8, NULL, 'Comfort Room #3', '2025-04-22 16:09:15', '2025-04-22 16:09:15');
INSERT INTO `tbl_area_code` VALUES (9, NULL, 'Comfort Room #4', '2025-04-22 17:04:27', '2025-04-22 17:04:27');
INSERT INTO `tbl_area_code` VALUES (10, NULL, 'Comfort Room #5', '2025-04-22 17:05:26', '2025-04-22 17:05:26');
INSERT INTO `tbl_area_code` VALUES (11, NULL, 'Comfort Room #6', '2025-04-22 17:06:37', '2025-04-22 17:06:37');
INSERT INTO `tbl_area_code` VALUES (12, NULL, 'Comfort Room #7', '2025-04-22 17:07:39', '2025-04-22 17:07:39');
INSERT INTO `tbl_area_code` VALUES (14, NULL, 'Comfort Room #1', '2025-04-23 07:50:37', '2025-04-23 07:50:37');
INSERT INTO `tbl_area_code` VALUES (15, NULL, 'Comfort Room #8', '2025-04-23 07:52:44', '2025-04-23 07:52:44');
INSERT INTO `tbl_area_code` VALUES (17, NULL, 'Comfort Room #9', '2025-04-23 07:53:15', '2025-04-23 07:53:15');
INSERT INTO `tbl_area_code` VALUES (18, NULL, 'Comfort Room #10', '2025-04-23 07:54:09', '2025-04-23 07:54:09');
INSERT INTO `tbl_area_code` VALUES (20, NULL, 'Comfort Room #11', '2025-04-23 07:54:39', '2025-04-23 07:54:39');
INSERT INTO `tbl_area_code` VALUES (21, NULL, 'Comfort Room #12', '2025-04-23 07:55:04', '2025-04-23 07:55:04');
INSERT INTO `tbl_area_code` VALUES (22, NULL, 'Comfort Room #13', '2025-04-23 07:55:54', '2025-04-23 07:55:54');
INSERT INTO `tbl_area_code` VALUES (24, NULL, 'Comfort Room #14', '2025-04-23 07:56:38', '2025-04-23 07:56:38');
INSERT INTO `tbl_area_code` VALUES (25, NULL, 'Comfort Room #15', '2025-04-23 07:58:10', '2025-04-23 07:58:10');
INSERT INTO `tbl_area_code` VALUES (26, NULL, 'Comfort Room #16', '2025-04-23 07:58:28', '2025-04-23 07:58:28');
INSERT INTO `tbl_area_code` VALUES (27, NULL, 'Comfort Room #17', '2025-04-23 07:58:44', '2025-04-23 07:58:44');
INSERT INTO `tbl_area_code` VALUES (28, NULL, 'Gate 1', '2025-04-23 07:59:21', '2025-04-23 07:59:21');
INSERT INTO `tbl_area_code` VALUES (29, NULL, 'Gate 3', '2025-04-23 07:59:33', '2025-04-23 07:59:33');
INSERT INTO `tbl_area_code` VALUES (30, NULL, 'Comfort Room G1/M', '2025-04-23 14:13:12', '2025-04-23 14:13:12');
INSERT INTO `tbl_area_code` VALUES (31, NULL, 'Comfort Room G1/F', '2025-04-23 14:13:51', '2025-04-23 14:13:51');
INSERT INTO `tbl_area_code` VALUES (32, NULL, 'Comfort Room G3 (M/F)', '2025-04-23 14:18:34', '2025-04-23 14:18:34');
INSERT INTO `tbl_area_code` VALUES (34, NULL, 'try', '2025-04-23 16:30:21', '2025-05-05 08:03:49');

-- ----------------------------
-- Table structure for tbl_building
-- ----------------------------
DROP TABLE IF EXISTS `tbl_building`;
CREATE TABLE `tbl_building`  (
  `building_id` int(0) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`building_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_building
-- ----------------------------
INSERT INTO `tbl_building` VALUES (1, 'Building A', '2025-04-02 07:12:13', '2025-04-02 07:12:13');
INSERT INTO `tbl_building` VALUES (2, 'Building B', '2025-04-02 07:49:04', '2025-04-02 07:49:04');
INSERT INTO `tbl_building` VALUES (3, 'Building C', '2025-04-02 07:49:16', '2025-04-02 07:49:16');
INSERT INTO `tbl_building` VALUES (4, 'Diecast Building', '2025-04-02 07:49:25', '2025-04-02 07:49:25');
INSERT INTO `tbl_building` VALUES (6, 'TDC', '2025-04-23 07:43:25', '2025-04-23 07:43:25');
INSERT INTO `tbl_building` VALUES (7, 'Gate 1', '2025-04-23 07:44:47', '2025-04-23 07:44:47');
INSERT INTO `tbl_building` VALUES (8, 'Gate 3', '2025-04-23 07:45:16', '2025-04-23 07:45:16');
INSERT INTO `tbl_building` VALUES (9, 'MB2', '2025-04-23 07:46:13', '2025-04-23 07:46:13');
INSERT INTO `tbl_building` VALUES (10, 'Back of Canteen', '2025-04-23 07:48:59', '2025-04-23 07:48:59');

-- ----------------------------
-- Table structure for tbl_check_template
-- ----------------------------
DROP TABLE IF EXISTS `tbl_check_template`;
CREATE TABLE `tbl_check_template`  (
  `checklist_id` int(0) NOT NULL AUTO_INCREMENT,
  `building` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_active` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`checklist_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_check_template
-- ----------------------------
INSERT INTO `tbl_check_template` VALUES (1, 'Building A', 'Comfort Room A', 'Floor', '1', '2025-04-10 15:11:28', '2025-04-10 15:11:28');
INSERT INTO `tbl_check_template` VALUES (2, 'Building C', 'Canteen', 'Light', '1', '2025-04-10 15:20:25', '2025-04-10 15:20:25');
INSERT INTO `tbl_check_template` VALUES (11, 'Building A', 'Comfort Room A', 'Light', '1', '2025-04-14 00:38:38', '2025-04-14 00:38:38');
INSERT INTO `tbl_check_template` VALUES (12, 'Building A', 'Comfort Room A', 'Faucet', '1', '2025-04-15 00:56:43', '2025-04-15 00:56:43');
INSERT INTO `tbl_check_template` VALUES (13, 'Building A', 'Comfort Room', 'Cubicle', '1', '2025-04-22 08:01:44', '2025-04-22 08:01:44');
INSERT INTO `tbl_check_template` VALUES (14, 'Building A', 'Comfort Room', 'Toilet Bowls or Urinals', '1', '2025-04-22 08:02:32', '2025-04-22 08:02:32');
INSERT INTO `tbl_check_template` VALUES (15, 'Building A', 'Comfort Room', 'Garbage Bins', '1', '2025-04-22 08:03:03', '2025-04-22 08:03:03');
INSERT INTO `tbl_check_template` VALUES (16, 'Building A', 'Comfort Room', 'Doors, Walls & Ceiling', '1', '2025-04-22 08:03:05', '2025-04-22 08:03:05');
INSERT INTO `tbl_check_template` VALUES (17, 'Building A', 'Comfort Room', 'Water Supply Faucet', '1', '2025-04-22 08:03:06', '2025-04-22 08:03:06');
INSERT INTO `tbl_check_template` VALUES (18, 'Building A', 'Comfort Room', 'Poster & Signages', '1', '2025-04-22 08:03:07', '2025-04-22 08:03:07');
INSERT INTO `tbl_check_template` VALUES (19, 'Building A', 'Comfort Room', 'Floors', '1', '2025-04-22 08:03:16', '2025-04-22 08:03:16');
INSERT INTO `tbl_check_template` VALUES (20, 'Building A', 'Comfort Room', 'Lights', '1', '2025-04-22 08:04:25', '2025-04-22 08:04:25');
INSERT INTO `tbl_check_template` VALUES (21, 'Building A', 'Comfort Room', 'Exhaust Fan', '1', '2025-04-22 08:04:53', '2025-04-22 08:04:53');
INSERT INTO `tbl_check_template` VALUES (22, 'Building A', 'Comfort Room', 'Bidet', '1', '2025-04-22 08:05:20', '2025-04-22 08:05:20');
INSERT INTO `tbl_check_template` VALUES (23, 'Building A', 'Comfort Room', 'Hand Soap', '1', '2025-04-22 08:05:35', '2025-04-22 08:05:35');
INSERT INTO `tbl_check_template` VALUES (24, 'Building A', 'Comfort Room', 'Faucet', '1', '2025-04-22 08:05:59', '2025-04-22 08:05:59');

-- ----------------------------
-- Table structure for tbl_checklist
-- ----------------------------
DROP TABLE IF EXISTS `tbl_checklist`;
CREATE TABLE `tbl_checklist`  (
  `checklist_id` int(0) NOT NULL AUTO_INCREMENT,
  `building` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('OK','NG') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `findings` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `priority` int(0) NULL DEFAULT NULL,
  `dri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`checklist_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_checklist
-- ----------------------------
INSERT INTO `tbl_checklist` VALUES (1, 'Building A', 'Comfort Room A', 'Floor', '', '1', 1, '0', '2025-04-10 15:11:28', '2025-04-10 15:11:28');
INSERT INTO `tbl_checklist` VALUES (2, 'Building C', 'Canteen', 'Light', '', '1', 3, '0', '2025-04-10 15:20:25', '2025-04-10 15:20:25');
INSERT INTO `tbl_checklist` VALUES (23, 'Building A', 'Comfort Room A', 'Floor', 'NG', 'Broken', 1, 'test', '2025-04-22 07:58:50', '2025-04-22 07:58:50');
INSERT INTO `tbl_checklist` VALUES (24, 'Building B', 'Canteen', 'Light', 'NG', 'Broken', 4, 'test', '2025-04-23 03:37:02', '2025-04-23 03:37:02');
INSERT INTO `tbl_checklist` VALUES (25, 'Building A', 'Canteen', 'Light', 'NG', 'Broken', 3, 'test', '2025-05-06 00:02:20', '2025-05-06 00:02:20');
INSERT INTO `tbl_checklist` VALUES (26, 'Building A', 'Canteen', 'Light', 'OK', 'Dirty', 2, 'test', '2025-05-06 00:47:02', '2025-05-06 00:47:02');

-- ----------------------------
-- Table structure for tbl_findings
-- ----------------------------
DROP TABLE IF EXISTS `tbl_findings`;
CREATE TABLE `tbl_findings`  (
  `finding_id` int(0) NOT NULL AUTO_INCREMENT,
  `finding_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`finding_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_findings
-- ----------------------------
INSERT INTO `tbl_findings` VALUES (1, 'Dirty', '2025-04-05 23:11:44', '2025-04-05 23:11:44');
INSERT INTO `tbl_findings` VALUES (2, 'Dim', '2025-04-11 11:13:14', '2025-04-11 11:13:14');
INSERT INTO `tbl_findings` VALUES (3, 'Clog', '2025-04-22 08:07:06', '2025-04-22 08:07:06');
INSERT INTO `tbl_findings` VALUES (4, 'Broken', '2025-04-22 08:07:11', '2025-04-22 08:07:11');
INSERT INTO `tbl_findings` VALUES (5, 'Missing', '2025-04-22 08:07:28', '2025-04-22 08:07:28');

-- ----------------------------
-- Table structure for tbl_items
-- ----------------------------
DROP TABLE IF EXISTS `tbl_items`;
CREATE TABLE `tbl_items`  (
  `item_id` int(0) NOT NULL AUTO_INCREMENT,
  `area_id` int(0) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_items
-- ----------------------------
INSERT INTO `tbl_items` VALUES (1, NULL, 'Light', '2025-04-02 08:58:13', '2025-04-02 08:58:13');
INSERT INTO `tbl_items` VALUES (2, NULL, 'Floor', '2025-04-02 08:58:24', '2025-04-02 08:58:24');
INSERT INTO `tbl_items` VALUES (3, NULL, 'Faucet', '2025-04-02 08:58:39', '2025-04-02 08:58:39');
INSERT INTO `tbl_items` VALUES (4, NULL, 'Door Knob', '2025-04-03 08:54:23', '2025-04-03 08:54:23');
INSERT INTO `tbl_items` VALUES (5, NULL, 'Chair', '2025-04-09 07:55:50', '2025-04-09 07:55:50');
INSERT INTO `tbl_items` VALUES (6, NULL, 'Aircon', '2025-04-11 09:44:06', '2025-04-11 09:44:06');
INSERT INTO `tbl_items` VALUES (7, NULL, 'CHIKSHET ITEM', '2025-04-11 11:13:23', '2025-04-11 11:13:23');
INSERT INTO `tbl_items` VALUES (8, NULL, 'Cabinet', '2025-04-21 11:55:11', '2025-04-21 11:55:11');
INSERT INTO `tbl_items` VALUES (9, NULL, 'Urinal', '2025-04-24 08:42:47', '2025-04-24 08:42:47');
INSERT INTO `tbl_items` VALUES (10, NULL, 'Temperature', '2025-04-28 08:22:27', '2025-04-28 08:22:27');
INSERT INTO `tbl_items` VALUES (11, NULL, 'Exhaust', '2025-04-28 08:23:05', '2025-04-28 08:23:05');
INSERT INTO `tbl_items` VALUES (12, NULL, 'Smell', '2025-04-28 08:23:40', '2025-04-28 08:23:40');
INSERT INTO `tbl_items` VALUES (13, NULL, 'Bidet', '2025-04-28 08:24:05', '2025-04-28 08:24:05');
INSERT INTO `tbl_items` VALUES (14, NULL, 'Toilet Bowl', '2025-04-28 08:24:39', '2025-04-28 08:24:39');
INSERT INTO `tbl_items` VALUES (15, NULL, 'Lavatory', '2025-04-28 08:25:07', '2025-04-28 08:25:07');
INSERT INTO `tbl_items` VALUES (16, NULL, 'Mirror', '2025-04-28 08:25:49', '2025-04-28 08:25:49');
INSERT INTO `tbl_items` VALUES (17, NULL, 'Soap', '2025-04-28 08:26:21', '2025-04-28 08:26:21');
INSERT INTO `tbl_items` VALUES (18, NULL, 'Cubicle', '2025-04-28 08:27:19', '2025-04-28 08:27:19');
INSERT INTO `tbl_items` VALUES (19, NULL, 'Trash Bin', '2025-04-28 08:27:58', '2025-04-28 08:27:58');

-- ----------------------------
-- Table structure for tbl_maintenance
-- ----------------------------
DROP TABLE IF EXISTS `tbl_maintenance`;
CREATE TABLE `tbl_maintenance`  (
  `maintenance_id` int(0) NOT NULL AUTO_INCREMENT,
  `building` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`maintenance_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 102 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_maintenance
-- ----------------------------
INSERT INTO `tbl_maintenance` VALUES (5, 'Building B', 'Guest Room 1', 'Faucet', '2025-04-22 09:17:44', '2025-04-22 09:17:44');
INSERT INTO `tbl_maintenance` VALUES (7, 'Building A', 'Comfort Room #2', 'Light', '2025-04-22 15:58:21', '2025-04-22 15:58:21');
INSERT INTO `tbl_maintenance` VALUES (8, 'Building A', 'Comfort Room #3', 'Light', '2025-04-22 17:02:51', '2025-04-22 17:02:51');
INSERT INTO `tbl_maintenance` VALUES (9, 'Building B', 'Comfort Room #6', 'Light', '2025-04-22 17:07:06', '2025-04-22 17:07:06');
INSERT INTO `tbl_maintenance` VALUES (11, 'Building A', 'Comfort Room #4', 'Light', '2025-04-22 17:16:40', '2025-04-22 17:16:40');
INSERT INTO `tbl_maintenance` VALUES (12, 'Building A', 'Comfort Room #5', 'Light', '2025-04-22 17:17:16', '2025-04-22 17:17:16');
INSERT INTO `tbl_maintenance` VALUES (13, 'Building A', 'Comfort Room #1', 'Light', '2025-04-23 07:51:13', '2025-04-23 07:51:13');
INSERT INTO `tbl_maintenance` VALUES (14, 'Back of Canteen', 'Comfort Room #7', 'Light', '2025-04-23 13:42:28', '2025-04-23 13:42:28');
INSERT INTO `tbl_maintenance` VALUES (15, 'TDC', 'Comfort Room #8', 'Light', '2025-04-23 13:43:15', '2025-04-23 13:43:15');
INSERT INTO `tbl_maintenance` VALUES (16, 'MB2', 'Comfort Room #9', 'Light', '2025-04-23 13:44:04', '2025-04-23 13:44:04');
INSERT INTO `tbl_maintenance` VALUES (17, 'Building C', 'Comfort Room #10', 'Light', '2025-04-23 13:45:45', '2025-04-23 13:45:45');
INSERT INTO `tbl_maintenance` VALUES (18, 'Building C', 'Comfort Room #11', 'Light', '2025-04-23 13:46:39', '2025-04-23 13:46:39');
INSERT INTO `tbl_maintenance` VALUES (19, 'Building C', 'Comfort Room #12', 'Light', '2025-04-23 13:47:57', '2025-04-23 13:47:57');
INSERT INTO `tbl_maintenance` VALUES (20, 'Building C', 'Comfort Room #13', 'Light', '2025-04-23 13:49:48', '2025-04-23 13:49:48');
INSERT INTO `tbl_maintenance` VALUES (21, 'Diecast Building', 'Comfort Room #14', 'Light', '2025-04-23 14:08:51', '2025-04-23 14:08:51');
INSERT INTO `tbl_maintenance` VALUES (22, 'Diecast Building', 'Comfort Room #15', 'Light', '2025-04-23 14:09:36', '2025-04-23 14:09:36');
INSERT INTO `tbl_maintenance` VALUES (23, 'Diecast Building', 'Comfort Room #16', 'Light', '2025-04-23 14:10:04', '2025-04-23 14:10:04');
INSERT INTO `tbl_maintenance` VALUES (24, 'Diecast Building', 'Comfort Room #17', 'Light', '2025-04-23 14:10:33', '2025-04-23 14:10:33');
INSERT INTO `tbl_maintenance` VALUES (27, 'Gate 1', 'Comfort Room G1/M', 'Light', '2025-04-23 14:16:46', '2025-04-23 14:16:46');
INSERT INTO `tbl_maintenance` VALUES (28, 'Gate 1', 'Comfort Room G1/F', 'Light', '2025-04-23 14:17:19', '2025-04-23 14:17:19');
INSERT INTO `tbl_maintenance` VALUES (29, 'Gate 3', 'Comfort Room G3 (M/F)', 'Light', '2025-04-23 14:19:16', '2025-04-23 14:19:16');
INSERT INTO `tbl_maintenance` VALUES (30, 'Building A', 'Comfort Room #1', 'Faucet', '2025-04-24 08:20:23', '2025-04-24 08:20:23');
INSERT INTO `tbl_maintenance` VALUES (31, 'Building A', 'Comfort Room #2', 'Faucet', '2025-04-24 08:21:19', '2025-04-24 08:21:19');
INSERT INTO `tbl_maintenance` VALUES (32, 'Building A', 'Comfort Room #3', 'Faucet', '2025-04-24 08:21:38', '2025-04-24 08:21:38');
INSERT INTO `tbl_maintenance` VALUES (33, 'Building A', 'Comfort Room #4', 'Faucet', '2025-04-24 08:22:09', '2025-04-24 08:22:09');
INSERT INTO `tbl_maintenance` VALUES (34, 'Building A', 'Comfort Room #5', 'Faucet', '2025-04-24 08:22:49', '2025-04-24 08:22:49');
INSERT INTO `tbl_maintenance` VALUES (35, 'Building B', 'Comfort Room #6', 'Faucet', '2025-04-24 08:25:00', '2025-04-24 08:25:00');
INSERT INTO `tbl_maintenance` VALUES (36, 'Back of Canteen', 'Comfort Room #7', 'Faucet', '2025-04-24 08:26:36', '2025-04-24 08:26:36');
INSERT INTO `tbl_maintenance` VALUES (37, 'TDC', 'Comfort Room #8', 'Faucet', '2025-04-24 08:28:46', '2025-04-24 08:28:46');
INSERT INTO `tbl_maintenance` VALUES (38, 'MB2', 'Comfort Room #9', 'Faucet', '2025-04-24 08:29:20', '2025-04-24 08:29:20');
INSERT INTO `tbl_maintenance` VALUES (39, 'Building C', 'Comfort Room #10', 'Faucet', '2025-04-24 08:29:52', '2025-04-24 08:29:52');
INSERT INTO `tbl_maintenance` VALUES (40, 'Building C', 'Comfort Room #11', 'Faucet', '2025-04-24 08:30:19', '2025-04-24 08:30:19');
INSERT INTO `tbl_maintenance` VALUES (41, 'Building C', 'Comfort Room #12', 'Faucet', '2025-04-24 08:30:39', '2025-04-24 08:30:39');
INSERT INTO `tbl_maintenance` VALUES (42, 'Building C', 'Comfort Room #13', 'Faucet', '2025-04-24 08:30:57', '2025-04-24 08:30:57');
INSERT INTO `tbl_maintenance` VALUES (43, 'Diecast Building', 'Comfort Room #14', 'Faucet', '2025-04-24 08:31:25', '2025-04-24 08:31:25');
INSERT INTO `tbl_maintenance` VALUES (44, 'Diecast Building', 'Comfort Room #15', 'Faucet', '2025-04-24 08:31:50', '2025-04-24 08:31:50');
INSERT INTO `tbl_maintenance` VALUES (45, 'Diecast Building', 'Comfort Room #15', 'Faucet', '2025-04-24 08:32:14', '2025-04-24 08:32:14');
INSERT INTO `tbl_maintenance` VALUES (46, 'Diecast Building', 'Comfort Room #16', 'Faucet', '2025-04-24 08:33:01', '2025-04-24 08:33:01');
INSERT INTO `tbl_maintenance` VALUES (47, 'Diecast Building', 'Comfort Room #17', 'Faucet', '2025-04-24 08:33:31', '2025-04-24 08:33:31');
INSERT INTO `tbl_maintenance` VALUES (48, 'Gate 1', 'Comfort Room G1/M', 'Faucet', '2025-04-24 08:34:32', '2025-04-24 08:34:32');
INSERT INTO `tbl_maintenance` VALUES (49, 'Gate 1', 'Comfort Room G1/F', 'Faucet', '2025-04-24 08:34:52', '2025-04-24 08:34:52');
INSERT INTO `tbl_maintenance` VALUES (50, 'Gate 3', 'Comfort Room G3 (M/F)', 'Faucet', '2025-04-24 08:38:05', '2025-04-24 08:38:05');
INSERT INTO `tbl_maintenance` VALUES (51, 'TDC', 'Canteen', 'Urinal', '2025-04-25 16:48:04', '2025-04-25 16:48:04');
INSERT INTO `tbl_maintenance` VALUES (52, 'Building A', 'Comfort Room #1', 'Urinal', '2025-04-28 07:08:58', '2025-04-28 07:08:58');
INSERT INTO `tbl_maintenance` VALUES (53, 'Building A', 'Comfort Room #2', 'Urinal', '2025-04-28 07:10:02', '2025-04-28 07:10:02');
INSERT INTO `tbl_maintenance` VALUES (54, 'Building A', 'Comfort Room #3', 'Urinal', '2025-04-28 07:10:23', '2025-04-28 07:10:23');
INSERT INTO `tbl_maintenance` VALUES (55, 'Building A', 'Comfort Room #4', 'Urinal', '2025-04-28 07:10:39', '2025-04-28 07:10:39');
INSERT INTO `tbl_maintenance` VALUES (56, 'Building A', 'Comfort Room #5', 'Urinal', '2025-04-28 07:11:04', '2025-04-28 07:11:04');
INSERT INTO `tbl_maintenance` VALUES (57, 'Building B', 'Comfort Room #6', 'Urinal', '2025-04-28 07:12:44', '2025-04-28 07:12:44');
INSERT INTO `tbl_maintenance` VALUES (58, 'Back of Canteen', 'Comfort Room #7', 'Urinal', '2025-04-28 07:14:10', '2025-04-28 07:14:10');
INSERT INTO `tbl_maintenance` VALUES (59, 'TDC', 'Comfort Room #8', 'Urinal', '2025-04-28 07:16:27', '2025-04-28 07:16:27');
INSERT INTO `tbl_maintenance` VALUES (60, 'MB2', 'Comfort Room #9', 'Urinal', '2025-04-28 07:19:05', '2025-04-28 07:19:05');
INSERT INTO `tbl_maintenance` VALUES (61, 'Building C', 'Comfort Room #10', 'Urinal', '2025-04-28 07:19:50', '2025-04-28 07:19:50');
INSERT INTO `tbl_maintenance` VALUES (62, 'Building C', 'Comfort Room #11', 'Urinal', '2025-04-28 07:24:08', '2025-04-28 07:24:08');
INSERT INTO `tbl_maintenance` VALUES (63, 'Building C', 'Comfort Room #12', 'Urinal', '2025-04-28 07:25:22', '2025-04-28 07:25:22');
INSERT INTO `tbl_maintenance` VALUES (64, 'Building C', 'Comfort Room #13', 'Urinal', '2025-04-28 07:55:41', '2025-04-28 07:55:41');
INSERT INTO `tbl_maintenance` VALUES (65, 'Diecast Building', 'Comfort Room #14', 'Urinal', '2025-04-28 07:56:04', '2025-04-28 07:56:04');
INSERT INTO `tbl_maintenance` VALUES (66, 'Diecast Building', 'Comfort Room #15', 'Urinal', '2025-04-28 07:56:24', '2025-04-28 07:56:24');
INSERT INTO `tbl_maintenance` VALUES (67, 'Diecast Building', 'Comfort Room #16', 'Urinal', '2025-04-28 07:56:42', '2025-04-28 07:56:42');
INSERT INTO `tbl_maintenance` VALUES (68, 'Diecast Building', 'Comfort Room #17', 'Urinal', '2025-04-28 07:57:02', '2025-04-28 07:57:02');
INSERT INTO `tbl_maintenance` VALUES (69, 'Gate 1', 'Comfort Room G1/M', 'Urinal', '2025-04-28 07:58:40', '2025-04-28 07:58:40');
INSERT INTO `tbl_maintenance` VALUES (70, 'Diecast Building', 'Comfort Room G1/F', 'Urinal', '2025-04-28 07:59:01', '2025-04-28 07:59:01');
INSERT INTO `tbl_maintenance` VALUES (71, 'Gate 3', 'Comfort Room G3 (M/F)', 'Urinal', '2025-04-28 07:59:32', '2025-04-28 07:59:32');
INSERT INTO `tbl_maintenance` VALUES (72, 'Building A', 'Comfort Room #1', 'Aircon', '2025-04-28 08:32:23', '2025-04-28 08:32:23');
INSERT INTO `tbl_maintenance` VALUES (73, 'Building A', 'Comfort Room #2', 'Aircon', '2025-04-28 08:34:34', '2025-04-28 08:34:34');
INSERT INTO `tbl_maintenance` VALUES (74, 'Building A', 'Comfort Room #3', 'Aircon', '2025-04-28 08:35:35', '2025-04-28 08:35:35');
INSERT INTO `tbl_maintenance` VALUES (75, 'Building A', 'Comfort Room #4', 'Aircon', '2025-04-28 08:36:49', '2025-04-28 08:36:49');
INSERT INTO `tbl_maintenance` VALUES (76, 'Building A', 'Comfort Room #5', 'Aircon', '2025-04-28 08:45:30', '2025-04-28 08:45:30');
INSERT INTO `tbl_maintenance` VALUES (77, 'Building B', 'Comfort Room #6', 'Aircon', '2025-04-28 08:46:19', '2025-04-28 08:46:19');
INSERT INTO `tbl_maintenance` VALUES (78, 'Back of Canteen', 'Comfort Room #7', 'Aircon', '2025-04-28 08:47:20', '2025-04-28 08:47:20');
INSERT INTO `tbl_maintenance` VALUES (79, 'TDC', 'Comfort Room #8', 'Aircon', '2025-04-28 08:48:27', '2025-04-28 08:48:27');
INSERT INTO `tbl_maintenance` VALUES (80, 'MB2', 'Comfort Room #9', 'Aircon', '2025-04-28 08:49:24', '2025-04-28 08:49:24');
INSERT INTO `tbl_maintenance` VALUES (81, 'Building C', 'Comfort Room #10', 'Aircon', '2025-04-28 08:49:53', '2025-04-28 08:49:53');
INSERT INTO `tbl_maintenance` VALUES (82, 'Building C', 'Comfort Room #11', 'Aircon', '2025-04-28 08:50:32', '2025-04-28 08:50:32');
INSERT INTO `tbl_maintenance` VALUES (83, 'Building C', 'Comfort Room #12', 'Aircon', '2025-04-28 08:51:10', '2025-04-28 08:51:10');
INSERT INTO `tbl_maintenance` VALUES (84, 'Building C', 'Comfort Room #13', 'Aircon', '2025-04-28 08:57:33', '2025-04-28 08:57:33');
INSERT INTO `tbl_maintenance` VALUES (85, 'Diecast Building', 'Comfort Room #14', 'Aircon', '2025-04-28 08:58:22', '2025-04-28 08:58:22');
INSERT INTO `tbl_maintenance` VALUES (86, 'Diecast Building', 'Comfort Room #15', 'Aircon', '2025-04-28 08:59:19', '2025-04-28 08:59:19');
INSERT INTO `tbl_maintenance` VALUES (87, NULL, 'Comfort Room #16', 'Aircon', '2025-04-28 08:59:48', '2025-04-28 08:59:48');
INSERT INTO `tbl_maintenance` VALUES (88, 'Diecast Building', 'Comfort Room #16', 'Aircon', '2025-04-28 09:02:54', '2025-04-28 09:02:54');
INSERT INTO `tbl_maintenance` VALUES (89, 'Diecast Building', 'Comfort Room #17', 'Aircon', '2025-04-28 09:03:20', '2025-04-28 09:03:20');
INSERT INTO `tbl_maintenance` VALUES (90, 'Gate 1', 'Comfort Room G1/M', 'Aircon', '2025-04-28 09:06:50', '2025-04-28 09:06:50');
INSERT INTO `tbl_maintenance` VALUES (91, 'Gate 1', 'Comfort Room G1/F', 'Aircon', '2025-04-28 09:39:24', '2025-04-28 09:39:24');
INSERT INTO `tbl_maintenance` VALUES (92, 'Gate 3', 'Comfort Room G3 (M/F)', 'Aircon', '2025-04-28 09:39:52', '2025-04-28 09:39:52');
INSERT INTO `tbl_maintenance` VALUES (93, 'Building A', 'Comfort Room #1', 'Exhaust', '2025-04-28 09:41:52', '2025-04-28 09:41:52');
INSERT INTO `tbl_maintenance` VALUES (94, 'Building A', 'Comfort Room #2', 'Aircon', '2025-04-28 09:43:02', '2025-04-28 09:43:02');
INSERT INTO `tbl_maintenance` VALUES (95, 'Building A', 'Comfort Room #2', 'Aircon', '2025-04-28 09:43:38', '2025-04-28 09:43:38');
INSERT INTO `tbl_maintenance` VALUES (96, 'Building A', 'Comfort Room #3', 'Exhaust', '2025-04-28 09:44:15', '2025-04-28 09:44:15');
INSERT INTO `tbl_maintenance` VALUES (97, 'Building A', 'Comfort Room #2', 'Exhaust', '2025-04-28 09:55:34', '2025-04-28 09:55:34');
INSERT INTO `tbl_maintenance` VALUES (98, 'Building A', 'Comfort Room #4', 'Exhaust', '2025-04-28 10:04:18', '2025-04-28 10:04:18');
INSERT INTO `tbl_maintenance` VALUES (99, 'Building A', 'Comfort Room #5', 'Exhaust', '2025-04-28 10:04:45', '2025-04-28 10:04:45');
INSERT INTO `tbl_maintenance` VALUES (100, 'Building B', 'Comfort Room #6', 'Exhaust', '2025-04-28 10:06:42', '2025-04-28 10:06:42');
INSERT INTO `tbl_maintenance` VALUES (101, 'Building B', 'Comfort Room #7', 'Exhaust', '2025-04-28 10:12:10', '2025-04-28 10:12:10');

-- ----------------------------
-- Table structure for tbl_priority
-- ----------------------------
DROP TABLE IF EXISTS `tbl_priority`;
CREATE TABLE `tbl_priority`  (
  `priority_id` int(0) NOT NULL AUTO_INCREMENT,
  `priority_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`priority_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_priority
-- ----------------------------
INSERT INTO `tbl_priority` VALUES (1, '1', '2025-04-09 09:35:11', '2025-04-09 09:35:11');
INSERT INTO `tbl_priority` VALUES (2, '2', '2025-04-09 16:20:48', '2025-04-09 16:20:48');
INSERT INTO `tbl_priority` VALUES (3, '3', '2025-04-09 16:20:54', '2025-04-09 16:20:54');
INSERT INTO `tbl_priority` VALUES (5, '4', '2025-04-11 11:22:00', '2025-04-11 11:22:00');

-- ----------------------------
-- Table structure for tbl_user_role
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user_role`;
CREATE TABLE `tbl_user_role`  (
  `role_id` int(0) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `code` int(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`role_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user_role
-- ----------------------------
INSERT INTO `tbl_user_role` VALUES (1, 'Admin', 1, '2025-04-03 05:37:53', '2025-04-03 05:37:53');
INSERT INTO `tbl_user_role` VALUES (2, 'Guest', 0, '2025-04-09 07:29:00', '2025-04-09 07:29:00');
INSERT INTO `tbl_user_role` VALUES (3, 'Auditor', 2, '2025-04-09 10:03:18', '2025-04-09 10:03:18');

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users`  (
  `user_id` int(0) NOT NULL AUTO_INCREMENT,
  `role_id` int(0) NOT NULL,
  `fcusername` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fcempcompany` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fcuserpassword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fcempnumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fcemplname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fcempfname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fcempmname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fcEmailAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `logged_in` tinyint(1) NULL DEFAULT 0,
  `created_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES (1, 1, 'B302400052', 'NCFL', 'bb9d6515f0d1a3a40ac17eb4da313849', '2400052', 'Jaspio', 'Chikshet', 'Peronalim', 'jhomell.jaspio@nidec.com', 1, '2025-04-09 15:53:37', '2025-05-06 08:57:20');
INSERT INTO `tbl_users` VALUES (2, 1, 'B301200385', 'NCFL', 'e30c2cea1ce58b6da61fe9d1d2335ffa', '1200385', 'Buenconsejo', 'Cherry Novelyn', 'Sandoval', '', 1, '2025-04-09 16:06:02', '2025-04-09 16:36:09');
INSERT INTO `tbl_users` VALUES (6, 0, 'B302100802', 'NCFL', '236bb1d52d4800f54f9a15e9c5fd9371', '2100802', 'REGIDOR', 'MARICEL', 'PANESA', 'maricel.regidor1@nidec.com', 1, '2025-04-22 07:59:20', '2025-04-22 07:59:20');
INSERT INTO `tbl_users` VALUES (7, 0, 'B300000644', 'NCFL', '0d78c244ea213af76f32a75d2730b15e', '0000644', 'BOGNOT', 'JOHN ASHLEY', 'TOLEDO', 'john.bognot@nidec.com', 1, '2025-04-22 15:55:07', '2025-04-22 15:55:07');

SET FOREIGN_KEY_CHECKS = 1;
