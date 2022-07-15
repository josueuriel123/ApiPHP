/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : empleados

 Target Server Type    : MariaDB
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 15/07/2022 16:32:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas`  (
  `identificacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nombres` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`identificacion`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES ('1309181079', 'ROMERO', 'VICENTE');
INSERT INTO `personas` VALUES ('88999', 'alejandro', 'ROMERO');

-- ----------------------------
-- Procedure structure for insertar
-- ----------------------------
DROP PROCEDURE IF EXISTS `insertar`;
delimiter ;;
CREATE PROCEDURE `insertar`(in iden varchar(10),in ape varchar(100),in nom varchar(10), out mensaje VARCHAR(250))
begin

if not EXISTs(select IDENTIFICACION from personas) then

	insert into empleados.personas( identificacion,apellidos,nombres)
	values (iden,ape,nom);

    set mensaje='GUARDADO';
   else
       set mensaje='codigo ya existe';
  end if; 
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
