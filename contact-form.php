<? require_once($_SERVER['DOCUMENT_ROOT'] . '/simplemailer/simplemailer.php'); ?>

<?=$simpleMailer->getResultMessage();?>
<form action="#mail-result" method="post">
	<input name="form[send]" value="Y" type="hidden">

	<div>Name</div>
	<input name="form[name]" value="<?=strip_tags(htmlspecialchars($_POST['form']['name'], ENT_QUOTES))?>" placeholder="Your name" type="text" />
	
	<div>E-mail</div>
	<input name="form[email]" value="<?=strip_tags(htmlspecialchars($_POST['form']['email'], ENT_QUOTES))?>" placeholder="Your e-mail" type="email">
	
	<div>Message</div>
	<textarea name="form[message]"><?=strip_tags(htmlspecialchars($_POST['form']['message'], ENT_QUOTES))?></textarea>
	
	<button>Submit</button>
</form>
