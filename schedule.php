<?
	@session_start();
	$id = $_SESSION["id"];
//	echo "id = ".$id;
//	print "<br>";

//	$DateAndTime = date('Y-m-d');
	$DateAndTime = date('Y-m-d h:i:s');
//	echo "date = ".$DateAndTime;
//	print "<br>";

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
	//	print "<br>";
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
	
//	echo '<table>';	

	//echo "key = ".$key.'<br>';
		


	// 스케쥴 검색
	// 항구 - 선사별 서비스명 리스트
	$re4 = mysql_query("SELECT * FROM pod_service2 WHERE pod LIKE '%$key%'");
	while ($result4 = mysql_fetch_array($re4)) 
	{
		if(!empty($result4))
		{
			$service1 = $result4[service];

			//echo "service = ".$service1.'<br>';
			//echo "line_number = ".$line_number.'<br>';

		//	echo "service = ".$service1.'<br>';
		//	echo "line_number = ".$line_number.'<br>';

		//	if($service != 'n')
		//	{
			//echo 'test1';
				echo '<table>';
			//	echo 'test2';
				// 선사서비스 - 운항 모선 검색
				//$re5 = mysql_query("SELECT * FROM line_service WHERE line = $line_number order by uid");
				$q = "SELECT * FROM line_service WHERE line = $line_number and service_name = '$service1' order by uid";
				//echo $q;
				//exit-1;
				$re5 = mysql_query($q); // 
//				$re5 = mysql_query("SELECT * FROM pod_service2 WHERE pod LIKE '%$key%'");
				while ($result5 = mysql_fetch_array($re5)) 
				{

					//echo 'test3';
				//	echo '<table>';

					//echo 'test3';


					if(!empty($result5))//if($result5 != null)
					{
						//echo '<table>';
						$vessel = $result5[vessel];
						$space = $result5[space];
						$service3_count = 0;

						$null_count = 0;
						//echo '<br>'.'$vessel = '.$vessel.' $space = '.$space.'<br>';

						//echo '<br>'.'$vessel = '.$vessel.' $space = '.$space.'<br>';


						//$re51 = mysql_query("SELECT * FROM terminal WHERE vessel = '$vessel' and voyage LIKE '%$result5[4]%' order by etd");
						// 터미널에서 실시간 ETD 검색
						if($line_number == 12) // YML
						{
							$re51 = mysql_query("SELECT * FROM terminal WHERE vessel LIKE '%$vessel%' and voyage LIKE '%$result5[voyage]%' order by etd");
						}
						else
						{
							$re51 = mysql_query("SELECT * FROM terminal WHERE vessel LIKE '%$vessel%' order by etd");
						}
						while ($result51 = mysql_fetch_array($re51)) 
						{
							//echo 'service_name = '.$service1.' vessel = '.$vessel.'<br>';
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
								
								$ves1 = "<tr><td>".$service_name."</td><td>".$vessel."</td><td>".$voyage."</td><td>".$etd."</td><td>".$space."</td></tr>";
								$ves2 = "<tr><td>".$service_name."</td><td>".'<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel='.$vessel.'&func=current&localSite=" target="_blank">'.$vessel."</td><td>".$voyage."</td><td>".$etd."</td><td>".$space."</td></tr>";

								//echo '$line_number = '.$line_number; 
								if($line_number == 12) // YML
								{
									//echo 'YML';
								?>
								<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
								<?
								}
								else
								{
									echo $ves1;
								}
								//print "<br>";
							}
							else
							{
								$null_count = 1;
							}
						}
					//	echo '$service3_count = '.$service3_count.'<br>';
						//echo '$null_count = '.$null_count.'<br>';
						if($service3_count == 0 && $null_count != 1)
						{
							$etd = $result5[5];
							$voyage = $result5[4];
							$service_name = $result5[service_name];
							//$vessel_t = $result5[vessel];
							//$ves2 = $line_t." ".$vessel." ".$etd;
							//$ves2 = $service_name." ".$vessel." ".$voyage." ".$etd." [ ".$space." ]";
							//$ves2 = "<tr><td>".$service_name."</td><td>".$vessel."</td><td>".$voyage."</td><td>".$etd."</td><td>".$space."</td></tr>";
							$ves1 = "<tr><td>".$service_name."</td><td>".$vessel."</td><td>".$voyage."</td><td>".$etd." (estimate)</td><td>".$space."</td></tr>";
							$ves2 = "<tr><td>".$service_name."</td><td>".'<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel='.$vessel.'&func=current&localSite=" target="_blank">'.$vessel."</td><td>".$voyage."</td><td>".$etd." (estimate)</td><td>".$space."</td></tr>";
								
							if($line_number == 12) // YML
							{
							?>
							<a href="https://www.yangming.com/e-service/vessel_tracking/vessel_tracking_detail.aspx?vessel=<? echo $vessel; ?>&func=current&localSite=" target="_blank"> <? echo $ves2; ?></a>
							<?
							}
							else
							{
								echo $ves1;
							}
							//print "<br>";
						}
						//echo '</table>';
					}
					//echo '</table>';
				}
				echo '</table>';
				print "<br>";
		//	}
		}	
    }
//	echo '</table>';
    mysql_close($s);
    //print "<br><a href='1.php'>메인 화면으로</a>";

?>

<body>
<span>현재 창을 닫으려면 닫기 버튼을 누르세요!</span>
<span onclick="window.close();">[ 닫기 ]</span>
</body>

</html>