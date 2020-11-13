<?php
class Normalmodel extends CI_Model
{
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

	public function detailsProfile($uid, $qualification, $district, $salary, $programs, $workexperience, $experience, $interest, $vehicle, $vehicletype, $personaldetails, $citizenship){
		$normaldata =  array(
			'uid' => $uid,
			'qualification' => $qualification,
			'district' => $district,
			'salary' => $salary,
			'programs' => $programs,
			'workexperience'   => $workexperience,
			'experience'  => $experience,
			'interest' => $interest,
			'vehicle' => $vehicle,
			'vehicletype' => $vehicletype,
			'personaldetails' => $personaldetails,
			'citizenship'     => $citizenship
 		);

 		$this->db->where('uid',$uid);
		$query=$this->db->get('normal');
		$data=$query->row();

		if ($data==null) {
			$register = $this->db->insert('normal',$normaldata);
			if ($register>0){
    		return "User details updated, Succesfully ";
    		}
	    	else {
	    		return "Problem in updating your details, Please try after a while. Thank You !!!";
	    	}
		}
		else if ($data != null){
			$update = $this->db->update('normal', $normaldata, "uid = $uid");
			if ($update > 0){
				return "User details updated, Succesfully ";
			}
			else{
				return "Problem in updating your details, Please try after a while. Thank You !!!";
			}
		}
		else{
			return "Problem in updating your details, Please try after a while. Thank You !!!";
		}
	}

	public function getData($uid){
		$this->db->where('uid',$uid);
		$query=$this->db->get('normal');
		$data=$query->row();
		return $data; 
	}

	public function getImage($uid){
		$image=$this->db->query("SELECT image FROM normal WHERE uid='$uid' ");
      	return $image;
	}

	public function updateCv($uid,$cv){
			$normaldata = array(
				'uid'   => $uid,
				'cv' => $cv
			);
			$this->db->where('uid',$uid);
			$query=$this->db->get('normal');
			$data=$query->row();

			if ($data==null) {
				$register = $this->db->insert('normal',$normaldata);
				if ($register>0){
	    		return "User CV updated, Succesfully ";
	    		}
		    	else {
		    		return "Problem in updating your details, Please try after a while. Thank You !!!";
		    	}
			}
			else if ($data != null){
				$update = $this->db->update('normal', $normaldata, "uid = $uid");
				if ($update > 0){
					return "User CV updated, Succesfully ";
				}
				else{
					return "Problem in updating your details, Please try after a while. Thank You !!!";
				}
			}
			else{
				return "Problem in updating your details, Please try after a while. Thank You !!!";
			}
		}

	public function picUpdate($uid,$imagename){
			$normaldata = array(
				'uid'   => $uid,
				'image' => $imagename
			);
			$this->db->where('uid',$uid);
			$query=$this->db->get('normal');
			$data=$query->row();

			if ($data==null) {
				$register = $this->db->insert('normal',$normaldata);
				if ($register>0){
	    		return "Profile Picture uploaded, Succesfully ";
	    		}
		    	else {
		    		return "Problem in uploading, Please try after a while. Thank You !!!";
		    	}
			}
			else if ($data != null){
				$update = $this->db->update('normal', $normaldata, "uid = $uid");
				if ($update > 0){
					return "Profile Picture uploaded, Succesfully ";
				}
				else{
					return "Problem in uploading, Please try after a while. Thank You !!!";
				}
			}
			else{
				return "Problem in uploading, Please try after a while. Thank You !!!";
			}
	}

	public function citizenshipRegister($uid,$imagename){
			$normaldata = array(
				'uid'   => $uid,
				'citizenshipimage' => $imagename
			);
			$this->db->where('uid',$uid);
			$query=$this->db->get('normal');
			$data=$query->row();

			if ($data==null) {
				$register = $this->db->insert('normal',$normaldata);
				if ($register>0){
	    		return "Citizenship Image uploaded, Succesfully ";
	    		}
		    	else {
		    		return "Problem in uploading, Please try after a while. Thank You !!!";
		    	}
			}
			else if ($data != null){
				$update = $this->db->update('normal', $normaldata, "uid = $uid");
				if ($update > 0){
					return "Citizenship Image uploaded, Succesfully ";
				}
				else{
					return "Problem in uploading, Please try after a while. Thank You !!!";
				}
			}
			else{
				return "Problem in uploading, Please try after a while. Thank You !!!";
			}
		}

	public function applyJob($orgid, $orgname, $jobid, $jobtitle, $userid, $username, $date){
		$applydetails =  array(
			'useruid'        => $userid,
			'orgid'         => $orgid,
			'jobid' 		=> $jobid,
			'seekername' 	=> $username,
			'organizationname' => $orgname,
			'applyjobtitle' => $jobtitle,
			'date'  		=> $date,
			'applyremarks'  => 'pending'
 		);
 		$register = $this->db->insert('jobapply', $applydetails);
		if ($register > 0){
			//print_r($update);
			return "Application has been sent, Please Visit My status for result after sometime.";
		}
		else{
			//print_r($upddate);
			return "Failed to Sent Application, Please try later.";
		}
	}

	public function applyCancel($jobid, $userid, $remarks){
		$update = $this->db->query("UPDATE jobapply SET applyremarks='$remarks' WHERE useruid = $userid AND jobid = $jobid");
		$query = $this->db->query("SELECT * FROM jobapply WHERE jobid = $jobid AND useruid = $userid;");
		$data=$query->row();
		if ($data->applyremarks == 'cancel') {
			return "Requst has been cancel";
		}
		elseif ($data->applyremarks == 'pending'){
			return "Application has been sent, Please Visit My status for result after sometime.";
		}
		elseif($data->applyremarks == 'reject'){
			return "Failed to do any action, Please try later.";
		}
		else{
			return "Failed to do any action, Please try later.";
		}
	}

	public function updateConnectionAccept($oid){
		$uid = $_SESSION['uid'];
		$update = $this->db->query("UPDATE connection SET remarks='accept' WHERE uid = $uid AND oid = $oid");
		if ($update > 0){
			//print_r($update);
			return "You make your connection, Succesfully";
		}
		else{
			//print_r($upddate);
			return "Failed, Please try later.";
		}
	}
	public function updateConnectionCancelNo($oid){
		$uid = $_SESSION['uid'];
		$update = $this->db->query("UPDATE connection SET remarks='cancel' WHERE uid = $uid AND oid = $oid");
		if ($update > 0){
			//print_r($update);
			return "You decline connection";
		}
		else{
			//print_r($upddate);
			return "Failed, Please try later.";
		}
	}

	public function getRecommend($interest,$programs){
		$select = $this->db->query("SELECT * FROM jobdetails jb where jb.jobtitle LIKE '%$interest%' OR jb.jobtype LIKE '%$interest%' OR jb.position LIKE '%$interest%' OR jb.jobdescription LIKE '%$interest%' OR jb.jobtitle LIKE '%$programs%' OR jb.jobtype LIKE '%$programs%' OR jb.position LIKE '%$programs%' OR jb.jobdescription LIKE '%$programs%'");
		$data = $select->result();
		return($data);
	}
		
}
?>