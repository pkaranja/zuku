<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$shows = &ModZukudontmissHelper::getShows();

require JModuleHelper::getLayoutPath('mod_zukudontmiss', $params->get('layout', 'default'));
