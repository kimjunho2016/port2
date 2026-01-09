<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	print "<br>";
	//<!--width: 100%;-->
	?>

<html>
<head>
	<title>운임 관리 페이지</title> </head>

<style>
  
  table {
    
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid gray;
	padding: 0px;
	background-color: WHITE;
  }

  div#title {font-size:15pt; font-weight:bold;}
  div#title img {width:1em; height:1em;;}
  html { font-size: 100.0%; 
		background-color: WHITE;
  }
</style>

<body>


<?
	require_once("../ckx_db/db_info.php");
	$s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

	function lineNameSearch($line_number)
	{
		$call = mysql_query("SELECT * FROM line WHERE uid = $line_number");
		while ($result = mysql_fetch_array($call)) 
		{
			$lineName = $result[1];
		}
		return $lineName;
	}
	
	
	//print "<br><a href='of_asia.php?id=of_asia'>  [ 아시아 운임 ]  </a><a href='of_middleeast.php'>  [ 중동 운임 ]  </a>";

	$FONT_SIZE = 15;

	print "<br><a href='of_asia.php?id=of_asia'>  [ 아시아 운임 ]  </a><a href='of_asia.php?id=of_middleeast'>  [ 중동 운임 ]  </a>";
	print "<br>";
	print "<br>";


	
	
	mysql_close($s);


?>

</body>
</html>