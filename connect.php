<?php
try {
    $conne = new PDO('mysql:host=localhost;dbname=ps_parc_db', 'root', '');
    echo ("connected");
} catch (Exception $e) {
    die('non connection' . $e->getMessage());
}
