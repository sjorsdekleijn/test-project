<html>
  <head>
    <title>Dit is mijn paard</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
<?php

  /*
   * To change this template use Tools | Templates.
   */
  include('paard.php');
  
  /* PAARDEN TRUUK */
  $paard = new paard();
  $paard->setPaard("FRANK");
  echo $paard->getPaard();
  echo $paard->sjorsZijnPaard();
?>
  </body>
</html>