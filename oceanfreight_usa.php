<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	print "<br>";
	//<!--width: 100%;-->
	?>

<html>
<head>
	<title>USA O/F</title> 
</head>

<style>
  
  table {
    
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid gray;
	padding: 0px;
	background-color: WHITE;
  }

  div#title {font-size:15pt; font-weight:bold;}
  div#title img {width:1em; height:1em;;}
  html { font-size: 100.0%; 
		background-color: WHITE;
  }
</style>

<body>


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
	
	
	//print "<br><a href='of_asia.php?id=of_asia'>  [ 아시아 운임 ]  </a><a href='of_middleeast.php'>  [ 중동 운임 ]  </a>";

	$FONT_SIZE = 15;

	print "USWC = LA / LGB";
	print "<br>";
	$city = "LAX LGB";
	
	?> <table> <?
	echo '<td width="30"><div style="color:green;font-size:'.$FONT_SIZE.'">NO</div></td>';
	//	echo '<td width="70"><div style="color:green;font-size:'.$FONT_SIZE.'">DEL</div></td>';
	echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">LINE</div></td>';
	echo '<td width="50"><div style="color:green;font-size:'.$FONT_SIZE.'">20`DV</div></td>';
	echo '<td width="50"><div style="color:green;font-size:'.$FONT_SIZE.'">40`HC</div></td>';
	echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">VALIDITY</div></td>';
	//echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">REMARK</div></td>';
	?> </table> <?
	
	$call = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city%' order by dv40");
	//$call3 = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city%' order by line");
	while ($result = mysql_fetch_array($call)) 
	{
		$new_line = 1;
		$line = $result[line];
		if($line != $new_line)
		{
			$new_line = $line;
			//echo "<tr><td>&nbsp</td></tr>";
		}
		$lineName = lineNameSearch($line);
		if($result[dv20] > 0)
		{
		?> <table> <?
		// '<td width="70"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$city.'</div>'
		// .'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[memo].'</div>'.' </td>'
		echo "<tr>"; // font-size:7;
		echo '<td width="30"> '.'<div style="color:GREEN;font-size:'.$FONT_SIZE.'">'.$result[uid].'</div>'.' </td>'.'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$lineName.'</div>'.' </td>'.'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result[dv20].'</div>'.' </td>'.'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result[hc40].'</div>'.' </td>'.'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result[12].'</div>'.' </td>';
		echo "</tr>";	
		?> </table> <?
		}
	}
	
	print "<br>";
	print "US GULF = HOUSTON.TX / MOBILE.AL / TAMPA.FL / NEW ORLEANS.LA";
	print "<br>";
	
	$city2 = "HOUSTON";
	?> <table> <?
	echo '<td width="30"><div style="color:green;font-size:'.$FONT_SIZE.'">NO</div></td>';
	//	echo '<td width="70"><div style="color:green;font-size:'.$FONT_SIZE.'">DEL</div></td>';
	echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">LINE</div></td>';
	echo '<td width="50"><div style="color:green;font-size:'.$FONT_SIZE.'">20`DV</div></td>';
	echo '<td width="50"><div style="color:green;font-size:'.$FONT_SIZE.'">40`HC</div></td>';
	echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">VALIDITY</div></td>';
	//echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">REMARK</div></td>';
	?> </table> <?
	
	$call2 = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city2%' order by dv40");
	//$call3 = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city%' order by line");
	while ($result2 = mysql_fetch_array($call2)) 
	{
		$new_line = 1;
		$line = $result2[line];
		if($line != $new_line)
		{
			$new_line = $line;
			//echo "<tr><td>&nbsp</td></tr>";
		}
		$lineName = lineNameSearch($line);
		
		if($result2[dv20] > 0 && $result2[via] == '0')
		{
		?> <table> <?
		// '<td width="70"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$city.'</div>'
		// .'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[memo].'</div>'.' </td>'
		echo "<tr>"; // font-size:7;
		echo '<td width="30"> '.'<div style="color:GREEN;font-size:'.$FONT_SIZE.'">'.$result2[uid].'</div>'.' </td>'.'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$lineName.'</div>'.' </td>'.'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result2[dv20].'</div>'.' </td>'.'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result2[hc40].'</div>'.' </td>'.'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result2[12].'</div>'.' </td>';
		echo "</tr>";	
		?> </table> <?
		}
	}

	print "<br>";
	print "USEC = SAVANNAH.GA / NORFOLK.VA / CHARLESTON.SC / WILMINGTON.NC";
	print "<br>";

	$city2 = "SAVANNAH";
	?> <table> <?
	echo '<td width="30"><div style="color:green;font-size:'.$FONT_SIZE.'">NO</div></td>';
	//	echo '<td width="70"><div style="color:green;font-size:'.$FONT_SIZE.'">DEL</div></td>';
	echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">LINE</div></td>';
	echo '<td width="50"><div style="color:green;font-size:'.$FONT_SIZE.'">20`DV</div></td>';
	echo '<td width="50"><div style="color:green;font-size:'.$FONT_SIZE.'">40`HC</div></td>';
	echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">VALIDITY</div></td>';
	//echo '<td width="100"><div style="color:green;font-size:'.$FONT_SIZE.'">REMARK</div></td>';
	?> </table> <?
	
	$call2 = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city2%' order by dv40");
	//$call3 = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city%' order by line");
	while ($result2 = mysql_fetch_array($call2)) 
	{
		$new_line = 1;
		$line = $result2[line];
		if($line != $new_line)
		{
			$new_line = $line;
			//echo "<tr><td>&nbsp</td></tr>";
		}
		$lineName = lineNameSearch($line);
		
		if($result2[dv20] > 0)
		{
		?> <table> <?
		// '<td width="70"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$city.'</div>'
		// .'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result3[memo].'</div>'.' </td>'
		echo "<tr>"; // font-size:7;
		echo '<td width="30"> '.'<div style="color:GREEN;font-size:'.$FONT_SIZE.'">'.$result2[uid].'</div>'.' </td>'.'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$lineName.'</div>'.' </td>'.'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result2[dv20].'</div>'.' </td>'.'<td width="50"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result2[hc40].'</div>'.' </td>'.'<td width="100"> '.'<div style="color:green;font-size:'.$FONT_SIZE.'">'.$result2[12].'</div>'.' </td>';
		echo "</tr>";	
		?> </table> <?
		}
	}
	
	mysql_close($s);

	print "<br>";
	print "USWC. other charge : ";
	print "HMM = $59/$63, YML = $73/$101";
	print "<br>";
	print "<br>";
	print "US GULF. other charge : ";
	print "ZIM = $62/$77, HMM = $59/$63, YML = $60/$75";
	print "<br>";
	print "<br>";
	print "USEC other charge : ";
	print "ZIM = $62/$77, HMM = $59/$63, YML = $60/$75";
	print "<br>";
	print "<br>";
	print "NYC other charge : ";
	print "ZIM = $73/$99, HMM = $71/$87, YML = $60/$75";
	print "<br>";
	print "<br>";

?>

<BR><BR>
<a href='m.php'>manage page</a>
<BR><BR>

</body>
</html>