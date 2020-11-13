<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navigation extends CI_Controller {
	public function index(){
	if (isset($_SESSION['usertype'])==false){
		$this->load->model('User');
		$this->job = $this->User->getJob();
		$data['job'] = $this->job;
		$this->load->view('index', $data);
		}
		else if(isset($_SESSION['usertype'])==true){
		$this->load->model('AuthLogin');
		$this->userdetails=$this->AuthLogin->login($_SESSION['email']);
		$this->load->model('User');
		$this->job = $this->User->getJob();
		$data['job'] = $this->job;
		$data['userdata']=$this->userdetails;
		if ($_SESSION['usertype']=='normal') {
			redirect(base_url().'Normal',$data);
		}
		elseif ($_SESSION['usertype']=='admin') {
			redirect(base_url().'Admin',$data);
			}
		elseif ($_SESSION['usertype']=='organization') {
			redirect(base_url().'Organization',$data);
			}
		}
		else{
			$this->load->view('index', $data);
		}
	}

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect(base_url());
	}

	public function passwordRest(){
		$this->load->view('interface/passwordreset');
	}

	public function resetPassword(){
		$email = $this->input->post('email');
		$this->load->model('AuthLogin');
		$this->userdetails=$this->AuthLogin->login($email);
		$da= $this->userdetails;
		$data['user']= $this->userdetails;
		if ($da == null) {
			$this->session->set_flashdata('message','Email do not exist, please register first');
            redirect(base_url().'Navigation/passwordRest');
		}
		else{
				// $to = $email;
				// $subject = "Password Reset";
				// $txt = "<a href='www.VAS.com/Navigation/resetPassword' attibutes='link'>Click here to reset password</a>";
				// $headers = "From: vaccancyannouncement@gmail.com" . "\r\n" .
				// "CC: vas1@gmail.com";
				// mail($to,$subject,$txt,$headers);
			$this->load->view('interface/passwordchange',$data);
		}
	}

	public function updatePassword(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('AuthRegister');
		$this->userdetails=$this->AuthRegister->passwordUpdate($email, $password);
		$message['message'] = $this->userdetails;
		$this->session->set_flashdata('message',$message['message']);
        redirect(base_url());
	}

	public function getJobDetails(){
		$jobid = $this->input->get('viewjob_id');
		$this->load->model('User');
		$this->job = $this->User->getDetailsJob($jobid);
		$data['job'] = $this->job;
		$this->load->view('interface/jobdetails',$data);
	}	

	public function about(){
		$this->load->view('interface/about');
	}
	public function contact(){
		$this->load->view('interface/contact');
	}
}
