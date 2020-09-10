<?php
// posting
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email= $_POST['email'];
$afdeling = $_POST['afdeling'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "griftland";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE `users` SET `voornaam` = :voornaam, `achternaam` = :achternaam, `afdeling` = :afdeling, `email` = :email WHERE `users`.`id` = 1";


    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute([
      ':voornaam'=>$voornaam,
      ':achternaam'=>$achternaam,
      ':afdeling'=>$afdeling,
      ':email'=>$email

    ]);

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() .   header("location: ../pages/acount.php");;
    }
catch(PDOException $e)
    {

    }

$conn = null;


 s
























 ?>
