<?php

echo 'Name : ';
echo 'Didik Ariyanto';

echo "\n";
echo "Name : ";
echo "Didik\t Ariyanto\n";

echo<<<ARI
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

ARI;

echo <<<'ARI'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan nowdoc
ARI;