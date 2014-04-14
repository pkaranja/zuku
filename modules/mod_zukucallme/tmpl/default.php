<?php
defined('_JEXEC') or die;
?>
<div class="col-xs-12 grey center small-padding no-margin">
    <span class="fa-stack fa-lg" style="color:#3ca9d4;">
        <i class="fa fa-circle-o fa-stack-2x" style="color:#3ca9d4;"></i>
        <i class="fa fa-exclamation fa-stack-1x" style="color:#3ca9d4;"></i>
    </span>
    <span class="semi-title text-blue">For More Information</span>
    <br />

    <span class="text-green response"><i class="fa fa-exclamation"></i> Your request has been received succesfully.</span>

    <form role="form" method="post" id="callme" >
      <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="Enter your email" data-validation="email" data-validation-error-msg="Please enter a valid E-mail" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Enter your name" data-validation="required" data-validation-error-msg="Please enter your name"  />
      </div>
       <div class="form-group">
        <input type="text" class="form-control" id="number" placeholder="Enter your number" />
      </div>
      <button id="callme" type="submit" class="btn blue text-white pull-right">Call Me <span id="spinner"><i class="fa fa-cog fa-spin"></i></span></button>
    </form>
</div>
<div class="clearfix"></div>
<script>
    
</script>