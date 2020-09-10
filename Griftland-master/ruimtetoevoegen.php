<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'includes/config.php';

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
if(isset($_POST['submit'])){
  $ruimte = $_POST['ruimte'];
  $tv = $_POST['tv'];
  $beamer = $_POST['beamer'];
  $whiteboard = $_POST['whiteboard'];
  $oplaad = $_POST['oplaadpunten'];
  $computer = $_POST['computer'];
  $sql = "INSERT INTO `ruimtes`(`ruimte`, `tv`, `beamer`, `whiteboard`, `oplaadpunten`, `computer`) VALUES ('$ruimte', '$tv', '$beamer', '$whiteboard', '$oplaad', '$computer')";
  if ($link->query($sql) === TRUE) {
    } else {
      echo "Error: " . $sql . "<br>" . $link->error;
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ruimte toevoegen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../css/ruimte-toevoegen.css">
  </head>
  <body>
  <?php
  include 'header.php';
  ?>
         <div class="container">
           <div class="row">
             <div class="col-md-12" style="margin-top: 50px;">
               <div class="center-block" style="width:800px; height:450px; background-color:white; border-radius:20px;">
                 <div class="col-md-12">

                  <div class="col-md-12" id="titel-lok">
                    <h1>Ruimte toevoegen.</h1>
                  </div>
                  <div class="col-md-12" id="ruimte-toev">
                    <div class="form-group" id="ruimte-formulier">
                    <form action="ruimtetoevoegen.php" method="post">
                          <input type="text" required class="form-control" id="eind" name="ruimte" placeholder="Ruimte naam of nummer"><br>
                          <div class="form-control">tv: <input type="checkbox" name="tv" value="1" /></div>
                          <div class="form-control">beamer: <input type="checkbox" name="beamer" value="1" /></div>
                          <div class="form-control">whiteboard: <input type="checkbox" name="whiteboard" value="1" /></div>
                          <div class="form-control">oplaadpunten: <input type="checkbox" name="oplaadpunten" value="1" /></div>
                          <div class="form-control">computer: <input type="checkbox" name="computer" value="1" /></div><br>
                         <input type="submit" class="btn btn-success" value="Ruimte aanmaken" name="submit">
                         </form>
                       </div>
                  </div>
                  </div>
                </div>


                </div>
               </div>

           </div>
          </div>
         </div>

   </body>
</html>
