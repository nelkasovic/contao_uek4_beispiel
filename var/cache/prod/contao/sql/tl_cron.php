<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'name' => 'varchar(32) NULL',
  'value' => 'varchar(32) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'name',
);

$this->arrKeys = array (
  'id' => 'primary',
  'name' => 'unique',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;
