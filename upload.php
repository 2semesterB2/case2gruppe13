<?php

// Lav tilfældigt ID til filnavne.
$random = rand(0000000,9999999);

// Hent formular-data.
$email = $_POST['email'];
$text = $_POST['text'];

// Gem besked som tekstfil
$textfile = fopen('uploads/'.$random.'.txt', 'w+');
ftruncate($textfile, 0);
$content = $email. PHP_EOL .$text;
fwrite($textfile , $content);
fclose($textfile);

// Gem billede
$path = 'uploads/'.$random.'.jpg';

if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
    echo "OK";
} else {
    echo "Fuck";
}

?>