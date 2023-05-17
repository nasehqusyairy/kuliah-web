<?php
$myFile = "testFile.txt";

// // latihan 3
// $fh = fopen($myFile, 'w') or die("can't open file");
// $stringData = "Bobby Bopper\n";
// fwrite($fh, $stringData);
// $stringData = "Tracy Tanner\n";
// fwrite($fh, $stringData);

// latihan 4
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "New Stuff 1\n";
fwrite($fh, $stringData);
$stringData = "New Stuff 2\n";
fwrite($fh, $stringData);
fclose($fh);
