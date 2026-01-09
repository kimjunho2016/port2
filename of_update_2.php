<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
?>

<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<?php 
	$a1 = $_POST["a1"]; // UID
    $a2 = $_POST["a2"]; // POD
	$a3 = $_POST["a3"]; // VIA
	$a4 = $_POST["a4"]; // NATION
	$a5 = $_POST["a5"]; // LINE
	$a6 = $_POST["a6"]; // 20'DV
	$a7 = $_POST["a7"]; // 40'DV
	$a8 = $_POST["a8"]; // 40'HC
	$a9 = $_POST["a9"]; // DATE
	$a10 = $_POST["a10"]; // MEMO
	$a11 = $_POST["a11"]; // POL
	if($a1 == null)
	{
		print "UID 가 없어 자료가 입력되지 못했습니다.";
		print "<br><a href='m.php'>운임 관리 페이지</a>";
	}
	else
	{
	
	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

	$sql = "UPDATE pod SET dv20 = '$a6', dv40 = '$a7', hc40 = '$a8', date = '$a9', memo = '$a10', pol = '$a11' WHERE uid = '$a1'";
	echo $sql;
    mysql_query($sql);

	//
	
	$date = date("Y-m-d", time()); // $DateAndTime = date('Y-m-d H:i:s');

	$re = mysql_query("INSERT INTO pod_log (pol, pod, nation, line, dv20, dv40, hc40, date1, memo, date2) VALUES('$a11','$a2', '$a4', '$a5', '$a6','$a7','$a8','$a9','$a10','$date')");

	$num_rows = mysql_num_rows($re);

	echo '$num_rows = '.$num_rows."<br>";

	//
    mysql_close($s);
	print "자료를 수정 하였습니다.";
    //print "<br><a href='in.php'>수입 관리 페이지</a>";
	echo(" <meta http-equiv='Refresh' content = '0; URL=of_asia.php'>");
	}
 ?>


<BR><BR>
<br><br>
<a href="m.php"> 관리 페이지 </a>
<BR><BR>
<BR><BR>
<a href='1.php'>처음 화면으로</a>
<BR><BR>
<a href="logout.php"> 로그아웃 </a>
<BR><BR>

 </body>