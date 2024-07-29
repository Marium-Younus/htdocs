<?php

class CrudModel extends CI_model
{

     //===========================================Select Work
    public function ShowRecord()
    {
        //$this->load->libraries('database'); or $autoload['libraries'] = array('database');

        $query=$this->db->get('customertable'); //select * from customer_table
        if($query->num_rows() > 0)
        {

            return $query->result();
        }

    }
    //===========================================Insert Work
    public function InsertRecord($data)
    {
        return $this->db->insert('customertable',$data);

    }

    //===========================================Delete Work
    public function DeleteRecord($custid)
    {
        return $this->db->delete('customertable',array('id'=>$custid));

    }
     //===========================================update Work

     public function getallrecord($cusid)
     {
          $query=  $this->db->get_where('customertable',array('id'=>$cusid));
          if($query->num_rows() >0 )
          {
            return $query->row();

          }

     }
     public function updaterecord($cusid,$data)
     {
       return $this->db->where('id',$cusid)
                        ->update('customertable',$data);
                  
                        

     }
}



?>