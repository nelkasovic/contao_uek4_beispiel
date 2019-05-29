<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'sorting' => 'int(10) unsigned NOT NULL default \'0\'',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'title' => 'varchar(255) NOT NULL default \'\'',
  'alias' => 'varchar(128) BINARY NOT NULL default \'\'',
  'type' => 'varchar(64) NOT NULL default \'\'',
  'pageTitle' => 'varchar(255) NOT NULL default \'\'',
  'language' => 'varchar(5) NOT NULL default \'\'',
  'robots' => 'varchar(32) NOT NULL default \'\'',
  'description' => 'text NULL',
  'redirect' => 'varchar(32) NOT NULL default \'\'',
  'jumpTo' => 'int(10) unsigned NOT NULL default \'0\'',
  'redirectBack' => 'char(1) NOT NULL default \'\'',
  'url' => 'varchar(255) NOT NULL default \'\'',
  'target' => 'char(1) NOT NULL default \'\'',
  'dns' => 'varchar(255) NOT NULL default \'\'',
  'staticFiles' => 'varchar(255) NOT NULL default \'\'',
  'staticPlugins' => 'varchar(255) NOT NULL default \'\'',
  'fallback' => 'char(1) NOT NULL default \'\'',
  'adminEmail' => 'varchar(255) NOT NULL default \'\'',
  'dateFormat' => 'varchar(32) NOT NULL default \'\'',
  'timeFormat' => 'varchar(32) NOT NULL default \'\'',
  'datimFormat' => 'varchar(32) NOT NULL default \'\'',
  'validAliasCharacters' => 'varchar(255) NOT NULL default \'\'',
  'createSitemap' => 'char(1) NOT NULL default \'\'',
  'sitemapName' => 'varchar(32) NOT NULL default \'\'',
  'useSSL' => 'char(1) NOT NULL default \'\'',
  'autoforward' => 'char(1) NOT NULL default \'\'',
  'protected' => 'char(1) NOT NULL default \'\'',
  'groups' => 'blob NULL',
  'includeLayout' => 'char(1) NOT NULL default \'\'',
  'layout' => 'int(10) unsigned NOT NULL default \'0\'',
  'mobileLayout' => 'int(10) unsigned NOT NULL default \'0\'',
  'includeCache' => 'char(1) NOT NULL default \'\'',
  'cache' => 'int(10) unsigned NOT NULL default \'0\'',
  'clientCache' => 'int(10) unsigned NOT NULL default \'0\'',
  'includeChmod' => 'char(1) NOT NULL default \'\'',
  'cuser' => 'int(10) unsigned NOT NULL default \'0\'',
  'cgroup' => 'int(10) unsigned NOT NULL default \'0\'',
  'chmod' => 'varchar(255) NOT NULL default \'\'',
  'noSearch' => 'char(1) NOT NULL default \'\'',
  'requireItem' => 'char(1) NOT NULL default \'\'',
  'cssClass' => 'varchar(64) NOT NULL default \'\'',
  'sitemap' => 'varchar(32) NOT NULL default \'\'',
  'hide' => 'char(1) NOT NULL default \'\'',
  'guests' => 'char(1) NOT NULL default \'\'',
  'tabindex' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'accesskey' => 'char(1) NOT NULL default \'\'',
  'published' => 'char(1) NOT NULL default \'\'',
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'sitemapName',
);

$this->arrKeys = array (
  'id' => 'primary',
  'alias' => 'index',
  'type,dns' => 'index',
  'pid,type,start,stop,published' => 'index',
);

$this->arrRelations = array (
  'jumpTo' => 
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
  'layout' => 
  array (
    'table' => 'tl_layout',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'mobileLayout' => 
  array (
    'table' => 'tl_layout',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'cuser' => 
  array (
    'table' => 'tl_user',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
  'cgroup' => 
  array (
    'table' => 'tl_user_group',
    'field' => 'id',
    'type' => 'hasOne',
    'load' => 'lazy',
  ),
);

$this->blnIsDbTable = true;
