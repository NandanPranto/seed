<!DOCTYPE html>
<html>
<head>
	<title>products</title>
</head>
<body>
	<h2>List of products</h2>
	<table>
		<thead>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Category Name</th>
		</thead>
		<tbody>
			@foreach($products as $p)
				<tr>
					<td>{{ $p->id }}</td>
					<td>{{ $p->title }}</td>
					<td>{{ $p->name }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>