<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<table border=1>";
echo "<tr>";
$names = array("Google","Youtube");
$links = array("http://www.google.com.br","http://www.youtube.com.br");
for($i=0; $i<count($names);$i++){
    echo "<td><a href='$links[$i]' target='blank'>$names[$i]</a></td>";
}

echo "</tr>";
echo "</table>";