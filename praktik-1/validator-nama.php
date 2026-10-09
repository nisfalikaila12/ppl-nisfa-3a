<?php
// File: Validator.php

function validateName($name) {
    // Cek apakah nama kosong (menggunakan trim agar input spasi saja dianggap kosong)
    if (empty(trim($name))) {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    
    // Cek apakah nama hanya berisi huruf dan spasi
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }
    
    return true;
}