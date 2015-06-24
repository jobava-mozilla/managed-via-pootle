#!/bin/bash

# Extract only the translated strings from a .lang file, line by line

if [ -z "$1" ]; then
    echo "Get strings from a file"
    echo "  usage: check_for_cedilla.sh filename"
    echo "  you get strings that contain the evil cedilla characters: Ţ ţ Ş ş"
    echo "  you should replace those characters with Ț ț Ș ș"
    exit 1
fi

filename="$1"
line_number=0

echo "$filename"

while IFS='' read -r line || [[ -n $line ]]; do
    line_number=$((line_number+1))
    echo "$line" | grep [ŢţŞş]
done < "$filename"

