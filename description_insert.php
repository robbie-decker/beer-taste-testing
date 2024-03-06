<?php
include "header.php";

//administrative
$id_panel = $_GET['panel']; 
$id_user = $_GET['user'];


//panel validity
$checkbox1 = $_POST['distractions'];  
    $distractions = "";  
    foreach($checkbox1 as $distractions1)  
        {  
          $distractions .= $distractions1.",";  
        }  

//appearance
$ebc = $_POST["ebc"];
$offcolor = $_POST["offcolor"];
$clarity = $_POST["clarity"];
$head_texture = $_POST["head_texture"];
$head_retention = $_POST["head_retention"];
$visual_carb = $_POST["visual_carb"];



//aroma
$alc_aroma = $_POST["alc_aroma"];

//Skip flavors and enter seperately
//$checkbox2 = $_POST['flavors'];  
//    $flavors = "";  
//    foreach($checkbox2 as $flavors2)  
//        {  
//          $flavors .= $flavors2.",";  
//        };

        

//taste
$alc_taste = $_POST["alc_taste"];
$sweet_taste = $_POST["sweet_taste"];
$bitter_taste = $_POST["bitter_taste"];
$acid_taste = $_POST["acid_taste"];
$balance = $_POST["balance"];

//body/aftertaste
$astringency = $_POST["astringency"];
$carb = $_POST["carb"];
$checkbox3 = $_POST['body'];  
    $body = "";  
    foreach($checkbox3 as $body3)  
        {  
          $body .= $body3.",";  
        };
$finish = $_POST["finish"];


//off-flavors/style/notes
//$offflavor = $_POST["offflavor"];
//$checkbox4 = $_POST['offflavor'];  
//    $offflavor = "";  
//    foreach($checkbox4 as $offflavor4)  
//        {  
//          $offflavor .= $offflavor4.",";  
//        };

$style = $_POST["select2"];
$favorability = $_POST["favorability"];
$notes = $_POST["notes"];


//INSERT INTO DB

include "config.php";

$sql = "INSERT INTO result(id_panel, id_user, distractions, ebc, offcolor, clarity, head_texture, head_retention, visual_carb, alc_aroma, flavors, alc_taste, sweet_taste, bitter_taste, acid_taste, balance, astringency, carb, body, finish, offflavor, style, favorability, notes)VALUES('$id_panel', '$id_user', '$distractions', '$ebc', '$offcolor', '$clarity', '$head_texture', '$head_retention', '$visual_carb', '$alc_aroma', '$flavors', '$alc_taste', '$sweet_taste', '$bitter_taste', '$acid_taste', '$balance', '$astringency', '$carb' , '$body', '$finish', '$offflavor', '$style', '$favorability', '$notes')";

if ($db->query($sql) === TRUE) {
//  echo $sql;
  //GET THE result_id from the results just added above.
    $last_id = $db->insert_id;
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}



//Create long string of all categories and all values for Flavors and OffFlavors

$categories = "";
$values = "";

$sql = "SELECT topic FROM questions";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $topic = $row["topic"];

//turn spaces back into _
$topicfix = str_replace('&nbsp;', '_', $topic);
                    //put back ticks around anything that contains a -
                    //if (str_contains($topicfix, '-')) {
                    //    $topicfix = `$topicfix`;
                    //}
//    echo $topicfix;
//    echo "<br>";    

$categories .= $topicfix.", ";

$values = $_POST["$topic"];

$allvalues .= $values."', '";
      
  } 
}
//echo $allvalues;

//adds slashes to categories that have forward slashes that cause errors
//$categories = str_replace('/', '\/', $categories);
//remove extra characters from the end of each string, to fit the correct syntax
$categories = substr($categories, 0, -2);
$allvalues = substr($allvalues, 0, -3);
//add single quote to beginning of string to fit the correct syntax
$categories = "id_result, $categories";
//$allvalues = "$last_id, '$allvalues";


//echo $categories;
echo "<br><br>";
//echo $values;

include "config.php";

$sql = "INSERT INTO result_sensory($categories)VALUES('$last_id', '$allvalues)";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}




include "footer.php";
?>