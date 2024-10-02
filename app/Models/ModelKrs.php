<?php 

namespace App\Models;

use CodeIgniter\Model;

class ModelKrs extends Model
{
    public function DataMhs()
    {
        return $this->db->table('tbl_mhs')
        ->join('tbl_prodi', 'tbl_prodi.id_prodi = tbl_mhs.id_prodi', 'left')
        ->join('tbl_fakultas', 'tbl_fakultas.id_fakultas = tbl_prodi.id_fakultas', 'left')
        ->where('nim',session()->get('username'))
        ->get()->getRowArray();
    }
    public function MatkulDitawarkan()
    {
        return $this->db->table('tbl_matkul')
        ->get()->getResultArray();
    }
    public function TambahMatkul($data)
    {
        $this->db->table('tbl_krs_')
        ->insert($data);
    }
    public function DataKrs($id_mhs)
    {
        return $this->db->table('tbl_krs_')
            ->join('tbl_matkul', 'tbl_matkul.id_matkul = tbl_krs_.id_matkul', 'left')
            ->join('tbl_mhs', 'tbl_mhs.nim = tbl_krs_.nim', 'left')
            ->where('tbl_mhs.id_mhs',$id_mhs)
            ->get()->getResultArray();
    }
    public function DetailMhs()
    {
        return $this->db->table('tbl_mhs')
        ->where('nim',session()->get('username'))
        ->get()->getRowArray()
        ;
    }
    public function DeleteData($data){
        $this->db->table('tbl_krs_')
            ->where('id_krs_',$data['id_krs_'])
            ->delete($data);
    }
}
