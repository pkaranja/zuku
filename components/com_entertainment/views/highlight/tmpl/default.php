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

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_entertainment', JPATH_ADMINISTRATOR);

?>
<div class="page-header"><h3>Zuku Highlights</h3></div>
<?php if ($this->item) : ?>
	<div class="col-sm-8 no-padding">
		<div class="row" style="padding:0 10px 0 0;">
			<div class="col-xs-12">
				<h4><?php echo $this->item->title; ?></h4>
				<img class="img-responsive" src="<?php echo $this->item->image; ?>" class="fullImg" alt="<?php echo $this->item->title; ?>" title="<?php echo $this->item->title; ?>">
			</div>
			
			<div class="col-xs-12" >
				<?php echo $this->item->article; ?>
			</div>
		</div>
	</div>
	<div class="col-sm-4 col-xs-12 small-padding blue text-white">
		<?php
			$modules = JModuleHelper::getModules('inner-sidebar'); 
			foreach($modules as $module){
				echo JModuleHelper::renderModule($module);
			}
		?>
	</div>
<?php
else:
    echo JText::_('Something went wrong, please go back');
endif;
?>
