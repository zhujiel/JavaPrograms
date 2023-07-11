<?php
require_once'database.php';

if(isset($_POST['submit'])){
    $sql = "INSERT INTO cenik SET jmeno = :jmeno, spolecnost = :spolecnost, ulice = :ulice, mesto = :mesto, psc = :psc, email = :email, telefon = :telefon, poznamka = :poznamka, typ = :typ, zasilat = :zasilat, datum = now()";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([
        ':jmeno' => $_POST['jmeno'],
        ':spolecnost' => $_POST['nazevspo'],
        ':ulice' => $_POST['ulice'],
        ':mesto' => $_POST['mesto'],
        ':psc' => $_POST['psc'],
        ':email' => $_POST['email'],
        ':telefon' => $_POST['telefon'],
        ':poznamka' => $_POST['poznamky'],
        ':typ' => $_POST['option'],
        ':zasilat' => $_POST['inlineRadioOptions']
    ]);
    
}
header('Location: ' . $_SERVER['HTTP_REFERER']);