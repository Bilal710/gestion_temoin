<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCDgdOiO\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCDgdOiO/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerCDgdOiO.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerCDgdOiO\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerCDgdOiO\App_KernelProdContainer([
    'container.build_hash' => 'CDgdOiO',
    'container.build_id' => '9aa7d178',
    'container.build_time' => 1635244755,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCDgdOiO');
