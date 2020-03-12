<?php
/**
 * 插件环境预热
 * @author dogstar 20200312
 */ 
require_once dirname(__FILE__) . '/../public/init.php';

$folder = array(
    'config',
    'plugins',
    'data',
    'public/portal/page',
    'public/portal',
    'src/app/Api',
    'src/app/Domain',
    'src/app/Model',
    'src/app/Common',
    'src/portal/Api',
);

foreach ($folder as $it) {
    chmod(API_ROOT . '/' . $it, 0755);
}


echo "done\n";
