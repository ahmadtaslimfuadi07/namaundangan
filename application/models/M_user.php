<?php ob_start();
class M_user extends CI_Model{

    public $username;
    public $name;

    public function SetUserSession($username, $eoaid)
    {
        $this->load->model('Mobile_model');
        $device = $this->Mobile_model->device();
        $sql      = "SELECT id, name, username FROM employee WHERE username = '$username';";
        $query    = $this->db->query($sql);
        $employee = $query->row();

        $sql = "SELECT eoa.id, eoa.employeeid, eoa.outletcode, eoa.accessid, a.name AS 'accessname' 
                FROM employee_outlet_access eoa JOIN access a ON eoa.accessid = a.id  
                WHERE eoa.employeeid = $employee->id";
        $query = $this->db->query($sql);
        $jml  = $query->num_rows();

        $sql .= " AND eoa.id = $eoaid;";
        $query = $this->db->query($sql);
        $user  = $query->row();

        $this->session->set_userdata('username',    $username);
        $this->session->set_userdata('eoaid',       $eoaid);
        $this->session->set_userdata('employeeid',  $employee->id);
        $this->session->set_userdata('name',        $employee->name);
        $this->session->set_userdata('accessid',    $user->accessid);
        $this->session->set_userdata('access_count',    $jml);
        $this->session->set_userdata('accessname',  $user->accessname);
        $this->session->set_userdata('outlet',      $user->outletcode);
        $this->session->set_userdata('device',      $device);

        $data = array(
            'username'   => $username,
            'password'   => '0',
            'employeeid' => $employee->id,
            'outlet'     => $user->outletcode,
            'accessid'   => $user->accessid,
            'browser'    => json_encode($_SERVER['HTTP_USER_AGENT']),
            'logindt'    => date('Y-m-d H:i:s')
        );
        $this->db->insert('login_history', $data);
    }

    public function CheckHash($username,$password){
        ini_set('display_errors', 0);
        $this->db->where('active', 'Y');
        $this->db->where("username",$username);
        $query = $this->db->get("employee");
        $user = $query->row();
        //pre($user);
        if($user != NULL){
            $options = array(
                'cost' => 11,
                'salt' => $user->salt
            );
            if(strcmp($user->password7,"")==0)
            {
                $hash = password_hash($password, PASSWORD_BCRYPT, $options);
                if (strcmp($hash, $user->password) == 0) return true;
            }
            else if(strcmp($user->password7,dohash($user,$password))==0) return true;
        }
        return false;
    }

    public function updatePassword($username, $passwordold, $passwordnew)
    {
        if($this->CheckHash($username,$passwordold))
        {
            return $this->updateNewPassword($username, $passwordnew);
        }
        return false;
    }

    public function updateNewPassword($username, $passwordnew)
    {
        $this->db->where("username",$username);
        $query = $this->db->get("employee");
        $user = $query->row();
        $user->salt = uniqid("",true);
        $newpassword = dohash($user, $passwordnew);
        $this->db->flush_cache();
        $data_update = array(
            'salt' => $user->salt,
            'password7' => $newpassword,
            'reminder' => 'N',
            'passworddate' => date('Y-m-d')
        );
        $this->db->where('username', $username);
        $this->db->update('employee', $data_update);
        if($this->db->affected_rows()>0) return true;
        return false;
    }

    public function CheckHashQuery($username,$password)
    {
        $this->output->set_content_type('application/json')->set_output(json_encode($this->CheckHash($username, $password)));
    }

    public function GetPermissionAccess(){

        if($this->session->userdata('accessid')){
            $accessid = $this->session->userdata('accessid');
            $sql = "SELECT p.controller, p.method
                    FROM permission p JOIN access_permission ap ON ap.permissionid = p.id
                    WHERE ap.accessid = $accessid";
            $query = $this->db->query($sql);
            return $query->result();
        }
         else redirect("login");
    }

    public function getPersonalData($employeeid)
    {
        $this->db->select('e.id, e.address, e.name as "name", e.whatsapp as "whatsapp", e.dob, e.joindate, e.active, e.outlet, e.reminder, e.complete, ed.name as "department", el.name as "level"');
        $this->db->join('empdept ed', 'ed.id = e.empdeptid', 'left');
        $this->db->join('emplevel el', 'el.id = e.emplevelid', 'left');
        $this->db->from('employee e');
        $this->db->where('e.id', $employeeid);
        $qemployee = $this->db->get();
        $employee = $qemployee->row_array();
        return $employee;
    }

