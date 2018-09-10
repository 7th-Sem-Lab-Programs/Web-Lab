<?php
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    $op = $_POST["op"];
    switch ($op) {
        case "+":
            $res = $n1 + $n2;
            break;
        case "-":
            $res = $n1 - $n2;
            break;
        case "*":
            $res = $n1 * $n2;
            break;
        case "/":
            if($n2 == "0") {
                $res = "Divide by zero error.";
            } else {
                $res = $n1 / $n2;
            }
            break;
        default:
            $res = "Invalid operator.";
            break;
    }
    echo "Result is : ".$res;
?>
