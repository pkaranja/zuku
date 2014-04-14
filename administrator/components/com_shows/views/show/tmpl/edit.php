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

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');

// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_shows/assets/css/shows.css');
$document->addStyleSheet('components/com_shows/assets/css/bootstrap-timepicker.min.css');

//Import JS
$document->addScript('components/com_shows/assets/js/bootstrap-timepicker.min.js');
?>
<script type="text/javascript">
    js = jQuery.noConflict();
    js(document).ready(function() {
        
    });

    Joomla.submitbutton = function(task)
    {
        if (task == 'show.cancel') {
            Joomla.submitform(task, document.getElementById('show-form'));
        }
        else {
            
            if (task != 'show.cancel' && document.formvalidator.isValid(document.id('show-form'))) {
                
                Joomla.submitform(task, document.getElementById('show-form'));
            }
            else {
                alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED')); ?>');
            }
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_shows&layout=edit&id=' . (int) $this->item->id); ?>" method="post" enctype="multipart/form-data" name="adminForm" id="show-form" class="form-validate">

    <div class="form-horizontal">
        <div class="row-fluid">
            <div class="span10 form-horizontal">
                <fieldset class="adminform">
           				<div class="control-group">
							<div class="control-label"><?php echo $this->form->getLabel('name'); ?></div>
							<div class="controls"><?php echo $this->form->getInput('name'); ?></div>
						</div>
						<div class="control-group">
							<div class="control-label"><?php echo $this->form->getLabel('image'); ?></div>
							<div class="controls"><?php echo $this->form->getInput('image'); ?></div>
						</div>
						<div class="control-group">
							<div class="control-label"><?php echo $this->form->getLabel('start_time'); ?></div>
							<div class="controls">
			           			<div class="input-append bootstrap-timepicker">
			            			<input id="jform_start_time" name="jform[start_time]" value="<?php echo $this->form->getValue('start_time'); ?>" type="text" class="input-large" value="" style="display:inline !important;" required aria-required="true" aria-invalid="false" />
			            			<span class="add-on" id="starttime"><i class="glyphicon glyphicon-time"></i></span>
			        			</div>

			        		</div>
						</div>
						<div class="control-group">
							<div class="control-label"><?php echo $this->form->getLabel('end_time'); ?></div>
							<div class="controls">
			           			<div class="input-append bootstrap-timepicker">
			            			<input id="jform_end_time" name="jform[end_time]" value="<?php echo $this->form->getValue('end_time'); ?>" type="text" class="input-large" value="" style="display:inline !important;" required aria-required="true" aria-invalid="false" />
			            			<span class="add-on" id="endtime"><i class="glyphicon glyphicon-time"></i></span>
			        			</div>
			        		</div>
						</div>
						<div class="control-group">
							<div class="control-label"><?php echo $this->form->getLabel('days'); ?></div>
							<div class="controls"><?php echo $this->form->getInput('days'); ?></div>
						</div>
						<div class="control-group">
							<div class="control-label"><?php echo $this->form->getLabel('featured'); ?></div>
							<div class="controls"><?php echo $this->form->getInput('featured'); ?></div>
						</div>
						<div class="control-group">
							<div class="control-label"><?php echo $this->form->getLabel('channel'); ?></div>
							<div class="controls"><?php echo $this->form->getInput('channel'); ?></div>
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

        <script type="text/javascript">
        	jQuery("#starttime").click(function(){
        		jQuery('#jform_start_time').timepicker('showWidget');
        	});
        	jQuery("#endtime").click(function(){
            	jQuery('#jform_end_time').timepicker('showWidget');
            });
        </script>

        <input type="hidden" name="task" value="" />
        <?php echo JHtml::_('form.token'); ?>

    </div>
</form>