<?php
		if(isset($_POST[ID]) and $_POST[Regnr] and $_POST[Märke] and $_POST[Modell] and $_POST[Årsmodell] and $_POST[Färg] and $_POST[Pris]){
             $query = "INSERT INTO begagnade bilar (Text, Number) VALUES ('$_POST[ID]' , '$_POST[Regnr]' , '$_POST[Märke]' , '$_POST[Modell]' , '$_POST[Årsmodell]' , '$_POST[Färg]' , '$_POST[Pris]')";
             //echo '<em> ' . $query . ' </em>';
             $result = mysql_query($query);
             if ($result === false) {
	             echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		     echo "Successfully added datat to database." 
		}
		else
	   {
	         echo "Missing values to add to databas.";
	   }
?>
