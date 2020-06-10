<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
	 {
	 	parent :: __construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');    // this helper for redirect
		$this->load->model("Select");
		$this->load->helper('cookie');

	//	$this->load->view('show',$data);

	 }

	public function index()	{
	//	$this->load->view('welcome_message');
			$data["featured"] = $this->Select->select_record();
			$this->load->view("index",$data);
	}
	public function register()	{
		$this->load->view("register");
	}

	public function regular_search() {
		$this->load->view('regular_search');
	}

	public function regular_search_submit() {
		$data = array (
			"sex"=>$this->input->post('gender'),
			"state" => $this->input->post('state'),
			"city" => $this->input->post('city'),
			"religion" => $this->input->post('religion'),
			"mother_tongue" => $this->input->post('mother_tongue'),
		);
		$age_from = $this->input->post('age_from');
		$age_to = $this->input->post('age_to');

		$data["h"] = $this->Select->regular_search_submit($data, $age_from, $age_to);
		$this->load->view('regular_search', $data);
	}

	public function view_profile_by_id() {
		$profile_id = $this->uri->segment(3);
		$this->load->view("view_profile_by_id", $profile_id);
	}

	public function message_send() {
		$profile_id = $this->uri->segment(3);
		$this->load->view("message_send", $profile_id);
	}

	public function message_send_submit() {
		$profile_id = $this->uri->segment(3);
		$info = "message-send";
		$cookieData = get_cookie('user');
		$data = array (
			"to_" => $profile_id,
			"from_" => $cookieData,
			"message" => $this->input->post('message')
		);
		$this->Select->message_send_submit ($data);
		$this->load->view("message_send", $profile_id, $info);
	}

	public function shortlisted () {
		$profile_id = $this->uri->segment(3);
		$cookieData = get_cookie('user');
		$data = array (
			"userid" => $cookieData,
			"shortlisted_profile" =>$profile_id
		);
		$this->Select->shortlisted ($data);
		$this->load->view("view_profile_by_id", $profile_id);
	}

	public function new_matches() {
		$this->load->view('new_matches');
	}
	public function message () {
		$this->load->view('message');
	}

	public function shortlisted_profile_show () {
		$this->load->view('shortlisted_profile_show');
	}

	public function view_profile()	{
		$this->load->view("view_profile");
	}

	public function logout()	{
		$cookieData = get_cookie('user');
		delete_cookie('user');
	//	echo $cookieData;
		//$this->load->view("index");
		redirect("http://127.0.0.1:8000/ci_p/");
	}

	public function login()	{
		$this->load->view("login");
	}

	public function contacts()	{
		$this->load->view("contacts");
	}

	public function about()	{
		$this->load->view("about");
	}

	public function profile_update()	{
		$this->load->view("profile_update");
	}

	public function change_password()	{
		$this->load->view("change_password");
	}

	public function faq () {
		$this->load->view('faq');
	}

	public function search_ () {
		$this->load->view('religion_search');
	}

	public function search_id() {
		$this->load->view("search_id");
	}

	public function search__id() {
		$userid = $this->input->post('userid');
		$data["h"] = $this->Select->search___id($userid);
		$this->load->view('search_id',$data);
	}

	public function search_in() {
		$data = array (
			'sex' => $this->input->post('gender'),
			'state' => $this->input->post('state'),
		);
		$age_from = $this->input->post('age_from');
		$age_to = $this->input->post('age_to');
		$data["h"] = $this->Select->index_search($data, $age_from, $age_to);
		$this->load->view('regular_search', $data);

	}

	public function login_data()	{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

		$this->Select->login_cookie($email,$password);
		redirect("http://127.0.0.1:8000/ci_p/");
	}

	public function data_submit() {
		//Randam code
	$a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
	$b=array_rand($a,5);
	$c="";
	for($i=0;$i<sizeof($b);$i++){
		$c=$c.$a[$b[$i]];
	}
	$age = $this->input->post('age');
	$diff = (date('Y') - date('Y',strtotime($age)));
	$data = array (
		"userid"=>$c,
		"username"=> $this->input->post('username'),
		"password"=>$this->input->post('password'),
		"email"=>$this->input->post('email'),
		"age"=>$this->input->post('age'),
		"sex"=>$this->input->post('sex'),
		"about"=>$this->input->post('about'),
		"marital_status" => $this->input->post('marital_status'),
		"state" => $this->input->post('state'),
		"city" => $this->input->post('city'),
		"religion" => $this->input->post('religion'),
		"mother_tongue" => $this->input->post('mother_tongue'),
		"age_value" => $diff
	);

					$config['upload_path']          = './uploads/';
					$config['allowed_types']        = 'jpg';
					$config['file_name']  = $c;
					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('userfile'))
					{
									//$error = array('error' => $this->upload->display_errors());
								//	echo $this->upload->display_errors();
									redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/register/file_include_error');
							 //	 $this->load->view('upload_form', $error);
					}
					else
					{
						 /*	 $data = array('upload_data' => $this->upload->data());
									foreach ($data as $item => $value) {
										echo $item.":"; echo $value;
									} */
									$this->Select->record_insert($data);
									$email = $this->input->post('email');
									$password = $this->input->post('password');
								$this->Select->login_cookie($email,$password);
								redirect("http://127.0.0.1:8000/ci_p/");

					}
}

public function profile_data_update() {
	$age = $this->input->post('age');
	$diff = (date('Y') - date('Y',strtotime($age)));
	$data = array (
		"username"=> $this->input->post('username'),
		"age"=>$this->input->post('age'),
		"sex"=>$this->input->post('sex'),
		"about"=>$this->input->post('about'),
		"marital_status" => $this->input->post('marital_status'),
		"state" => $this->input->post('state'),
		"city" => $this->input->post('city'),
		"religion" => $this->input->post('religion'),
		"mother_tongue" => $this->input->post('mother_tongue'),
		"age_value" =>$diff
	);
		$this->Select->edit_record($data);
		redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile');
	}

	public function change_password_update() {
		$cp = $this->input->post('cp');
		$np = $this->input->post('np');
		$dt =	$this->Select->change_password_update($cp, $np);
		if($dt == 'password change') {
			redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/view_profile');
		} else {
			$id = "unmatch";
			redirect('http://127.0.0.1:8000/ci_p/index.php/Welcome/change_password/',$id);
		}
	}
}
