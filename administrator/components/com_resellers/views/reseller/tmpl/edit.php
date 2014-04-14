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

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');

// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_resellers/assets/css/resellers.css');
?>
<style>
      #mapcanvas {
        height: 400px;
        margin: 0px;
        padding: 0px
      }
  
  		#jform_description_ifr{
			height: 200px !important;  		
  		}
    </style>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
 <script>
		var map;
		var geocoder = new google.maps.Geocoder();
		var marker;
		var latVar = null;
		var longVar = null;
		var pointerCoordinates;
		var mapOptions;

		function geocodePosition(pos) {
		  geocoder.geocode({
		    latLng: pos
		  }, function(responses) {
		    if (responses && responses.length > 0) {
		      updateMarkerAddress(responses[0].formatted_address);
		    } else {
		      updateMarkerAddress('Cannot determine address at this location.');
		    }
		  });
		}
		
		function updateMarkerStatus(str) {
		  document.getElementById('markerStatus').innerHTML = str;
		}
		
		function updateMarkerPosition(latLng) {
		  document.getElementById('info').innerHTML = [
		    latLng.lat(),
		    latLng.lng()
		  ].join(', ');
		  
		  jQuery("#jform_latitude").val(latLng.lat());
		  jQuery("#jform_longitude").val(latLng.lng());
		}
		
		function updateMarkerAddress(str) {
		  document.getElementById('address').innerHTML = str;
		}

		function initialize() {
				if (jQuery("#jform_latitude").val() == "") {
					if ( jQuery("#jform_country").val() == "Tanzania" ){
						latVar = -6.822921000000000000;
					}else if( jQuery("#jform_country").val() == "Uganda" ){
						latVar = 0.313611100000000000;
					}else{
						latVar = -1.283333300000000000;
					}
				}else{
					latVar = jQuery("#jform_latitude").val();
				}
			
				if (jQuery("#jform_longitude").val() == "") {
					if ( jQuery("#jform_country").val() == "Tanzania" ){
						longVar = 39.269661000000040000;
					}else if( jQuery("#jform_country").val() == "Uganda" ){
						longVar = 32.581111100000044000;
					}else{
						longVar = 36.816666700000040000;
					}
				}else{
					longVar = jQuery("#jform_longitude").val();
				}
			
			  pointerCoordinates = new google.maps.LatLng(latVar, longVar);
		
			  mapOptions = {
			    zoom: 14,
			    center: new google.maps.LatLng(latVar, longVar)
			  };
		  
		  	  map = new google.maps.Map(document.getElementById('mapcanvas'), mapOptions);
			
			  // To add the marker to the map, use the 'map' property
				marker = new google.maps.Marker({
			   	position: pointerCoordinates,
			    	map: map,
			    	draggable:true,
			   	title:"Reseller Location"
				});
				
				 // Update current position info.
  				updateMarkerPosition(pointerCoordinates);
  				geocodePosition(pointerCoordinates);

				
				google.maps.event.addListener(marker, 'drag', function() {
    				updateMarkerPosition(marker.getPosition());
  				});
 
  				google.maps.event.addListener(marker, 'dragend', function() {
    				geocodePosition(marker.getPosition());
  				});

				
				var hotellat = marker.getPosition().lat();
				var hotellng = marker.getPosition().lng();		
			}
		
		jQuery(document).ready(function(){
			jQuery("#jform_country").change(function(){
				if ( jQuery("#jform_country").val() == "Tanzania" ){
					longVar = 39.269661000000040000;
					latVar = -6.822921000000000000;
				}else if( jQuery("#jform_country").val() == "Uganda" ){
					longVar = 32.581111100000044000;
					latVar = 0.313611100000000000;
				}else{
					longVar = 36.816666700000040000;
					latVar = -1.283333300000000000;
				}

				marker.setPosition( new google.maps.LatLng( latVar, longVar ) );
   				map.panTo( new google.maps.LatLng( latVar, longVar ) );

   				pointerCoordinates = new google.maps.LatLng(latVar, longVar);

   				updateMarkerPosition(pointerCoordinates);
  				geocodePosition(pointerCoordinates);

			});
		});
		google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script type="text/javascript">
    js = jQuery.noConflict();
    js(document).ready(function(){
        
    });
    
    Joomla.submitbutton = function(task)
    {
        if(task == 'reseller.cancel'){
            Joomla.submitform(task, document.getElementById('reseller-form'));
        }
        else{
            
            if (task != 'reseller.cancel' && document.formvalidator.isValid(document.id('reseller-form'))) {
                
                Joomla.submitform(task, document.getElementById('reseller-form'));
            }
            else {
                alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED')); ?>');
            }
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_resellers&layout=edit&id=' . (int) $this->item->id); ?>" method="post" enctype="multipart/form-data" name="adminForm" id="reseller-form" class="form-validate">
    <div class="row-fluid">
        <div class="span10 form-horizontal">
            <fieldset class="adminform">

            
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('name'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('name'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('phone'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('phone'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('email'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('email'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('country'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('country'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('longitude'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('longitude'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('latitude'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('latitude'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label">Location :</div>
				<div class="controls">
					<div id="mapcanvas"></div>
					 <div id="infoPanel">
					    <b>Current position:</b>
					    <div id="info"></div>
					    <b>Closest matching address:</b>
					    <div id="address"></div>
					  </div>
				</div>
			</div>

			<div style="display:none;">
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('id'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('id'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('state'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('state'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('created_by'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('created_by'); ?></div>
				</div>
			</div>

            </fieldset>
        </div>

        

        <input type="hidden" name="task" value="" />
        <?php echo JHtml::_('form.token'); ?>

    </div>
</form>