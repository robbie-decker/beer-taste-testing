<?php 

$panel_id = $_GET["panel"];
$user_id = $_GET["user"]; 
    
include "panelheader.php";


  $sql = "SELECT * FROM panels WHERE id = '$panel_id'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $samplecode = $row["id"];
    $duration = $row["name"];
    $flavor1 = $row["flavor1"];
    $flavor2 = $row["flavor2"];
    $flavor3 = $row["flavor3"];
    $flavor4 = $row["flavor4"];
    $flavor5 = $row["flavor5"];
    $flavor6 = $row["flavor6"];
    $flavor7 = $row["flavor7"];
    $flavor8 = $row["flavor8"];
    $flavor9 = $row["flavor9"];
    $flavor10 = $row["flavor10"];
    $salt = $row["salt"];
  }
} else {
  echo "Error:0 results for $sql";
}

?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">


<div class="mobile-pad">

<div class="tab"><!--Start of this page of the form-->

  <h1><center>Description Panel</center></h1>
  
  <p><center>In this <?php echo $paneltype ?> panel we will build out, in detail, a full description<br>of this blind beer sample. The process should take<br>about 10 minutes.</center></p>
 <!-- Beginning of test --> 
  <br><br>
  <form id="descriptionpanel" method="post" action="/description_insert.php?user=<?php echo $user_id . '&panel=' . $panel_id;?>"> 
      
<h3><center>Before beginning make sure you wash your hands with an unscented soap, drink some water or eat something bland, like crackers. Before we start:</center></h3>      

<!--THIS ONE MIGHT BE DRAWN FROM PANEL INSTRUCTIONS-->
Where is your sample being poured from?<br>
<input type="radio" id="can" name="serving" value="can">
<label for="can">Can</label>
<input type="radio" id="bottle" name="serving" value="bottle">
<label for="bottle">Bottle</label>
<input type="radio" id="tap" name="serving" value="tap">
<label for="tap">Tap</label>
<input type="radio" id="fermenter" name="serving" value="fermenter">
<label for="fermenter">Fermenter</label>
<input type="radio" id="bright" name="serving" value="bright">
<label for="bright">Bright Tank</label>
<input type="radio" id="growler" name="serving" value="growler">
<label for="growler">Crowler/Growler</label>
<br>
<br>
<!--Maybe insist this?-->
What will you be drinking from?<br>
<input type="radio" id="taster" name="glass" value="taster">
<label for="taster">Glass Taster</label>
<input type="radio" id="full" name="glass" value="full">
<label for="full">Full Pour Glass</label>
<input type="radio" id="plastic" name="glass" value="plastic">
<label for="plastic">Plastic Cup</label>
<input type="radio" id="direct" name="glass" value="direct">
<label for="direct">Directly from Can or Bottle</label>
<br>
<br>

    <ul class="ks-cboxtags">
        
<strong>In the last hour have you:</strong><br>(check all that apply)<br>
<li><input type="checkbox" id="smoked" name="distractions[]" value="smoked">
<label for="smoked">Smoked</label></li>
<li><input type="checkbox" id="perfume" name="distractions[]" value="perfume">
<label for="perfume">Worn Perfume/Cologne</label></li>
<li><input type="checkbox" id="alcohol" name="distractions[]" value="alcohol">
<label for="alcohol">Had a Beer or other Alcohol</label></li>
<li><input type="checkbox" id="coffee" name="distractions[]" value="coffee">
<label for="coffee">Drank Coffee</label></li>
<li><input type="checkbox" id="spicy" name="distractions[]" value="spicy">
<label for="spicy">Eaten Spicy/Bold Food</label></li>
<br><br>
You may proceed if you have checked any of the above, but best practices would be to wait until an hour has passed.
<!--Give option to make this mandatory???-->
</ul>

</div><!--Ends this page of the form-->

<div class="tab"><!--Start of this page of the form-->


  <h1><center>Appearance</center></h1>
  <p><center>Pour the sample into a clean serving vessel. Hold your glass up to a light or against a white background and tilt it a little. Note color changes near the edges. Pay attention to the quality and persistence of the head.</center></p>
 
 
