<?php
include "header.php";

//administrative
$id_panel = $_GET['panel']; 

$sql = "SELECT * from result WHERE id_panel = '$id_panel'";

$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

//result id
$id_result = $row["id_result"];
$distractions = $row["distractions"];
$ebc = $row["ebc"];
$offcolor = $row["offcolor"];
$clarity = $row["clarity"];
$head_texture = $row["head_texture"];
$head_retention = $row["head_retention"];
$visual_carb = $row["visual_carb"];
//aroma
$alc_aroma = $row["alc_aroma"];
$flavors = $row["flavors"]; 
//taste
$alc_taste = $row["alc_taste"];
$sweet_taste = $row["sweet_taste"];
$bitter_taste = $row["bitter_taste"];
$acid_taste = $row["acid_taste"];
$balance = $row["balance"];

//body/aftertaste
$astringency = $row["astringency"];
$carb = $row["carb"];
$body = $row["body"];  
$finish = $row["finish"];

//off-flavors/style/notes
$offflavor = $row["offflavor"];
$style = $row["style"];
$favorability = $row["favorability"];
$notes = $row["notes"];
}
}
else{

echo "Hmm...something went wrong. We couldn't find a report for that panel.";

}

echo "The Result is : ";


//Count number of completed panels
$foo = "id_user";
$sql = "SELECT COUNT($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo $row['COUNT(id_user)'];
}

//Count number of each distraction
$foo = "distractions";
$sql = "SELECT COUNT($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo $row['COUNT(id_user)'];
}


//Get average of ebc
$foo = "ebc";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(ebc)'];
}

//Get average of alc aroma
$foo = "alc_aroma";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(alc_aroma)'];
}

//Get average of alc taste
$foo = "alc_taste";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(alc_taste)'];
}

//Get average of sweet taste
$foo = "sweet_taste";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(sweet_taste)'];
}

//Get average of bitter taste
$foo = "bitter_taste";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(bitter_taste)'];
}

//Get average of acid taste
$foo = "acid_taste";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(acid_taste)'];
}

//Get average of balance
$foo = "balance";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(balance)'];
}

//Get average of astringency
$foo = "astringency";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(astringency)'];
}

//Get average of carb
$foo = "carb";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(carb)'];
}

//Get average of favorability
$foo = "favorability";
$sql = "SELECT AVG($foo) from result WHERE id_panel = '$id_panel'";
$result = $db->query($sql);
while($row = mysqli_fetch_array($result)){

echo "<br> average $foo is : ";
echo $row['AVG(favorability)'];
}

  $sql = "SELECT ALL topic FROM question";
 $result = $db->query($sql);

  $sql = "SELECT * FROM result_sensory WHERE id_result = $id_result";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $topic = $row["topic"];
    $off_topic = str_replace('_', '&nbsp;', $topic);
  }
}

include "footer.php";
?>