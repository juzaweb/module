<?php
/**
 * @package    tadcms\tadcms
 * @author     The Anh Dang <dangtheanh16@gmail.com>
 * @link       https://github.com/tadcms/tadcms
 * @license    MIT
 *
 * Created by The Anh.
 * Date: 5/1/2021
 * Time: 4:31 PM
 */

$pluginFolders = __DIR__ . '/../../../plugins';
$pluginFile = __DIR__ . '/../../../bootstrap/cache/plugins_statuses.php';

if (file_exists($pluginFile)) {
    $plugins = require $pluginFile;
    if ($plugins) {
        $loader = new \Composer\Autoload\ClassLoader();
        foreach ($plugins as $pluginInfo) {
            foreach ($pluginInfo as $key => $item) {
                $path = $pluginFolders . '/' . $item['path'];
                $namespace = $item['namespace'] ?? '';
                if (is_dir($path) && $namespace) {
                    $loader->setPsr4($namespace, [$path]);
                }
            }
        }

        $loader->register(true);
    }
}
