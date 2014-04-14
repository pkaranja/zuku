<?php
/**
 * @version     1.0.0
 * @package     com_announcements
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pittskay@gmail.com> - http://www.aimgroup.co.tz
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Announcements list controller class.
 */
class AnnouncementsControllerAnnouncements extends AnnouncementsController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Announcements', $prefix = 'AnnouncementsModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}