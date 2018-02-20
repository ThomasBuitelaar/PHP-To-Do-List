<?php
class Listings extends CI_Controller 
{
    public function view($page = 'lists')
    {
    	if(!file_exists(APPPATH.'views/listings/' . $page . '.php'))
    	{
    		show_404();
    	}
    	$data['title'] = ucfirst($page);

    	$this->load->view('templates/header');
    	$this->load->view('listings/' . $page, $data);
    	$this->load->view('templates/footer');
    }
}