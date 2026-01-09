<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";

	?>

<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<body>

<form method="post" action="update_in_2.php">

<table border="1">

<?

	$form_data = $_POST['vessel'];
	print $form_data[0];
	print "<br>";

	$str = "";
	$size = count($form_data[0]);
	if($size == 0)
	{
		echo(" <meta http-equiv='Refresh' content = '0; URL=in.php'>");
	}

	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
	mysql_select_db($DBNM);
	
	echo '<table border="1">';
	
	$sql = "SELECT * FROM `in2` WHERE id = '$id' AND c6 = '$form_data[0]'";
//	print $sql;
	print "<br>";

	$re = mysql_query($sql); // vessel
    while ($r2 = mysql_fetch_array($re))
	{
		?>

        <tr><td>LINE</td><td><input type="text" name="a1" size=50 value="<?php echo $r2[1] ?>"></td></tr>
		<tr><td>화주</td><td><input type="text" name="a2" size=50 value="<?php echo $r2[2] ?>"></td></tr>
		<tr><td>LCL-FCL</td><td><input type="text" name="a3" size=50 value="<?php echo $r2[3] ?>"></td></tr>
		<tr><td>HBL NO.</td><td><input type="text" name="a4" size=50 value="<?php echo $r2[4] ?>"></td></tr>
		<tr><td>MBL NO.</td><td><input type="text" name="a5" size=50 value="<?php echo $r2[5] ?>"></td></tr>
		<tr><td>VESSEL</td><td><input type="text" name="a6" size=50 value="<?php echo $r2[6] ?>"></td></tr>
		<tr><td>POD</td><td><input type="text" name="a7" size=50 value="<?php echo $r2[7] ?>"></td></tr>
		<tr><td>MRN</td><td><input type="text" name="a8" size=50 value="<?php echo $r2[8] ?>"></td></tr>
		<tr><td>ETD</td><td><input type="text" name="a9" size=50 value="<?php echo $r2[9] ?>"></td></tr>
		<tr><td>ETA</td><td><input type="text" name="a10" size=50 value="<?php echo $r2[10] ?>"></td></tr>
		<tr><td>BL CHECK / SABIS 입력</td><td><input type="text" name="a11" size=50 value="<?php echo $r2[11] ?>"></td></tr>
		<tr><td>AN 수령 > MASTER탭 MRN/MSN/WAREHOUSE입력(FCL)</td><td><input type="text" name="a12" size=50 value="<?php echo $r2[12] ?>"></td></tr>
		<tr><td>MBL->HBL내용복사 > EDI 자료생성 > 프리즘확인(FCL)</td><td><input type="text" name="a13" size=50 value="<?php echo $r2[13] ?>"></td></tr>
		<tr><td>콘솔사 실화주신고메일(LCL)</td><td><input type="text" name="a14" size=50 value="<?php echo $r2[14] ?>"></td></tr>
		<tr><td>CNEE / 핸들링업체(관세사) AN/HBL 주기</td><td><input type="text" name="a15" size=50 value="<?php echo $r2[15] ?>"></td></tr>
		<tr><td>MASTER탭>선사/콘솔사 운임인보이스입력(입항1~2일전)</td><td><input type="text" name="a16" size=50 value="<?php echo $r2[16] ?>"></td></tr>
		<tr><td>HOUSE탭>선사/콘솔사 운임인보이스입력+HCV $80 추가입력</td><td><input type="text" name="a17" size=50 value="<?php echo $r2[17] ?>"></td></tr>
		<tr><td>CNEE / 핸들링업체(관세사)에 CKX운임인보이스 전달 / OFC (파트너가 SUR BL 주면 SABIS에 표시)</td><td><input type="text" name="a18" size=50 value="<?php echo $r2[18] ?>"></td></tr>
		<tr><td>이체증 확인 / CKX 입금확인(이차장님)</td><td><input type="text" name="a19" size=50 value="<?php echo $r2[19] ?>"></td></tr>
		<tr><td>실화주 직인명판 HBL수령</td><td><input type="text" name="a20" size=50 value="<?php echo $r2[20] ?>"></td></tr>
		<tr><td>HBL SUR / MBL SUR</td><td><input type="text" name="a21" size=50 value="<?php echo $r2[21] ?>"></td></tr>
		<tr><td>LG 접수(MASTER SUR OK)</td><td><input type="text" name="a22" size=50 value="<?php echo $r2[22] ?>"></td></tr>
		<tr><td>선사지결 결재후 송금요청(이차장님) / 지결금액</td><td><input type="text" name="a23" size=50 value="<?php echo $r2[23] ?>"></td></tr>
		<tr><td>프리즘3.0 / 유로지스허브 / 선사사이트 MDO신청 (M SUR 안되어있을때, 거절됨)</td><td><input type="text" name="a24" size=50 value="<?php echo $r2[24] ?>"></td></tr>
		<tr><td>CNEE / 핸들링업체가 요청한 쪽에 세금계산서 발행</td><td><input type="text" name="a25" size=50 value="<?php echo $r2[25] ?>"></td></tr>
		<tr><td>SABIS HDO출력 + 선사MDO > CNEE OR 핸들링업체에 전달</td><td><input type="text" name="a26" size=50 value="<?php echo $r2[26] ?>"></td></tr>
		<tr><td>서류파일링</td><td><input type="text" name="a27" size=50 value="<?php echo $r2[27] ?>"></td></tr>
		<tr><td>숨기기</td><td><input type="text" name="a28" size=1 value="<?php echo $r2[28] ?>"></td></tr>
		<input type="submit" value="자료 수정하기">
	</form>
	<?
    }
	
	//mysql_query("UPDATE in2 SET c1 = '$a3_d', manager_number = '$a4_d', memo = '$a5_d' WHERE id = '$id' AND c6 = '$form_data'");
	
    mysql_close($s);
	
	echo "</table>";

?>

</table>

<BR><BR>
<br><br>
<a href="terminal.php"> 터미널-모선 조회 </a>
<BR><BR>
<a href="ddp.php"> DDP 관리 페이지 </a>
<BR><BR>
<a href="in.php"> 수입 관리 페이지 </a>
<BR><BR>
<BR><BR>
<a href='1.php'>처음 화면으로</a>
<BR><BR>
<a href="logout.php"> 로그아웃 </a>
<BR><BR>


</body>