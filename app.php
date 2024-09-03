<?php

$uploadLocation = 'uploads/' . $_FILES['file']['name'];

if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadLocation)) {
    echo 'File uploaded!';
}