</<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<style>
		body{
			background:rgb(139, 214, 173);
			font-family:fraunces;
		}
		*{
			box-sizing: border-box;
		}
		input[type=text], select , textarea{
			width:100%;
			padding:12px;
			border:1 px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}
		input[type=submit]:hover{
background-color: #45a049;
		}
		.container{
			border-radius: 5px;
			background:rgb(139, 214, 173);
			padding:20px;
		}
	</style>
</head>
<body>
<h1  style="font-family: fraunces">Register covid-19 health officer</h1>
<div class="container">
	<form method="post" action="officersaction">
		{{ csrf_field() }}
		<div>
			
			<label>Covid-19 Health Officers name</label>
			<input type="text" name="name" placeholder="Covid-19 Health Officers name">
		</div>
		<div>
			<label>Hospital Attachment</label>
			<input type="text" name="hospitalattachment" placeholder="Hosiptal Attachment">
		</div>
		<div>
			
			<input type="submit" value="Register an officer">
		</div>
		
	</form>
	<a href="/home" style="text-decoration: none; font-family: fraunces; font-size: 20px; border:1px solid lightgreen; padding: 2px; background: lightgreen; color:black;"><b>Back</b></a>
</div>
</body>
</html>