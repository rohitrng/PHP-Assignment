<?php
if (!defined ('BASEPATH')) exit ('No direct access allowed');
class Export extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//$this->load->library(array('table','form_validation'));
		//$this->load->helper(array('form','url'));
		$this->load->model("User_m");
	}
		function index()
	{
		$this->load->library('export');
		$sql = $this->User_m->getall();
		$this->export->to_excel($sql, 'nameForFile'); 
	}
}
	?>