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
                    <h2>İletişim</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li>İletişim</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info text-center">
                        <span><i class="fa fa-map-marker"></i></span>
                        <h4>Adresimiz</h4>
                        <h6><?php echo $settings->Adress; ?></h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info text-center">
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <h4>Telefon</h4>
                        <h6><a href="tel:+9<?php echo $settings->Phone; ?>"><?php echo $settings->Phone; ?></a>
                        </h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info text-center">
                        <span><i class="fa fa-map-marker"></i></span>
                        <h4>Email</h4>
                        <h6><a href="mailto:<?php echo $settings->Mail; ?>"><?php echo $settings->Mail; ?></a></h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info text-center">
                        <span><i class="fa fa-globe" aria-hidden="true"></i></span>
                        <h4>Websitemiz</h4>
                        <h6><?php echo base_url(); ?></h6>
                    </div>
                </div>
            </div>
            <div class="row padding-60">
                <div class="col-md-7 contact-team">
                    <h3 class="text-center">Bizimle <span>İletişime Geç</span></h3>
                    <div class="contact-send-message">
                        <form class="contact-form row" action="contact/insert" method="post">
                            <div class="col col-sm-6">
                                <input type="text" class="form-control" name="Name" placeholder="İsim*">
                            </div>
                            <div class="col col-sm-6">
                                <input type="email" class="form-control" name="Email" placeholder="E-mail*">
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" class="form-control" name="Subject" placeholder="Konu*">
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" class="form-control" name="Phone" placeholder="Telefon*">
                            </div>
                            <div class="col col-sm-12">
                                <textarea class="form-control" name="Content"
                                          placeholder="Mesaj*"></textarea>
                            </div>
                            <div class="col col-sm-12 text-center">
                                <button type="submit" class="btn btn-default btn-style hvr-shutter-out-vertical">Gönder
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="map" class="thumbnail"><?php echo $settings->Map; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>