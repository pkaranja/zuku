<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$slides = &ModZukusliderHelper::getSlides();

require JModuleHelper::getLayoutPath('mod_zukuslider', $params->get('layout', 'default'));
