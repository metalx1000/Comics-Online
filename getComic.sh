#!/bin/bash

comicDIR="comics"
title="$(grep "<head><title>" -A3 comic.tmp |tail -n2|dos2unix| sed -e 's/    //g' | sed ':a;N;$!ba;s/\n/ - /g')"
grep 'lstImages.push' comic.tmp|cut -d\" -f2 > "$comicDIR/$title.php"
