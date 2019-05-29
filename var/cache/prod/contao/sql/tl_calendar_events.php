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
  'title' => 'varchar(255) NOT NULL default \'\'',
  'alias' => 'varchar(128) BINARY NOT NULL default \'\'',
  'author' => 'int(10) unsigned NOT NULL default \'0\'',
  'addTime' => 'char(1) NOT NULL default \'\'',
  'startTime' => 'int(10) NULL',
  'endTime' => 'int(10) NULL',
  'startDate' => 'int(10) unsigned NULL',
  'endDate' => 'int(10) unsigned NULL',
  'pageTitle' => 'varchar(255) NOT NULL default \'\'',
  'description' => 'text NULL',
  'location' => 'varchar(255) NOT NULL default \'\'',
  'address' => 'varchar(255) NOT NULL default \'\'',
  'teaser' => 'text NULL',
  'addImage' => 'char(1) NOT NULL default \'\'',
  'overwriteMeta' => 'char(1) NOT NULL default \'\'',
  'singleSRC' => 'binary(16) NULL',
  'alt' => 'varchar(255) NOT NULL default \'\'',
  'imageTitle' => 'varchar(255) NOT NULL default \'\'',
  'size' => 'varchar(64) NOT NULL default \'\'',
  'imagemargin' => 'varchar(128) NOT NULL default \'\'',
  'imageUrl' => 'varchar(255) NOT NULL default \'\'',
  'fullsize' => 'char(1) NOT NULL default \'\'',
  'caption' => 'varchar(255) NOT NULL default \'\'',
  'floating' => 'varchar(32) NOT NULL default \'\'',
  'recurring' => 'char(1) NOT NULL default \'\'',
  'repeatEach' => 'varchar(64) NOT NULL default \'\'',
  'repeatEnd' => 'int(10) unsigned NOT NULL default \'0\'',
  'recurrences' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'addEnclosure' => 'char(1) NOT NULL default \'\'',
  'enclosure' => 'blob NULL',
  'orderEnclosure' => 'blob NULL',
  'source' => 'varchar(32) NOT NULL default \'\'',
  'jumpTo' => 'int(10) unsigned NOT NULL default \'0\'',
  'articleId' => 'int(10) unsigned NOT NULL default \'0\'',
  'url' => 'varchar(255) NOT NULL default \'\'',
  'target' => 'char(1) NOT NULL default \'\'',
  'cssClass' => 'varchar(255) NOT NULL default \'\'',
  'noComments' => 'char(1) NOT NULL default \'\'',
  'published' => 'char(1) NOT NULL default \'\'',
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
  0 => 'orderEnclosure',
);

$this->arrUniqueFields = array (
  0 => 'alias',
);

$this->arrKeys = array (
  'id' => 'primary',
  'alias' => 'index',
  'pid,start,stop,published' => 'index',
);

$this->arrRelations = array (
  'pid' => 
  array (
    'table' => 'tl_calendar',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'author' => 
  array (
    'table' => 'tl_user',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'jumpTo' => 
  array (
    'table' => 'tl_page',
    'field' => 'id',
    'type' => 'belongsTo',
    'load' => 'lazy',
  ),
  'articleId' => 
  array (
    'table' => 'tl_article',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;
