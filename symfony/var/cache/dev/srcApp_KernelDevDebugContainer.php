<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOhVxHTs\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOhVxHTs/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOhVxHTs.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOhVxHTs\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOhVxHTs\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'OhVxHTs',
    'container.build_id' => '189e02ba',
    'container.build_time' => 1561576662,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOhVxHTs');