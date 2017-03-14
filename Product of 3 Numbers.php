<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    X: <input type="text" name="num1"/>
    Y: <input type="text" name="num2"/>
    Z: <input type="text" name="num3"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $n = intval($_GET['num1']);
    $m = intval($_GET['num2']);
    $l = intval($_GET['num3']);
    $negatives = 0;
    $foundZeros = false;
    $nums = array($n, $m, $l);
    for ($i = 0; $i < count($nums); $i++) {
        if ($nums[$i] < 0) {
            $negatives++;
        } elseif ($nums[$i] == 0) {
            $foundZeros = true;
        }
    }

    if ($negatives%2==1&&$foundZeros!==true){
        echo "Negative";
    }else{
        echo "Positive";
    }
}
?>
</body>
</html>