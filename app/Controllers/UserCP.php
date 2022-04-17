<?php

/**
 * --------------------------------------------------------------------
 * CODEIGNITER 4
 * --------------------------------------------------------------------
 *
 * 
 * 
 *
 * 
 */

namespace App\Controllers;

class UserCP extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('frontend/templates/header', $data);
		echo view('frontend/usercp');
		echo view('frontend/templates/footer');
	}

	//--------------------------------------------------------------------

}
