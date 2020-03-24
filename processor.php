<?php

$filename=$_POST["firstname"];

$fh = fopen($filename.".txt", 'w') or die ("Could not create file");

$name =$_POST["firstname"]." ".$_POST["secondname"];
$email_add =$_POST["email_address"];
$comment =$_POST["comment"];
$text = <<<_END
$name
$email_add
$comment
_END;

fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File ".$filename." written successfully";
?>