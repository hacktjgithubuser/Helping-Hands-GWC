<?php

$conn = mysqli_connect('localhost', 'root', '', 'helpinghands');

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
