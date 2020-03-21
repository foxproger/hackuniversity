<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Igor_model extends CI_Model {

		public function get_club_info1($id_club)
    {
      $this->load->database();
      $result=$this->db->query("SELECT name,id FROM club WHERE club.id='$id_club'")->result();
      return $result;
    }

    public function get_club_info2($id_club)
    {
      $this->load->database();
      $result=$this->db->query("SELECT teacher.id,teacher.name,teacher.sername,teacher.otch,club.name AS club_name,section.name AS section_name,club.address,teacher.rating FROM club,teacher,section WHERE teacher.id_section=section.id AND section.id_club=club.id AND club.id='$id_club' ORDER BY teacher.rating DESC")->result();
      return $result;
    }

    public function get_club_info3($id_club)
    {
      $this->load->database();
      $result=$this->db->query("SELECT section.id,section.name FROM club,section WHERE club.id='$id_club' AND section.id_club=club.id")->result();
      return $result;
    }

    public function get_club_info4($id_section)
    {
      $this->load->database();
      $result=$this->db->query("SELECT section.name FROM section WHERE  section.id='$id_section'")->result();
      return $result;
    }

    public function get_club_info5($id_section)
    {
      $this->load->database();
      $result=$this->db->query("SELECT people.id,people.name,people.sername,whowhere.rating FROM people,whowhere,section WHERE whowhere.id_people=people.id AND section.id='$id_section' AND whowhere.id_section=section.id ORDER BY whowhere.rating DESC")->result();
      return $result;
    }

    public function add_record($id_user,$id_section)
    {
      $this->load->database();
      $result=$this->db->query("INSERT INTO whowhere(id_people,id_section,rating) VALUES ('$id_user','$id_section',4)")->result();
      return $result;
    }

  }
  ?>
