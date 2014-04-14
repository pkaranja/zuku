<?php
/**
 * @version     1.0.0
 * @package     com_packages
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pittskay@gmail.com> - http://www.aimgroup.co.tz
 */
// no direct access
defined('_JEXEC') or die;
?>
<?php if ($this->item) : 
 echo '<div class="col-xs-12">
	        <div class="row grey">
	            <div class="col-xs-5 green">
	              <h3 class="text-white">'.$this->item->price.'<sup>'.JRequest::getVar("currency").'</sup></h3>
	            </div>
	            <div class="col-xs-7 right no-padding">
	                <img src="templates/zuku/images/curve2.png" class="img-responsive no-margin no-padding left pull-left" />
	            	<h2 class="package-name">'.$this->item->packagename.'</h2>
	            </div>
	        </div>
	    </div>  
        <div class="col-xs-12">
            <div class="row">
                <div class="col-sm-5 col-xs-12 no-padding no-margin">
                	Left
                </div>
                <div class="col-sm-7 col-xs-12 text-darkgrey no-padding no-margin">
                    '.$this->item->description.'
                    <button class="text-yellow yellow right pull-right btn btn-lg">Get Package</button>
                </div>
            </div>
        </div>';
    
else:
    echo JText::_('COM_PACKAGES_ITEM_NOT_LOADED');
endif;
?>
