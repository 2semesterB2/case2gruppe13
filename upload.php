<?php

// Lav tilfældigt ID til filnavne.
$random = rand(0000000,9999999);

// Hent formular-data.
$email = $_POST['email'];
$text = $_POST['text'];

// Gem besked som tekstfil
$textfile = fopen('mine-tekster/'.$random.'.jpg.txt', 'w+');
ftruncate($textfile, 0);
$content = $email. PHP_EOL .$text;
fwrite($textfile , $content);
fclose($textfile);

// Gem billede
$path = 'minebilleder/'.$random.'.jpg';

if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
    include("index.php");
} else {
    echo "Error";
}

?>
