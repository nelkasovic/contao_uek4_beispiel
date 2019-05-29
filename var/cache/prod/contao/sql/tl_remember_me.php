<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'series' => 'char(88) NOT NULL',
  'value' => 'char(88) NOT NULL',
  'lastUsed' => 'datetime NULL',
  'class' => 'varchar(100) NOT NULL',
  'username' => 'varchar(200) NOT NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
);

$this->arrKeys = array (
  'series' => 'primary',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;
