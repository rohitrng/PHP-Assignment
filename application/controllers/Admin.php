<?php
/**
* Rohit Jadhav
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
    if (!$this->session->userdata('user_name'))
    return redirect('dashboard');

		$this->load->model('User_m');
	}

	public function dashboard(){
        $this->load->library('pagination');
        $demo = $this->uri->segment(3) + 5;
        $config = [
                  'base_url' 		=> base_url('Admin/dashboard'),
                  'per_page' 		=> 5,
                  'total_rows' 		=> $this->User_m->num_rows(),
                  'next_link' 		=> '<a href="'. base_url('Admin/dashboard').'/'.$demo .'" class="loadMoreBtn">Load More +</a>',
                  'first_link'  	=> FALSE,
                  'last_link' 		=> FALSE,
                  'prev_link' 		=> '',
                  'display_pages' 	=> FALSE,

        ];
        $this->pagination->initialize($config);
 
		$user_list = $this->User_m->user_list( $config['per_page'],$this->uri->segment(3));
		$this->load->view('Dashboard',['user_list'=>$user_list]);
	}

  public function search(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('query','Query','required');
    if (! $this->form_validation->run()) {
        $this->dashboard();
    } else {
        $data = $this->input->post('query');
        return redirect("Admin/search_result/$data");
    } 
  }

  public function search_result( $data ){
        $this->load->library('pagination');
        $demo = $this->uri->segment(4) + 5;
        $config = [
                  'base_url'    => base_url("Admin/search_result/$data"),
                  'per_page'    => 5,
                  'total_rows'    => $this->User_m->count_search_results($data),
                  'next_link'     => '<a href="'. base_url("Admin/search_result/$data").'/'.$demo .'" class="loadMoreBtn">Load More +</a>',
                  'first_link'    => FALSE,
                  'last_link'     => FALSE,
                  'prev_link'     => '',
                  'display_pages'   => FALSE,

        ];
        $this->pagination->initialize($config); 

        $user_list = $this->User_m->search( $data,$config['per_page'],$this->uri->segment(4));
        $this->load->view('Search_result',['user_list'=>$user_list]);
  }

  public function date_search(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('dateFrom','Query','required');
    $this->form_validation->set_rules('dateTo','Query','required');
    if (! $this->form_validation->run()) {
        $this->dashboard();
    } else {
        $dateFromo = $this->input->post('dateFrom');
        $dateTot = $this->input->post('dateTo');
        $datef = date_create($dateFromo);
        $datet = date_create($dateTot);
        $dateFrom = date_format($datef,"m-d-Y");
        $dateTo = date_format($datet,"m-d-Y");
        return redirect("Admin/date_search_result/$dateFrom/$dateTo");
    }
  }

  public function date_search_result($dateFrom,$dateTo){
        $this->load->library('pagination');
        $demo = $this->uri->segment(5) + 5;
        $config = [
                  'base_url'    => base_url("Admin/date_search_result/$dateFrom,$dateTo"),
                  'per_page'    => 5,
                  'total_rows'    => $this->User_m->count_date_search_results($dateFrom,$dateTo),
                  'next_link'     => '<a href="'. base_url("Admin/date_search_result/$dateFrom/$dateTo").'/'.$demo .'" class="loadMoreBtn">Load More +</a>',
                  'first_link'    => FALSE,
                  'last_link'     => FALSE,
                  'prev_link'     => '',
                  'display_pages'   => FALSE,

        ];
        $this->pagination->initialize($config); 

        $user_list = $this->User_m->date_search( $dateFrom,$dateTo,$config['per_page'],$this->uri->segment(5));
        $this->load->view('Date_search_result',['user_list'=>$user_list]);
  }

  public function edit($id){
        $user_list = $this->User_m->find($id);
        if ($user_list) {
           $this->load->view('edit',['user_list'=>$user_list]);
         } else {
           echo 'not';
         }
  }

  public function update(){
         $data = array('u_id' => $this->input->post('id'),
                       'u_username' => $this->input->post('username'),
                       'u_email' => $this->input->post('email'),
                       'u_mobile' => $this->input->post('mobile')
                       );
         $update = $this->User_m->update($data);
         if ($update) {
             return redirect('Admin/Dashboard');
         } else {
             return redirect('Admin/edit'); 
         }
  } 

  public function delete($id){
        $delete = $this->User_m->delete($id);
        if ($delete) {
          return redirect('Admin/dashboard');
        } else {
          return redirect('Admin/dashboard');
        }
    }

  public function excel_to()
  {
    $this->load->model("User_m");
    $this->load->library("excel");
    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $table_columns = array("Id", "User Name", "Email", "Mobile", "Address");

    $column = 0;

    foreach($table_columns as $field)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
      $column++;
    }

    $employee_data = $this->User_m->getdata();

    $excel_row = 2;

    foreach($employee_data as $row)
    {
      $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->u_id);
      $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->u_username);
      $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->u_email);
      $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->u_mobile);
      $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->u_address);
      $excel_row++;
    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="User Data.xls"');
    $object_writer->save('php://output');
  }
}
?>