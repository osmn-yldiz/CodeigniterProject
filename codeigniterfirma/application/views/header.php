<!-- Header start -->
<header>
    <div class="hidden-xs hidden-sm nav-top primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="nav-top-access">
                        <!-- Social links -->
                        <ul>
                            <li><i class="fa fa-phone"></i> <a
                                        href="tel:+9<?php echo $settings->Phone; ?>"><?php echo $settings->Phone; ?></a>
                            </li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                        href="mailto:<?php echo $settings->Mail; ?>"><?php echo $settings->Mail; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="nav-top-social">
                        <ul>
                            <?php foreach ($socialmedia as $sm) { ?>
                                <li><a href="<?php echo $sm->Link; ?>"><i class="<?php echo $sm->Icon; ?>"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <!--== change the logo name ==-->
                        <a href="">
                            <img src="admin/uploads/logofavicon/<?php echo $settings->Logo; ?>"
                                 alt="<?php echo $settings->Title; ?>">
                        </a>
                    </div>
                    <!-- Responsive Menu Start  -->
                    <div class="responsive-menu"></div>
                    <!-- Responsive Menu End -->
                </div>
                <div class="col-md-10 col-sm-12">
                    <div class="mainmenu">
                        <nav>
                            <ul id="navigation">
                                <?php
                                foreach ($mainMenuArray as $main_menuu) { ?>
                                    <li class="<?php echo ($this->uri->segment('1') == $main_menuu->Link) ? "current-page-item" : ""; ?>">
                                        <a
                                                href="<?php echo $main_menuu->Link; ?>"><?php echo $main_menuu->Name; ?></a>
                                        <?php if (isset($main_menu_alt[$main_menuu->ID])) { ?>
                                            <ul>

                                                <?php foreach ($main_menu_alt[$main_menuu->ID] as $alt_menuu) { ?>
                                                    <li>
                                                        <a href="<?php echo $alt_menuu->Link; ?>"><?php echo $alt_menuu->Name; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- == Color schemes == -->
<div class="color-schemes">
    <div class="color-handle">
        <i class="fa fa-cogs fa-spin" aria-hidden="true"></i>
    </div>
    <div class="color-plate">
        <h5>Renk Seç</h5>
        <a href="assets/css/colors/defaults-color.css" class="single-color defaults-color">Defaults</a>
        <a href="assets/css/colors/red-color.css" class="single-color red-color">Red</a>
        <a href="assets/css/colors/purple-color.css" class="single-color purple-color">Purple</a>
        <a href="assets/css/colors/sky-color.css" class="single-color sky-color">sky</a>
        <a href="assets/css/colors/green-color.css" class="single-color green-color">Green</a>
        <a href="assets/css/colors/blue-color.css" class="single-color pink-color">Pink</a>
    </div>
</div>
<!-- == /Color schemes == -->
