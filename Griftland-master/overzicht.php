<?php


session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
if(isset($_GET['id'])){
  $id = $_GET['id'];
}
else{
    header('cms.php?success=0');
  }
$str1="Afdeling:";
?>
<?php include 'includes/config.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>overzicht pagina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="css/overzicht.css">
  </head>
  <body>
  <?php
  include 'header.php';
  ?>
         <div class="container">
           <div class="row">
              <?php
       					             $sql = "SELECT * from ruimtes";
       					             foreach ($link->query($sql) as $row) {
                              ?>
                              <div class="col-md-12" style="margin-top: 50px;">
              <div class="col-md-3 col-sm-6">
                              <div class="lokaal1">
                              <div class="row">
                                <div class="col-md-12" style="text-align:center;margin-top:80px;"><?php
                              echo "<h2 style='color:#21872f;'>". $row['ruimte'] .  "</h2>";	
                              ?>
                      </div>
                    </div>
                    <div class="row"style="margin-top:40px">
                      <div class="col-md-4 ">
                        <a href="calendar.php" target="_blank"><i class="far fa-calendar-plus kalender" id="cal-logo"></i></a>
                      </div>
                      <div class="col-md-4 ">
                        <a href="info.php" target="_blank"><i class="fas fa-info-circle" id="inf-logo"></i></a>
                      </div>
                      <div class="col-md-4">
                      <a href="naamwijzigen.php" target="_blank">  <i class="fas fa-pencil-alt" id="pot-logo"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                }?>
          </div>
  </body>
</html>
