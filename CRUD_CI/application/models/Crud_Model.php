<?php

class Crud_Model extends CI_Model{


    public function getrecords(){

        $query=$this->db->get('customertable');
        if($query->num_rows()>0)
        {
                return $query->result();

        }

    }

    public  function saveRecord($data)
		{
			return $this->db->insert('CustomerTable', $data);
        }
        

    public function deleteRecord($id)
    {

        return $this->db->delete('CustomerTable',array('id'=>$id));
    }

    public function getallrecord($id)
    {
        $query=$this->db->get_where('CustomerTable',array('id'=>$id));
        if($query->num_rows()>0)
        {
                return $query->row();

        }

    }

    public function updateRecord($id,$data)
    {
        return $this->db->where('id',$id)
                        ->update('CustomerTable',$data);

    }
}


?>