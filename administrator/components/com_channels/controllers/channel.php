<?php
/**
 * @version     1.0.0
 * @package     com_channels
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Peter <pittskay@gmail.com> - http://aimgroup.co.tz/
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Channel controller class.
 */
class ChannelsControllerChannel extends JControllerForm
{

    function __construct() {
        $this->view_list = 'channels';
        parent::__construct();
    }

}