<?php

/**
 * ------------------
 * CODEIGNITER 4 -
 * ------------------
 *
 * admin and mod same page panel/panel.php
 * 
 * 
 * 
 */

namespace App\Controllers;


class Anime extends BaseController
{

	public function panel()
	{
		echo view('templates/header');
		echo view('panel/panel');
		echo view('templates/footer');
	}
}
