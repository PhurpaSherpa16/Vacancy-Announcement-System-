<?php 
class Auth extends CI_Controller
{
    public function loginCheck(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run()){
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $this->load->model('AuthLogin');
            $data=$this->AuthLogin->login($email);
            if ($data == null) {
            $this->session->set_flashdata('message','Email do not exist, Please Register first');
            redirect(base_url());
            //echo 'error 1 no mail';
            }
            else{
                if ($data->password==$password) {
                    $session_data=array('email'=>$data->email,'usertype'=>$data->usertype,'uid'=>$data->uid);
                    $this->session->set_userdata($session_data);
                    if ($data->usertype=='normal'){
                       redirect(base_url().'Normal');
                        //echo 'hi normal';
                    }
                    else if($data->usertype=='admin'){
                        redirect(base_url().'Admin');
                        //echo 'hi admin';
                    }
                    else if ($data->usertype=='organization') {
                       // echo 'hi org'; 
                       redirect(base_url().'Organization');  
                    }
                    else{
                        $this->session->set_flashdata('message','Invalid User');
                        redirect(base_url());
                    }
                }
                else
                {
                        $this->session->set_flashdata('message','Password Incorrect!!!');
                        redirect(base_url());
                }
            }
        }
        else{
                        $this->session->set_flashdata('message','Wrong use of information like email or password');
                        redirect(base_url());
        }
    }


    public function userRegister(){
    	$firstname = $this->input->post('firstname');
    	$lastname  = $this->input->post('lastname');
    	$email     = $this->input->post('email');
    	$usertype  = $this->input->post('usertype');
    	$password  = $this->input->post('password');
    	
        $this->load->model('AuthLogin');
        $data=$this->AuthLogin->login($email);
         if ($data == null) {
        $this->load->model('AuthRegister');
        $data = $this->AuthRegister->usersRegister($firstname,$lastname,$email,$usertype,$password);
        $message['message'] = $data;
        $this->load->model('AuthLogin');
        $data=$this->AuthLogin->login($email);
        $uid = $data->uid;
        if ($data->usertype == 'normal'){
        $imagename = 'user.png';
        $this->load->model('Normalmodel');
        $this->Normalmodel->picUpdate($uid, $imagename);
        }
        else if($data->usertype == 'organization') {
        $imagename = 'org.png';
        $this->load->model('Organization');
        $this->Organization->updateLogo($uid, $imagename);
        }
        $this->session->set_flashdata('message',$message['message']);
        redirect(base_url());
        }
        else{
            $this->session->set_flashdata('message','Email already exist, Register with another email');
            redirect(base_url());
        }

    }	
}
?>