<?php 
class Admin extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		if (isset($_SESSION['email'])== false && isset($_SESSION['utype'])==false){
			redirect(base_url());
		}
		$this->load->model('AuthLogin');
		$this->userdetails = $this->AuthLogin->login($_SESSION['email']);
		$data['userdata'] = $this->userdetails;
		if ($_SESSION['usertype'] == 'normal'){
				redirect(base_url().'Normal');			
		}
		else if($_SESSION['usertype'] == 'organization'){
				redirect(base_url().'Organization');
		}
	}

    public function index()
    {
        $data['userdata'] = $this->userdetails;
        $this->load->view('admin/index', $data);
    }

    public function profile()
    {
        $data['userdata'] = $this->userdetails;
        $this->load->view('admin/profileupdate', $data);
    }

    public function showprofile()
    {
        $data['userdata'] = $this->userdetails;
        $this->load->view('admin/showprofile', $data);
    }
}
?>