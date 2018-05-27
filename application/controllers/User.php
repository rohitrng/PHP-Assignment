<?php
/**
* Rohit Jadhav
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');

	}

	public function index(){
		if ($this->session->userdata('user_id'))
			return redirect('Welcome');
		
		$this->load->view('Login');
	}

	public function login(){
        if ($this->input->post('email') == 'admin' ) {
        	$this->session->set_userdata('user_name','Admin');
        	return redirect('Admin/dashboard');
        } else {

	        $this->load->library('form_validation');

	        if ($this->form_validation->run('login')) {
	        	
	        $data = array('email'=>$this->input->post('email'),
				          'password'=>$this->input->post('password')
				          );
			$check = $this->user_m->check_login($data);
			if ($check) {

			    $this->session->set_userdata('user_id',$check);
				return redirect('Welcome');
			} else {
				$this->session->set_flashdata('login_failed','Invalid Username/Password.');
				return redirect('User');
				// echo 'Not Done Login!';
			}
		} else {
		       $this->load->view('Login');			
			}
	    }
	}

	public function sign_up(){
		$this->load->view('sign_up');
	}

	public function create_user(){
		$this->load->library('form_validation');

		if ($this->form_validation->run('sing_up')) {

		    $date = date_create($this->input->post('dob'));
	        $dateFrom = date_format($date,"m-d-Y");
			$data = array('u_username'=>$this->input->post('username'),
				          'u_email'=>$this->input->post('email'),
				          'u_password'=>$this->input->post('password') ,
				          'u_dob'=>$dateFrom ,
				          'u_mobile'=>$this->input->post('mobile') ,
				          'u_address'=>$this->input->post('address') ,
				          );
			$create = $this->user_m->create_user($data);

			$data = array('email'=>$this->input->post('email'),
			             'password'=>$this->input->post('password')
			             );
		    $check = $this->user_m->check_login($data);
		    
			if ($check) {
		    $this->session->set_userdata('user_id',$check);
			return redirect('Welcome');
			} else {
				$this->session->set_flashdata('Login_failed','Invalid Username/Password.');
				return redirect('User');
			}
		} else {
			$this->load->view('sign_up');	
		}
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
		return redirect('User');
	}

	public function admin_logout(){
		$this->session->unset_userdata('user_name');
		return redirect('User');
	}
}
?>