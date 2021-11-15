<?php

$dir = '/Users/kothet/Downloads/a820d31e-b878-4588-8884-fc3a632629fd';

$files = scandir($dir);

$i = 1;
foreach($files as $file){
    if(strlen($file) >10 ) {
        if (strpos($file,'_1512x.png') !== false) {
            // var_dump($file);
        rename($dir.'/'.$file, $dir.'/new/main'.$i++.'.png');
        }
    }
}