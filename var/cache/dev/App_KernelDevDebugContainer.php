<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXNbxWDp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXNbxWDp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXNbxWDp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXNbxWDp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXNbxWDp\App_KernelDevDebugContainer([
    'container.build_hash' => 'XNbxWDp',
    'container.build_id' => '0d85b060',
    'container.build_time' => 1676827169,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXNbxWDp');
