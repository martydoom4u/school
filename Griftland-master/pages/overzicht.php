<?php


session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: ../../index.php");
  exit;
}
if(isset($_GET['id'])){
  $id = $_GET['id'];
}
else{
    header('cms.php?success=0');
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>overzicht pagina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="row" style="background-color:white;">
      <div class="col-md-6">
        <img  src="../images/logo-griftland.png" style="margin-left:10%;">
       </div>
        <div class="col-md-6" style="text-align:right;">
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="overzicht.php">Overzicht</a></li>
                    <li><a href="ruimtetoevoegen.php">Ruimte toevoegen</a></li>
                    <li><a href="acount.php">Account</a></li>
                  </ul>
                </div>
              </div>
         </div>
         <div class="container">
           <div class="row">
              <div class="col-md-12" style="margin-top: 50px;">
                <div class="col-md-3 col-sm-6">
                  <div class="lokaal1">
                    <div class="row">
                      <div class="col-md-12" style="text-align:center;margin-top:80px;">
                        <?php
       					             include("../includes/config.php");
       					             $sql = "SELECT * from ruimtes";
       					             foreach ($link->query($sql) as $row) {
       					             print "<h2>". $row['ruimte'] .  "</h2>";?>
                      </div>
                    </div>
                    <div class="row"style="margin-top:40px">
                      <div class="col-md-4 ">
                        <a href="calendar.php" target="_blank"><i class="far fa-calendar-plus kalender" style="height:40px;width: 100px;"></i></a>
                      </div>
                      <div class="col-md-4 ">
                        <a class="social-icon social-icon--twitter">
                          <i class="fas fa-info-circle" style="height:40px;width: 100px;margin-left:-10px;"></i>
                          <div class="tooltip"><?php
                                 if($row['tv'] == 1){
                                   $tv="ja";
                                 } else {
                                   $tv="nee";
                                 }
                                 if($row['beamer'] == 1){
                                  $beamer="ja";
                                } else {
                                  $beamer="nee";
                                }
                                if($row['whiteboard'] == 1){
                                  $whiteboard="ja";
                                } else {
                                  $whiteboard="nee";
                                }
                                if($row['oplaadpunten'] == 1){
                                  $oplaadpunten="ja";
                                } else {
                                  $oplaadpunten="nee";
                                }
                                if($row['computer'] == 1){
                                  $computer="ja";
                                } else {
                                  $computer="nee";
                                }
                               echo "tv: " . $tv . "<br>";
                               echo "beamer: " . $beamer . "<br>";
                               echo "whiteboard: " . $whiteboard . "<br>";
                               echo "oplaadpunten: " . $oplaadpunten . "<br>";
                               echo "computer: " . $computer . "<br>";
                               				?></h3></div>
                        </a>
                      </div>
                      <div class="col-md-4">
                      <a href="naamwijzigen.php" target="_blank">  <i class="fas fa-pencil-alt"style="height:40px;width: 100px; margin-left:-20px;"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
  <?php
                               }
  ?>
  </body>
</html>
