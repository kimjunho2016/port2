<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>
<?php

    $a1 = $_POST["a1"];
	$a2 = $_POST["a2"];
	$a3 = $_POST["a3"];
	$a4 = $_POST["a4"];
	$a5 = $_POST["a5"];
	$a6 = $_POST["a6"];
	$a7 = $_POST["a7"];
	$a8 = $_POST["a8"];
	$a9 = $_POST["a9"];
	$a10 = $_POST["a10"];
	$a11 = $_POST["a11"];
	$a12 = $_POST["a12"];
	$a13 = $_POST["a13"];
	$a14 = $_POST["a14"];
	$a15 = $_POST["a15"];
	$a16 = $_POST["a16"];
	$a17 = $_POST["a17"];
	$a18 = $_POST["a18"];
	$a19 = $_POST["a19"];
	$a20 = $_POST["a20"];
	$a21 = $_POST["a21"];
	$a22 = $_POST["a22"];
	$a23 = $_POST["a23"];
	$a24 = $_POST["a24"];
	$a25 = $_POST["a25"];
	$a26 = $_POST["a26"];
	$a27 = $_POST["a27"];
	if($a6 == null)
	{
		print "VESSEL NAME 없어 자료가 입력되지 못했습니다.";
		print "<br>";
		//print "<br><a href='1.html'>메인 화면으로</a>";
	}
	else
	{
		$phone_number = $id;
		print $phone_number;
		print "<br>";

		require_once("../ckx_db/db_info.php");
		$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
		mysql_select_db($DBNM);
		
		mysql_query("INSERT INTO in2 (id,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14,c15,c16,c17,c18,c19,c20,c21,c22,c23,c24,c25,c26,c27) VALUES ('$phone_number','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a25','$a26','$a27')");

		mysql_close($s);
	}
	
	echo(" <meta http-equiv='Refresh' content = '0; URL=in.php'>");

    //print "<br><a href='1.php'>메인 화면으로</a><br>";
	//print "<br><a href='m.php'>관리 페이지</a><br>";
 ?>
