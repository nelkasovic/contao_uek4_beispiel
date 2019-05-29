<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'pid' => 'int(10) unsigned NOT NULL default \'0\'',
  'word' => 'varchar(64) BINARY NOT NULL default \'\'',
  'relevance' => 'smallint(5) unsigned NOT NULL default \'0\'',
  'language' => 'varchar(5) NOT NULL default \'\'',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'id' => 'primary',
  'pid' => 'index',
  'word' => 'index',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;
