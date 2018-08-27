<?php
function writeit($handle,$line)
{
fwrite($handle,$line);
}

var a=$_GET['name'];
$my_file = '/opt/lampp/htdocs/webapp/file.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$heading= "<h3 style='color:#2196F3;'>*Results of Completing Task Test</h3>";
writeit($heading);
$heading1= "<h4>#The patient has answered "+a+" correct answers out of 4</h4>";
writeit($heading1);

?>

var cmd="start cmd\ b python3 C:\Users\Jinx\PycharmProjects\ADHD\training.py"