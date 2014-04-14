<?php
defined('_JEXEC') or die;

class ModZukuproductsHelper
{
	public static function &getProducts()
	{
		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_products/models', 'ProductsModel');
		$model = JModelLegacy::getInstance('Products', 'ProductsModel', array('ignore_request' => true));
		$products = $model->getItems();

		return $products;
	}
}
