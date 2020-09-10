<?php
error_reporting(E_ALL);
require_once '../includes/config.php';
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
    <script src="../includes/jquery.js"></script>
<script src="../includes/moment.min.js"></script>
<script src="../includes/combodate.js"></script>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
        <div class="row" style="background-color:white;">
          <div class="col-md-6">
            <img  src="../images/logo-griftland.png" style="margin-left:10%;">
           </div>
            <div class="col-md-6" style="text-align:right;">
              <div class="link-naar-school-site">
                <a href="https://www.griftland.nl" target="_blank"><h5>Naar de particulieren Website</h5></a>
             </div>
          </div>
        </div>
        <div class="greenbar"></div>
        <div class="jumbotron text-center"  style="background-color:#EDEDED;">
          <div class="row"style="background-color:#EDEDED">
              <div class="inlogscherm">
                <div id="textlokaal">
                <h2>reservering maken</h2>
              </div>
                <form action="calendar.php" method="post">
                <a href="calendar.php" class="btn btn-primary">Terug naar de kalender</a>
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <br>
                        Ruimte:<input type="text" name="ruimte" class="form-control" placeholder="Ruimte">
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
                    <br>
                    <div>
                      <a class="btn btn-lg btn-primary" style="color: white; font-size: 13px;" href="/signin" role="button" id="connect-button">Connect to Outlook</a>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>
                </form>
            </div>
          </div>
        </div>
  </body>
</html>
