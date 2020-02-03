<?php
	class model extends CI_Model {

		public function save_account($data)
		{
			$this->db->insert('users',$data);
			return $this->db->affected_rows();
		}
		
		public function maturity(){
			$this->db->select('*');
			$this->db->from('insurance');
			$this->db->order_by('maturity', 'asc');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function notification($data) {
			$this->db->insert('notification',$data);
			return $this->db->affected_rows();
		}

		public function updatedate($id, $date) {
		$data = array(
        'maturity' => $date,
        'status' => "Updated"
		);
		$this->db->where('id', $id);
		$this->db->update('insurance', $data);
		}

		public function redirect($id) {
			$this->db->select('insurance.id,insurance.account,insurance.amount,branch.branchnumber,insurance.part,insurance.maturity,insurance.status');
			$this->db->from('insurance');
			$this->db->join('branch', 'insurance.branch = branch.id');
			$this->db->where('insurance.id', $id);
			$this->db->order_by('insurance.id');
			$result    =  $this->db->get();

			return $result->result_array();
		}


		public function checknotificationid($id) {
			$this->db->select('insuranceid');
			$this->db->from('notification');
			$this->db->where('insuranceid', $id);
			$query = $this->db->get();
			
			if ($query->num_rows() == 1) {
				return false;
			} else {
				return true;
			}
		}

		public function search($search){
			$this->db->select('lastname');
			$this->db->from('users');
			$this->db->like('lastname', $search, 'after');
			$query = $this->db->get();
			return $query->result_array();
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


		public function getnotifications() {
			$this->db->select('*');
			$this->db->from('insurance');
			$this->db->join('notification', 'insurance.id=notification.insuranceid');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function query() {
			$this->db->select('*', 'insurance.id');
			$this->db->from('insurance');
			$this->db->join('branch', 'insurance.branch = branch.id', 'inner');
			$result    =  $this->db->get();
			return $result->result_array();
		}

		public function deletenotification($id){
			$this->db->where('id', $id);
			$this->db->delete('notification');
		}

		public function deletebyinsuranceid($id) {
			$this->db->where('insuranceid', $id);
			$this->db->delete('notification');
		}

		public function filter($month, $offset, $limit, $type) {
			$this->db->select('insurance.id,insurance.account,insurance.amount,branch.branchnumber,insurance.part,insurance.maturity,insurance.status');
			$this->db->from('insurance');
			$this->db->join('branch', ' branch.id = insurance.branch');
			$this->db->order_by('insurance.id');
			if(!empty($month)) {
			$monthnumber = date('Y-m', strtotime($month));
			$this->db->like('maturity', $monthnumber);
			}
			$this->db->like('status', $type);
			$this->db->limit($limit, $offset);
			$result    =  $this->db->get();
		
			return $result->result_array();
		}

		public function filterrow($month,$type) {

			$this->db->select('*');
			$this->db->from('insurance');
			$this->db->join('branch', 'insurance.branch = branch.id');
		
			if(!empty($month)) {
			$monthnumber = date('Y-m', strtotime($month));
			$this->db->like('maturity', $monthnumber);
			}
			$this->db->like('status', $type);
		
			$result    =  $this->db->get();
			
			return $result->num_rows();
		}

		 public function view_all_users($limit,$offset){
			$this->db->select('*');
			$this->db->from('insurance');
			$this->db->join('branch', 'insurance.branch = branch.id');
			$this->db->limit($limit,$offset);
			$result    =  $this->db->get();

			return $result->result_array();
		 }


		 public function rowcount() {
		 	$this->db->select('*');
			$this->db->from('insurance');
			$result    =  $this->db->get();
			
			return $result->num_rows();
		 }

		
		public function get_branch () {
			$this->db->select('*');
			$this->db->from('branch');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function save($data){
			$this->db->insert('insurance',$data);
			return $this->db->affected_rows();
		}
		
	}
?>