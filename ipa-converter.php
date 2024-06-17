<?php
$converter = [
    "𐑐" => "p",
    "𐑑" => "t",
    "𐑒" => "k",
    "𐑓" => "f",
    "𐑔" => "θ",
    "𐑕" => "s",
    "𐑖" => "ʃ",
    "𐑗" => "ʧ",
    "𐑘" => "j",
    "𐑙" => "ŋ",
    "𐑚" => "b",
    "𐑛" => "d",
    "𐑜" => "ɡ",
    "𐑝" => "v",
    "𐑞" => "ð",
    "𐑟" => "z",
    "𐑠" => "ʒ",
    "𐑡" => "ʤ",
    "𐑢" => "w",
    "𐑣" => "h",
    "𐑤" => "l",
    "𐑮" => "r",
    "𐑥" => "m",
    "𐑯" => "n",
    "𐑦" => "ɪ",
    "𐑰" => "iː",
    "𐑧" => "ɛ",
    "𐑱" => "eɪ",
    "𐑨" => "æ",
    "𐑲" => "aɪ",
    "𐑩" => "ə",
    "𐑳" => "ʌ",
    "𐑪" => "ɒ",
    "𐑴" => "əʊ",
    "𐑫" => "ʊ",
    "𐑵" => "uː",
    "𐑬" => "aʊ",
    "𐑶" => "ɔɪ",
    "𐑭" => "ɑː",
    "𐑷" => "ɔː",
    "𐑸" => "ɑː(r)",
    "𐑹" => "ɔː(r)",
    "𐑺" => "ɛə(r)",
    "𐑻" => "ɜː(r)",
    "𐑼" => "ə(r)",
    "𐑽" => "ɪə(r)",
    "𐑾" => "ɪə",
    "𐑿" => "ju(ː)"
];
$input     = @$_POST['text'];
if (empty($input)) {
    header('Content-Type: application/json');
    echo json_encode(['original_message' => '-', 'converted_message' => '-', 'error' => 'No text provided.']);
}
$str_len   = mb_strlen($input);
$converted = '';
for ($i = 0; $i < $str_len; $i++) {
    $char = mb_substr($input, $i, 1);
    if (isset($converter[$char])) {
        $converted .= $converter[$char];
    } else {
        $converted .= $char;
    }
}
header('Content-Type: application/json');
echo json_encode(['original_message' => $input, 'converted_message' => $converted, 'error' => '-']);