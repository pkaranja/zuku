<?php
defined('_JEXEC') or die;

class ModZukudontmissHelper
{
	public static function &getShows()
	{
		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_shows/models', 'ShowsModel');
		$model = JModelLegacy::getInstance('Shows', 'ShowsModel', array('ignore_request' => true));
		$shows = $model->getItems();

		return $shows;
	}
}
