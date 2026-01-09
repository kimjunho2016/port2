<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";

	?>

<html>
<head>
	<title>수입 관리 페이지</title> </head>

<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<body>

<form method="post" action="update_in.php">

<?
	$phone_number = $id;
//	print $phone_number;
	print "<br>";

	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

	$sql = "SELECT * FROM `in2` WHERE id = '$phone_number'";
//	print $sql;
	print "<br>";

	
	function colorTD($arg)
	{
		$s = "/-/";
		if (preg_match($s, $arg) == true) 
		{ 
//특정문자가 있는 경우

			echo "<td bgcolor='#D9E5FF'>$arg</td>";
		} 
		else 
		{
			echo "<td>$arg</td>";
//			echo "<td bgcolor='#D9E5FF'>$r2[1]</td>";
		
}
		//echo "<br>";
	}
	
	echo '<table border="1">';
	
	echo "<tr>";
	echo "<td>LINE</td>";
	$re2 = mysql_query($sql);
	$s = "/0/";
	while ($r2 = mysql_fetch_array($re2)) 
	{
		//$s = "/0/";
		if (preg_match($s, $r2[show2]) == true){ continue; }
		//if($r2[show2] == "0"){ continue; }
		//if($r2[28] == "0"){ continue; }
		colorTD($r2[1]);
	//	echo $r2[1];
	//	print "<br>";
		/*
		if (preg_match($s, $r2[1]) == true) 
		{ 
//특정문자가 있는 경우

			echo "<td bgcolor='#D9E5FF'>$r2[1]</td>";
		} 
		else 
		{
			
//그외
			echo "<td>$r2[1]</td>";
//			echo "<td bgcolor='#D9E5FF'>$r2[1]</td>";
		
}
		*/
		/*
		$strings = "안녕하세요 감사해요 잘있어요 다시 만나요";  
		$search = "안녕";  
		  
		if(strpos($strings, $search)) {  
			echo "포함!";  
		} else {  
			echo "없네?";  
		} 
		*/
		
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>화주</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
		//if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[2]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>LCL-FCL</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
		//if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[3]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>HBL NO.</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
		//if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[4]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>MBL NO.</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
		//if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[5]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>VESSEL</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[6]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>POD</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[7]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>MRN / MSN</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[8]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>ETD</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[9]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>ETA</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[10]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>BL CHECK / SABIS 입력</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[11]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>AN 수령 > MASTER탭 MRN/MSN/WAREHOUSE입력(FCL)</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[12]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>MBL->HBL내용복사 > EDI 자료생성 > 프리즘확인(FCL)</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[13]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>콘솔사 실화주신고메일(LCL)</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[14]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>CNEE / 핸들링업체(관세사) AN/HBL 주기</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[15]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>MASTER탭>선사/콘솔사 운임인보이스입력(입항1~2일전)</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[16]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>선사/콘솔사 운임인보이스입력+HCV $80 추가입력</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[17]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>CNEE / 핸들링업체(관세사)에 CKX운임인보이스 전달 / OFC (파트너가 SUR BL 주면 SABIS에 표시)</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[18]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>이체증 확인 / CKX 입금확인(이차장님)</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[19]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>실화주 직인명판 HBL수령</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[20]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>HBL SUR / MBL SUR</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[21]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>LG 접수(MASTER SUR OK)</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[22]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>선사지결 결재후 송금요청(이차장님) / 지결금액</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[23]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>프리즘3.0 / 유로지스허브 / 선사사이트 MDO신청 (M SUR 안되어있을때, 거절됨)</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[24]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>CNEE / 핸들링업체가 요청한 쪽에 세금계산서 발행</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[25]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>SABIS HDO출력 + 선사MDO > CNEE OR 핸들링업체에 전달</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[26]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>서류파일링</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
//		if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		colorTD($r2[27]);
	}	
	echo "</tr>";

	echo "<tr>";
	echo "<td>수정하기</td>";
	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
		//if($r2[show] === "0"){ continue; }
		if (preg_match($s, $r2[show2]) == true){ continue; }
		echo '<td><input type="checkbox" name="vessel[]" value="'.$r2[6].'"></td>';
	}	
	echo "</tr>";





