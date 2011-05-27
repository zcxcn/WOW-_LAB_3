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

// 判断是否登陆
if (isset($_SESSION["usr"]) &&  $_SESSION["usr"]="start internet")
{
echo "您已经成功登陆<br>";
echo"注销登陆，请点击<a href=\"destroy.php\">注销</a>";

				
				
				
			$select=mysql_connect('localhost','root','')
			or die('连接失败：'.mysql_error());
			
			mysql_query('set names gb2312');

			if($select)
			{echo"<div id=\"hed\">";
			echo"连接成功<br>".mysql_get_host_info($select);
			echo"</div>";
			echo"<hr color=blue>";
			}
			if(mysql_select_db('传奇',$select))
			{
			  echo"<div id='suc'>选择传奇数据库成功！</div>";
			}
			else
			{
			  echo '数据库选择失败：'.mysql_error() ;
			}
			
		
		$a =mysql_query("select*from  副本  "   ,$select)
		or die("<br> 表副本不存在，查询失败".myaql_error());
		
		$row=mysql_fetch_row($a);
         $allnum=mysql_num_rows($a);
		echo"<hr color=red> 数据库中记录总数为：".$allnum."<br>";
		
		
		echo"怪物名称--HP----MP----坐标-X------坐标-Y<br>";
		while($row)
		{
           echo "<div class=ghed><strong>".$row[0]."</strong><br>--<b>难度系数:</b>".$row[1]."<br>--<b>简介:</b>".$row[2]."<br>";
		   
		   
		   
		     $a2 =mysql_query("select*from  莫愁 where 所副本名称='$row[0]' "   ,$select)
		        or die("表莫愁不存在，查询失败".myaql_error());
				
				
						$row2=mysql_fetch_row($a2);
                        $allnum2=mysql_num_rows($a2);
		   
		          	echo"  <div class='mochou'><br>此副本中<em>BOSS</em>总数为：".$allnum2."<br> ";
					while($row2)
					{
					echo "<br>".$row2[1]."<br>";
					 $row2=mysql_fetch_row($a2);
					 
					 
				
					   $a3 =mysql_query("select*from  装备 "   ,$select)
		                               or die("表莫愁不存在，查询失败".myaql_error());
				
				
						$row3=mysql_fetch_row($a3);
                        $allnum3=mysql_num_rows($a3);
					    $rad=rand(1,$allnum3);
						 
					    	 
							echo"  <div class='zhuangbei'><br>此BOSS掉落的<em>装备</em>总数为：".$rad." <br> ";
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
					  $a4 =mysql_query("select*from  装备  where 装备ID=$ary[$j] " ,$select)
		                               or die("表装备不存在，查询失败".myaql_error());
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
// 验证失败，将 $_SESSION["admin"] 置为 false
$_SESSION["admin"] = false;
//die("您无权访问");
echo"请<a href=\"login.php\">登录</a>...";
}	   
	    
	   ?>
	   
	   </div>
			<div id="footer">
					copyRight 2010  哈工大:Nersle
				</div> 
				
				</div>
				
				
			
			</div>
	
	
	</body>
 
</html>