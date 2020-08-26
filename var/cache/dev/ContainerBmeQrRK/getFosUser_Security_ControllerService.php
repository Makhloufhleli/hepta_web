<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.security.controller' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Controller\\SecurityController.php';

$this->services['fos_user.security.controller'] = $instance = new \FOS\UserBundle\Controller\SecurityController(($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php')));

$instance->setContainer($this);

return $instance;