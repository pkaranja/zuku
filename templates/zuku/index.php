<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
        <?php
            $app = JFactory::getApplication();
            $doc = JFactory::getDocument();
            $menu = $app->getMenu();
            $component = JRequest::getVar("option");
            $suffixClass = "";

            $language = JRequest::getVar("language", "English");
            $country = JRequest::getVar("country", "Kenya");

            //Stylesheets
            $doc->addStylesheet('templates/' .$this->template. '/css/bootstrap.min.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/style.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/jquery.sidr.dark.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/owl.carousel.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/owl.theme.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/owl.transitions.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/magnific-popup.css');            
            $doc->addStylesheet('templates/' .$this->template. '/css/font-awesome.min.css');

            $doc->_scripts = array();
            unset($this->_script['text/javascript']);
            //Javascript
            $doc->addScript('templates/' .$this->template. '/js/jquery.js');
            $doc->addScript('templates/' .$this->template. '/js/jquery-migrate.min.js');
            $doc->addScript('templates/' .$this->template. '/js/bootstrap.min.js');
            $doc->addScript('templates/' .$this->template. '/js/jquery.sidr.min.js');
            $doc->addScript('templates/' .$this->template. '/js/owl.carousel.min.js');
            $doc->addScript('templates/' .$this->template. '/js/magnific-popup.min.js');
            $doc->addScript('templates/' .$this->template. '/js/script.js');
            $doc->addScript('templates/' .$this->template. '/js/jquery.form-validator.min.js');
            $doc->addScript('templates/' .$this->template. '/js/html5shiv.js');
            $doc->addScript('templates/' .$this->template. '/js/respond.min.js');
            $doc->addScript('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');
        ?>
        <jdoc:include type="head" />
    </head>
    <body role="document">
        
        <!-- Main green Top bar !-->
        <div class="row topbar">
            <div class="container">
              <div class="col-sm-3 hidden-xs pull-left left">
                <ul class="language">
                        <li><a href="#">ENGLISH</a></li>
                        <li><a href="#" class="active">SWAHILI</a></li>
                    </ul>
              </div>
              <div class="col-sm-3 col-xs-6 right no-padding">
                    <span class="fa-stack fa-lg">
                        <a href="https://twitter.com/ZukuOfficial" target="_blank">
                          <i class="fa fa-circle fa-stack-2x" style="color:#FFF;"></i>
                          <i class="fa fa-twitter fa-stack-1x" style="color:#000;"></i>
                        </a>
                    </span>
                     <span class="fa-stack fa-lg">
                        <a href="https://www.facebook.com/ZukuOfficial" target="_blank">
                          <i class="fa fa-circle fa-stack-2x" style="color:#FFF;"></i>
                          <i class="fa fa-facebook fa-stack-1x" style="color:#000;"></i>
                        </a>
                    </span>
                    <span class="fa-stack fa-lg">
                        <a href="https://www.youtube.com/user/zukuzone" target="_blank">
                          <i class="fa fa-circle fa-stack-2x" style="color:#FFF;"></i>
                          <i class="fa fa-youtube fa-stack-1x " style="color:#000;"></i>
                        </a>
                    </span>
                    <span class="fa-stack fa-lg">
                        <a href="https://plus.google.com/u/0/106192928822448482339" target="_blank">
                          <i class="fa fa-circle fa-stack-2x" style="color:#FFF;"></i>
                          <i class="fa fa-google-plus fa-stack-1x " style="color:#000;"></i>
                        </a>
                    </span>
              </div>
              <div class="col-sm-5 col-xs-2 pull-right right no-padding">
                    <ul class="topmenu pull-right no-margin">
                        <li><a href="get-help/my-zuku">My Zuku</a></li>
                    </ul>
              </div>
            </div>
        </div>
        <!-- End Top bar !-->


        <!-- Start Black nav bar !-->
        <div class="row nav-wrap">
            <div class="container">
                <div class="navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" id="mobileMenu" href="#sidr">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="col-sm-3 col-md-3 hidden-xs pull-right">
                            <form class="navbar-form navbar-right">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 hidden-xs ">
                                        <div class="input-group">
                                            <input type="text" class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="brand col-xs-2">
                            <a href="index.php">
                                <img src="templates/zuku/images/logo.png" alt="ZUKU" title="ZUKU" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-12 hidden-xs pull-right">
                            <?php if ($this->countModules('main-menu')) : ?>
                                <jdoc:include type="modules" name="main-menu" style="html5" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End bottom nav bar !-->

        <!-- Start Mobile Side Bar !-->
        <div id="sidr">
            <?php if ($this->countModules('mobile-menu')) : ?>
                <jdoc:include type="modules" name="mobile-menu" style="html5" />
            <?php endif; ?>
        </div>
        <!-- End Mobile Side Bar !-->




        <!-- Start Main Content  !-->
        <div class="container content">
             <div class="row">
                <!-- Start Slider !-->
               <?php if ($this->countModules('hero')) : ?>
                    <div class="col-lg-12 no-padding no-margin">
                        <jdoc:include type="modules" name="hero" style="html5" />
                    </div>
                <?php endif; ?>
                
                <!-- End Slider !-->
                 <!-- Component !-->
                <?php if ($this->countModules('right')) : $cols="8"; else: $cols="12"; endif; ?>
                <div class="col-sm-<?php echo $cols; ?> content-wrap no-margin">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" style="html5" />
                </div>
                <!-- Component !-->

                <!-- Sidebar !-->
                <?php if ($this->countModules('right')) : ?>
                    <div class="col-sm-4 col-xs-12 pull-right right-wrap">
                        <jdoc:include type="modules" name="right" style="html5" />
                    </div>
                <?php endif; ?>
                <!-- Sidebar !-->
            </div>
        </div>
        <!-- End Main Content  !-->

        <!-- Below content modules  !-->
        <div class="container">
            <div class="row">
                <!-- Bottom Left !-->
                <?php if ($this->countModules('bottom-left')) : ?>
                    <div class="col-sm-4 col-xs-12 no-padding no-margin">
                        <jdoc:include type="modules" name="bottom-left" style="html5" />
                    </div>
                <?php endif; ?>
                <!-- Bottom Left !-->

                <!-- Bottom Middle !-->
                <?php if ($this->countModules('bottom-middle')) : ?>
                    <div class="col-sm-4 col-xs-12 no-padding no-margin">
                        <jdoc:include type="modules" name="bottom-middle" style="html5" />
                    </div>
                 <?php endif; ?>
                <!-- Bottom Middle !-->

                 <!-- Bottom Right !-->
                <?php if ($this->countModules('bottom-right')) : ?>
                    <div class="col-sm-4 col-xs-12 no-padding no-margin">
                        <jdoc:include type="modules" name="bottom-right" style="html5" />
                    </div>
                 <?php endif; ?>
                <!-- Bottom Right !-->
            </div>
        </div>
        <!-- End Below Content  !-->


        <!-- Start Footer !-->
            <div class="row footer-wrap">
               <div class="container footer-bar">
                   <?php if ($this->countModules('footer-menu-full-width')) : ?>
                        <jdoc:include type="modules" name="footer-menu-full-width" style="html5" />
                    <?php endif; ?>
               </div>
              <div class="container footer">
                <div class="col-md-6 col-xs-12">
                     <div class="col-sm-6 col-xs-12 center">
                        <?php if ($this->countModules('footer-menu1')) : ?>
                            <jdoc:include type="modules" name="footer-menu1" style="html5" />
                        <?php endif; ?>
                     </div>
                     <div class="col-sm-6 col-xs-12 center">
                        <?php if ($this->countModules('footer-menu2')) : ?>
                            <jdoc:include type="modules" name="footer-menu2" style="html5" />
                        <?php endif; ?>
                     </div>
                  </div>
                  <div class="col-md-6 col-xs-12">
                     <div class="col-sm-6 col-xs-12 center">
                        <?php if ($this->countModules('footer-menu3')) : ?>
                            <jdoc:include type="modules" name="footer-menu3" style="html5" />
                        <?php endif; ?>
                     </div>
                     <div class="col-sm-6 col-xs-12 center">
                        <?php if ($this->countModules('footer-menu4')) : ?>
                            <jdoc:include type="modules" name="footer-menu4" style="html5" />
                        <?php endif; ?>
                     </div>
                  </div>

                </div>
            </div>
        <!-- End Footer !-->
        <jdoc:include type="modules" name="debug" style="html5" />
    </body>
</html>