    public function getSubordinate($employeeid, $ctr = 0)
    {
        $this->db->select('e.id, e.name as "name", e.whatsapp as "whatsapp", ed.name as "department", el.name as "level"');
        $this->db->join('empdept ed', 'ed.id = e.empdeptid', 'left');
        $this->db->join('emplevel el', 'el.id = e.emplevelid', 'left');
        $this->db->from('employee e');
        $this->db->where('e.directspv', $employeeid);
        $qsubordinate = $this->db->get();
        $subordinate = $qsubordinate->result_array();
        $ctr++;
        foreach($subordinate as $key => $s)
        {
            if($ctr < 3) $subordinate[$key]['directsubordinate'] = $this->getSubordinate($s['id'], $ctr);
            else $subordinate[$key]['directsubordinate'] = array();
        }
        return $subordinate;
    }

    public function getSupervisor($employeeid)
    {
        $this->db->select('directspv');
        $this->db->from('employee');
        $this->db->where('id', $employeeid);
        $qspvid = $this->db->get();
        $spvid = $qspvid->row()->directspv;
        
        $this->db->select('e.id, e.name as "name", e.whatsapp as "whatsapp", ed.name as "department", el.name as "level"');
        $this->db->join('empdept ed', 'ed.id = e.empdeptid', 'left');
        $this->db->join('emplevel el', 'el.id = e.emplevelid', 'left');
        $this->db->from('employee e');
        $this->db->where('e.id', $spvid);
        $qsupervisor = $this->db->get();
        $supervisor = $qsupervisor->row_array();
        return $supervisor;
    }

    public function CheckPermissionFA($controller,$method,$permissions,$checkfa){
        if($this->session->accessid == 1 ) return true;
        foreach ($permissions as $permission){
            if(strcmp($permission->controller,$controller)==0){
                if(strcmp($permission->method,"all")==0 && strcmp($checkfa,"0")==0) return true;
                if(strcmp($permission->method,$method)==0 && strcmp($checkfa,"0")==0) return true;
                if(strcmp($permission->method,$method)==0 && strcmp($checkfa,"2")==0) return true;
                if(strcmp($permission->method,$method)==0 && strcmp($checkfa,"1")==0) return false;
            }
        }
        return false;
    }

    public function CheckPermissionButtonFA($controller,$method,$permissions,$checkfa,$tablename){
        $this->load->model('Update_model','um');
        if($this->CheckPermissionAccess($controller,$method,$permissions)){
            if($this->CheckPermissionFA($controller,$method,$permissions, $checkfa)==TRUE)
                {
                    return TRUE;
                }
            else if($this->CheckPermissionFA($controller,$method, $permissions, $checkfa)!=TRUE){
                $apvby = $this->um->isRequestApvSales($tablename);
                $access_ses =$this->session->accessid;
                if($apvby==$access_ses){
                    return TRUE;
                }
            }
        }
    }
    public function CheckCanChangeAccess(){
        if($this->session->access_count > 1) return true;
        return false;
    }
    public function CheckPermissionAccess($controller,$method,$permissions){
        if($this->session->accessid == 1) return true;
        // if($this->session->access_count > 1) return true;
        foreach ($permissions as $permission){
            if(strcmp($permission->controller,$controller)==0){
                if(strcmp($method,"any")==0) return true;
                if(strcmp($permission->method,"all")==0) return true;
                if(strcmp($permission->method,$method)==0) return true;
            }
        }
        // echo "$controller $method"; die;
        return false;
    }

    public function CheckPermission($override_permission=''){
        if(strpos(base_url(),'widya') !== false) redirect("https://pakyjop.com/erp");
        if($this->RequireChangePassword()) redirect("login/signout");
        $this->load->model('activity_model');

        if($this->session->accessid == 1) { 
            // $this->activity_model->RecordView();
            return true;
        }
        
        $forbidden = true;
        $controller = $this->uri->segment(1);
        $method = $this->uri->segment(2);
        if(!empty($override_permission)){
            list($controller,$method)=explode(":", $override_permission);
        }

        if(strcmp($controller,"")==0) $controller = "customer";
        if(strcmp($method,"")==0) $method = "index";

        //echo "aha " . $controller . " uhu " .$method ." ihi"; die;
        
        if( !$this->UserLoginStatus() )
        {
            $this->setOriginUrl(doencrypt(uri_string()));
            redirect("login/signout/");
        }
       
        $accessid = $this->session->userdata('accessid');
        $this->db->where("accessid",$accessid);
        $query = $this->db->get("access_permission");
        foreach ($query->result() as $row){
            $this->db->where("id",$row->permissionid);
            $permission_query = $this->db->get("permission");
            $permission = $permission_query->row();
            
            if(strcmp($permission->controller,$controller)==0){
                if(strcmp($permission->method,"all")==0) { 
                    // $this->activity_model->RecordView();
                    return true;
                }
                //if($method);
                if(strcmp($permission->method,$method)==0) {
                    // $this->activity_model->RecordView();
                    return true;
                }
            }
        }//var_dump($forbidden); die;
        if($forbidden)
        {
            $this->setOriginUrl(doencrypt(uri_string()));
            redirect("login/signout/");
        }
    }

