<?php
class Crudmodel extends CI_model
{	
		public function getRecords()
		{
			//$this->load->libraries('database');
			$query= $this->db->get('CustomerTable');
			if($query->num_rows()>0)
			{
				return $query->result();
			}
		}
		public function saveRecord($data)
		{
			return $this->db->insert('CustomerTable', $data);
		}
		public function getAllRecord($custid)
		{
			$query = $this->db->get_where('CustomerTable', array('id' => $custid));
				if($query->num_rows() > 0)
				{
					return $query->row();
				}
		}
		public function updateRecord($custid ,$data)
		{
		return	$this->db->where('id',$custid)
						->update('CustomerTable',$data);
		}
		public function deleterecord($custid)
		{
			return $this->db->delete('CustomerTable',array('id'=>$custid));


		}

}

?>