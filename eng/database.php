<?php
$bd = mysqli_connect('localhost', 'root', '', 'autoparts');
if (!$bd) {
    die('Error connect to DB');
}
