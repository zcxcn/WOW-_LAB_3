<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
		<link rel="stylesheet" href="logdealinstyle.css" type="text/css" />
	</head>
	<body>
			<div id="all">
			
			
					<div id="contents"> 
                        <div id="keb">
					<?php 
					   
					    if(isset($_POST['ord']))
						header("location:zhuce.php");
					
					    else if(isset($_POST['log_in']) )
						{
				 
						 $select=mysql_connect('localhost','root','')
			                               or die('连接失败：'.mysql_error());
										   
						  mysql_query('set names gb2312');
						  
						 if($select)
			                {  
						  if(mysql_select_db('传奇',$select))
						 {
			
						 
						$aString = "select*from  身份认证 where 用户名= '".$_POST['usrnm']."';";
						 
						$a =mysql_query($aString ,$select)
								or die("<br> 身份认证表不存在，查询失败".myaql_error());
						  
						 $row=mysql_fetch_row($a);
			 
						 
						 if( mysql_num_rows($a)==0)
						   echo"用户名不存在！请先注册<a href=\"zhuce.php\">点击免费注册</a>";
						else 
						{ 				 
						          if($row[1]==$_POST['pswd'])  
						              {
									  echo "登陆成功！";
									   session_start();
						               $_SESSION["usr"]="start internet";
									  }
										 
						          else 
									{
										echo"登陆密码错误<br>";
										echo"请重新登陆<a href=\"login.php\">登陆</a>";
									}
						}
						
						}
					 	} 
						mysql_close($select);
					   }
					      
					?>
					
					<a href="lab3.php">lab3</a>
					</div>
			
					</div>
					
				 
		   </div>
	
	
	</body>
 
</html>