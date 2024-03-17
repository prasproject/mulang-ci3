<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/promo
	 *	- or -
	 * 		http://example.com/index.php/promo/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/promo/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    function __construct()
    {
        // Construct the parent class
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
