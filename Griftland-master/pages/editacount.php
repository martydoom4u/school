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
<?php
  include '../includes/setting.php';

  $sql = "SELECT * from users WHERE id = :uid";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    ':uid' => $_SESSION['id']
  ]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

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
                    <li><a href="ruitemtoevoegen.php">Ruimtentoevoegen</a></li>
                    <li><a href="acount.php">Acount</a></li>
                  </ul>
                </div>
              </div>
         </div>
         <div class="container">
           <div class="row">
             <div class="col-md-12" style="margin-top: 50px;">
               <div class="center-block" style="width:800px; height:400px; background-color:white;">
                 <h3 style="text-align:center;  margin-top:10px;">hier kan uw account gegevens veranderen</h3>
                 <div class="greenbar"></div>
                 <div class="col-md-6" style="margin-top:30px; text-align:center;">
                   <form action="../includes/acceditter.php" method="post">
                 <div class="form-group">
                      <input type="text" class="form-control" id="eind" name="voornaam" value=" <?php $result['voornaam'] ?>" style="border-color:#00E500;"><br>
                         <input type="text" class="form-control" id="eind" name="achternaam"  value="<?php $result['achternaam'] ?>" style="border-color:#00E500;"><br>
                            <input type="email" class="form-control" id="eind" name="email" value="<?php $result['email'] ?>" style="border-color:#00E500;"><br>
                               <input type="text" class="form-control" id="eind" name="afdeling"  value="<?php $result['afdeling'] ?>" style="border-color:#00E500;"><br>
                               <button type="submit" class="btn btn-primary">Submit</button>
                             </form>



                  </div>
                  <div class="col-md-6" style="margin-top:30px;">

                  </div>
                   </div>
                 </div>

               </div>
             </div>
           </div>

   </body>
</html>
