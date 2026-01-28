<?php
$weight = 70;
$height = 1.75;

$bmi = $weight / ($height * $height);

echo "Chỉ số BMI: $bmi <br>";

if ($bmi < 18.5) {
    echo "Thiếu cân";
} elseif ($bmi < 24.9) {
    echo "Bình thường";
} elseif ($bmi < 29.9) {
    echo "Thừa cân";
} else {
    echo "Béo phì";
}
