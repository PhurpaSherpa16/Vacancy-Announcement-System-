<?php 
class User extends CI_Model
{
	public function getUser(){
		$usertype = 'normal';
		$query=$this->db->query("SELECT * from users u, normal n where u.uid=n.uid and u.usertype='normal' order by n.nid LIMIT 5");
      	$data=$query->result();
      	return $data; 
	}


	public function userDetails($userid){
		$query=$this->db->query("SELECT * FROM users u , normal n WHERE u.uid=$userid and n.uid = $userid ");
		$data=$query->row(); //result will give all data
		return $data; 
	}

	public function connectionMake($uid, $oid, $remarks, $companyname){
		$data = array(
		'uid'           => $uid,
		'oid'      => $oid,
		'remarks'  => $remarks,
		'companyname' => $companyname
		);
		$register = $this->db->insert('connection',$data);
			if ($register>0){
				return "Connection Request Sent";
			}
			else{
				return "Connection Request Failed";
			}

	}

	public function connection($userid, $oid){
		$query=$this->db->query("SELECT * FROM connection WHERE uid=$userid AND oid=$oid");
		$data=$query->row(); //result will give all data
		return $data; 
	}	

	public function updateConncection($uid, $oid, $remarks){
			$query = $this->db->query("UPDATE connection SET remarks='$remarks' WHERE uid = $uid AND oid = $oid");
			if ($query>0){
				return "Connection Request Cancel";
			}
			else{
				return "Connection Request Failed";
			}

		}

	public function updateMakeConncection($uid, $oid, $remarks){
		$query = $this->db->query("UPDATE connection SET remarks='$remarks' WHERE uid = $uid AND oid = $oid");
		if ($query>0){
			return "Connection Request Sent";
		}
		else{
			return "Connection Request Failed";
		}

	}

	public function getConnection($uid){
		$query = $this->db->query("SELECT * FROM connection WHERE remarks='pending' AND uid = $uid ORDER by uid DESC LIMIT 2");
		$data = $query->result();
		return $data;
	}

	public function updateOgrConnection($userid, $orgid,$remarks){
		$query = $this->db->query("UPDATE connection SET orgremarks='$remarks' WHERE uid = $userid AND oid = $orgid");
		if ($remarks == 'cancel') {
			if($query>0){
			return "Unfollowed";
		}
		else{
			return "Try After sometime";
		}
	}
		else{
			if($query>0){
			return "Followed";
		}
		else{
			return "Try After sometime";
		}
		}
	}

	public function getFollow($userid, $uid){
		$query = $this->db->query("SELECT * FROM connection WHERE orgremarks='follow' AND uid = $userid AND oid=$uid");
		$data = $query->row();
		return $data;
	}

	public function addFollowers($userid, $orgid, $orgname){
		$data = array(
		'uid'		=> $userid,
		'oid'      => $orgid,
		'orgremarks'  => 'follow',
		'companyname' => $orgname
		);
		$register = $this->db->insert('connection',$data);
			if ($register>0){
				return "Followed";
			}
			else{
				return "Cannot perform action. Please try after a while";
			}
	}

	public function getJobApplyData(){
	$uid = $_SESSION['uid'];
	$query=$this->db->query("SELECT * FROM jobapply j, jobdetails jb WHERE j.jobid=jb.jobid AND j.useruid = $uid");
	$data = $query->result();
	return $data;

	}

