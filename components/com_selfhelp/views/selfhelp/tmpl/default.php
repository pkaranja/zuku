<?php
/**
 * @version     1.0.0
 * @package     com_selfhelp
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Ptah Karanja <pkaranja@aimgroup.co.tz> - http://www.aimgroup.co.tz
 */
// no direct access
defined('_JEXEC') or die;
?>
<div class="row">
	<a href="#myzuku" class="myzuku" data-toggle="tab">
		<div class="col-sm-3 center white-border hidden-xs blue">
			<img src="templates/zuku/images/my_zuku.png" title="My Zuku" alt="My Zuku" class="col-xs-12" />
		</div>
	</a>
	<a href="#support" class="support" data-toggle="tab">
		<div class="col-sm-3 center white-border hidden-xs blue">
			<img src="templates/zuku/images/customer_support.png" title="Customer Support" alt="Customer Support" class="col-xs-12" />
		</div>
	</a>
	<a href="#faqs" class="faqs" data-toggle="tab">
		<div class="col-sm-3 center white-border hidden-xs blue">
			<img src="templates/zuku/images/FAQs.png" title="FAQs" alt="FAQs" class="col-xs-12" />
		</div>
	</a>
	<a href="#howtopay" class="howto" data-toggle="tab">
		<div class="col-sm-3 center white-border hidden-xs blue">
			<img src="templates/zuku/images/how_to_pay.png" title="How to Pay your Zuku" alt="How to Pay your Zuku" class="col-xs-12" />
		</div>
	</a>
</div>
<div class="row" style="border-bottom:4px solid #fdc939;">	
	<a href="#myzuku" class="tabs" data-toggle="tab">
		<div class="col-sm-3 col-xs-12 center grey white-border text-blue bold padding10">
			My Zuku
		</div>
	</a>
	<a href="#support" class="tabs" data-toggle="tab">
		<div class="col-sm-3 col-xs-12 center grey white-border text-blue bold padding10">
			Customer Support
		</div>
	</a>
	<a href="#faqs" class="tabs" data-toggle="tab">
		<div class="col-sm-3 col-xs-12 center grey white-border text-blue bold padding10">
			FAQs
		</div>
	</a>
	<a href="#howtopay" class="tabs" data-toggle="tab">
		<div class="col-sm-3 col-xs-12 center grey white-border text-blue bold padding10">
			How to Pay your Zuku
		</div>
	</a>
</div>
<div class="row">
		<div class="tab-content">
		  <div class="tab-pane fade in active" id="myzuku">
		  	<div class="row no-margin no-padding">
		  		<div class="col-sm-8 no-margin no-padding">
		  			<?php
					    $modules = JModuleHelper::getModules('advertisement'); 
					    foreach($modules as $module){
					        echo JModuleHelper::renderModule($module);
					    }
					?>
		  		</div>
		  		<div class="col-sm-4 black text-white">
				 	<span class="semi-title">Login</span>
					<?php
					    $modules = JModuleHelper::getModules('login'); 
					    foreach($modules as $module){
					        echo JModuleHelper::renderModule($module);
					    }
					?>
				</div>
			</div>
		  </div>
		  <div class="tab-pane fade in " id="support">
		  	<div class="col-sm-12 grey center no-margin no-padding">
		  			<?php
					    $modules = JModuleHelper::getModules('support'); 
					    foreach($modules as $module){
					        echo JModuleHelper::renderModule($module);
					    }
					?>
		  	</div>
		  </div>
		  <div class="tab-pane fade in " id="faqs">
		  	FAQS
		  </div>
		  <div class="tab-pane fade in " id="howtopay">
		  	How to pay
		  </div>
		</div>

	
	
</div>