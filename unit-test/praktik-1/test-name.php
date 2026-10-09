<?php 
//file
require_once "validator-nama.php";

try {
    $result = validatename("Nisfa Likaila Rahmatika Sari");
    echo "PASS: Nisfa Likaila Rahmatika Sari\n";
} catch (Exception $e) {
    echo "FAIL: nama tidak valid. Error: ". $e->getmessname() . "\n";
}

try {
    $result = validateName("Nisfa Likaila Rahmatika Sari 1212");
    echo "PASS: Nama 'Nisfa Likaila Rahmatika Sari 1212' sudah benar\n";
} catch (Exception $e) {
    echo "FAIL: Nama 'Nisfa Likaila Rahmatika Sari 1212' tidak valid. Error: " . $e->getMessage() . "\n";
}

try {
    $result = validateName("");
    echo "PASS: Nama sudah benar\n";
} catch (Exception $e) {
    echo "FAIL: Nama tidak valid. Error: " . $e->getMessage() . "\n";
}