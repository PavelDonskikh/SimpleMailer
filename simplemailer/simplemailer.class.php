<?
namespace Simplemailer;

class Simplemailer {

	private $resultMessage = '';
	private $config;

	public function __construct($_config) {
		$this->config = $_config;
	}
	
	public function processFormData() {
		
		try {
		
			if(!empty($_POST['form'])) {
				$postData = $_POST['form'];
				if(isset($postData['send'])) {
					if(strlen(trim($postData['email'])) > 0 && 
					strlen(trim($postData['name'])) > 0 && 
					strlen(trim($postData['message'])) > 0
					) {
						$message = '';
						$values = array();
						foreach($postData as $key => $value) {
							if('send' == $key) {
								continue;
							}
							$message .= $key . ": " . "%s \r\n";
							$values[] = strip_tags(htmlspecialchars($value, ENT_QUOTES));
						}
						$message = vsprintf($this->config->emailIntro  . $message, $values);
					
						$headers = '';
						if(strlen($this->config->mailFrom) > 0) {
							$headers = 'From: ' . $this->config->mailFrom . '\r\n';
						}
						if (mail($this->config->mailTo, $this->config->subject, $message, $headers)) {
							$this->setResultMessage('Message successfully sent!');
							unset($_POST['form']);
						} else {
							$this->setResultMessage('Message delivery failed!', false);
						}
					} else {
						$this->setResultMessage('Check required fields!', false);
					}
				}	
			}
		
		} catch(Exception $e) {
			$this->setResultMessage('Unpredictable error occured while sending Email!', false);
		}
	}
	
	public function getResultMessage() {
		return $this->resultMessage;
	}
	
	private function setResultMessage($messageText, $success = true) {
		if($success) {
			$this->resultMessage = str_replace('%message%', $messageText, $this->config->successMessageTemplate);
		} else {
			$this->resultMessage = str_replace('%message%', $messageText, $this->config->errorMessageTemplate);
		}
	}

}