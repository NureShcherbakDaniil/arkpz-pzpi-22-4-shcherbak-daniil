<?php
// Невдалий приклад
$userName = "John";  
$User_age = 25;  
$USEREMAIL = "example@example.com";  

// Вдалий приклад
$user_name = "John";  
$user_age = 25;  
$user_email = "example@example.com";

// Невдалий приклад
echo "This is a very long sentence that goes beyond the screen and makes it harder to read and understand.";

// Вдалий приклад
echo "This is a very long sentence " . 
     "that goes beyond the screen " . 
     "and makes it harder to read.";

// Невдалий приклад
$a = 20;  
function doSomething() {}

// Вдалий приклад
$items_count = 20;  
function calculateTotalPrice() {}

// Невдалий приклад
if ($userAge > 18) {
    echo "Access granted";
}

// Вдалий приклад
const MINIMUM_AGE = 18;
if ($userAge > MINIMUM_AGE) {
    echo "Access granted";
}

// Невдалий приклад
// Перевіряємо, чи користувач дорослий
if ($age >= 18) {
    echo "Adult user";
}

// Вдалий приклад
if ($age >= 18) {
    echo "Adult user"; // Коментар додається лише за потреби
}

// Невдалий приклад
if ($value == "10") {
    echo "Matched";
}

// Вдалий приклад
if ($value === 10) {
    echo "Matched";
}

// Невдалий приклад
echo calculateDiscount(100);
echo calculateDiscount(200);

// Вдалий приклад
function calculateDiscount($amount) {
    return $amount * 0.1;
}

// Невдалий приклад
$conn = new mysqli($servername, $username, $password);

// Вдалий приклад
try {
    $conn = new mysqli($servername, $username, $password);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Невдалий приклад
function myFunction(){echo "Hello";}

// Вдалий приклад
function myFunction() {
    echo "Hello";
}

// Невдалий приклад
$globalValue = 100;

function calculate() {
    global $globalValue;
    return $globalValue * 2;
}

// Вдалий приклад
function calculate($value) {
    return $value * 2;
}
