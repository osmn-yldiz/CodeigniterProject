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
                    <h2><?php echo $going_project->Name; ?></h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li><a href="going_projects">Devam Eden Projelerimiz</a></li>
                            <li><?php echo $going_project->Name; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="padding-bottom: 120px;">
        <div class="container">
            <div class="row">
                <div role="tabpanel">

                    <!-- Tab panes -->
                    <div class="tab-content padding-60">
                        <div role="tabpanel" class="tab-pane active" id="unlimited">

                            <?php foreach ($goingprojects_images as $goingprojects_image) { ?>
                                <div class="col-md-4">
                                    <div class="image-gallery">
                                        <div class="gallery-item-thumbnail">
                                            <img width="660" height="426"
                                                 src="admin/uploads/goingprojects_images/<?php echo $goingprojects_image->Image; ?>"
                                                 alt="<?php echo $going_project->Name; ?>"
                                                 class="img-responsive">
                                        </div>
                                        <div class="image-des">
                                            <a href="admin/uploads/goingprojects_images/<?php echo $goingprojects_image->Image; ?>"
                                               class="portfolio-gallery-set"><i
                                                        class="fa fa-search-plus"></i></a>
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

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>