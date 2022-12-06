<!-- == Team Section Start == -->
<section id="team" class="section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Ekibimiz</h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>
        <div class="row">

            <!-- Single team item-->
            <?php foreach ($teams_limit as $team) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-single text-center m-b-30">
                        <div class="team-img">
                            <img width="263" height="263" src="admin/uploads/teams/<?php echo $team->Image; ?>"
                                 alt="<?php echo $team->Name; ?>" class="img">
                            <!--<ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>-->
                        </div>
                        <div class="team-content">
                            <h3><a href="javascript:void(0);"><?php echo $team->Name; ?></a></h3>
                            <span><?php echo $team->Degree; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- == Team Section End == -->