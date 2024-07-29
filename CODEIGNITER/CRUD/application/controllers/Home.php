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
			$this->load->view('create');
		}
		//insert work
		public function save()
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
                	$this->load->view('create');
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