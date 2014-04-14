<?php
defined('_JEXEC') or die;

class ModZukubuzzHelper
{
	public static function &getArticle()
	{
		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_buzz/models', 'BuzzModel');
		$model = JModelLegacy::getInstance('Articles', 'BuzzModel', array('ignore_request' => true));
		$articles = $model->getItems();

		return $articles;
	}
}