<br>  
  <!--Plugin for white screen backdrop goes here??-->
<?php
include "whitescreen.php";
?>
<br>

  
<ul class="ks-cboxtags">
  <strong>Color:</strong>
    <p>Move the slider to best match the color of the beer</p>
  <input type="range" min="1" max="20" value="1" class="colorslider" id="ebc" name="ebc">
<br>
<li><input type="checkbox" id="offcolor" value="1" name="offcolor" value="offcolor"><label for="offcolor">This sample isn't a typical color</label></li>
</ul>

<ul class="ks-rboxtags">
  <strong>Clarity:</strong>
    <p>Select the level of clarity that best describes the beer</p>
<li><input type="radio" id="brilliant" name="clarity" value="brilliant">
<label for="brilliant">Brilliant</label></li>
<li><input type="radio" id="clear" name="clarity" value="clear">
<label for="clear">Clear</label></li>
<li><input type="radio" id="slight" name="clarity" value="slight">
<label for="slight">Slight Haze</label></li>
<li><input type="radio" id="hazy" name="clarity" value="hazy">
<label for="hazy">Hazy</label></li>
<li><input type="radio" id="heavily" name="clarity" value="heavily">
<label for="heavily">Heavily Hazed</label></li>
<li><input type="radio" id="opaque" name="clarity" value="opaque">
<label for="opaque">Nearly Opaque</label></li>
</ul>

<ul class="ks-rboxtags">
  <strong>Head Texture:</strong>
    <p>Select the term that best describes the head texture</p>
<li><input type="radio" id="thin_head" name="head_texture" value="Thin">
<label for="thin_head">Thin</label></li>
<li><input type="radio" id="craggy" name="head_texture" value="Craggy/Rocky">
<label for="craggy">Craggy/Rocky</label></li>
<li><input type="radio" id="fluffy" name="head_texture" value="Fluffy">
<label for="fluffy">Fluffy</label></li>
<li><input type="radio" id="mousse" name="head_texture" value="Mousse">
<label for="mousse">Mousse-Like</label></li>
</ul>


<ul class="ks-rboxtags">
  <strong>Head Retention:</strong>
    <p>Select the term that best describes the head retention</p>
<li><input type="radio" id="poor" name="head_retention" value="Poor">
<label for="poor">Poor (<15sec)</label></li>
<li><input type="radio" id="moderate" name="head_retention" value="Moderate">
<label for="moderate">Moderate (15-60sec)</label></li>
<li><input type="radio" id="good" name="head_retention" value="Good">
<label for="good">Good (>60sec)</label></li>
    </ul>
    
    
<ul class="ks-rboxtags">
  <strong>Visible Carbonation:</strong>
    <p>Select the term that best describes the way the carbonation appears</p>
<li><input type="radio" id="none" name="visual_carb" value="None">
<label for="none">None</label></li>
<li><input type="radio" id="slow" name="visual_carb" value="Slow">
<label for="slow">Slow</label></li>
<li><input type="radio" id="medium" name="visual_carb" value="Medium">
<label for="medium">Medium</label></li>
<li><input type="radio" id="fast" name="visual_carb" value="Fast-Rising Bubbles">
<label for="fast">Fast-Rising Bubbles</label></li>
<br>
<br>
    </ul>

</div><!--Ends this page of the form-->


<div class="tab"><!--Start of this page of the form-->
  <h1><center>Aroma</center></h1>
  <p><center>Swirl the beer around in the glass and put your nose right in there. Takes several short inhales. Warm it up in your hands to release more aromas. Put your palm over the top of the glass and swirl for a few seconds, trapping the aromas in the glass then smell. Take note of how the smell changes as it warms.</center></p>
  
  
  <strong>Alcohol Aroma:</strong>
    <p text-align:left;>Undetectable
    <span style="float:right;">Harsh</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" class="slider" id="alc_aroma" name="alc_aroma"><br>
</div>

<br>
<!--    THIS IS THE INDICATOR OF VALUE OF SLIDER IN CASE I NEED IT LATER
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
-->

<!--END div for checkbox tags-->

    <ul class="ks-cboxtags">
    <strong>Aromas:</strong>(Presented in random order)
    <p>Select all characteristics you detect</p>


