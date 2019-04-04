<?php

class Home extends Controller 
{

    public function index()
    {
        //$data['judul'] = 'Home';
        $this->view('templates/header');
        $this->view('home/home');
        $this->view('templates/footer');
    }
}