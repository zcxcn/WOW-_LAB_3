<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
		<link rel="stylesheet" href="logdealinstyle.css" type="text/css" />
	</head>
	<body>
 <?php
 
 
	session_start();
 
	unset($_SESSION["usr"]);
 
	session_destroy(); 
	
	echo"你已经成功注销！";
	?>
	</body>
 
</html>