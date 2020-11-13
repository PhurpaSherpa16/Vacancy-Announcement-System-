<?php
class Job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		if (isset($_SESSION['email'])== false && isset($_SESSION['utype'])==false){
			redirect(base_url());
		}
		$this->load->model('AuthLogin');
		$this->userdetails = $this->AuthLogin->login($_SESSION['email']);
		$data['userdata'] = $this->userdetails;
		if ($_SESSION['usertype'] == 'admin'){
				redirect(base_url().'Admin');			
		}
		else if($_SESSION['usertype'] == 'normal'){
				redirect(base_url().'Normal');
		}
    }

    public function postjob(){
    	$uid = $this->input->post('uid');
    	$jobtitle = $this->input->post('jobtitle');
    	$jobtype = $this->input->post('jobtype');
    	$qualification = $this->input->post('qualification');
    	$experience = $this->input->post('experience');
    	$position = $this->input->post('position');
    	$vechile = $this->input->post('vechile');
    	$deadline = $this->input->post('deadline');
    	$jobdescription = $this->input->post('jobdescription');
    	$date = $this->input->post('date');
        $salary = $this->input->post('salary');
        $programs = $this->input->post('programs');

    	$filetype=pathinfo(basename($_FILES["jobpdffile"]["name"]),PATHINFO_EXTENSION);
    	$jobpdffile =$jobtitle.'_'.$jobtype. '_jobs_full_details_PostedByUserID'.$uid.'_on_'.$date.'.'.'pdf';
    	$upload="assets/pdf/".$jobpdffile;
    	move_uploaded_file($_FILES['jobpdffile']['tmp_name'], $upload);

    	$this->load->model('Jobs');
    	$data=$this->Jobs->registerJobs($uid, $jobtitle, $jobtype, $qualification, $experience, $position, $vechile, $deadline, $jobdescription, $jobpdffile, $date, $salary, $programs);
    	$message['message'] = $data;
    	$this->session->set_flashdata('message',$message['message']);
    	redirect(base_url().'Organization');

    }

    public function jobUpdate(){
        $uid = $_SESSION['uid'];
        $jobtitle = $this->input->post('jobtitle');
        $jobtype = $this->input->post('jobtype');
        $qualification = $this->input->post('qualification');
        $experience = $this->input->post('experience');
        $position = $this->input->post('position');
        $vechile = $this->input->post('vechile');
        $deadline = $this->input->post('deadline');
        $jobdescription = $this->input->post('jobdescription');
        $date = $this->input->post('date');
        $salary = $this->input->post('salary');
        $programs = $this->input->post('programs');
        $jid = $this->input->post('jid');
        $update = $this->input->post('update');


        $filetype=pathinfo(basename($_FILES["jobpdffile"]["name"]),PATHINFO_EXTENSION);
        $jobpdffile = $jobtitle.'_'.$jobtype. '_jobs_full_details_UpdateByUserID_'.$uid.'_on_'.$update.'.'.'pdf';
        $upload="assets/pdf/".$jobpdffile;
        move_uploaded_file($_FILES['jobpdffile']['tmp_name'], $upload);

        $this->load->model('Jobs');
        $data=$this->Jobs->updateJob($jobtitle, $jobtype, $qualification, $experience, $position, $vechile, $deadline, $jobdescription, $jobpdffile, $date, $salary, $programs, $jid);
        $message['message'] = $data;
        $this->session->set_flashdata('message',$message['message']);
        redirect(base_url().'Organization');
    }

    public function removeJob(){
        $jid = $this->input->get('remove');
        $this->load->model('Jobs');
        $data=$this->Jobs->removeJob($jid);
        $message['message'] = $data;
        $this->session->set_flashdata('message',$message['message']);
        redirect(base_url().'Organization');
    }
}
?>