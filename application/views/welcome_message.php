<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Breached sites API</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Breached sites API</h1>

	<div id="body">
		<small><p>Note: If used with apache server and mod_rewrite module enabled, should work without index.php in URL.</p>
		<p>Note2: /<strong>api</strong>/ in URL is needed ONLY if application added to api folder</p></small>
			<h2>Getting all breached sites in the system</h2>
		<p>

	A "breach" is an instance of a system having been compromised by an attacker and the data disclosed. For example, Adobe was a breach, Gawker was a breach etc. It is possible to return the details of each of breach in the system which currently stands at 252 breaches.
		</p>
		<p> To get all breached sites use <code>GET localhost/api/index.php/breaches/</code></p>
		<h2>Getting a single breached site</h2>
		<p>Sometimes just a single breach is required and this can be retrieved by the breach "name". </p>
		<p> To get single breached site use <code>GET localhost/api/index.php/breaches/{name}</code> (example localhost/api/index.php/breaches/126) </p>

		<h2>Getting top 10 breached sites by account number in the breach</h2>
		<p> To get top 10 breached sites use <code>GET localhost/api/index.php/top10/</code></p>
	

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>