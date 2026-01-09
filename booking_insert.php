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
<?php
    $booking_number = $_POST["a1"]; // BOOKING NUMBER
	if($booking_number == null)
	{
		print "BOOKING NUMBER 없어 자료가 입력되지 못했습니다.";
		print "<br>";
		//print "<br><a href='1.html'>메인 화면으로</a>";
	}
	else
	{
		$line = $_POST['line'];
		$size = count($line);
		if($size == 1)
		{
			$phone_number = $id;
			$line2 = $line[0];
			
			require_once("../ckx_db/db_info.php");
			$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
			mysql_select_db($DBNM);
			
			$date = date("Y-m-d", time());
			$re = mysql_query("INSERT INTO my_booking (phone_number, booking_number, line, date) VALUES('$phone_number', '$booking_number', '$line2', '$date')");

			$num_rows = mysql_num_rows($re);

		    echo '$num_rows = '.$num_rows."<br>";
			if($num_rows == 0) // 이미 부킹번호가 존재할때는 선사를 업데이트 한다.
			{
				mysql_query("UPDATE my_booking SET line='$line2' WHERE booking_number='$booking_number' AND phone_number='$phone_number'");
			}

			mysql_close($s);
		}
		else // 선사 입력안함 or 많이 입력함
		{
			//echo(" <meta http-equiv='Refresh' content = '0; URL=terminal.php'>");
		}
	}
	
	echo(" <meta http-equiv='Refresh' content = '0; URL=terminal.php'>");

    //print "<br><a href='1.php'>메인 화면으로</a><br>";
	//print "<br><a href='terminal.php'>모선 ETD 조회하기</a><br>";
 ?>
