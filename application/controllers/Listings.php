<?php
class Listings extends CI_Controller 
{
    public function view($list = 'lists')
    {
    	if(!file_exists(APPPATH.'views/listings/' . $list . '.php'))
    	{
    		show_404();
    	}
    	$data['title'] = ucfirst($list);

    	$this->load->view('templates/header');
    	$this->load->view('listings/' . $list, $data);
    	$this->load->view('templates/footer');
    }
}