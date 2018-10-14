<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CodeIgniter Google Login by CodexWorld</title>
<style type="text/css">
.container{
	padding: 20px;
}
.wrapper{
	width: 340px;
	margin: auto;
	padding: 10px;
    background-color: #e2e2e2;
	box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
}
.wrapper h2{
	font-size: 20px;
	color:#333;
	text-align: center;
}
.wrapper img{
	max-width: 100%;
}
</style>
</head>
<body>
<div class="container">
	<div class="wrapper">
		<h2>CodeIgniter Google Login</h2>
		<!-- Display sign in button -->
		<a href="<?php echo $loginURL; ?>"><img src="<?php echo base_url('assets/images/google-sign-in-btn.png'); ?>" /></a>
	</div>
</div>
</body>
</html>