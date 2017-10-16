<?php

echo '<html><body><table border = "1">';
{
    $path = './upload/data.csv';
    if (file_exists($path)) {
        $f = fopen($path, "r");
        $count = 0;
        while (($line = fgetcsv($f)) !== false) {
            echo "<tr>";
            foreach ($line as $cell) {
                if ($count == 0) {
                    echo "<th>" . htmlspecialchars($cell) . "</th>";
                } else {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
            }
            echo "</tr>";
            $count++;
        }
        fclose($f);
    }
}
echo "\n</table></body></html>";
