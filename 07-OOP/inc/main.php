<?php
require_once __DIR__ . '/point.php';
require_once __DIR__ . '/inheritance.php';

//$A = new Point(2,3);
//$A->info();
//$A->x = 7;
//$A->y = 8;
//echo $A;

$human = new Human("Verchetty", "Tommy", 30);
echo $human . '<br>';
//$t_student = new Student($human, "");

$student = new Student("Pinkman", "Jessie", 20, "Chemistry", "WW_221", 90,95);
echo $student . '<br>';

$graduate = new Graduate
(
    "Schreder",
    "Hank",
    40,
    "Criminalistic",
    "OBN",
    50,
    70,
    "How to catch Hiesenberg"
);
echo $graduate . '<br>';
?>