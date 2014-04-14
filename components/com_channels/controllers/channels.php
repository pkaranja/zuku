<?php
/**
 * @version     1.0.0
 * @package     com_channels
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Peter <pittskay@gmail.com> - http://aimgroup.co.tz/
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Channels list controller class.
 */
class ChannelsControllerChannels extends ChannelsController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Channels', $prefix = 'ChannelsModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}