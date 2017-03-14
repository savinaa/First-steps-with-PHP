<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    $number = 0;
    $preprevious=0;
    $previous = 1;
    $sum=0;
    echo "$previous" . " ";
    for ($i = 1; $i < $n; $i++) {
        $sum =$number+$previous+$preprevious;
        $number=$preprevious;
        $preprevious=$previous;
        $previous=$sum;
        echo "$sum" . " ";
    }
}
?>
</body>
</html>