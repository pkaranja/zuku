<?php
defined('_JEXEC') or die;

class ModZukuhighlightsHelper
{
	public static function &getArticle()
	{
		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_entertainment/models', 'EntertainmentModel');
		$model = JModelLegacy::getInstance('Highlights', 'EntertainmentModel', array('ignore_request' => true));
		$articles = $model->getItems();

		return $articles;
	}
}
