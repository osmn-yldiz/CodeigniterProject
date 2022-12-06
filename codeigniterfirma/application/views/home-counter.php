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