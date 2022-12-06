<?php /* ?><section class="section-padding gray-brackground" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Projelerimiz</h2>
                <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
            </div>

            <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">Tümü</button>
                <?php foreach ($projectscategories as $projectscategory) { ?>
                    <button class="btn btn-default filter-button"
                            data-filter="cat_<?php echo $projectscategory->ID; ?>"><?php echo $projectscategory->Name; ?></button>
                <?php } ?>
            </div>
            <br/>

            <div class="portfolio-content">
                <div class=" portfolio portfolio-gutter portfolio-style-2 portfolio-container portfolio-masonry portfolio-column-count-4 ">

                    <?php foreach ($projects as $project) { ?>
                        <div class="portfolio-item cat1 cat3 cat_<?php echo $project->ProjectsCategoriesID; ?> filter">
                            <div class="portfolio-item-content">
                                <div class="item-thumbnail ">
                                    <!-- Change the dummy image -->
                                    <img class="img-rounded img-responsive"
                                         src="admin/uploads/projects/<?php echo $project->Image; ?>">
                                </div>
                                <div class="portfolio-description">
                                    <h4>
                                        <a href="projects/detail/<?php echo $project->ID; ?>"><?php echo $project->Name; ?></a>
                                    </h4>

                                    <!-- Change the dummy image -->
                                    <a href="admin/uploads/going_projects/<?php echo $project->Image; ?>"
                                       class="portfolio-gallery-set"><i
                                                class="fa fa-search-plus"></i></a><a target="_self"
                                                                                     href="projects/detail/<?php echo $project->ID; ?>"><i
                                                class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
</section><?php */ ?>

    <section class="section-padding gray-brackground" id="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>Projelerimiz</h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>
        <div class="portfolio-content">
            <!-- Protfolio navbar -->
            <div class="portfolio-filter-wrap text-center">
                <ul class="portfolio-filter hover-style-one">
                    <li class="active"><a href="#" data-filter="*"> Tümü</a></li>
                    <?php foreach ($projectscategories as $projectscategory) { ?>
                        <li><a href="#"
                               data-filter=".cat_<?php echo $projectscategory->ID; ?>"><?php echo $projectscategory->Name; ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-container portfolio-masonry portfolio-column-count-4">

                <?php foreach ($projects as $project) { ?>
                    <div class="portfolio-item cat_<?php echo $project->ProjectsCategoriesID; ?> filter">
                        <div class="portfolio-item-content">
                            <div class="item-thumbnail ">
                                <!-- Change the dummy image -->
                                <img class="img-rounded img-responsive"
                                     src="admin/uploads/projects/<?php echo $project->Image; ?>">
                            </div>
                            <div class="portfolio-description">
                                <h4>
                                    <a href="projects/detail/<?php echo $project->ID; ?>"><?php echo $project->Name; ?></a>
                                </h4>

                                <!-- Change the dummy image -->
                                <a href="admin/uploads/going_projects/<?php echo $project->Image; ?>"
                                   class="portfolio-gallery-set"><i
                                            class="fa fa-search-plus"></i></a><a target="_self"
                                                                                 href="projects/detail/<?php echo $project->ID; ?>"><i
                                            class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    </section><?php
