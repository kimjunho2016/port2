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
	background-color: green;
  }

  div#title {font-size:15pt; font-weight:bold;}
  div#title img {width:1em; height:1em;;}
  html { font-size: 100.0%; 
		background-color: gray;
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

	print "<br><a href='of_asia.php'>  [ 아시아 운임 ]  </a><a href='of_middleeast.php'>  [ 중동 운임 ]  </a>";
	print "<br>";
	print "<br>";


	// 아시아
	print "[ 중동 ]";
	print "<br>";
	


	$call = mysql_query("SELECT * FROM of_middleeast");
	while ($result = mysql_fetch_array($call)) 
	{
		$nation = $result[nation]; // nation
		$link_db = $result[link_db]; // link_db

		print "<br>";
		//print " [ ".$nation." ]";
		print " [ ".'<span style="color:YELLOW;">'.$nation.'</span>'." ]";
		print "<br>";

		?> <table> <?
		
		$call2 = mysql_query("SELECT * FROM $link_db");
		while ($result2 = mysql_fetch_array($call2)) 
		{
			$city = $result2[city];
				
			$call3 = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$city%' order by line");
			while ($result3 = mysql_fetch_array($call3)) 
			{
				$line = $result3[line];
				$lineName = lineNameSearch($line);
				/*
				$p = " [ ".$result3[uid]." ] "."  [ ".$city." ] ".$lineName." / ".$result3[dv20]." / ".$result3[dv40]." / ".$result3[hc40]." / ".$result3[12]." / ". $result3[memo];
				print $p;
				print "<br>";
				*/

				echo "<tr>"; // font-size:7;
				echo '<td width="70"> '.'<div style="color:white;font-size:11px">'.$result3[uid].'</div>'.' </td>'.
					'<td width="150"> '.'<div style="color:white;font-size:11px">'.$city.'</div>'.' </td>'.
					'<td width="120"> '.'<div style="color:white;font-size:11px">'.$lineName.'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:white;font-size:11px">'.$result3[dv20].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:white;font-size:11px">'.$result3[dv40].'</div>'.' </td>'.
					'<td width="50"> '.'<div style="color:white;font-size:11px">'.$result3[hc40].'</div>'.' </td>'.
					'<td width="100"> '.'<div style="color:white;font-size:11px">'.$result3[12].'</div>'.' </td>'.
					'<td width="800"> '.'<div style="color:white;font-size:11px">'.$result3[memo].'</div>'.' </td>';
				echo "</tr>";
			}
		}
		?> </table> <?
		
	}

	print "<br>";
	print "<br>";

	mysql_close($s);
	



?>

</body>