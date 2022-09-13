<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIs-PHP</title>
    <link rel="stylesheet" href="./style.css" />

</head>

<body>
<!-- Note that this does not work properly a warning is displayed first, and will only disppear after inputting -->
    <!-- Check palindrome -->
    <form action="index.php" method="get">
        <label>Check Palindrome</label>
        <input type="text" name="input_str" placeholder="Enter a word" required><br>
        <input type="submit">

        <?php
        //checkPalindrome
        $str_input = $_GET["input_str"];
        $str_reversed = strrev($str_input);
        $is_palindrome = False;
        if ($str_input == $str_reversed) {
            $is_palindrome = True;
        }
        echo "$str_input is a palindrome: " . json_encode($is_palindrome);
        ?>
    </form>


    <!-- Days till christmas -->
    <form action="index.php" method="get">
        <label>Days till christmas</label>
        <input type="text" name="input_date" placeholder="YYYY-MM-DD" required><br>
        <input type="submit">

        <?php
        //checkPalindrome
        $current_date=$_GET["input_date"];//should be of the following format: YYYY-MM-DD
        $curr_date_in_sec=strtotime($current_date);
        $target_date = strtotime("2022-12-25");
        $diff_in_seconds = $target_date-$curr_date_in_sec;
        $diff_in_days = round($diff_in_seconds / (60 * 60 * 24));
        echo"$diff_in_days"." days left";
        
        // $result=["days_left"=>$diff_in_days];
        // echo json_encode($result);
        // echo "$str_input is a palindrome: " . json_encode($is_palindrome);
        ?>
    </form>




</body>

</html>