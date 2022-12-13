<?php
$number1 = filter_input(INPUT_GET, 'n1', FILTER_VALIDATE_FLOAT);
$number2 = filter_input(INPUT_GET, 'n2', FILTER_VALIDATE_FLOAT);
$operator = filter_input(INPUT_GET, 'operator');
$sum = 0;
$result = [
    "result" => 0,
];
if (is_numeric($number1) && is_numeric($number2)) {
    switch ($operator) {
        case "add":
            $sum = $number1 + $number2;
            $result = ["result" => $sum];
            break;
        case "sub":
            $sum = $number1 - $number2;
            $result = ["result" => $sum];
            break;
        case "div":
            $sum = $number1 / $number2;
            $result = ["result" => $sum];
        case "mult":
            $sum = $number1 * $number2;
            $result = ["result" => $sum];
            break;
        case "mod":
            $sum = $number1 % $number2;
            $result = ["result" => $sum];
            break;
        case "sqrt":
            $sum = $sum =  $number1 + $number2;
            $sum = sqrt($sum);
            $result = ["result" => $sum];
            break;
    }
}
echo json_encode($result);
