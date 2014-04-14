<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$articles = &ModZukubuzzHelper::getArticle();

require JModuleHelper::getLayoutPath('mod_zukubuzz', $params->get('layout', 'default'));
