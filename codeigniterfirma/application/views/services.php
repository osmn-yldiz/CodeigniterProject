<?php $this->load->view("top-header"); ?>

    <!-- ==== Preloader start ==== -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- ==== Preloader end ==== -->

<?php $this->load->view("header"); ?>

    <section class="page-title bg-opacity section-padding"
             style="background: rgba(0,0,0,0) url(admin/uploads/banner/<?php echo $banner->Image; ?>);
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
                    <h2>Hizmetlerimiz</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li>Hizmetlerimiz</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- == Service Section Start == -->
    <section id="service" class="service section-padding-top" style="padding-bottom: 120px;">
        <div class="container">
            <div class="row content service-grid-s1">

                <?php foreach ($services as $service) { ?>
                    <!-- single serivce-->
                    <div class="col-md-4 col-sm-6">
                        <div class="grid">
                            <div class="icon">
                                <i class="<?php echo $service->Icon; ?>"></i>
                            </div>
                            <div class="details">
                                <h3><a href="javascript:void(0);"><?php echo $service->Title; ?></a></h3>
                                <?php echo $service->Content; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- == Service Section End == -->

    <!-- == Counter Section Start == -->
    <section id="counter" class="bg-opacity section-padding-60"
             style="background: rgba(0,0,0,0) url(admin/uploads/banner/<?php echo $banner->Image; ?>);
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

                <!-- Counter item-->
                <?php foreach ($counter as $count) { ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter-item style-2">
                            <div class="counter-item-inner">
                                <i class="<?php echo $count->Icon; ?>" aria-hidden="true"></i>
                                <h4><?php echo $count->Title; ?></h4>
                                <span class="counter"><?php echo $count->Count; ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- == Counter Section End == -->

    <section class="clients bg-silver">
        <div class="container ptb-40 ">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-clients-6" class="owl-carousel clients-logo text-center">
                        <?php foreach ($brands as $brand) { ?>
                            <div class="item">
                                <a href="<?php echo $brand->Link; ?>"><img
                                            alt="<?php echo $brand->Name; ?>"
                                            src="admin/uploads/brands/<?php echo $brand->Image; ?>"
                                            title="<?php echo $brand->Name; ?>"></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>