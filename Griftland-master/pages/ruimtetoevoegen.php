<?php


session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: ../index.php");
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
    <title>lokaal toevoegen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../main.css">
  </head>
  <body>
  <?php
  include '../header.php';
  ?>
         <div class="container">
           <div class="row">
             <div class="col-md-12" style="margin-top: 50px;">
               <div class="center-block" style="width:800px; height:400px; background-color:white; border-radius:20px;">
                 <div class="col-md-12">

                  <div class="col-md-6" style="margin-top:150px;">
                    <h1>lokaal toevoegen </h1>


                  </div>
                  <div class="col-md-6" style="margin-top:180px;">
                    <div class="form-group">
                         <input type="text" class="form-control" id="eind" placeholder="lokaal toevoegen" style="border-color:#00E500;"><br>
                         <input type="textarea" class="form-control" id="eind" placeholder="lokaal eigenschappen van het lokaal" style="border-color:#00E500;"><br>
                         <button type="button" class="btn btn-success" style="width:70%; margin-left:15%;">verzenden</button>
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
