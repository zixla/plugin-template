<?php

// Available placeholders: :uc:vendor, :uc:plugin, :lc:vendor, :lc:plugin
return [
    'src/MyPackage.php' => 'src/:uc:plugin.php',
    'config/mypackage.php' => 'config/:lc:plugin.php',
    'src/Facades/MyPackage.php' => 'src/Facades/:uc:plugin.php',
    'src/MyPackageServiceProvider.php' => 'src/:uc:pluginServiceProvider.php',
];