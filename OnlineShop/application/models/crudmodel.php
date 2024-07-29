<?php
class Crudmodel extends CI_model
{	
    //=============================================InsertRecord
    public function saveProduct($data)
		{	
      //=================================================================File Uploading Work  =================================================
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = 2000;
      $config['max_width'] = 1500;
      $config['max_height'] = 1500;
      $this->load->library('upload', $config);
      if($this->upload->do_upload('pro_image'))
      {
        $uploadData = $this->upload->data();
        $picture = $uploadData['file_name'];
      }
      else
      {

        $picture = '';
      }
     //================================================================= XXX   =================================================

        $data = array(
                        'P_Name' => $this->input->post('pro_name'),
                        'P_Image' =>$picture,
                        'P_Price' => $this->input->post('pro_price')
                        );
      
     
          
          return $this->db->insert('Producttable', $data);
			
    }
    //===========================================================Show Product
    public function showRecords()
		{
			//$this->load->libraries('database');
			$query= $this->db->get('Producttable');
			if($query->num_rows()>0)
			{
				return $query->result();
			}
		}


}



?>