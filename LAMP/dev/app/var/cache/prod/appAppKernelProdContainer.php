<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWfTYMkr\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWfTYMkr/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerWfTYMkr.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerWfTYMkr\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerWfTYMkr\appAppKernelProdContainer([
    'container.build_hash' => 'WfTYMkr',
    'container.build_id' => 'a6342a0a',
    'container.build_time' => 1710169413,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWfTYMkr');