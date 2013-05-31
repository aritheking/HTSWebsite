
<head>
<link rel="stylesheet" type="text/css" href="CSS/Mall.css">
</head>
<?php
include 'connect.php';
?>


<?php
		if(isset($_POST["Regnr"]) && isset($_POST["Marke"]) && isset($_POST["Modell"]) && isset($_POST["Arsmodell"]) && isset($_POST["Farg"]) && isset($_POST["Pris"])){
             $query = "INSERT INTO `begagnade bilar` (Regnr, Marke, Modell, Arsmodell, Farg, Pris) VALUES ('$_POST[Regnr]' , '$_POST[Marke]' , '$_POST[Modell]' , '$_POST[Arsmodell]' , '$_POST[Farg]' , '$_POST[Pris]')";
             echo '<em> ' . $query . ' </em>';
             $result = mysql_query($query);
             if ($result === false) {
	             echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
        else {
		     echo "Successfully added datat to database."; 
		     }
		}
		else
	   {
	         echo "Missing values to add to databas.";
	   }
?>
