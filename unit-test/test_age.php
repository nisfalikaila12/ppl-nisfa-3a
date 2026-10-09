<?php 
//file
require_once "Validator.php";

try {
    $result = validateAge(25);
    echo "PASS: umur 25 diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur 25 tidak diterima. Error: ". $e->getmessage() . "\n";
}

try {
    $result = validateAge(-5);
    echo "PASS: umur -5 seharusnya ditolak\n";
} catch (Exception $e) {
    echo "FAIL: Umur -5 ditolak. Error: ". $e->getmessage() . "\n";
}