<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<?php
	//if(isset($_POST['submit'])){//폼데이터가 전송되었다면
//    if(empty($_POST['line'])){
//		echo('<h3>확인 : 체크박스가 선택되지 않았습니다.</h3>');
//		print "<br><a href='1.html'>메인 화면으로</a>";
        
        /*
        for($i=0; $i < count($form_data); $i++){
            $str .= "'" . $form_data[$i] . "'" . ',';
        }        
        $str = substr($str, 0, -1);//쿼리문 오류 방지를 위해 문자열 중 마지막 문자 콤마 제거
        */
//        $query = "SELECT * FROM 테이블이름 WHERE name IN($str)";
        
//        echo("<h3>폼전송 이후 쿼리문 - $query </h3>");
//		*/
  //  }

    $a1_d = $_POST["a1"]; // port name
	if($a1_d == null)
	{
		print "POD name 없어 자료가 입력되지 못했습니다.";
		//print "<br><a href='1.html'>메인 화면으로</a>";
	}
	
//	else
//	{
	
	$form_data = $_POST['line'];
	//int count1 = count($form_data);
	//$count = count($form_data);
	$str = "";
	for($i=0; $i <= 17; $i++)
	{
		if(empty($form_data[$i]))
		{
		}
		else
		{
			$ek = $form_data[$i]; // 선사 번호

			require_once("../ckx_db/db_info.php");
			$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
			mysql_select_db($DBNM);

			$a1 = $_POST["a1"]; // POD
			$a2 = $_POST["a2"]; // POD CODE
			$a3 = $_POST["a3"]; // VIA
			$a4 = $_POST["a4"]; // VIA CODE
			$a5 = $_POST["a5"]; // NATION
			$a6 = $_POST["a6"]; // NATION CODE
			$a7 = $_POST["ek"]; // LINE
			$a8 = $_POST["a8"]; // LINE CODE
			$a9 = $_POST["a9"]; // DV20
			$a10 = $_POST["a10"]; // DV40
			$a11 = $_POST["a11"]; // HC40
			$a12 = $_POST["a12"]; // DATE
			$a13 = $_POST["a13"]; // MEMO

			mysql_query("INSERT INTO pod (pod, pod_code, via, via_code, nation, nation_code, line, line_code, dv20, dv40, hc40, date, memo) VALUES('$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$ek', '$a8', '$a9', '$a10', '$a11', '$a12', '$a13')");
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
    print "<br><a href='2e.php'>메인 화면으로</a>";
//	}
 ?>
