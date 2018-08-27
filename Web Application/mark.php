
<?php
$radioVal = $_POST["a"];
$radioVal1 = $_POST["b"];
$radioVal2 = $_POST["c"];
$radioVal3 = $_POST["d"];
$radioVal4 = $_POST["e"];
$radioVal5 = $_POST["f"];
$radioVal6 = $_POST["g"];
$radioVal7 = $_POST["h"];
$radioVal8 = $_POST["i"];
$radioVal9 = $_POST["j"];
$inattentive=0;
$correct=0;

function writeit($handle,$line)
{
fwrite($handle,$line);
}

$my_file = '/opt/lampp/htdocs/webapp/file.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$heading= "<h3 style='color:#2196F3;'>*Results of Audio/Visuals Test</h3>";
writeit($handle,$heading);
$heading1= "<h4>#Following are incorrect answers given by child:</h4>";
writeit($handle,$heading1);

if($radioVal != "CAPTCHA")
{
    writeit($handle,"- Child has answered: ".$radioVal);
    $inattentive=$inattentive+1;
}
else $correct=$correct+1;

if(strtoupper($radioVal1) == "FAN")
{
    writeit("- Child has answered: ".$radioVal1);
    $inattentive=$inattentive+1;
}
else $correct=$correct+1;

if($radioVal2 == "morning")
{
    writeit($handle,"- Child has answered: ".$radioVal2);
    $inattentive=$inattentive+1;
}else $correct=$correct+1;


if(strtoupper($radioVal3) == "CAT")
{
    writeit($handle,"- Child has answered: ".$radioVal3);
    $inattentive=$inattentive+1;
}else $correct=$correct+1;


if($radioVal4 == "North")
{
    writeit($handle,"- Child has answered: ".$radioVal4);
    $inattentive=$inattentive+1;
}else $correct=$correct+1;


if(strtoupper($radioVal5) == "BAT")
{
    writeit($handle,"- Child has answered: ".$radioVal5);
    $inattentive=$inattentive+1;
}else $correct=$correct+1;


if($radioVal6 == "cultured")
{
    writeit($handle,"- Child has answered: ".$radioVal6);
    $inattentive=$inattentive+1;
}else $correct=$correct+1;


if(strtoupper($radioVal7) == "LISTEN")
{
    writeit($handle,"- Child has answered: ".$radioVal7);
    $inattentive=$inattentive+1;
}else $correct=$correct+1;


if($radioVal8 == "schoolchildren")
{
    writeit($handle,"- Child has answered: ".$radioVal8);
    $inattentive=$inattentive+1;
}else $correct=$correct+1;


if(strtoupper($radioVal9) == "MONKEY")
{
    writeit($handle,"- Child has answered: ".$radioVal9);
    $inattentive=$inattentive+1;
}else $correct=$correct+1;


	writeit($handle,"- <b>Correct answers = " .$correct."</b>",0);
    writeit($handle,"- <b>Incorrect answers = ".$inattentive."</b>",0);

header("location: pq.html"); 


?>