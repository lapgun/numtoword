<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Chuyen doi so-thanh chu</h2>
<form method="post">
    <input type="text" name="search" placeholder="so chuyen doi"/>
    <input type="submit" id="submit" value="Doc la"/>
</form>
<?php
$arrNum = array(
    "1" => "one",
    "2" => "tow",
    "3" => "three",
    "4" => "four",
    "5" => "five",
    "6" => "six",
    "7" => "seven",
    "8" => "eight",
    "9" => "nine",
    "10" => "ten",
    "11" => "eleven",
    "12" => "twen"

);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchNumber = $_POST["search"];
    foreach ($arrNum as $num => $word) {
        if ($num == $searchNumber) {
            echo "Từ: " . $num . ". <br/>Nghĩa của từ: " . $word;
            echo "<br/>";

        }
    }
}
?>

</body>