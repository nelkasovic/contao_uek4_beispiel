<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'source' => 'varchar(32) NOT NULL default \'\'',
  'parent' => 'int(10) unsigned NOT NULL default \'0\'',
  'name' => 'varchar(128) NOT NULL default \'\'',
  'email' => 'varchar(255) NOT NULL default \'\'',
  'url' => 'varchar(255) NOT NULL default \'\'',
  'addedOn' => 'varchar(10) NOT NULL default \'\'',
  'active' => 'char(1) NOT NULL default \'\'',
  'tokenRemove' => 'varchar(32) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'source,parent,active' => 'index',
  'tokenRemove' => 'index',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;
