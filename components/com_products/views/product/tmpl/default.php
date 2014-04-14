<?php
/**
 * @version     1.0.0
 * @package     com_products
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Peter <pittskay@gmail.com> - http://aimgroup.co.tz/
 */
// no direct access
defined('_JEXEC') or die;

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_products', JPATH_ADMINISTRATOR);

echo '<div class="panel-group" id="accordion">';
if ($this->packages) :
    foreach ($this->packages as $package):
        echo '<div class="panel panel-default">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$package->id.'">
                <div class="row grey no-margin">
                    <div class="col-xs-5 green">
                        <img src="templates/zuku/images/green_strip.png"  class="img-responsive no-margin no-padding pull-left" />
                        <h3 class="text-white">'.$package->price.'<sup>'.JRequest::getVar("currency").'</sup></h3>
                        <button class="green2 text-black btn btn-lg">View Package</button>
                    </div>

                    <div class="col-xs-7 right no-padding">
                        <img src="templates/zuku/images/curve2.png" style="max-height: 146px;" class="img-responsive no-margin no-padding left pull-left" />
                    </div>
                </div>
             </a>
            <div id="collapse'.$package->id.'" class="panel-collapse collapse">
              <div class="panel-body small-margin no-padding">
                    <div class="row">
                        <div class="col-xs-5 grey">
                        </div>
                        <div class="col-xs-7 grey text-darkgrey">
                            '.$package->description.'
                            <button class="text-yellow yellow right pull-right btn btn-lg">Get Package</button>
                        </div>
                    </div>
              </div>
            </div>
          </div>';
    endforeach;
echo '</div>';
else:
    echo JError::raiseNotice(100, 'Sorry, we do not have any packages available for your region, please check this page later.');
endif;
?>
