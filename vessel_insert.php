<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>
<?php
    $a1 = $_POST["a1"]; // vessel name
	if($a1 == null)
	{
		print "VESSEL NAME 없어 자료가 입력되지 못했습니다.";
		print "<br>";
		//print "<br><a href='1.html'>메인 화면으로</a>";
	}
	else
	{
		$phone_number = $id;
		
		require_once("../ckx_db/db_info.php");
		$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
		mysql_select_db($DBNM);
		
		//$DateAndTime = date('Y-m-d');
		$DateAndTime = date('Y-m-d H:i:s');

		mysql_query("INSERT INTO my_vessel_etd (phone_number, vessel, terminal_name, date) VALUES('$phone_number', '$a1', 'n', '$DateAndTime')");
//		mysql_query("INSERT INTO my_vessel_etd (phone_number, vessel) VALUES('$phone_number', '$a1')");
		mysql_close($s);
	}
	
	echo(" <meta http-equiv='Refresh' content = '0; URL=terminal.php'>");

    //print "<br><a href='1.php'>메인 화면으로</a><br>";
	//print "<br><a href='terminal.php'>모선 ETD 조회하기</a><br>";
 ?>