<?php 
  $sql = "SELECT topic FROM questions WHERE type = 'aroma' ORDER BY rand()";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $topic = $row["topic"];
    $smell_topic = str_replace('_', '&nbsp;', $topic);
    ?>


<li><input type="checkbox" id="<?php echo $smell_topic; ?>" name="<?php echo $smell_topic; ?>" value="1"><label for="<?php echo $smell_topic; ?>"><?php echo $smell_topic; ?></label></li>



<?php
}
} else {
  echo "Error:0 results for $sql";
}
?>

<!--END div for checkbox tags-->
    </center>
    </ul>



<!-- "Other things that you smelled" section for SMELL -->


</div><!--Ends this page of the form-->

<div class="tab"><!--Start of this page of the form-->
  <h1><center>Taste</center></h1>
  <p><center>Sip. Take in just enough to coat your mouth. Let it hit your lips, gums, teeth, and all around your tongue. Sip again and when you swallow, keep your mouth closed and exhale through your nose. Take note of the initial flavors you notice, the intermediate flavors, and the aftertaste.</center></p>

  <strong>Alcohol Taste:</strong>
    <p text-align:left;>Undetectable
    <span style="float:right;">Harsh</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" class="slider" id="alc_taste" name="alc_taste"><br>
</div>

<br>

  <strong>Sweetness:</strong>
    <p text-align:left;>Undetectable
    <span style="float:right;">Cloying</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" class="slider" id="sweet_taste" name="sweet_taste"><br>
</div>
<br>

  <strong>Bitterness:</strong>
    <p text-align:left;>Undetectable
    <span style="float:right;">Acrid</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" class="slider" id="bitter_taste" name="bitter_taste"><br>
</div>

<br>

  <strong>Acidity:</strong>
    <p text-align:left;>Undetectable
    <span style="float:right;">Acerbic</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" class="slider" id="acid_taste" name="acid_taste"><br>
</div>

<br>

  <strong>Overall Intensity:</strong>
    <p text-align:left;>Undetectable
    <span style="float:right;">Overwhelming</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" class="slider" id="intensity_taste" name="intensity_taste"><br>
</div>

<br>

<!-- BALANCE -->
  <strong>Balance:</strong>
    <p text-align:left;>Harshly Bitter/Sour
    <span style="float:right;">Cloyingly Sweet</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="5" class="slider" id="balance" name="balance"><br>
</div>

<br>

</div><!--Ends this page of the form-->


<div class="tab"><!--Start of this page of the form-->

  <h1><center>Body and Mouthfeel</center></h1>
  <p><center>Sip again, this time focusing on the weight of the beer. Consider how the beer feels in your mouth, the texture, the carbonation, and the aftertaste in your mouth after you swallow.</center></p>
<br>

  <strong>Astringency</strong>(dryness or "puckering" from tannins)
    <p text-align:left;>Undetectable
    <span style="float:right;">Harsh</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" class="slider" id="astringency" name="astringency"><br>
</div>

<br>

  <strong>Carbonation</strong>
    <p text-align:left;>Flat
    <span style="float:right;">Champagne-Like</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="0" class="slider" id="carb" name="carb"><br>
</div>

<br>

<!--Start div for checkbox tags-->

<ul class="ks-cboxtags">
  <strong>Body:</strong>
    <p>Check all terms that apply</p>
