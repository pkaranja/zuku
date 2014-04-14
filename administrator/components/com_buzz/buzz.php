<?php
/**
 * @version     1.0.0
 * @package     com_buzz
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pkaranja@aimgroup.co.tz> - http://www.aimgroup.co.tz
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_buzz')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JControllerLegacy::getInstance('Buzz');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
