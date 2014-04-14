<?php
/**
 * @version     1.0.0
 * @package     com_channels
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Peter <pittskay@gmail.com> - http://aimgroup.co.tz/
 */
// no direct access
defined('_JEXEC') or die;

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_channels', JPATH_ADMINISTRATOR);

?>
<?php if ($this->item) : ?>

    <div class="item_fields">

        <ul class="fields_list">

            			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_ID'); ?>:
			<?php echo $this->item->id; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_NAME'); ?>:
			<?php echo $this->item->name; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_ICON'); ?>:
			<?php echo $this->item->icon; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_CHANNEL_NUMBER'); ?>:
			<?php echo $this->item->channel_number; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_DESCRIPTION'); ?>:
			<?php echo $this->item->description; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_PACKAGE'); ?>:
			<?php echo $this->item->package; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_ORDERING'); ?>:
			<?php echo $this->item->ordering; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_STATE'); ?>:
			<?php echo $this->item->state; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_CHECKED_OUT'); ?>:
			<?php echo $this->item->checked_out; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_CHECKED_OUT_TIME'); ?>:
			<?php echo $this->item->checked_out_time; ?></li>
			<li><?php echo JText::_('COM_CHANNELS_FORM_LBL_CHANNEL_CREATED_BY'); ?>:
			<?php echo $this->item->created_by; ?></li>


        </ul>

    </div>
    
<?php
else:
    echo JText::_('COM_CHANNELS_ITEM_NOT_LOADED');
endif;
?>
