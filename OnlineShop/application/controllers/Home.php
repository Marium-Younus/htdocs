<?php
class Home extends CI_Controller
{

    public function Index()
    {
        $this->load->view('Index');
    }

    public function save()
	{
		$data=$this->input->post();
		$this->load->model('Crudmodel');
        if($this->Crudmodel->saveProduct($data))
										{
												
												$message='Record Saved Successfully :-)';
										}
										else
										{
												$message='Record Failed to Saved :-(';
										}

                       return redirect('Home/Index');
	}
	
	public function Display()
    {

		$this->load->model('Crudmodel');
		$records=$this->Crudmodel->showRecords();
		$this->load->view('ShowProduct',['records' => $records]);
      
    }
}


?>