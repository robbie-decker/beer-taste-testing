<?php

include "header.php";

include "config.php";

$id_result = $GET_result;

  $sql = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS`";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $row = $row["topic"];
echo $row;
}}

include "footer.php";

?>

SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='yourdatabasename' 
    AND `TABLE_NAME`='yourtablename';