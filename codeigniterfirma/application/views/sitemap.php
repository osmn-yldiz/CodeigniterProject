<?php

header("Content-type: text/xml");

?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($mainMenuArray as $row) { ?>
        <url>
            <loc><?php echo base_url(); ?><?php echo $row->Link; ?></loc>
        </url>
        <?php
        if (isset($main_menu_alt[$row->ID])) {
            foreach ($main_menu_alt[$row->ID] as $roww) {
                ?>
                <url>
                    <loc><?php echo base_url(); ?><?php echo $roww->Link; ?></loc>
                </url>
            <?php }
        } ?>
    <?php } ?>
    <?php foreach ($going_projects as $row) { ?>
        <url>
            <loc><?php echo base_url(); ?>going_projects/detail/<?php echo $row->ID; ?></loc>
        </url>
    <?php } ?>
    <?php foreach ($completed_projects as $row) { ?>
        <url>
            <loc><?php echo base_url(); ?>completed_projects/detail/<?php echo $row->ID; ?></loc>
        </url>
    <?php } ?>
    <?php foreach ($albums as $row) { ?>
        <url>
            <loc><?php echo base_url(); ?>albums/detail/<?php echo $row->ID; ?></loc>
        </url>
    <?php } ?>
    <?php foreach ($news as $row) { ?>
        <url>
            <loc><?php echo base_url(); ?>news/detail/<?php echo $row->ID; ?></loc>
        </url>
    <?php } ?>
</urlset>