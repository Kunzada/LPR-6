<?php

function drawtable($cols,$rows, $color){
    $cols = rand(1, 10);
    $rows = rand(1, 10);
    $color = 'red';
    echo "<table border='2'>\n";
    for($i=1;$i<=$rows;$i++){
      echo "<tr>\n";
      for($j=1; $j<=$cols; $j++){
        if($i==1 || $j==1){echo "\t\t<th style='background:$color'>".$i*$j."</th>\n";}
        else{echo "\t\t<td>".$i*$j."</td>\n";}
      }
      echo "</tr>";
    }
    echo "</table>";
    
    }
    include 'data.inc.php';
    function drawMenu($menu,$vertical=true )
{
  if($vertical ==true){
foreach ($menu as $value) {
      echo "<ul>";
			echo "<li>";
			echo "<a href='{$value['href']}'>  {$value['link']}  </a>"; // аналог записи в html: <a href = 'index.php'> Домой </a>
			echo "</li>";
		echo "</ul>";
      
    }
  }
  else{
    foreach ($menu as $value) {
    
    echo "<a href='{$value['href']}'>  {$value['link']}  </a>"; // аналог записи в html: <a href = 'index.php'> Домой </a>
  
  }
  
}
}
?>