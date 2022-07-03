<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {

        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '932810383';
        $this->mhs1->nama = 'Hadisatu';
        $this->mhs1->gender = 'L';
        $this->mhs1->ipk = 3.85;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '283791731';
        $this->mhs2->nama = 'Mahadiana';
        $this->mhs2->gender = 'K';
        $this->mhs2->ipk = 3.5;

        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id = 3;
        $this->mhs3->nim = '0110221099';
        $this->mhs3->nama = 'Sandiwara';
        $this->mhs3->gender = 'L';
        $this->mhs3->ipk = 3.25;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa', $data);
        $this->load->view('partial/footer');
    }
}
