<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
        <?php
            global $country;
            global $language;
            global $currency;

            $country = JRequest::getVar("country","Kenya");
            $language = JRequest::getVar("language","English");
            $currency = JRequest::getVar("currency","KSH");

            $app = JFactory::getApplication();
            $doc = JFactory::getDocument();
            $menu = $app->getMenu();
            $component = JRequest::getVar("option");
            $suffixClass = "";

            //Stylesheets
            $doc->addStylesheet('templates/' .$this->template. '/css/normalize.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/font-awesome.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/camera.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/popup.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/jquery.mCustomScrollbar.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/style.css');
            $doc->addStylesheet('templates/' .$this->template. '/css/responsive.css');

            //Javascript
            if ($menu->getActive() != $menu->getDefault()):
                $doc->addScript('media/jui/js/jquery.min.js');
                $doc->addScript('media/jui/js/jquery-noconflict.js');
                $doc->addScript('media/jui/js/jquery-migrate.min.js');
                $doc->addScript('media/system/js/tabs-state.js');
                $doc->addScript('media/system/js/caption.js');
            endif;
            $doc->addScript('templates/' .$this->template. '/js/functions.js');
            $doc->addScript('templates/' .$this->template. '/js/jquery.mobile.customized.min.js');
            $doc->addScript('templates/' .$this->template. '/js/camera.min.js');
            $doc->addScript('templates/' .$this->template. '/js/jquery.easing.1.3.js');
            $doc->addScript('templates/' .$this->template. '/js/jquery.mCustomScrollbar.concat.min.js');
            $doc->addScript('templates/' .$this->template. '/js/popup.js');
            $doc->addScript('templates/' .$this->template. '/js/common.js');
        ?>
        <jdoc:include type="head" />
        <!-- IE6 "fix" for the close png image -->
        <!--[if lt IE 7]>
        <link type='text/css' href='templates/zuku/css/IE-fix.css' rel='stylesheet' media='screen' />
        <link type='text/css' href='templates/zuku/css/popup-ie.css' rel='stylesheet' media='screen' />
        <![endif]-->
    </head>
