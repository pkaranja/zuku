<?php
defined('_JEXEC') or die;

global $country;
global $language;
global $currency;

$prodCount = count($products);

if ( $prodCount == 1 ):
	$product = '<div class="full package tzPackage">
	    <div class="infoPanel whiteText">
	        <h1 class="insideHeading">'.$products[0]->name.'</h1>
	        <p class="insideInfo">'.$products[0]->slogan.'</p>
	        <p class="startingText">Starting at</p>
	        <div class="priceHolder">'.$products[0]->starting_price.'<sup>&nbsp;'.$currency.'</sup></div>
	    </div>

	    <div class="infoPanel bottomPos">
	        <center>
	            <img src="'.$products[0]->image.'" class="packageImage" title="'.$products[0]->name.'" alt="'.$products[0]->name.'" />
	        </center>
	        <span class="darkText">'.$products[0]->description.'</span>
	    </div>
	    <a href="products/'.$products[0]->id.'?view=product">
	        <div class="button floatRight halfWidth yellow">GET PACKAGE</div>
	    </a>
	</div>';
else:
	foreach ($products as $product):
		$product = '<div class="package">
            <div class="packageInfo">
                <div class="infoPanel whiteText">
                    <h1 class="insideHeading">'.$product->name.'</h1>
                    <p class="insideInfo">'.$product->slogan.'</p>
                    <p class="startingText">Starting at</p>
                    <div class="priceHolder">'.$product->starting_price.'<sup>&nbsp;'.$currency.'</sup></div>
                </div>
                
                <div class="infoPanel bottomPos">
                    <center>
                        <img src="'.$product->image.'" class="packageImage" title="'.$product->name.'" alt="'.$product->name.'"/>
                    </center>
                    <span class="darkText">'.$product->description.'</span>
                </div>
            </div>
            <a href="products/'.$product->id.'?view=product">
                <div class="button full yellow">GET PACKAGE</div>
            </a>
        </div>';
	endforeach;
endif;
?>

<?php echo $product; ?>
<p class="clear"></p>