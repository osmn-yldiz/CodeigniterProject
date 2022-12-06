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
                    <h2><?php echo $news->Title; ?></h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li><a href="news">Haberler</a></li>
                            <li><?php echo $news->Title; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-details-post section-padding" style="padding-bottom: 120px;">
        <div class="container">
            <div class="row">
                <div class="col col-lg-9">
                    <div class="post-content">
                        <div class="blog-grids-s2 blog-content-wrapper">
                            <div class="entry-media">
                                <img src="admin/uploads/news/<?php echo $news->Image; ?>"
                                     alt="<?php echo $news->Title; ?>" class="img img-responsive">
                            </div>
                            <div class="entry-header">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-user"></i> <?php echo $settings->Title; ?></li>
                                        <li><i class="fa fa-calendar"></i> <?php echo getCurrentDate("d-m-Y H:i:s", $news->Create_Date); ?></li>
                                    </ul>
                                </div>
                                <div class="entry-title">
                                    <h2><?php echo $news->Title; ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="entry-body">
                            <?php echo $news->Content; ?>
                        </div>
                        <div class="tag-social-share">
                            <div class="tag">
                                <b style="font-size: 20px;">Etiketler: </b>
                                <?php $seo = explode(",", $news->Seo_Tags);
                                foreach ($seo as $seoo) { ?>
                                    <a href="javascript:void(0);">#<?php echo $seoo; ?></a>
                                <?php } ?>
                            </div>
                            <div class="social-share">
                                <span>Paylaş:</span>
                                <ul class="social-links">
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("news/detail/$news->ID"); ?>"
                                           target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <li>
                                        <a href="http://www.twitter.com/share?url=<?php echo base_url("news/detail/$news->ID"); ?>"
                                           target="_blank"><i
                                                    class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-3">
                    <div class="blog-sidebar">
                        <div class="widget recent-posts-widget">
                            <h3>Son Yazılar</h3>
                            <?php foreach ($news_limit as $neew) { ?>
                                <div class="post">
                                    <img width="230" src="admin/uploads/news/<?php echo $neew->Image; ?>"
                                         alt="<?php echo $neew->Title; ?>">
                                    <h4><a href="news/detail/<?php echo $neew->ID; ?>"><?php echo $neew->Title; ?></a>
                                    </h4>
                                    <span class="date"><?php echo getCurrentDate("d-m-Y H:i:s", $neew->Create_Date); ?></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>