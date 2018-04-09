<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('contact_view');
	}
	function validate()
	{
	$this->load->helper(array('form', 'url'));
	$this->form_validation->set_error_delimiters('<div class="label" style="display: block;width: 340px;padding: 10px;background-color: red; margin: 0px 0px 5px 0px; text-align: center;">', '</div>');
	$this->form_validation->set_rules('names','Name','trim|required');
	$this->form_validation->set_rules('email','Email','trim|required');
	$this->form_validation->set_rules('desc','Event Description','trim|required');
	
	if($this->form_validation->run()== FALSE)
		{
			$this->index();
		}
	else
		{
		$this->contact_mail();
		redirect('contact/index');	
		}

	}

	function contact_mail()
			{
				$config['protocol'] = 'smtp';
				$config['smtp_host'] ='mail.gwijie.com';
				$config['smtp_port'] = '465';
				$config['smtp_user'] = 'me@gwijie.com';
				$config['smtp_pass'] = 'tomodachitechno_0721';
				$config['smtp_timeout'] = '3000';
				$config['mailtype'] = 'html';
				$config['charset'] = 'utf-8';
				$config['wordwrap'] = TRUE;
				
				$this->email->set_mailtype("html");
				
				$this->email->from('me@gwijie.com');
				//$this->email->to('stephen@allogy.com');
				$this->email->to('bookings@conradgray.com');
				$this->email->reply_to('bookings@conradgray.com');
				$this->email->bcc('lacoasta@gmail.com');
			
				$this->email->subject('Conrad Gray Booking Form');
				$this->email->message('
				G-Money,<br><br>
				'.$this->input->post('desc').'
				<br>
				<br>
				- <br>
				<b>Sincerely,<br>
				'.$this->input->post('names').'</b><br>
				'.$this->input->post('name')
				);
				
				$this->email->send();
			}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */