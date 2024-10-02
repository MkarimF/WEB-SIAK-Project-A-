<?php 

namespace App\Models;

use CodeIgniter\Model;

class ModelDsn extends Model
{
    public function DataDosen()
    {
        return $this->db->table('tbl_dosen')
        ->where('nidn', session()->get('username'))
        ->get()->getRowArray();
    }

}
