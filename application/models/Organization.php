<?php  
class Organization extends CI_Model {

	public function updateProfile($uid,$firstname,$lastname,$email,$number,$description){
		$data = array(
			'firstname' => $firstname,
			'lastname'  => $lastname,
			'email'     => $email,
			'number'    => $number,
			'description' => $description
		);

		$update = $this->db->update('users', $data, "uid = $uid");
		if ($update > 0){
			//print_r($update);
			return " Profile Update Succesfully ";
		}
		else{
			//print_r($upddate);
			return "Problem in our system, please try after a while. Thank You !!! ";
		}
	}

	public function updateOrganizationDetails($uid, $companyname, $companylink, $primaryemail,$secondaryemail, $primarynumber, $secondarynumber, $city, $district, $moto, $description, $companytype){
		$orgdata =  array(
			'uid' => $uid,
			'companyname' => $companyname,
			'companylink' => $companylink,
			'primarynumber' => $primarynumber,
			'secondarynumber' => $secondarynumber,
			'primaryemail'   => $primaryemail,
			'secondaryemail'  => $secondaryemail,
			'city' => $city,
			'district' => $district,
			'moto' => $moto,
			'description' => $description,
			'companytype' => $companytype
 		);
 		$this->db->where('uid',$uid);
		$query=$this->db->get('organization');
		$data=$query->row();

		if ($data==null) {
			$register = $this->db->insert('organization',$orgdata);
			if ($register>0){
    		return "Organization data updated, Succesfully ";
    		}
	    	else {
	    		return "Problem in updating your data, Please try after a while. Thank You !!!";
	    	}
		}
		else if ($data != null){
			$update = $this->db->update('organization', $orgdata, "uid = $uid");
			if ($update > 0){
				return "Organization data updated, Succesfully ";
			}
			else{
				return "Problem in updating your data, Please try after a while. Thank You !!!";
			}
		}
		else{
			return "Problem in updating your data, Please try after a while. Thank You !!!";
		}
	}
		public function updateLogo($uid,$imagename){
			$orgdata = array(
				'uid'   => $uid,
				'image' => $imagename
			);
			$this->db->where('uid',$uid);
			$query=$this->db->get('organization');
			$data=$query->row();

			if ($data==null) {
				$register = $this->db->insert('organization',$orgdata);
				if ($register>0){
	    		return "Organization data updated, Succesfully ";
	    		}
		    	else {
		    		return "Problem in updating your data, Please try after a while. Thank You !!!";
		    	}
			}
			else if ($data != null){
				$update = $this->db->update('organization', $orgdata, "uid = $uid");
				if ($update > 0){
					return "Organization data updated, Succesfully ";
				}
				else{
					return "Problem in updating your data, Please try after a while. Thank You !!!";
				}
			}
			else{
				return "Problem in updating your data, Please try after a while. Thank You !!!";
			}
		}

	public function callForInterview($jobid, $useruid, $organizationname, $date, $description){
			$interviewdata =  array(
			'useruid' => $useruid,
			'jobdetailid' => $jobid,
			'int_orgname' => $organizationname,
			'int_date' => $date,
			'int_description' => $description,
			'int_remarks'   => 'accept'
 		);
			$register = $this->db->insert('interview',$interviewdata);
			if ($register>0){
	    		return "Interview Set ";
	    		}
		    	else {
		    		return "Problem in interview setting";
		    	}
	}
	public function callForInterviewUpdate($int_id, $jobid, $useruid, $organizationname, $date, $description){
			$interviewdata =  array(
			'useruid' => $useruid,
			'jobdetailid' => $jobid,
			'int_orgname' => $organizationname,
			'int_date' => $date,
			'int_description' => $description,
			'int_remarks'   => 'accept'
 		);
		$update = $this->db->update('interview', $interviewdata, "int_id = $int_id");
		if ($update > 0){
			//print_r($update);
			return " Interview Updated ";
		}
		else{
			//print_r($upddate);
			return "Problem udpating, please try after a while. Thank You !!! ";
		}
	}

	public function updateJobApply($jobid, $useruid){
		$query = $this->db->query("UPDATE jobapply SET applyremarks='accept' WHERE useruid = $useruid AND jobid = $jobid");
	}

}
?>