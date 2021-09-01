<?php
echo "Test One--------------Server<br>";

$cookie_name = "test_cookie";

$arr_cookie_options = array (
    'expires' => time() + 60*60*24*30,
    'path' => '/',
    'domain' => '.seekahost.local', // leading dot for compatibility or use subdomain
    'secure' => true,     // or false
    'httponly' => true,    // or false
    'samesite' => 'None' // None || Lax  || Strict
    );
setcookie($cookie_name, 'The Cookie Value', $arr_cookie_options); 
session_start();
// Set session variables
//$_SESSION["newsession"] = "green";
echo $_SESSION["newsession"];
echo "<br>Session variables are set.<br>";
var_dump($_COOKIE);
//ajax function 
$value = session('cart_item', Str::uuid());
//save the key and value in session on table cart_item


//AppSeervice.php
if (session()->has('cart_item')) {
    $value = session('cart_item');
    //find the key and value in session on table cart_item
}

