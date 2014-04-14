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

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');

// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_packages/assets/css/packages.css');
?>
<script type="text/javascript">
    js = jQuery.noConflict();
    js(document).ready(function() {
        
    });

    Joomla.submitbutton = function(task)
    {
        if (task == 'package.cancel') {
            Joomla.submitform(task, document.getElementById('package-form'));
        }
        else {
            
				js = jQuery.noConflict();
				if(js('#jform_icon').val() != ''){
					js('#jform_icon_hidden').val(js('#jform_icon').val());
				}
            if (task != 'package.cancel' && document.formvalidator.isValid(document.id('package-form'))) {
                
                Joomla.submitform(task, document.getElementById('package-form'));
            }
            else {
                alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED')); ?>');
            }
        }
    }
</script>
<form action="<?php echo JRoute::_('index.php?option=com_packages&layout=edit&id=' . (int) $this->item->id); ?>" method="post" enctype="multipart/form-data" name="adminForm" id="package-form" class="form-validate">

    <div class="form-horizontal">
       <div class="row-fluid">
            <div class="span10 form-horizontal">
                <fieldset class="adminform">

                    			
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('packagename'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('packagename'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('icon'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('icon'); ?>
					<?php if (!empty($this->item->icon)) : ?>
							<a href="<?php echo JRoute::_(JUri::base() . 'components' . DIRECTORY_SEPARATOR . 'com_packages' . DIRECTORY_SEPARATOR . 'images/packages/' .DIRECTORY_SEPARATOR . $this->item->icon, false);?>">[View File]</a>
					<?php endif; ?>
				</div>
			</div>

				
				<input type="hidden" name="jform[icon]" id="jform_icon_hidden" value="<?php echo $this->item->icon ?>" />			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('price'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('price'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('offer'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('offer'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('product'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('product'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('description'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('description'); ?></div>
			</div>
			
			<div style="display:none;">
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('state'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('state'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('created_by'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('created_by'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('id'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('id'); ?></div>
				</div>
				</div>
	                </fieldset>
	            </div>
        </div>
       
        <input type="hidden" name="task" value="" />
        <?php echo JHtml::_('form.token'); ?>

    </div>
</form>