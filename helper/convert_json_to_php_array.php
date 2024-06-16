<?php
$file_name  = 'sh_to_en'; // 'en_to_sh', 'sh_to_en'
$jsonString = file_get_contents($file_name . '.json');
$array      = json_decode($jsonString, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die('JSON decoding error: ' . json_last_error_msg());
}
$arrayString = var_export($array, true);
$phpFileContent = "<?php\n\n\$dataArray = " . $arrayString . ";\n\n?>";
file_put_contents('../dictionary/' . $file_name . '.php', $phpFileContent);
echo "PHP array file created successfully.";