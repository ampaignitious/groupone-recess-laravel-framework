<!DOCTYPE html>
<html>
<head>
	<title>officers</title>
</head>
<body>
<h1>All information about Covid-19 health officers</h1>


@foreach ($officers as $officer)
<li>{{officer}}</li>
@endforeach

<h1>Only Names of officers</h1>

@foreach ($officers as $officer)

<li>{{officer->name}}</li>
@endforeach

</body>
</html>