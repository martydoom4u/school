<?php
// posting

$naam = $_POST['naam'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "griftland";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE `lokale` SET `naam` = :naam WHERE `lokale`.`id` = 1";


    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute([
      ':naam'=>$naam,


    ]);

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() .   header("location: ../pages/overzicht.php");
    }
catch(PDOException $e)
    {

    }

$conn = null;


 s
























 ?>
