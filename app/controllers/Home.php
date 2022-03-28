<?php

class Home extends Controller {
    public function index()
    {
        $data['judulhalaman'] = 'HOME';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header_landing', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer_landing');
    }
}