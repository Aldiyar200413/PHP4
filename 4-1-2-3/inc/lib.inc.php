<?php
function drawTable ($cols, $rows , $background)
{
  echo "<table border = '1' width='500' text-align:center>";
  for ($tr = 1; $tr <= $rows; $tr++) {
      echo "<tr style='background : {$background}'>";
          for ($td = 1; $td <= $cols; $td++) {
              if ($tr == 1 || $td == 1) {
                 echo "<th style = 'background : {$background}'>" . $tr * $td . "</th>";
              } else
              echo "<td>" . $tr * $td . "</td>";
            }
          }
      echo "</tr>";
   echo "</table>";
  }
?>


