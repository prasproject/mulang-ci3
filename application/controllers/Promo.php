<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('mulang');
    }

	public function index($lang = null)
	{
        $lang = mulang($lang);
		$data['lang'] = $lang;
		$data['ts'] = load_mulang($lang);
        $this->load->view('promo', $data);
	}
}
