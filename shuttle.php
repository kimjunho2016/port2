<?
	session_start();
	$id = $_SESSION["id"];
	echo "id = ".$id;
	print "<br>";
	?>

<html style="font-size: 13px;">
<head>
	<title>관리 페이지</title> </head>

<style>
  
	a {
  	  text-decoration: none;
  }
	a:link, a:visited {
     background-color: #54539e;
     color: #f9f9f9;
     padding: 5px 5px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
 }
 
	a:hover, a:active {
     background-color: #0085e7;
}


</style>


<body>

<운송사-화성익스프레스><br>
1. 신항<br>
상하차로+셔틀료=6만원<br>
보관료(DAY당)=5천원<br>
<br>
2. 북항<br>
상하차료=5만원<br>
셔틀료=5만원<br>
보관료(DAY당)=1만원<br>
<br>
**냉동 및 스페셜 컨은 금액 다름**<br>
<br>


</body>
</html>


