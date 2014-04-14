<?php
/**
 * @version     1.0.0
 * @package     com_entertainment
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pkaranja@aimgroup.co.tz> - http://www.aimgroup.co.tz
 */
// no direct access
defined('_JEXEC') or die;
jimport('joomla.application.module.helper');
?>
    
    <div class="page-header"><h3>Zuku Buzz</h3></div>
        <div class="col-sm-9 no-padding no-margin">
            <!-- Featured Article Here !-->
            <div class="col-sm-6 no-padding no-margin small-padding grey ">
                <a href="<?php echo JRoute::_('index.php?option=com_buzz&view=article&id=' . (int)$this->featured->id); ?>">
                    <div class="green text-white"><h3 class="no-padding no-margin" style="line-height: 1.5;">Top Story</h3></div>
                    <img class="img-responsive col-xs-12 no-padding" title="<?php echo $this->featured->title; ?>" alt="<?php echo $this->featured->title; ?>" src="<?php echo $this->featured->image; ?>" />
                    <div class="text-darkgrey"><span class="semi-title bold"><?php echo $this->featured->title; ?></span><br /><?php echo $this->featured->subtitle; ?></div>
                </a>
            </div>

            <!-- End Featured Article !-->

            <?php 
                //The rest of the articles
                foreach ($this->items as $item) :  
                    if ( $item->id != $this->featuredid ):
                        ?>
                        <div class="col-sm-6 no-padding no-margin small-padding">
                            <a href="<?php echo JRoute::_('index.php?option=com_buzz&view=article&id=' . (int)$item->id); ?>">
                                <div class="green text-white"><h3 class="no-padding no-margin" style="line-height: 1.5;"><?php echo $item->title; ?></h3></div>
                                <img class="img-responsive col-xs-12 no-padding" title="<?php echo $item->title; ?>" alt="<?php echo $item->title; ?>" src="<?php echo $item->image; ?>" />
                            </a>
                            <div class="buzz-overlay text-white small-padding"><?php echo $item->subtitle; ?></div>
                        </div>

            <?php   endif;
            endforeach; ?>
        </div>
        <div class="col-sm-3 col-xs-12 small-padding blue text-white">
       
        <?php
            $modules = JModuleHelper::getModules('inner-sidebar'); 
            foreach($modules as $module){
                echo JModuleHelper::renderModule($module);
            }
        ?>
        </div>
