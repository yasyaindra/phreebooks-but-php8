<?php 

class Application extends Controller {
    public function index(){
        $data['judul'] = 'Welcome To Phreebook';
        $data['preprocess'] = $this->model('Preprocess_model');
        $this->view('templates/header', $data);
        $this->view('application/index', $data);
        $this->view('templates/footer');
    }
}