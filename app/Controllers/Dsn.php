<?php

namespace App\Controllers;

use App\Models\ModelDsn;

class Dsn extends BaseController
{

public function __construct()
{
	helper('form');
	$this->ModelDsn = new ModelDsn();
}

	public function index()
	{
		$data = [
			'title' => 'Dosen',
			'dosen'=> $this->ModelDsn->DataDosen(),
			'isi'=>'v_dashboard_dsn'
		];
		return view('layout/v_wrapper',$data);
	}
}
