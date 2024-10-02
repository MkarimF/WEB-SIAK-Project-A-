<?php

namespace App\Controllers;

use App\Models\ModelKrs;

class Krs extends BaseController
{

public function __construct()
{
    $this->ModelKrs = new ModelKrs();
}

	public function index()
	{
        $mhs = $this->ModelKrs->DetailMhs();
		$data = [
			'title' => 'Kartu Rencana Studi(KRS)',
            'mhs'=> $this->ModelKrs->DataMhs(),
            'matkul_ditawarkan'=> $this->ModelKrs->MatkulDitawarkan(),
            'data_matkul'=>$this->ModelKrs->DataKrs($mhs['id_mhs']),
			'isi'=>'mhs/krs/v_krs'
		];
		return view('layout/v_wrapper',$data);
	}

    public function tambah_matkul($id_matkul)
    {
        $mhs=$this->ModelKrs->DataMhs();
        $id_matkull = $this->ModelKrs->MatkulDitawarkan();
        $data = [
            'id_matkul'=>$id_matkul,
            'nim'=>$mhs['nim']
        ];
        $this->ModelKrs->TambahMatkul($data);
        session()->setFlashdata('pesan','Data berhasil Ditambahkan !!');
        return redirect()->to(base_url('krs'));
    }
    public function delete($id_krs) {
		$data = [
			'id_krs_'	=> $id_krs,
		];
		$this->ModelKrs->DeleteData($data);
		session()->setFlashdata('pesan','data berhasil dihapus');
		return redirect()->to(base_url('krs'));
		}

    public function print()
    {
         $mhs = $this->ModelKrs->DetailMhs();
        $data=[
            'title' => 'Print KRS',
            'mhs'=> $this->ModelKrs->DataMhs(),
            'data_matkul'=>$this->ModelKrs->DataKrs($mhs['id_mhs']),
        ];
        return view('mhs/krs/v_print_krs',$data);
    }
}
