<?php

require_once 'Chicken.class.php';

$Chicken = new Chicken("kaw kaaaaw", true, true);

echo $Chicken->howAreYouDoing();
echo "<br>";
echo $Chicken->makeNoise();
$Chicken->reNameChicken("John");
echo "<br>";
echo $Chicken->getName();
$Chicken->teachNewNoise("cokadoodledoooo");
echo "<br>";
echo $Chicken->makeNoise();
echo "<br>";
echo $Chicken->howManyEggsCanYouLay();
echo $Chicken->putInCage();
echo "<br>";
echo $Chicken->howManyEggsCanYouLay();
echo $Chicken->setFree();
echo "<br>";
echo $Chicken->howManyEggsCanYouLay();
$Chicken->layEggs();
$Chicken->layEggs();
$Chicken->layEggs();
$Chicken->layEggs();
$Chicken->layEggs();
$Chicken->feedChicken();
$Chicken->feedChicken();
$Chicken->feedChicken();
$Chicken->layEggs();
$Chicken->layEggs();
$Chicken->cookChicken();