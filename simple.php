<?php
function generateRandomGujaratNumberPlate() {
  $plate = "GJ";

  // Generate two random digits for the first part
  $plate .= rand(01, 20);

  // Generate four random letters
  for ($i = 0; $i < 2; $i++) {
    $plate .= chr(rand(65, 90)); // Generate uppercase letter (A-Z)
  }

  // Generate last two digits
  $plate .= rand(1000, 9999);

  return $plate;
}

// Example usage
$randomPlate = generateRandomGujaratNumberPlate();
echo $randomPlate; // Output: GJ12ABCD98

?>