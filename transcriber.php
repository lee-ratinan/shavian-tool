<?php
/**
 * @param $input
 * @return bool
 */
function isLatinAlphabet($input) {
    // Regular expression to match only Latin alphabet characters
    $pattern = '/[A-Za-z]+/';
    // preg_match returns 1 if the pattern matches, 0 otherwise
    return preg_match($pattern, $input) === 1;
}

$input = @$_POST['text'];
if (empty($input)) {
    header('Content-Type: application/json');
    echo json_encode(['original_message' => '-', 'transcribed_message' => '-', 'error' => 'No text provided.']);
}

$sample        = substr($input, 0, 10);
$alphabet_only = '/[^a-z\'\-]/';
if (isLatinAlphabet($sample)) {
    $required_file = 'dictionary/en_to_sh.php';
} else {
    $required_file = 'dictionary/sh_to_en.php';
    $alphabet_only = '/[^𐑐𐑑𐑒𐑓𐑔𐑕𐑖𐑗𐑘𐑙𐑚𐑛𐑜𐑝𐑞𐑟𐑠𐑡𐑢𐑣𐑤𐑮𐑥𐑯𐑦𐑰𐑧𐑱𐑨𐑲𐑩𐑳𐑪𐑴𐑫𐑵𐑬𐑶𐑭𐑷𐑸𐑹𐑺𐑻𐑼𐑽𐑾𐑿\'\-]/';
}

// Include the required file
require_once $required_file;

$lowercase_input   = strtolower($input);
$words             = explode(' ', $lowercase_input);
$transcribed_array = [];
foreach ($words as $word) {
    $transcribed_word = '';
    $stripped_word    = preg_replace($alphabet_only, '', $word);
    if (empty($stripped_word)) {
        // Empty, only contains special characters, so return it as it is
        $transcribed_word = $word;
    } else if (isset($dataArray[$stripped_word])) {
        if (count($dataArray[$stripped_word]) > 1) {
            // More than one equivalent, return all of them:
            $transcribed_word = '[' . implode(', ', $dataArray[$stripped_word]) . ']';
        } else {
            // Only one equivalent, so return it
            $transcribed_word = $dataArray[$stripped_word][0];
        }
        $transcribed_word = str_replace($stripped_word, $transcribed_word, $word);
    } else {
        // Not found in the dictionary, so return it as it is, plus the # sign
        $transcribed_word = $word . '#';
    }
    $transcribed_array[] = $transcribed_word;
}
$transcribed_string = implode(' ', $transcribed_array);
header('Content-Type: application/json');
echo json_encode(['original_message' => $lowercase_input, 'transcribed_message' => $transcribed_string, 'error' => '-']);