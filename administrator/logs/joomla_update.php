#
#<?php die('Forbidden.'); ?>
#Date: 2017-07-17 09:12:17 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2017-07-17T09:12:17+00:00	INFO ::1	update	Update started by user Super User (698). Old version is 3.6.5.
2017-07-17T09:12:24+00:00	INFO ::1	update	Downloading update file from http://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.7.3-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20170717%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20170717T091231Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=f8b437f9368f04cea6305256dbe93451624b32c313e76ed32680ab9be0f50779.
2017-07-17T09:12:34+00:00	INFO ::1	update	File Joomla_3.7.3-Stable-Update_Package.zip successfully downloaded.
2017-07-17T09:12:34+00:00	INFO ::1	update	Starting installation of new version.
2017-07-17T09:12:38+00:00	INFO ::1	update	Finalising installation.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-08-06. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-08-22. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields` (   `id` int(10) unsigned NOT NULL AUTO_I.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_categories` (   `field_id` int(11) NOT NUL.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_groups` (   `id` int(10) unsigned NOT NULL.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-08-29. Query text: CREATE TABLE IF NOT EXISTS `#__fields_values` (   `field_id` int(10) unsigned NO.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-08-29. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-08-29. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-09-29. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-10-01. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-10-02. Query text: ALTER TABLE `#__session` MODIFY `client_id` tinyint(3) unsigned DEFAULT NULL;.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-11-04. Query text: ALTER TABLE `#__extensions` CHANGE `enabled` `enabled` TINYINT(3) NOT NULL DEFAU.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-11-19. Query text: ALTER TABLE `#__menu_types` ADD COLUMN `client_id` int(11) NOT NULL DEFAULT 0;.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-11-19. Query text: UPDATE `#__menu` SET `published` = 1 WHERE `menutype` = 'main' OR `menutype` = '.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-11-21. Query text: ALTER TABLE `#__languages` DROP INDEX `idx_image`;.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-11-24. Query text: ALTER TABLE `#__extensions` ADD COLUMN `package_id` int(11) NOT NULL DEFAULT 0 C.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-11-24. Query text: UPDATE `#__extensions` AS `e1` INNER JOIN (SELECT `extension_id` FROM `#__extens.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2016-11-27. Query text: ALTER TABLE `#__modules` MODIFY `content` text NOT NULL DEFAULT '';.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_title` varchar(400) NOT NULL DEFAULT '.
2017-07-17T09:12:38+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_alias` varchar(400) CHARACTER SET utf8.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_body` mediumtext NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_checked_out_time` varchar(255) NOT NUL.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_params` text NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadata` varchar(2048) NOT NULL DEFAU.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_language` char(7) NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_publish_up` datetime NOT NULL DEFAULT .
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_publish_down` datetime NOT NULL DEFAUL.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_content_item_id` int(10) unsigned NOT .
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_images` text NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_urls` text NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metakey` text NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_metadesc` text NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_xreference` varchar(50) NOT NULL DEFAU.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-08. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_type_id` int(10) unsigned NOT NULL DEF.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `title` varchar(255) NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `description` mediumtext NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `params` text NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metadesc` varchar(1024) NOT NULL DEFAULT '' .
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metakey` varchar(1024) NOT NULL DEFAULT '' C.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `metadata` varchar(2048) NOT NULL DEFAULT '' .
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-09. Query text: ALTER TABLE `#__categories` MODIFY `language` char(7) NOT NULL DEFAULT '';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-15. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main_is_reserved_133C585'  WHERE `client_i.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"menutype":"main"','"men.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu_types`    SET `menutype` = 'main_is_reserved_133C585'  WHERE `cl.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `client_id` = 1  WHERE `menutype` = 'main';.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main'  WHERE `client_id` = 1     AND `menu.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-17. Query text: UPDATE `#__menu`    SET `menutype` = 'main',        `client_id` = 1  WHERE `menu.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-17. Query text: DELETE FROM `#__menu_types`  WHERE `client_id` = 1    AND `menutype` IN ('main',.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-01-31. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-02. Query text: INSERT INTO `#__extensions` (`extension_id`, `name`, `type`, `element`, `folder`.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-15. Query text: ALTER TABLE `#__redirect_links` MODIFY `comment` varchar(255) NOT NULL DEFAULT '.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `name` varchar(255) NOT NULL;.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `alias` varchar(400) CHARACTER SET utf8m.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname1` varchar(255) NOT NULL DEFAUL.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname2` varchar(255) NOT NULL DEFAUL.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `sortname3` varchar(255) NOT NULL DEFAUL.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `language` varchar(7) NOT NULL;.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-02-17. Query text: ALTER TABLE `#__contact_details` MODIFY `xreference` varchar(50) NOT NULL DEFAUL.
2017-07-17T09:12:39+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE `#__languages` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT 0.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE `#__menu_types` MODIFY `asset_id` int(10) unsigned NOT NULL DEFAULT .
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE  `#__content` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-03. Query text: ALTER TABLE  `#__newsfeeds` MODIFY `xreference` varchar(50) NOT NULL DEFAULT '';.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__categories` SET `published` = 1 WHERE `alias` = 'root';.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__categories` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.publis.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__menu` SET `published` = 1 WHERE `alias` = 'root';.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-09. Query text: UPDATE `#__menu` AS `c` INNER JOIN ( 	SELECT c2.id, CASE WHEN MIN(p.published) >.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-03-19. Query text: ALTER TABLE `#__finder_links` MODIFY `description` text;.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-04-10. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.0-2017-04-19. Query text: UPDATE `#__extensions` SET `params` = '{"multiple":"0","first":"1","last":"100",.
2017-07-17T09:12:40+00:00	INFO ::1	update	Ran query from file 3.7.3-2017-06-03. Query text: ALTER TABLE `#__menu` MODIFY `checked_out_time` datetime NOT NULL DEFAULT '0000-.
2017-07-17T09:12:40+00:00	INFO ::1	update	Deleting removed files and folders.
2017-07-17T09:12:40+00:00	INFO ::1	update	Cleaning up after installation.
2017-07-17T09:12:40+00:00	INFO ::1	update	Update to version 3.7.3 is complete.
2018-02-06T10:17:55+00:00	INFO 127.0.0.1	update	Update started by user Super User (759). Old version is 3.8.1.
2018-02-06T10:18:00+00:00	INFO 127.0.0.1	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla3/Joomla_3.8.4-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIZ6S3Q3YQHG57ZRA%2F20180206%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20180206T101807Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=647bd3e2d8f15514b4b424a79dd5b17cd33832c8e4483894c71a1a64471d7846.
2018-02-06T10:18:45+00:00	INFO 127.0.0.1	update	File Joomla_3.8.4-Stable-Update_Package.zip downloaded.
2018-02-06T10:18:46+00:00	INFO 127.0.0.1	update	Starting installation of new version.
2018-02-06T10:21:27+00:00	INFO 127.0.0.1	update	Finalising installation.
2018-02-06T10:21:27+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.2-2017-10-14. Query text: ALTER TABLE `#__content` ADD INDEX `idx_alias` (`alias`(191));.
2018-02-06T10:21:27+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.4-2018-01-16. Query text: ALTER TABLE `#__user_keys` DROP INDEX `series_2`;.
2018-02-06T10:21:27+00:00	INFO 127.0.0.1	update	Ran query from file 3.8.4-2018-01-16. Query text: ALTER TABLE `#__user_keys` DROP INDEX `series_3`;.
2018-02-06T10:21:27+00:00	INFO 127.0.0.1	update	Deleting removed files and folders.
2018-02-06T10:21:29+00:00	INFO 127.0.0.1	update	Cleaning up after installation.
2018-02-06T10:21:29+00:00	INFO 127.0.0.1	update	Update to version 3.8.4 is complete.
