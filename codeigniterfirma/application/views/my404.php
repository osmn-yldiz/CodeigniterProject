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
                    <h2>Sayfa Bulunamadı</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Anasayfa</a></li>
                            <li>Sayfa Bulunamadı</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="error-page-content">
                        <h3>Aradığınız sayfa mevcut değil.</h3>
                        <p>Aradığınızı bulamadıysanız tekrar aramayı deneyin
                            ya da aradığınız şey sayfa yöneticileri tarafından silinmiş olabilir.</p>
                        <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="">Anasayfaya Geri Dön</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="error-text text-center">
                        <h2>404</h2>
                        <span>Opps <i class="fa fa-meh-o" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view("footer"); ?>

<?php $this->load->view("bottom-footer"); ?>