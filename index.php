<?php

error_log(print_r($_SERVER, true));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$state = $_REQUEST['state'];
	$redirect = $_REQUEST['redirect_uri'];
	$code = 'xyz';
	
	header( "Location: {$redirect}?code={$code}&state={$state}" ) ;
	exit;
}

?><html>
<body>
	<form method="post" action="/">
		<input type="hidden" name="state" value="<?php echo $_REQUEST['state'] ?>" />
		<input type="hidden" name="redirect_uri" value="<?php echo $_REQUEST['redirect_uri'] ?>" />
		<input type="submit" />
	</form>
</body>
</html>
