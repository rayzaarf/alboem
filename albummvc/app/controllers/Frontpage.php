<?php
session_start();
class Frontpage extends Controller
{
    public function index()
    {
        $this->view('frontpage/index');
    }

    public function login()
    {   
        if(isset($_POST['sign_in']))
        {
            $data['email'] = $_POST['email'];
            $data['pass'] = $_POST['password'];
            
            $user = $this->model('User_model')->masukAkun($data);

            if($user)
            {
                $_SESSION['user'] = $user;
                $this->view('templates/header');
                $this->view('home/index');
                $this->view('templates/footer');
                var_dump($_SESSION['user']);
            } else {
                echo "Wrong email and/or password";
                $this->view('frontpage/index');
            }
        }
    }

    public function logout()
    {
        // var_dump($_SESSION['user']);
        session_unset();
        // var_dump($_SESSION['user']);
        session_destroy();
        Frontpage::index();
    }
}
