<?php
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        		<link rel="alternate stylesheet" title="none" type="text/css" href="CSS/empty.css.css" />	  
                <link rel="stylesheet" type="text/css" href="CSS/Mall.css" />
                <title>Tabell</title>	
    	<style type="text/css">
.style1 {
	text-align: center;
	font-size: x-large;
	font-weight: bold;
}
.style2 {
	font-size: medium;
	font-family: "Times New Roman", Times, serif;
}
a {
	color: #000000;
}
</style>
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner" class="style1" >Kolla på bilar</div>
            </div>
            <div id="left">
					<div class="style2">
						<b><a href="index.html">Home</a><br>
						<br>
						<a href="Form.htm">Formulär</a></b><br>
						<br>
						<strong><a href="inloggning.htm">Inloggning</a></strong></div>
            </div>
            <div id="center">
                <div id="info">
				<h1 class="dokument-item-header"> Bilarna</h1>
				<p>   
				
				<b>   
				
				<?php
         $query = "SELECT * FROM `begagnade bilar`";
         echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
         if ($result === false) {
	         echo '<strong> Error when you asked a question to your databas. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }

         $num=mysql_numrows($result);
         if($num==0) {
             echo '<strong>Your question is empty</strong>';
         }
         else {
             echo "<ul>";
             for ($i=0;$i<$num;$i++) {
                 $temp = mysql_fetch_array($result);
	             echo "<li>" . $temp["ID"] . "   " . $temp["Regnr"]  . "   " . $temp["Marke"] . "   " . $temp["Modell"] . "   " . $temp["Arsmodell"] . "   " . $temp["Farg"] . "   " . $temp["Pris"] ."</li>";
             }
             echo "</ul>";
        }
?>
	</b>
	</p>			
</div>
</div>
           
			<div id="footer">
				<p> <b>&copy; 2013 Arman Khosravinejad
				</b>
				</p>
			</div>
        </div>
    </body>
</html>