/*
		echo "<tr>";
		echo "<td>화주</td><td>$r2[2]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>LCL-FCL</td><td>$r2[3]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>HBL NO.</td><td>$r2[4]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>MBL NO.</td><td>$r2[5]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>VESSEL</td><td>$r2[6]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>POD</td><td>$r2[7]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>MRN</td><td>$r2[8]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>ETD</td><td>$r2[9]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>ETA</td><td>$r2[10]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>BL CHECK / SABIS 입력</td><td>$r2[11]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>AN 수령 > MASTER탭 MRN/MSN/WAREHOUSE입력(FCL)</td><td>$r2[12]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>MBL->HBL내용복사 > EDI 자료생성 > 프리즘확인(FCL)</td><td>$r2[13]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>콘솔사 실화주신고메일(LCL)</td><td>$r2[14]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>CNEE / 핸들링업체(관세사) AN/HBL 주기</td><td>$r2[15]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>MASTER탭>선사/콘솔사 운임인보이스입력(입항1~2일전)</td><td>$r2[16]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>HOUSE탭>선사/콘솔사 운임인보이스입력+HCV $80 추가입력</td><td>$r2[17]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>CNEE / 핸들링업체(관세사)에 CKX운임인보이스 전달 / OFC (파트너가 SUR BL 주면 SABIS에 표시)</td><td>$r2[18]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>이체증 확인 / CKX 입금확인(이차장님)</td><td>$r2[19]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>실화주 직인명판 HBL수령</td><td>$r2[20]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>HBL SUR / MBL SUR</td><td>$r2[21]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>LG 접수(MASTER SUR OK)</td><td>$r2[22]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>선사지결 결재후 송금요청(이차장님) / 지결금액</td><td>$r2[23]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>프리즘3.0 / 유로지스허브 / 선사사이트 MDO신청 (M SUR 안되어있을때, 거절됨)</td><td>$r2[24]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>CNEE / 핸들링업체가 요청한 쪽에 세금계산서 발행</td><td>$r2[25]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>SABIS HDO출력 + 선사MDO > CNEE OR 핸들링업체에 전달</td><td>$r2[26]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>서류파일링</td><td>$r2[27]</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo '<td><input type="checkbox" name="vessel[]" value="'.$testStr[0].'"></td>';
		echo "</tr>";

	$re2 = mysql_query($sql);
	while ($r2 = mysql_fetch_array($re2)) 
	{
		echo "<tr>";
		echo "<td>LINE</td><td>$r2[1]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>화주</td><td>$r2[2]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>LCL-FCL</td><td>$r2[3]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>HBL NO.</td><td>$r2[4]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>MBL NO.</td><td>$r2[5]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>VESSEL</td><td>$r2[6]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>POD</td><td>$r2[7]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>MRN</td><td>$r2[8]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>ETD</td><td>$r2[9]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>ETA</td><td>$r2[10]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>BL CHECK / SABIS 입력</td><td>$r2[11]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>AN 수령 > MASTER탭 MRN/MSN/WAREHOUSE입력(FCL)</td><td>$r2[12]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>MBL->HBL내용복사 > EDI 자료생성 > 프리즘확인(FCL)</td><td>$r2[13]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>콘솔사 실화주신고메일(LCL)</td><td>$r2[14]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>CNEE / 핸들링업체(관세사) AN/HBL 주기</td><td>$r2[15]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>MASTER탭>선사/콘솔사 운임인보이스입력(입항1~2일전)</td><td>$r2[16]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>HOUSE탭>선사/콘솔사 운임인보이스입력+HCV $80 추가입력</td><td>$r2[17]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>CNEE / 핸들링업체(관세사)에 CKX운임인보이스 전달 / OFC (파트너가 SUR BL 주면 SABIS에 표시)</td><td>$r2[18]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>이체증 확인 / CKX 입금확인(이차장님)</td><td>$r2[19]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>실화주 직인명판 HBL수령</td><td>$r2[20]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>HBL SUR / MBL SUR</td><td>$r2[21]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>LG 접수(MASTER SUR OK)</td><td>$r2[22]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>선사지결 결재후 송금요청(이차장님) / 지결금액</td><td>$r2[23]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>프리즘3.0 / 유로지스허브 / 선사사이트 MDO신청 (M SUR 안되어있을때, 거절됨)</td><td>$r2[24]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>CNEE / 핸들링업체가 요청한 쪽에 세금계산서 발행</td><td>$r2[25]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>SABIS HDO출력 + 선사MDO > CNEE OR 핸들링업체에 전달</td><td>$r2[26]</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>서류파일링</td><td>$r2[27]</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo '<td><input type="checkbox" name="vessel[]" value="'.$testStr[0].'"></td>';
		echo "</tr>";
	}	
	*/
	echo "</table>";
/*











*/

?>

<BR>
<input type="submit" value="선택한 건 UPDATE">

<BR>
<BR>
<a href="register_in.php"> 수입건 정보 등록 </a>
<BR>


<BR>
<a href="info1.php"> 업무 참고 페이지 - 1 </a>
<BR><BR>
<a href="info2.php"> 메일 멘트 </a>
<BR><BR>
<a href="m.php"> 관리 페이지 </a>
<BR><BR>
<a href="http://52.78.77.99/bbs/zboard.php?id=work_data" target="_blank"> 업무 자료 저장소 </a>
<BR><BR>
<a href="http://52.78.77.99/bbs/zboard.php?id=request_freight" target="_blank"> 운임문의, 견적문의 </a>
<BR><BR>
<a href='1.php'>처음 화면으로</a>
<BR><BR>
<a href="logout.php"> 로그아웃 </a>



</form>
</body>
</html>