<?php
/**
 * @version     1.0.0
 * @package     com_packages
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pittskay@gmail.com> - http://www.aimgroup.co.tz
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/controller.php';

/**
 * Packages list controller class.
 */
class PackagesControllerPackages extends PackagesController
{
	/**
	 * Proxy for getModel.
	 * @since	1.6
	 */
	public function &getModel($name = 'Packages', $prefix = 'PackagesModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}