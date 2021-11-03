<?php

class User extends Controller {
    public function index() {
      $data["judul"]='Index';
      $this->view("templates/header", $data);
      $this->view("user/index", $data);
      $this->view("templates/footer");
      
    }
    public function profile($nama = "Linux", $pekerjaan = "Devs") {
      $data["judul"]= 'User';
      $data["nama"] = $nama;
      $data["pekerjaan"] = $pekerjaan;
      $this->view("templates/header", $data);
      $this->view("user/profile", $data);
      $this->view("templates/footer");
    }
  }

?>