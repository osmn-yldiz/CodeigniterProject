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
                    <h2>Tamamlanan Projelerimiz</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li>Tamamlanan Projelerimiz</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Portfolio section start ==== -->
    <section class="section-padding gray-brackground" id="portfolio" style="padding-bottom: 120px;">
        <div class="container">
            <div class="portfolio-content">
                <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-container portfolio-masonry portfolio-column-count-4 ">

                    <!-- Single portfolio item -->
                    <?php foreach ($completed_projects as $completed_project) { ?>
                        <div class="portfolio-item cat1 cat3">
                            <div class="portfolio-item-content">
                                <div class="item-thumbnail">
                                    <!-- Change the dummy image -->
                                    <img width="363" height="245"
                                         src="admin/uploads/completed_projects/<?php echo $completed_project->Image; ?>"
                                         alt="<?php echo $completed_project->Name; ?>">
                                </div>
                                <div class="portfolio-description">
                                    <h4>
                                        <a href="completed_projects/detail/<?php echo $completed_project->ID; ?>"><?php echo $completed_project->Name; ?></a>
                                    </h4>

                                    <!-- Change the dummy image -->
                                    <a href="admin/uploads/completed_projects/<?php echo $completed_project->Image; ?>"
                                       class="portfolio-gallery-set"><i
                                                class="fa fa-search-plus"></i></a><a
                                            href="completed_projects/detail/<?php echo $completed_project->ID; ?>"><i
                                                class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
    <!-- ==== Protfolio section end ==== -->

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>