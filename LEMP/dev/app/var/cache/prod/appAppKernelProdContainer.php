<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDA5jnpm\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDA5jnpm/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerDA5jnpm.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerDA5jnpm\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerDA5jnpm\appAppKernelProdContainer([
    'container.build_hash' => 'DA5jnpm',
    'container.build_id' => '43f0f201',
    'container.build_time' => 1710178794,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDA5jnpm');