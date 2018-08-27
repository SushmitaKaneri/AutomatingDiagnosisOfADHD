<html>
<head><title>Test</title>
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 10%;
  height: 30px;
  background-color: #2196F3;
  text-align: center;
  line-height: 30px;
  color: white;
}
</style>


<script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 5);
  function frame() {
    if (width >= 30) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>
<style type="text/css">
	 input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border-radius: 3px;
}
button:hover,a:hover{
	box-shadow: 2px 2px 2px 2px grey;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top+50
            }, 1000);
            return false;
        }
    });
});

</script>
</head>
<body onload=move()>
<div id="myProgress">
  <div id="myBar">30%</div>
</div>
<form  action="mark.php" method="post">
<div id="1" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<img src="media/1.gif" height="120" width="270">
	<input type="text" name="a"/>
	<br><br><br><br>
	<center>
      <a href="#2" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;" id="b" type="submit" name="submit">Next</a>
      </center>
</div>
<div id="2" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<audio controls>
  <source src="media/fan.m4a" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<input type="text" name="b"/>
	<br><br><br><br>
	<center>
      <a href="#3" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;"  name="submit">Next</a>
      </center>
</div>
<div id="3" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<img src="media/2.jpg" height="120" width="270">
	<input type="text" name="c"/>
	<br><br><br><br>
	<center>
      <a href="#4" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;"  name="submit">Next</a>
      </center>
</div>
<div id="4" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<audio controls>
  <source src="media/cat.m4a" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
	<input type="text" name="d"/>
	<br><br><br><br>
	<center>
      <a href="#5" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;"  name="submit">Next</a>
      </center>
</div>
<div id="5" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<img src="media/3.png" height="120" width="270">
	<input type="text" name="e"/>
	<br><br><br><br>
	<center>
      <a href="#6" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;"  name="submit">Next</a>
      </center>
</div>
<div id="6" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<audio controls>
  <source src="media/bat.m4a" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
	<input type="text" name="f"/>
	<br><br><br><br>
	<center>
      <a href="#7" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;"  name="submit">Next</a>
      </center>
</div>
<div id="7" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<img src="media/4.png" height="120" width="270">
	<input type="text" name="g"/>
	<br><br><br><br>
	<center>
      <a href="#8" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;"  name="submit">Next</a>
      </center>
</div>
<div id="8" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<audio controls>
  <source src="media/listen.m4a" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
	<input type="text" name="h"/>
	<br><br><br><br>
	<center>
      <a href="#9" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;"  name="submit">Next</a>
      </center>
</div>
<div id="9" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<img src="media/5.jpg" height="120" width="270">
	<input type="text" name="i"/>
	<br><br><br><br>
	<center>
      <a href="#10" style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;"  name="submit">Next</a>
      </center>
</div>
<div id="10" style="border-radius: 5px;box-shadow: 2px 2px 2px 2px grey; height: 55%;width: 30%;margin-left: 30%;margin-top:10%;padding: 20px; padding-top: 7%">
	<audio controls>
  <source src="media/monkey.m4a" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
	<input type="text" name="j"/>
	<br><br><br><br>
	<center>
      <button style="border-radius: 5px;box-shadow: 2px grey;background-color: #2196F3;color: white; font-size: 22px; padding: 15px;";type="submit" name="submit">Submit</button>
      </center>
</div>
</form>
</body>
</html>