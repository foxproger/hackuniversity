<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Personal_controllers extends CI_Controller
{
	function get_header(){
	 if (isset($_SESSION['first_name'])) {
		 $data['userData'] = "<a class='nav-link p-0' href='".base_url()."Personal_controllers/personal/".$_SESSION['id']."' >
										 <span class='mx-2'>" .$_SESSION['first_name']. " ".  $_SESSION['last_name'] . "</span>
										 <img src='".$_SESSION['photo_big']."' class='rounded-circle z-depth-0'
											 alt='avatar image' height='50'>
									 </a>";
		 $this->load->view('head_view',$data);
	 }
	 else {
		 $data['userData'] =  '							<a class="nav-link p-0" href="http://oauth.vk.com/authorize?client_id=6996347&amp;redirect_uri=http://localhost/balthack/Registration_controllers/&amp;response_type=code">
										 <span class="mx-2">Войти в личный кабинет</span>
										 <img src="https://st2.depositphotos.com/8440746/11967/v/950/depositphotos_119670044-stock-illustration-user-icon-man-profile-businessman.jpg" class="rounded-circle z-depth-0"
											 alt="avatar image" height="50">
									 </a>';
									 $this->load->view('head_view',$data);
	 }
	}

	public function personal($id)
	{
    $id_user = $id;
    $this->load->model('Personal_model');
		$data['personal'] = $this->Personal_model->get_personal_data($id_user);
		$data['achiv'] = $this->Personal_model->for_achivment($id_user);
		$data['sections'] = $this->Personal_model->show_list($id_user);

		$this->load->view('head_view');
    $this->load->view('personal_view',$data);
		$this->load->view('footer_view');



   }

   	public function updateinfo()
    {
				$info=$this->input->get('info');
				$id=$this->input->get('id');
      $this->load->model('Personal_model');
      $this->Personal_model->updateinfo($info,$id);
      echo "Успешно";
    }
		public function addvisit()
		{
			$id_section=$this->input->get('id_section');
			$id=$this->input->get('id');
			$this->load->model('Personal_model');
      $this->Personal_model->updatevisit($id_section,$id);
		}

		public function showvisit()
		{
			$id_section=$this->input->get('info');
			$id=$this->input->get('id');
			$this->load->model('Personal_model');
			$result['result']=$this->Personal_model->show_visit($id_section,$id);
			$this->load->view('list_visit',$result);
		}
		public function getcentername($id)
		{
			$this->load->model('Igor_model');
			$data['name_center'] = $this->Igor_model->get_club_info1($id);
			$data['trainers'] = $this->Igor_model->get_club_info2($id);
			$data['section'] = $this->Igor_model->get_club_info3($id);
			print_r($data);
		}
		public function getstudent($id)
		{
			$this->load->model('Igor_model');
			$data['name_sections'] = $this->Igor_model->get_club_info4($id);
			$data['pepolinsection'] = $this->Igor_model->get_club_info5($id);

			$this->get_header();
			$this->load->view('section_view', $data);
			$this->load->view('footer_view');
		}
		public function addrecord($id_user,$id_section)
		{
			$this->load->model('Igor_model');
	 		$this->Igor_model->add_record($id);
		}

		public function teacher($id) {
			$this->load->model('Igor_model');
			$data['trainers'] = $this->Igor_model->get_club_info2($id);
			$this->get_header();
			$this->load->view('teacher_view',$data);
			$this->load->view('footer_view');
		}

 }
?>
