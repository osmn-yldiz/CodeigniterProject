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
                    <h2>Sıkça Sorulan Sorular</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li>Sıkça Sorulan Sorular</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="padding-bottom: 120px;">
        <div class="container">
            <div class="row">

                <div class="col-md-7 col-xs-12">
                    <div class="panel-group accordion-s1" id="accordion">

                        <?php foreach ($faq as $faqq) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse<?php echo $faqq->ID; ?>"
                                       aria-expanded="true"><i
                                                class="<?php echo $faqq->Icon; ?>"></i> <?php echo $faqq->Title; ?></a>
                                </div>

                                <div id="collapse<?php echo $faqq->ID; ?>"
                                     class="panel-collapse collapse <?php echo ($faqq->Rank == 0) ? "in" : ""; ?>">
                                    <div class="panel-body">
                                        <p><?php echo $faqq->Content; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="faq-text text-center">
                        <h1>S.S.S</h1>
                        <h5><span>S</span>ıkça <span>S</span>orulan <span>S</span>orular</h5>
                    </div>
                </div>
            </div> <!-- end row -->

        </div>
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>