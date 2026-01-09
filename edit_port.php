<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<form method="post" action="update_port.php">
<?php 
	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);
    
	$c1 = $_POST["c2"]; // uid
    $re = mysql_query("SELECT * FROM pod WHERE uid=$c1");
	
    while ($result = mysql_fetch_array($re)) {
    ?>    
	
	UID : <input type="text" name="a0" size=30 value="<?php echo $c1 ?>">
	<br>
	POD : <input type="text" name="a1" size=30 value="<?php echo $result[1] ?>">
	<br>
	POD CODE: <input type="text" name="a2" size=30 value="<?php echo $result[2] ?>">
	<br>
	VIA : <input type="text" name="a3" size=30 value="<?php echo $result[3] ?>">
	<br>
	VIA CODE : <input type="text" name="a4" size=30 value="<?php echo $result[4] ?>">
	<br>
	NATION : <input type="text" name="a5" size=30 value="<?php echo $result[5] ?>">
	<br>
	NATION CODE : <input type="text" name="a6" size=30 value="<?php echo $result[6] ?>">
	<br>
	LINE : <input type="text" name="a7" size=30 value="<?php echo $result[7] ?>">
	<br>
	LINE CODE : <input type="text" name="a8" size=30 value="<?php echo $result[8] ?>">
	<br>
	20'DV : <input type="text" name="a9" size=30 value="<?php echo $result[9] ?>">
	<br>
	40'DV : <input type="text" name="a10" size=30 value="<?php echo $result[10] ?>">
	<br>
	40'HC : <input type="text" name="a11" size=30 value="<?php echo $result[11] ?>">
	<br>
	DATE : <input type="text" name="a12" size=30 value="<?php echo $result[12] ?>">
	<br>
	MEMO : <input type="text" name="a13" size=30 value="<?php echo $result[13] ?>">
	<br>
	
    <input type="submit" value="자료 수정하기">
	</form>
		
<?		
    }

	$re = mysql_query("SELECT * FROM line");
	$total = mysql_num_rows($re);
    while ($result = mysql_fetch_array($re)) {
        ?>
		<input type="checkbox" name="line[]" value="<? print $result[0] ?>" > <? print $result[0];print " ";print $result[1] ?> <br>
		<?
    }

    mysql_close($s);
	print "<br>";
    print "<br><a href='2e.php'>메인 화면으로</a>";
 ?>




<?
/*
print "차주 이름 : ";
		print $result[2];
        print "<br>";

		print "휴대폰 : ";
		print $result[3];
        print "<br>";

		print "차종 : ";
		print $result[4];
        print "<br>";

		print "차번 : ";
		print $result[5];
        print "<br>";

		print "등록일 : ";
		print $result[6];
        print "<br>";

		print "원동기 배기량 : ";
		print $result[7];
        print "<br>";

		print "주소 : ";
		print $result[8];
        print "<br>";

		print "접수 날짜 : ";
		print $result[9];
        print "<br>";

		print "승인 접수 장착 : ";
		print $result[10];
        print "<br>";

		print "검사일 : ";
		print $result[11];
        print "<br>";

		print "입금 및 지불 : ";
		print $result[12];
        print "<br>";

		print "비고 : ";
		print $result[13];
        print "<br>";

		print "메세지 전송 날짜 : ";
		print $result[14];
        print "<br>";
		*/
?>