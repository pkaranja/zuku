<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$articles = &ModZukuhighlightsHelper::getArticle();

require JModuleHelper::getLayoutPath('mod_zukuhighlights', $params->get('layout', 'default'));
