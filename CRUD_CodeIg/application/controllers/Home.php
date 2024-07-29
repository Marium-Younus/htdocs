<?php

class Home extends CI_Controller
{
		//show record work
		public function AddCustomer()
		{
			//$this->load->helper('url');
			$this->load->model('Crudmodel');
			$records=$this->Crudmodel->getRecords();
			$this->load->view('AddCustomer',['records' => $records]);

		}
		public function create()
		{
			$this->load->view('CreateInfo');
		}
		//insert work
		public function save()
		{
				$this->form_validation->set_rules('customername', 'Customer Name', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
				$this->form_validation->set_rules('city', 'City', 'required');
				$this->form_validation->set_rules('imageupload', 'Image', 'required');
				$this->form_validation->set_rules('country', 'Country', 'required');
				$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
//====================================Imageupload Wokr
			
			

	//load library
	
	
	//Set the config
	$config['upload_path'] = './uploads/'; //Use relative or absolute path
	$config['allowed_types'] = 'gif|jpg|png'; 
	// $config['max_size'] = '100';
	// $config['max_width'] = '1024';
	// $config['max_height'] = '768';
	// $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended
	$this->load->library('upload',$config);
	//Initialize
	$this->upload->initialize($config);
	


                if ($this->form_validation->run() && $this->upload->do_upload())
                {
                	   $data=$this->input->post();
					   $this->load->model('Crudmodel');
					   $data= $this->upload->data();// fileupload detail provide this function
							$image_path = base_url("uploads/".$data["imageupload"].data['file_ext']);
						$data['Image']=$image_path;
						$file_name = $this->upload->Image;
		
						
	
                       					if( $this->Crudmodel->saveRecord($data))
										{
												//$this->session->set_flashdata('response', 'Record Saved Successfully :-)');
												$message='Record Saved Successfully :-)';
										}
										else
										{
												//$this->session->set_flashdata('response', 'Record Failed to Saved :-(');
												$message='Record Failed to Saved :-(';
										}

                       return redirect('Home/AddCustomer');
                }
                else
                {
                        //echo  validation_errors();
                	$this->load->view('CreateInfo');
                }
			

		}
		//update work
		public function edit($editid)
		{

				//echo $editid;
			$this->load->model('Crudmodel');
			$abc= $this->Crudmodel->getAllRecord($editid);
			print_r($abc);
			$this->load->view('update',['col'=>$abc]);
		}
		public function update($custid)
		{

				$this->form_validation->set_rules('customername', 'Customer Name', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('city', 'City', 'required');
				$this->form_validation->set_rules('country', 'Country', 'required');
				$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            if ($this->form_validation->run())
                {
                	   $data=$this->input->post();
                       $this->load->model('Crudmodel');
                       if($this->Crudmodel->updateRecord($custid,$data))
                       {
                       		$this->session->set_flashdata('response', 'Record Update Successfully :-)');
                       }
                       else
                       {
							$this->session->set_flashdata('response', 'Record Failed to Update :-(');
                       }
                       return redirect('Home/AddCustomer');
                }
                else
                {
                        //echo  validation_errors();
                	$this->load->view('update');
                }			
		}
		//delete work
		public function delete($custid)
		{
					//echo $custid;
			  $this->load->model('Crudmodel');
			  if($this->Crudmodel->deleterecord($custid))
			  {

					$this->session->set_flashdata('response', 'Record Deleted Successfully :-)');
			  }
			  else
			  {

					$this->session->set_flashdata('response', 'Failed to Delete Record :-(');
			  }
			  return redirect('Home/AddCustomer');
		}





}






?>