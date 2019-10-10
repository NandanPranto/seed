<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
</head>
<body>
	<h2>This is Dashboard</h2>

	@if(Session::get('userrole') == 'teacher')
		<ul>
			<li>Teacher 1</li>
			<li>Teacher 2</li>
		</ul>
	@elseif(Session::get('userrole') == 'student')
		<ul>
			<li>Student 1</li>
			<li>Student 2</li>
		</ul>
	@else
		<ul>
			<li>Admin 1</li>
			<li>Admin 2</li>
		</ul>
	@endif
	<a href="{{ URL::to('logout') }}">logout</a>

</body>
</html>