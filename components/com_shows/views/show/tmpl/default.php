<?php
/**
 * @version     1.0.0
 * @package     com_shows
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Peter <pittskay@gmail.com> - http://aimgroup.co.tz/
 */
// no direct access
defined('_JEXEC') or die;

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_shows', JPATH_ADMINISTRATOR);

?>
<?php if ($this->item) : ?>

    <div class="item_fields">

        <ul class="fields_list">

            			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_ID'); ?>:
			<?php echo $this->item->id; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_NAME'); ?>:
			<?php echo $this->item->name; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_IMAGE'); ?>:
			<?php echo $this->item->image; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_START_TIME'); ?>:
			<?php echo $this->item->start_time; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_END_TIME'); ?>:
			<?php echo $this->item->end_time; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_DAYS'); ?>:
			<?php echo $this->item->days; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_FEATURED'); ?>:
			<?php echo $this->item->featured; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_CHANNEL'); ?>:
			<?php echo $this->item->channel; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_ORDERING'); ?>:
			<?php echo $this->item->ordering; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_STATE'); ?>:
			<?php echo $this->item->state; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_CHECKED_OUT'); ?>:
			<?php echo $this->item->checked_out; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_CHECKED_OUT_TIME'); ?>:
			<?php echo $this->item->checked_out_time; ?></li>
			<li><?php echo JText::_('COM_SHOWS_FORM_LBL_SHOW_CREATED_BY'); ?>:
			<?php echo $this->item->created_by; ?></li>


        </ul>

    </div>
    
<?php
else:
    echo JText::_('COM_SHOWS_ITEM_NOT_LOADED');
endif;
?>
