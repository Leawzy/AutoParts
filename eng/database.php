<?php
$bd = mysqli_connect('localhost', 'idoma_autoparts', 'Root123', 'idoma_autoparts');
if (!$bd) {
    die('Error connect to DB');
}
