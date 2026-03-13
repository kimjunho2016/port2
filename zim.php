<?
	session_start();

	header('Content-Type: text/html; charset=utf-8');

	$FONT_SIZE_1 = 13;


	$id = $_SESSION["id"];
	//echo "id = ".$id;
	print "<br>";

//	$DateAndTime = date('Y-m-d');
	$DateAndTime = date('Y-m-d h:i:s');
	//echo "date = ".$DateAndTime;
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
	background-color: white;
  }

  div#title {font-size:15pt; font-weight:bold;}
  div#title img {width:1em; height:1em;;}
  html { font-size: 100.0%; 
		background-color: white;
  }
</style>
</head>



<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">

<form method="post" action="search_schedule_zim.php">
	
	<BR><div style="color:black;font-size:13">
	[ ZIM 스케쥴 조회하기 ]
	<BR>
	<BR>	
	POD = <input type="text" name="c1"> (EX : USSAV )
	<BR>
	<BR>
	<input type="submit" value="ZIM 스케쥴 찾아 주세요!">
	</br>
	</div>
	<br>

	
	
</form>


</body>
</html>
