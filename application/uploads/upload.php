<?php
echo "Current directory: " . __DIR__ . "<br>";

$calculated_path = __DIR__ . '/../../application/uploads/';
echo "Calculated path: " . $calculated_path . "<br>";

$config['upload_path'] = realpath($calculated_path);

if ($config['upload_path'] === false) {
    echo "The upload path does not appear to be valid.<br>";
    if (!is_dir($calculated_path)) {
        echo "Directory does not exist: $calculated_path<br>";
    } else {
        echo "Directory exists but realpath failed: $calculated_path<br>";
    }
} else {
    echo "Upload path is valid: " . $config['upload_path'] . "<br>";
}
