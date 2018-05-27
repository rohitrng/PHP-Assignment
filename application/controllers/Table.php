<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Table_model','person');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Table_view');
	}

	public function ajax_list()
	{
		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->u_username;
			$row[] = $person->u_email;
			$row[] = $person->u_mobile;
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="View" onclick="edit_person('."'".$person->u_id."'".')"><i class="glyphicon glyphicon-eye-open"></i> Edit</a>';
			$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->u_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						//"draw" => $_POST['draw'],
						//"recordsTotal" => $this->person->count_all(),
						//"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}
