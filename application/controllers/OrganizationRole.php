<?php
class OrganizationRole extends CI_Controller
{      

    public function profileupdate()
    {
        $uid = $this->input->post('uid');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $description = $this->input->post('description');
        $this->load->model('Organization');
        $data=$this->Organization->updateProfile($uid,$firstname,$lastname,$email,$number,$description);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Organization/profileupdate');
    }

    public function organizationUpdate(){
        $uid             = $this->input->post('uid');
        $companyname     = $this->input->post('companyname');
        $companylink     = $this->input->post('companylink');
        $primarynumber   = $this->input->post('primarynumber');
        $secondarynumber = $this->input->post('secondarynumber');
        $primaryemail    = $this->input->post('primaryemail');
        $secondaryemail  = $this->input->post('secondaryemail');
        $city            = $this->input->post('city');
        $district        = $this->input->post('district');
        $moto            = $this->input->post('moto');
        $description     = $this->input->post('description');
        $companytype     = $this->input->post('companytype');

        $this->load->model('Organization');
        $data = $this->Organization->updateOrganizationDetails($uid, $companyname, $companylink, $primaryemail,$secondaryemail, $primarynumber, $secondarynumber, $city, $district, $moto, $description, $companytype);

        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Organization/companyupdate');
    }

    public function logoupdate(){
        $uid = $this->input->post('uid');
       $imageFileType=pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
        $imagename = $_SESSION['usertype'].'_User_ID_'.$uid. '_logo' .'.'.'jpg';
        $upload="assets/images/".$imagename;
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        $this->load->model('Organization');
        $data = $this->Organization->updateLogo($uid, $imagename);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Organization');
    }

    public function callInterview(){
        $jobid             = $this->input->post('jobid');
        $useruid     = $this->input->post('useruid');
        $organizationname     = $this->input->post('organizationname');
        $date   = $this->input->post('date');
        $description = $this->input->post('description');
        $this->load->model('Organization');
        $data = $this->Organization->callForInterview($jobid, $useruid, $organizationname, $date, $description);
        $this->Organization->updateJobApply($jobid, $useruid);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Organization');
    }
    public function callInterviewUpdate(){
        $jobid             = $this->input->post('jobid');
        $int_id             = $this->input->post('int_id');
        $useruid     = $this->input->post('useruid');
        $organizationname     = $this->input->post('organizationname');
        $date   = $this->input->post('date');
        $description = $this->input->post('description');
        $this->load->model('Organization');
        $data = $this->Organization->callForInterviewUpdate($int_id, $jobid, $useruid, $organizationname, $date, $description);
        $this->Organization->updateJobApply($jobid, $useruid);
        $message['message'] = $data;
        $this->session->set_flashdata('message', $message['message']);
        redirect(base_url().'Organization');
    }





    


}
?>