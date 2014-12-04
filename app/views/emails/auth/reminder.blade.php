<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Hi, {{$user->firstname}}</h2>
		<p>We'd like to personally welcome you to Career Consult. This is your opportunity to launch your career, and tailor a service to your career needs.</p>
		<div>
			To reset your password, complete this form: {{ URL::to('password/reset', array($token)) }}.<br/>
			This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.
		</div>
		<p>Kind Regards,<br>Team Career Consult</p>
	</body>
</html>
