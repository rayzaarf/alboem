<?php
session_start();
class Profile extends Controller 
{

    public function index()
    {
        if(!isset($_SESSION['user']))
        {
            $this->view('frontpage/index');
        } else {
            $this->view("templates/header");
            $this->view("profile/index");
            $this->view("templates/footer");
        }
    }
}