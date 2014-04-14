<?php
defined('_JEXEC') or die;

class ModZukusliderHelper
{
	public static function &getSlides()
	{
		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_slidermanager/models', 'SlidermanagerModel');
		$model = JModelLegacy::getInstance('Slides', 'SlidermanagerModel', array('ignore_request' => true));
		$banners = $model->getItems();

		return $banners;
	}
}
