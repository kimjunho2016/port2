<html>

<head>
<style>

table
{
	border: 1px solid #444444;
	border-collapse : collapse;
}
th, td {
	border: 0px solid #444444;
	padding: 5px;
}

	.jb-xx-small { font-size: xx-small; }
      .jb-x-small { font-size: x-small; }
      .jb-small { font-size: small; }
      .jb-medium { font-size: medium; }
      .jb-large { font-size: large; }
      .jb-x-large { font-size: x-large; }
      .jb-xx-large { font-size: xx-large; }
html { font-size: 62.5%; }
  
</style>
</head>



<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">

<?php 
//			echo '<span style="color:blue;">'.$result2[1].'</span>'; 글자 색깔 넣기
    require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

    $pod = $_POST["c1"];
	$via = $_POST["c2"];
	//if($pod == null)
	if(empty($pod))
	{
		print "<br>POD 를 입력하세요.</a>";
		print "<br>";
		print "<br><a href='1.php'>메인 화면으로</a>";
		return;
	}
	
	$partner = 200;
	$line_number = 0;
	
//	echo '<table border="1">';
    $re = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$pod%' and via LIKE '%$via%'");
    while ($result = mysql_fetch_array($re)) {
        
		//echo '<table border="1">';
		?>

		<table>

		<?
		if($result[9] == 0) // 20dv ocf
		{
			continue;
		}

		$pod =$result[1];

		echo "<tr>";
		echo '<td> POD = '.$pod.'</td>';
		echo "</tr>";

	//	print " POD = ";		 
	//	print $result[1];
        
		$nn = "";
		$via2 = $result[3];
		//if($result[3] != $nn)
		if(!empty($result[3]))
		{
			echo "<tr>";
			//echo'<td>VIA = <span style="color:blue;">'.$via2.'</span></td>';
			echo'<td>VIA = '.$via2.'</td>';
			echo "</tr>";
//			print " (VIA = ";
			//print $result[3];
//			echo '<span style="color:blue;">'.$result[3].'</span>';
			//print "<br>";
//			print ")";
		}
//		print "<br>";
		
		$line_number = $result[7];		
		$re2 = mysql_query("SELECT * FROM line WHERE uid = $line_number");
		while ($result2 = mysql_fetch_array($re2)) 
		{
			$line2 = $result2[1];
			echo "<tr>";
			echo'<td>LINE : <span style="color:blue;">'.$line2.'</span></td>';
			echo "</tr>";
//			print "LINE : ";
//			echo '<span style="color:blue;">'.$result2[1].'</span>';
			//print "<br>";
		}
	
		// key 값 정하기
		$nn = "";
		$key = "";
		$schedule = 0;
		if(empty($via2)) // VIA == NULL
		{
			$key = $pod;
		}
		else
		{
			$key = $via2;
		}
		
		//echo "key".$key."<br>";
	
		$schedule = 0;
		
		echo "<tr>";
		echo'<td><a href="schedule.php?pod='.$pod.'&via='.$via2.'&line_number='.$line_number.'" target="_blank"> ( 스케쥴 보기 )</a></td>';
		echo "</tr>";
/*
		// 해당 경로로 가는 선사가 일치하는가?
		$re10 = mysql_query("SELECT * FROM line_service WHERE line = '$line_number'");
		while ($result10 = mysql_fetch_array($re10)) 
		{
			if(!empty($result10[3]))
			{
				$schedule = 1;
				//echo "@@line = ".$line_number." schedule = ".$schedule." "." ?? = ".$result10[3];
				
				<a href="schedule.php?pod=<? echo $pod; ?>&via=<? echo $via2; &line_number=<? echo $line_number " target="_blank"> ( 스케쥴 보기 )</a>
				
				break;
			}		
		}
		print "<br>";
*/

		$v20_1 = $result[9];
		$v20_2 = number_format($v20_1);
		$v20_3 = $v20_1 + $partner;
		$v20_4 = number_format($v20_3);
		echo '<tr>';
		echo '<td>20`DV = '.$v20_2.' (파트너 = '.$v20_4.' )</td>';
		echo '</tr>';

		$v40_1 = $result[10];
		$v40_2 = number_format($v40_1);
		$v40_3 = $v40_1 + $partner;
		$v40_4 = number_format($v40_3);
		echo '<tr>';
		echo '<td>40`DV = '.$v40_2.' (파트너 = '.$v40_4.' )</td>';
		echo '</tr>';

		$v40h_1 = $result[11];
		$v40h_2 = number_format($v40h_1);
		$v40h_3 = $v40h_1 + $partner;
		$v40h_4 = number_format($v40h_3);
		echo '<tr>';
		echo '<td>40`HC = '.$v40h_2.' (파트너 = '.$v40h_4.' )</td>';
		echo '</tr>';

		echo '<tr>';
		echo '<td>VALIDITY = '.$result[12].'</td>';
		echo '</tr>';

		echo '</table>';

		//echo "<tr>";
		//echo '<td> &nbsp</td>';
		//echo "</tr>";
		print "<br>";

/*
		print "20'DV = ";
		print number_format($result[9]);
		print " (파트너 = ";
		$t1 = $result[9] + $partner;
		print number_format($t1);
		print " )";
		print "<br>";

		print "40'DV = ";
		print number_format($result[10]);
		print " (파트너 = ";
		$t2 = $result[10] + $partner;
		print number_format($t2);
		print " )";
		print "<br>";

		print "40'HC = ";
		print number_format($result[11]);
		print " (파트너 = ";
		$t3 = $result[11] + $partner;
		print number_format($t3);
		print " )";
		print "<br>";
		print "<br>";
		*/
    }
    mysql_close($s);
    //print "<br><a href='1.php'>메인 화면으로</a>";
	
 ?>
<br>
<a href='1.php'>처음 화면으로</a>

</body>
</html>
