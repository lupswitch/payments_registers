<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
				/*
					title : title of page (String)
					view : view name (String)
					scripts : scripts of the template (array)
				*/
				$query = $this->db->query('SELECT * FROM pays');
        $data = [
            'title' => 'Inicio',
            'view' => 'main',
						'pays' => $query->result_array()
        ];
				//$this->load->view('templates/template',$data);
        $this->parser->parse('templates/template',$data);

	}

}
