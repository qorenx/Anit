<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4
 * --------------------------------------------------------------------
 * Mod Panel
 *
 */

 namespace App\Controllers;

class AcPanel extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('templates/panelheader', $data);
		echo view('panel/acpanel');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
