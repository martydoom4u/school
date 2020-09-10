<!DOCTYPE html>
<html>

<head>
  <title>Tooltip</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--CSS for tooltip-->
  <style>
    .backdrop{
       background-color: purple;
     }
  </style>

</head>

<body class="row">

        <div class="col s12" >
          <div class="col s12"> <h4> Click following</h4> </div>
            <!-- data-position can be : bottom, top, left, or right -->
            <!-- data-delay controls delay before tooltip shows (in milliseconds)-->
            <a  class="btn tooltipped col s2" data-position="bottom" data-delay="50" data-tooltip="het lookal wat u heeft gekozen heeft 32 stoelen en 4 oplaad punten"> Bottom</a>
            <p class="col s1"></p><!--for making space-->
            <a  class="btn tooltipped col s2" data-position="top" data-delay="150" data-tooltip="I am tooltip"> Top</a>
            <p class="col s1"></p><!--for making space-->
            <a  class="btn tooltipped col s2" data-position="left" data-delay="250" data-tooltip="I am tooltip"> Left</a>
            <p class="col s1"></p><!--for making space-->
            <a  class="btn tooltipped col s2" data-position="right" data-delay="550" data-tooltip="I am tooltip"> Right</a>
        </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

</body>

</html>
