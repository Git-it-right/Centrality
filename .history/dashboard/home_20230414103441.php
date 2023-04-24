<?php  
$file = 'index.html';
if (file_exists($file)) {
    header('Content-Type: text/html');
    readfile($file);
}
?>