<!-- == Home Section Start == -->
<section id="home">
    <!-- silider start -->
    <div class="main-slider-1 white-clr-all">
        <div id="carosel-mr-1" class="carousel home-carousel-2 slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach ($sliders as $slider) { ?>
                <li data-target="#carosel-mr-1" data-slide-to="<?php echo $slider->Rank; ?>" class="<?php echo ($slider->Rank == 0) ? "active" : ""; ?>"></li>
                <?php } ?>
            </ol>
            <div class="carousel-inner main-sld" role="listbox">

                <?php foreach ($sliders as $slider) { ?>
                <div class="item <?php echo ($slider->Rank == 0) ? "active" : ""; ?> main-sld">
                    <!-- change slider image -->
                    <div class="slider-bg" style="background-image: url('assets/image/slider/dummy-slider.jpg');"></div>
                    <div class="slider-cell">
                        <div class="slider-ver">
                            <div class="slider-con text-center">
                                <h1>Grow Your <span>Business</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum expedita maxime culpa.</p>
                                <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="#">View Demo</a>
                                <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="#">Find More</a>
                            </div>
                            <!-- end slider content -->
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- end single item -->
            </div>
        </div>
    </div>
    <!-- end slider bar -->
    <!--slider section start-->
</section>
<!-- == Home Section End == -->

