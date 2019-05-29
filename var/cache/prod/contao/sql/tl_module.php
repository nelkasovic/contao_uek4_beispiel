<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'name' => 'varchar(255) NOT NULL default \'\'',
  'headline' => 'varchar(255) NOT NULL default \'\'',
  'type' => 'varchar(64) NOT NULL default \'\'',
  'levelOffset' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'showLevel' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'hardLimit' => 'char(1) NOT NULL default \'\'',
  'showProtected' => 'char(1) NOT NULL default \'\'',
  'defineRoot' => 'char(1) NOT NULL default \'\'',
  'rootPage' => 'int(10) unsigned NOT NULL default \'0\'',
  'navigationTpl' => 'varchar(64) NOT NULL default \'\'',
  'customTpl' => 'varchar(64) NOT NULL default \'\'',
  'pages' => 'blob NULL',
  'orderPages' => 'blob NULL',
  'showHidden' => 'char(1) NOT NULL default \'\'',
  'customLabel' => 'varchar(64) NOT NULL default \'\'',
  'autologin' => 'char(1) NOT NULL default \'\'',
  'jumpTo' => 'int(10) unsigned NOT NULL default \'0\'',
  'redirectBack' => 'char(1) NOT NULL default \'\'',
  'editable' => 'blob NULL',
  'memberTpl' => 'varchar(64) NOT NULL default \'\'',
  'form' => 'int(10) unsigned NOT NULL default \'0\'',
  'queryType' => 'varchar(32) NOT NULL default \'\'',
  'fuzzy' => 'char(1) NOT NULL default \'\'',
  'contextLength' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'totalLength' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'perPage' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'searchType' => 'varchar(32) NOT NULL default \'\'',
  'searchTpl' => 'varchar(64) NOT NULL default \'\'',
  'inColumn' => 'varchar(32) NOT NULL default \'\'',
  'skipFirst' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'loadFirst' => 'char(1) NOT NULL default \'\'',
  'singleSRC' => 'binary(16) NULL',
  'url' => 'varchar(255) NOT NULL default \'\'',
  'imgSize' => 'varchar(64) NOT NULL default \'\'',
  'useCaption' => 'char(1) NOT NULL default \'\'',
  'fullsize' => 'char(1) NOT NULL default \'\'',
  'multiSRC' => 'blob NULL',
  'orderSRC' => 'blob NULL',
  'html' => 'text NULL',
  'rss_cache' => 'int(10) unsigned NOT NULL default \'0\'',
  'rss_feed' => 'text NULL',
  'rss_template' => 'varchar(64) NOT NULL default \'\'',
  'numberOfItems' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'disableCaptcha' => 'char(1) NOT NULL default \'\'',
  'reg_groups' => 'blob NULL',
  'reg_allowLogin' => 'char(1) NOT NULL default \'\'',
  'reg_skipName' => 'char(1) NOT NULL default \'\'',
  'reg_close' => 'varchar(32) NOT NULL default \'\'',
  'reg_assignDir' => 'char(1) NOT NULL default \'\'',
  'reg_homeDir' => 'binary(16) NULL',
  'reg_activate' => 'char(1) NOT NULL default \'\'',
  'reg_jumpTo' => 'int(10) unsigned NOT NULL default \'0\'',
  'reg_text' => 'text NULL',
  'reg_password' => 'text NULL',
  'protected' => 'char(1) NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'guests' => 'char(1) NOT NULL default \'\'',
  'cssID' => 'varchar(255) NOT NULL default \'\'',
  'cal_calendar' => 'blob NULL',
  'cal_noSpan' => 'char(1) NOT NULL default \'\'',
  'cal_hideRunning' => 'char(1) NOT NULL default \'\'',
  'cal_startDay' => 'smallint(5) unsigned NOT NULL default \'1\'',
  'cal_format' => 'varchar(32) NOT NULL default \'\'',
  'cal_ignoreDynamic' => 'char(1) NOT NULL default \'\'',
  'cal_order' => 'varchar(32) NOT NULL default \'\'',
  'cal_readerModule' => 'int(10) unsigned NOT NULL default \'0\'',
  'cal_limit' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'cal_template' => 'varchar(64) NOT NULL default \'\'',
  'cal_ctemplate' => 'varchar(64) NOT NULL default \'\'',
  'cal_showQuantity' => 'char(1) NOT NULL default \'\'',
  'com_order' => 'varchar(32) NOT NULL default \'\'',
  'com_moderate' => 'char(1) NOT NULL default \'\'',
  'com_bbcode' => 'char(1) NOT NULL default \'\'',
  'com_requireLogin' => 'char(1) NOT NULL default \'\'',
  'com_disableCaptcha' => 'char(1) NOT NULL default \'\'',
  'com_template' => 'varchar(64) NOT NULL default \'\'',
  'faq_categories' => 'blob NULL',
  'faq_readerModule' => 'int(10) unsigned NOT NULL default \'0\'',
  'list_table' => 'varchar(64) NOT NULL default \'\'',
  'list_fields' => 'varchar(255) NOT NULL default \'\'',
  'list_where' => 'varchar(255) NOT NULL default \'\'',
  'list_search' => 'varchar(255) NOT NULL default \'\'',
  'list_sort' => 'varchar(255) NOT NULL default \'\'',
  'list_info' => 'varchar(255) NOT NULL default \'\'',
  'list_info_where' => 'varchar(255) NOT NULL default \'\'',
  'list_layout' => 'varchar(64) NOT NULL default \'\'',
  'list_info_layout' => 'varchar(64) NOT NULL default \'\'',
  'news_archives' => 'blob NULL',
  'news_featured' => 'varchar(16) NOT NULL default \'\'',
  'news_jumpToCurrent' => 'varchar(16) NOT NULL default \'\'',
  'news_readerModule' => 'int(10) unsigned NOT NULL default \'0\'',
  'news_metaFields' => 'varchar(255) NOT NULL default \'\'',
  'news_template' => 'varchar(64) NOT NULL default \'\'',
  'news_format' => 'varchar(32) NOT NULL default \'\'',
  'news_startDay' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'news_order' => 'varchar(32) NOT NULL default \'\'',
  'news_showQuantity' => 'char(1) NOT NULL default \'\'',
  'newsletters' => 'blob NULL',
  'nl_channels' => 'blob NULL',
  'nl_text' => 'text NULL',
  'nl_hideChannels' => 'char(1) NOT NULL default \'\'',
  'nl_subscribe' => 'text NULL',
  'nl_unsubscribe' => 'text NULL',
  'nl_template' => 'varchar(64) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
  0 => 'orderSRC',
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_theme',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'rootPage' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'pages' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'form' => 
  array (
    'table' => 'tl_form',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'reg_groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
  'reg_jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'groups' => 
  array (
    'table' => 'tl_member_group',
    'field' => 'id',
    'type' => 'hasMany',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;
