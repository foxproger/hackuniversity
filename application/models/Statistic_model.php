<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Statistic_model extends CI_Model
  {

		public function get_sections($data_begin,$data_end)
      {

        $this->load->database();
         $result=$this->db->query("SELECT club.id,club.name,COUNT(visit.id) AS kol FROM visit,club,section WHERE visit.id_section=section.id AND section.id_club=club.id AND visit.data BETWEEN '".$data_begin." 00:00:00' AND '".$data_end." 00:00:00' GROUP BY club.id  ")->result();
         return $result;
      }
			public function get_statistic($id_club,$date_mouth,$date_year)
				{
					$this->load->database();
					 $result=$this->db->query("SELECT club.id,club.name,COUNT(visit.id) AS kol FROM visit,club,section WHERE club.id='$id_club' AND visit.id_section=section.id AND section.id_club=club.id AND visit.data BETWEEN '".$date_year."-".$date_mouth."-01 00:00:00' AND '".$date_year."-".$date_mouth."-30 00:00:00'")->result();
					 return $result;
				}

				public function get_statistic1($id_club,$data_begin,$data_end)
				{
					$this->load->database();
	         $result=$this->db->query("SELECT section.name,COUNT(visit.id) AS kol FROM visit,club,section WHERE visit.id_section=section.id AND section.id_club=club.id AND club.id='$id_club' AND visit.data BETWEEN '".$data_begin." 00:00:00' AND '".$data_end." 00:00:00' GROUP BY section.name  ")->result();
	         return $result;
				}

  }

?>
