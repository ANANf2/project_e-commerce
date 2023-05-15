<?php
require 'koneksi.php';
$name = $_POST["name"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$card_id = $_POST["card_id"];

$query_sql = "INSERT INTO customer (name, gender, phone, email, address, card_id) VALUES (`$name`, `$gender`, `$phone`, `$email`, `$address`, `$card_id` )";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.php");
} else {
    echo "Pendaftaran gagal : " . mysql_error($conn);
}

?>