<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOKYBZ4e\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOKYBZ4e/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOKYBZ4e.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOKYBZ4e\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOKYBZ4e\App_KernelDevDebugContainer([
    'container.build_hash' => 'OKYBZ4e',
    'container.build_id' => 'c4583958',
    'container.build_time' => 1619515351,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOKYBZ4e');
