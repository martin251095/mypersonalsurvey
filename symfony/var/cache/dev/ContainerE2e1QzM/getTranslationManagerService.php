<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\TranslationManager' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/TranslationManager.php';

return $this->privates['App\\Service\\TranslationManager'] = new \App\Service\TranslationManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), 'fr|nl', 'en');