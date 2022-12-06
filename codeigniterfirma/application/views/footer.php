<!-- ==== footer section start ==== -->
<footer class="footer-bg section-padding-top footer">
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="f-widget">
                        <a href="">
                            <img width="263" src="admin/uploads/logofavicon/<?php echo $settings->Logo; ?>"
                                 alt="<?php echo $settings->Title; ?>">
                        </a>
                        <div class="m-t-30"><?php
                            $text = $about_us->Content;
                            $text = trim($text);
                            $short_text = substr($text, '0', '196');

                            echo $short_text;
                            ?></div>
                        <ul class="f-address">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $settings->Adress; ?>
                            </li>
                            <li><i class="fa fa-phone"></i> <a
                                        href="tel:+9<?php echo $settings->Phone; ?>"><?php echo $settings->Phone; ?></a>
                            </li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                        href="mailto:<?php echo $settings->Mail; ?>"><?php echo $settings->Mail; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="f-widget">
                        <div class="f-widget-title">
                            <h4>Hızlı Linkler</h4>
                        </div>
                        <ul class="useful-links">
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                        href="">Anasayfa</a>
                            </li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                        href="about_us">Hakkımızda</a>
                            </li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                        href="albums">Albümler</a>
                            </li>
                            <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                        href="contact">İletişim</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="f-widget">
                        <div class="f-widget-title">
                            <h4>Sayfalar</h4>
                        </div>
                        <ul class="useful-links">
                            <?php foreach ($pages as $page) { ?>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a
                                            href="home/page/<?php echo $page->ID; ?>"><?php echo $page->Title; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-widget">
                        <div class="f-widget-title">
                            <h4>Projelerimiz</h4>
                        </div>
                        <ul class="instagram-widget">
                            <?php foreach ($projects as $project) { ?>
                                <li><a href="projects/detail/<?php echo $project->ID; ?>"><img
                                                width="80" height="54"
                                                src="admin/uploads/projects/<?php echo $project->Image; ?>"
                                                alt="<?php echo $project->Name; ?>"
                                                class="img-responsive"></a></li>
                            <?php } ?>
                            <?php /* ?>
                            <?php foreach ($completed_projects as $completed_project) { ?>
                                <li><a href="completed_projects/detail/<?php echo $completed_project->ID; ?>"><img
                                                width="80" height="54"
                                                src="admin/uploads/completed_projects/<?php echo $completed_project->Image; ?>"
                                                alt="<?php echo $completed_project->Name; ?>"
                                                class="img-responsive"></a></li>
                            <?php } ?>
                            <?php foreach ($going_projects as $going_project) { ?>
                                <li><a href="going_projects/detail/<?php echo $going_project->ID; ?>"><img
                                                width="80" height="54"
                                                src="admin/uploads/going_projects/<?php echo $going_project->Image; ?>"
                                                alt="<?php echo $going_project->Name; ?>"
                                                class="img-responsive"></a></li>
                            <?php } ?>
                            <?php */ ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="f-widget">
                        <div class="f-widget-title">
                            <h4>Haberdar Ol!</h4>
                        </div>
                        <p>Kampanya ve aktivitelerden haberdar olmak için mailini gönder.</p>
                        <div class="newsletter">
                            <form action="subscribers/insert" method="post">
                                <div class="input-group">

                                    <input type="email" class="form-control" name="Email" placeholder="E-mail adresi"
                                           aria-label="Search for..." autocomplete="off">
                                    <span class="input-group-btn">
                                        <button class="btn newsletter-btn" type="submit"><i
                                                    class="fa Example of paper-plane fa-paper-plane"></i>
                                    </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="totop"><i class="fa fa-angle-up fa-2x"></i></div>
                <a href="https://wa.me/+905322327112"
                   class="float" target="_blank">
                    <i class="fa fa-whatsapp my-float"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row text-center">
                <div class="copyright-social">
                    <ul class="social-profile">
                        <?php foreach ($socialmedia as $sm) { ?>
                            <li><a href="<?php echo $sm->Link; ?>"><i class="<?php echo $sm->Icon; ?>"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="copyright-text">
                    <p><?php echo $settings->Footer; ?> <a href="http://yildizosman.com/" target="_blank">Osman
                            YILDIZ</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==== footer section end ==== -->