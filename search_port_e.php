<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<?php 
//			echo '<span style="color:blue;">'.$result2[1].'</span>'; 글자 색깔 넣기
    require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

    $pod = $_POST["c1"];
	$via = $_POST["c2"];
	if($pod == null)
	{
		print "<br>POD 를 입력하세요.</a>";
		print "<br><a href='2e.php'>메인 화면으로</a>";
		return;
	}
	
	$partner = 200;

    $re = mysql_query("SELECT * FROM pod WHERE pod LIKE '%$pod%' and via LIKE '%$via%'");
    while ($result = mysql_fetch_array($re)) {
        
		if($result[9] == 0) // 20dv ocf
		{
			continue;
		}
		//
		//print "UID : ";
		//print $result[0];
		//echo "(".$result[0].")";
        //print "<br>";
		
		print " POD = ";
		print $result[1];
        //print "<br>";

//		print " / POD CODE : ";
		//print " ( ";
		//print $result[2];
		//print " ) ";
		//print $result[5]; // NATION
        //print "<br>";

		$nn = "";
		if($result[3] != $nn)
		{
			print " (VIA = ";
			//print $result[3];
			echo '<span style="color:blue;">'.$result[3].'</span>';
			//print "<br>";
			print ")";
		}

//		print " / VIA CODE : ";
//		print " / ";	
//		print $result[4];
  //      print "<br>";

		//print "NATION : ";
		//print $result[5];
        //print "<br>";

//		print " / NATION CODE : ";
//		print " / ";
//		print $result[6];
		print "<br>";

		$re2 = mysql_query("SELECT * FROM line WHERE uid = $result[7]");
		while ($result2 = mysql_fetch_array($re2)) 
		{
			print "LINE : ";
			echo '<span style="color:blue;">'.$result2[1].'</span>';
			//print "<br>";
		}
		
		//print " / LINE : ";
		//print $result[7];

//		print " / LINE CODE : ";
//		print " / ";
//		print $result[8];
		//print "DATE : ";
		//print $result[12];
		echo " ( ".$result[12]." )";
		print "<br>";

		
		print "20'DV = ";
		print number_format($result[9] - $partner);
		print " (파트너 = ";
		$t1 = $result[9];
		print number_format($t1);
		print " )";
		print "<br>";

		print "40'DV = ";
		print number_format($result[10] - $partner);
		print " (파트너 = ";
		$t2 = $result[10];
		print number_format($t2);
		print " )";
		print "<br>";

		print "40'HC = ";
		print number_format($result[11] - $partner);
		print " (파트너 = ";
		$t3 = $result[11];
		print number_format($t3);
		print " )";
		print "<br>";

		

		print "MEMO : ";
		echo $result[0]." ".$result[13];
		print "<br>";
		

		//$sail_line = $result[7];
/*
		// 문장에서 점의 갯수를 구한다.
		$length_position = 0;
		$total_length = count($sail_line);
		while($length_position < $total_length)
		{
			$position = strpos($sail_line, "."); // ex) 1.10.17 // 점의 위치 구하기 = 1
			$temp = substr($sail_line, $length_position, $length_position); // 문자열, 시작점(0), 길이, 문자열끝에 추가할 문자열, 인코딩) // 1
			
			$re2 = mysql_query("SELECT * FROM line WHERE uid = $temp ");
			while ($result2 = mysql_fetch_array($re2)) {
				print "LINE : ";
				print $result2[1];
				print "<br>";
			}
			$sail_line = substr($str, $position + 1, $total_length);
			$length_position = $length_position + $position + 1;
		}
*/
		// 점의 갯수 + 1 만큼, 숫자를 얻어낸다.

		// 각 숫자를 배열에 저장한다.

		// 배열의 길이만큼 for문을 돌려 선사명을 출력한다.

		/* db
		uid : 순서번호
		line_number : 선사번호
		port_name : 최종도착 항구명
		via_port : 중간 거쳐가는 항구명
		dc20_price : 20'DV FCL OCF
		dc40_price : 40'DV FCL OCF
		hq40_price : 40'HC FCL OCF
		date : 가격 입력한 날짜
		memo : 메모

		// 선사번호, 최종도착 항구명(POD)으로 가격을 검색하여 있으면 출력한다.

		// 입력화면
		선사 : 체크 박스 선택
		POD : 도착지 
		VIA PORT : 경유지
		20'DC OCF : 8834
		40'DC OCF : 9990
		40'HC OCF : 10240
		MEMO : ...
		[OK]

		*/

		
		print "<br>";
    }
    mysql_close($s);
    print "<br><a href='2e.php'>메인 화면으로</a>";
 ?>

 <form method="post" action="edit_port.php">
    자료 수정하기(기록 번호를 입력 하세요) <input type="text" name="c2"> <input type="submit" value="확인">
</form>
