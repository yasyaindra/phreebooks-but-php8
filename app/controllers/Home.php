<?php 

class Home extends Controller {
    public function index(){
        $data['judul'] = TITLE_INSTALL;
        $data['nama'] = 'Indra';
        $data['ouput'] = $this->model('MessageStack')->output();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}