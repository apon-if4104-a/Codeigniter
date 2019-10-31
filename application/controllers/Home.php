<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('Obat_Home');
	}

	public function index()
	{
		$table = 'obat';
		$hasil = $this->Obat_Home->Get_All($table);
		$data['BanyakObat'] = $hasil;
		$this->load->view('Home/headerLogin', $data);
		$this->load->view('Home/LandingUser', $data);
	}

	public function Input_Resep()
	{
		$this->load->view('Home/');
		$this->load->view('Home/InputResep');
	}
	public function Input_Resep_Foto()
	{
		$this->form_validation->set_rules('DeskripsiTambahan', 'DeskripsiTambahan', 'required');
		$this->load->model('Obat_Resep');
		$this->Obat_Resep->Input_Obat_Resep();
		echo "berhasil";
		/*if ($this->form_validation->run() == false) {
			$this->load->view('Home/InputResep');
		} else {
			$this->load->model('Obat_Resep');
			$this->Obat_Resep->Input_Obat_Resep();
			$this->load->view('Home/InputResep');
		}*/
	}
	public function PilihObat($Id)
	{
		$table = 'obat';
		$hasil = $this->Obat_Home->Get_Detail($table, $Id);
		$data['bat'] = $hasil;
		if ($data) {
			$this->load->view('Home/Pilih Obat', $data);
		} else {
			$this->load->view('Home/InputResep');
		}
	}

	public function Pembayaran()
	{
		$this->load->view('Home/Pembayaran');
	}
	public function InputObat()
	{
		//Input
		$this->form_validation->set_rules('IDObatI', 'ID Obat', 'integer');
		$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'min_length[2]');
		$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'integer');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('gagal', 'Ditambahkan');
			$this->load->view('Home/HalamanAdmin');
		} else {
			$this->load->model('Obat_Model');
			$this->Obat_Model->Input_Obat();
			$this->session->set_flashdata('berhasil', 'Ditambahkan');
			$this->load->view('Home/HalamanAdmin');
		}
	}

	public function DeleteObat()
	{
		//Delete
		$id = $this->input->post('IDObatD');
		$this->load->model('Obat_Model');
		$this->Obat_Model->Delete_Obat($id);
		$this->load->view('Home/HalamanAdmin');
	}
	public function UpdateObat()
	{
		//Update
		$this->form_validation->set_rules('IDObatI', 'IDObatI', 'integer');
		$this->form_validation->set_rules('IDObatI', 'ID Obat', 'required');
		$this->form_validation->set_rules('NamaObatI', 'Nama Obat', 'required');
		$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'min_length[2]');
		$this->form_validation->set_rules('HargaObatI', 'Harga Obat', 'integer');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('gagal', 'Ditambahkan');
			$this->load->view('Home/HalamanAdmin');
		} else {
			$this->load->model('Obat_Model');
			$idu = $this->input->post('IDObatU');
			$this->Obat_Model->Update_Obat($idu);
			$this->session->set_flashdata('berhasil', 'Ditambahkan');
			$this->load->view('Home/HalamanAdmin');
		}
	}
}
