<?php
echo "<html><body><table border=1>\n\n";
$name= $_SERVER['DOCUMENT_ROOT']."/upload/".$_GET['name'];


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
