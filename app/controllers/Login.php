<?php

class Login extends Controller
{
    public function index()
    {
        $data["title"] = "Login";
        $this->view("templates/header", $data);
        $this->view("login/login");
        $this->view("templates/footer");
    }

    public function register()
    {
        $data["title"] = "Register";
        $this->view("templates/header", $data);
        $this->view("login/register");
        $this->view("templates/footer");
    }

    public function auth()
    {
        $data["title"] = "Login";
        $this->view("templates/header", $data);
        $this->view("login/auth");
        $this->view("templates/footer");
    }
}
