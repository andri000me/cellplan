<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GMaps extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('form_validation','session','googlemaps'));
		$this->load->model(array('kel_model','tower_model','member_model'));
		$this->pegawai_id = $this->session->userdata('pegawai_id');
		$this->pegawai_nama = $this->session->userdata('pegawai_nama');
		if(!$this->pegawai_id)
		{
			redirect('member');
		}

		$this->_init();
		$this->_maps();
	}
	public function index()
	{
		$marker = array();
		$marker['position'] = '-2.146599, 106.12125';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();
		$data["ket"] = "";
		$this->load->section('navbar', 'components/navbar');
		$this->load->view('components/maps', $data);
	}


	private function _init()
	{
		$this->output->set_title('Cellplan');
		$this->output->set_template('default');
		$this->load->css('public/css/app.css');
		$this->load->js('public/js/app.js');
	}

	private function _maps()
	{
		$config['center'] = '-2.146599, 106.12125';
		$config['zoom'] = '12';
		$this->googlemaps->initialize($config);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */