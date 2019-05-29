<?php

$this->arrMeta = array (
  'engine' => 'InnoDB',
  'charset' => 'utf8mb4',
  'collate' => 'utf8mb4_unicode_ci',
);

$this->arrFields = array (
  'id' => 'int(10) unsigned NOT NULL auto_increment',
  'tstamp' => 'int(10) unsigned NOT NULL default \'0\'',
  'name' => 'varchar(255) NOT NULL default \'\'',
  'modules' => 'blob NULL',
  'themes' => 'blob NULL',
  'pagemounts' => 'blob NULL',
  'alpty' => 'blob NULL',
  'filemounts' => 'blob NULL',
  'fop' => 'blob NULL',
  'imageSizes' => 'blob NULL',
  'forms' => 'blob NULL',
  'formp' => 'blob NULL',
  'amg' => 'blob NULL',
  'alexf' => 'blob NULL',
  'disable' => 'char(1) NOT NULL default \'\'',
  'start' => 'varchar(10) NOT NULL default \'\'',
  'stop' => 'varchar(10) NOT NULL default \'\'',
  'calendars' => 'blob NULL',
  'calendarp' => 'blob NULL',
  'calendarfeeds' => 'blob NULL',
  'calendarfeedp' => 'blob NULL',
  'faqs' => 'blob NULL',
  'faqp' => 'blob NULL',
  'news' => 'blob NULL',
  'newp' => 'blob NULL',
  'newsfeeds' => 'blob NULL',
  'newsfeedp' => 'blob NULL',
  'newsletters' => 'blob NULL',
  'newsletterp' => 'blob NULL',
);

$this->arrOrderFields = array (
);

$this->arrUniqueFields = array (
  0 => 'name',
);

$this->arrKeys = array (
  'id' => 'primary',
);

$this->arrRelations = array (
);

$this->blnIsDbTable = true;
