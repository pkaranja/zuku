<?php
/**
 * @version     1.0.0
 * @package     com_products
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Peter <pittskay@gmail.com> - http://aimgroup.co.tz/
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Product controller class.
 */
class ProductsControllerProduct extends JControllerForm
{

    function __construct() {
        $this->view_list = 'products';
        parent::__construct();
    }

}