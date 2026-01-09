<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";

//	$DateAndTime = date('Y-m-d');
	$DateAndTime = date('Y-m-d h:i:s');
	echo "date = ".$DateAndTime;
	print "<br>";

	echo "POD = ".$pod = $_GET['pod'];
	print "<br>";
	echo "VIA = ".$via = $_GET['via'];
	print "<br>";
//	echo "LINE = ".$line_number = $_GET['line_number'];
//	print "<br>";
//	print "<br>";
	
?>

<html>

<style>

table
{
	border: 1px solid #444444;
	border-collapse : collapse;
}
th, td {
	border: 1px solid #444444;
	padding: 5px;
}
  
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">

<?
	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

	$re2 = mysql_query("SELECT * FROM line WHERE uid = $line_number");
	while ($result2 = mysql_fetch_array($re2)) 
	{
		print "LINE : ";
		echo '<span style="color:blue;">'.$result2[1].'</span>';
		print "<br>";
		print "<br>";
	}
		
	// key 값 정하기
	$nn = "";
	$key = "";
	$schedule = 0;
	if(empty($via)) // VIA == NULL
	{
		$key = $pod;
	}
	else
	{
		$key = $via;
	}
	//echo "key = ".$key.'<br>';
		
	// 스케쥴 검색
	// 항구 - 선사별 서비스명 리스트
	$re4 = mysql_query("SELECT * FROM pod_service WHERE pod = '$key'");
	while ($result4 = mysql_fetch_array($re4)) 
	{
		if(!empty($result4))
		{
			$service1 = $result4[service1];
			//echo "service1 = ".$service1.'<br>';
			//echo "line_number = ".$line_number.'<br>';
			if($service1 != 'n')
			{
				echo '<table>';
				// 선사서비스 - 운항 모선 검색
				$re5 = mysql_query("SELECT * FROM line_service WHERE service_name = '$service1' and line = $line_number order by uid");
				while ($result5 = mysql_fetch_array($re5)) 
				{
					if($result5 != null)
					{
						$vessel = $result5[vessel];
						$space = $result5[space];
						$service3_count = 0;
					//	echo '<br>'.'$vessel = '.$vessel.' $space = '.$space.'<br>';
						//$re51 = mysql_query("SELECT * FROM terminal WHERE vessel = '$vessel' and voyage LIKE '%$result5[4]%' order by etd");
						// 터미널에서 실시간 ETD 검색
						$re51 = mysql_query("SELECT * FROM terminal WHERE vessel LIKE '%$vessel%' order by etd");
						while ($result51 = mysql_fetch_array($re51)) 
						{
							//echo 'empty($result51) = ?'.'<br>';
							if($result51 != null)
							{
								$service3_count++;
							//	echo 'empty($result51) = false'.'<br>';
								$voyage = $result51[voyage];
								$etd = $result51[etd];
								$service_name = $result5[service_name];
								//$vessel_t = $result5[vessel];
								//$ves2 = $line_t." ".$vessel." ".$etd;
								//$ves2 = $service_name." ".$vessel." ".$etd." [ ".$space." ]";
								
								$ves2 = "<tr><td>".$service_name."</td><td>".$vessel."</td><td>".$voyage."</td><td>".$etd."</td><td>".$space."</td></tr>";
								
								if($line_number == 12) // YML
								{
								?>
								<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
								<?
								}
								else
								{
									echo $ves2;
								}
								print "<br>";
							}
						}
					//	echo '$service3_count = '.$service3_count.'<br>';
						if($service3_count == 0)
						{
							$etd = $result5[5];
							$voyage = $result5[4];
							$service_name = $result5[service_name];
							//$vessel_t = $result5[vessel];
							//$ves2 = $line_t." ".$vessel." ".$etd;
							//$ves2 = $service_name." ".$vessel." ".$voyage." ".$etd." [ ".$space." ]";
							$ves2 = "<tr><td>".$service_name."</td><td>".$vessel."</td><td>".$voyage."</td><td>".$etd."</td><td>".$space."</td></tr>";
								
							if($line_number == 12) // YML
							{
							?>
							<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
							<?
							}
							else
							{
								echo $ves2;
							}
							print "<br>";
						}
					}
				}
				echo '</table>';
				print "<br>";
			}

			$service2 = $result4[service2];
			if($service2 != 'n')
			{
				// 선사서비스 - 운항 모선 검색
				$re5 = mysql_query("SELECT * FROM line_service WHERE service_name = '$service2' and line = $line_number order by uid");
				while ($result5 = mysql_fetch_array($re5)) 
				{
					if($result5 != null)
					{
						$vessel = $result5[vessel];
						$space = $result5[space];
						$service3_count = 0;
					//	echo '<br>'.'$vessel = '.$vessel.' $space = '.$space.'<br>';
						//$re51 = mysql_query("SELECT * FROM terminal WHERE vessel = '$vessel' and voyage LIKE '%$result5[4]%' order by etd");
						// 터미널에서 실시간 ETD 검색
						$re51 = mysql_query("SELECT * FROM terminal WHERE vessel LIKE '%$vessel%' order by etd");
						while ($result51 = mysql_fetch_array($re51)) 
						{
							//echo 'empty($result51) = ?'.'<br>';
							if($result51 != null)
							{
								$service3_count++;
							//	echo 'empty($result51) = false'.'<br>';
								$etd = $result51[etd];
								$service_name = $result5[service_name];
								//$vessel_t = $result5[vessel];
								//$ves2 = $line_t." ".$vessel." ".$etd;
								$ves2 = $service_name." ".$vessel." ".$etd." [ ".$space." ]";
								
								if($line_number == 12) // YML
								{
								?>
								<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
								<?
								}
								else
								{
									echo $ves2;
								}
								print "<br>";
							}
						}
					//	echo '$service3_count = '.$service3_count.'<br>';
						if($service3_count == 0)
						{
							$etd = $result5[5];
							$voyage = $result5[4];
							$service_name = $result5[service_name];
							//$vessel_t = $result5[vessel];
							//$ves2 = $line_t." ".$vessel." ".$etd;
							$ves2 = $service_name." ".$vessel." ".$voyage." ".$etd." [ ".$space." ]";
								
							if($line_number == 12) // YML
							{
							?>
							<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
							<?
							}
							else
							{
								echo $ves2;
							}
							print "<br>";
						}
					}
				}
				print "<br>";
			}
			
			$service3 = $result4[service3];
			//echo '$service3 = '.$service3.' $line_number = '.$line_number;
			// 선사 서비스명 + 선사번호
			
			if($service3 != 'n')
			{
				// 선사서비스 - 운항 모선 검색
				$re5 = mysql_query("SELECT * FROM line_service WHERE service_name = '$service3' and line = $line_number order by uid");
				while ($result5 = mysql_fetch_array($re5)) 
				{
					if($result5 != null)
					{
						$vessel = $result5[vessel];
						$space = $result5[space];
						$service3_count = 0;
					//	echo '<br>'.'$vessel = '.$vessel.' $space = '.$space.'<br>';
						//$re51 = mysql_query("SELECT * FROM terminal WHERE vessel = '$vessel' and voyage LIKE '%$result5[4]%' order by etd");
						// 터미널에서 실시간 ETD 검색
						$re51 = mysql_query("SELECT * FROM terminal WHERE vessel LIKE '%$vessel%' order by etd");
						while ($result51 = mysql_fetch_array($re51)) 
						{
							//echo 'empty($result51) = ?'.'<br>';
							if($result51 != null)
							{
								$service3_count++;
							//	echo 'empty($result51) = false'.'<br>';
								$etd = $result51[etd];
								$service_name = $result5[service_name];
								//$vessel_t = $result5[vessel];
								//$ves2 = $line_t." ".$vessel." ".$etd;
								$ves2 = $service_name." ".$vessel." ".$etd." [ ".$space." ]";
								
								if($line_number == 12) // YML
								{
								?>
								<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
								<?
								}
								else
								{
									echo $ves2;
								}
								print "<br>";
							}
						}
					//	echo '$service3_count = '.$service3_count.'<br>';
						if($service3_count == 0)
						{
							$etd = $result5[5];
							$voyage = $result5[4];
							$service_name = $result5[service_name];
							//$vessel_t = $result5[vessel];
							//$ves2 = $line_t." ".$vessel." ".$etd;
							$ves2 = $service_name." ".$vessel." ".$voyage." ".$etd." [ ".$space." ]";
								
							if($line_number == 12) // YML
							{
							?>
							<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
							<?
							}
							else
							{
								echo $ves2;
							}
							print "<br>";
						}
					}
				}
				print "<br>";
			}

			$service4 = $result4[service4];
			if($service4 != 'n')
			{
				// 선사서비스 - 운항 모선 검색
				$re5 = mysql_query("SELECT * FROM line_service WHERE service_name = '$service4' and line = $line_number order by uid");
				while ($result5 = mysql_fetch_array($re5)) 
				{
					if($result5 != null)
					{
						$vessel = $result5[vessel];
						$space = $result5[space];
						$service3_count = 0;
					//	echo '<br>'.'$vessel = '.$vessel.' $space = '.$space.'<br>';
						//$re51 = mysql_query("SELECT * FROM terminal WHERE vessel = '$vessel' and voyage LIKE '%$result5[4]%' order by etd");
						// 터미널에서 실시간 ETD 검색
						$re51 = mysql_query("SELECT * FROM terminal WHERE vessel LIKE '%$vessel%' order by etd");
						while ($result51 = mysql_fetch_array($re51)) 
						{
							//echo 'empty($result51) = ?'.'<br>';
							if($result51 != null)
							{
								$service3_count++;
							//	echo 'empty($result51) = false'.'<br>';
								$etd = $result51[etd];
								$service_name = $result5[service_name];
								//$vessel_t = $result5[vessel];
								//$ves2 = $line_t." ".$vessel." ".$etd;
								$ves2 = $service_name." ".$vessel." ".$etd." [ ".$space." ]";
								
								if($line_number == 12) // YML
								{
								?>
								<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
								<?
								}
								else
								{
									echo $ves2;
								}
								print "<br>";
							}
						}
					//	echo '$service3_count = '.$service3_count.'<br>';
						if($service3_count == 0)
						{
							$etd = $result5[5];
							$voyage = $result5[4];
							$service_name = $result5[service_name];
							//$vessel_t = $result5[vessel];
							//$ves2 = $line_t." ".$vessel." ".$etd;
							$ves2 = $service_name." ".$vessel." ".$voyage." ".$etd." [ ".$space." ]";
								
							if($line_number == 12) // YML
							{
							?>
							<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
							<?
							}
							else
							{
								echo $ves2;
							}
							print "<br>";
						}
					}
				}
				print "<br>";
			}
		}	
    }
    mysql_close($s);
    //print "<br><a href='1.php'>메인 화면으로</a>";

?>

<body>
<span>현재 창을 닫으려면 닫기 버튼을 누르세요!</span>
<span onclick="window.close();">[ 닫기 ]</span>
</body>

</html>