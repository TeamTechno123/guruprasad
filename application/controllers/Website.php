<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function index()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/index');
		$this->load->view('Include/footer');
	}
	public function about()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/about');
		$this->load->view('Include/footer');
	}

	public function leadership()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/leadership');
		$this->load->view('Include/footer');
	}
	public function exelence()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/exelence');
		$this->load->view('Include/footer');
	}
	public function policy()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/policy');
		$this->load->view('Include/footer');
	}
	public function team()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/team');
		$this->load->view('Include/footer');
	}
	public function managment()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/managment');
		$this->load->view('Include/footer');
	}
	public function partnership()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/partnership');
		$this->load->view('Include/footer');
	}
	public function contact()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/contact');
		$this->load->view('Include/footer');
	}
	public function business()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/business');
		$this->load->view('Include/footer');
	}
	public function facilities()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/facilities');
		$this->load->view('Include/footer');
	}
	public function gallery()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/gallery');
		$this->load->view('Include/footer');
	}

	public function carrer()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/carrer');
		$this->load->view('Include/footer');
	}

	public function resellor()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/resellor');
		$this->load->view('Include/footer');
	}

	public function government()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/govt');
		$this->load->view('Include/footer');
	}

	public function send_mail(){
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('email');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$designation = $this->input->post('designation');
		$organization = $this->input->post('organization');
		$country = $this->input->post('country');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$message = $this->input->post('message');
		$message1 ='
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Sender: '.$first_name.' '.$last_name.'
			 </p><br> <hr>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			Mobile No.: '.$mobile.'
			</p><br> <hr>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Designation: '.$designation.'  Organization: ' .$organization.' 	 Country: ' .$country.'
			 </p>
			 <br>
			 <hr>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Message: '.$message.'
			 </p>
		 ';

		// $message.' First Name'.$first_name."\r\n".' Last Name'.$last_name."\r\n".'Designation'.$designation."\r\n".' Organization'.$organization."\r\n".' mobile No.'."\r\n".$mobile."\r\n".' Country'."\r\n".$country;
		$from_email = $email;
		$recipient = "dhananjay.technothinksup@gmail.com";
		$subject = "Mail From Website - ";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from_email."\r\n".
		'Reply-To: '.$from_email."\r\n" .
		'X-Mailer: PHP/' . phpversion();

		$send = mail($recipient, $subject, $message1, $headers);
		if($send){
			$this->session->set_flashdata('send_email_sucess','Sucess');
		}
		else{
			$this->session->set_flashdata('send_email_error','error');
		}
		header('Location:'.base_url('Website/contact'));
	}


	public function resellor_mail(){
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('email');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$message1 ='
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Sender: '.$name.'
			 </p><br> <hr>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			Mobile No.: '.$mobile.'
			</p><br> <hr>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Message: '.$message.'
			 </p>
		 ';

		// $message.' First Name'.$first_name."\r\n".' Last Name'.$last_name."\r\n".'Designation'.$designation."\r\n".' Organization'.$organization."\r\n".' mobile No.'."\r\n".$mobile."\r\n".' Country'."\r\n".$country;
		$from_email = $email;
		$recipient = "dhananjay.technothinksup@gmail.com";
		$subject = "Mail From Website - ";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from_email."\r\n".
		'Reply-To: '.$from_email."\r\n" .
		'X-Mailer: PHP/' . phpversion();

		$send = mail($recipient, $subject, $message1, $headers);
		if($send){
			$this->session->set_flashdata('send_email_sucess2','Sucess');
		}
		else{
			$this->session->set_flashdata('send_email_error2','error');
		}
		header('Location:'.base_url('Website/resellor'));
	}


	public function send_resume(){
		date_default_timezone_set("Asia/Kolkata");
		$this->load->library('email');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		// $subject2 = $this->input->post('subject');
		$expertise_area = $this->input->post('expertise_area');
		// $message = $this->input->post('message');
		$h_qualification = $this->input->post('h_qualification');
		$ex_year = $this->input->post('ex_year');
		$ex_month = $this->input->post('ex_month');
		$cur_org = $this->input->post('cur_org');
		$cu_salary = $this->input->post('cu_salary');
		$expct_salary = $this->input->post('expct_salary');
		$resume = $this->input->post('resume');

		$message1 ='
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Sender: '.$first_name.' '.$last_name.'
			 </p><br> <hr>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			Mobile No.: '.$mobile.'
			</p><br> <hr>
			 <p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			 Expertise Area: '.$expertise_area.' 	 <br>  Highest Qualification: ' .$h_qualification.' 	 <br>	 Experience: ' .$ex_year.' year ' .$ex_month.' Month <br> Current Organization :' .$cur_org. '<br>
			  Current Annual Salary: ' .$cu_salary. '<br>  Expected Salary: ' .$expct_salary.'
			 </p>
		 ';
		// $name.$last_name."\r\n".' mobile No. '.$mobile."\r\n".'Area Of Expertise '.$expertise_area."\r\n".'highest Qualification '.$h_qualification."\r\n".'Experience'.$ex_year.'Year'.$ex_month.'Month'."\r\n".'Current Organization '.$cur_org."\r\n".'Current Annual Salary '.$cu_salary."\r\n".'Expected Salary '.$expct_salary;
		// echo $message1;
		$from_email = $email;
		$recipient = "dhananjay.technothinksup@gmail.com";
		$subject = "Mail From Website Online application For Job - ".$subject2;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from_email."\r\n".
		'Reply-To: '.$from_email."\r\n" .
		'X-Mailer: PHP/' . phpversion();

		$send = mail($recipient, $subject, $message1, $headers);
		if($send){
			$this->session->set_flashdata('send_email_sucess1','Sucess');
		}
		else{
			$this->session->set_flashdata('send_email_error1','error');
		}
		header('Location:'.base_url('Website/carrer'));
	}



}

?>
