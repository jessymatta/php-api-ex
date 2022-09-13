<?php
// Condition 1: password shoud be at least of length 12
// Condition 2: password should contains at least one uppercase letter
// Condition 3: password should contains at least one lowercase letter
// Condition 4: password should contains at least one number
// Condition 5: password should contains at least one special character

//Note that "isset" is added because the file would not run properly on postman without it
if (isset($_POST["password"])) {
    $password = $_POST["password"];
    // Conditions 2,3,4,5
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $special_characater = preg_match('@[^\w]@', $password);
    if (strlen($password) < 13 || !$number || !$uppercase || !$lowercase || !$special_characater) {
        echo "Invalid password";
    } else {
        echo "Strong password";
    }
}

?>
