<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'contao.listener.switch_user' shared service.

include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\EventListener\\SwitchUserListener.php';

return $this->privates['contao.listener.switch_user'] = new \Contao\CoreBundle\EventListener\SwitchUserListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
