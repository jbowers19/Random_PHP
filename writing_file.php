<?php

$file = "example.txt";

if ($handle = fopen($file, 'w')){

    fwrite($handle, 'I love php and this is a test message that i am writing!!');
    
    fclose($handle);
} else {
    echo "Application unable to write on file";
}



?>