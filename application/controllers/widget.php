<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Widget extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $scope = $this->uri->segment(2);

        $path = "/~rbriggs/index.php/widget/" . $scope;

        $this->config->set_item('cookie_path', $path);
        $this->load->library('session');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function get()
    {
        $this->output->set_output($this->session->userdata('test'));
    }

	public function set($cookie)
    {
        $this->session->set_userdata('test', $cookie);
        $this->output->set_output($cookie);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
