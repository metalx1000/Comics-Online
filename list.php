<?php
if ($handle = opendir('comics')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'php')
        {
          echo "$file\n";
        }
    }
    closedir($handle);
}
?>
