<?php
echo "<html><body><table border=1>\n\n";
$name= "https://web.njit.edu/~hs574/project2/upload/".$_REQUEST['name'];


echo $name;
$f = fopen($name,"r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
