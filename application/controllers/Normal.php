<?php 
class Normal extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		if (isset($_SESSION['email'])== false && isset($_SESSION['utype'])==false){
			redirect(base_url());
		}
		$uid = $_SESSION['uid'];
        $this->load->model('User');
        $this->getconnectiondata = $this->User->getConnection($uid);
        $this->orgtype = $this->User->getOrgType();
        $this->load->model('Normalmodel');
        $this->normal = $this->Normalmodel->getData($uid);
        $data['normaldata'] = $this->normal;
		$this->load->model('AuthLogin');
		$this->userdetails = $this->AuthLogin->login($_SESSION['email']);
		$data['userdata'] = $this->userdetails; 
		if ($_SESSION['usertype'] == 'admin'){
				redirect(base_url().'Admin');			
		}
		else if($_SESSION['usertype'] == 'organization'){
				redirect(base_url().'Organization');
		}
	}

    public function index(){
        $data['connection'] = $this->getconnectiondata;
        $this->load->model('Jobs');
        $this->alljob = $this->Jobs->jobViewNomal();
        $data['orgtype'] = $this->orgtype;
        $data['jobdetails'] = $this->alljob;
        $data['normaldata'] = $this->normal;
        $interest = $data['normaldata']->interest;
        $programs = $data['normaldata']->programs;
        $this->recommend = $this->Normalmodel->getRecommend($interest,$programs);
        $data['recommend']= $this->recommend;
        $data['userdata'] = $this->userdetails;
        $this->load->view('normal/index', $data);

       //print_r($data);
    }

    public function profile(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
    	$data['normaldata'] = $this->normal;
    	$data['userdata'] = $this->userdetails;
        $this->load->view('normal/profileupdate', $data);
    }

    public function profiledetail(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
    	$data['normaldata'] = $this->normal;
    	$data['userdata'] = $this->userdetails;
        $this->load->view('normal/profiledetail', $data);
    }

    public function updateCV(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
    	$data['normaldata'] = $this->normal;
    	$data['userdata'] = $this->userdetails;
        $this->load->view('normal/cv', $data);
    }

    public function profileUpdate(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->load->view('normal/pofilepicupdate', $data);
    }

    public function showProfile(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->load->view('normal/showprofile', $data);
    }

    public function citizenshipregister(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->load->view('normal/citizenshipregister', $data);
    }

    public function showJobDetails(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $jobid = $this->input->get('viewjobid');
        $this->load->model('Jobs');
        $this->jobdata = $this->Jobs->getJobDetails($jobid); // fetch user id from jobdetails table
        $all['jobdata'] = $this->jobdata; // making array of jobdata and fetching uid from it
        $uid = $all['jobdata']->jobid;
        $this->viewjob = $this->Jobs->jobDetails($uid, $jobid); //fetching organization, user, jobdetails table data by uid and jid
        $userid = $_SESSION['uid'];
        $this->multipleapply = $this->Jobs->checkMultipleApply($userid, $jobid);
        $this->follow = $this->User->getFollow($userid, $uid);
        $data['connection'] = $this->follow;
        $data['applydata'] = $this->multipleapply;
        $data['jobdetails'] =  $this->viewjob;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->load->view('normal/jobdetails', $data);
       // echo $uid;
    }

    public function updateConnection(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $userid = $this->input->get('userview_id');
        $orgid = $this->input->get('orgview_id');
        $remarks = 'follow';
        $data = $this->User->updateOgrConnection($userid, $orgid,$remarks);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal');
    }
    public function updateConnectionCancel(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $userid = $this->input->get('userview_id');
        $orgid = $this->input->get('orgview_id');
        $remarks = 'cancel';
        $data = $this->User->updateOgrConnection($userid, $orgid,$remarks);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal');
    }

    public function registerFollow(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $userid = $this->input->get('userview_id');
        $orgid = $this->input->get('orgview_id');
        $orgname = $this->input->get('orgname');
        $data = $this->User->addFollowers($userid, $orgid, $orgname);
         $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal');
    }

    public function myStatus(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $this->jobapply = $this->User->getJobApplyData();
        $data['applydata'] = $this->jobapply;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->load->view('normal/viewstatus', $data);
    }

    public function showInterviewDetails(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $uid = $this->input->get('viewuserid');
        $jobid = $this->input->get('viewjobid');
        $this->interviewdata = $this->User->getInterviewData($uid, $jobid);
        $this->alldata = $this->User->getAllData();
        $data['alldata'] = $this->alldata;
        $data['interviewdata'] = $this->interviewdata;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->load->view('normal/interviewdetails', $data);
    }

    public function allNotification(){
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->getconnection = $this->User->getallConnetion();
        $data['getconnection'] =$this->getconnection;
        $this->load->view('normal/notification', $data);
    }

    public function search(){
        $search = $this->input->post('search');
        $jobarea = $this->input->post('jobarea');
        if ($jobarea=='none'){
           $data['search'] = $this->User->searchDataNormal($search);
        }
        elseif($search == null){
        $data['jobarea']= $this->User->searchJobAreaNormal($jobarea);
        }
        else{
        $s= $this->User->searchDataNormal($search);
        $data['all'] = $s;
        }
        $data['connection'] = $this->getconnectiondata;
        $this->load->model('Jobs');
        $this->alljob = $this->Jobs->jobViewNomal();
        $data['orgtype'] = $this->orgtype;
        $data['jobdetails'] = $this->alljob;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->load->view('normal/index', $data);
    } 

    public function updateconnectionFromNormal(){
        $oid = $this->input->get('organization_id');
        $this->update = $this->Normalmodel->updateConnectionAccept($oid);
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->getconnection = $this->User->getallConnetion();
        $data['getconnection'] =$this->getconnection;
        $this->load->view('normal/notification', $data);
    }

    public function updateconnectionCancelNormal(){
        $oid = $this->input->get('organization_id');
        $this->update = $this->Normalmodel->updateConnectionCancelNo($oid);
        $data['orgtype'] = $this->orgtype;
        $data['connection'] = $this->getconnectiondata;
        $data['normaldata'] = $this->normal;
        $data['userdata'] = $this->userdetails;
        $this->getconnection = $this->User->getallConnetion();
        $data['getconnection'] =$this->getconnection;
        $this->load->view('normal/notification', $data);
    }
}
?>