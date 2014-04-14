<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$shows = &ModZukunowHelper::getShows();

require JModuleHelper::getLayoutPath('mod_zukunow', $params->get('layout', 'default'));
