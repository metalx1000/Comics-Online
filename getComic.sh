#!/bin/bash

comicDIR="comics"
title="$(grep "<head><title>" -A3 comic.tmp |head -n 4|tail -n2|dos2unix| sed -e 's/    //g' | sed -e ':a;N;$!ba;s/\n/ - /g' -e 's/#//g' -e 's/&/and/g')"

echo "Creating list for $title"
echo "Adding list to $comicDIR/$title.php"
grep 'lstImages.push' comic.tmp|cut -d\" -f2 > "$comicDIR/$title.php"

echo "Number of pages found $(wc -l "$comicDIR/$title.php")"

rm "comics/.php" 2> /dev/null
