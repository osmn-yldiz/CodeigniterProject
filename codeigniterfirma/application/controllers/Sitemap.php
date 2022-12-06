<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model("default_model");

    }

    public function index()
    {
        $viewData = new stdClass();

        $projects_limit = $this->default_model->limit("projects", 3, array("Status" => 1), "ID DESC");
        $viewData->projects_limit = $projects_limit;

        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $banner = $this->default_model->get("banner", array("Link" => $this->uri->segment(1)));
        if (empty($banner)) {
            $banner->Image = "default.jpg";
        }
        $viewData->banner = $banner;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $albums = $this->default_model->get_all("albums", array("Status" => 1), "Rank ASC");
        $viewData->albums = $albums;

        $news = $this->default_model->get_all("news", array("Status" => 1), "Rank ASC");
        $viewData->news = $news;

        $completed_projects = $this->default_model->get_all("completed_projects", array("Status" => 1), "Rank ASC");
        $viewData->completed_projects = $completed_projects;

        $going_projects = $this->default_model->get_all("going_projects", array("Status" => 1), "Rank ASC");
        $viewData->going_projects = $going_projects;

        $main_menu = $this->default_model->get_all("main_menu", array("Status" => 1, "SupID" => 0), "Rank ASC");
        $viewData->main_menu = $main_menu;

        foreach ($main_menu as $main) {
            $mainMenuArray[] = $main;
            //print  $main->ID."<br>";
            $sorgu = $this->default_model->get_all("main_menu", array("SupID" => $main->ID), "Rank ASC");
            if (count($sorgu) > 0) {
                $main_menu_alt[$main->ID] = $this->default_model->get_all("main_menu", array("SupID" => $main->ID), "Rank ASC");
                $menu_alt[$main->SupID] = $main_menu_alt;
            }
        }
        $viewData->mainMenuArray = $mainMenuArray;
        $viewData->main_menu_alt = $main_menu_alt;

        $viewData->url = "sitemap";
        $viewData->title = $settings->Title;
        $this->load->view('sitemap', $viewData);
    }

}