<body>
    <div class="full" id="siteHolder">
        <div class="full darkGreen" id="topBar">
            <div class="contentHolder">
                <div id="languageToggle">
                    <a href="#">
                        <span class="lang blackText">ENGLISH</span>
                    </a>
                    . 
                    <a href="#">
                        <span class="lang whiteText">SWAHILI</span>
                    </a>
                </div>
                <div id="countryToggle">
                    <a href="#">
                        <div class="flag">
                            <center>
                                <img src="templates/zuku/images/site-images/uganda.jpg" alt="Uganda" title="Uganda" />
                            </center>
                        </div>
                    </a>

                    <a href="#">
                        <div class="flag">
                            <center>
                                <img src="templates/zuku/images/site-images/kenya.jpg" alt="Kenya" title="Kenya" />
                            </center>
                        </div>
                    </a>

                    <a href="#">
                        <div class="flag strongBlack">
                            <center>
                                <img src="templates/zuku/images/site-images/tanzania.jpg" alt="Tanzania" title="Tanzania" />
                            </center>
                        </div>
                    </a>

                </div>

                <div id="topUserOption">
                    <div id="myZukuButton" class="userOption blackText open-popup-link"><p>My ZUKU</p></div>
                    <a href="#">
                        <div id="registerTop" class="userOption blackText"><p>Register</p></div>
                    </a>
                </div>
                
            </div>      
            <p class="clear"></p>
        </div>

        <div class="full strongBlack" id="menuAndLogo">
            <div class="contentHolder">
                <a href="index.php">
                    <img class="logo" id="topLogo" src="templates/zuku/images/site-images/logo.png" alt="ZUKU" title="ZUKU" />
                </a>
                
                <div id="searchAndMenu" class="floatRight whiteText">
                    <div id="mobileMenuToggleAndSearch" class="floatRight">
                        <img src="images/site-images/toggle-menu.png" alt="toggleMenu" id="mobileMenuToggle">
                        <img src="images/site-images/search-icon-mobile.png" alt="search zuku" id="searchToggleMobile">
                        <br/>
                        <p class="clear"></p>
                        <div id="mobileSearch">
                            <form name="" method="get" action="#">
                                <input type="text" name="q" class="searchField noBorder full" placeholder="Search">
                            </form>
                        </div>
                    
                    </div>
                    <div class="floatRight blackText" id="desktopSearch">
                        <form name="" method="get" action="#">
                            <table>
                                <tr>
                                    <td>
                                        <?php if ($this->countModules('search')) : ?>
                                            <jdoc:include type="modules" name="search" style="xhtml" />
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <p class="clear"></p>
                    <div class="full" id="desktopMenu">
                       

                        <div class="menuOption boldText">Satellite</div>
                        <div class="menuOption boldText">Fiber</div>
                        <div class="menuOption boldText">Entertainment</div>
                        <div class="menuOption boldText">Get Help</div>
                        <div class="menuOption boldText">About Zuku</div>
                        <p class="clear"></p>
                        <div class="full strongBlack" id="secondLevel">
                            <div class="menuOption boldText">
                                <a href="#"><p class="whiteText">Zuku Powa</p></a>
                                <a href="#"><p class="whiteText">Zuku Classic</p></a>
                                <a href="#"><p class="whiteText">Zuku Premium</p></a>
                            </div>
                            
                            <div class="menuOption boldText" id="fiberDrop">
                                <a href="#"><p class="whiteText">R1</p></a>
                                <a href="#"><p class="whiteText">R10</p></a>
                                <a href="#"><p class="whiteText">R20</p></a>
                            </div>
                            
                            <div class="menuOption boldText" id="entertainmentDrop">
                                <a href="#"><p class="whiteText">TV Guide</p></a>
                                <a href="#"><p class="whiteText">Zuku BUZZ</p></a>
                                <a href="#"><p class="whiteText">Programmes</p></a>
                                <a href="#"><p class="whiteText">Channels</p></a>
                            </div>

                            <div class="menuOption boldText" id="getHelpDrop">
                                <a href="#"><p class="whiteText">My Zuku</p></a>
                                <a href="#"><p class="whiteText">Customer Support</p></a>
                                <a href="#"><p class="whiteText">How to pay for ZUKU</p></a>
                            </div>

                            <div class="menuOption boldText">
                                <a href="#"><p class="whiteText">Office Location</p></a>
                                <a href="#"><p class="whiteText">Contact Info</p></a>
                                <a href="#"><p class="whiteText">Zuku Technology</p></a>
                            </div>
                        </div>
                        <p class="clear"></p>
                    </div>
                </div>
                <p class="clear"></p>
            </div>
            <p class="clear"></p>
        </div>
        <div class="contentHolder" id="mainContent">
             <!--Content!-->
            <?php
                if ($menu->getActive() != $menu->getDefault()):
                    if ( $component != "com_buzz" AND $component != "com_products"  ):
                        $suffixClass = "mainContentHolder";
                    endif;
                    
                    echo '<div class="white topGap10 '.$suffixClass.'">
                            <jdoc:include type="component" type="html5" />
                        </div>';
                endif;
            ?>
            
            <?php if ($this->countModules('hero')) : ?>
                <div id="slider" class="full">
                    <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                        <jdoc:include type="modules" name="hero" />            
                    </div>
                    <?php if ($this->countModules('selfhelp-desktop')) : ?>
                        <jdoc:include type="modules" name="selfhelp-desktop" />
                    <?php endif; ?>                
                    <?php if ($this->countModules('selfhelp-mobile')) : ?>
                        <jdoc:include type="modules" name="selfhelp-mobile" />
                    <?php endif; ?>    
                </div>
            <?php endif; ?> 
           

            <div class="full mainwrapper" id="homePackagesFull">
                    <!-- Right !-->
                    <?php if ($this->countModules('right')) : ?>
                        <div class="package rtl" id="formHome">
                            <div class="information">
                                <jdoc:include type="modules" name="right" />
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Left !-->
                    <?php if ($this->countModules('products')) : ?>
                        <div class="packageHolder lftFloat">
                            <jdoc:include type="modules" name="products" />
                        </div>
                    <?php endif; ?>
            </div>
            
            <div class="full">
                <p class="clear">&nbsp;</p>
                <?php if ($this->countModules('bottom-left')) : ?>
                    <jdoc:include type="modules" name="bottom-left" style="html5" />
                <?php endif; ?>

                <?php if ($this->countModules('bottom-middle')) : ?>
                    <jdoc:include type="modules" name="bottom-middle" style="html5" />
                <?php endif; ?>

                <?php if ($this->countModules('bottom-right')) : ?>
                    <jdoc:include type="modules" name="bottom-right" style="html5" />
                <?php endif; ?>
            </div>
        </div>
        <p class="clear"></p>
        <div class="full darkGreen" id="bottomGreen"></div>
        <p class="clear"></p>
        <footer>
            <div class="full lightBlack">
                <div class="contentHolder whiteText" id="bottomMenu">
                    <p class="clear"></p>
                        <?php if ($this->countModules('footer-menu-full-width')) : ?>
                            <jdoc:include type="modules" name="footer-menu-full-width" style="html5" />
                        <?php endif; ?>
                    <p class="clear"></p>
                    <br/>
                    <div id="quickLinksHolder">
                        <div class="footerQuickLinks">
                            <a href="#"><p class="whiteText"></p></a>
                        </div>
                        <?php if ($this->countModules('footer-menu1')) : ?>
                            <div class="footerQuickLinks">
                                <jdoc:include type="modules" name="footer-menu1" style="html5" />
                            </div>
                        <?php endif; ?>
                        <?php if ($this->countModules('footer-menu2')) : ?>
                            <div class="footerQuickLinks">
                                <jdoc:include type="modules" name="footer-menu2" style="html5" />
                            </div>
                        <?php endif; ?>
                        <?php if ($this->countModules('footer-menu3')) : ?>
                            <div class="footerQuickLinks">
                                <jdoc:include type="modules" name="footer-menu3" style="html5" />
                            </div>
                        <?php endif; ?>
                        <?php if ($this->countModules('footer-menu4')) : ?>
                            <div class="footerQuickLinks">
                                <jdoc:include type="modules" name="footer-menu4" style="html5" />
                            </div>
                        <?php endif; ?>

                        
                    </div>
                    <p class="clear"><br/><br/></p>
                </div>
                <br/>
            </div>
            <p class="clear">&nbsp;</p>
            <div class="full grey">
                <p>&nbsp;</p>
                <span id="copyRightText" class="boldText">
                    Copyright &copy; <?php echo date("Y"); ?> Zuku Amazing. All Rights Reserved.
                    <?php if ($this->countModules('copyright')) : ?>
                            <jdoc:include type="modules" name="copyright" />
                    <?php endif; ?>
                </span>
                <p>&nbsp;</p>
            </div>
        </footer>
        <!-- POP UPS -->
            <div id="myZukuTop" class="noDisplay">
                <form name="" method="post" action="">
                    <input type="text" name="user-name" placeholder="User Name" class="popUpField">
                    <input type="password" name="user-password" placeholder="Password" class="popUpField">
                    <p>&nbsp;</p>
                    <p class="whiteText">
                        <a href="#">
                            <span class="boldText whiteText">Register</span>
                        </a>
                        |
                        <a href="#">
                            <span class="whiteText">Need Help</span>
                        </a>
                    </p>
                    <br/>
                    <input type="submit" class="button yellow noBorder" value="SIGN IN">
                </form>
            </div>
        <!-- -->
    </div>
    <div id="mobileMenu" class=".strongBlack">
        <h4 class="whiteText">Satellite</h4>
        <div class="mobileMenuHolder">
            <a href="#">
                    <p class="whiteText">Zuku Powa</p>
            </a>
            <a href="#">
                    <p class="whiteText">Zuku Classic</p>
            </a>
            <a href="#">
                    <p class="whiteText">Zuku Premium</p>
            </a>
        </div>

        <h4 class="whiteText">Fiber</h4>
        <div class="mobileMenuHolder">
            <a href="#">
                    <p class="whiteText">R1</p>
            </a>
            <a href="#">
                    <p class="whiteText">R10</p>
            </a>
            <a href="#">
                    <p class="whiteText">R20</p>
            </a>
        </div>

        <h4 class="whiteText">Entertainment</h4>
        <div class="mobileMenuHolder">
            <a href="#">
                    <p class="whiteText">TV Guide</p>
            </a>
            <a href="#">
                    <p class="whiteText">Zuku Buzz</p>
            </a>
            <a href="#">
                    <p class="whiteText">Programs</p>
            </a>
            <a href="#">
                    <p class="whiteText">Channels</p>
            </a>
        </div>
        
        <a href="#">
            <h4 class="whiteText">Get Help</h4>
        </a>
        
        <a href="#">
            <h4 class="whiteText">About Zuku</h4>
        </a>

    </div>
</body>
</html>
