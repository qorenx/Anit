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

	public function animeadd()
	{
		echo view('templates/header');
		echo view('panel/acp/animeadd');
		echo view('templates/footer');
	}

	public function movieadd()
	{
		echo view('templates/header');
		echo view('panel/acp/movieadd');
		echo view('templates/footer');
	}

	public function aepisodeadd()
	{
		echo view('templates/header');
		echo view('panel/acp/aepisodeadd');
		echo view('templates/footer');
	}

	public function mepisodeadd()
	{
		echo view('templates/header');
		echo view('panel/acp/mepisodeadd');
		echo view('templates/footer');
	}

	public function fansub()
	{
		echo view('templates/header');
		echo view('panel/acp/fansub');
		echo view('templates/footer');
	}

}
