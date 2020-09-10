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
<?php include '../includes/config.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Account pagina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../main.css">
  </head>
  <body>
  <?php
  include 'header.php';
  ?>
         <div class="container">
           <div class="row">
             <div class="col-md-12" style="margin-top: 50px;">
               <div class="center-block" style="width:800px; height:400px; background-color:white; border-radius:20px;">
                 <div class="col-md-12">
                   <div class="col-md-6">
                 <?php
					             include("../includes/setting.php");
					             $sql = "SELECT * from users WHERE voornaam = 'martijn'";
					             foreach ($conn->query($sql) as $row) {
					             print "<h3>". $row['voornaam'] . '&nbsp;' . $row['achternaam'] . "</h3>";					    }				?>
                  </div>
                  <div class="col-md-6">
                    <div class="pensel" style="float: right; margin-top: 20px;">
                    <a href="editacount.php" target="_blank"><i class="fas fa-pencil-alt"style="height:30px;width:40px; color:#21872f;"></i></a>
                  </div>
                  </div>
                </div>
                <div class="greenbar" style="position:absolute; width:800px;margin-top:60px;"></div>
                <div class="col-md-12" style="margin-top:10px;">
                  <div class="col-md-12">
                       <?php
     					             include("../includes/setting.php");
     					             $sql = "SELECT * from users WHERE voornaam = 'martijn'";
     					             foreach ($conn->query($sql) as $row) {
     					             print "<h2>" .Afdeling   .'&nbsp;' . $row['afdeling'] .  "</h2>";					    }				?>
                           <?php
         					             include("../includes/setting.php");
         					             $sql = "SELECT * from users WHERE voornaam = 'martijn'";
         					             foreach ($conn->query($sql) as $row) {
         					             print "<h2>" .email  .'&nbsp;' . $row['email'] .  "</h2>";					    }				?> </h3>
                  </div>


                </div>
               </div>

           </div>
          </div>
         </div>

   </body>
</html>
