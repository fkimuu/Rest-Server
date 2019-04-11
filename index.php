<?php

 ###Include script and set up db variables
 require_once('config/db.php');

 //setup db variables
 require_once('config/config.php');

 ###create new db object
 $database = new db();

###Select Multiple rows
#####set up query
$database->query('SELECT * FROM users ORDER by id');
$row = $database->resultset();


// Force the outer structure into an object rather than array
echo json_encode($row , JSON_FORCE_OBJECT);


#####Print result
// echo '<pre>';
// foreach($row as $key => $singlerow) {
// echo "My name is ".$singlerow["name"]."</br>";
// }
// echo '</pre>';


#####echo number of records returned
//echo $database->rowCount();



 ?>
