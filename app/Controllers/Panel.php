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

		echo view('templates/panelheader', $data);
		echo view('panel/panel');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
