<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <!--<div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>-->
            <ul class="nav nav-primary">

                <li class="nav-item <?php echo $url == "home" ? "active" : ""; ?>">
                    <a href="home">
                        <i class="fas fa-home"></i>
                        <p>Anasayfa</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "settings" ? "active" : ""; ?>">
                    <a href="settings">
                        <i class="fas fa-cogs"></i>
                        <p>Genel Ayarlar</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-briefcase"></i>
                        <p>Kurumsal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="about_us">
                                    <span class="sub-item">Hakkımızda</span>
                                </a>
                            </li>
                            <li>
                                <a href="vision">
                                    <span class="sub-item">Vizyonumuz</span>
                                </a>
                            </li>
                            <li>
                                <a href="mission">
                                    <span class="sub-item">Misyonumuz</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item <?php echo $url == "main_menu" ? "active" : ""; ?>">
                    <a href="main_menu">
                        <i class="fas fa-list-ol"></i>
                        <p>Menüler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "sliders" ? "active" : ""; ?>">
                    <a href="sliders">
                        <i class="fas fa-images"></i>
                        <p>Slaytlar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "banner" ? "active" : ""; ?>">
                    <a href="banner">
                        <i class="fas fa-image"></i>
                        <p>Banner</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "popup" ? "active" : ""; ?>">
                    <a href="popup">
                        <i class="far fa-image"></i>
                        <p>Popup</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "teams" ? "active" : ""; ?>">
                    <a href="teams">
                        <i class="fas fa-users"></i>
                        <p>Ekibimiz</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "client_comments" ? "active" : ""; ?>">
                    <a href="client_comments">
                        <i class="fas fa-comments"></i>
                        <p>Müşteri Yorumları</p>
                    </a>
                </li>

                <!--<li class="nav-item">
                    <a data-toggle="collapse" href="#projects" class="collapsed" aria-expanded="false">
                        <i class="fas fa-project-diagram"></i>
                        <p>Projeler</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="projects">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="going_projects">
                                    <span class="sub-item">Devam Eden Projeler</span>
                                </a>
                            </li>
                            <li>
                                <a href="completed_projects">
                                    <span class="sub-item">Tamamlanan Projeler</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>-->

                <li class="nav-item <?php echo $url == "projectscategories" ? "active" : ""; ?>">
                    <a href="projectscategories">
                        <i class="fas fa-project-diagram"></i>
                        <p>Projeler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "brands" ? "active" : ""; ?>">
                    <a href="brands">
                        <i class="fas fa-feather-alt"></i>
                        <p>Referanslar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "services" ? "active" : ""; ?>">
                    <a href="services">
                        <i class="fab fa-cloudversify"></i>
                        <p>Hizmetler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "faq" ? "active" : ""; ?>">
                    <a href="faq">
                        <i class="fa fa-question-circle"></i>
                        <p>Sıkça Sorulan Sorular</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "albums" ? "active" : ""; ?>">
                    <a href="albums">
                        <i class="far fa-images"></i>
                        <p>Albümler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "videos" ? "active" : ""; ?>">
                    <a href="videos">
                        <i class="fas fa-video"></i>
                        <p>Videolar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "pages" ? "active" : ""; ?>">
                    <a href="pages">
                        <i class="fas fa-list"></i>
                        <p>Sayfalar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "counter" ? "active" : ""; ?>">
                    <a href="counter">
                        <i class="fas fa-sort-numeric-up"></i>
                        <p>İstatistikler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "news" ? "active" : ""; ?>">
                    <a href="news">
                        <i class="fas fa-newspaper"></i>
                        <p>Haberler</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "subscribers" ? "active" : ""; ?>">
                    <a href="subscribers">
                        <i class="fas fa-user-friends"></i>
                        <p>Abone Olanlar</p>
                    </a>
                </li>

                <li class="nav-item <?php echo $url == "messages" ? "active" : ""; ?>">
                    <a href="messages">
                        <i class="fas fa-envelope"></i>
                        <p>Gelen Mesajlar</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>