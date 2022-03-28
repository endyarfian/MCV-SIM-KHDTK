<?php
//dashboard
class Main extends Controller{
    public function index()
    {
        $data['judulhalaman'] = 'KHDTK WEB APP';
        $this->view('templates/header', $data);
        $this->view('main/index');
        $this->view('templates/footer');
    }
//penataan kawasan
    public function organisasi_kawasan () 
    {
        $data['judulhalaman'] = 'Organisasi Kawasan';
        $data['penataankawasan'] = $this->model('Organisasi_kawasan_model')->getAllPenataanKawasan();

        $this->view('templates/header', $data);
        $this->view('main/organisasi_kawasan', $data);
        $this->view('templates/footer');
    }
}