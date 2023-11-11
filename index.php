<?php
$nasmCompensationList = array("feetTurnsOut","footFlattens","heelRises", "kneeMovesInward", "kneeMovesOutward", "excessiveForwardLean", "lowBackArches","lowBackRounds", "asymmetricalWeightShift", "armsFallForward", "forwardHead", "shoulderElevation"); //List of the compensations organized in an array

$checkBoxes =  $_POST['compensations'];
// print_r($userCompensationList) ; // prints out whats in the array

// Check if checkboxes have been set

// loop through the array created by the user
foreach($checkBoxes as $value) {
  foreach($nasmCompensationList as $nasmCompensation) {
    if ($value === $nasmCompensation) {
      echo $nasmCompensation."<br/>";
    }
    // if $checkbox exists in nasmcompensation list {
      //do this
    // }
  }
}
// loop through the array created by the user and see if it exists in the nasm list

?>

<html>
  <head>
    <title>CES app</title>
  </head>
  <body>
    <!-- Checkbox form-->
    <!-- Create Checkboxes for each compensation -->

    <!-- Add for = "" later  -->
    <form method = "post"> 
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
    </form>
  </body>
</html>


