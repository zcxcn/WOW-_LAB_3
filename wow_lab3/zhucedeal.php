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
			                               or die('����ʧ�ܣ�'.mysql_error());
										   
						  mysql_query('set names gb2312');
						  
						 if($select)
			                {  
						  if(mysql_select_db('����',$select))
						 { 
		                 if(empty($_POST['usrnm'])|| empty($_POST['pswd'])||empty($_POST['u_email']))
						    echo"�Բ�������д����Ϣ�����������ʵ�������ύ�� ";
							else{
						$str="INSERT INTO  �����֤  VALUES ( '".$_POST['usrnm']."','".$_POST['pswd']."','".$_POST['u_email']."');" ;
						   mysql_query($str,$select)
						 	or die("<br> �����֤�����ڣ�ע��ʧ��".myaql_error());
								
								echo"��ϲ��ע��ɹ���<br>";
								echo"���ص�½...<a href=\"login.php\">��½</a>";
						    
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