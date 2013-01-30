<?php
$filename = $_GET['file'];

if(empty($filename) || stripos($filename,'.less') === false || !file_exists($filename)) {
    die('Error in file='.$filename);
}

$css_file = str_ireplace('.less','.css',$filename);
$write_file = dirname(__FILE__). '/compiled/'. $css_file;
$write_dir = dirname($write_file);

if(empty($_SERVER['HTTP_IF_MODIFIED_SINCE']) || !file_exists($write_file)) {
    if(!is_dir($write_dir)) {
        mkdir($write_dir,0776, true);
    }
    $command = 'lessc '.dirname(__FILE__). '/'.$filename. ' > '.$write_file;
    shell_exec($command);
}

header("HTTP/1.1 301 Moved Permanently");
header( 'Location: ' .'/compiled/'. $css_file ) ;




