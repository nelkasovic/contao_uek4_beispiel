<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao_manager.listener.backend_menu_listener' shared service.

include_once $this->targetDirs[3].'\\vendor\\contao\\manager-bundle\\src\\EventListener\\BackendMenuListener.php';

return $this->privates['contao_manager.listener.backend_menu_listener'] = new \Contao\ManagerBundle\EventListener\BackendMenuListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), 'contao-manager.phar.php');
