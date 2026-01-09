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
<body>

<form method="post" action="in_insert.php">
	<BR>
    
	LINE = <input type="text" name="a1"> (선사명 입력)<br>
	화주 = <input type="text" name="a2"> (화주명 입력)<br>
	LCL-FCL = <input type="text" name="a3"> (LCL은 L, FCL은 F 입력)<br>
	HBL NO. = <input type="text" name="a4"> (하우스비엘 번호)<br>
	MBL NO. = <input type="text" name="a5"> (마스터비엘 번호)<br>
	VESSEL = <input type="text" name="a6"> (모선명 입력)<br>
	POD  = <input type="text" name="a7"> (도착항구명 입력)<br>
	MRN = <input type="text" name="a8"> (MRN 입력)<br>
	ETD = <input type="text" name="a9"> (ETD 입력)<br>
	ETA = <input type="text" name="a10"> (ETA 입력)<br>
	BL CHECK / SABIS 입력 = <input type="text" name="a11"> (날짜)<br>
	AN 수령 > MASTER탭 MRN/MSN/WAREHOUSE입력(FCL) = <input type="text" name="a12"> (날짜)<br>
	MBL->HBL내용복사 > EDI 자료생성 > 프리즘확인(FCL) = <input type="text" name="a13"> (날짜)<br>
	콘솔사 실화주신고메일(LCL) = <input type="text" name="a14"> (날짜)<br>
	CNEE / 핸들링업체(관세사) AN/HBL 주기 = <input type="text" name="a15"> (날짜)<br>
	MASTER탭>선사/콘솔사 운임인보이스입력(입항1~2일전) = <input type="text" name="a16"> (날짜)<br>
	HOUSE탭>선사/콘솔사 운임인보이스입력+HCV $80 추가입력 = <input type="text" name="a17"> (날짜)<br>
	CNEE / 핸들링업체(관세사)에 CKX운임인보이스 전달 / OFC (파트너가 SUR BL 주면 SABIS에 표시) = <input type="text" name="a18"> (날짜 / OFC 일수)<br>
	이체증 확인 / CKX 입금확인(이차장님) = <input type="text" name="a19"> (이체증 금액)<br>
	실화주 직인명판 HBL수령 = <input type="text" name="a20"> (날짜)<br>
	HBL SUR / MBL SUR = <input type="text" name="a21"> (X / X , SUR / SUR)<br>
	LG 접수(MASTER SUR OK) = <input type="text" name="a22"> (날짜)<br>
	선사지결 결재후 송금요청(이차장님) / 지결금액 = <input type="text" name="a23"> (지결 금액)<br>
	프리즘3.0 / 유로지스허브 / 선사사이트 MDO신청(M SUR 안되어있을때, 거절됨) = <input type="text" name="a24"> (날짜)<br>
	CNEE / 핸들링업체가 요청한 쪽에 세금계산서 발행 = <input type="text" name="a25"> (날짜)<br>
	SABIS HDO출력 + 선사MDO > CNEE OR 핸들링업체에 전달 = <input type="text" name="a26"> (날짜)<br>
	서류파일링 = <input type="text" name="a27"> (날짜)<br>

    <BR>
	<input type="submit" value="확인">
</form>

<? 
	print "<br><a href='m.php'>관리 페이지</a><br>";
	print "<br>";
	print "<br>";
	print "<br><a href='1.php'>메인 화면으로</a>";
	print "<br>";
	
?>

</body>