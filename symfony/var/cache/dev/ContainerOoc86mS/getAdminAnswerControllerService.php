<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Admin\AdminAnswerController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/Admin/AdminAnswerController.php';

$this->services['App\\Controller\\Admin\\AdminAnswerController'] = $instance = new \App\Controller\Admin\AdminAnswerController();

$instance->setContainer(($this->privates['.service_locator.OSkmkPy'] ?? $this->load('get_ServiceLocator_OSkmkPyService.php'))->withContext('App\\Controller\\Admin\\AdminAnswerController', $this));

return $instance;
