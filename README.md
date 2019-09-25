# SimpleMailer
Simple PHP mailer for contact form processing

This is a real basic PHP contact form processor.
Requires PHP 5.3.0 because of the namespaces (though you're always free to delete it).

/simplemailer/config.php - it's where you define your email to send the form results and the result messages templates for your contact form visitors.

Currently name, email and message fields are mandatory and hard-coded in the processing method.

The HTML markup is shown in contact-form.php where /simplemailer/simplemailer.php is included, which processes the POST request, sends the form results to you email and generates the success or error message when the job is done.
Do not forget to echo the result message by calling $simpleMailer->getResultMessage() in your view.

# 1. How long did you spend on this coding test?

# 2. Would you change anything about your solution if you had more time?

1. I'd not include remote assets (css, js files etc.), except for maybe google fonts. My basic idea - everything remote is unsafe.





# 3. How would you track down a performance issue in production? Have you ever had to do this? Explain your answer

Oh yes, performance and all other types of issues is an inevitable part of the job in an agency (my 2 previous employers were agencies) with lots of projects in development and on maintenance with the agency.

###Tracking steps


1. Read the description of the problem.</li>
2. Replicate the problem.
	2.1. See if the developer (even the product manager is good enough) who worked on that feature/project is available to talk and talk to him/her.
3. If 2.1 was not helpful, start analyzing with the frontend - check out what happens in the browser console and on the network tab in the Debugger.
4. The problem has to be narrowed down in step 3. It's either on the frontend or on the backend. Network tab could say which endpoint is responding with delays.
	4.1. If I detected the exact endpoint which is not responding or responding with delays, analyze what happens in its code.</li>
5. If nothing helpful was discovered in step 4, start with checking out apache (or any other web server in use) logs. If nothing discovered, check out the farmework's logs.
6. If nothing discovered, check out the logs of any possible services that may be in use on that feature under question. (like the DB, kafka, elasticsearch etc). 
7. Typically something is discovered at this point, But even if not, nothing is left but to try to replicate the problem on DEV and start logging out or var_dump()'ing.
8. Never ever to be used but depending on the situation, if nothing helps, see if I can interfere into PROD setup. Meaning play with some settings or even change the code to narrow down the causes.

Step 8 is an extraordinary step but everything happens.</p>

The goal is to track the issue right? Not to actually solve the problem. So that my steps describe the process of finding the causes, not fixing it.




# 4. Please describe yourself as an engineer in JSON format. Multidemensional would be a plus

I'm a bit not an artistic person, so I hope converting my resume into JSON will do :)

<code>
	var paulDonskikh = {
		name = 'Paul',
		legalName = 'Pavel Donskikh',
		born = new Date()
	}
</code>
