<!-- == Service Section Start == -->
<section id="service" class="service section-padding-top">
    <div class="container">
        <div class="section-title">
            <h2>Hizmetlerimiz</h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>
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