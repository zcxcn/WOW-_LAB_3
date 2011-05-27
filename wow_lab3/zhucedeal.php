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
				 {
						
						 $select=mysql_connect('localhost','root','')
			                               or die('连接失败：'.mysql_error());
										   
						  mysql_query('set names gb2312');
						  
						 if($select)
			                {  
						  if(mysql_select_db('传奇',$select))
						 { 
		                 if(empty($_POST['usrnm'])|| empty($_POST['pswd'])||empty($_POST['u_email']))
						    echo"对不起，您填写的信息不完整，请核实后重新提交！ ";
							else{
						$str="INSERT INTO  身份认证  VALUES ( '".$_POST['usrnm']."','".$_POST['pswd']."','".$_POST['u_email']."');" ;
						   mysql_query($str,$select)
						 	or die("<br> 身份认证表不存在，注册失败".myaql_error());
								
								echo"恭喜您注册成功！<br>";
								echo"返回登陆...<a href=\"login.php\">登陆</a>";
						    
						           }
						}
					 	} 
						  mysql_close($select);
			 }
					?>
					
					
					</div>
			
					</div>
					
				 
		   </div>
	
	
	</body>
 
</html>