<?php
/**
 * @version     1.0.0
 * @package     com_epg
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pittskay@gmail.com> - http://www.aimgroup.co.tz
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Program controller class.
 */
class EpgControllerProgram extends JControllerForm
{

    function __construct() {
        $this->view_list = 'electronicprogramguide';
        parent::__construct();
    }

}