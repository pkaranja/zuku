<?php
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$announcements = &ModAnnouncementsHelper::getAnnouncements();

require JModuleHelper::getLayoutPath('mod_zukuannouncements', $params->get('layout', 'default'));
