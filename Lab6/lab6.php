<!DOCTYPE html>
<html>
<head>
<title>PHP Test</title>
</head>
<style>
input { width: 200px; }
input.operand { width: 50px; }
* { font-family: Arial; }
</style>
<body>
<form action="index.php" method="post">
    <h1>PHP Test</h1>
    <b>1. </b><?php
    $full_name =
        $_POST["first"] . " " . $_POST["middle"][0] . ". " . $_POST["last"];
    echo $full_name . "<br>" . "<br>";
    ?>
    <b>2. </b><?php
    $split = $_POST["split"];
    $split = explode("-", $split);
    foreach ($split as $list) {
        echo "<li>" . $list . "<li>" . "<br>";
    }
    ?>
    <b>3. </b><?php
    $shuffle = $_POST["shuffle"];
    $shuffled = str_shuffle($shuffle);
    echo $shuffled . "<br>" . "<br>";
    ?>
    
    <b>4. </b><?php
    $lower = $_POST["tolower"];
    $lower = strtolower($lower);
    echo $lower . "<br>" . "<br>";
    ?>
    <b>5. </b><?php
    $comp1 = $_POST["compare1"];
    $comp2 = $_POST["compare2"];
    if (strcmp($comp1, $comp2) !== 0) {
        echo "First compare value is not equal to the Second compare value in a case sensitive string comparison" .
            "<br>" .
            "<br>";
    } else {
        echo "First compare value is equal to the Second compare value in a case sensitive string comparison" .
            "<br>" .
            "<br>";
    }
    if (strcasecmp($comp1, $comp2) == 0) {
        echo "First compare value is equal to the Second compare value in a case-insensitive string comparison" .
            "<br>" .
            "<br>";
    } else {
        echo "First compare value is not equal to the Second compare value in a case-insensitive string comparison" .
            "<br>" .
            "<br>";
    }
    ?>
    <b>6. </b><?php
    $val1 = $_POST["num1"];
    $val2 = $_POST["num2"];
    $minimum = min($val1, $val2);
    $maximum = max($val1, $val2);
    $avg = ($val1 + $val2) / 2;
    echo "Minimum number between value 1 and value 2 is ",
        $minimum . "<br>" . "<br>";
    echo "Maximum number between value 1 and value 2 is ",
        $maximum . "<br>" . "<br>";
    echo "Average between value 1 and value 2 is ", $avg . "<br>" . "<br>";
    ?>
    <b>7. </b><?php
    $random = rand() & 100;
    echo "A random integer between 0-100 is ", $random . "<br>" . "<br>";
    ?>
    <b>8. </b><?php
    $amount = $_POST["currency"];
    $dec = sprintf("%0.2f", $amount);
    echo "$", $dec . "<br>" . "<br>";
    ?>
    <b>9. </b><?php
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $hour = $_POST["hour"];
    $minute = $_POST["minute"];
    $second = null;
    $date = mktime($hour, $minute, $second, $month, $day, $year);
    echo "Date is " . date("Y-m-d", $date) . "<br>";
    echo "and the time is: " . date("h:ia", $date) . "<br>" . "<br>";
    echo "Another date format can be " . date("M/j/y", $date) . "<br>";
    echo "and the time in military time is " .
        date("H:i", $date) .
        "<br>" .
        "<br>";
    ?>
    <b>10. </b><?php
    $currentdate = date("m/d/Y H:i:s");
    date_default_timezone_set("America/Chicago");
    $currentdate = date("m/d/Y H:i:s");
    $hourdiff = round((strtotime($currentdate) - strtotime($date)) / 3600, 1);

    echo "The previous date was " . $hourdiff . " hours ago.";
    ?>

</form>
</body>
</html>