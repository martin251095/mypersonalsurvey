<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.QmKf.zg' shared service.

return $this->privates['.service_locator.QmKf.zg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'quiz' => ['privates', '.errored..service_locator.QmKf.zg.App\\Entity\\Quiz', NULL, 'Cannot autowire service "debug.argument_resolver.not_tagged_controller.inner": it references class "App\\Entity\\Quiz" but no such service exists.'],
], [
    'manager' => '?',
    'quiz' => 'App\\Entity\\Quiz',
]);
