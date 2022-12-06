<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Popup extends CI_Controller
{

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

        $popup = $this->default_model->get("popup", array(
            "ID" => 1
        ));

        $viewData->popup = $popup;
        $viewData->url = "popup";
        $viewData->title = $settings->Title;
        $this->load->view('popup', $viewData);
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
            redirect(base_url("popup"));
        } else {

            if (!empty($_FILES["Image"]["name"])) {

                $image_data = $this->default_model->get("popup",
                    array(
                        "ID" => $ID
                    ));
                unlink("uploads/popup/" . $image_data->Image);

                // Dosyanın yüklenecek olan yolunu belirttik
                $config["upload_path"] = "uploads/popup/";

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
                    $config["source_image"] = "uploads/popup/" . $uploaded_filename;

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

                    $update = $this->default_model->update("popup",
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
                    redirect(base_url("popup"));

                } else {
                    $alert = array(
                        'title' => "Hata!",
                        'subtitle' => "Fotoğraf yüklenirken bir hata oluştu!",
                        'type' => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);
                    redirect(base_url("popup"));
                }


            } else {
                // Fotoğraf güncellenmezse
                $update = $this->default_model->update("popup",
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
                redirect(base_url("popup"));

            }
        }

    }

}
