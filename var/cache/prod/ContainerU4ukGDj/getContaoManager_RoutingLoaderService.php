<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'contao_manager.routing_loader' shared service.

include_once $this->targetDirs[3].'\\vendor\\contao\\manager-bundle\\src\\Routing\\RouteLoader.php';

return $this->services['contao_manager.routing_loader'] = new \Contao\ManagerBundle\Routing\RouteLoader(($this->services['routing.loader'] ?? $this->load('getRouting_LoaderService.php')), ($this->services['contao_manager.plugin_loader'] ?? $this->get('contao_manager.plugin_loader', 1)), ($this->services['kernel'] ?? $this->get('kernel', 1)), $this->targetDirs[3]);
