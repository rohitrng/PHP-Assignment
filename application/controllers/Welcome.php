<?php
/**
* Rohit Jadhav
*/
class Welcome extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata['user_id']) {
			return redirect('User');
		}
	}

	public function index(){
		$this->load->model('user_m');
		$user_id = $this->session->userdata['user_id'];
		$data['username'] = $this->user_m->user_data($user_id);
		$this->load->view('Welcome',$data);
	}
}
?>