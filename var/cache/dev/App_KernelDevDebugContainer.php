<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA7NGqpx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA7NGqpx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerA7NGqpx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerA7NGqpx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerA7NGqpx\App_KernelDevDebugContainer([
    'container.build_hash' => 'A7NGqpx',
    'container.build_id' => '163d7633',
    'container.build_time' => 1716163370,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA7NGqpx');
