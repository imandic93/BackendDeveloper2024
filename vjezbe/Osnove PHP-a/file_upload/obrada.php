<?php

// provjera varijable FILES
if (empty($_FILES)) {
    echo 'Nema podataka za obradu.';
    die();
}

// Definiramo error varijablu
$error = $_FILES['picture']['error'];
// Provjera grešaka prilikom upload-a
if ($error !== UPLOAD_ERR_OK) {
    echo 'Došlo je do pogreške prilikom upload-a.';
    die();
}

$type = $_FILES['picture']['type'];
// Definiramo niz s podacima i dozvoljnim tipovima datoteka
$mimeTypes = [
    'png' => 'image/png',
    'jpe' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'jpg' => 'image/jpeg',
    'gif' => 'image/gif',
    'bmp' => 'image/bmp',
    'ico' => 'image/vnd.microsoft.icon',
    'tiff' => 'image/tiff',
    'tif' => 'image/tiff',
    'svg' => 'image/svg+xml',
    'svgz' => 'image/svg+xml'
];

// Provjera ispravnosti tipa datoteke
if(!in_array($type, $mimeTypes)) {
    echo 'Dozvoljen je upload samo slika.';
    die();
}

// Definiramo upload direktorij
$uploadDir = __DIR__ . '/uploads/images/';
// Provjerimo da li direktorij postoji
if(!file_exists($uploadDir)){
    // Ako ne postoji, kreiramo ga
    mkdir($uploadDir, 0775, true);
}

// Definiramo varijable s podacima o datoteci
$name = basename($_FILES['picture']['name']);
$tmpName = $_FILES['picture']['tmp_name'];

// Provjera prijenosa datoteke
if(move_uploaded_file($tmpName, $uploadDir.$name)){
    echo 'Uspješno ste upload-ali datoteku.';
}