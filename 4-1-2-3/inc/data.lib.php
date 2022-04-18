



<?php
  function drawMenu($menu,$vert=true){
    $style="";
    if($vert==false)
    {
      $style="display:inline;";
    }
    else{
      $style="";
    }
    echo "<ul style=$style>";
    foreach ($menu as $item) {
      echo "<li style=$style>";
      echo "<a href='{$item['href']}'>{$item['link']} </a>";
      echo "</li>";
    }
    echo "</ul>";
  }
?>