<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\Admin\AdminQuizController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/Admin/AdminQuizController.php';

$this->services['App\\Controller\\Admin\\AdminQuizController'] = $instance = new \App\Controller\Admin\AdminQuizController();

$instance->setContainer(($this->privates['.service_locator.ewuGMi6'] ?? $this->load('get_ServiceLocator_EwuGMi6Service.php'))->withContext('App\\Controller\\Admin\\AdminQuizController', $this));

return $instance;
