<?php
defined('_JEXEC') or die;

class ModZukutvguideHelper
{
	public static function &getPackages()
	{
		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_packages/models', 'PackagesModel');
		$model = JModelLegacy::getInstance('Packages', 'PackagesModel', array('ignore_request' => true));
		$packages = $model->getItems();

		return $packages;
	}

	public static function &getProducts()
	{
		JModelLegacy::addIncludePath(JPATH_ROOT.'/components/com_products/models', 'ProductsModel');
		$model = JModelLegacy::getInstance('Products', 'ProductsModel', array('ignore_request' => true));
		$products = $model->getItems();

		return $products;
	}
}
