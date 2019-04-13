<?php
session_start();
class Home extends Controller 
{    
    public function index()
    {
        if(!isset($_SESSION['user']))
        {
            $this->view('frontpage/index');
        } else {
            $this->view('templates/header');
            $this->view('home/index');
            $this->view('templates/footer');
        }
    }

    public function upload()
    {
        
    }
}
