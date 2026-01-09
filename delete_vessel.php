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
	
	$form_data = $_POST['vessel'];

	$str = "";
	$size = count($form_data);
	if($size == 0)
	{
		echo(" <meta http-equiv='Refresh' content = '0; URL=teminal.php'>");
	}

	for($i=0; $i <= $size; $i++)
	{
		if(empty($form_data[$i]))
		{
		}
		else
		{
			$vessel_name = $form_data[$i]; // 모선명

			require_once("../ckx_db/db_info.php");
			$conn = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
			mysql_select_db($DBNM);
			
			$testStr = $vessel_name;
			$testStr = explode("(", $testStr);
			//echo "vessel name = ".$testStr[0]." id = ".$id;
			//print "<br>";

			mysql_query("DELETE FROM my_vessel_etd WHERE vessel='$testStr[0]' and phone_number='$id'");

			$log = "DELETE FROM my_vessel_etd WHERE vessel='".$vessel_name."' and phone_number='".$id."'";
			
			//date_default_timezone_set('Asia/Seoul');
			$DateAndTime = date('Y-m-d H:i:s');
			//$DateAndTime = date("Y-m-d");		
			
			echo "id = ".$id. " date = ".$DateAndTime." log = ".$log;
			print "<br>";
			
			$log2 = addslashes($log);
			// log 기록
			//$qq = "INSERT INTO log(id, date, log) VALUES($id, $DateAndTime, $log2)";
			$qq = "INSERT INTO log (id, date, log) VALUES('$id', '$DateAndTime', '$log2')";
		//	print $qq;
			print "<br>";

			//mysql_query("INSERT INTO my_vessel_etd (phone_number, vessel, terminal_name, date) VALUES('$phone_number', '$a1', 'n', '$DateAndTime')");

			$re2 = mysql_query($qq);
			
			//결과 집합에서 행 수를 얻습니다. 이 명령은 SELECT나 SHOW처럼 실제 결과 집합을 반환하는 구문에만 유효합니다. INSERT, UPDATE, REPLACE, DELETE 질의에 영향받은 행 수를 구하려면, mysql_affected_rows()를 사용하십시오.

			$num_rows = mysql_affected_rows(); // null error 2022-07-14

			echo '$num_rows = '.$num_rows."<br>";

			//mysql_query("DELETE FROM my_vessel_etd WHERE vessel LIKE '%$vessel_name%' and phone_number='$id'");
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
			mysql_close($conn);

	//	$stt = $ek + " ";
	//	print $stt;
	//	print "<br>";
		
		//$str .= $ek . ".";
		}
            //$str .= "'" . $form_data[$i] . "'" . ',';
    }        
    //$str = substr($str, 0, -1);//쿼리문 오류 방지를 위해 문자열 중 마지막 문자 콤마 제거
	
	//print $str;
/*
	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

    $a1_d = $_POST["a1"]; // PORT NAME
    $a2_d = $_POST["a2"]; // PORT CODE
	$a3_d = $_POST["a3"]; // NATION NAME
	$a4_d = $_POST["a4"]; // VIA PORT
	$a5_d = $_POST["a5"]; // 메모
    mysql_query("INSERT INTO port (port_name, port_code, nation_name, via_port, sail_line, memo) VALUES('$a1_d', '$a2_d', '$a3_d', '$a4_d', '$str', '$a5_d')");
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
  //  mysql_close($s);

	//echo(" <meta http-equiv='Refresh' content = '0; URL=terminal.php'>");
	
	//print "<br><a href='1.php'>메인 화면으로</a><br>";
	print "<br><a href='terminal.php'>터미널-모선 조회</a><br>";
//	}
 ?>
