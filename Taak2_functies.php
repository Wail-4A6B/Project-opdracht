<?php
   /**
   * Pakt een tabel wat gebaseerd is op de opgegeven $query van de database.
   */
   function getTabel($query) {
   	$servername = "localhost"; $username = "root"; $password = "";
   	$dbname = "project_periode_4";
          $conn = new mysqli($servername, $username, $password, $dbname);
          
          if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
          }
   	
   	$result = mysqli_query($conn, $query);
   	
   	$tabel = [];
   	
   	while($row = mysqli_fetch_assoc($result)) {
   		array_push($tabel, $row);
   	}
   	
   	$conn->close();
   	
   	return $tabel;
   }
   
   /**
   * Pakt de select optie die gedisplayed word op de pagina.
   */
   function getSelectOption() {
   	//de array wat elke opdrachtnummer in de database bevat.
   	$tabel = getTabel("SELECT opdrachtnummer FROM opdrachten");
   	
   	$resultaat = "<select name='select_option'>";
   	$resultaat = $resultaat . "<option name='' value='' disabled selected>Kies een opdracht nummer</option>";
   	foreach($tabel as $row) {
   		$resultaat = $resultaat . "<option value= " . $row['opdrachtnummer'] . ">opdrachtnmr " . $row['opdrachtnummer'] . "</option>";
   	}
   	$resultaat = $resultaat . "</select>";
   	return $resultaat;
   }
   
   /**
   * Toont het resultaat van het ingevulde formulier op de pagina.
   */
   function toonOpdracht() {
   	$opdrachtnummer = $_POST['select_option'];
   	$tabel = getTabel("SELECT * FROM opdrachten WHERE opdrachtnummer = '$opdrachtnummer'");
   	
   	$resultaat = "<table border='1'>
   					<tr>
   						<th>opdrachtnummer</th>
   						<th>werkinstructie</th>
   						<th>datum uitvoering</th>
   						<th>kabelleverancier</th>
   						<th>waarnemingen</th>
   						<th>handtekening</th>
   						<th>aantal bedrijfsuren</th>
   						<th>afleg redenen</th>
   					</tr>";
   	
   	foreach($tabel as $row) {
   		$resultaat = $resultaat . "<tr>
   								<td>" . $row["opdrachtnummer"] . "</td>
   								<td>" . $row["werkinstructie"] . "</td>
   								<td>" . $row["datum_uitvoering"] . "</td>
   								<td>" . $row["kabelleverancier"] . "</td>
   								<td>" . $row["waarnemingen"] . "</td>
   								<td>" . $row["handtekening"] . "</td>
   								<td>" . $row["aantal_bedrijfsuren"] . "</td>
   								<td>" . $row["afleg_redenen"] . "</td>
   								</tr>"; 
   	}
   	
   	$resultaat = $resultaat . "</table>";
   	return $resultaat;
   }
   
   ?>