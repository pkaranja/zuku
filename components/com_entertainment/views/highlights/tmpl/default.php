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
$i=0;
?>
<link rel="stylesheet" href="templates/zuku/css/entertainment.css" type="text/css">
<script type="text/javascript" src="templates/zuku/js/slider.js"></script>
<!-- Start slider -->
<div class="row">
    <div class="col-xs-12">
        <div id="entertainment">
            <div class="ws_images">
                <ul>
                <?php 
                foreach ($this->items as $slide):
                    echo '<li><a href="#"><img src="'.$slide->image.'" alt="'.$slide->title.': '.$slide->title.'" title="'.$slide->title.'" id="wows1_'.$i.'"/></a>'.$slide->title.'</li>';
                    $i++;
                endforeach;
                ?>
                </ul>
            </div>
            <div class="ws_thumbs hidden-xs" style="overflow: hidden;">
                <div style="top: 0px; left: 0px;">
                    <?php 
                        foreach ($this->items as $slide):
                            echo '<a href="#" title="'.$slide->title.'"><img src="'.$slide->thumbnail.'" alt="'.$slide->title.'"></a>';
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row no-margin">
    <a href="entertainment/tv-guide"><div class="col-sm-4 yellow text-yellow center"><h3>TV GUIDE</h3></div></a>
    <a href="entertainment/zuku-buzz"><div class="col-sm-4 yellow text-yellow center"><h3>ZUKU BUZZ</h3></div></a>
    <a href="entertainment/programmes"><div class="col-sm-4 yellow text-yellow center"><h3>PROGRAMMES</h3></div></a>
</div>
<script type="text/javascript">
$('#entertainment').wowSlider({
        effect:"seven", 
        prev:"<i class='fa fa-angle-left fa-5x' style='color:white'></i>", 
        next:"<i class='fa fa-angle-right fa-5x' style='color:white'></i>", 
        duration: 20 * 100,
        delay: 20 * 100,
        width: 960,
        height: 360,
        autoPlay: true,
        stopOnHover: false,
        loop: true,
        bullets: 0,
        caption: true,
        captionEffect: "move",
        controls: false,
        onBeforeStep: 0,
        images: 0
    });
</script>

<!-- End slider -->