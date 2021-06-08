<?php 

class Preprocess_model extends Controller {
    private $students = [
        [
        'nama' => 'Indra',
        'jurusan' => 'Teknik Informatika',
        'email' => 'indra@mail.com',
        ],
        [
        'nama' => 'Afif',
        'jurusan' => 'Teknik Sipil',
        'email' => 'Afif@mail.com',
        ],
        [
        'nama' => 'Wahyu',
        'jurusan' => 'Teknik Kimia',
        'email' => 'Wahyu@mail.com',
        ],
    ];

    public function getAllStudents(){
        return $this->students;
    }
}