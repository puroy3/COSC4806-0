<?php

#Anything here doesn't get rendered on the screen
$name = "Pushpak"
?>
  
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello Class</p>'; ?> 
    <?php echo $name;?>
    <?= $name; ?>
    <p><?= $name; ?></p>
    <?= "<p>" .$name. "</p>" ?>
  </body>
    
</html>