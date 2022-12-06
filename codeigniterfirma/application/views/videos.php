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
                    <h2>Videolar</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li>Videolar</li>
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

                            <?php foreach ($videos as $video) { ?>
                                <div class="col-md-4">
                                    <div class="image-gallery">
                                        <div class="gallery-item-thumbnail">
                                            <iframe src="https://www.youtube.com/embed/<?php echo $video->Link; ?>"
                                                    width="100%" height="250" allowfullscreen></iframe>
                                        </div>
                                        <div class="image-des">
                                            <a href="javascript:void(0);"
                                               data-izimodal-open="#modal-youtube-<?php echo $video->ID; ?>"><i
                                                        class="fa fa-video-camera"></i></a>
                                            <div id="modal-youtube-<?php echo $video->ID; ?>" class="modais"
                                                 data-izimodal-transitionin="fadeInDown"
                                                 data-izimodal-title="<?php echo $video->Title; ?>"
                                                 data-izimodal-iframeURL="https://www.youtube.com/embed/<?php echo $video->Link; ?>"></div>
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