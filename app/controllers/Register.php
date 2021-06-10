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
}
