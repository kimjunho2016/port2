<meta name="viewport" content="width=device-width, initial-scale=1.0,
maximum-scale=1.0, minimum-scalw=1.0, user-scalable=no" \>

<form method="post" action="search_port_e.php">
    POD = <input type="text" name="c1"> 
	</BR>
	VIA = <input type="text" name="c2">
	</BR>
<!--	<?php 
	
    require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

    //$c1_d = $_POST["c1"];
    $re = mysql_query("SELECT * FROM line");
	$total = mysql_num_rows($re);
    while ($result = mysql_fetch_array($re)) {
        ?>
		<input type="checkbox" name="line[]" value="<? print $result[0] ?>" > <? print $result[1] ?> <br>
		<?
    }
    mysql_close($s);
	?>
	-->
	<input type="submit" value="확인">

</form>

<form method="post" action="new.php">
<input type="submit" value="신규 입력">
</form>
