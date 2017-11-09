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

<style>
input[type=submit] {
    background-color: #cc0000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

input[type=file] {
  /*  border:3px solid grey; */
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    background-color: rgba(137, 137, 137, 0.44);
    width: 350px;
}

textarea[name=text] {
  width: 350px;
  height: 100px;
  padding: 15px 32px;
}

input[type=text] {
  width: 350px;
  padding: 15px 32px;
}

</style>

<body>
  <div class="container">
	   <img class="logo" src="images/logo.png" width="35%"/>
     <article>
	      <center>
        <img class="grafik" src="images/grafik.png" width="30%">
		      <img class="banner" src="images/banner.png" width="25%">
          <br>
          <br>
	     <p class="intro">Er du kreativ og vild med gør-det-selv projekter? Og kunne du tænke dig, at vinde eksklusive rabatter i din Bauhaus? Det eneste du skal gøre er, at tage et foto hvor du viser dit projekt frem og uploade det her på siden.
         Hver måned er der en ny rabat på højkant og en vinder vil blive trukket blandt månedens forslag.</p>
        <br>
      <form action="upload.php" method="post" enctype="multipart/form-data">
          <p class="form-text">Vælg et billede:<br><br><input type="file" name="file" id="file"></p>
          <p class="form-text">Din e-mailadresse:<br><br><input type="text" name="email"></p>
          <p class="form-text">Fortæl om dit billede:<br><br><textarea name="text" rows="7" cols="50"></textarea></p>
          <p class="form-text"><input type="submit" value="Upload"></p>
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
	</article></div>
</body>
</html>
