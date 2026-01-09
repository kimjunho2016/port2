<?
	
	$FONT_SIZE_1 = 13;
    

	session_start();
	$id = $_SESSION["id"];
	echo '<div style="color:yellow;font-size:'.$FONT_SIZE_1.'">'."id = ".$id.'</div>';
	print "<br>";

//	$DateAndTime = date('Y-m-d');
	$DateAndTime = date('Y-m-d h:i:s');
	echo '<div style="color:yellow;font-size:'.$FONT_SIZE_1.'">'."date = ".$DateAndTime.'</div>';
	print "<br>";
	
?>

<html>
<body>
<head>
<style>
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 0px solid gray;
	padding: 0px;
	background-color: black;
  }

  div#title {font-size:10pt; font-weight:bold;}
  div#title img {width:1em; height:1em;;}
  html { font-size: 100.0%; 
		background-color: black;
  }
  div { color : white; }
</style>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">

<form method="post" action="search_port.php">
	
	<BR>	
    <div style="color:yellow;font-size:13">POL = <input type="text" name="c3"> (EX : BUSAN )
	<BR>
	<BR>
	VIA = <input type="text" name="c2"> (EX : NEW YORK OR 공백)
	<BR>
	<BR>	
    DEL = <input type="text" name="c1"> (EX : DETROIT )
	<BR>
	</div>
	<BR>
	<input type="submit" value="확인">
	</br>
	</br>

	<?
	if(empty($id))
	{
		print "<br>";
		echo '<a href="login.php"> 로그인 </a>';
		print "<br>";
	}
	else
	{
		print "<br>";
		echo '<a href="m.php"> 관리 페이지 </a>';
		print "<br>";
	}
	?>
	<br>
	<br>
	<?
	if(empty($id))
	{		
	}
	else
	{
		print "<br>";
		echo '<a href="logout.php"> 로그아웃 </a>';
		print "<br>";
	}
	?>
	
</form>


</body>
</html>
