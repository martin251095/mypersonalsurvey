<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Lf60P8X' shared service.

return $this->privates['.service_locator.Lf60P8X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'statsManager' => ['privates', 'App\\Service\\StatsManager', 'getStatsManagerService.php', true],
], [
    'statsManager' => 'App\\Service\\StatsManager',
]);
