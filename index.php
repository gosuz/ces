<?php
// if (isset($_POST['submit'])) {
//   $_POST['submit'];
  // How do i get the value of the submit post?
// }

// 

$nasmCompensationList = array("footFlattens","heelRises", "kneeMovesInward", "kneeMovesOutward", "excessiveForwardLean", "lowBackArches","lowBackRounds", "asymmetricalWeightShift", "armsFallForward", "forwardHead", "shoulderElevation"); //List of the compensations organized in an array

// Gets the values of the submit post (whatever you called as the value)
$userCompensationList = $_GET['compensation']; // from the checklist 
foreach ($userCompensationList as $userInputCompensation) {
  $userInputCompensation."<br>"; // each compensation the user inputted

  // feetTurnsOut

  foreach ($nasmCompensationList as $compensation) {

  }
    if ($userInputCompensation == $compensation) { //Checks if the compensation exists in our list.
      // If feetTurnsOut exits in our list, print the OA muscles 
      

      // Print the OA muscles of the compensation
      // Print the UA muscles of the compensation 
    }

  // If this was chosen
      // Check if its name equals any of the name of the compensations we have
      // If the name matches the name of the compensation we have, then print    out its OA and UA muscles

  // Things in the array are going to be the key name



// The values will be the OA + UA data
$compensationList = array("feetTurnsOut", "footFlattens", ) ;
      
// feetTurnsOut => OA, UA
  // Gets the value feetTurnsOut
}

// If the value = 
?>

<html>
  <head>
    <title>CES app</title>
  </head>
  <body>
    <!-- Checkbox form-->
    <!-- Create Checkboxes for each compensation -->

    <!-- Add for = "" later  -->
    <form method = "get"> 
      <p>If you see any of the following compensations during the assessment, check the box</p>
      <div>
        <input type="checkbox" id="feetTurnsOut" name="compensation[]" value="feetTurnsOut">
        <label for ="feetTurnsOut">Feet Turn Out</label> 
      </div>

      <div>
        <input type="checkbox" id= "footFlattens" name = "compensation[]" value = "footFlattens">
        <label for = "">Foot Flattens</label> 
      </div>

      <div>
        <input type="checkbox" id="heelRises" name = "compensation[]" value = "heelRises">
        <label for = "">Heel Rises</label> 
      </div>


      <div>
        <input type="checkbox" id="kneeMovesInward" name = "compensation[]" value = "kneeMovesInward">
        <label for = "">Knee Moves Inward</label> 
      </div>

      <div>
        <input type="checkbox" id="kneeMovesOutward"name = "compensation[]" value = "kneeMovesOutward">
        <label for = "">Knee Moves Outward</label> 
      </div>



      <div>
        <input type="checkbox" id="excessiveForwardLean" name = "compensation[]" value = "excessiveForwardLean" >
        <label for = "">Excessive Forward Lean</label> 
      </div>

      <div>
        <input type="checkbox" id="lowBackArches" name = "compensation[]" value = "lowBackArches">
        <label for = "">Low Back Arches</label> 
      </div>

     
      <div>
        <input type="checkbox" id="lowBackRounds" name = "compensation[]" value = "lowBackRounds">
        <label for = "">Low Back Rounds</label> 
      </div>

      <div>
        <input type="checkbox" id="asymmetricalWeightShift" name = "compensation[]" value = "asymmetricalWeightShift">
        <label for = "">Asymmetrical Weight Shift</label>
      </div> 

      <div>
        <input type="checkbox" id="armsFallForward" name = "compensation[]" value = "armsFallForward">
        <label for = "">Arms Fall Forward</label>
      </div> 

      

      <div>
        <input type="checkbox" id="forwardHead" name = "compensation[]" value = "forwardHead">
        <label for = "">Forward Head</label> 
      </div>

      <div>
        <input type="checkbox" id="shoulderElevation" name = "compensation[]" value = "shoulderElevation">
        <label for = "">Shoulder Elevation</label> 
      </div>

      <p>
        <input type="submit" name="submit" value="Submit">
      </p>
    </form>
  </body>
</html>