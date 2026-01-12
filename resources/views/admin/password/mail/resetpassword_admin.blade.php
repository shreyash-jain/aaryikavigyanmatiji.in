<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Password Reset</title>
		<style>
			/* Add your custom styles here */
			body {
				font-family: Arial, sans-serif;
				line-height: 1.6;
				margin: 0;
				padding: 0;
				background-color: #f4f4f4;
			}
			.container {
				max-width: 600px;
				margin: 20px auto;
				padding: 20px;
				background-color: #fff;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}
			.message {
				color: #333;
			}
			.reset-link {
				display: inline-block;
				margin-top: 10px;
				padding: 10px 15px;
				background-color: #007bff;
				color: #ffff;
				text-decoration: none;
				border-radius: 5px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h2>Password Reset</h2>
			<p class="message">Dear {!! $name !!},</p>
			<p class="message">We received a request to reset the password for your account. To proceed with the password reset, please click on the link below:</p>
			<a class="reset-link" style="color:white" href="{!! $linked !!}">Reset Password</a>
			<p class="message">If you didn't request a password reset, you can safely ignore this email. Your account security is important to us.</p>
			<p class="message">Please note that this link is valid for a limited time for security reasons. If you don't reset your password within 5 minutes, you'll need to submit another password reset request.</p>
			<p class="message">Thank you,<br>The AARYIKAVIGYANMATAJI management team</p>
		</div>
	</body>
</html>