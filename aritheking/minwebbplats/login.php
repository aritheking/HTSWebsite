<!-- Kom ihåg att logga in till databasen först! -->

<head>
<link rel="stylesheet" type="text/css" href="CSS/Mall.css">
</head>

<?php
        include 'connect.php';
		
         $query = "SELECT name FROM user WHERE name='$_POST[myUser]' AND password='$_POST[myPassword]'";
         echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();
		 session_unset();
         
		 if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST[myUser];
			  header('Location: Grattis.htm');
		 }
		 else {
			  header('Location: inloggning.htm');
		 }
		
?>