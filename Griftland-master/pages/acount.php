<?php
session_start();


      include("../includes/config.php");
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


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>acount pagina</title>
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
                    <li><a href="ruimtetoevoegen.php">Ruimte toevoegen</a></li>
                    <li><a href="acount.php">Acount</a></li>
                  </ul>
                </div>
              </div>
         </div>
         <div class="container">
           <div class="row">
             <div class="col-md-12" style="margin-top: 50px;">
               <div class="center-block" style="width:800px; height:400px; background-color:white; border-radius:20px;">
                 <div class="col-md-12">
                   <div class="col-md-6">
                 <?php
                       $sql = "SELECT * from users WHERE id = :uid";
                       $stmt = $link->prepare($sql);
                       $stmt->execute([
                         ':uid' => $_SESSION['id']
                       ]);
                       $result = $stmt->fetch(PDO::FETCH_ASSOC);
					             print "<h3>". $result['voornaam'] . '&nbsp;' . $result['achternaam'] . "</h3>";					    		?>
                  </div>
                  <div class="col-md-6">
                    <div class="pensel" style="float: right; margin-top: 20px;">
                    <a href="editacount.php" target="_blank"><i class="fas fa-pencil-alt"style="height:30px;width: 40px;"></i></a>
                  </div>
                  </div>
                </div>
                <div class="greenbar" style="position:absolute; width:800px;margin-top:60px;"></div>
                <div class="col-md-12" style="margin-top:10px;">
                  <div class="col-md-12">
                       <?php
                       $sql = "SELECT * from users WHERE id = :uid";
                       $stmt = $link->prepare($sql);
                       $stmt->execute([
                         ':uid' => $_SESSION['id']
                       ]);
                       $result = $stmt->fetch(PDO::FETCH_ASSOC);
     					             print "<h2>" .afdeling   .'&nbsp;' . $result['afdeling'] .  "</h2>";					  				?>
                           <?php
                           $sql = "SELECT * from users WHERE id = :uid";
                           $stmt = $link->prepare($sql);
                           $stmt->execute([
                             ':uid' => $_SESSION['id']
                           ]);
                           $result = $stmt->fetch(PDO::FETCH_ASSOC);
         					             print "<h2>" .email  .'&nbsp;' . $result['email'] .  "</h2>";					   			?> </h3>
                  </div>


                </div>
               </div>

           </div>
          </div>
         </div>

   </body>
</html>
