<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controllers extends CI_Controller {
	public function index()
	{
    if($this->isadmin()){
      //показать админ панель
    }
	}

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

  public function countvisitclub($data_begin='2018-03-08',$data_end = '2019-08-20')
  {
    $this->load->model('Statistic_model');
    $result = $this->Statistic_model->get_sections($data_begin,$data_end);
    print_r($result);
    $i = 0;
    foreach ($result as  $value) {
      $data['name'][$i] = $value->name;
      $data['count'][$i] = $value->kol;
      $i++;
    }
  }
  function change_input($month_on) {
   switch ($month_on) {
    case '01':
     $month_on = "Январь";
     break;
    case '02':
     $month_on = "Февраль";
     break;
    case '03':
     $month_on = "Март";
     break;
    case '04':
     $month_on = "Апрель";
     break;
    case '05':
     $month_on = "Май";
     break;
    case '06':
     $month_on = "Июнь";
     break;
    case '07':
     $month_on = "Июль";
     break;
    case '08':
     $month_on = "Август";
     break;
    case '09':
     $month_on = "Сентябрь";
     break;
    case 10:
     $month_on = "Октябрь";
     break;
    case 11:
     $month_on = "Ноябрь";
     break;
    case 12:
     $month_on = "Декабрь";
     break;
   }
   return $month_on;
  }
  public function getcountvisitclub($id_club,$data_begin='2018-03-08',$data_end ='2019-08-20')
  {

    $this->load->model('Statistic_model');
    list($on_y,$on_m,$on_d) = explode("-",$data_begin);
    list($off_y,$off_m,$off_d) = explode("-",$data_end);
    $g = 0;
    for ($i=$on_y; $i <=$off_y ; $i++) {
      if($i==$on_y)
      {
        $l=$on_m;
      }
      else
      {
      $l=1;
      }
      if($i==$off_y)
      {
        $k=$off_m;
      }
      else {

          $k=12;
        }

      for ($j=$l; $j <=$k ; $j++) {

        $result = $this->Statistic_model->get_statistic($id_club,$j,$i);
         $data['count'][$g] = $result[0]->kol;

        $f = $this->change_input($j);
        $data['date'][$g] = $f. " ". $i;
        $g++;
      }
    }
    print_r($data);
  }

  public function countvisitsection($id,$data_begin='2018-03-08',$data_end ='2019-08-20')
  {
    $this->load->model('Statistic_model');
    $i = 0;
    $result = $this->Statistic_model->get_statistic1($id,$data_begin,$data_end);
    foreach ($result as $value) {
      $data['name_sections'][$i] = $value;
      $data['count'][$i] = $value;
    }
    print_r($result);
  }

	public function getcentername($id){
		$this->load->model('Igor_model');
		$data['name_center'] = $this->Igor_model->get_club_info1($id);
		$data['trainers'] = $this->Igor_model->get_club_info2($id);
		$data['section'] = $this->Igor_model->get_club_info3($id);

		$this->get_header();
		$this->load->view('center_info_view', $data);
		$this->load->view('footer_view');

	  // private function isadmin()
	  // {
	  //   if ($_SESSION['admin_flag'] == 0) {
	  //   $this->load->view('errors/html/index.html');
	  //   }
	  //   else{
	  //     return true;
	  //   }
	  // }
	}

	public function my_statistick(){
		$this->get_header();
		$this->load->view('statistick_view');
		$this->load->view('footer_view');
	}
}
?>
