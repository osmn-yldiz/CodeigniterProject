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
                    <h2><?php echo $projectscategories->Name; ?></h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li><?php echo $projectscategories->Name; ?></li>
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
                    <?php foreach ($projects as $project) { ?>
                        <div class="portfolio-item cat1 cat3">
                            <div class="portfolio-item-content">
                                <div class="item-thumbnail">
                                    <!-- Change the dummy image -->
                                    <img width="363" height="245"
                                         src="admin/uploads/projects/<?php echo $project->Image; ?>"
                                         alt="<?php echo $project->Name; ?>">
                                </div>
                                <div class="portfolio-description">
                                    <h4>
                                        <a href="projects/detail/<?php echo $project->ID; ?>"><?php echo $project->Name; ?></a>
                                    </h4>

                                    <!-- Change the dummy image -->
                                    <a href="admin/uploads/projects/<?php echo $project->Image; ?>"
                                       class="portfolio-gallery-set"><i
                                                class="fa fa-search-plus"></i></a><a
                                            href="projects/detail/<?php echo $project->ID; ?>"><i
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