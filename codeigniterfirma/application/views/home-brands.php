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