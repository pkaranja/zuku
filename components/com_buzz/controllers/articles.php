<?php
/**
 * @version     1.0.0
 * @package     com_buzz
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pkaranja@aimgroup.co.tz> - http://www.aimgroup.co.tz
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Articles list controller class.
 */
class BuzzControllerArticles extends BuzzController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Articles', $prefix = 'BuzzModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}