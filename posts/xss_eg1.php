<?php header('X-XSS-Protection: 0') ?>
<!DOCTYPE html>
<html>
  <head>
    <title>XSS Test</title>
    <style> textarea {width: 300px; height: 50px; } </style>
  </head>
  <body>
  <div>
    <form>
      <textarea name="xss"><?=htmlspecialchars($_GET['xss'], ENT_QUOTES, 'UTF-8')?></textarea>
      <br />
      <input type="submit" value="XSS">
    </form>
  </div>
  <div>
  <!-- XSS START -->
  <?php
      echo $_GET['xss'];
  ?> 

  <!-- XSS END -->
  </div>
  </body>
</html>