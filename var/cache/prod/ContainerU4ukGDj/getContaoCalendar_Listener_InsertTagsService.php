<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao_calendar.listener.insert_tags' shared service.

include_once $this->targetDirs[3].'\\vendor\\contao\\calendar-bundle\\src\\EventListener\\InsertTagsListener.php';

return $this->services['contao_calendar.listener.insert_tags'] = new \Contao\CalendarBundle\EventListener\InsertTagsListener(($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
