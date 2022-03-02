<?php
include "../classes/dbcontroller.php";
$dbc = new DBСontroller();

$dbc->database->insert(
    "user_auth",
    ["login" => $_POST['inputPhoneNumber'], "password" => $_POST["inputPassword"]]
);

echo "<pre>";
htmlspecialchars(print_r($dbc->database->select("user_auth", ['id', 'login', 'password'])));
echo "</pre>";