<section class="testimonial section-padding-top bg-silver">
    <div class="container">
        <div class="section-title">
            <h2>Görüşleriniz</h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class=" testimonial-slide one-item">
                    <div id="testimonial" class="swiper-wrapper owl-carousel">

                        <?php foreach ($client_comments as $client_comment) { ?>
                            <div class="swiper-slide">
                                <div class="testimonial-item style-4">
                                    <div class="testimonial-thumb">
                                        <!-- image -->
                                        <img src="admin/uploads/client_comments/<?php echo $client_comment->Image; ?>"
                                             alt="<?php echo $client_comment->Name; ?>">
                                    </div>
                                    <div class="review-txt">
                                        <span>“</span>
                                        <?php echo $client_comment->Content; ?>
                                        <span>”</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <h3 class="reviewer-name"> - <?php echo $client_comment->Name; ?></h3>
                                        <h4 class="reviewer-deg"><?php echo $client_comment->Degree; ?></h4>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>