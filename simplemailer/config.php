<?
namespace Simplemailer;

class Config {

	/**
	* Destination email address
	*/
	public $mailTo = 'youremail@yourdomain.tld';
	
	/**
	* Email from
	*/
	public $mailFrom = '';
	
	/**
	* Email subject
	*/
	public $subject = 'Simple Contact Form';
	
	/**
	* Success message template
	*/
	public $successMessageTemplate = '<p id="mail-result">%message%</p>';
	
	/**
	* Error message template
	*/
	public $errorMessageTemplate = '<p id="mail-result">%message%</p>';
	
	/**
	* Email intro
	*/
	public $emailIntro = "Simple contact form result \r\n";




	public function __construct() {
		;
	}

}
