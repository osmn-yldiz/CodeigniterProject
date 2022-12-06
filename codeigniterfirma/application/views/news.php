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
                    <h2>Haberler</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li>Haberler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-main-section section-padding" style="padding-bottom: 120px;">
        <div class="container">
            <div class="row">
                <div class="col col-lg-12">
                    <div class="blog-grids-s2 blog-content-wrapper">
                        <div class="row">

                            <?php foreach ($results as $newss) { ?>
                                <div class="col-md-6 m-b-30">
                                    <div class="grid">
                                        <div class="entry-header">
                                            <img src="admin/uploads/news/<?php echo $newss->Image; ?>"
                                                 alt="<?php echo $newss->Title; ?>" class="img img-responsive">
                                        </div>
                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="fa fa-user"></i> <?php echo $settings->Title; ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar"></i> <?php echo getCurrentDate("d-m-Y H:i:s", $newss->Create_Date); ?>
                                                    </li>
                                                    <!--<li><i class="fa fa-commenting"></i> <a href="#">10 Comments</a>
                                                    </li>-->
                                                </ul>
                                            </div>
                                            <div class="entry-details">
                                                <h3>
                                                    <a href="news/detail/<?php echo $newss->ID; ?>"><?php echo $newss->Title; ?></a>
                                                </h3>
                                                <a href="news/detail/<?php echo $newss->ID; ?>">Daha Fazla Oku <i
                                                            class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="pagi m-t-0 text-center">
                        <!--<ul>
                            <li>
                                <a href="#"><i class="fa fa-long-arrow-left"></i></a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </li>
                        </ul>-->
                        <p class="pagination"><?php echo $links; ?></p>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>