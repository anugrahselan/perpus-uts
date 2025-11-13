<?php
session_start(); //ini jangan lupa. hanya saja untuk semua file dalam pages tidak perlu, karena sudah di panggil di index.php

$_SESSION = []; // kosongkan session
session_destroy(); //hancurkan session

header("Location: login.php"); // arahkan ke login.php
?>