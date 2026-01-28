<?php
$kwh = 120;
$tien = 0;

if ($kwh <= 50) {
    $tien = $kwh * 1678;
} elseif ($kwh <= 100) {
    $tien = 50 * 1678 + ($kwh - 50) * 1734;
} else {
    $tien = 50 * 1678 + 50 * 1734 + ($kwh - 100) * 2014;
}

echo "Tổng tiền điện phải trả là: $tien VNĐ";
