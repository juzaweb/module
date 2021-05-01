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

$pluginsStatuses = __DIR__ . '/../../../storage/plugins_statuses.json';
$pluginFolders = __DIR__ . '/../../../plugins';

if (file_exists($pluginsStatuses)) {
    $plugins = @json_decode(file_get_contents($pluginsStatuses));
    if ($plugins) {
        $loader = new \Composer\Autoload\ClassLoader();
        foreach ($plugins as $plugin => $status) {
            if ($status) {
                $pluginFolder = $pluginFolders . '/' . strtolower($plugin) . '/src';

                if (is_dir($pluginFolder)) {
                    $namespace = ucwords(str_replace('/', ' ', $plugin));
                    $namespace = str_replace(' ', '\\', $namespace) .'\\';
                    $loader->setPsr4($namespace, [$pluginFolder]);
                }
            }
        }

        $loader->register(true);
    }
}
