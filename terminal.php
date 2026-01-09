<?
	@session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	print "<br>";

	//header("Content-Type:text/html;charset=utf-8");

	?>


<html>
<head>
	<title>터미널-모선 조회</title>

<body>

<form method="post" action="delete_vessel.php">
<?
	

	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

	$vessel_list[0] = "";
	$count = 0;

	//echo "LINE / VOYAGE / VESSEL / BERTH / ETD / STATE / TERMINAL";
	echo "VESSEL / VOYAGE / ETD / TERMINAL";
	print "<br>";
	print "<br>";

	//mysql_query("set session character_set_connection=utf8;");

	//mysql_query("set session character_set_results=utf8;");

	//mysql_query("set session character_set_client=utf8;");


	echo '<table border="1">';
	$re = mysql_query("SELECT * FROM my_vessel_etd where phone_number = '$id'");
    while ($result = mysql_fetch_array($re)) 
	{
		
		$re2 = mysql_query("SELECT * FROM terminal WHERE vessel LIKE '%$result[1]%'");
		while ($result2 = mysql_fetch_array($re2)) 
		{
			//echo $result2[0].' - '.$result2[1].' - '.$result2[2].' - '.$result2[4].' - '.$result2[5].' - '.$result2[6].' - '.$result2[7];
				//print "<BR>";
			$testStr = $result2[2];
			$testStr = explode("(", $testStr);
			$voyage = $result2[1];
			$etd = $result2[5];
			$terminal_name = $result2[7];
			
			//echo $testStr[0].' , '.$voyage.' , '.$etd.' , '.$terminal_name.' ';
			echo "<tr>";
			echo "<td>$testStr[0]</td>";
			echo "<td>$voyage</td>";
			echo "<td>$etd</td>";
			echo "<td>$terminal_name</td>";
			
			echo '<td><input type="checkbox" name="vessel[]" value="'.$testStr[0].'"></td>';
			
			echo "</tr>";
		}
	}
	echo "</table>";
?>

<!--
<input type="checkbox" name="vessel[]" value="<? print $result2[2] ?>" >  <br>
-->


<BR>
<input type="submit" value="선택한 모선 삭제">
<br>
<BR>
<a href="register_vessel.php"> 조회할 모선 등록 </a>
<BR>
<BR>
<BR>

<BR>
<BR>
<a href="m.php"> 관리 페이지 </a>
<BR>
<BR>
<a href='1.php'>처음 화면으로</a>
<BR>
<BR>
<a href="logout.php"> 로그아웃 </a>


</form>
</head>
</body>
</html>