	public function getSeekerOfJobApply(){
			$uid = $_SESSION['uid'];
			$query = $this->db->query("SELECT* FROM jobapply j , jobdetails jb, normal n, users u where j.jobid= jb.jobid and j.useruid = n.uid and n.uid = u.uid and j.orgid = $uid and j.applyremarks = 'pending' ");
			$data = $query->result();
			return $data;
	}
	public function getSeekerOfJobApplyAccept(){
			$uid = $_SESSION['uid'];
			$query = $this->db->query("SELECT* FROM jobapply j , jobdetails jb, normal n, users u where j.jobid= jb.jobid and j.useruid = n.uid and n.uid = u.uid and j.orgid = $uid and j.applyremarks = 'accept' ");
			$data = $query->result();
			return $data;
	}
	public function getSeekerOfJobApplyReject(){
			$uid = $_SESSION['uid'];
			$query = $this->db->query("SELECT* FROM jobapply j , jobdetails jb, normal n, users u where j.jobid= jb.jobid and j.useruid = n.uid and n.uid = u.uid and j.orgid = $uid and j.applyremarks = 'reject' ");
			$data = $query->result();
			return $data;
	}
	public function getApplyData($applyid){
			$query = $this->db->query("SELECT* FROM jobapply j , jobdetails jb, normal n, users u where j.jobid= jb.jobid and j.useruid = n.uid and n.uid = u.uid and j.aid = $applyid");
			$data = $query->row();
			return $data;
	}

	public function getFilter(){
		$query = $this->db->query("SELECT * FROM jobapply where orgid = $oid");
		$data = $query->result();
		return $data;
	}

	public function getApplyjobReject($applyid){
		$query = $this->db->query("UPDATE jobapply SET applyremarks='reject' WHERE aid = $applyid ");
		if ($query>0){
				return "Candidate has been rejected.";
			}
			else{
				return "Please try after sometime.";
			}
	}

	public function getInterviewData($uid, $jobid){
		$query = $this->db->query("SELECT * FROM interview WHERE useruid = $uid AND jobdetailid = $jobid ");
		$data = $query->row();
		return($data);
	}
	public function getAllData(){
		$query = $this->db->query("SELECT * from interview i, jobdetails jb , organization o, users u where i.jobdetailid = jb.jobid and jb.jobid = o.uid and o.uid = u.uid");
		$data = $query->row();
		return($data);
	}

	public function getallConnetion(){
		$uid = $_SESSION['uid'];
		$query = $this->db->query("SELECT * FROM connection WHERE uid = $uid AND remarks='pending'");
		$data = $query->result();
		return($data);
	}

	public function searchData($search){
		$query = $this->db->query("SELECT * FROM users u, normal n WHERE u.uid = n.uid AND u.usertype ='normal' AND (u.description LIKE '%$search%' OR u.firstname LIKE '%$search%' OR u.lastname LIKE '%$search%') ");
		$data = $query->result();
		return($data);
	}

	public function searchJobArea($jobarea){
		$query = $this->db->query("SELECT * FROM normal n, users u WHERE n.uid = u.uid AND n.interest= '$jobarea' ");
		$data = $query->result();
		return($data);
	}
	public function searchDataNormal($search){
		$query = $this->db->query("SELECT * FROM organization o, jobdetails jb, users us WHERE us.uid = o.uid AND us.usertype ='organization' AND o.uid = jb.uid AND (jb.jobdescription LIKE '%$search%' OR o.description LIKE '%$search%' OR us.description LIKE '%$search%' OR jb.jobtype LIKE '%$search%')");
		$data = $query->result();
		return($data);
	}

	public function searchJobAreaNormal($jobarea){
		$query = $this->db->query("SELECT * FROM organization o, jobdetails jb, users us WHERE us.uid = o.uid AND us.usertype ='organization' AND o.uid = jb.uid AND o.companytype = '$jobarea'");
		$data = $query->result();
		return($data);
	}


	public function getJob(){
		$query = $this->db->query("SELECT * FROM jobdetails jb, organization o where jb.uid = o.uid ORDER BY RAND() DESC LIMIT 3");
		$data = $query->result();
		return($data);
	}

	public function getOrgType(){
		$query = $this->db->query("SELECT o.companytype FROM organization o WHERE o.companytype IS NOT NULL");
		$data = $query->result();
		return($data);
	}

	public function getDetailsJob($jobid){
		$query = $this->db->query("SELECT * FROM jobdetails jb, organization o where jb.jobid = $jobid and jb.uid = o.uid ");
		$data = $query->row();
		return($data);
	}


}
?>

