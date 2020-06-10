<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Model {
  public function index_search($data, $age_from, $age_to) {
    $this->db->where($data);
    $this->db->where('age_value >=', $age_from);
    $this->db->where('age_value <=', $age_to);
    $query = $this->db->get('user');
    return $query;
  }

  public function regular_search_submit($data, $age_from, $age_to) {
    $this->db->where($data);
    $this->db->where('age_value >=', $age_from);
    $this->db->where('age_value <=', $age_to);
    $query = $this->db->get('user');
    return $query;
  }

  public function select_record () {
    $query = $this -> db -> get ("user");
    return $query;
  }

  public function record_insert ($data) {
    $this -> db -> insert ("user" , $data);
  }

  public function message_send_submit ($data) {
    $this -> db -> insert ("inbox" , $data);
  }
  public function shortlisted ($data) {
    $count=0;
    $this->db->where($data);
    $query = $this->db->get("shortlist_profile");
    foreach($query->result() as $row) {
      $count++;
    }
    if($count == 0) {
      $this -> db -> insert ("shortlist_profile" , $data);
    }
  }

  public function search___id ($userid) {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('userid', $userid);
    $query = $this->db->get();
    return $query;
  }

  public function login_cookie($email, $password)
  {
      $count = 0;
      $this->db->where('email',$email);
      $query = $this -> db -> get ("user");
      foreach ( $query->result() as $row ) {
        $count = 1;
        if($row->password == $password) {
          $this->input->set_cookie('user', $row->userid,3600);
          $diff = (date('Y') - date('Y',strtotime($row->age)));
          $data = array('age_value' => $diff);
          $this->db->where('userid', $row->userid);
          $this->db->update('user', $data);

        } else {
          redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/login/password');
        }
      }
      if($count == 0) {
        redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/login/email');
      }
  }
  public function edit_record($data)
  {
      	$cookieData = get_cookie('user');
        $this->db->where('userid',$cookieData);
        $this->db->update('user', $data);
  }

  public function change_password_update($cp, $np)  {
    $cookieData = get_cookie('user');
    $this->db->where('userid', $cookieData);
    $query = $this->db->get("user");
    $data = array('password' => $np );
    foreach($query->result() as $row) {
      if($row->password == $cp) {
        $this->db->where('userid', $cookieData);
        $this->db->update('user', $data);
        return "password change";
      } else {
        return "password unmatch";
      }
    }
  }
}
?>
