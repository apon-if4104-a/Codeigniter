<?php

class Obat_Model extends CI_Model
{
    public function Input_Obat()
    {
        $Obat = [
            "ID_Obat" => $this->input->post('IDObatI', true),
            "Nama_Obat" => $this->input->post('NamaObatI', true),
            "Keterangan_Obat" => $this->input->post('KeteranganObatI', true),
            "Harga_Obat" => $this->input->post('HargaObatI', true),
            "Deskripsi_Obat" => $this->input->post('DeskripsiObatI', true),
            "Foto_Obat" => $this->input->post('FotoObatI', true)
        ];

        $this->db->insert('obat', $Obat);
    }

    public function Delete_Obat($id)
    {
        $this->db->where('ID_Obat', $id);
        $this->db->delete('obat');
    }
    public function Update_Obat($idu)
    {
        $data = [
            "ID_Obat" => $this->input->post('IDObatU', true),
            "Nama_Obat" => $this->input->post('NamaObatU', true),
            "Keterangan_Obat" => $this->input->post('KeteranganObatU', true),
            "Harga_Obat" => $this->input->post('HargaObatU', true),
            "Deskripsi_Obat" => $this->input->post('DeskripsiObatU', true),
            "Foto_Obat" => $this->input->post('FotoObatU', true)
        ];

        $this->db->where('ID_Obat', $idu);
        $this->db->update('obat', $data);
    }
}
