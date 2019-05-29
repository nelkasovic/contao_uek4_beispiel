<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Extend default palette
Contao\CoreBundle\DataContainer\PaletteManipulator::create()
    ->addLegend('feed_legend', 'modules_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)
    ->addField('calendarfeeds', 'feed_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_layout')
;

// Extend fields
$GLOBALS['TL_DCA']['tl_layout']['fields']['calendarfeeds'] = array
(
    'label'             => &$GLOBALS['TL_LANG']['tl_layout']['calendarfeeds'],
    'exclude'           => true,
    'inputType'         => 'checkbox',
    'foreignKey'        => 'tl_calendar_feed.title',
    'eval'              => array('multiple'=>true),
    'sql'               => "blob NULL"
);
