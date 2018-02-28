<?php
$file =$_GET['file'];
$download_name = basename($file);
if (file_exists($file)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$download_name);
    header('X-Sendfile: '.$file);
    exit;
}
?>