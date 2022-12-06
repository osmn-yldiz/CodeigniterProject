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
                    <h2><?php echo $page->Title; ?></h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li><?php echo $page->Title; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-details-post section-padding" style="padding-bottom: 120px;">
        <div class="container">
            <div class="row">
                <div class="col col-lg-12">
                    <div class="post-content">
                        <div class="entry-body">
                            <?php echo $page->Content; ?>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>