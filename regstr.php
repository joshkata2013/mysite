<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Meambership</title>
<link  rel="shortcut icon" href="favicon.bmp" type="image/ico" />  
      <link rel="stylesheet" href="csslog/style.css">
      <link rel="stylesheet" href="csslog/stylemob.css">

  
</head>

<body>
<script type="text/javascript">

var my_image = new Image();
my_image.src = 'mycoolimage.jpg';
var my_image2 = new Image();
 
// notify the user that the image has been preloaded, and reveal the
// button to use the preloaded image
function notify()  {
    document.getElementById('preloadbutton2').style.display = 'none';
    document.getElementById('after_preload').style.display = 'block';
}
 
function preload() {
    my_image2.onload = notify;
    my_image2.src = 'bigsaturn.jpg';
}
 
// using only the file name, we can take advantage of the preloaded image
function use_preloaded_image() {
    document.getElementById('saturnplaceholder').src = 'bigsaturn.jpg';
}
</script><!--
<input type="button"
    id="preloadbutton2"
    value="Preload Image"
    onclick="preload();this.value='Loading. Please wait...'" />
 
<div id="after_preload" style="display: none">
<input type="button" value="Use Preloaded Image"
onclick="use_preloaded_image()" /><br />
<img src="blank.jpg" id="saturnplaceholder" width="500" />
</div>-->
  <div id="wrapper">
	<div class="join">Join Today</div>
    	<div class="lock"></div>
	        <div class="clr"></div>
    	    	<div class="login-options">Choose on of the following sign up methods.</div>
                	<a class="twitter" href="#">Twitter</a>
                    <a class="facebook" href="#">Facebook</a>
                    <a class="google" href="#">Google+</a>
                    <div class="clr"><hr /></div>
                    		<div class="mail-text">Or sign up using your email address.</div>
                            		<div class="forms">
                                    <form action="" method="post" name="register">
                                    <input name="fullname" type="text" value="Enter your first name..."  onClick="border: 1px solid #30a8da;" id="fname"/>
                                     <input name="fullname" type="text" value="Enter your surname..."  onClick="border: 1px solid #30a8da;" id="sname"/>                                  <input name="email" type="text" value="Enter your email address..." onClick="border: 1px solid #30a8da;" id="mail"/>
                                    <input name="password" type="password" value="Enter a password..." onClick="border: 1px solid #30a8da;" id="password"/>
                                    </form>
                                    </div>
						<a class="create-acc" href="#">Create My Account</a>
</div>
<div class="footer">Powered by <a href="http://365psd.com/day/4-123/" target="_blank">Telenet Solution</a></div>
  
  
</body>
</html>
