<?
	session_start();

 	 require_once("../ckx_db/db_info.php");
	 $s = mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
	 mysql_select_db($DBNM);

	 $id = $_POST["id"];

	 if(empty($id))
	 {
		echo(" <meta http-equiv='Refresh' content = '0; URL=1.php'>");
	 }
	 else
	 {
		 $re = mysql_query("SELECT * FROM login where phone = '$id'");
		 $num_rows = mysql_num_rows($re);

	     echo '$num_rows = '.$num_rows."<br>";
		 if($num_rows == 1)
		 {
			 while ($result = mysql_fetch_array($re)) 
			 {
				 echo '$result[0] = '.$result[0].' $id = '.$id;
				 print "<br>";
				 if($result[0] == "$id")
				 {
					 $_SESSION["id"] = $id;			 
					 echo(" <meta http-equiv='Refresh' content = '0; URL=m.php'>");
				 }
				 /*
				 if(empty($result[0]))
				 {
					echo '$result[0] = '.$result[0].' $id = '.$id;
					print "<br>";
					$_SESSION["id"] = "";
					echo(" <meta http-equiv='Refresh' content = '0; URL=terminal.php'>");
				 }
				 */
			 }
		 }
		 else
		 {
			 $_SESSION["id"] = "";
			 echo(" <meta http-equiv='Refresh' content = '0; URL=1.php'>");
		 }
	 }	 
?>