<li><input type="checkbox" id="drying" name="body[]" value="Drying">
<label for="drying">Drying</label><li>
<li><input type="checkbox" id="soft" name="body[]" value="Soft">
<label for="soft">Soft</label><li>
<li><input type="checkbox" id="mouthcoating" name="body[]" value="Mouth-Coating">
<label for="mouthcoating">Mouth-Coating</label><li>
<li><input type="checkbox" id="thin" name="body[]" value="Thin">
<label for="thin">Thin</label><li>
<li><input type="checkbox" id="slick" name="body[]" value="Slick/Oily">
<label for="slick">Slick/Oily</label><li>
<li><input type="checkbox" id="filling" name="body[]" value="Filling">
<label for="filling">Filling</label><li>
<li><input type="checkbox" id="chewy" name="body[]" value="Chewy">
<label for="chewy">Chewy</label><li>
<li><input type="checkbox" id="watery" name="body[]" value="Watery">
<label for="watery">Watery</label><li>
<li><input type="checkbox" id="viscous" name="body[]" value="Viscous">
<label for="viscous">Viscous</label><li>
<li><input type="checkbox" id="mineral" name="body[]" value="Mineral/Chalky">
<label for="mineral">Mineral/Chalky</label><li>
<li><input type="checkbox" id="round" name="body[]" value="Round">
<label for="round">Round</label><li>
<li><input type="checkbox" id="gassy" name="body[]" value="Gassy">
<label for="gassy">Gassy</label><li>
<li><input type="checkbox" id="silky" name="body[]" value="Silky">
<label for="silky">Silky</label><li>
<li><input type="checkbox" id="crisp" name="body[]" value="Crisp">
<label for="crisp">Crisp</label><li>
<li><input type="checkbox" id="clean" name="body[]" value="Clean">
<label for="clean">Clean</label><li>

<!--END div for checkbox tags-->
    </ul>
    
<br>

<ul class="ks-rboxtags">
  <strong>Finish Length:</strong>
    <p>Select the term that best describes the duration of the finish</p>
<li><input type="radio" id="short" name="finish" value="Short">
<label for="short">Short (<15sec)</label></li>
<li><input type="radio" id="medium_finish" name="finish" value="Medium">
<label for="medium_finish">Medium (15-60sec)</label></li>
<li><input type="radio" id="long" name="finish" value="Long">
<label for="long">Long (>60sec)</label></li>
    </ul>


</div><!--Ends this page of the form-->

<div class="tab"><!--Start of this page of the form-->

<br>
<br>
  <h1><center>Off-Flavors, Style, and Other Notes</center></h1>
  <p><center>In this final section, you will be tasting the sample specifically to hone in on possible off-flavors and identify what style you believe the sample is. Once you have completed this section, you may finish your sample.</center></p>
  <br>
<!--END div for checkbox tags-->

<ul class="ks-cboxtags">
  <strong>Off-Flavors:</strong>(Presented in random order)
    <p>Select all characteristics you detect</p>

<?php 
  $sql = "SELECT topic FROM questions WHERE type = 'off' ORDER BY rand()";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $topic = $row["topic"];
    $off_topic = str_replace('_', '&nbsp;', $topic);
    ?>


<li><input type="checkbox" id="<?php echo $off_topic ?>" name="offflavor[]" value="<?php echo $off_topic; ?>"><label for="<?php echo $off_topic; ?>"><?php echo $off_topic; ?></label></li>

<?php
}
} else {
  echo "Error:0 results for $sql";
}
?>
<!--END div for checkbox tags-->
    </ul>
    
<br>

<strong>Style</strong>
    <p>To the best of your ability, what style is this sample?</p>
<?php
include 'style_dropdown.php';
?>

<br><br>

  <strong>Overall Favorability</strong>
    <p text-align:left;>I Hate It
    <span style="float:right;">I Love It</span></p>
<div class="slidecontainer">
  <input type="range" min="0" max="10" value="5" class="slider" id="favorability" name="favorability"><br>
</div>

<br>

<strong>Additional Notes</strong>
    <p>Feel free to share any other impressions you detect (optional)</p>
<input type="textarea" id="notes" name="notes" rows="3" cols="46"></textarea>

<!--<input type="submit" formaction="/description_insert.php?user=<?php echo $user_id . '&panel=' . $panel_id; ?>" value="Submit">-->


<br>
<br>
</div>
<div style="overflow:auto;">
    <button type="button" class="button2" id="prevBtn" onclick="nextPrev(-1)" style="float:left;">Previous</button>
    <a href="#top"><button type="button" class="button2" id="nextBtn" onclick="nextPrev(1)" style="float:right;">Next</button>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>
</form>

<script type="text/javascript" src="multipage.js"></script>;
<?php
?>

<!-- End of test -->


</div>
<!-- End of PANEL -->

<?php include "footer.php"; ?>