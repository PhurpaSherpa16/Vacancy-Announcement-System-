<?php 
class AuthRegister extends CI_Model
{

    public function usersRegister($firstname,$lastname,$email,$usertype,$password){
    	$data  =  array (
    	'firstname' => $firstname,
    	'lastname'  => $lastname,
    	'email'     => $email,
    	'usertype'  =>$usertype,
    	'password'  =>$password
    	);

    	$register = $this->db->insert('users',$data);
    	if ($register>0){
    		return "User Succesfully register";
    	}
    	else {
    		//print_r($register);
    		return "Problem in regiter, Please try after a while. Thank You!!!";
    	}
    }
    public function passwordUpdate($email,$password){
        $query = $this->db->query("UPDATE users SET password='$password' WHERE email = '$email' ");
        if ($query>0){
            return "Password has been changed";
        }
        else{
            return "Failed to change password";
        }
    }
}
?>