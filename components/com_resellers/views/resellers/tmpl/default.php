<?php
/**
 * @version     1.0.0
 * @package     com_resellers
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pittskay@gmail.com> - http://www.aimgroup.co.tz
 */
// no direct access
defined('_JEXEC') or die;
$script = "";
foreach ($this->items as $item) : 
    $description = "<h5>".$item->name."</h5><p>".$item->phone."</p><p>".$item->email."</p>";
    $script .= "var newLat=".$item->latitude.";
              var newLong=".$item->longitude.";

              var marker".$item->id." = new google.maps.Marker({
                position: new google.maps.LatLng(newLat, newLong),
                map: map
              });

              google.maps.event.addListener(marker".$item->id.", 'click', (function(marker".$item->id.") {
                return function() {
                  infowindow.setContent('".$description."');
                  infowindow.open(map, marker".$item->id.");
                }
              })(marker".$item->id."));
              
              markers.push(marker".$item->id.");";
    endforeach;
?>
<div class="page-header">
    <h3>Where to get Zuku</h3>
</div>
<div id="map_canvas" class="col-xs-12" style="height:800px"></div>
<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js"></script>
<script type="text/javascript">
function initialize() {
    var somePlace = new google.maps.LatLng(39.24273082519528, -6.81002461794417);
        var mapOptions = {
         center: somePlace,
          zoom: 2,
          draggable: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      }

    var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    var infowindow = new google.maps.InfoWindow();
    var markers=[];
    
    //Marker One
    <?php echo $script ?>
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    var dragFlag = false;
    var start = 0, end = 0;

    $("#map_canvas").on("touchstart", function(e) {
        dragFlag = true; 
        start = e.originalEvent.touches[0].pageY;
    });

    $("#map_canvas").on("touchend", function(e) {
        dragFlag = false;
    });

    $("#map_canvas").on("touchmove", function(e) {
        if ( !dragFlag ) return;
        end = e.touches[0].pageY;
        window.scrollBy( 0,( start - end ) );
    });


</script>
