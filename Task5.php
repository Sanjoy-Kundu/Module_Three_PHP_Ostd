<?php
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789(!@#$%^&*()_+)';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $totalLength = strlen($characters) - 1;
        $index = mt_rand(0, $totalLength);
        $password .= $characters[$index];
    }

    return $password;
}

$length = 12;
$password = generatePassword($length);
echo "Your Password is : " . $password;
?>
