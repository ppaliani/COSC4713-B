<!-- Figure 1: Welcome Screen by Alexander -->
<title>Welcome to Best Book Buy Online Bookstore!</title>
<body>
	<table align="center" style="border:1px solid blue;">
	<tr><td><h2>Best Book Buy (3-B.com)</h2></td></tr>
	<tr><td><h4>Online Bookstore</h4></td></tr>
	<tr><td><form action="" method="post">
		<input type="radio" name="group1" value="SearchCat.php" onclick="screen2()">Search Online<br/>
		<input type="radio" name="group1" value="customer_registration.php" onclick="customer_registration()">New Customer<br/>
		<input type="radio" name="group1" value="user_login.php" onclick="user_login()">Returning Customer<br/>
		<input type="radio" name="group1" value="admin_login.php" onclick="admin_login()">Administrator<br/>
		<input type="submit" name="submit" value="ENTER">
	</form></td></tr>
	</table>
</body>
<script>
	function screen2() {
		var str = "screen2";
		window.location.href = str;
	}

	function customer_registration() {
		var str = "customer_registration";
		window.location.href = str;
	}

	function user_login() {
		var str = "user_login";
		window.location.href = str;
	}

	function admin_login() {
		var str = "admin_login";
		window.location.href = str;
	}
</script>	
</html>