<?php
    session_start();
    $msg="";
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
        $mailid=$_POST['email'];
        $name=$_POST['name'];
        $msg='<html><body><br><b>Contact: '.$_POST['contact']."</b>";
        $mymail="skaneri7.sk@gmail.com";  
        $headers = "MIME-Version: 1.0\r\n";
        //Set the content-type to html
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";      

      
            $sub1= "New Report from ".$name;
			if ($fh = fopen('/home/sk/Desktop/ADHD/file0.txt', 'r')) {
             while (!feof($fh)) {    
               $line = fgetc($fh);
              if($line=="-" || $line=="*" || $line=="#")
              {
                $msg=$msg."<br>".$line;
              }
              else{
                $msg=$msg.$line;
              }
			 }
			}
			fclose($fh);
            if ($fh = fopen('/opt/lampp/htdocs/webapp/file.txt', 'r')) {
             while (!feof($fh)) {    
               $line = fgetc($fh);
              if($line=="-" || $line=="*" || $line=="#")
              {
                $msg=$msg."<br>".$line;
              }
              else{
                $msg=$msg.$line;
              }
          
    }
    $msg=$msg."</body></html>";
    fclose($fh);
}
            echo $msg;
            $result1=@mail($mailid,$sub1,$msg,$headers);
            

           if($result1 == TRUE) 
           {
            header("location: home.html"); 
           }
   }   



?>



