<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.rememberme.services.persistent.contao_frontend' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\RememberMe\\RememberMeServicesInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Logout\\LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\RememberMe\\AbstractRememberMeServices.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Authentication\\RememberMe\\TokenProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\contao\\core-bundle\\src\\Security\\Authentication\\RememberMe\\DatabaseTokenProvider.php';

$this->privates['security.authentication.rememberme.services.persistent.contao_frontend'] = $instance = new \Symfony\Component\Security\Http\RememberMe\PersistentTokenBasedRememberMeServices([0 => ($this->privates['contao.security.frontend_user_provider'] ?? $this->load('getContao_Security_FrontendUserProviderService.php'))], 'ThisTokenIsNotSoSecretChangeIt', 'contao_frontend', ['remember_me_parameter' => 'autologin', 'name' => 'REMEMBERME', 'lifetime' => 31536000, 'path' => '/', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'samesite' => NULL, 'always_remember_me' => false], ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')));

$instance->setTokenProvider(new \Contao\CoreBundle\Security\Authentication\RememberMe\DatabaseTokenProvider(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ThisTokenIsNotSoSecretChangeIt'));

return $instance;
