<?php $this->load->view("top-header"); ?>

    <!-- ==== Preloader start ==== -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- ==== Preloader end ==== -->

<?php $this->load->view("header"); ?>

    <section class="page-title bg-opacity section-padding" style="background: rgba(0,0,0,0) url(admin/uploads/banner/<?php echo $banner->Image; ?>);
            background-clip: initial;
            background-color: rgba(255,255,255,0);
            background-origin: initial;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            z-index: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $mission->Title; ?></h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li><?php echo $mission->Title; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- == About Section Start == -->
    <section id="about" class="about section-padding-top" style="padding-bottom: 120px;">
        <div class="container">
            <div class="row">
                <!-- About image -->
                <div class="col-md-6">
                    <a class="img-about">
                        <img width="555" height="375" src="admin/uploads/mission/<?php echo $mission->Image; ?>"
                             alt="<?php echo $mission->Title; ?>" class="">
                    </a>
                </div>
                <div class="col-md-6">
                    <!-- About text-->
                    <div class="about-details">
                        <?php echo $mission->Content; ?>
                    </div>
                    <!-- /About text -->
                </div>
            </div>
        </div>
    </section>
    <!-- == About Section End == -->

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>