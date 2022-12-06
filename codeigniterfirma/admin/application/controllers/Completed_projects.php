<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Completed_projects extends CI_Controller
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
        $completed_projects = $this->default_model->get_all("completed_projects", array(), "Rank ASC");
        $viewData->completed_projects = $completed_projects;
        $viewData->url = "completed_projects";
        $viewData->title = $settings->Title;
        $this->load->view('completed_projects', $viewData);
    }

    public function insert()
    {

        $Name = $this->input->post("Name");

        if (!$Name) {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("completed_projects"));
        } else {

            if (!empty($_FILES["Image"]["name"])) {

                // Dosyanın yüklenecek olan yolunu belirttik
                $config["upload_path"] = "uploads/completed_projects/";

                // Yüklenmesine izin verdiğimiz uzantılar
                $config["allowed_types"] = "gif|jpg|png|jpeg|svg";

                // Dosyanın ismini değiştirme
                $config["file_name"] = uniqid();

                // Upload kütüphanesi yükledik
                $this->load->library("upload", $config);

                // Resim yükleme işlemini burada gerçekleştirdik
                $upload = $this->upload->do_upload("Image");

                if ($upload) {

                    // Dosyanın sadece uzantısını almak için kullanılır.
                    //$uploaded_filename = $this->upload->data("file_type");

                    // Yüklediğimiz dosyanın ismini ve uzantısını alıyoruz. (Image Manipulation Class)
                    $uploaded_filename = $this->upload->data("file_name");

                    // Yeni kütüphanenin ayarlarını yapıyoruz.
                    $config["image_library"] = "gd2";

                    // Ayarları ile oynayacağı fotoğrafın yolunu gösterdik.
                    $config["source_image"] = "uploads/completed_projects/" . $uploaded_filename;

                    // Thumbnail oluştursun mu
                    $config["create_thumb"] = FALSE;

                    // Oranları korusun mu
                    $config["maintain_ratio"] = FALSE;

                    // Resmin kalitesi
                    $config["quality"] = "100%";

                    $config["width"] = 1920;
                    $config["height"] = 1080;

                    $this->load->library("image_lib", $config);

                    $this->image_lib->resize();

                    $insert = $this->default_model->insert("completed_projects",
                        array(
                            "Name" => $Name,
                            "Image" => $uploaded_filename,
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
                    redirect(base_url("completed_projects"));

                } else {
                    $alert = array(
                        'title' => "Hata!",
                        'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                        'type' => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("completed_projects"));
                }


            } else {
                $alert = array(
                    'title' => "Dikkat Et!",
                    'subtitle' => "Fotoğraf alanı boş bırakılamaz!",
                    'type' => "warning"
                );

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("completed_projects"));
            }
        }

    }

    public function update($ID)
    {

        $Name = $this->input->post("Name");

        if (!$Name) {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("completed_projects"));
        } else {

            if (!empty($_FILES["Image"]["name"])) {

                $image_data = $this->default_model->get("completed_projects",
                    array(
                        "ID" => $ID
                    ));
                unlink("uploads/completed_projects/" . $image_data->Image);

                // Dosyanın yüklenecek olan yolunu belirttik
                $config["upload_path"] = "uploads/completed_projects/";

                // Yüklenmesine izin verdiğimiz uzantılar
                $config["allowed_types"] = "gif|jpg|png|jpeg|svg";

                // Dosyanın ismini değiştirme
                $config["file_name"] = uniqid();

                // Upload kütüphanesi yükledik
                $this->load->library("upload", $config);

                // Resim yükleme işlemini burada gerçekleştirdik
                $upload = $this->upload->do_upload("Image");

                if ($upload) {

                    // Dosyanın sadece uzantısını almak için kullanılır.
                    //$uploaded_filename = $this->upload->data("file_type");

                    // Yüklediğimiz dosyanın ismini ve uzantısını alıyoruz. (Image Manipulation Class)
                    $uploaded_filename = $this->upload->data("file_name");

                    // Yeni kütüphanenin ayarlarını yapıyoruz.
                    $config["image_library"] = "gd2";

                    // Ayarları ile oynayacağı fotoğrafın yolunu gösterdik.
                    $config["source_image"] = "uploads/completed_projects/" . $uploaded_filename;

                    // Thumbnail oluştursun mu
                    $config["create_thumb"] = FALSE;

                    // Oranları korusun mu
                    $config["maintain_ratio"] = FALSE;

                    // Resmin kalitesi
                    $config["quality"] = "100%";

                    $config["width"] = 1920;
                    $config["height"] = 1080;

                    $this->load->library("image_lib", $config);

                    $this->image_lib->resize();

                    $update = $this->default_model->update("completed_projects",
                        array(
                            "ID" => $ID
                        ),
                        array(
                            "Name" => $Name,
                            "Image" => $uploaded_filename
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
                    redirect(base_url("completed_projects"));

                } else {
                    $alert = array(
                        'title' => "Hata!",
                        'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                        'type' => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("completed_projects"));
                }


            } else {
                // Fotoğraf güncellenmezse
                $update = $this->default_model->update("completed_projects",
                    array(
                        "ID" => $ID
                    ),
                    array(
                        "Name" => $Name
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
                redirect(base_url("completed_projects"));

            }
        }

    }

    public function delete($ID)
    {

        $image_data = $this->default_model->get("completed_projects",
            array(
                "ID" => $ID
            ));
        unlink("uploads/completed_projects/" . $image_data->Image);

        $delete = $this->default_model->delete("completed_projects",
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
        redirect(base_url("completed_projects"));

    }

    public function isactivesetter($ID)
    {
        if ($ID) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->default_model->update("completed_projects",
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
            $this->default_model->update("completed_projects",
                array(
                    "ID" => $ID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

    // Çoklu Fotoğraf Yükleme Bölümü
    public function uploadpage($ID)
    {
        $viewData = new stdClass();
        $admin = $this->default_model->get("admin", array("ID" => 1));
        $viewData->admin = $admin;
        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;
        $completed_projects = $this->default_model->get("completed_projects", array("ID" => $ID));
        $completedprojects_images = $this->default_model->get_all("completedprojects_images", array("completedprojects_ID" => $ID), "Rank ASC");
        $viewData->completedprojects_images = $completedprojects_images;
        $viewData->completed_projects = $completed_projects;
        $viewData->url = "completedprojects_images";
        $viewData->title = $settings->Title;
        $this->load->view("completedprojects_images", $viewData);
    }

    public function uploadimages($ID)
    {

        // Dosyanın yüklenecek olan yolunu belirttik
        $config["upload_path"] = "uploads/completedprojects_images/";

        // Yüklenmesine izin verdiğimiz uzantılar
        $config["allowed_types"] = "gif|jpg|png|jpeg|svg";

        // Dosyanın ismini değiştirme
        $config["file_name"] = uniqid();

        // Upload kütüphanesi yükledik
        $this->load->library("upload", $config);

        // Resim yükleme işlemini burada gerçekleştirdik. Buraya inputtaki name içerisinde yazanı yazıyoruz.
        $upload = $this->upload->do_upload("file");

        if ($upload) {

            // Dosyanın sadece uzantısını almak için kullanılır.
            //$uploaded_filename = $this->upload->data("file_type");

            // Yüklediğimiz dosyanın ismini ve uzantısını alıyoruz. (Image Manipulation Class)
            $uploaded_filename = $this->upload->data("file_name");

            // Yeni kütüphanenin ayarlarını yapıyoruz.
            $config["image_library"] = "gd2";

            // Ayarları ile oynayacağı fotoğrafın yolunu gösterdik.
            $config["source_image"] = "uploads/completedprojects_images/" . $uploaded_filename;

            // Thumbnail oluştursun mu
            $config["create_thumb"] = FALSE;

            // Oranları korusun mu
            $config["maintain_ratio"] = FALSE;

            // Resmin kalitesi
            $config["quality"] = "100%";

            $config["width"] = 1920;
            $config["height"] = 1080;

            $this->load->library("image_lib", $config);

            $this->image_lib->resize();

            $this->default_model->insert("completedprojects_images",
                array(
                    "completedprojects_ID" => $ID,
                    "Image" => $uploaded_filename,
                    "Status" => 1,
                    "Rank" => 0,
                    "Create_Date" => date("Y-m-d H:i:s")
                ));

        }

    }

    public function singleimage($ID)
    {

        $image_data = $this->default_model->get("completedprojects_images",
            array(
                "ID" => $ID
            ));
        unlink("uploads/completedprojects_images/" . $image_data->Image);

        $delete = $this->default_model->delete("completedprojects_images",
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
        redirect(base_url("completed_projects/uploadpage/$image_data->completedprojects_ID"));

    }

    public function allimagedelete($ID)
    {

        $image_data = $this->default_model->get_all("completedprojects_images",
            array(
                "completedprojects_ID" => $ID
            ), "ID DESC");
        foreach ($image_data as $image_datas)
        {
            unlink("uploads/completedprojects_images/" . $image_datas->Image);
        }

        $delete = $this->default_model->delete("completedprojects_images",
            array(
                "completedprojects_ID" => $ID
            ));

        if ($delete) {
            $alert = array(
                'title' => "Tebrikler!",
                'subtitle' => "Tümünü silme işlemi başarıyla gerçekleşti!",
                'type' => "success"
            );
        } else {
            $alert = array(
                'title' => "Hata!",
                'subtitle' => "Tümünü silme işlemi başarısız oldu!",
                'type' => "error"
            );
        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("completed_projects/uploadpage/$ID"));

    }

    public function isactivesetter2($ID)
    {
        if ($ID) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->default_model->update("completedprojects_images",
                array(
                    "ID" => $ID
                ),
                array(
                    "Status" => $isActive
                ));
        }
    }

    public function ranksetter2($completedprojects_ID)
    {
        $data = $this->input->post("data");
        parse_str($data, $rank);
        $value = $rank["rank"];
        foreach ($value as $rank => $ID) {
            $this->default_model->update("completedprojects_images",
                array(
                    "ID" => $ID,
                    "completedprojects_ID" => $completedprojects_ID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

}