<?php
/**
 * Created by PhpStorm.
 * User: natasenka
 * Date: 07.05.16
 * Time: 02:22
 */

$rows  = 5;
$cols = 5;
$colors = ['red','yellow','blue','gray','maroon','brown','green'];

echo "<table>";
for($i = 0; $i < $rows; $i++){
    echo "<tr>";
    for($j = 0; $j < $cols; $j++){
        echo "<td style='background-color:".$colors[rand(0,6)].";'>";
        echo rand(0,10000);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";