<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSxfJj4X\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSxfJj4X/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerSxfJj4X.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerSxfJj4X\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerSxfJj4X\appAppKernelProdContainer([
    'container.build_hash' => 'SxfJj4X',
    'container.build_id' => '794f4894',
    'container.build_time' => 1705972993,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSxfJj4X');
