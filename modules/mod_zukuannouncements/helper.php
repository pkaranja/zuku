<?php
defined('_JEXEC') or die;

class ModAnnouncementsHelper
{
	public static function &getAnnouncements()
	{
		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_announcements/models', 'AnnouncementsModel');
		$model = JModelLegacy::getInstance('Announcements', 'AnnouncementsModel', array('ignore_request' => true));
		$announcements = $model->getItems();

		return $announcements;
	}
}
