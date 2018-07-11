--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

--
-- RELATIONSHIPS FOR TABLE `pma__bookmark`:
--

--
-- Dumping data for table `pma__bookmark`
--

INSERT INTO `pma__bookmark` (`id`, `dbase`, `user`, `label`, `query`) VALUES
(1, 'shardsmith', 'qianru', 'Default Sort', 'SELECT * FROM `materials`  \r\nORDER BY `materials`.`Job` ASC, `materials`.`Level_Range` ASC, `materials`.`Level` ASC, `materials`.`Hidden` ASC'),
(2, 'shardsmith', 'qianru', 'Select Materials for Materials that are crafted', 'select Material, Amount from material_amounts where Recipe in (select Material from material_amounts where Prereq = \'1\') group by Material');

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

--
-- RELATIONSHIPS FOR TABLE `pma__central_columns`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- RELATIONSHIPS FOR TABLE `pma__column_info`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- RELATIONSHIPS FOR TABLE `pma__designer_settings`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- RELATIONSHIPS FOR TABLE `pma__export_templates`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

--
-- RELATIONSHIPS FOR TABLE `pma__favorite`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

--
-- RELATIONSHIPS FOR TABLE `pma__history`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

--
-- RELATIONSHIPS FOR TABLE `pma__navigationhiding`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

--
-- RELATIONSHIPS FOR TABLE `pma__pdf_pages`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- RELATIONSHIPS FOR TABLE `pma__recent`:
--

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('qianru', '[{\"db\":\"wow\",\"table\":\"characters\"},{\"db\":\"wow\",\"table\":\"TABLE 1\"},{\"db\":\"character_sheets\",\"table\":\"characters\"},{\"db\":\"character_sheets\",\"table\":\"stats\"},{\"db\":\"character_sheets\",\"table\":\"Stats\"},{\"db\":\"pokedex\",\"table\":\"Masterlist\"},{\"db\":\"pokedex\",\"table\":\"Learnsets\"},{\"db\":\"pokedex\",\"table\":\"Moves\"},{\"db\":\"shardsmith\",\"table\":\"materials\"},{\"db\":\"shardsmith\",\"table\":\"recipes\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- RELATIONSHIPS FOR TABLE `pma__relation`:
--

--
-- Dumping data for table `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('pokedex', 'Learnsets', 'Move', 'pokedex', 'Moves', 'Name'),
('pokedex', 'Learnsets', 'Species', 'pokedex', 'Masterlist', 'Species'),
('pokedex', 'Masterlist', 'Move1', 'pokedex', 'Learnsets', 'Move'),
('pokedex', 'Masterlist', 'Move2', 'pokedex', 'Learnsets', 'Move'),
('pokedex', 'Masterlist', 'Move3', 'pokedex', 'Learnsets', 'Move'),
('pokedex', 'Masterlist', 'Move4', 'pokedex', 'Learnsets', 'Move'),
('pokedex', 'Masterlist', 'Nature', 'pokedex', 'Natures', 'Name'),
('pokedex', 'Masterlist', 'Region', 'pokedex', 'Regions', 'Name'),
('shardsmith', 'books', 'Job', 'shardsmith', 'jobs', 'Job'),
('shardsmith', 'material_amounts', 'Material', 'shardsmith', 'materials', 'Material'),
('shardsmith', 'material_amounts', 'Recipe', 'shardsmith', 'recipes', 'Recipe'),
('shardsmith', 'materials', 'Category', 'shardsmith', 'categories', 'Category'),
('shardsmith', 'materials', 'Job', 'shardsmith', 'jobs', 'Job'),
('shardsmith', 'materials', 'Level_Range', 'shardsmith', 'level_range', 'Level_Range'),
('shardsmith', 'materials', 'Recipe', 'shardsmith', 'recipes', 'Recipe'),
('shardsmith', 'recipes', 'Book', 'shardsmith', 'books', 'Book'),
('shardsmith', 'recipes', 'Category', 'shardsmith', 'categories', 'Category'),
('shardsmith', 'recipes', 'Job', 'shardsmith', 'jobs', 'Job'),
('shardsmith', 'recipes', 'Level_Range', 'shardsmith', 'level_range', 'Level_Range'),
('shardsmith', 'user_career_crafting', 'Recipe', 'shardsmith', 'recipes', 'Recipe'),
('shardsmith', 'user_career_gathering', 'Material', 'shardsmith', 'materials', 'Material');

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

--
-- RELATIONSHIPS FOR TABLE `pma__savedsearches`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

--
-- RELATIONSHIPS FOR TABLE `pma__table_coords`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- RELATIONSHIPS FOR TABLE `pma__table_info`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- RELATIONSHIPS FOR TABLE `pma__table_uiprefs`:
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('qianru', 'pokedex', 'Masterlist', '{\"sorted_col\":\"`ID` ASC\"}', '2017-10-20 15:05:04'),
('qianru', 'pokedex', 'Regions', '{\"sorted_col\":\"`Regions`.`ID` ASC\"}', '2017-06-14 17:46:09'),
('qianru', 'shardsmith', 'books', '{\"sorted_col\":\"`books`.`Rank` ASC\"}', '2017-10-13 14:05:34'),
('qianru', 'shardsmith', 'categories', '{\"sorted_col\":\"`CatID` ASC\"}', '2017-10-12 17:58:02'),
('qianru', 'shardsmith', 'jobs', '{\"sorted_col\":\"`jobs`.`Job` ASC\"}', '2017-10-13 14:17:15'),
('qianru', 'shardsmith', 'level_range', '[]', '2017-02-09 17:54:55'),
('qianru', 'shardsmith', 'materials', '{\"CREATE_TIME\":\"2017-02-09 17:55:10\",\"col_visib\":[\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\"],\"sorted_col\":\"`Job` ASC, `Level_Range` ASC, `Level` ASC, `Grade` ASC, `Hidden` ASC\"}', '2017-10-13 20:26:46'),
('qianru', 'shardsmith', 'recipes', '{\"sorted_col\":\"`recipes`.`Job` ASC, `recipes`.`Level_Range` ASC, `recipes`.`Level` ASC, `recipes`.`Grade` ASC, `recipes`.`Rarity` ASC\"}', '2017-10-13 16:29:33'),
('qianru', 'shardsmith', 'user_career_crafting', '{\"sorted_col\":\"`Recipe` ASC\"}', '2017-01-02 01:12:00'),
('qianru', 'shardsmith', 'user_career_gathering', '{\"sorted_col\":\"`Material` ASC\"}', '2017-10-12 18:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

--
-- RELATIONSHIPS FOR TABLE `pma__tracking`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- RELATIONSHIPS FOR TABLE `pma__userconfig`:
--

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('qianru', '2017-11-17 19:29:37', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

--
-- RELATIONSHIPS FOR TABLE `pma__usergroups`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--
-- Creation: Dec 05, 2016 at 03:34 AM
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- RELATIONSHIPS FOR TABLE `pma__users`:
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
