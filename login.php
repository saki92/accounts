<?php
if((isset($_POST['inputname'])) && (isset($_POST['inputpwd']))) {
	require_once(__DIR__."/dblogin.php");
	$data=pg_query($conn, "SELECT * FROM users");
	while($row=pg_fetch_row($data)) {
		if(($_POST['inputname']==$row[0]) && ($_POST['inputpwd']==$row[1])) {
//print_r($row); print_r($_POST);
			echo "login successful";
			$t=1;
			break; }}
	if($t!=1) { echo "username/pwd wrong"; }
}





?>
<html>
<body>
<form action='login.php' method='post'>
<input type='text' name='inputname'>user
<input type='password' name='inputpwd'>pwd
<input type='submit' value='submit'>
</form></html> 
<!--<html>
	<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="styles.css">
	</head>
	<body class="body1">
		<div class="container">
			<div class="row">
				<div class="login-pg span6">
					<form action='login.php' method='post' class="form-horizontal">
						<div class="row-fluid ctrl-gp span6">
							<label class="ctrl-label">Login Name</label>
							<div class="ctrls">
								<input type="text" id="inputname">
							</div>
						</div><br /><br/>
						<div class="row-fluid ctrl-gp span6">
							<label class="ctrl-label">Company Name</label>
							<div class="ctrls">
								<select>
									<option>VVB</option>
								</select>
							</div>
						</div><br /><br />
						<div class="row-fluid ctrl-gp span6">
							<label class="ctrl-label">Password</label>
							<div class="ctrls">
								<input type="password" id="inputpwd">
							</div>
						</div><br /><br />
						<div class="row ctrl-gp span6">
							<div class="ctrls-btn">
								<button type="submit" class="btn btn-success" id="butt">Submit</button>
								<button type="reset" class="btn btn-danger" id="butt">cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
