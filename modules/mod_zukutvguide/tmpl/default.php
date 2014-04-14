<?php
defined('_JEXEC') or die;
?>
<div class="col-xs-12 no-padding no-margin blue">
    <span class="col-xs-12 semi-title text-white">TV Guide</span>
    <a href="shows/<?php echo $params->get("featured_tvshow"); ?>" class="col-xs-12 white no-margin no-padding">
        <img src="<?php echo $params->get("featured_image"); ?>" alt="advert" class="col-xs-12 no-margin no-padding">
    </a>
    <div class="col-xs-12 center" style="padding-bottom:10px;">
        <form role="form" method="post">
            <div class="col-xs-8 no-padding">
                <div class="form-group">
                    <select name="product" class="col-xs-12 small-margin">
                        <option value="0">Select Product</option>
                        <?php
                            foreach ($products as $product):
                                echo '<option value="'.$product->id.'">'.$product->name.'</option>';
                            endforeach;
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="package" class="col-xs-12 small-margin">
                        <option value="0">Select Package</option>
                        <?php
                            foreach ($packages as $package):
                                echo '<option value="'.$package->id.'">'.$package->packagename.'</option>';
                            endforeach;
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-4 no-padding">
                <button type="submit" class="btn small-margin btn-lg text-yellow yellow">Go <i class="fa fa-exclamation"></i></button>
            </div>
        </form>
    </div>
</div>
<div class="clearfix vertical-spacer"></div>