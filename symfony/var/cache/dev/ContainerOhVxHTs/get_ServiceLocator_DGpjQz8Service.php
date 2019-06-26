<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.DGpjQz8' shared service.

return $this->privates['.service_locator.DGpjQz8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'pagination' => ['privates', 'App\\Service\\PaginationManager', 'getPaginationManagerService.php', true],
    'repo' => ['privates', 'App\\Repository\\SurveyRepository', 'getSurveyRepositoryService.php', true],
], [
    'pagination' => 'App\\Service\\PaginationManager',
    'repo' => 'App\\Repository\\SurveyRepository',
]);
