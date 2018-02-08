<?

function __autoload($classname) {
	$parts = explode('\\', $classname);
	$classname = strtolower(end($parts));
	$filename = $classname . '.class.php';
	if('config' == $classname) {
		$filename = $classname . '.php';
	}
	require_once($filename);
}


$simpleMailer = new \Simplemailer\Simplemailer(new \Simplemailer\Config());
$simpleMailer->processFormData();