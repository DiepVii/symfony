<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRcyJMlS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRcyJMlS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRcyJMlS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRcyJMlS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRcyJMlS\App_KernelDevDebugContainer([
    'container.build_hash' => 'RcyJMlS',
    'container.build_id' => 'c887e0eb',
    'container.build_time' => 1657097650,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRcyJMlS');
