<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.contao.command.unlock' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\contao\\installation-bundle\\src\\Command\\UnlockCommand.php';

return $this->services['console.command.public_alias.contao.command.unlock'] = new \Contao\InstallationBundle\Command\UnlockCommand(($this->targetDirs[3].'/var/install_lock'));
