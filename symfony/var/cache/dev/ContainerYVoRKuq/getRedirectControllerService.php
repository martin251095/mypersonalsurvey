<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\RedirectController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/RedirectController.php';

$this->services['App\\Controller\\RedirectController'] = $instance = new \App\Controller\RedirectController();

$instance->setContainer(($this->privates['.service_locator.ewuGMi6'] ?? $this->load('get_ServiceLocator_EwuGMi6Service.php'))->withContext('App\\Controller\\RedirectController', $this));

return $instance;
