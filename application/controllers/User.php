<?php

class User extends CI_Controller
{
    public function index()
    {
            echo "Hello JEEP!";
    }
    public function index()
    {
        $this->load->view('layout/header');
		$this->load->view('user/user');
		$this->load->view('layout/footer');
    }

    public function adduser()
    {
        $this->load->view('layout/header');
		$this->load->view('user/adduser');
		$this->load->view('layout/footer');
    }

   // public function sayMyName($name = "Patchara Pochaikup",$surname="")
   // {
        //$name = "Patchara  Pochaikup";
   //     echo "Your name is : ".$name;
    }
}