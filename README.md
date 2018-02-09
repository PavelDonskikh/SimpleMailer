# SimpleMailer
Simple PHP mailer for contact form processing

This is a real basic PHP contact form processor.
Requres PHP 5.3.0 because of the namespaces (though you're always free to delete it).

/simplemailer/config.php - it's where you define your email to send the form results and the result messages templates for your contact form visitors.

The HTML markup is shown in contact-form.php where /simplemailer/simplemailer.php is included, which processes the POST request, sends the form results to you email and generates the success or error message when the job is done.
Do not forget to echo the result message by calling $simpleMailer->getResultMessage() in your view.
