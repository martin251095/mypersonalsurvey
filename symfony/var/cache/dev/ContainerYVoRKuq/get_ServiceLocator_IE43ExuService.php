<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.iE43Exu' shared service.

return $this->privates['.service_locator.iE43Exu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'answer' => ['privates', '.errored..service_locator.iE43Exu.App\\Entity\\Answer', NULL, 'Cannot autowire service "debug.argument_resolver.not_tagged_controller.inner": it references class "App\\Entity\\Answer" but no such service exists.'],
    'answerRepository' => ['privates', 'App\\Repository\\AnswerRepository', 'getAnswerRepositoryService.php', true],
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
], [
    'answer' => 'App\\Entity\\Answer',
    'answerRepository' => 'App\\Repository\\AnswerRepository',
    'manager' => '?',
]);
