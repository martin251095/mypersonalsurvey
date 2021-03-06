<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Q.mSVS2' shared service.

return $this->privates['.service_locator.Q.mSVS2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'tokenStorage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
    'translationManager' => ['privates', 'App\\Service\\TranslationManager', 'getTranslationManagerService.php', true],
], [
    'em' => '?',
    'tokenStorage' => '?',
    'translationManager' => 'App\\Service\\TranslationManager',
]);
