<?php

// Available placeholders: :uc:vendor, :uc:plugin, :lc:vendor, :lc:plugin
return [
    'src/MyPlugin.php' => 'src/:uc:plugin.php',
    'config/myplugin.php' => 'config/:lc:plugin.php',
    'src/Facades/MyPlugin.php' => 'src/Facades/:uc:plugin.php',
    'src/MyPluginServiceProvider.php' => 'src/:uc:pluginServiceProvider.php',
];