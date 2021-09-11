<!--
Author: Arok Anwar
Date: 2021-03-23
Instructor: Muath Alzghool
Course Code: PROG10199
Assignment 4

Description: 2 Html Forms for to take in users orders
-->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/styles.css">   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="phpBody">
    <h1 id='h1php'>Thanks for the Order!</h1>
    <br><br>

    <div>
        <?php 
if(isset($_POST["btn1"])){
$coffs = "<img src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";
$coffeeSize = $_POST['size'];

$smallCup =  "<img id='smallCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";
$medCup =  "<img id='medCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";
$largeCup =  "<img id='largeCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";
$extraCup = "<img id='extraCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";

$creamImage = "<img id='cream' src='http://localhost/Tims/TimHortonsImages/cream.jpg' />";
$sugarImage = "<img id='cream' src='http://localhost/Tims/TimHortonsImages/sugar.jpg' />";

$plus = "<img id='cream' src='http://localhost/Tims/TimHortonsImages/plus.jpg' />";




            $numCoffees = $_POST["coffees"];
            $CoffeePrice = $numCoffees * 0.98;
            echo "you ordered $numCoffees coffee(s) price: $$CoffeePrice";
            
            echo "<br></br>";

            $creams = $_POST["numberOfCreams"];
            $CreamPrice = $creams * 0.4;
            echo "You ordered $creams cream(s) price: $$CreamPrice";

            echo "<br></br>";

            $numSugars = $_POST["sugars"];
            $SugarPrice = $numSugars * 0.2;
            echo "You ordered $numSugars sugar(s) price: $$SugarPrice";
            
            echo "<br></br>";

            $tax = 1.4;
            $totalPrice = $CoffeePrice + $CreamPrice +  $SugarPrice * $tax;
            echo "Your total price plus tax is: $$totalPrice";

            for($x = 0; $x<$numCoffees; $x++){
              
              echo "<br></br>";
              echo "<br></br>";
              if($coffeeSize == 'Small'){
                echo $smallCup;
              }elseif($coffeeSize == 'Medium'){
                echo $medCup;
              }elseif($coffeeSize == 'Large'){
                echo $largeCup;
              }elseif($coffeeSize == 'extraLarge'){
                echo $extraCup;
              }
              echo "<br></br>";
            }
            
            echo "<body id='extras'>Extras:</body>";

            for($y=0; $y<$creams; $y++){
              echo $creamImage;
            }

            for($z=0; $z<$numSugars; $z++){
              echo $plus;
              echo $sugarImage;
            }
            


          } if(isset($_POST["btn2"])){
            //echo "<h4>Your total order is </h4>";
            
            $amountCoffees = $_POST["slangNumber"];
            //echo $amountCoffees;
            $coffSize = $_POST["slangSizes"];
            $slangCoffee = $_POST["Coffee"];

            $plus = "<img id='cream' src='http://localhost/Tims/TimHortonsImages/plus.jpg' />";
            $largeCup =  "<img id='largeCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";
            $extraCup = "<img id='extraCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";
            $medCup =  "<img id='medCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";
            $smallCup =  "<img id='smallCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";
            $creamImage = "<img id='cream' src='http://localhost/Tims/TimHortonsImages/cream.jpg' />";
            $sugarImage = "<img id='cream' src='http://localhost/Tims/TimHortonsImages/sugar.jpg' />";
            $medCup =  "<img id='medCoff' src='http://localhost/Tims/TimHortonsImages/cup.jpg' />";

            $regPrice = $amountCoffees * 1.59;
            $doublePrice =  $amountCoffees * 1.99;
            $triplePrice =  $amountCoffees * 2.20;
            $black =  $amountCoffees * 0.45;
            $blackOne =  $amountCoffees * 0.50;
            $blackTwo =  $amountCoffees * 1.10;
            $blackThree =  $amountCoffees * 1.20;

            //Small Values
            $totalRegSmall = $regPrice - 1;

            $totalDblSmall = $doublePrice - 1;
            $totalTripleSmall = $triplePrice - 1;

            $totalBlackSmall = $black - 0.25;
            $totalBlackOneSmall = $blackOne - 0.10;
            $totalBlackTwoSmall = $blackTwo - 0.20;
            $totalBlackThreeSmall = $blackThree - 0.10;

            //Medium Value
            $totalRegMed = $regPrice;

            $totalDblMed = $doublePrice;
            $totalTripleMed = $triplePrice;

            $totalBlackMed = $black;
            $totalBlackOneMed = $blackOne;
            $totalBlackTwoMed = $blackTwo;
            $totalBlackThreeMed = $blackThree;
            //Large Value
            $totalRegLarge = $regPrice + 1;

            $totalDblLarge = $doublePrice + 1;
            $totalTripleLarge = $triplePrice + 1;

            $totalBlackLarge = $black + 0.25;
            $totalBlackOneLarge = $blackOne + 0.15;
            $totalBlackTwoLarge = $blackTwo + 0.20;
            $totalBlackThreeLarge = $blackThree + 0.30;
            //Extra Values
            $totalRegExtra = $regPrice + 0.15;

            $totalDblExtra = $doublePrice + 0.20;
            $totalTripleExtra = $triplePrice + 0.50;

            $totalBlackExtra = $black + 1;
            $totalBlackOneExtra = $blackOne + 1;
            $totalBlackTwoExtra = $blackTwo + 1;
            $totalBlackThreeExtra = $blackThree + 1;

            //Regular costs
            if($coffSize == 'slangSmall' && $slangCoffee == 'regular'){
              echo "Your price is $$totalRegSmall";
            }elseif($coffSize == 'slangMedium' && $slangCoffee == 'regular'){
              echo "Your price is $$totalRegMed";
            }elseif($coffSize == 'slangLarge' && $slangCoffee == 'regular'){
              echo "Your price is $$totalRegLarge";
            }elseif($coffSize == 'slangExtra' && $slangCoffee == 'regular') {
              echo "Your price is $$totalRegExtra";
            }

            //double double Costs
            if($coffSize == 'slangSmall' && $slangCoffee == 'doubleDouble'){
              echo "Your price is $$totalDblSmall";
            }elseif($coffSize == 'slangMedium' && $slangCoffee == 'doubleDouble'){
              echo "Your price is $$totalDblMed";
            }elseif($coffSize == 'slangLarge' && $slangCoffee == 'doubleDouble'){
              echo "Your price is $$totalDblLarge";
            }elseif($coffSize == 'slangExtra' && $slangCoffee =='doubleDouble') {
              echo "Your price is $$totalDblExtra";
            }

            //Triple Costs
            if($coffSize == 'slangSmall' && $slangCoffee == 'tripleTriple'){
              echo "Your price is $$totalTripleSmall";
            }elseif($coffSize == 'slangMedium' && $slangCoffee == 'tripleTriple'){
              echo "Your price is $$totalTripleMed";
            }elseif($coffSize == 'slangLarge' && $slangCoffee == 'tripleTriple'){
              echo "Your price is $$totalTripleLarge";
            }elseif($coffSize == 'slangExtra' && $slangCoffee =='tripleTriple') {
              echo "Your price is $$totalTripleExtra";
            }

            //Black Costs
            if($coffSize == 'slangSmall' && $slangCoffee == 'Black'){
              echo "Your price is $ $totalBlackSmall";
            }elseif($coffSize == 'slangMedium' && $slangCoffee == 'Black'){
              echo "Your price is $ $totalBlackMed";
            }elseif($coffSize == 'slangLarge' && $slangCoffee == 'Black'){
              echo "Your price is $ $totalBlackLarge";
            }elseif($coffSize == 'slangExtra' && $slangCoffee == 'Black'){
              echo "Your price is $ $totalBlackExtra";
            }

            //black One Sugar Costs
            if($coffSize == 'slangSmall' && $slangCoffee == 'blackOneSugar'){
              echo "Your price is $$totalBlackOneSmall";
            }elseif($coffSize == 'slangMedium' && $slangCoffee == 'blackOneSugar'){
              echo "Your price is $$totalBlackOneMed";
            }elseif($coffSize == 'slangLarge' && $slangCoffee == 'blackOneSugar'){
              echo "Your price is $$totalBlackOnelarge";
            }elseif($coffSize == 'slangExtra' && $slangCoffee == 'blackOneSugar'){
              echo "Your price is $$totalBlackOneExtra";
            }

            //black Two Sugar Costs
            elseif($coffSize == 'slangSmall' && $slangCoffee == 'blackTwoSugar'){
              echo "Your price is $$totalBlackTwoSmall";
            }elseif($coffSize == 'slangMedium' && $slangCoffee == 'blackTwoSugar'){
              echo "Your price is $$totalBlackTwoMed";
            }elseif($coffSize == 'slangLarge' && $slangCoffee == 'blackTwoSugar'){
              echo "Your price is $$totalBlackTwoLarge";
            }elseif($coffSize == 'slangExtra' && $slangCoffee == 'blackTwoSugar'){
              echo "Your price is $$totalBlackTwoExtra";
            }

        

            //black Three Sugar
            if($coffSize == 'slangSmall' && $slangCoffee == 'blackThreeSugar'){
              echo "Your price is $$totalBlackThreeSmall";
            }elseif($coffSize == 'slangMedium' && $slangCoffee == 'blackThreeSugar'){
              echo "Your price is $$totalBlackThreeMed";
            }elseif($coffSize == 'slangLarge' && $slangCoffee == 'blackThreeSugar'){
              echo "Your price is $$totalBlackThreeLarge";
            }elseif($coffSize == 'slangExtra' && $slangCoffee == 'blackThreeSugar'){
              echo "Your price is $$totalBlackThreeExtra";
            }
//--------------------------------------------------------------------------------------------------------------------------------------
            for($q=0; $q<$amountCoffees; $q++){

              if($coffSize == 'slangSmall' && $slangCoffee == 'regular'){
                  echo "<br></br>";
                  echo "<br></br>";
                  echo $smallCup;
                  echo $sugarImage;
                  echo $plus;
                  echo $sugarImage;
              }elseif($coffSize == 'slangMedium' && $slangCoffee == 'regular'){
                echo "<br></br>";
                echo "<br></br>";
                echo $medCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangLarge' && $slangCoffee == 'regular'){
                echo "<br></br>";
                echo "<br></br>";
                echo $largeCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangExtra' && $slangCoffee == 'regular'){
                echo "<br></br>";
                echo "<br></br>";
                echo $extraCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;



              }elseif($coffSize == 'slangSmall' && $slangCoffee == 'doubleDouble'){
                echo "<br></br>";
                echo "<br></br>";
                echo $smallCup;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangMedium' && $slangCoffee == 'doubleDouble'){
                echo "<br></br>";
                echo "<br></br>";
                echo $medCup;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangLarge' && $slangCoffee == 'doubleDouble'){
                echo "<br></br>";
                echo "<br></br>";
                echo $largeCup;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangExtra' && $slangCoffee == 'doubleDouble'){
                echo "<br></br>";
                echo "<br></br>";
                echo $extraCup;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;


              }elseif($coffSize == 'slangSmall' && $slangCoffee == 'tripleTriple'){
                echo "<br></br>";
                echo "<br></br>";
                echo $smallCup;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangMedium' && $slangCoffee == 'tripleTriple'){
                echo "<br></br>";
                echo "<br></br>";
                echo $medCup;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangLarge' && $slangCoffee == 'tripleTriple'){
                echo "<br></br>";
                echo "<br></br>";
                echo $largeCup;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangExtra' && $slangCoffee == 'tripleTriple'){
                echo "<br></br>";
                echo "<br></br>";
                echo $extraCup;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $creamImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;

              }elseif($coffSize == 'slangSmall' && $slangCoffee == 'Black'){
                echo "<br></br>";
                echo "<br></br>";
                echo $smallCup;
              }elseif($coffSize == 'slangMedium' && $slangCoffee == 'Black'){
                echo "<br></br>";
                echo "<br></br>";
                echo $medCup;
              }elseif($coffSize == 'slangLarge' && $slangCoffee == 'Black'){
                echo "<br></br>";
                echo "<br></br>";
                echo $largeCup;
              }elseif($coffSize == 'slangExtra' && $slangCoffee == 'Black'){
                echo "<br></br>";
                echo "<br></br>";
                echo $extraCup;


              }elseif($coffSize == 'slangSmall' && $slangCoffee == 'blackOneSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $smallCup;
                echo $sugarImage;
              }elseif($coffSize == 'slangMedium' && $slangCoffee == 'blackOneSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $medCup;
                echo $sugarImage;
              }elseif($coffSize == 'slangLarge' && $slangCoffee == 'blackOneSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $largeCup;
                echo $sugarImage;
              }elseif($coffSize == 'slangExtra' && $slangCoffee == 'blackOneSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $extraCup;
                echo $sugarImage;


              }elseif($coffSize == 'slangSmall' && $slangCoffee == 'blackTwoSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $smallCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangMedium' && $slangCoffee == 'blackTwoSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $medCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangLarge' && $slangCoffee == 'blackTwoSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $largeCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangExtra' && $slangCoffee == 'blackTwoSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $extraCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;

                
              }elseif($coffSize == 'slangSmall' && $slangCoffee == 'blackThreeSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $smallCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangMedium' && $slangCoffee == 'blackThreeSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $medCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangLarge' && $slangCoffee == 'blackThreeSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $largeCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }elseif($coffSize == 'slangExtra' && $slangCoffee == 'blackThreeSugar'){
                echo "<br></br>";
                echo "<br></br>";
                echo $extraCup;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
                echo $plus;
                echo $sugarImage;
              }
            }

          }
        ?>           
    </div>
        <div>
       
        </div>


</body>
</html>