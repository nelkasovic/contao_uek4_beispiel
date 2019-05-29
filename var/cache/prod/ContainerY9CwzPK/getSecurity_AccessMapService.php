<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\AccessMapInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\AccessMap.php';

$this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/contao/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/contao/logout$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/contao(/|$)'), [0 => 'ROLE_USER'], NULL);

return $instance;
