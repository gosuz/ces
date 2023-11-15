<?php

$feetTurnsOutOaUaArray = array(
  "name" => "feet turns out",
  "OA" => array ("Soleus", "Lat. Gastrocnemius", "Bicep Femoris (short head)", "Tensor Fascia Latae"),
  "UA" => array ("Med. Gastrocnemius", "Med. Hamstring", "Gluteus Medius/Maximus", "Gracilis", "Popliteus"));
$footFlattensOaUaArray = array(
  "name" => "foot flattens",
  "OA" => array ("Peroneals", "Lat. Gastrocnemius", "Bicep Femoris (short head)", "Tensor Fascia Latae"),
  "UA" => array ("Anterior Tibialis", "Posterior Tibialis", "Med. Gastrocnemius", "Gluteus Medius"));

$heelRisesOaUaArray = array(
  "name" => "heel rises",
  "OA" => array ("Soleus"),
  "UA" => array ("Anterior Tibialis"));

$kneeMovesInwardOaUaArray = array(
  "name" => "knee moves inward",
  "OA" => array ("Adductor Complex", "Bicep Femoris (short head)"
  , "Tensor Fascia Latae", "Vastus Lateralis", "Lat. Gastrocnemius"),
  "UA" => array ("Gluteus Medius/Maximus", "Vastus Medialis Oblique (VMO)",  "Med. Hamstring", "Med. Gastrocnemius"));
  
$kneeMovesOutwardOaUaArray = array(
  "name" => "knee moves outward",
  "OA" => array ("Piriformis", "Biceps Femoris", "Tensor Fascia Latae", "Gluteus Minimus/ Medius"),
  "UA" => array ("Adductor Complex", "Med. Hamstring", "Gluteus Maximus"));

$excessiveForwardLeanOaUaArray = array(
  "name" => "excessive forward lean",
  "OA" => array ("Soleus", "gastrocnemius", "hip flexor complex", "abdominal complex (rectus abdominus, external oblique)"),
  "UA" => array ("Anterior Tibialis", "Gluteus Maximus", "Erector Spinae"));
  
