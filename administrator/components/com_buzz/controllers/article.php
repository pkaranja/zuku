<?php
/**
 * @version     1.0.0
 * @package     com_buzz
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pkaranja@aimgroup.co.tz> - http://www.aimgroup.co.tz
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Article controller class.
 */
class BuzzControllerArticle extends JControllerForm
{

    function __construct() {
        $this->view_list = 'articles';
        parent::__construct();
    }

}