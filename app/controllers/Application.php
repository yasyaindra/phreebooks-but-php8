<?php 

class Application extends Controller {
    public function index(){
        $data['judul'] = 'Welcome To Phreebook';
        $data['pre_process'] = $this->model('Preprocess_model')->getAllStudents();
        $this->view('templates/header', $data);
        $this->view('application/index', $data);
        $this->view('templates/footer');
    }
}