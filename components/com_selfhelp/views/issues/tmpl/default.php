<?php
/**
 * @version     1.0.0
 * @package     com_selfhelp
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pkaranja@aimgroup.co.tz> - http://www.aimgroup.co.tz
 */
// no direct access
defined('_JEXEC') or die;

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_selfhelp', JPATH_ADMINISTRATOR);

?>
<?php if ($this->item) : ?>

    <div class="item_fields">

        <ul class="fields_list">

            			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_ID'); ?>:
			<?php echo $this->item->id; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_ORDERING'); ?>:
			<?php echo $this->item->ordering; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_STATE'); ?>:
			<?php echo $this->item->state; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_CHECKED_OUT'); ?>:
			<?php echo $this->item->checked_out; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_CHECKED_OUT_TIME'); ?>:
			<?php echo $this->item->checked_out_time; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_CREATED_BY'); ?>:
			<?php echo $this->item->created_by; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_CUSTOMER'); ?>:
			<?php echo $this->item->customer; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_ACCOUNT'); ?>:
			<?php echo $this->item->account; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_DATE'); ?>:
			<?php echo $this->item->date; ?></li>
			<li><?php echo JText::_('COM_SELFHELP_FORM_LBL_ISSUES_ISSUE'); ?>:
			<?php echo $this->item->issue; ?></li>


        </ul>

    </div>
    
<?php
else:
    echo JText::_('COM_SELFHELP_ITEM_NOT_LOADED');
endif;
?>
