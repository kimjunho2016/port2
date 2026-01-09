<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";

	?>

<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<body>

<form method="post" action="of_update_2.php">

<table border="1">

<?

	function lineNameSearch($line_number)
	{
		$call = mysql_query("SELECT * FROM line WHERE uid = $line_number");
		while ($result = mysql_fetch_array($call)) 
		{
			$lineName = $result[1];
		}
		return $lineName;
	}

	$number = $_POST['number'];
	print $number;
	print "<br>";

/*
	$str = "";
	$size = count($form_data[0]);
	if($size == 0)
	{
		echo(" <meta http-equiv='Refresh' content = '0; URL=of_asia.php'>");
	}
*/

	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
	mysql_select_db($DBNM);
	
	echo '<table border="1">';
	
	$sql = "SELECT * FROM pod WHERE uid = '$number'";
//	print $sql;
	print "<br>";

	$re = mysql_query($sql); // vessel
    while ($r2 = mysql_fetch_array($re))
	{
		?>

        <tr><td>UID</td><td><input type="text" name="a1" size=50 value="<?php echo $r2[0] ?>"></td></tr>
		<tr><td>POL</td><td><input type="text" name="a11" size=50 value="<?php echo $r2[pol] ?>"></td></tr>
		<tr><td>POD</td><td><input type="text" name="a2" size=50 value="<?php echo $r2[1] ?>"></td></tr>
		<tr><td>VIA</td><td><input type="text" name="a3" size=50 value="<?php echo $r2[3] ?>"></td></tr>
		<tr><td>NATION</td><td><input type="text" name="a4" size=50 value="<?php echo $r2[5] ?>"></td></tr>
		<tr><td>LINE</td><td><input type="text" name="a5" size=50 value="<?php echo lineNameSearch($r2[7]) ?>"></td></tr>
		<tr><td>20'DV</td><td><input type="text" name="a6" size=50 value="<?php echo $r2[9] ?>"></td></tr>
		<tr><td>40'DV</td><td><input type="text" name="a7" size=50 value="<?php echo $r2[10] ?>"></td></tr>
		<tr><td>40'HC</td><td><input type="text" name="a8" size=50 value="<?php echo $r2[11] ?>"></td></tr>
		<tr><td>DATE</td><td><input type="text" name="a9" size=50 value="<?php echo $r2[12] ?>"></td></tr>
		<tr><td>MEMO</td><td><input type="text" name="a10" size=80 value="<?php echo $r2[13] ?>"></td></tr>
	<?
    }
?>


<?
	
	//mysql_query("UPDATE in2 SET c1 = '$a3_d', manager_number = '$a4_d', memo = '$a5_d' WHERE id = '$id' AND c6 = '$form_data'");
	
    mysql_close($s);
	
	echo "</table>";

?>

</table>

	<input type="submit" value="자료 수정하기">
	</form>

<BR><BR>
<BR><BR>
<a href="m.php"> 운임 관리 페이지 </a>
<BR><BR>
<BR><BR>
<a href='1.php'>처음 화면으로</a>
<BR><BR>
<a href="logout.php"> 로그아웃 </a>
<BR><BR>


</body>