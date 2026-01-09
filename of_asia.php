<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	print "<br>";
	?>

<style>
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid gray;
	padding: 0px;
	background-color: WHITE;
  }

  div#title {font-size:28pt; font-weight:bold;}
  div#title img {width:1em; height:1em;;}
  html { font-size: 100.0%; 
		background-color: WHITE;
  }
</style>

<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">


<form method="post" action="of_update.php">
	<BR>
    NUMBER = <input type="text" name="number"> (제일앞 번호 입력)<br>
    
    <BR>
	<input type="submit" value="확인">
</form>


<?

	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

	
	
	function lineNameSearch($line_number)
	{
		$call = mysql_query("SELECT * FROM line WHERE uid = $line_number");
		while ($result = mysql_fetch_array($call)) 
		{
			$lineName = $result[1];
		}
		return $lineName;
	}

	//print "<br><a href='of_asia.php'>  [ 아시아 운임 ]  </a><a href='of_middleeast.php'>  [ 중동 운임 ]  </a>";
	print "<br><a href='of_asia.php?id=of_asia'>  [ 아시아 운임 ]  </a><a href='of_asia.php?id=of_middleeast'>  [ 중동 운임 ]  </a>";
	print "<br>";
	print "<br>";


	// 아시아
	//print "[ 아시아 ]";
	//print "<br>";
	
	$region = $_GET['id'];

	if($region == "of_asia")
	{
		print "[ 아시아 ]";
		print "<br>";
	}
	else if($region == "of_middleeast")
	{
		print "[ 중동 ]";
		print "<br>";
	}
	else
	{
		$region = "of_asia";
	}

	//$call = mysql_query("SELECT * FROM of_asia");
	$call = mysql_query("SELECT * FROM ".$region." order by nation");
	while ($result = mysql_fetch_array($call)) 
	{
		$nation = $result[nation]; // nation
		$link_db = $result[link_db]; // link_db

		print "<br>";
		print " [ ".'<span style="color:BLUE;">'.$nation.'</span>'." ]";
		print "<br>";
		
		?> <table> <?

		$FONT_SIZE = 15;
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">NO</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">POL</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">VIA</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">DEL</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">LINE</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">20`DV</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">40`DV</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">40`HC</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">VALIDITY</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">TYPE</div></td>';
		echo '<td><div style="color:green;font-size:'.$FONT_SIZE.'">REMARK</div></td>';
		
		
			
		$call2 = mysql_query("SELECT * FROM $link_db");
		//$call2 = mysql_query("SELECT * FROM $link_db order by city");
		while ($result2 = mysql_fetch_array($call2)) 
		{
			$city = $result2[city];
			
			$new_line = 1;
			// 수출 운임
			$call3 = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city%'");
			//$call3 = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city%' order by line");
			while ($result3 = mysql_fetch_array($call3)) 
			{
				$line = $result3[line];
				if($line != $new_line)
				{
					$new_line = $line;
					echo "<tr><td>&nbsp</td></tr>";
				}
				$lineName = lineNameSearch($line);
				//$p = " [ ".$result3[uid]." ] "."  [ ".$city." ] ".$lineName." / ".$result3[dv20]." / ".$result3[dv40]." / ".$result3[hc40]." / ".$result3[12]." / ". $result3[memo];
				//print $p;
				//print "<br>";

				$in_out = $result3[in_out];
				//print $in_out;
				//print "<br>";

				$pol = $result3[pol];
				$pol2 = $result3[pol];
				

				if($result3[coc_soc] == "SOC")
				{
					$color_cocsoc = "RED";
				}
				else
				{
					$color_cocsoc = "green";
				}

					echo "<tr>"; // font-size:7;
					echo '<td width="30"> '.'<div style="color:GREEN;font-size:'.$FONT_SIZE.'">'.$result3[uid].'</div>'.' </td>'.
					'<td width="70"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$pol2.'</div>'.' </td>'.
					'<td width="70"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[via].'</div>'.' </td>'.
					'<td width="150"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$city.'</div>'.' </td>'.
					'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$lineName.'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[dv20].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[dv40].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[hc40].'</div>'.' </td>'.
					'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[12].'</div>'.' </td>'.
					'<td width="40"> '.'<div style="color:'.$color_cocsoc.';font-size:'.$FONT_SIZE.'">'.$result3[coc_soc].'</div>'.' </td>'.
					'<td width="800"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[memo].'</div>'.' </td>';
					echo "</tr>";
				
			}
			
			$call4 = mysql_query("SELECT * FROM pod WHERE pol LIKE '%$city%' order by line");
			while ($result4 = mysql_fetch_array($call4)) 
			{
				$line = $result4[line];
				if($line != $new_line)
				{
					$new_line = $line;
					echo "<tr><td>&nbsp</td></tr>";
				}
				$lineName = lineNameSearch($line);
				//$p = " [ ".$result3[uid]." ] "."  [ ".$city." ] ".$lineName." / ".$result3[dv20]." / ".$result3[dv40]." / ".$result3[hc40]." / ".$result3[12]." / ". $result3[memo];
				//print $p;
				//print "<br>";
				

				$pol = $result4[pol];
				$pol2 = $result4[pol];
				
				$in_out = $result4[in_out];
				//print $in_out;
				//print "<br>";

				if($result4[coc_soc] == "SOC")
				{
					$color_cocsoc = "RED";
				}
				else
				{
					$color_cocsoc = "GREEN";
				}

					echo "<tr>"; // font-size:7;
					echo '<td width="30"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result4[uid].'</div>'.' </td>'.
					'<td width="70"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$pol2.'</div>'.' </td>'.
					'<td width="70"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result4[via].'</div>'.' </td>'.
					'<td width="150"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result4[pod].'</div>'.' </td>'.
					'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$lineName.'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result4[dv20].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result4[dv40].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result4[hc40].'</div>'.' </td>'.
					'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result4[12].'</div>'.' </td>'.
					'<td width="40"> '.'<div style="color:'.$color_cocsoc.';font-size:'.$FONT_SIZE.'">'.$result4[coc_soc].'</div>'.' </td>'.
					'<td width="800"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result4[memo].'</div>'.' </td>';
					echo "</tr>";
				
/*
				echo "<tr>"; // font-size:7;
				echo '<td width="30"> '.'<div style="color:white;font-size:11px">'.$result3[uid].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:YELLOW;font-size:11px">'.$in_out.'</div>'.' </td>'.
					'<td width="150"> '.'<div style="color:white;font-size:11px">'.$city.'</div>'.' </td>'.
					'<td width="100"> '.'<div style="color:white;font-size:11px">'.$lineName.'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:white;font-size:11px">'.$result3[dv20].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:white;font-size:11px">'.$result3[dv40].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:white;font-size:11px">'.$result3[hc40].'</div>'.' </td>'.
					'<td width="100"> '.'<div style="color:white;font-size:11px">'.$result3[12].'</div>'.' </td>'.
					'<td width="800"> '.'<div style="color:white;font-size:11px">'.$result3[memo].'</div>'.' </td>';
				echo "</tr>";
				*/
			}
		}
		?> </table> <?
		
		
	}

	print "<br>";
	print "<br>";

	mysql_close($s);




?>

</body>