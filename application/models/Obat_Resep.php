<?php
class Obat_Resep extends CI_Model
{
    public function Input_Obat_Resep()
    {
        $Resep = [
            "Foto_Resep" => $this->input->post('FotoResep', true),
            "Deskripsi_Resep" => $this->input->post('DeskripsiTambahan', true)
        ];

        $this->db->insert('obat_resep', $Resep);
    }
}