$lowBackArchesOaUaArray = array(
  "name" => "low back arches",
  "OA" => array ("Hip Flexor Complex", "Erector Spinae", "Latissimus Dorsi
  "),
  "UA" => array ("Anterior Tibialis", "Gluteus Maximus", "Erector Spinae"));

$lowBackRoundsOaUaArray = array(
  "name" => "low back rounds",
  "OA" => array ("Hamstrings", "Adductor Magnus", "Rectus Abdominus", "External Obliques"),
  "UA" => array ("Gluteus Maximus", "Erector Spinae", "Intrinsic Core Stabilizers (transverse abdominis, multifidus, internal oblique, pelvic floor muscles, transversospinalis)"));

$asymmetricalWeightShiftOaUaArray = array(
  "name" => "asymmetrical weight shift",
  "OA" => array ("Adductor Complex", "Tensor Fascia Latae (same side)", "Piriformis", "Bicep Femoris", "Gluteus Medius (opposite side)"),
  "UA" => array ("Gluteus Medius (same side)", "Adductor Complex (opposite side)"
)); 

$armsFallForwardOaUaArray = array(
  "name" => "arms fall forward",
  "OA" => array ("Latissumus Dorsi", "Pectoralis Major/ Minor", "Teres Major",  "Coracobrachialis"),
  "UA" => array ("Mid/Lower Trapezius", "Rhomboids", "Rotator Cuff", "Posterior Deltoid
  "));

$forwardHeadOaUaArray = array(
  "name" => "forward head",
  "OA" => array ("Levator Scapulae", "Sternocleidomastoid", "Scalenes"),
  "UA" => array ("Deep Cervical Flexors"));

$shoulderElevationOaUaArray = array(
  "name" => "shoulder elevation",
  "OA" => array ("Upper Trapezius", "Sternocleidomastoid", "Levator Scapulae"),
  "UA" => array ("Mid/lower Trapezius", "Rhomboids", "Rotator Cuff"));

$nasmFullCompensationList = array($feetTurnsOutOaUaArray, $footFlattensOaUaArray, $heelRisesOaUaArray, $kneeMovesInwardOaUaArray, $kneeMovesOutwardOaUaArray, $excessiveForwardLeanOaUaArray, $lowBackArchesOaUaArray, $lowBackRoundsOaUaArray, $asymmetricalWeightShiftOaUaArray, $armsFallForwardOaUaArray, $forwardHeadOaUaArray, $shoulderElevationOaUaArray);


if (isset($_POST['submit'])) {
  if ($_POST['compensations'] === NULL) {
    echo '<p style = "color: red;">ERROR: Please check at least one box</p>';
  }else {
  $checkBoxes =  $_POST['compensations'];
  foreach($checkBoxes as $value) {
    foreach($nasmFullCompensationList as $nasmCompensation) {
      // echo "You have $nasmCompensation";
    // var_dump("NasmCompensation:".$nasmCompensation['name']."Value:"."$value"."<br>");
    if ($value === $nasmCompensation['name']) {// nasmCompensation "name" => its value
      // you want to see if the compensation they checked exists. because it exists you're gonna print out the value of the array of OA msucles of Feet turn out
      
      echo "<p>Compensation: $value </p>Likely overactive muscles are: <br>";
      foreach($nasmCompensation['OA'] as $overActiveMuscles){
        echo $overActiveMuscles."<br>";
      }
      
      echo "<br>Most likely underactive muscles are: <br>";
      foreach($nasmCompensation['UA'] as $underActiveMuscles){
        echo $underActiveMuscles."<br>";
      }
    }
  }
  }
  }
} 
?>

<html>
  <head>
    <title>CES app</title>
  </head>
  <body>
    <!-- Checkbox form-->
    <!-- Create Checkboxes for each compensation -->
    <form method = "post"> 
      <p>If you see any of the following compensations during the assessment, check the box</p>
      <div>
        <input type="checkbox" id="feetTurnsOut" name = "compensations[]" value="feet turns out">
        <label for ="feetTurnsOut">Feet Turn Out</label> 
      </div>

      <div>
        <input type="checkbox" id= "footFlattens" name = "compensations[]" value = "foot flattens">
        <label for = "">Foot Flattens</label> 
      </div>

      <div>
        <input type="checkbox" id="heelRises" name = "compensations[]" value = "heel rises">
        <label for = "">Heel Rises</label> 
      </div>


      <div>
        <input type="checkbox" id="kneeMovesInward" name = "compensations[]" value = "knee moves inward">
        <label for = "">Knee Moves Inward</label> 
      </div>

      <div>
        <input type="checkbox" id="kneeMovesOutward"name = "compensations[]" value = "knee moves outward">
        <label for = "">Knee Moves Outward</label> 
      </div>



      <div>
        <input type="checkbox" id="excessiveForwardLean" name = "compensations[]" value = "excessive forward lean" >
        <label for = "">Excessive Forward Lean</label> 
      </div>

      <div>
        <input type="checkbox" id="lowBackArches" name = "compensations[]" value = "low back arches">
        <label for = "">Low Back Arches</label> 
      </div>

     
      <div>
        <input type="checkbox" id="lowBackRounds" name = "compensations[]" value = "low back rounds">
        <label for = "">Low Back Rounds</label> 
      </div>

      <div>
        <input type="checkbox" id="asymmetricalWeightShift" name = "compensations[]" value = "asymmetrical weight shift">
        <label for = "">Asymmetrical Weight Shift</label>
      </div> 

      <div>
        <input type="checkbox" id="armsFallForward" name = "compensations[]" value = "arms fall forward">
        <label for = "">Arms Fall Forward</label>
      </div> 

      

      <div>
        <input type="checkbox" id="forwardHead" name = "compensations[]" value = "forward head">
        <label for = "">Forward Head</label> 
      </div>

      <div>
        <input type="checkbox" id="shoulderElevation" name = "compensations[]" value = "shoulder elevation">
        <label for = "">Shoulder Elevation</label> 
      </div>

      <p>
        <input type="submit" name="submit" value="Submit">
      </p>
    </form>
    <!-- Add for = "" later  -->
    <!-- <form method = "post"> 
      <p>If you see any of the following compensations during the assessment, check the box</p>
      <div>
        <input type="checkbox" id="feetTurnsOut" name = "compensations[]" value="feetTurnsOut">
        <label for ="feetTurnsOut">Feet Turn Out</label> 
      </div>

      <div>
        <input type="checkbox" id= "footFlattens" name = "compensations[]" value = "footFlattens">
        <label for = "">Foot Flattens</label> 
      </div>

      <div>
        <input type="checkbox" id="heelRises" name = "compensations[]" value = "heelRises">
        <label for = "">Heel Rises</label> 
      </div>


      <div>
        <input type="checkbox" id="kneeMovesInward" name = "compensations[]" value = "kneeMovesInward">
        <label for = "">Knee Moves Inward</label> 
      </div>

      <div>
        <input type="checkbox" id="kneeMovesOutward"name = "compensations[]" value = "kneeMovesOutward">
        <label for = "">Knee Moves Outward</label> 
      </div>



      <div>
        <input type="checkbox" id="excessiveForwardLean" name = "compensations[]" value = "excessiveForwardLean" >
        <label for = "">Excessive Forward Lean</label> 
      </div>

      <div>
        <input type="checkbox" id="lowBackArches" name = "compensations[]" value = "lowBackArches">
        <label for = "">Low Back Arches</label> 
      </div>

     
      <div>
        <input type="checkbox" id="lowBackRounds" name = "compensations[]" value = "lowBackRounds">
        <label for = "">Low Back Rounds</label> 
      </div>

      <div>
        <input type="checkbox" id="asymmetricalWeightShift" name = "compensations[]" value = "asymmetricalWeightShift">
        <label for = "">Asymmetrical Weight Shift</label>
      </div> 

      <div>
        <input type="checkbox" id="armsFallForward" name = "compensations[]" value = "armsFallForward">
        <label for = "">Arms Fall Forward</label>
      </div> 

      

      <div>
        <input type="checkbox" id="forwardHead" name = "compensations[]" value = "forwardHead">
        <label for = "">Forward Head</label> 
      </div>

      <div>
        <input type="checkbox" id="shoulderElevation" name = "compensations[]" value = "shoulderElevation">
        <label for = "">Shoulder Elevation</label> 
      </div>

      <p>
        <input type="submit" name="submit" value="Submit">
      </p>
    </form> -->
  </body>
</html>


