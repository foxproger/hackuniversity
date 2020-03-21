<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Section_model extends CI_Model {

		public function get_sections()
		{
		  $this->load->database();
		//	print_r($this->db->query("SELECT id_vk FROM users WHERE id_vk='$id_vk'")->result()[0]->id_vk->count());
		  $result=$this->db->query("SELECT section.id,club.name AS club_name,section.name AS section_name,club.address,section.rating FROM section,club WHERE section.id_club=club.id ORDER BY section.rating DESC")->result();
      return $result;
	}
}
?>
