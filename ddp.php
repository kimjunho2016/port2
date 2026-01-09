<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	print "<br>";
	?>

<html>
<head>
	<title>DDP 관리 페이지</title> </head>

<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<body>
<?	

	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

	$vessel_list[0] = "";
	$count = 0;

	//echo "LINE / VOYAGE / VESSEL / BERTH / ETD / STATE / TERMINAL";
	echo "BOOKING NUMBER";
	print "<br>";
	print "<br>";

	$re = mysql_query("SELECT * FROM my_booking where phone_number = '$id'");
    while ($result = mysql_fetch_array($re)) 
	{
		$booking_number = $result[1];
		$address = "https://www.zim.com/tools/track-a-shipment?consnumber=";
		$sum = $address.$booking_number;
		echo '<a href="'.$sum.'" target="_blank">'.$booking_number.'</a>';
		print "<BR>";
	}
?>

<BR>
<BR>
<BR>
<a href="register_booking.php"> 부킹번호 등록(DDP) </a>
<BR>
<BR>

<BR>
<BR>
<a href='m.php'>관리 페이지</a>
<BR>
<BR>
<a href='1.php'>처음 화면으로</a>
<BR>
<BR>
<a href="logout.php"> 로그아웃 </a>


</body>
</html>