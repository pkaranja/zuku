<?php
// no direct access
defined('_JEXEC') or die;

$show = false; 
$count = count($this->items);
$currency = JRequest::getVar("currency", "KSHS");

foreach ($this->items as $item) : 
	$show = true;
    if ( $count == 1 ){
        echo '<div class="col-xs-12 green no-padding">
                <div class="text-white col-xs-12">
                    <h3>'.$item->name.'</h3>'.$item->slogan.'<h3>'.$item->starting_price.'<sup>'.$currency.'</sup></h3>
                </div>
                <div class="grey center col-xs-12 no-padding">
                    <img src="templates/zuku/images/curve.png" class="full-width no-margin no-padding" />
                    <img src="'.$item->image.'" title="'.$item->name.'" alt="'.$item->name.'" class="center product img-responsive" />
                    <div class="left small-padding">'.$item->description.'</div>
                    <a href="'.JRoute::_('index.php?option=com_products&view=product&id=' . (int)$item->id).'" class="btn pull-right yellow"><h3 class="text-yellow no-margin">Get Package</h3></a>
                </div>
            </div>';
    }else{
        echo '<div class="col-sm-6 col-xs-12 green no-padding">
                <div class="text-white col-xs-12">
                    <h3>'.$item->name.'</h3>'.$item->slogan.'<h3>'.$item->starting_price.'<sup>'.$currency.'</sup></h3>
                </div>
                <div class="grey center col-xs-12 no-padding">
                    <img src="templates/zuku/images/curve.png" class="full-width no-margin no-padding" />
                    <img src="'.$item->image.'" title="'.$item->name.'" alt="'.$item->name.'" class="center product img-responsive" />
                    <div class="left small-padding">'.$item->description.'</div>
                    <a href="'.JRoute::_('index.php?option=com_products&view=product&id=' . (int)$item->id).'" class="btn pull-right yellow"><h3 class="text-yellow no-margin">Get Package</h3></a>
                </div>
            </div>';
    }
endforeach;
if (!$show):
    JError::raiseNotice(900, 'We do not have products for your region at the moment! Please check later');
endif;
?>
