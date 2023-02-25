<?php 
include 'config.php';

function create ($sql){
	global $pdo;
	return $pdo->query($sql);
}

 function isNumber($number, $min = 0, $max = 100): bool
    {
        return ($number >= $min and $number <= $max);
    }

    function isText(string $string, int $min = 0, int $max = 1000): bool
    {
        $length = mb_strlen($string);
        return ($length >= $min and $length <= $max);
    }

    function isEmail($email): bool
    {
        return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
    }

    function isPassword($password)
    {
        if ( mb_strlen($password) >= 8                     // Length 8 or more chars
            and preg_match('/[A-Z]/', $password)             // Contains uppercase A-Z
            and preg_match('/[a-z]/', $password)             // Contains lowercase a-z
            and preg_match('/[0-9]/', $password)             // Contains 0-9
        ) { 
            return true;                                     // Passed all tests
        }
        return false;                                      // Invalid password
    }

    function redirect($location){
			header("Location: ".BASE_URL.$location);
	}
?>
