<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
		<link rel="stylesheet" href="lab3style.css" type="text/css" />
	</head>
	<body>
			<div id="all">
			<div id="contents"> 					
	   <?php	
				
				
				
				session_start();

// �ж��Ƿ��½
if (isset($_SESSION["usr"]) &&  $_SESSION["usr"]="start internet")
{
echo "���Ѿ��ɹ���½<br>";
echo"ע����½������<a href=\"destroy.php\">ע��</a>";

				
				
				
			$select=mysql_connect('localhost','root','')
			or die('����ʧ�ܣ�'.mysql_error());
			
			mysql_query('set names gb2312');

			if($select)
			{echo"<div id=\"hed\">";
			echo"���ӳɹ�<br>".mysql_get_host_info($select);
			echo"</div>";
			echo"<hr color=blue>";
			}
			if(mysql_select_db('����',$select))
			{
			  echo"<div id='suc'>ѡ�������ݿ�ɹ���</div>";
			}
			else
			{
			  echo '���ݿ�ѡ��ʧ�ܣ�'.mysql_error() ;
			}
			
		
		$a =mysql_query("select*from  ����  "   ,$select)
		or die("<br> ���������ڣ���ѯʧ��".myaql_error());
		
		$row=mysql_fetch_row($a);
         $allnum=mysql_num_rows($a);
		echo"<hr color=red> ���ݿ��м�¼����Ϊ��".$allnum."<br>";
		
		
		echo"��������--HP----MP----����-X------����-Y<br>";
		while($row)
		{
           echo "<div class=ghed><strong>".$row[0]."</strong><br>--<b>�Ѷ�ϵ��:</b>".$row[1]."<br>--<b>���:</b>".$row[2]."<br>";
		   
		   
		   
		     $a2 =mysql_query("select*from  Ī�� where ����������='$row[0]' "   ,$select)
		        or die("��Ī����ڣ���ѯʧ��".myaql_error());
				
				
						$row2=mysql_fetch_row($a2);
                        $allnum2=mysql_num_rows($a2);
		   
		          	echo"  <div class='mochou'><br>�˸�����<em>BOSS</em>����Ϊ��".$allnum2."<br> ";
					while($row2)
					{
					echo "<br>".$row2[1]."<br>";
					 $row2=mysql_fetch_row($a2);
					 
					 
				
					   $a3 =mysql_query("select*from  װ�� "   ,$select)
		                               or die("��Ī����ڣ���ѯʧ��".myaql_error());
				
				
						$row3=mysql_fetch_row($a3);
                        $allnum3=mysql_num_rows($a3);
					    $rad=rand(1,$allnum3);
						 
					    	 
							echo"  <div class='zhuangbei'><br>��BOSS�����<em>װ��</em>����Ϊ��".$rad." <br> ";
						  $i=1;
							$tf=array_fill(1,$allnum3,1);
								
						  $rad++;
					       while($i<$rad)
						   {
						   $rs=rand(1,$allnum3);
						   if($tf[$rs]==1)
						       {
							      $ary[$i]=$rs;
								  $tf[$rs]=0;
								  $i++;
								  
							   }
						   }
	 
							
					$j=1;
				 
					 
                    while($j<$i)
					 {
					  $a4 =mysql_query("select*from  װ��  where װ��ID=$ary[$j] " ,$select)
		                               or die("��װ�������ڣ���ѯʧ��".myaql_error());
					  $row4=mysql_fetch_row($a4);
					  echo "            ".$row4[1] ;
					  $j++;
					 }
					 
					 echo "</div>";
					}
					
					echo "</div>"."</div>";
				 
		    
		   
		  $row=mysql_fetch_row($a);
		}
		 
		
	   mysql_close($select);
	   
}
else
{
// ��֤ʧ�ܣ��� $_SESSION["admin"] ��Ϊ false
$_SESSION["admin"] = false;
//die("����Ȩ����");
echo"��<a href=\"login.php\">��¼</a>...";
}	   
	    
	   ?>
	   
	   </div>
			<div id="footer">
					copyRight 2010  ������:Nersle
				</div> 
				
				</div>
				
				
			
			</div>
	
	
	</body>
 
</html>