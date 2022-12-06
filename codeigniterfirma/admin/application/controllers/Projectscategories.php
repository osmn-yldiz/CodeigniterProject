<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Projectscategories extends CI_Controller
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
        $projectscategories = $this->default_model->get_all("projectscategories", array(), "Rank ASC");
        $viewData->projectscategories = $projectscategories;
        $viewData->url = "projectscategories";
        $viewData->title = $settings->Title;
        $this->load->view('projectscategories', $viewData);
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
            redirect(base_url("projectscategories"));
        } else {

            if (!empty($_FILES["Image"]["name"])) {

                // Dosyanın yüklenecek olan yolunu belirttik
                $config["upload_path"] = "uploads/projectscategories/";

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
                    $config["source_image"] = "uploads/projectscategories/" . $uploaded_filename;

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

                    $insert = $this->default_model->insert("projectscategories",
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
                    redirect(base_url("projectscategories"));

                } else {
                    $alert = array(
                        'title' => "Hata!",
                        'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                        'type' => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("projectscategories"));
                }


            } else {
                $alert = array(
                    'title' => "Dikkat Et!",
                    'subtitle' => "Fotoğraf alanı boş bırakılamaz!",
                    'type' => "warning"
                );

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("projectscategories"));
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
            redirect(base_url("projectscategories"));
        } else {

            if (!empty($_FILES["Image"]["name"])) {

                $image_data = $this->default_model->get("projectscategories",
                    array(
                        "ID" => $ID
                    ));
                unlink("uploads/projectscategories/" . $image_data->Image);

                // Dosyanın yüklenecek olan yolunu belirttik
                $config["upload_path"] = "uploads/projectscategories/";

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
                    $config["source_image"] = "uploads/projectscategories/" . $uploaded_filename;

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

                    $update = $this->default_model->update("projectscategories",
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
                    redirect(base_url("projectscategories"));

                } else {
                    $alert = array(
                        'title' => "Hata!",
                        'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                        'type' => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("projectscategories"));
                }


            } else {
                // Fotoğraf güncellenmezse
                $update = $this->default_model->update("projectscategories",
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
                redirect(base_url("projectscategories"));

            }
        }

    }

    public function delete($ID)
    {

        $image_data = $this->default_model->get("projectscategories",
            array(
                "ID" => $ID
            ));
        unlink("uploads/projectscategories/" . $image_data->Image);

        $delete = $this->default_model->delete("projectscategories",
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
        redirect(base_url("projectscategories"));

    }

    public function isactivesetter($ID)
    {
        if ($ID) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->default_model->update("projectscategories",
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
            $this->default_model->update("projectscategories",
                array(
                    "ID" => $ID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

    // Proje Detayı Bölümü
    public function uploadpage($ID)
    {
        $viewData = new stdClass();
        $admin = $this->default_model->get("admin", array("ID" => 1));
        $viewData->admin = $admin;
        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;
        $projectscategories = $this->default_model->get("projectscategories", array("ID" => $ID));
        $projects = $this->default_model->get_all("projects", array("ProjectsCategoriesID" => $ID), "Rank ASC");
        $viewData->projects = $projects;
        $viewData->projectscategories = $projectscategories;
        $viewData->url = "projects";
        $viewData->title = $settings->Title;
        $this->load->view("projects", $viewData);
    }

    public function uploadpage_insert($ID)
    {

        $projects = $this->default_model->get("projectscategories",
            array(
                "ID" => $ID
            ));

        $Name = $this->input->post("Name");

        if (!$Name) {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("projectscategories/uploadpage/" . $projects->ID));
        } else {

            if (!empty($_FILES["Image"]["name"])) {

                // Dosyanın yüklenecek olan yolunu belirttik
                $config["upload_path"] = "uploads/projects/";

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
                    $config["source_image"] = "uploads/projects/" . $uploaded_filename;

                    // Thumbnail oluştursun mu
                    $config["create_thumb"] = FALSE;

                    // Oranları korusun mu
                    $config["maintain_ratio"] = FALSE;

                    // Resmin kalitesi
                    $config["quality"] = "100%";

                    $config["width"] = 800;
                    $config["height"] = 800;

                    $this->load->library("image_lib", $config);

                    $this->image_lib->resize();

                    $insert = $this->default_model->insert("projects",
                        array(
                            "ProjectsCategoriesID" => $projects->ID,
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
                    redirect(base_url("projectscategories/uploadpage/" . $projects->ID));

                } else {
                    $alert = array(
                        'title' => "Hata!",
                        'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                        'type' => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("projectscategories/uploadpage/" . $projects->ID));
                }


            } else {
                $alert = array(
                    'title' => "Dikkat Et!",
                    'subtitle' => "Fotoğraf alanı boş bırakılamaz!",
                    'type' => "warning"
                );

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("projectscategories/uploadpage/" . $projects->ID));
            }
        }
    }

    public function uploadpage_update($ID)
    {

        $projects = $this->default_model->get("projects",
            array(
                "ID" => $ID
            ));
        $ProjectsCategoriesID = $projects->ProjectsCategoriesID;

        $Name = $this->input->post("Name");

        if (!$Name) {
            $alert = array(
                'title' => "Dikkat Et!",
                'subtitle' => "Lütfen boş alan bırakmayınız!",
                'type' => "warning"
            );

            $this->session->set_flashdata("alert", $alert);
            redirect(base_url("projectscategories/uploadpage/$ProjectsCategoriesID"));
        } else {

            if (!empty($_FILES["Image"]["name"])) {

                $image_data = $this->default_model->get("projects",
                    array(
                        "ID" => $ID
                    ));
                unlink("uploads/projects/" . $image_data->Image);

                // Dosyanın yüklenecek olan yolunu belirttik
                $config["upload_path"] = "uploads/projects/";

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
                    $config["source_image"] = "uploads/projects/" . $uploaded_filename;

                    // Thumbnail oluştursun mu
                    $config["create_thumb"] = FALSE;

                    // Oranları korusun mu
                    $config["maintain_ratio"] = FALSE;

                    // Resmin kalitesi
                    $config["quality"] = "100%";

                    $config["width"] = 800;
                    $config["height"] = 800;

                    $this->load->library("image_lib", $config);

                    $this->image_lib->resize();

                    $update = $this->default_model->update("projects",
                        array(
                            "ID" => $ID
                        ),
                        array(
                            "Name" => $Name,
                            "Image" => $uploaded_filename,
                            "Status" => 1,
                            "Rank" => 0,
                            "Create_Date" => date("Y-m-d H:i:s")
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
                    redirect(base_url("projectscategories/uploadpage/$ProjectsCategoriesID"));

                } else {
                    $alert = array(
                        'title' => "Hata!",
                        'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                        'type' => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("projectscategories/uploadpage/$ProjectsCategoriesID"));
                }


            } else {
                // Fotoğraf güncellenmezse
                $update = $this->default_model->update("projects",
                    array(
                        "ID" => $ID
                    ),
                    array(
                        "Name" => $Name,
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
                redirect(base_url("projectscategories/uploadpage/$ProjectsCategoriesID"));

            }
        }

    }

    public function singleimage($ID)
    {

        $image_data = $this->default_model->get("projects",
            array(
                "ID" => $ID
            ));
        unlink("uploads/projects/" . $image_data->Image);

        $delete = $this->default_model->delete("projects",
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
        redirect(base_url("projectscategories/uploadpage/$image_data->ProjectsCategoriesID"));

    }

    public function isactivesetter2($ID)
    {
        if ($ID) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->default_model->update("projects",
                array(
                    "ID" => $ID
                ),
                array(
                    "Status" => $isActive
                ));
        }
    }

    public function ranksetter2($ProjectsCategoriesID)
    {
        $data = $this->input->post("data");
        parse_str($data, $rank);
        $value = $rank["rank"];
        foreach ($value as $rank => $ID) {
            $this->default_model->update("projects",
                array(
                    "ID" => $ID,
                    "ProjectsCategoriesID" => $ProjectsCategoriesID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

    public function uploadpage1($ID)
    {
        $viewData = new stdClass();
        $admin = $this->default_model->get("admin", array("ID" => 1));
        $viewData->admin = $admin;
        $settings = $this->default_model->get("settings", array("ID" => 1));
        $viewData->settings = $settings;
        $projects = $this->default_model->get("projects", array("ID" => $ID));
        $projectsimages = $this->default_model->get_all("projectsimages", array("projectsID" => $ID), "Rank ASC");
        $viewData->projectsimages = $projectsimages;
        $viewData->projects = $projects;
        $viewData->url = "projectsimages";
        $viewData->title = $settings->Title;
        $this->load->view("projectsimages", $viewData);
    }

    public function uploadimages($ID)
    {

        // Dosyanın yüklenecek olan yolunu belirttik
        $config["upload_path"] = "uploads/projectsimages/";

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
            $config["source_image"] = "uploads/projectsimages/" . $uploaded_filename;

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

            $this->default_model->insert("projectsimages",
                array(
                    "projectsID" => $ID,
                    "Image" => $uploaded_filename,
                    "Status" => 1,
                    "Rank" => 0,
                    "Create_Date" => date("Y-m-d H:i:s")
                ));

        }

    }

    public function singleimage2($ID)
    {

        $image_data = $this->default_model->get("projectsimages",
            array(
                "ID" => $ID
            ));
        unlink("uploads/projectsimages/" . $image_data->Image);

        $delete = $this->default_model->delete("projectsimages",
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
        redirect(base_url("projectscategories/uploadpage1/$image_data->projectsID"));

    }

    public function allimagedelete($ID)
    {

        $image_data = $this->default_model->get_all("projectsimages",
            array(
                "projectsID" => $ID
            ), "ID DESC");
        foreach ($image_data as $image_datas) {
            unlink("uploads/projectsimages/" . $image_datas->Image);
        }

        $delete = $this->default_model->delete("projectsimages",
            array(
                "projectsID" => $ID
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
        redirect(base_url("projectscategories/uploadpage1/$ID"));

    }

    public function isactivesetter3($ID)
    {
        if ($ID) {
            $isActive = ($this->input->post("data") === "true") ? 1 : 0;
            $this->default_model->update("projectsimages",
                array(
                    "ID" => $ID
                ),
                array(
                    "Status" => $isActive
                ));
        }
    }

    public function ranksetter3($projectsID)
    {
        $data = $this->input->post("data");
        parse_str($data, $rank);
        $value = $rank["rank"];
        foreach ($value as $rank => $ID) {
            $this->default_model->update("projectsimages",
                array(
                    "ID" => $ID,
                    "projectsID" => $projectsID
                ),
                array(
                    "Rank" => $rank
                ));
        }
    }

}