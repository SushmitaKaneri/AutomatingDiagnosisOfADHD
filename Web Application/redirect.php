
<?php
$s = $_GET["score"];


function writeit($handle,$line)
{
fwrite($handle,$line);
}

$my_file = '/opt/lampp/htdocs/webapp/file.txt';
$handle = fopen($my_file, 'w+') or die('Cannot open file:  '.$my_file);
writeit($handle,"<br/>- Child has answered: ".$s." correctly out of 4");


header("location: childtest.php"); 


?>
