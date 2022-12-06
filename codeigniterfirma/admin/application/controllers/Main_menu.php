<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_menu extends CI_Controller
{

    // Aşağıda ne kadar method olursa olsun buranın içinde olanları onların içine de yükle.
    public function __construct()
    {

        parent::__construct();
        $this->load->model("default_model");

        $admins = $this->session->userdata("admins");
        if (!$admins) {
            redirect(base_url("login"));
        }

    }

    public function index()
    {
        $viewData = new stdClass();
        $admin = $this->default_model->get("admin", array("ID" => 1));
        $viewData->admin = $admin;
        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;
        $main_menu = $this->default_model->get_all("main_menu", array("SupID" => 0), "Rank ASC");
        $viewData->main_menu = $main_menu;
        $viewData->url = "main_menu";
        $viewData->title = $settings->Title;
        $this->load->view('main_menu', $viewData);
    }

    public function insert()
    {

        $Name = $this->input->post("Name");
        $Link = $this->input->post("Link");

        if (!$Name || !$Link) {

            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("main_menu"));

        } else {
            $insert = $this->default_model->insert("main_menu",
                array(
                    "SupID" => 0,
                    "Name" => $Name,
                    "Link" => $Link,
                    "Status" => 1,
                    "Rank" => 0,
                    "Create_Date" => date("Y-m-d H:i:s")
                ));

            if ($insert) {
                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Ekleme işlemi başarıyla gerçekleşti!",
                    'type' => "success"
                );
            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Ekleme işlemi başarısız oldu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("main_menu"));

        }

    }

    public function update($ID)
    {

        $Name = $this->input->post("Name");
        $Link = $this->input->post("Link");

        if (!$Name || !$Link) {

            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("main_menu"));

        } else {
            $update = $this->default_model->update("main_menu",
                array(
                    "ID" => $ID
                ),
                array(
                    "Name" => $Name,
                    "Link" => $Link
                ));

            if ($update) {
                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Güncelleme işlemi başarıyla gerçekleşti!",
                    'type' => "success"
                );
            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Güncelleme işlemi başarısız oldu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("main_menu"));

        }

    }

    public function delete($ID)
    {

        $delete = $this->default_model->delete("main_menu",
            array(
                "ID" => $ID
            ));

        if ($delete) {
            $alert = array(
                'title' => "Tebrikler!",
                'subtitle' => "Silme işlemi başarıyla gerçekleşti!",
                'type' => "success"
            );
        } else {
            $alert = array(
                'title' => "Hata!",
                'subtitle' => "Silme işlemi başarısız oldu!",
                'type' => "error"
            );
        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("main_menu"));

    }

    public function isactivesetter($ID)
    {
        if ($ID) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->default_model->update("main_menu",
                array(
                    "ID" => $ID
                ),
                array(
                    "Status" => $isActive
                ));
        }
    }

    public function ranksetter()
    {
        $data = $this->input->post("data");
        parse_str($data, $rank);
        $value = $rank["rank"];
        foreach ($value as $rank => $ID) {
            $this->default_model->update("main_menu",
                array(
                    "ID" => $ID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

    public function uploadpage($ID)
    {
        $viewData = new stdClass();
        $admin = $this->default_model->get("admin", array("ID" => 1));
        $viewData->admin = $admin;
        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;
        $main_menu = $this->default_model->get("main_menu", array("ID" => $ID));
        $main_menus = $this->default_model->get_all("main_menu", array("SupID" => $ID), "Rank ASC");
        $viewData->main_menu = $main_menu;
        $viewData->main_menus = $main_menus;
        $viewData->url = "main_menu";
        $viewData->title = $settings->Title;
        $this->load->view("main_menu-detail", $viewData);
    }

    public function insert2($ID)
    {

        $menu = $this->default_model->get("main_menu",
            array(
                "ID" => $ID
            ));

        $Name = $this->input->post("Name");
        $Link = $this->input->post("Link");

        if (!$Name || !$Link) {

            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("main_menu/uploadpage/" . $menu->ID));

        } else {
            $insert = $this->default_model->insert("main_menu",
                array(
                    "SupID" => $ID,
                    "Name" => $Name,
                    "Link" => $Link,
                    "Status" => 1,
                    "Rank" => 0,
                    "Create_Date" => date("Y-m-d H:i:s")
                ));

            if ($insert) {
                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Ekleme işlemi başarıyla gerçekleşti!",
                    'type' => "success"
                );
            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Ekleme işlemi başarısız oldu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("main_menu/uploadpage/" . $menu->ID));

        }

    }

    public function update2($ID)
    {

        $main_menu = $this->default_model->get("main_menu",
            array(
                "ID" => $ID
            ));
        $menu_id = $main_menu->SupID;

        $Name = $this->input->post("Name");
        $Link = $this->input->post("Link");

        if (!$Name || !$Link) {

            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("main_menu/uploadpage/$menu_id"));

        } else {
            $update = $this->default_model->update("main_menu",
                array(
                    "ID" => $ID
                ),
                array(
                    "Name" => $Name,
                    "Link" => $Link
                ));

            if ($update) {
                $alert = array(
                    'title' => "Tebrikler!",
                    'subtitle' => "Güncelleme işlemi başarıyla gerçekleşti!",
                    'type' => "success"
                );
            } else {
                $alert = array(
                    'title' => "Hata!",
                    'subtitle' => "Güncelleme işlemi başarısız oldu!",
                    'type' => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("main_menu/uploadpage/$menu_id"));

        }

    }

    public function delete2($ID)
    {

        $main_menu = $this->default_model->get("main_menu",
            array(
                "ID" => $ID
            ));
        $menu_id = $main_menu->SupID;

        $delete = $this->default_model->delete("main_menu",
            array(
                "ID" => $ID
            ));

        if ($delete) {
            $alert = array(
                'title' => "Tebrikler!",
                'subtitle' => "Silme işlemi başarıyla gerçekleşti!",
                'type' => "success"
            );
        } else {
            $alert = array(
                'title' => "Hata!",
                'subtitle' => "Silme işlemi başarısız oldu!",
                'type' => "error"
            );
        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("main_menu/uploadpage/$menu_id"));

    }

    public function isactivesetter2($ID)
    {
        if ($ID) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->default_model->update("main_menu",
                array(
                    "ID" => $ID
                ),
                array(
                    "Status" => $isActive
                ));
        }
    }

    public function ranksetter2($SupID)
    {
        $data = $this->input->post("data");
        parse_str($data, $rank);
        $value = $rank["rank"];
        foreach ($value as $rank => $ID) {
            $this->default_model->update("main_menu",
                array(
                    "ID" => $ID,
                    "SupID" => $SupID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

}
