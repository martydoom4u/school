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
    <title>Ruimte naam wijzigen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../main.css">
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
                    <li><a href="ruitemtoevoegen.php">Ruimtentoevoegen</a></li>
                    <li><a href="acount.php">Account</a></li>
                  </ul>
                </div>
              </div>
         </div>
         <div class="container">
           <div class="row">
             <div class="col-md-12" style="margin-top: 50px;">
               <div class="center-block" style="width:800px; height:400px; background-color:white; border-radius:20px;">
                 <div class="col-md-12" style="margin-top:150px;">
                  <div class="recht">
                    <h2>lokaal veranderen</h2>
                     <form action="../includes/lokaalwijzigen.php" method="post">
                   <div class="form-group">
                        <div class="form-group ">

                             <input type="text" class="form-control" placeholder="naam van het ruimten" name="naam" id="naam" style="border-color:#00E500;" required>
                             <input type="text" class="form-control" placeholder="bescrijving" name="bescrijving" id="bescrijving" style="border-color:#00E500;" required>
                             <button type="submit" class="btn btn-primary">Submit</button>
                           </div>




                 </div>
               </form>

           </div>
          </div>
         </div>
