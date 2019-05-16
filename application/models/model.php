<?php

	class model extends CI_Model {

		public function save_account($data){
			$this->db->insert('users',$data);
			return $this->db->affected_rows();
		}
		
		public function check_valid($account,$pin){
			$this->db->select('pin');
			$this->db->from('users');
			$this->db->where('account', $account);
			$query = $this->db->get();
			
			if ($query->num_rows() == 1) {
				return true;
			} else {
				return false;
			}
		}

		public function information($account) {
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('account', $account);
			$query = $this->db->get();
			return $query->result();

		}

		public function useraccount($id) {
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_branch () {
			$this->db->select('*');
			$this->db->from('branch');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_part () {
			$this->db->select('*');
			$this->db->from('part');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function save($data){
			$this->db->insert('insurance',$data);
			return $this->db->affected_rows();
		}
		
	}

?>