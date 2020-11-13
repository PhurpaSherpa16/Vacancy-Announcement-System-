<?php 
class Jobs extends CI_Model
{
	public function registerJobs($uid, $jobtitle, $jobtype, $qualification, $experience, $position, $vechile, $deadline, $jobdescription, $jobpdffile, $date, $salary, $programs){
		$data = array(
		'uid'           => $uid,
		'jobtitle'      => $jobtitle,
		'jobtype'       => $jobtype,
		'jobqualification' => $qualification,
		'experience'    => $experience,
		'position'      => $position,
		'vechile'       => $vechile,
		'deadline'      => $deadline,
		'postdate'      => $date,
		'jobpdffile'    => $jobpdffile,
		'jobdescription'=> $jobdescription,
		'salary'        => $salary,
		'programs'      => $programs
		);
		$register = $this->db->insert('jobdetails',$data);
		if ($register>0){
			return "Job Posted Sucessfuylly";
			//print_r($register);
		}
		else{
			//print_r($register);
			return "Failed to post job, try after a while";
		}
	}
	
	public function getData($uid){
		$this->db->where('uid',$uid);
		$query=$this->db->get('organization');
		$data=$query->row(); // provides single data set
		return $data; 
	}

	public function getAllJob($uid){
		$this->db->where('uid',$uid);
		$query=$this->db->get('jobdetails');
		$data=$query->result(); //result will give all data
		return $data; 
	}
	
	public function getJob($jid){
		$this->db->where('jobid',$jid);
		$query=$this->db->get('jobdetails');
		$data=$query->row(); //result will give all data
		return $data; 
	}

	public function updateJob($jobtitle, $jobtype, $qualification, $experience, $position, $vechile, $deadline, $jobdescription, $jobpdffile, $date, $salary, $programs, $jid)
	{
		$data = array(
		'jobtitle'      => $jobtitle,
		'jobtype'       => $jobtype,
		'jobqualification' => $qualification,
		'experience'    => $experience,
		'position'      => $position,
		'vechile'       => $vechile,
		'deadline'      => $deadline,
		'postdate'      => $date,
		'jobpdffile'    => $jobpdffile,
		'jobdescription'=> $jobdescription,
		'salary'        => $salary,
		'programs'      => $programs
		);
		$update = $this->db->update('jobdetails', $data, "jobid = $jid");
		if ($update>0){
			return "Updated Sucessfully";
			//print_r($register);
		}
		else{
			//print_r($register);
			return "Failed to Updated";
		}
	}

	public function removeJob($jid){
		$remove=$this->db->query("delete from jobdetails where jobid=$jid");
        if ($remove>0){
			return "Job Removed";
			//print_r($register);
		}
		else{
			//print_r($register);
			return "Failed to Product Remove";
		}
	}

	public function activeJobs(){
		$uid = $_SESSION['uid'];
		$usertype = 'normal';
	$query=$this->db->query("SELECT * FROM jobdetails j, users u, organization o where u.uid = j.uid and j.uid = o.uid and j.uid != $uid order by RAND() LIMIT 5");
      	$data=$query->result();
      	return $data;
	}

	public function getJobDetails($jobid){
		$query=$this->db->query("SELECT * FROM jobdetails where uid = $jobid");
      	$data=$query->row();
      	return $data;
	}

	public function jobDetails($uid, $jobid){
		$query=$this->db->query("SELECT * FROM jobdetails j, organization o, users u WHERE j.jobid = $uid and j.uid = $jobid and j.uid = o.uid and j.uid = u.uid");
      	$data=$query->row();
      	return $data;
	}

	public function jobViewNomal(){
		$query=$this->db->query("SELECT * FROM jobdetails j, organization o where j.uid = o.uid order by jobid DESC LIMIT 5");
      	$data=$query->result();
      	return $data;
	}

	public function checkMultipleApply($userid, $jobid){
			$query = $this->db->query("select * from jobapply where jobid = $jobid and useruid = $userid;");
			$data=$query->row();
      		return $data;
	}

}
?>