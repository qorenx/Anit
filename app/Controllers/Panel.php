<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4
 * --------------------------------------------------------------------
 * Mod Panel
 *
 */

 namespace App\Controllers;

class Panel extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('templates/header', $data);
		echo view('panel/panel');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
