#!/bin/bash

if [ "$#" -lt 1 ]
then
  echo "How many issues? "
  echo "Example: $0 5"
  exit
fi

for i in `seq 1 $1`
do
  cmd="$(sed "s/Issue-1/Issue-$i/g" chrome)"
  eval "$cmd" 
done > comic.tmp

echo "Now running ./getComic.sh"

./getComic.sh 

