<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
    }

    public function index()
    {
        $data['buku'] = $this->buku_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/tambah');
        $this->load->view('templates/footer');
    }

    // SIMPAN
    public function simpan()
    {
        $data = [
        'judul' => $this->input->post('judul'),
        'penulis' => $this->input->post('penulis'),
        'penerbit' => $this->input->post('penerbit'),
    ];
        
        $this->buku_model->insert($data);
        redirect('index.php/buku');
    }

    public function hapus($id)
    {
        $this->buku_model->delete($id);
        redirect('index.php/buku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->buku_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
        'judul' => $this->input->post('judul'),
        'penulis' => $this->input->post('penulis'),
        'penerbit' => $this->input->post('penerbit'),
    ];
        $this->buku_model->update($id, $data);
        redirect('index.php/buku');
    }
}