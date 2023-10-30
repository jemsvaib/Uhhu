
<html>
  <head>
    <title>bums</title>
  </head>
  <body>
    <?php
    print("<h5>Hello!</h5>");
      ?>
  <table border="2">
       <?php 
      for ($i = 0; $i < 4; $i++) {
        echo "<tr>";
        for ($a = 1; $a <= 25; $a++) {
          $number = $i * 25 + $a;
          if ($number % 5 == 0)
          echo "<td>$number</td>";
        }
        echo "</tr>";
      }
      ?>
    </table>
  </body>
</html>