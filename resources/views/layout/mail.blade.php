<!DOCTYPE html>
<html lang="fr" style="margin:0;padding:0;">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('sujet', 'Notification')</title>
	<!-- Bootstrap Icons CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<style>
		body {
			margin: 0;
			padding: 0;
			background: #f6f6f6;
			font-family: Arial, sans-serif;
			color: #222;
		}
		.container {
			max-width: 600px;
			margin: 30px auto;
			background: #fff;
			border-radius: 8px;
			box-shadow: 0 2px 8px rgba(0,0,0,0.04);
			overflow: hidden;
		}
		.header {
			background: #0d6efd;
			color: #fff;
			padding: 24px 32px 16px 32px;
			text-align: center;
		}
		.header h1 {
			margin: 0;
			font-size: 1.7rem;
			font-weight: 600;
		}
		.content {
			padding: 32px;
			font-size: 1rem;
			line-height: 1.6;
		}
		.footer {
			background: #f1f3f4;
			padding: 24px 32px;
			font-size: 0.95rem;
			color: #555;
		}
		.contact-info {
			margin-bottom: 16px;
		}
		.social-icons {
			margin-top: 8px;
		}
		.social-icons a {
			display: inline-block;
			margin-right: 10px;
			color: #0d6efd;
			text-decoration: none;
			font-size: 1.3rem;
		}
		@media only screen and (max-width: 600px) {
			.container, .header, .content, .footer {
				padding-left: 10px !important;
				padding-right: 10px !important;
			}
			.content {
				padding: 20px 10px !important;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>@yield('titre', 'Titre de l’email')</h1>
		</div>
		<div class="content">
			@yield('contenu')
		</div>
		<div class="footer">
			<div class="contact-info">
				<strong>Contact :</strong><br>
				contact@ma-boutique.com<br>
				+33 1 23 45 67 89
			</div>
			<div class="social-icons">
				<a href="https://facebook.com/" title="Facebook"><i class="bi bi-facebook"></i></a>
				<a href="https://twitter.com/" title="Twitter"><i class="bi bi-twitter-x"></i></a>
				<a href="https://instagram.com/" title="Instagram"><i class="bi bi-instagram"></i></a>
				<a href="https://linkedin.com/" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
			</div>
		</div>
	</div>
</body>
</html>
