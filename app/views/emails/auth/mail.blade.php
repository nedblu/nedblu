<!DOCTYPE html>
<html lang="es">
<head>
  	<meta charset="utf-8">
  	<title>Contact Card</title>
	<!-- <link rel="stylesheet" href="css/info.css"> -->
</head>
<body style="background-color:#e6e9ed;margin:0 auto;padding:2em;">
	<div id="card" style="text-align:center;margin:0 auto;max-width:600px;background-color:#e0e4e9;-webkit-box-shadow:0 0 4px #ccc;-moz-box-shadow:0 0 4px #ccc;-ms-box-shadow:0 0 4px #ccc;-o-box-shadow:0 0 4px #ccc;-webkit-box-shadow:0 0 4px #ccc;-moz-box-shadow:0 0 4px #ccc;-ms-box-shadow:0 0 4px #ccc;-o-box-shadow:0 0 4px #ccc;box-shadow:0 0 4px #ccc;-webkit-border-radius:.5em;-moz-border-radius:.5em;-ms-border-radius:.5em;-o-border-radius:.5em;-webkit-border-radius:.5em;-moz-border-radius:.5em;-ms-border-radius:.5em;-o-border-radius:.5em;border-radius:.5em;">
		<div id="head" style="padding:1em 0;">
			<img src="img/blu.png" alt="" style="width:90px;height:auto;display:inline-block;vertical-align:middle;"><!--
			--><div id="title" style="display:inline-block;vertical-align:middle;">
				<h1 style="padding:0 .5em;font-size:2em;letter-spacing:2px;font-family:'Voces',cursive;color:#434a54;-webkit-text-shadow:0 0 1px #434a54;-moz-text-shadow:0 0 1px #434a54;-o-text-shadow:0 0 1px #434a54;-ms-text-shadow:0 0 1px #434a54;text-shadow:0 0 1px #434a54;">Ned<span style="font-size:1em;color:#1abc9c;">BLU</span></h1>
			</div>
		</div>
		<div id="body" style="font-family:'Open Sans';padding-bottom:.5em;">
			<div id="name" style="text-align:left;padding:.5em 1em 0 1em;">
				<p class="p_title" style="border-bottom:1px dashed #1abc9c;color:#656d78;">Nombre:</p>
				<p class="p_body" style="color:#434a54;padding-left:.5em;">
					{{$nombre}}
				</p>
			</div>
			<div id="email" style="text-align:left;padding:.5em 1em 0 1em;">
				<p class="p_title" style="border-bottom:1px dashed #1abc9c;color:#656d78;">Email:</p>
				<p class="p_body" style="color:#434a54;padding-left:.5em;">
					{{$email}}
				</p>
			</div>
			<div id="data" style="text-align:left;padding:.5em 1em 0 1em;">
				<p class="p_title" style="border-bottom:1px dashed #1abc9c;color:#656d78;">Mensaje:</p>
				<p class="p_body" style="color:#434a54;padding-left:.5em;">
					{{$mensaje}}
				</p>
			</div>
		</div>
	</div>
</body>
</html>