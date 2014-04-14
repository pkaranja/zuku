<?php
defined('_JEXEC') or die;
?>
<div class="row menubar">
    <div class="container">
      <ul>
        <a href="about-zuku"><li class="col-sm-6 col-xs-12 center">ABOUT US</li></a>
        <li class="col-sm-6 col-xs-12 center active">CONTACT US</li>
      </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h4>Location</h4>
        <div id="map-canvas" style="height:300px;"></div>
    </div>
    
    <div class="col-sm-6">
      <h4>Our Offices</h4>
      <p>Gateway Business Park,</p>
      <p>Block E, next to Parkside Towers,</p>
      <p>Mombasa Road, Nairobi, Kenya</p>
      <p>Tel : 020 3610 000</p>
      <p>Mobile: +254 703 010 000</p> 
    </div> 
    <div class="col-sm-6">
      <h4>Look For Us</h4>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <div class="col-md-6">
              <input type="text" class="form-control" id="firstname" placeholder="First name">
              <br />
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" id="lastname" placeholder="Last name">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
              <input type="email" class="form-control" id="email" placeholder="Email address">
              <br />
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" id="phone" placeholder="Phone number">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12 ">
              <button type="submit" class="btn btn-default pull-right">Send Email</button>
            </div>
          </div>
        </form>
    </div>           
</div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
     var map;
      function initialize() {
        var mapOptions = {
          zoom: 14,
          scrollwheel: false,
          navigationControl: false,
          mapTypeControl: false,
          scaleControl: false,
          draggable: false,
          center: new google.maps.LatLng(-1.325306, 36.848675)
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
</script>
