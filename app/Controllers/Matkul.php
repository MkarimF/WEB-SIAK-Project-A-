<?php

namespace App\Controllers;

use App\Models\ModelMatkul;
use App\Models\ModelProdi;

class Matkul extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelMatkul = new ModelMatkul();
        $this->ModelProdi = new ModelProdi();
    }
    public function index()
	{
		$data = [
			'title' => 'Mata Kuliah',
            'prodi' =>  $this->ModelProdi->allData(),
			'isi'   =>'admin/matkul/v_matkul'
		];
		return view('layout/v_wrapper',$data);
	}
    public function detail($id_prodi)
	{
		$data = [
			'title' => 'Mata Kuliah',
            'prodi' =>  $this->ModelProdi->detail_data($id_prodi),
            'matkul' =>  $this->ModelMatkul->allDataMatkul($id_prodi),
			'isi'   =>'admin/matkul/v_detail'
		];
		return view('layout/v_wrapper',$data);
	}

    public function add($id_prodi)
    {
        if ($this->validate([
            'kode_matkul'=>[
                'label'=>'Kode Program Studi',
                'rules'=>'required|is_unique[tbl_matkul.kode_matkul]',
                'errors'=>[
                    'required'=> '{field} Wajib Diisi !!!',
                    'is_unique'=> '{field} sudah ada, masukan kode lain !!!'
                ]
                ],
            'mata_kuliah'=>[
                'label'=>'Mata Kuliah',
                'rules'=>'required',
                'errors'=>[
                    'required'=> '{field} Wajib Diisi !!!'
                ]
                ],
            'sks'=>[
                'label'=>'SKS',
                'rules'=>'required',
                'errors'=>[
                    'required'=> '{field} Wajib Diisi !!!'
                ]
                ],
            'smt'=>[
                'label'=>'Semester',
                'rules'=>'required',
                'errors'=>[
                    'required'=> '{field} Wajib Diisi !!!'
                ]
                ],
            'kategori'=>[
                'label'=>'Kategori',
                'rules'=>'required',
                'errors'=>[
                    'required'=> '{field} Wajib Diisi !!!'
                ]
                ],
        ])) {
            //jika ramah
            $smtr =$this->request->getPost('smt'); 
            if ($smtr == 1|| $smtr==3||$smtr==5||$smtr==7) {
                $semeter ='Ganjil';
            }else {
                $semeter ='Genap';
            }

            $data =[
				'kode_matkul'   => $this->request->getPost('kode_matkul'),
				'mata_kuliah'   => $this->request->getPost('mata_kuliah'),
				'sks'           => $this->request->getPost('sks'),
				'smt'           => $this->request->getPost('smt'),
                'semester'      => $semeter,
				'kategori'      => $this->request->getPost('kategori'),
                'id_prodi'      => $id_prodi,

			];
			$this->ModelMatkul->add($data);
			session()->setFlashdata('pesan','Data berhasil ditambahkan !!');
			return redirect()->to(base_url('matkul/detail/'.$id_prodi));
        }else {
            //jika tidack ramah
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('matkul/detail/'.$id_prodi));
        }
    }
    public function delete($id_prodi, $id_matkul) {
		$data = [
			'id_matkul'	=> $id_matkul,
		];
		$this->ModelMatkul->delete_data($data);
		session()->setFlashdata('pesan','data berhasil dihapus');
		return redirect()->to(base_url('matkul/detail/'.$id_prodi));
		}

}