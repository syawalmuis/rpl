<?php
class Register extends Controller
{

    public function index()
    {
        $data["title"] = "Register";
        $this->view("templates/header", $data);
        $this->view("pendaftaran/1");
        $this->view("templates/footer");
    }

    public function check()
    {
        $data["title"] = "Check Data";
        $this->view("templates/header", $data);
        $this->view("pendaftaran/2");
        $this->view("templates/footer");
    }
}