    public function setOriginUrl($origin_url)
    {
        $origin = array(
            'name'   => 'origin_url',
            'value'  => $origin_url,                            
            'expire' => '300',                                                                                   
            'secure' => TRUE
        );
        $this->input->set_cookie($origin);
    }

    public function getOriginUrl()
    {
        $origin = $this->input->cookie('origin_url');
        delete_cookie('origin_url');
        if(strlen($origin)>0) return dodecrypt($origin);
        return false;
    }

    private function CheckActiveEmployee($id){
        $this->db->where('id', $id);
        $this->db->where('active', 'Y');
        $query = $this->db->get('employee');
        if($query->num_rows() >= 0) return true;
        return false;
    }

    public function UserLoginStatus(){
        $employeeid = $this->session->userdata('employeeid'); // Returns NULL when empty
        if(strcmp($employeeid,'')==0) return false;
        else{
            return $this->CheckActiveEmployee($employeeid);
        }
    }

    public function RequireChangePassword()
    {
        $empid = $this->session->userdata('employeeid');
        $this->db->where('id', $empid);
        $employee = $this->db->get('employee')->row();
        if(strcmp($employee->reminder,'Y')==0 || durationdays(date('Y-m-d'),$employee->passworddate) >= 30) return true;
        return false;
    }

    public function CheckProfilePermission(){
        $username = $this->session->userdata('username');
        $this->db->where("username",$username);
        $query = $this->db->get("employee");
        $num_rows = $query->num_rows();
        if($num_rows != 1) redirect("login/signout");
    }

    private function getcode($code){
        return substr(md5((int)$code*777),17);
    }

    // PUTRA
    public function superaccess_production(){
    	$data = array(
    			array('id'=>1,'name'=>'Super Administrator'),
    			array('id'=>3,'name'=>'Production Manager'),
    			array('id'=>4,'name'=>'Production Assistant Manager'),
    			array('id'=>5,'name'=>'Production Supervisor'),
    			array('id'=>42,'name'=>'Product Manager'),
    	);
    	return $data;
    }

    public function priv_action($action,$allproduction=false){
    	$accessid = $this->session->userdata('accessid');
    	$msg = 'Access denied, you do not have permission '.$action.' this data!';
    	$access=false;
    	
    	if (!$allproduction){
    		$data = $this->superaccess_production();
    		if ($action == 'edit'){
    			//only use edit can't delete or cancel
    			$accessnew = array(array('id'=>31,'name'=>'Senior Production Administrator'));
    			$data = array_merge($data,$accessnew);
    		}
    	}else{
    		//seluruh staf pabrik can used
    		$data = $this->superaccess_allproduction();
    	}
    	
    	foreach ($data as $row){
    		if ($row['id'] == $accessid){
    			$msg = $action.' data succcessfull';
    			$access=true;
    		}
    	}
    	return array('access'=>$access,'msg'=>$msg);
    }

    public function superaccess_allproduction(){
    	$data = array(
    			array('id'=>1,'name'=>'Super Administrator'),
    			array('id'=>3,'name'=>'Production Manager'),
    			array('id'=>4,'name'=>'Production Assistant Manager'),
    			array('id'=>5,'name'=>'Production Supervisor'),
    			array('id'=>6,'name'=>'Production Administrator'),
    			array('id'=>31,'name'=>'Senior Production Administrator'),
    			array('id'=>17,'name'=>'Production 2D Design SPV'),
    			array('id'=>30,'name'=>'Production 3D Design SPV'),
    			array('id'=>42,'name'=>'Product Manager'),
    	);
    	return $data;
    }
}

?>
