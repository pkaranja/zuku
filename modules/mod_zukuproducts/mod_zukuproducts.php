<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$products = &ModZukuproductsHelper::getProducts();

require JModuleHelper::getLayoutPath('mod_zukuproducts', $params->get('layout', 'default'));
