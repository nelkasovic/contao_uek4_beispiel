<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.cache.warm_internal' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Cache\\ContaoCacheWarmer.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\filesystem\\Filesystem.php';

return $this->privates['contao.cache.warm_internal'] = new \Contao\CoreBundle\Cache\ContaoCacheWarmer(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->services['contao.resource_finder'] ?? $this->load('getContao_ResourceFinderService.php')), ($this->services['contao.resource_locator'] ?? $this->load('getContao_ResourceLocatorService.php')), $this->targetDirs[3], ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['contao.framework'] ?? $this->getContao_FrameworkService()));
