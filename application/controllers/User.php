<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        $this->load->view('templates/users/header', $data);
        $this->load->view('users/index');
        $this->load->view('templates/users/footer');
    }

    public function tvShow()
    {
        $data = [
            'title' => 'Tv Show'
        ];

        $this->load->view('templates/users/header', $data);
        $this->load->view('users/tvShow');
        $this->load->view('templates/users/footer');
    }

    public function movies()
    {
        $data = [
            'title' => 'Movies'
        ];

        $this->load->view('templates/users/header', $data);
        $this->load->view('users/movies');
        $this->load->view('templates/users/footer');
    }

    public function watch()
    {
        $data = [
            'title' => 'Movies - Watch'
        ];

        $this->load->view('templates/users/header', $data);
        $this->load->view('users/watch');
        $this->load->view('templates/users/footer');
    }

    public function notFound()
    {
        $this->load->view('templates/notFound/index');
    }
}
