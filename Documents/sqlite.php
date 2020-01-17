<!DOCTYPEHTML>
<HEAD>
	<TITLE>TEST PDO</TITLE>
</HEAD>
<BODY>
	
<?php 

//creation de la connection
$connection = new SQLite3('BDD_MPL.db');

//test de la connection 
if($connection) {
	echo " DUDE, YOUU ARE CONNECTED\n\n";
}

//affichage 

$sql =SELECT *

//Execution du code
$rs = $connection->query($sql);

//resultat
while($row = $rs->fetchArray(SQLITE3_ASSOC)) {
echo $row['content'] . "\n\n";
}

?>




</BODY>
</HTML>