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

	public function infrastructure()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/infrastructure');
		$this->load->view('Include/footer');
	}

	public function products()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/products');
		$this->load->view('Include/footer');
	}
	public function enquiry()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/enquiry');
		$this->load->view('Include/footer');
	}
	public function contact()
	{
		$this->load->view('Include/head');
		$this->load->view('Website/contact');
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




}

?>
