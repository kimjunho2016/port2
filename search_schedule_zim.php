<html>

<style>
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid gray;
	padding: 0px;
	background-color: green;
  }

  div#title {font-size:15pt; font-weight:bold;}
  div#title img {width:1em; height:1em;;}
  html { font-size: 100.0%; 
		background-color: gray;
  }
</style>

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr"></head>

<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=10.0, user-scalable=yes">

<?php 

    $pod = $_POST["c1"];
	//if($pod == null)
	echo "pod = ".$pod;
	print "<br>";

	if(empty($pod))
	{
		print "<br>POD 를 입력하세요.</a>";
		print "<br>";
		print "<br><a href='zim.php'>search schedule 화면으로</a>";
		//echo("<script>location.href=search_sechdule_zim.php;</script>");
		return;
	}
	
	// 오늘 날짜를 구하기
	$today = date("d-M-Y");
	echo "today = ".$today;
	print "<br>";

	// 새 창에 띄울 주소
	$newWindowUrl = "https://www.zim.com/ko/schedules/point-to-point?portcode=KRPUS%3B10&portdestinationcode=".$pod."%3B10&direction=true&fromdate=".$today."&weeksahead=6&cargotype=true&emissionstype=true&toggleemission=true";

	echo "newWindowUrl = ".$newWindowUrl;
	print "<br>";
	
	$redirectUrl = "zim.php";   // 현재 페이지가 이동할 주소
/*
	echo "<script>
    window.open('$newWindowUrl', '_blank'); // 새 창 띄우기
    location.href = '$redirectUrl';         // 현재 페이지 이동
	</script>";
*/
	echo "<script>location.href = '$newWindowUrl';</script>";

	
 ?>

</body>
</html>
