<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$packages = &ModZukutvguideHelper::getPackages();
$products = &ModZukutvguideHelper::getProducts();

require JModuleHelper::getLayoutPath('mod_zukutvguide', $params->get('layout', 'default'));
