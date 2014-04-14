<?php
/**
 * @version     1.0.0
 * @package     com_epg
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pittskay@gmail.com> - http://www.aimgroup.co.tz
 */
// no direct access
defined('_JEXEC') or die;

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_epg', JPATH_ADMINISTRATOR);

?>
<?php if ($this->item) : ?>

    <div class="item_fields">

        <ul class="fields_list">

            			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_FILE'); ?>:

			<?php 
				$uploadPath = 'administrator' . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_epg' . DIRECTORY_SEPARATOR . '/epg/' . DIRECTORY_SEPARATOR . $this->item->file;
			?>
			<a href="<?php echo JRoute::_(JUri::base() . $uploadPath, false); ?>" target="_blank"><?php echo $this->item->file; ?></a></li>			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_TITLE'); ?>:
			<?php echo $this->item->title; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_CHANNEL'); ?>:
			<?php echo $this->item->channel; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_CHANNELID'); ?>:
			<?php echo $this->item->channelid; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_STARTING'); ?>:
			<?php echo $this->item->starting; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_ENDING'); ?>:
			<?php echo $this->item->ending; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_LANGAUGE'); ?>:
			<?php echo $this->item->langauge; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_COUNTRY'); ?>:
			<?php echo $this->item->country; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_RATING'); ?>:
			<?php echo $this->item->rating; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_ACTOR'); ?>:
			<?php echo $this->item->actor; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_YEAR'); ?>:
			<?php echo $this->item->year; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_DIRECTOR'); ?>:
			<?php echo $this->item->director; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_DESCRIPTION'); ?>:
			<?php echo $this->item->description; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_ID'); ?>:
			<?php echo $this->item->id; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_ORDERING'); ?>:
			<?php echo $this->item->ordering; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_STATE'); ?>:
			<?php echo $this->item->state; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_CHECKED_OUT'); ?>:
			<?php echo $this->item->checked_out; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_CHECKED_OUT_TIME'); ?>:
			<?php echo $this->item->checked_out_time; ?></li>
			<li><?php echo JText::_('COM_EPG_FORM_LBL_PROGRAM_CREATED_BY'); ?>:
			<?php echo $this->item->created_by; ?></li>


        </ul>

    </div>
    
<?php
else:
    echo JText::_('COM_EPG_ITEM_NOT_LOADED');
endif;
?>
