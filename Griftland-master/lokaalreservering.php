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

?><?php
error_reporting(E_ALL & ~E_NOTICE);
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>griftland</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="includes/jquery.js"></script> 
    <script src="includes/moment.min.js"></script> 
    <script src="includes/combodate.js"></script> 
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
  <?php
  include 'header.php';
  ?>
    <div class="greenbar"></div>
    <?php
      if(isset($_POST['submit'])){
        $ruimte = $_POST['ruimte'];
        $datum = $_POST['Datum'];
        $begin = $_POST['Begin'];
        $eind = $_POST['Eind'];
        $bijzonder = $_POST['Bijzonder'];
        $sql = "INSERT INTO `reserveringen`(`user_id`, `ruimte_id`, `datum`, `begin`, `eind`, `bijzonderheden`) VALUES (1,'$ruimte', '$datum', '$begin', '$eind', '$bijzonder')";
        if ($link->query($sql) === TRUE) {
          echo "Nieuwe reservering gemaakt";
          } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
      }
    ?>
    <div class="jumbotron text-center"  style="background-color:#EDEDED;">
      <div class="row"style="background-color:#EDEDED">
        <div class="inlogscherm">
          <div id="textlokaal">
            <h2>reservering maken</h2>
          </div>
          <form action="AddToCalendar.php" method="post">
            <a href="calendar.php" class="btn btn-primary">Terug naar de kalender</a>
              <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
              <br>
              <?php 
                $query = mysqli_query($link, "SELECT * FROM ruimtes");
              ?>
              Ruimte:
              <select name="ruimte" class="form-control">
              <?php 
                echo "<option>kies de ruimte</option>";
                while ($row = mysqli_fetch_array($query))
                          {
                            echo "<option value='".$row['ID']."'>".$row['ruimte']."</option>";
                          }
                        ?>
                      </select>
                    </div>
                    <?php
                    $Date = $_GET['date'];     
                    ?>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                      Datum:<input type="date" name="Datum" class="form-control" value="<?php echo $Date;?>">
                    </div>
                    <div>
                      begintijd: <input type="time" id="time" data-format="HH:mm:ss" data-template="HH : mm" name="Begin" class="form-control">
                    </div>
                    <div>
                      eindtijd: <input type="time" id="Time" data-format="HH:mm:ss" data-template="HH : mm" name="Eind" class="form-control">
                    </div>
                    <div>
                      bijzonderheden: <input type="text" name="Bijzonder" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" name="submit" value="Verstuur">
           </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>