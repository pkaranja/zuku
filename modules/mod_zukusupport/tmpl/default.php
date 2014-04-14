<?php
defined('_JEXEC') or die;
?>
<div class="col-xs-12 col-sm-6 center padding20">
    <span class="text-green response"><i class="fa fa-exclamation"></i> Your request has been received succesfully.</span>

    <form role="form" method="post" id="support" >
     <div class="form-group">
        <input type="text" class="form-control" id="firstname" placeholder="Enter your first name" data-validation="required" data-validation-error-msg="Please enter your first name" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="lastname" placeholder="Enter your last name" data-validation="required" data-validation-error-msg="Please enter your last name" />
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="Enter your email" data-validation="email" data-validation-error-msg="Please enter a valid E-mail" />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="number" placeholder="Enter your phone number" />
      </div>
      <div class="form-group">
        <textarea class="form-control" id="message" placeholder="Enter your message" data-validation="required" data-validation-error-msg="Please enter your request"></textarea>
      </div>
      <button id="supportme" type="submit" class="btn yellow text-yellow pull-right bold">GET SUPPORT <span id="spinner"><i class="fa fa-cog fa-spin"></i></span></button>
    </form>
</div>