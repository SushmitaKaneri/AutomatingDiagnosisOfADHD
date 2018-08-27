
<?php
$radioVal = $_POST["radio"];
$radioVal1 = $_POST["radio1"];
$radioVal2 = $_POST["radio2"];
$radioVal3 = $_POST["radio3"];
$radioVal4 = $_POST["radio4"];
$radioVal5 = $_POST["radio5"];
$radioVal6 = $_POST["radio6"];
$radioVal7 = $_POST["radio7"];
$radioVal8 = $_POST["radio8"];
$radioVal9 = $_POST["radio9"];
$radioVal10 = $_POST["radio10"];
$radioVal11 = $_POST["radio11"];
$radioVal12 = $_POST["radio12"];
$radioVal13 = $_POST["radio13"];
$radioVal14 = $_POST["radio14"];
$radioVal15 = $_POST["radio15"];
$radioVal16 = $_POST["radio16"];
$radioVal17 = $_POST["radio17"];
$radioVal18 = $_POST["radio18"];
$inattentive=0;
$hyper=0;

function writeit($line,$i)
{
$my_file = '/opt/lampp/htdocs/webapp/file.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
if ($i==1)
{
$heading= "<h3 style='color:#2196F3;'>*Results of Parent's Questionnaire</h3>";
fwrite($handle,$heading);
fwrite($handle, $line);
}
else
fwrite($handle, $line);
}


if($radioVal == "Yes")
{
    writeit("- Child often fail to give close attention to details or makes careless mistakes in schoolwork, work, or during other activities",1);
    $inattentive=$inattentive+1;
}


if($radioVal1 == "Yes")
{
    writeit("- Child often has difficulty sustaining attention in tasks or play activities",0);
    $inattentive=$inattentive+1;
}

if($radioVal2 == "Yes")
{
    writeit("- Child often does not seem to listen when spoken to directly",0);
    $inattentive=$inattentive+1;
}


if($radioVal3 == "Yes")
{
    writeit("- Child often does not follow through on instructions and fails to finish school work, chores, or duties in the work place",0);
    $inattentive=$inattentive+1;
}


if($radioVal4 == "Yes")
{
    writeit("- Child often has difficulty organizing tasks and activities",0);
    $inattentive=$inattentive+1;
}


if($radioVal5 == "Yes")
{
    writeit("- Child often avoids or is reluctant to engage in tasks that require sustained mental effort",0);
    $inattentive=$inattentive+1;
}


if($radioVal6 == "Yes")
{
    writeit("- Child often loses things necessary for tasks or activities",0);
    $inattentive=$inattentive+1;
}


if($radioVal7 == "Yes")
{
    writeit("- Child often easily distracted by extraneous stimuli",0);
    $inattentive=$inattentive+1;
}


if($radioVal8 == "Yes")
{
    writeit("- Child oftenly is forgetful in daily activities",0);
    $inattentive=$inattentive+1;
}


if($radioVal9 == "Yes")
{
    writeit("- Child often fidgets with or taps hands or squirms in seat",0);
    $hyper=$hyper+1;
}

if($radioVal10 == "Yes")
{
    writeit("- Child often leaves seat in situations when remaining seated is expected",0);
    $hyper=$hyper+1;
}


if($radioVal11 == "Yes")
{
    writeit("- Child often runs about or climbs in situations where it is inappropriate",0);
    $hyper=$hyper+1;
}

if($radioVal12 == "Yes")
{
    writeit("- Child often unable to play or engage in leisure activities quietly",0);
    $hyper=$hyper+1;
}


if($radioVal13 == "Yes")
{
    writeit("- Child often 'on the go' acting as if 'driven by a motor'",0);
    $hyper=$hyper+1;
}


if($radioVal14 == "Yes")
{
    writeit("- Child often talks excessively",0);
    $hyper=$hyper+1;
}


if($radioVal15 == "Yes")
{
    writeit("- Child often blurts out answers before questions have been completed",0);
    $hyper=$hyper+1;
}


if($radioVal16 == "Yes")
{
    writeit("- Child often has difficulty awaiting turn",0);
    $hyper=$hyper+1;
}


if($radioVal17 == "Yes")
{
    writeit("- Child often interrupts or intrudes on others",0);
    $hyper=$hyper+1;
}


if($radioVal18 == "Yes")
{
    writeit("- Above symptoms are seen for more than or equal to 6 months",0);
    writeit("- <b>Inattentive symptoms = " .$inattentive."</b>",0);
    writeit("- <b>Hyperactive & Impulsive symptoms = ".$hyper."</b>",0);
}
else
{
	writeit("- <b>Inattentive symptoms = " .$inattentive."</b>",0);
    writeit("- <b>Hyperactive & Impulsive symptoms = ".$hyper."</b>",0);
}
header("location: information.html"); 

?>