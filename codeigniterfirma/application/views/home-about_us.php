<!-- == About Section Start == -->
<section id="about" class="about section-padding-top">
    <div class="container">
        <div class="section-title">
            <h2><?php echo $about_us->Title; ?></h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>
        <div class="row">
            <!-- About image -->
            <div class="col-md-6">
                <a class="img-about">
                    <img width="555" height="375" src="admin/uploads/about_us/<?php echo $about_us->Image; ?>"
                         alt="<?php echo $about_us->Title; ?>" class="">
                </a>
            </div>
            <div class="col-md-6">
                <!-- About text-->
                <div class="about-details">
                    <?php
                    $text = $about_us->Content;
                    $text = trim($text);
                    $short_text = substr($text, '0', '196') . "...";

                    echo $short_text;
                    ?>
                    <br> <br>
                    <a class="btn btn-default btn-style hvr-shutter-out-vertical"
                       href="about_us"><?php echo $about_us->Title; ?></a>
                </div>
                <!-- /About text -->
            </div>
        </div>
    </div>
</section>
<!-- == About Section End == -->