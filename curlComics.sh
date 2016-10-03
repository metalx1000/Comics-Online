#!/bin/bash

if [ "$#" -lt 1 ]
then
  echo "How many issues? "
  echo "Example: $0 5"
  exit
fi

rm comic.tmp
for i in `seq 1 $1`
do
  cmd="$(sed "s/Issue-1/Issue-$i/g" chrome)"
  eval "$cmd" >> comic.tmp
  pages="$(grep "lstImages.push" comic.tmp|wc -l)" 
  for ((x=60; x>=1; x--))
  do
    clear
    echo "$i of $1 Issues retreived."
    echo "$pages pages have been found."
    echo "Delay to prevent site from blocking bot..."  
    echo $x
    sleep 1
  done
done 

echo "Now running ./getComic.sh"

./getComic.sh 

