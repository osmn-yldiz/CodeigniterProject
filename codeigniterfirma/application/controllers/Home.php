<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // Aşağıda ne kadar method olursa olsun buranın içinde olanları onların içine de yükle.
    public function __construct()
    {

        parent::__construct();
        $this->load->model("default_model");

    }

    public function index()
    {
        $viewData = new stdClass();

        //$sliderCount = $this->default_model->count("sliders");
        //$viewData->sliderCount = $sliderCount;

        $services_limit = $this->default_model->limit("services", 3, array("Status" => 1), "ID DESC");
        $viewData->services_limit = $services_limit;

        $teams_limit = $this->default_model->limit("teams", 4, array("Status" => 1), "ID DESC");
        $viewData->teams_limit = $teams_limit;

        $counter_limit = $this->default_model->limit("counter", 4, array("Status" => 1), "ID DESC");
        $viewData->counter_limit = $counter_limit;

        $projects_limit = $this->default_model->limit("projects", 3, array("Status" => 1), "ID DESC");
        $viewData->projects_limit = $projects_limit;

        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $banner = $this->default_model->get("banner", array("Link" => $this->uri->segment(1)));
        if (empty($banner)) {
            $banner = new stdClass();
            $banner->Image = "default.jpg";
        }
        $viewData->banner = $banner;

        $popup = $this->default_model->get("popup", array("ID" => 1));
        $viewData->popup = $popup;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $client_comments = $this->default_model->get_all("client_comments", array("Status" => 1), "Rank ASC");
        $viewData->client_comments = $client_comments;

        $sliders = $this->default_model->get_all("sliders", array("Status" => 1), "Rank ASC");
        $viewData->sliders = $sliders;

        $services = $this->default_model->get_all("services", array("Status" => 1), "Rank ASC");
        $viewData->services = $services;

        $teams = $this->default_model->get_all("teams", array("Status" => 1), "Rank ASC");
        $viewData->teams = $teams;

        $counter = $this->default_model->get_all("counter", array("Status" => 1), "Rank ASC");
        $viewData->counter = $counter;

        $brands = $this->default_model->get_all("brands", array("Status" => 1), "Rank ASC");
        $viewData->brands = $brands;

        $projectscategories = $this->default_model->get_all("projectscategories", array("Status" => 1), "Rank ASC");
        $viewData->projectscategories = $projectscategories;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

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

        $join = $this->default_model->join(array(
            "table" => "going_projects",
            "condition" => "going_projects.ID = goingprojects_images.goingprojects_ID"
        ),
            "going_projects.ID, going_projects.Image, going_projects.Name, goingprojects_images.Image",
            "goingprojects_images"
        );
        $viewData->join = $join;

        $viewData->url = "home";
        $viewData->title = $settings->Title;
        $this->load->view('home', $viewData);
    }

    public function page($ID)
    {
        $viewData = new stdClass();

        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;

        $banner = $this->default_model->get("banner", array("ID" => 1));
        $viewData->banner = $banner;

        $about_us = $this->default_model->get("about_us", array("ID" => 1));
        $viewData->about_us = $about_us;

        $projects_limit = $this->default_model->limit("projects", 3, array("Status" => 1), "ID DESC");
        $viewData->projects_limit = $projects_limit;

        $socialmedia = $this->default_model->get_all("socialmedia", array("Status" => 1), "Rank ASC");
        $viewData->socialmedia = $socialmedia;

        $projects = $this->default_model->get_all("projects", array("Status" => 1), "Rank ASC");
        $viewData->projects = $projects;

        $pages = $this->default_model->get_all("pages", array("Status" => 1), "Rank ASC");
        $viewData->pages = $pages;

        $page = $this->default_model->get("pages", array("Status" => 1, "ID" => $ID));
        $viewData->page = $page;

        $viewData->url = "page-detail";
        $viewData->title = $settings->Title;
        $this->load->view('page-detail', $viewData);
    }

}
