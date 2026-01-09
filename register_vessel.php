<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	
	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
	mysql_select_db($DBNM);
	
	$re = mysql_query("SELECT * FROM login where phone = '$id'");
	$num_rows = mysql_num_rows($re);

	//echo '$num_rows = '.$num_rows."<br>";
	if($num_rows == 0)
	{
		//$_SESSION["id"] = "";
		echo(" <meta http-equiv='Refresh' content = '0; URL=1.php'>");
	}
	?>

<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>
<body>

<form method="post" action="vessel_insert.php">
	<BR>
    VESSEL NAME = <input type="text" name="a1"> (모선명만 입력, 항차제외)<br>
    
    <BR>
	<input type="submit" value="확인">
</form>

<? 
	print "<br><a href='m.php'>관리 페이지</a><br>";
	print "<br>";
	print "<br>";
	print "<br><a href='1.php'>메인 화면으로</a>";
	print "<br>";
	
?>

</body>