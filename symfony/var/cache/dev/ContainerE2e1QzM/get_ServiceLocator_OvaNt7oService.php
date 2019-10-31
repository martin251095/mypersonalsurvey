<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.OvaNt7o' shared service.

return $this->privates['.service_locator.OvaNt7o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'pagination' => ['privates', 'App\\Service\\PaginationManager', 'getPaginationManagerService.php', true],
    'repoQuiz' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService.php', true],
    'translationManager' => ['privates', 'App\\Service\\TranslationManager', 'getTranslationManagerService.php', true],
], [
    'pagination' => 'App\\Service\\PaginationManager',
    'repoQuiz' => 'App\\Repository\\QuizRepository',
    'translationManager' => 'App\\Service\\TranslationManager',
]);