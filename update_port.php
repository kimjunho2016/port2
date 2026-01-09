<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<?php 
	$uid = $_POST["a0"]; // uid
    $pod = $_POST["a1"]; // POD
	if($pod == null)
	{
		print "POD 가 없어 자료가 입력되지 못했습니다.";
		print "<br><a href='1.php'>메인 화면으로</a>";
	}
	else
	{
	
	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

    $pod_code = $_POST["a2"]; // 
	$via = $_POST["a3"]; // 
	$via_code = $_POST["a4"]; // 
	$nation = $_POST["a5"]; // 
	$nation_code = $_POST["a6"]; // 
	$line = $_POST["a7"]; // 
	$line_code = $_POST["a8"]; // 
	$dv20 = $_POST["a9"]; // 
	$dv40 = $_POST["a10"]; // 
	$hc40 = $_POST["a11"]; // 
	$date = $_POST["a12"]; // 
	$memo = $_POST["a13"]; // 
    mysql_query("UPDATE pod SET pod = '$pod', pod_code = '$pod_code', via = '$via', via_code = '$via_code', nation = '$nation', nation_code = '$nation_code', line = '$line', line_code = '$line_code', dv20 = '$dv20', dv40 = '$dv40', hc40 = '$hc40', date = '$date', memo = '$memo' WHERE uid = '$uid'");
	/*
    $re = mysql_query("SELECT * FROM khy ORDER BY number");
    while ($result = mysql_fetch_array($re)) {
        print $result[0];
        print " : ";
        print $result[1];
        print " : ";
        print $result[2];
        print "<br>";
    }
	*/
    mysql_close($s);
	print "자료를 수정 하였습니다.";
    print "<br><a href='2e.php'>메인 화면으로</a>";
	}
 ?>