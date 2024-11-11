<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormData extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if (empty($_POST)) {
			redirect(base_url());
		}

		// Storing google recaptcha response
		// in $recaptcha variable

		$this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'theodinjaipur@gmail.com';
		$config['smtp_pass'] = 'ilhphiqmihlvezxk';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not

		$this->email->initialize($config);

		$from = 'theodinjaipur@gmail.com';
		// $to = 'anshulkumar969602@gmail.com';
		$to = 'info@we3mindsinc.com';

		$subject = 'Contact us';
		$message = 'Hello Team, <br /> You have a contact request on we 3 minds. <br />';
		unset($_POST['g-recaptcha-response']);

		foreach ($_POST as $key => $value) {
			$message = $message . $key . '- ' . $value . '<br>';
		}



		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		$this->email->send();
		redirect(base_url(''));

	}
}
