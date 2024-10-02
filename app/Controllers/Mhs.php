<?php

namespace App\Controllers;

use App\Models\ModelKrs;

class Mhs extends BaseController
{

public function __construct()
{
	$this->ModelKrs = new ModelKrs();
}

	public function index()
	{
		$data = [
			'title' => 'Mahasiswa',
			'mhs'=> $this->ModelKrs->DataMhs(),
			'isi'=>'v_dashboard_mhs'
		];
		return view('layout/v_wrapper',$data);
	}
}
