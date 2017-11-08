<!DOCTYPE html>
<html lang="da-DK">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>BAUHAUS</title>
   <meta name="description" content="Bauhaus" />
   <meta name="keywords" content="Bauhaus,kontakt" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/stylesheet.css">
</head>
	<script src="js/js-script.js"></script>
<body>

<div class="container">
<header>
	<img class="bauhaus-img" src="images/bauhaus-logo.png" width="75%"/>
</header>


<nav>
  <a href="#" id="menu-icon"></a>
  <ul>
	<li><a class="active" href="index.html">Forside</a></li>
  </ul>
</nav>


<article>
	<center>
		<img class="img-responsive img-hover" src="images/23163654_10156910345178569_63175005_n.png" width="40%">
	</center>	
	
	<center><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
<p>Billede:<br /><input type="file" name="file" id="file"></p>
<p>E-mail adresse:<br /><input type="text" name="email"></p>
<p>Besked:<br /><textarea name="text" rows="10" cols="30"></textarea></p>
<p>Klik på knappen "Send" for at deaktivere knappen for upload af filer.</p>
<p><input type="submit" value="Send"></p>
</form>
	</center><br>

<center>

<?php
// tilføj koden fra showimages her
    	$sti = "./minebilleder"; // delete this line if your PHP 

			// find files in folder  and sort by filename
			$allFiles = scandir($sti,1);
			sort($allFiles);
			// and show them BUT only if they are jpg
			$howMany = count($allFiles);
			// howmany kan udskiftes med et antal, som er det antal billeder der vises vandret
			for($i=0;$i<$howMany;$i++){
				if (".jpg"==substr($allFiles[$i],-4)) {
				echo "
				<article class='show' onClick=\" swop(this) \">		
					<img src=\"$sti/$allFiles[$i]\" />
					
					<p>";
				
				include("./mine-tekster/".$allFiles[$i].".txt");
					echo "</p>
					
					<div class='cover' onClick=\" swop2(this) \"></div>
				</article>	";
				} else {
					echo("<!-- ".$allFiles[$i]."-->");
				}
			}





?>	
<script>
	function myFunction() {
	var x=document. getElementById("myFile");
	x.disabled = true; 
}
	</script>
	</center>
	
	
<footer>Skrevet af Ann Cathrine, Liza, Maj &amp; Sarah
   <article><a href="https://www.facebook.com/BAUHAUSDK">
	<img src="images/facebook-3-512.png" alt="Facebook" style="width:30px;height:30px;"></a>
	<a href="https://plus.google.com/113958749870732519892"></a>
	<img src="images/gp.png" alt="Google" style="width:30px;height:30px;">
	<a href="https://www.instagram.com/bauhaus_danmark/"></a>
	<img src="images/white-instagram.png" alt="Instagram" style="width:30px;height:30px;">
	<a href="https://www.youtube.com/user/BAUHAUSdk"></a>
	<img src="images/2000px-YouTube_light_icon_(2017).svg.png" alt="Youtube" style="width:30px;height:30px;">
	<a href="https://www.pinterest.dk/bauhausdanmark/"></a>
	<img src="images/pinterest_logo.png" alt="pinterest" style="width:30px;height:30px;"></article>
	</footer>
	
	</article></div>	
</body>
</html>
