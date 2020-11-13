<?php 
class Organization extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if (isset($_SESSION['email'])== false && isset($_SESSION['utype'])==false){
			redirect(base_url());
		}
        $this->load->model('User');
         $this->load->model('Jobs');
		$this->load->model('AuthLogin');
		$this->userdetails = $this->AuthLogin->login($_SESSION['email']);
		$data['userdata'] = $this->userdetails;
        $uid = $_SESSION['uid'];
        $this->load->model('Jobs');
        $this->orgdetails = $this->Jobs->getData($uid);
        $data['orgdata'] = $this->orgdetails;
		if ($_SESSION['usertype'] == 'admin'){
				redirect(base_url().'Admin');			
		}
		else if($_SESSION['usertype'] == 'normal'){
				redirect(base_url().'Normal');
		}

	}

    public function index(){
        $this->users = $this->User->getUser();
        $this->activejobs = $this->Jobs->activeJobs();
        $data['user'] = $this->users;
        $data['activejob'] = $this->activejobs;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/index', $data);
    }

    public function getAllJob(){
        $uid = $_SESSION['uid'];
        $this->load->model('Jobs');
        $this->jobdetails = $this->Jobs->getAllJob($uid);
        $data['jobdata'] = $this->jobdetails;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/mystatus', $data);
    }

    public function profileupdate(){
        $data['orgdata'] = $this->orgdetails;
    	$data['userdata'] = $this->userdetails;
        $this->load->view('organization/profileupdate', $data);
    }

    public function companyupdate(){
    	$data['userdata'] = $this->userdetails;
        $data['orgdata'] = $this->orgdetails;
        $this->load->view('organization/companyupdate', $data);

    }

    public function logoupdate(){
        $data['orgdata'] = $this->orgdetails;
    	$data['userdata'] = $this->userdetails;
        $this->load->view('organization/logoupdate', $data);
    }

    public function postjob(){
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/postjob', $data);
    }

    public function showprofile(){
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/showprofile', $data);
    }
    
    public function jobdetails(){
        $jid = $this->input->get('id');
        $this->jobdetails = $this->Jobs->getJob($jid);
        $data['jobdata'] = $this->jobdetails;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/jobdetails', $data);
    }

    public function jobupdate(){
        $jid = $this->input->get('jid');
        $this->jobdetails = $this->Jobs->getJob($jid);
        $data['jobdata'] = $this->jobdetails;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/jobupdate', $data);
    }

    public function showUser(){
        $userid = $this->input->get('personid');
        $this->viewusers = $this->User->userDetails($userid);
        $oid = $_SESSION['uid'];
        $this->connectiondetails = $this->User->connection($userid, $oid);
        $data['remarks'] = $this->connectiondetails;
        $data['userdetails'] = $this->viewusers;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/showuser', $data);
    }

    public function showJobDetails(){
        $jobid = $this->input->get('viewjobid');
        $this->jobdata = $this->Jobs->getJobDetails($jobid); // fetch user id from jobdetails table
        $all['jobdata'] = $this->jobdata; // making array of jobdata and fetching uid from it
        $uid = $all['jobdata']->uid;
        $this->viewjob = $this->Jobs->jobDetails($uid, $jobid); // fetching organization, user, jobdetails table data by uid and jid
        $data['jobdetails'] =  $this->viewjob;
        $data['userdata'] = $this->userdetails;
        $data['orgdata'] = $this->orgdetails;
        $this->load->view('organization/showjobdetails', $data);
    }

    public function makeConnection(){
        $uid = $this->input->get('viewid');
        $companyname = $this->input->get('name');
        $oid = $_SESSION['uid'];
        $remarks = 'pending';
        $data = $this->User->connectionMake($uid, $oid, $remarks, $companyname);
        $message['message'] =  $data;
        $this->session->set_flashdata('message', $message['message']);
       redirect(base_url().'Organization');
    }

    public function cancelRequest(){
        $uid = $this->input->get('viewid');
        $oid = $_SESSION['uid'];
        $remarks = 'cancel';
        $data = $this->User->updateConncection($uid, $oid, $remarks);
        $message['message'] =  $data;
        $this->session->set_flashdata('message', $message['message']);
       redirect(base_url().'Organization');
    }

        public function makeConnectionUpdate(){
        $uid = $this->input->get('viewid');
        $oid = $_SESSION['uid'];
        $remarks = 'pending';
        $data = $this->User->updateMakeConncection($uid, $oid, $remarks);
        $message['message'] =  $data;
        $this->session->set_flashdata('message', $message['message']);
       redirect(base_url().'Organization');
    }

    public function showeRequest(){
        $this->jobapply = $this->User->getSeekerOfJobApply();
        $this->interview = $this->User->getSeekerOfJobApplyAccept();
        $this->reject = $this->User->getSeekerOfJobApplyreject();
        $data['reject'] = $this->reject;
        $data['applydata'] = $this->jobapply;
        $data['interview'] = $this->interview;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/request', $data);
    }

    public function interviewForm(){
        $applyid = $this->input->get('viewjobid');
        $this->jobapply = $this->User->getApplyData($applyid);
        $data['applydata'] = $this->jobapply;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/interview', $data);
    }
    public function interviewFormUpdate(){
        $applyid = $this->input->get('viewjobid');
        $interview= $this->User->getApplyData($applyid);
        $data['applydata'] = $interview;
        $uid = $interview->useruid;
        $jobid = $interview->jobid;
        $interviewdata = $this->User->getInterviewData($uid, $jobid);
        $data['interviewdata'] = $interviewdata;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/interviewupdate', $data);
    }

    public function updateJobapply(){
        $applyid = $this->input->get('viewjobid');
        $mess= $this->User->getApplyjobReject($applyid);
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $message['message'] = $mess;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Organization');
    }

    public function serviceOpen(){
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/service', $data);
    }
    public function aboutOpen(){
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/about', $data);
    }
    public function search(){
        $search = $this->input->post('search');
        $jobarea = $this->input->post('jobarea');
        if ($jobarea=='none'){
           $data['search'] = $this->User->searchData($search);
        }
        elseif($search == null){
        $data['jobarea']= $this->User->searchJobArea($jobarea);
        //($data);
           
        }
        else{
        $s= $this->User->searchData($search);
        $s= $this->User->searchJobArea($jobarea);
        $data['all'] = $s;
        }
        $this->users = $this->User->getUser();
        $this->activejobs = $this->Jobs->activeJobs();
        $data['user'] = $this->users;
        $data['activejob'] = $this->activejobs;
        $data['orgdata'] = $this->orgdetails;
        $data['userdata'] = $this->userdetails;
        $this->load->view('organization/index', $data);
       

    } 
}