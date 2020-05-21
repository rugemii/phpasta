<?php

$name = $_GET['name'];
$weightKg = $_GET['weightKg'];
$heightCm = $GET['heightCm'];

$BMI = $weightKg / (($heightCm / 100) ^ 2);

echo "Hello Joe, your BMI is $BMI";

?> 