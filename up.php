<?php
SkyL::Import(Plugin::GetFile($plugin));
$__PluginDir__ = Plugin::GetLocalPluginDir($plugin);
$config = $__PluginDir__.'/config.php';
if(file_exists($config))
{
    SkyL::Import($config);
    SkyPayPal::$Settings[':ENV'] = array_merge(SkyPayPal::$Settings[':ENV'], $_PAYPAL[SkyDefines::GetEnv()]);
}
