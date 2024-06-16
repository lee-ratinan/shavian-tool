<?php
$fh       = fopen('readlex.txt','r');
$en_to_sh = [];
$sh_to_en = [];
while ($line = fgets($fh)) {
    $line = trim($line);
    if (empty($line)) {
        continue;
    }
    list($en, $sh) = explode(' ', $line);
    // English to Shavian first
    $english_words = explode('_', $en);
    if (count($english_words) > 1) {
        if ( ! isset($en_to_sh[$english_words[0]])) {
            $en_to_sh[$english_words[0]][] = $sh;
        } else if ( ! in_array($sh, $en_to_sh[$english_words[0]])) {
            $en_to_sh[$english_words[0]][] = $sh;
        }
    } else {
        $en_to_sh[$en][] = $sh;
    }
    // Shavian to English next
    if ( ! isset($sh_to_en[$sh])) {
        $sh_to_en[$sh][] = $english_words[0];
    } else if ( ! in_array($english_words[0], $sh_to_en[$sh])) {
        $sh_to_en[$sh][] = $english_words[0];
    }
}
fclose($fh);
$f1 = fopen('en_to_sh.json', 'w');
fwrite($f1, json_encode($en_to_sh));
fclose($f1);
$f2 = fopen('sh_to_en.json', 'w');
fwrite($f2, json_encode($sh_to_en));
fclose($f2);