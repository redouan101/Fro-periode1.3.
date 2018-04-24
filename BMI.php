<?php
  $gewicht = $_GET["gewicht"];
  $lengte = $_GET["lengte_cm"];
  BMIcalc($gewicht,$lengte);//call function

function BMIcalc($gewicht,$lengte) {
  print "Uw gewicht is: $gewicht kg.<br>";
  //omrekenen lengte
  $lengte = $lengte/100;
  print "Uw lengte is: $lengte m.<br>";
  //bereken BMIcalc
  $bmi = $gewicht / ($lengte * $lengte);
  //afronden
  $bmi = round($bmi,1);
  print "Uw BMI is: $bmi.<br>";

  switch ($bmi) {
  case ($bmi<18.5):
    echo "U bent ondergewicht";
    break;

  case ($bmi>=18.5)&&($bmi<25):
    echo "U heeft een normaal gewicht voor uw lengte";
    break;

  case ($bmi>=25.0)&&($bmi<29.9):
    echo "U bent een beetje overgewicht";
    break;

  case ($bmi>=30.0)&&($bmi<34.9):
    echo "U bent Obese CLass 1";
    break;

  case ($bmi>=35.0)&&($bmi<39.9):
    echo "U bent Obese Class 2";
    break;

  case ($bmi>=40.0):
    echo "U bent Obese Class 3";
    break;
}
}
