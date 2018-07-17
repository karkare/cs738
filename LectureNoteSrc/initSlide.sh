#!/bin/sh

if [ $# -ne 2 ]; then
    echo "Usage: $0 <src> <dest>"
    exit
fi

SRC=$1
DEST=$2

S1=${SRC}.tex
S2=${SRC}Slides.tex
S3=${SRC}Handout.tex

D1=${DEST}.tex
D2=${DEST}Slides.tex
D3=${DEST}Handout.tex

TMP=/tmp/D$$

if [ -f ${D1} ]; then
    echo "${D1} exists; Not Changed"
else
    cp $S1 $D1
fi

if [ -f ${D2} ]; then
    echo "${D2} exists; Not Changed"
else
    cp $S2 $D2
    sed -e "s/${SRC}/${DEST}/g" $D2 > $TMP
    mv $TMP $D2
fi

if [ -f ${D3} ]; then
    echo "${D3} exists; Not Changed"
else
    cp $S3 $D3
    sed -e "s/${SRC}/${DEST}/g" $D3 > $TMP
    mv $TMP $D3 
fi

