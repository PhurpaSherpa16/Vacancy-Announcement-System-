<?php
class NormalRole extends CI_Controller
{
    public function profileupdate()
    {
        $uid = $this->input->post('uid');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $description = $this->input->post('description');
        $this->load->model('Normalmodel');
        $data=$this->Normalmodel->updateProfile($uid,$firstname,$lastname,$email,$number,$description);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal/profile');
    }

    public function profileDetails(){
    	$uid               = $this->input->post('uid');
        $qualification     = $this->input->post('qualification');
        $district          = $this->input->post('district');
        $salary            = $this->input->post('salary');
        $programs          = $this->input->post('programs');
        $workexperience    = $this->input->post('workexperience');
        $experience        = $this->input->post('experience');
        $interest          = $this->input->post('interest');
        $vehicle           = $this->input->post('vehicle');
        $vehicletype       = $this->input->post('vehicletype');
        $personaldetails   = $this->input->post('personaldetails');
        $citizenship       = $this->input->post('citizenship');
        
        $this->load->model('Normalmodel');
        $data = $this->Normalmodel->detailsProfile($uid, $qualification, $district, $salary, $programs, $workexperience, $experience, $interest, $vehicle, $vehicletype, $personaldetails, $citizenship);

        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal/profiledetail');
    }

    public function cvUpdate(){
    	$uid = $this->input->post('uid');
    	$qualification = $this->input->post('qualification');
    	$programs = $this->input->post('programs');
    	$filetype=pathinfo(basename($_FILES["cv"]["name"]),PATHINFO_EXTENSION);
    	$cv = $uid.'_'.$qualification.'-'.$programs.'_CV' .'.'.'pdf';
    	$upload="assets/pdf/cv/".$cv;
    	move_uploaded_file($_FILES['cv']['tmp_name'], $upload);
    	$this->load->model('Normalmodel');
        $data = $this->Normalmodel->updateCv($uid, $cv);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal/profiledetail');

    }

        public function updateProfilePic(){
        $uid = $this->input->post('uid');
        $imageFileType=pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
        $imagename = $_SESSION['usertype'].'_User_ID_'.$uid. '_logo' .'.'.'jpg';
        $upload="assets/images/".$imagename;
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        $this->load->model('Normalmodel');
        $data = $this->Normalmodel->picUpdate($uid, $imagename);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal/profileUpdate');
    }

      public function registerProfileCitizenship(){
        $uid = $this->input->post('uid');
        $imageFileType=pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
        $imagename = $_SESSION['usertype'].'_User_ID_'.$uid. '_Citizenship' .'.'.'jpg';
        $upload="assets/images/".$imagename;
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        $this->load->model('Normalmodel');
        $data = $this->Normalmodel->citizenshipRegister($uid, $imagename);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal/showProfile');
    }

    public function applyForJob(){
        $orgid    = $this->input->post('oid');
        $orgname    = $this->input->post('companyname');
        $jobid    = $this->input->post('jid');
        $jobtitle    = $this->input->post('jobtitle');
        $userid    = $this->input->post('userid');
        $username    = $this->input->post('username');
        $date    = $this->input->post('date');

        $this->load->model('Normalmodel');
        $data = $this->Normalmodel->applyJob($orgid, $orgname, $jobid, $jobtitle, $userid, $username, $date);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal');
    }

    public function cancelApply(){
        $jobid    = $this->input->post('jid');
        $userid    = $this->input->post('userid');
        $remarks = 'cancel';
        $this->load->model('Normalmodel');
        $data = $this->Normalmodel->applyCancel($jobid, $userid,$remarks);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal');
    }
    public function pendingApply(){
        $jobid    = $this->input->post('jid');
        $userid    = $this->input->post('userid');
        $remarks = 'pending';
        $this->load->model('Normalmodel');
        $data = $this->Normalmodel->applyCancel($jobid, $userid,$remarks);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Normal');
    }  
}
?>