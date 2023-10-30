
<html>
  <head>
    <title>bums</title>
  </head>
  <body>
    <?php
    print("<h5>Hello!</h5>");
      ?>
  <table border="2">
    <tr>
      <?php 
      for ($a = 1; $a < 101; $a++)
      {
        if ($a % 5 == 0)
        {
          echo "<td>$a</td>";
        }
      }?>
    </tr>
    </table>
  </body>
</html>